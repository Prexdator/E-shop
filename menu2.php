
 <html lang="cz">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="autor" content="webiix.cz">

  <title>Reggy-shop Vše pro dekoraci</title>
  
  <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<style>
<style>
.vodorovne button {
    display: block;
    font-family: Segoe UI;
    color: #000;
    font-weight: bold;
    padding: 1em 0;
    width: 100px;
    text-align: center;
    text-decoration: none;
    background: #f9f9fa;
    transition: color .3s, box-shadow .3s;
    box-shadow: inset 0px 0 0 0 #f9f9fa;
}

.vodorovne button:hover {
    box-shadow: inset 100px 0 0 0 #f9f9fa;
    color: #fff;
    background: #f9f9fa;
}
</style>

</head>

 <form action="index.php" method="post">
 <div id="main-menu" class="list-group vodorovne ">

<?php

    $sql= "SELECT nazev FROM leftmenu";
              
         $result = mysqli_query($mysqli, $sql);

 while($row = mysqli_fetch_assoc($result)) {
          
    $nazev = $row['nazev'];
      
        

        
        
        echo '
 
 

            <button type="submit" name="trida" value="'.$nazev.'" class="list-group-item text-left" style="color:#1a8cff; width: 100%;" >'.$nazev.'</button>
          ';
          
          }
          echo'
    </form>
   ';
    
    ?>