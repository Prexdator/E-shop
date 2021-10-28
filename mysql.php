 <?php
       
     
          $mysqli = new mysqli('c072um.forpsi.com', 'f135100', '83k4LUpu', 'f135100');                                                                                     
if ($mysqli->connect_error) {
    die('Nepodaøilo se pøipojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
} 

?>