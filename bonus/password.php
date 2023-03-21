<?php
$length = isset($_GET['length']) ? $_GET['length'] : null;
$chars = 'abcdefghilmnopqrstuvzxwyABCDEFGHILMNOPQRSTUVZXWY0123456789,.!?_-:;*#@+$"/|^';
include __DIR__ . "/functions.php";

$back= isset($_GET['back']);
if($back === true) {
    header('Location: ./index.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

    <section>
        <div class="container text-center py-5">
            <h3>Password: <?php echo implode(generate_psw($length, $chars)); ?></h3>
            <form method="GET">
                <button type="submit" class="btn btn-primary" name="back">Indietro</button>
            </form>
        </div>
    </section>
    
</body>
</html>