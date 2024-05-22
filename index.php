<?php require_once __DIR__ . "/partials/function.php" ?>

<?php

if (!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-primary p-5">Inserisci la tua mail per iscriverti alla newsletter</h1>
    <form class="p-5 d-flex" action="index.php" method="POST">
        <label for="subscribe" class="form-label"></label>
        <input type="text" class="form-control w-25 mx-1" id="subscribe" placeholder="user@gmail.com" name="email">
        <button type="submit" class="btn btn-primary px-3">Invia</button>
    </form>
    <?php if (isset($valid)) { ?>
        <div class="p-5 text-center alert alert-success">
            <?php echo $valid; ?>
        </div>
    <?php } ?>

    <?php if (isset($invalid)) { ?>
        <div class="p-5 text-center alert alert-danger">
            <?php echo $invalid; ?>
        </div>
    <?php } ?>
    </div>

</body>

</html>