<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/file.jpg" type="image/x-icon">
    <title>file upload</title>
</head>
<body class="bg-warning my-5 py-5">
    <h1 class="text-center">Fill in the Form</h1>
    <?php 
        if (isset($_POST['btnUpload'])) {
            
        ?>
           
        <?php  } else {?>
            <form class ="mx-auto my-3 py-3 w-50 text-center" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 row w-50 mx-auto">
                <label  class="col-sm-2 col-form-label">ID </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="id">
                </div>
            </div>
            <div class="mb-3 row w-50 mx-auto">
                <label  class="col-sm-2 col-form-label">Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username">
                </div>
            </div>
                <input type="file" name="fileUpload">
                <input type="submit" name="btnUpload" value="Upload">
            </form>
        <?php }        
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>