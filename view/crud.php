


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


<?php include("db.php"); ?>
<div style="display:flex;">




<?php include('includes/header.php'); ?>

<a href="agg.php"><button style="height: 75px; width:75px;background-color:red;color:black;border-radius:10px;margin-top:6px">ajiute post</button></a>
</div>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>


   


          <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>

<div style="height: 300px; width:250px;border:solid 5px white;border-radius:10px;color:white">

<div style="height: 50px; width:100% ;display:flex;justify-content: center;">
            <?php echo $row['title']; ?>
           
</div>
<img style="height: 120px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUlLbtYUNOD2j1BqYrIpPLNp4XU9H8NFEpCDeqIVboueXxI78QwHQeAxv4eMv3PeTjcVY&usqp=CAU" alt="">

            <hr color="white">

<div style="height: 50px; width:100%">

            <?php echo $row['description']; ?>
</div>


     



              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
          
        </div>
        <br>



          <?php } ?>
            
   



      
    </div>
  </div>
</main>



<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>