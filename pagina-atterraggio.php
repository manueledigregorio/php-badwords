<?php
  $name = $_GET['name'];
  $password = $_GET['password'];

  var_dump($name);

  
//pass
  $cerca_testo = str_ireplace($password, "***", $name );

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
  4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384- 
  HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


  <title>Document</title>
</head>
<body>
  <div class="container my-5">
    <h1 class="mx-5">il tuo testo: <?php echo $name ?> il tuo testo è lungo: <?php echo strlen($name) ?> </h1>
    <h1 class="mx-5">il tuo testo password: <?php echo $password ?></h1>

    <p>PAROLE CENSURATE :   <?php echo $cerca_testo , ' LA LUNGHEZZA è DI: '. ' ' .strlen($name) ?></p>

  </div>
</body>
</html>