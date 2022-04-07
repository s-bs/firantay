<?php
include 'connection.php';
$query = "SELECT * from place_to_visit";
?>
<html>
    <head>   
        <link rel="stylesheet" href="home.css"/>
        <title>HOME</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        

        
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        
<header class="container-fluid sticky-top opacity-75"  style="background-color:#ffffff;" >
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  " >

        <div class="container-fluid ">
          
         <div class="logo text-left ">
           <img src="logo.jpg">
         </div>
          

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  justify-content-end  " id="navbarNavAltMarkup">
            <div class="navbar-nav  ">
              <a class="nav-link active " aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Destinations</a>
              <a class="nav-link" href="#">About us</a>
            </div>
          </div>
        </div>
    </nav>
</header>


 <div class="hero">
      <img src="solukhumbu.jpg" class="img-fluid rounded img-thumbnail" >
 </div>


<div class="container-fluid fs-3" style="background-color:#8acbed;"><b><i>PLACE TO VISIT</i></b>

</div>

<div class="container-fluid " style="background-color:#8acbed ;" >
  <div class="row">
    <div class="col-9">
      <div class="row">
        <?php
foreach ($db->query($query) as $row) 
      {
        ?>
        <div class="col-md-4 mb-2">
          <img class="img-thumbnail" src="/responsive-design/assets/placetovisit/<?php echo $row['file_name'] ?>">
          <h3><?php echo $row['name'] ?></h3>
          <p><?php echo $row['description'] ?></p>
        </div>
        <?php
      }
      ?>
       </div>

    </div>
    <div class="col-3 ">
     <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    
  </div>
</div>

<footer class="container-fluid "   style="background-color:#ffffff ;">
  <div class="container-fluid text-center ">VISIT NEPAL</div>
   <div class="container-fluid text-center">2022</div>
</footer>



    </body>

</html>