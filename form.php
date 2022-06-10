<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>form handling</title>
</head>
<body>
    <form action="respond.php" method="get" class="container my-5 py-5 rounded text-center bg-warning">
        <h2 class="my-3">User Information</h2>
        <label>First Name :</label>
        <input type="text" name="firstname" class="form-control w-25 mx-auto my-3" autocomplete="off">
        <label>Last Name : </label>
        <input type="text" name="lastname" class="form-control w-25 mx-auto my-3" autocomplete="off">
        <input type="submit" value="Login" name="login" class="btn btn-success">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>