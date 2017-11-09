<?php
//Get only the approved comments
$args = array(
    'status' => 'approve'
);

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

// Comment Loop
if ( $comments ) {
    foreach ( $comments as $comment ) {

        echo "<div class='container-comment'><span class='author'>". $comment->comment_author ."</span><span class='data'>". $comment->comment_date ."</span><p class='comment-content'>".$comment->comment_content."</p> </div>";

    }
} else {
    echo 'No comments found.';
}
?>