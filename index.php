<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Library</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="item1">
        <form action="insert.php" method="post">
    <p>Imie</p>
    <input type="text" name="imie">
    <p>Nazwisko</p>
    <input type="text" name="nazwisko">
    <p>Tytul</p>
    <input type="text" name="tytul"> <br>
    <input type="submit" value="Dodaj"> 
    </form>
        
        
        </div>
        <div class="item2">
        <?php
  
    $conn = new mysqli('127.0.0.1','root','','library');

    $result_autor = $conn->query("SELECT * FROM autorzy");
    $result_tytuly = $conn->query("SELECT * FROM tytuly");

    echo("<form action='connect.php' method='POST'  class='insert'>");
    echo("<select name='autor'>");
    while($wiersz=$result_autor->fetch_assoc() ){
        echo("<option value='".$wiersz['id_autor']."'>".$wiersz['imie']." ".$wiersz['nazwisko']."</option>");
    }
    echo("</select>");

    echo("<select name='tytul'>");
    while($wiersz=$result_tytuly->fetch_assoc() ){
        echo("<option value='".$wiersz['id_tytul']."'>".$wiersz['tytul']."</option>");
    }
    echo("</select>");

    echo("<input type='submit' value='DODAJ'>");
    echo("</form>");
    ?>
        
      
        
        </div>

        <div class="item3">
        <?php
   
    $conn = new mysqli('127.0.0.1','root','','library');

    $result = $conn->query("SELECT id_connect, imie, nazwisko, tytul, isbn FROM connect, autorzy, tytuly WHERE connect.id_autor=autorzy.id_autor AND connect.id_tytul=tytuly.id_tytul");

    echo("<table class='tabela'>");
    echo("<tr>
    <th>id_connect</th>
    <th>imie</th>
    <th>nazwisko</th>
    <th>tytul</th>
    <th>isbn</th>
    <th>Delete</th>
    </tr>");
    while( $wiersz = $result->fetch_assoc() ) {
        echo("<tr class>");
        echo("<td>".$wiersz['id_connect']."</td>".
        "<td>".$wiersz['imie']."</td>".
        "<td>".$wiersz['nazwisko']."</td>".
        "<td>".$wiersz['tytul']."</td>". 
        "<td>".$wiersz['isbn']."</td>".
        "<td>
        <form action='delete.php' method='POST'>
        <input type='hidden' name='id' value=".$wiersz['id_connect'].">
        <input type='submit' value='delete'>
        </form> </td>"
    );
        echo("</tr>");
    }
    echo("</table>");
    ?>
        </div>
    </div>
    
</body>
</html>