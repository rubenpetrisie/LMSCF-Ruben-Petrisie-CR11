<?php 

require_once 'db_conn11.php';

if ($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM animals WHERE id =$id";
    if($connect->query($sql) === TRUE)
    {
        echo "<center><h3>succesfuly deleted </h3></center>";
        header("refresh:1 url=admin.php");
    } else {
        echo "error dhu check your code again";
    }

}
$connect->close();

?>