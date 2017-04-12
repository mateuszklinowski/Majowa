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

    public function __construct($dbName, $host,$user, $password)
    {
        $this->conn = new PDO('mysql:dbname='.$dbName.';host='.$host, $user, $password);
    }

    /**
     * @return array
     */
    public function getToDaysClasses()
    {
        $classes = $this->conn->prepare("SELECT
start_hour,
end_hour,
C.post_title as class,
I.post_title as instructor
FROM majowa.wp_wcs3_schedule S
LEFT JOIN (SELECT * FROM majowa.wp_posts WHERE post_type = 'wcs3_class') C 
ON S.class_id = C.ID LEFT JOIN (SELECT * FROM majowa.wp_posts WHERE post_type = 'wcs3_instructor') I on S.instructor_id = I.ID
WHERE weekday = (WEEKDAY(NOW())+1)
ORDER BY start_hour");
        $classes->execute();
        return $classes->fetchAll(PDO::FETCH_ASSOC);
    }
}