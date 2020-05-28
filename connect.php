<?php
 $conn = new mysqli('127.0.0.1','root','','library');
 $sql = "INSERT INTO connect(id_connect, id_autor, id_tytul) VALUES (NULL , '".$_POST['autor']."', '".$_POST['tytul']."')";
 mysqli_query($conn, $sql);
 header('Location: http://127.0.0.1/library/index.php');
?>