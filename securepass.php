<?php
$pin_ar = array();
$start = 1;

while ($start <= 10) {
    $new_int = rand(0,9);

    //check whether new int is already in array
    if(in_array($new_int,$pin_ar)){
        while(in_array($new_int,$pin_ar)){
            //this will terminate when it eventually 
            //generate a number that is not in the array
            $new_int = rand(0,9);
        }
        array_push($pin_ar,$new_int);
    }

    //push the new value since it doesn't exist in array
    else{
        array_push($pin_ar,$new_int);
    }

    $start++; //increment counter to ensure not more than 10 values are in array
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SecurePass</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class="card" style="width: 18rem; margin:0 auto; margin-top:60px;">
            <img src="shield.png" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="row"><!-- row 1 -->
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[0]; ?></button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[1]; ?></button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[2]; ?></button>
                    </div>
                </div><!-- end of row 1 -->
                <br>
                <div class="row"><!-- row 2 -->
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[3]; ?></button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[4]; ?></button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[5]; ?></button>
                    </div>
                </div><!-- end of row 2 -->
                <br>
                <div class="row"><!-- row 3 -->
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[6]; ?></button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[7]; ?></button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[8]; ?></button>
                    </div>
                </div><!-- end of row 3 -->
                <br>
                <div class="row"><!-- row 4 -->
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block">
                            <span data-feather="refresh-cw"></span>
                        </button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block"><?php echo $pin_ar[9]; ?></button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark btn-block">
                            <span data-feather="arrow-right-circle"></span>
                        </button>
                    </div>
                </div><!-- end of row 4 -->
            </div><!-- card body -->
        </div><!-- card -->

    <script src="https://unpkg.com/feather-icons"></script>
    <script>feather.replace()</script>
    </body>
</html>