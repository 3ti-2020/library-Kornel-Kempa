<?php
 $conn = new mysqli('127.0.0.1','root','','library');
 $id = $_POST['id'];
 $sql = "DELETE from connect WHERE id_connect='$id'";
 mysqli_query($conn, $sql);
 header('Location: http://127.0.0.1/library/index.php');
?>