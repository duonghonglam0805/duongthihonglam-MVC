<?php 
    function postCreate(){
        global $connection;
        $statement = $connection->prepare("insert into posts (title, description) values (:title, :description)");
        $statement->execute([
        ':title' => $_POST['title'],
        ':description' =>  $_POST['description']]);
    }
?>