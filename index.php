<?
// session_start();
require 'vendor/autoload.php';
require 'func.php';

print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?require 'messages.php'?>
        <form action="" class="mt-5 w-50" method="post">
            <input type="text" name="name" placeholder="name" class="form-control mb-3">
            <input type="text" name="city" placeholder="city" class="form-control mb-3">
            <input type="text" name="age" placeholder="age" class="form-control mb-3">
            <input type="text" name="email" placeholder="email" class="form-control mb-3">
            <button type="submit" class="btn btn-warning">enter</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>