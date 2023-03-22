<?php 

require_once __DIR__ . "/functions.php";

$length = isset($_GET['length']) ? $_GET['length'] : null;

if($length !== null && is_numeric($length)) {
    $length = intval($length);
    $psw = generate_psw($length);
}
//var_dump($length);
//var_dump(__DIR__);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

    <section>
        <div class="container text-center py-4">
            <h1>Strong Password Generator</h1>
        </div>
        <div class="container text-center">
        <h3>Password: <?php echo isset($psw) ? $psw : 'nessun valore inserito' ?></h3>
        </div>
        <div class="container py-5 d-flex justify-content-center">
            <form method="GET">
                <div class="row mb-3">
                    <label  class="col-auto col-form-label">Lunghezza Password:</label>
                    <div class="col-auto">
                    <input type="number" class="form-control" required min="3" max="75" name="length" value="<?= $length ?>">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </section>
    
</body>
</html>