    <?php 
        function postUpdate(){
            global $connection;
            $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
            $statement->execute([
                ':title' => $_POST['title'],
                ':description' => $_POST['description'],
                ':id' => $_POST['id']]);
        }
        function postEdit($id){
            global $connection;
            $statement = $connection->prepare('select * from posts where id = :id');
            $statement->execute([':id' => $id]);
            $post = $statement->fetch();
            return $post;
        }
    ?>