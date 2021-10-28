 <?php
        
          $mysqli = new mysqli('c072um.forpsi.com', 'f135100', '83k4LUpu', 'f135100');                                                                                     
if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 

         $nazev = $_POST['nazev'];
     $ftp_server = "ftpx.forpsi.com";
$ftp_user_name = "webiixcz";
$ftp_user_pass = "SC4WmhEm5N";




// set up basic connection
$conn_id = ftp_connect($ftp_server);


// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

move_uploaded_file($_FILES['obrkat']['tmp_name'], "polozkykat/". $_FILES['obrkat']['name']);

$obrazek=$_FILES['obrkat']['name'];

 
           

$sql = 'SELECT id FROM leftmenu';

         $result = mysqli_query($mysqli, $sql);

 while($row = mysqli_fetch_assoc($result)) {
        $id = $id + 1;
    }
    
  

   

$sql_statement="INSERT INTO leftmenu (ID,nazev,obrazek) VALUES ('$id','$nazev','$obrazek')";
mysqli_query( $mysqli,$sql_statement);

                            echo '<center> Úspěšně uloženo </center>  ';
      

             echo $nazev;







           
                
                ?>
 <script>
setTimeout(function(){
window.location.href="http://webiix.cz/leftmenu.php";
}, 4000);

</script>