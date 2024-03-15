<?php

$paragraph = $_GET['paragraphname'];

$badword = $_GET['badword']

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php

    $paragraph_length = strlen($paragraph);

    $badword_replace = str_replace($badword, "***", $paragraph)

    ?>

<div class="container-fluid d-flex justify-content-center align-items-center gap-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Lunghezza Paragrafo</h5>
    <p class="card-text"> <?php echo $paragraph ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>E la sua lunghezza è:</strong> <?php echo $paragraph_length ?></li>
  </ul>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Parola Censurata</h5>
    <p class="card-text"><?php echo $badword_replace ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>E la sua lunghezza è:</strong> <?php echo $paragraph_length ?></li>
  </ul>
</div>

</div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>