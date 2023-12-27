<?php 
    require('./models/post.delete.model.php');
    $id = $_GET['id'] ? $_GET['id'] : null;
    if (isset($id))
    {
        postDelete($id);
        header('Location: /post');

    }

?>
<?php 
    require('./views/post/post.delete.php'); 
?>