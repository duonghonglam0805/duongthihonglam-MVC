<?php 
    require ('./models/post.edit.model.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!empty($_POST['title']) and !empty($_POST['description'])) {
            $post = postUpdate();
            header('location: /post');
        }
    }
    $id = $_GET["id"] ? $_GET["id"] : null;
    if (isset($id)){
        $post = postEdit($id);
    }
?>
<?php 
    require('./views/post/post.edit.php') ;
?>