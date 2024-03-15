<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1>PHP - Badwords</h1>

    <form action="results.php" method="GET">
    <div class="form-floating">
        <textarea class="form-control mb-3" placeholder="Leave a comment here" id="paragraphname" name="paragraphname" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Scrivi un paragrafo</label>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Scrivi una parola</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="badword" name="badword">
    </div>

    <input type="submit">
        
    </form>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>