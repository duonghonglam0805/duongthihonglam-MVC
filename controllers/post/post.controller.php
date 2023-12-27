<?php 
    require('models/post.model.php');
    $posts = getAllPost();
?>
<?php
    require('views/post/post.php');