<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>respond page</title>
</head>
<body>
    <div class="card w-50 mx-auto bg-warning my-5 py-5">
    <div class="card-body">
    <?php 
        echo "First Name : ".$_GET['firstname']."<br>";
        echo "Last Name : ".$_GET['lastname']."<br><br>";
    ?>
    <a href="form.php" class="nav-link"> &lt;&lt; Go Back</a>
    <a href="/" class="nav-link">Go Back to Main Page</a> <!-- for github push -->
    </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>