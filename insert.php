<?php
 $conn = new mysqli('127.0.0.1','root','','library');
 $sql = "INSERT INTO autorzy (id_autor, imie, nazwisko) VALUES (NULL, '".$_POST['imie']."', '".$_POST['nazwisko']."') ";
 mysqli_query($conn, $sql);
 header('Location: http://127.0.0.1/library/index.php');
?>

<?php
$conn = new mysqli('127.0.0.1','root','','library');
 $isbn = rand(0,999);
 $sql = "INSERT INTO tytuly(id_tytul, tytul, isbn) VALUES (NULL , '".$_POST['tytul']."', $isbn) ";
 mysqli_query($conn, $sql);
 header('Location: http://127.0.0.1/library/index.php');
?> 