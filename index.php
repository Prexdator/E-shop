         <?php
        
          $mysqli = new mysqli('c072um.forpsi.com', 'f135100', '83k4LUpu', 'f135100');                                                                                     
if ($mysqli->connect_error) {
    die('Nepodařilo se připojit k MySQL serveru (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
             
} 
?>
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


</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v10.0" nonce="8LNHeKJ2"></script>

  <!-- Top navigace -->
  <nav class="navbar navbar-expand-lg navbar-black bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo.png"> </a>
       <button class="navbar-toggler ml-auto" type="button" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span style=" color: red;" class="fa fa-shopping-cart fa-lg"></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars fa-lg"></span>
      </button>
<div >
      <div class="collapse navbar-collapse" id="navbarResponsive">
      
     
        <ul class="navbar-nav ml-auto" >
  
          <li class="nav-item active" >
            <a class="nav-link"  href="index.php">Domů
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link"  href="#">Inspirace</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Doprava</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Obchodní podmínky</a>
          </li>
    <div class="collapse navbar-collapse">
          <li class="nav-item">
          <a class="nav-link" href="#">
         <span style=" color: red;">
         
        <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>
          </a>
             </span>
          </li>
    
        
     <li class="nav-item">
     <a class="nav-link" href="#"> <span style=" color: red;">Prázdný košík <span></a>
             
        
                </li>
         </ul>
    


  </div>
  </div>
      </nav>   

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">


                <h2 class="my-4"><div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <a href=""><i class="fa fa-search"></i>
  </span></a>
</div></h2>


   
            <!-- column1, Vertical Dropdown Menu -->
            <?php
   include('menu2.php');
        
?>
  <div class="template-demo text-center"> 
   
     </div>
     <div class="phoneContent text-center"> 
     
         <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="fa fa-facebook"></i></button> 
         <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i class="fa fa-youtube"></i></button> 
         <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="fa fa-twitter"></i></button> 
         <button type="button" class="btn btn-social-icon btn-instagram btn-rounded"><i class="fa fa-instagram"></i></button> 
          </div>
             <div class="template-demo text-center"> 
   
     </div>
               <div class="fb"> 
   
             
               <div  class="fb-page"   data-href="https://www.facebook.com/facebook"  data-target="#phoneContent" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div> 
    </div>
 
   



    </div> 
       
        
        <div class="col-md-9">
            <!-- column 2, content goes here... -->
        </div>
    </div>

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/slidebar-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/slidebar-2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/slidebar-3.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          
          <?php
          
        $trida=$_POST['trida'];
          if ($trida ==""){
          
          $podtrida =$_POST['podtrida'];
          

             $sql= "SELECT id,nazev,zarazeni,popis,cena,kusu,obrazek FROM produkty WHERE podtrida = '$podtrida'";
              
         $result = mysqli_query($mysqli, $sql);

 while($row = mysqli_fetch_assoc($result)) {
             $id = $row['id'];
    $nazev = $row['nazev'];
        $zarazeni = $row['zarazeni'];
        $popis = $row['popis'];
        $cena = $row['cena'];
        $kusu = $row['kusu'];
                $obrazek = $row['obrazek'];
        

        
        
        echo '
   
        <div class="col-lg-4 col-md-6 mb-4">
        
            <div class="card h-100""> 
            <form action="detail.php" method="post">
          <button name="id" value="'.$id.'" class="card-img-top" style=" background-color:white;border:none; ">  
          <img class="card-img-top" src="polozky/'.$obrazek.'"height="200"  widht="100%"></button>
              <div class="card-body">
                <h4 class="card-title">';
              echo '     <button name="id" value="'.$id.'" class="card-img-top" style=" background-color:white;border:none;color:blue; widht:100%; "> '.$nazev.' </button>';
              echo '  </form> </h4>';
             
        
          
         echo '   <p></p><h6><span style=" color: green ;" > Skladem > '.$kusu.' ks</span></h6><h5><span style=" color: red ;"  class="fa-sm">'.$cena.' Kč</span></h5>' ;
            echo '      </div>
              <div class="card-footer" ">
           <form action="kosik.php" method="GET">     <button  style=" color: white ; width: 100%; background-color:red;border:none;font-size: 20px; " class="fa fa-shopping-cart fa-sm" > Vložit do košíku</button></form>
              </div>
            </div>
          </div>
        ';
                             
    }
          
       }
       else {
       
         $trida=$_POST['trida'];
                   $sql= "SELECT id,nazev,zarazeni,popis,cena,kusu,obrazek FROM produkty WHERE trida = '$trida'";
              
         $result = mysqli_query($mysqli, $sql);

 while($row = mysqli_fetch_assoc($result)) {
             $id = $row['id'];
    $nazev = $row['nazev'];
        $zarazeni = $row['zarazeni'];
        $popis = $row['popis'];
        $cena = $row['cena'];
        $kusu = $row['kusu'];
                $obrazek = $row['obrazek'];
        

        
        
        echo '
   
        <div class="col-lg-4 col-md-6 mb-4">
        
            <div class="card h-100""> 
            <form action="detail.php" method="post">
          <button name="id" value="'.$id.'" class="card-img-top" style=" background-color:white;border:none; ">  
          <img class="card-img-top" src="polozky/'.$obrazek.'"  height="200" widht="100%" ></button>
              <div class="card-body">
                <h4 class="card-title">';
              echo '     <button name="id" value="'.$id.'" class="card-img-top" style=" background-color:white;border:none;color:blue;widht:100%; "> '.$nazev.' </button>';
              echo '  </form> </h4>';
             

          
             echo '   <h6><span style=" color: green ;" > Skladem > '.$kusu.' ks</span></h6><h5><span style=" color: red ;"  class="fa-sm">'.$cena.' Kč</span></h5>' ;
            echo '      </div>
              <div class="card-footer" ">
           <form action="kosik.php" method="GET">     <button  style=" color: white ; width: 100%; background-color:red;border:none;font-size: 20px; " class="fa fa-shopping-cart fa-sm" > Vložit do košíku</button></form>
              </div>
            </div>
          </div>
        ';
                             
    }}
          
       
   
            ?>
    
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
   
 
      
       <div class="row">

           <div class="col text-left">
                  <p class="m-0 text-white"> O nákupu</p>
                  <p></p>
                   <p class="m-0 text-white">Doprava a platba</p>
          <p class="m-0 text-white">Reklamační řád</p> 
           </div>
       
           <div class="col text-left">
           <p class="m-0  text-white">O nás</p>
               <p></p>
                    <p class="m-0  text-white">Kontakty</p>
                   <p class="m-0  text-white">O společnosti</p>
           </div>
            
            
           <div class="col text-left">
                    <p class="m-0  text-white">Informace</p>
                        <p></p>
                    <p class="m-0  text-white">Obchodní podmínky</p>
                          <p class="m-0 text-white">Ochrana osobních údajů</p>
                                     <p class="m-0 text-white">Výrobci</p>
           </div>   
           <div class="col text-left">
              <p class="m-0  text-white">Blog</p>
                        <p></p>
                    <p class="m-0  text-white">Články</p>
                          <p class="m-0 text-white">Návody</p>
                            
           </div>   
            <div class="col text-left">
   <p class="m-0  text-white">Kontakty</p>
       <p></p>
                    <p class="m-0  text-white">733 728 071</p>
                          <p class="m-0  text-white">Po-Pá: 7:00-18:00</p>
           </div>
               <div class="col text-left">
   <p class="m-0  text-white">Sociální sítě</p>
       <p></p>
                    <p class="m-0  text-white">Facebook</p>
                          <p class="m-0  text-white">Instagram</p>
                          <p class="m-0  text-white">Youtube</p>
                          <p class="m-0  text-white">Twitter</p>
           </div>
       </div>
   </div>
 
       
         
           
      
              
                   
                    
          <p></p>        <p></p>     
           <p class="m-0 text-center text-white">Vytvořil WX  www.webiix.cz</p>
      <p class="m-0 text-center text-white">Copyright &copy; www.reggy-shop.cz</p>
      
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
