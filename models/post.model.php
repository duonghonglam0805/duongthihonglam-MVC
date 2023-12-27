<?php 
    // require ('./database/database.php');
    function getAllPost(){
        global $connection;
        $statement = $connection->prepare("select * from posts");
        $statement->execute();
        $posts = $statement->fetchAll();    
        return $posts;
    }
?>