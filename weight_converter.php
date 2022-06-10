<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/scale.png" type="image/x-icon">
    <title>Weight Converter</title>
</head>
<body>
    <?php
        if (isset($_GET['convert'])) {
            $input = $_GET['inputValue'];
            $unit = $_GET['unit'];

            switch ($unit) {
                case 'kg':
                    $result = $input * 0.454 ." kgs";
                    break;
                
                default:
                    $result = $input / 0.454 ." pounds";
                    break;
            }
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="container my-5 py-5 rounded text-center bg-warning">
                <h2 class="my-3 py-3">Weight Converter</h2>
                <label>Choose a unit to convert :</label>
                <input type="radio" name="unit" value="kg" class="form-check-input" <?php echo($unit == "kg")?"checked":""; ?> disabled  > Pounds to Kgs
                <input type="radio" name="unit" value="pound" class="form-check-input" <?php echo($unit == "pound")?"checked":""; ?> disabled  > Pounds to Kgs <br>
                <label class="form-control-label mt-3">Input Value</label>
                <input type="text" name="inputValue" class="form-control w-25 mx-auto my-3" autocomplete="off" value="<?php echo $_GET['inputValue']?>" disabled  id="inputValue">
                <label class="form-control-label">Result</label>
                <input type="text" name="result" class="form-control w-25 mx-auto my-3" autocomplete="off" value="<?php echo $result?>" disabled  id="result">
                <a href="<?php echo $_SERVER['PHP_SELF'] ?>" class="nav-link">Go Back</a>
                <!-- <a href="/" class="nav-link">Go Back to Main Page</a> for github push -->
                <a href="/../form-handling" class="nav-link">Go Back to Main Page</a> <!-- for local testing -->
            </form>
       <?php }else{?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="container my-5 py-5 rounded text-center bg-warning">
            <h2 class="my-3 py-3">Weight Converter</h2>
            <label>Choose a unit to convert :</label>
            <input type="radio" name="unit" value="kg" class="form-check-input" checked="checked"> Pounds to Kgs
            <input type="radio" name="unit" value="pound" class="form-check-input"> Pounds to Kgs <br>
            <label class="form-control-label mt-3">Input Value</label>
            <input type="text" name="inputValue" class="form-control w-25 mx-auto my-3" autocomplete="off">
            <!-- <label class="form-control-label">Result</label>
            <input type="text" name="result" class="form-control w-25 mx-auto my-3" autocomplete="off"> -->
            <input type="submit" value="Convert" name="convert" class="btn btn-success" id="reset">
        </form>
       <?php }
     ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>