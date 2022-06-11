<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/calculator.png" type="image/x-icon">
    <title>Simple Calculator</title>
</head>
<body class="container my-5 py-5 bg-warning">
    <?php 
        if (isset($_GET['optr']))  {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $optr = $_GET['optr'];

            switch ($optr) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'sub':
                    $result = $num1 -+ $num2;
                    break;
                case 'mul':
                    $result = $num1 * $num2;
                    break;
                
                default:
                    $result = $num1 / $num2;
                    break;
            }            
        ?>
        <form class="w-50 mx-auto">
            <fieldset>
                <legend class="pl-3 mb-3">Simple Calculator</legend>
                <input disabled type="text" name="num1" value="<?php echo $num1;?>"class="my-3 w-50 form-control" placeholder="Enter First Value">
                <input disabled type="text" name="num2" value="<?php echo $num2;?>"class="my-3 w-50 form-control" placeholder="Enter Second Value">
                <div class="d-flex my-3">
                    <select class="form-select w-25 mr-3" name="optr" id="">
                        <option value="add" <?php if($optr == "add") {echo "selected";}?>>+</option>
                        <option value="sub" <?php if($optr == "sub") {echo "selected";}?>>-</option>
                        <option value="mul" <?php if($optr == "mul") {echo "selected";}?>>*</option>
                        <option value="div" <?php if($optr == "div") {echo "selected";}?>>/</option>
                    </select>
                    <label class="font-weight-bold ml-3 py-2 px-5"><?php echo $result; ?></label>
                </div>
                <!-- <a href="/" class="nav-link">Go Back to Main Page</a> for github push -->
                <a href="/../form-handling" class="nav-link">Go Back to Main Page</a> for local testing
            </fieldset>
        </form>
       <?php }else{ ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="w-50 mx-auto">
            <fieldset>
                <legend class="pl-3 mb-3">Simple Calculator</legend>
                <input type="text" name="num1" class="my-3 w-50 form-control" placeholder="Enter First Value">
                <input type="text" name="num2" class="my-3 w-50 form-control" placeholder="Enter Second Value">
                <div class="d-flex my-3">
                    <select class="form-select w-25 mr-3" name="optr" id="">
                        <option value="add" selected>+</option>
                        <option value="sub">-</option>
                        <option value="mul">*</option>
                        <option value="div">/</option>
                    </select>
                    <label class="font-weight-bold ml-3 py-2 px-5">Result</label>
                </div>                
                <button type="submit" class="btn btn-success">Calculate</button>
            </fieldset>
        </form>
       <?php }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>