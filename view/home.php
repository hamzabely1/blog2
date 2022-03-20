<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" initial-scale="1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" media="screen and (max-width: 640px)" href="smallscreen.css" type="text/css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="s.css">
</head>

<body>
  <header>


    <?php
    require("nav.php")



    ?>






  </header>



  <div>

    <div id="carouselExampleIndicators" class=" carousel slide car " data-ride="carousel">
      <ol class="carousel-indicators ">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner carro">
        <div class="carousel-item active">

          <img class="d-block w-100" style="height: 100%;" src="../images/prima.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../images/5.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../images/terza.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      </a>
    </div>



  </div>

  
  <div class="flex">
    <img src="imagine/depositphotos_63685293-stock-photo-colorful-ripe-fruit-inside-text (1).jpg" style="display: flex; justify-content: center;" alt="">
  </div>

  <h2 class='flex' style="color: white;">en evident</h2>


  <div class="flex">

    <div class="container">
      <div class="row flex">
        <div class="qua col-md-3 d-flex flex-column prima">
          <br>
          <a href="post1.php"><div class="savoir">
            <p> plus</p>
          </div>
</a>
        </div>

        <div class="qua col-md-3 d-flex flex-column seconda">
          <br>
          <a href="post2.php"><div class="savoir">
            <p> plus</p>
          </div>
</a>
          <br>
        </div>
        <div class="qua col-md-3 d-flex flex-column terza">

          <br>
          <a href="post3.php"><div class="savoir">
            <p> plus</p>
          </div>
</a>
        </div>
        <div class="qua col-md-3 d-flex flex-column ultima">
          <br>
          <a href="post4.php"><div class="savoir">
            <p> plus</p>
          </div>
</a>
        </div>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  <footer>

  </footer>
</body>

</html>