<?php 
    require('./models/post.create.model.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['title']) and !empty($_POST['description'])) {
            postCreate();
        header('location: /post');
        }
    }
?>
<?php 
    require('./views/post/post.create.php') ;
?>