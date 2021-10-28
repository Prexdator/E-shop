          <?php
        
          $mysqli = new mysqli('c072um.forpsi.com', 'f135100', '83k4LUpu', 'f135100');                                                                                     
if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 

   
     $ftp_server = "ftpx.forpsi.com";
$ftp_user_name = "webiixcz";
$ftp_user_pass = "SC4WmhEm5N";




// set up basic connection
$conn_id = ftp_connect($ftp_server);


// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

move_uploaded_file($_FILES['srcfile']['tmp_name'], "polozky/". $_FILES['srcfile']['name']);

$obrazek=$_FILES['srcfile']['name'];

       $nazev = $_POST['nazev'];
           


$zarazeni = $_POST['zarazeni'];
$trida = $_POST['trida']; 
$popis = $_POST['popis'];
$cena = $_POST['cena'];
$nakupnicena = $_POST['nakupnicena'];
$podtrida= $_POST['podtrida'];
$kusu = $_POST['kusu'];
$kod="0";
$sleva="0";
$sql = 'SELECT id FROM produkty';

         $result = mysqli_query($mysqli, $sql);

 while($row = mysqli_fetch_assoc($result)) {
        $id = $id + 1;
    }
    
     if ($zarazeni == "dekorace"){
$tridacela="DE$trida";
}

    if ($zarazeni == "tvoreni"){
$tridacela="TV$trida";
}

if ($zarazeni == "barbie"){
$tridacela="BA$trida";
}

   

$sql_statement="INSERT INTO produkty (id,nazev,kod,zarazeni,popis,cena,nakupnicena,trida,sleva,kusu,obrazek,podtrida) VALUES ('$id','$nazev','$kod','$zarazeni','$popis','$cena','$nakupnicena','$tridacela','$sleva','$kusu','$obrazek','$podtrida')";
mysqli_query( $mysqli,$sql_statement);

                            echo '<center> Úspěšně uloženo </center>  ';
      

            







           
                
                ?>
 <script>
setTimeout(function(){
window.location.href="http://webiix.cz/adprodukt.php";
}, 4000);

</script>