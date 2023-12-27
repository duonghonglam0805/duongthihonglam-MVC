<?php 
    function postDelete($id){
        global $connection;
        $statement = $connection->prepare("delete from posts where id = :id");
        $statement->execute([':id' => $id]);
    }
?>