<?php

/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 09.02.2017
 * Time: 11:48
 */
class DB
{

    private $conn;

    public function __construct($dbName, $host, $user, $password)
    {
        $this->conn = new PDO('mysql:dbname=' . $dbName . ';host=' . $host . ';charset=UTF8', $user, $password);
    }

    /**
     * @return array
     */
    public function getToDaysClasses()
    {
        $classes = $this->conn->prepare("
SELECT
start_hour,
end_hour,
C.post_title as class,
I.post_title as instructor
FROM wp_wcs3_schedule S
LEFT JOIN (SELECT * FROM wp_posts WHERE post_type = 'wcs3_class') C 
ON S.class_id = C.ID LEFT JOIN (SELECT * FROM wp_posts WHERE post_type = 'wcs3_instructor') I on S.instructor_id = I.ID
WHERE weekday = (WEEKDAY(NOW())+1)
ORDER BY start_hour");
        $classes->execute();
        return $classes->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllClasses()
    {
        $allCLasses = $this->conn->prepare("
        SELECT DISTINCT
C.post_title as class
FROM wp_wcs3_schedule S
LEFT JOIN (SELECT * FROM wp_posts WHERE post_type = 'wcs3_class') C 
ON S.class_id = C.ID LEFT JOIN (SELECT * FROM wp_posts WHERE post_type = 'wcs3_instructor') I on S.instructor_id = I.ID
ORDER BY class");
        $allCLasses->execute();
        return $allCLasses->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getInstructor()
    {
        /*old sql*/
        /*SELECT I.post_title as instructor, C.post_title as class FROM wp_posts I
join wp_wcs3_schedule S on I.ID = S.instructor_id
join (SELECT * FROM wp_posts WHERE post_type = 'wcs3_class') C on C.ID = S.class_id
group by (I.post_title)*/

        $allCLasses = $this->conn->prepare("SELECT I.post_title as instructor, C.post_title as class FROM wp_posts I
 join wp_wcs3_schedule S on I.ID = S.instructor_id
  join (SELECT * FROM wp_posts WHERE post_type = 'wcs3_class') C on C.ID = S.class_id
   group by (C.post_title)
");
        $allCLasses->execute();
        return $allCLasses->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getHours()
    {
        $allCLasses = $this->conn->prepare("SELECT
start_hour,
end_hour,
C.post_title as class,
weekday
FROM wp_wcs3_schedule S
LEFT JOIN (SELECT * FROM wp_posts WHERE post_type = 'wcs3_class') C 
ON S.class_id = C.ID LEFT JOIN (SELECT * FROM wp_posts WHERE post_type = 'wcs3_instructor') I on S.instructor_id = I.ID
ORDER BY weekday
");
        $allCLasses->execute();
        return $allCLasses->fetchAll(PDO::FETCH_ASSOC);

    }

}