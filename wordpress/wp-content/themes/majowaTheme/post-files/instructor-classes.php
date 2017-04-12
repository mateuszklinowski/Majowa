<?php
/**
 * Created by PhpStorm.
 * User: Klinek
 * Date: 22.03.2017
 * Time: 01:53
 */
?>

<h3>Instruktor:</h3>

<?php
$custom = get_post_custom();
$stringFromCustom = $custom['postid'][0];
$explodedString = explode('"', $stringFromCustom);
$postIDs= array();
foreach ($explodedString as $postID) {
    $postID = intval($postID);
    if ($postID!==0) {
        array_push($postIDs, $postID);
    }
}
$arg = array(
    'posts_per_page' => 4,
    'post_type' => 'post',
    'category__in' => 11,
    'post__in' => $postIDs
);

$last4POSTS = new WP_Query($arg);

if ($last4POSTS->have_posts()) {

    while ($last4POSTS->have_posts()) {
        $last4POSTS->the_post();
        get_template_part('post-files/teacher-classes-aside');

    }
}


?>
