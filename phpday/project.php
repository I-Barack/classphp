<?php 
    $fn = "Christopher";

    $sn = "Okoro";

    $class = "Full Stack";

    $tel = "08166459975";

    $email = "christopher975@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php project</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <section>
        <div class="card mx-auto mt-5" style="max-width: 600px;">
            <div class="card-header p-2 text-center bg-primary">
                <h4>My Card</h4>
            </div>
            <div class="card-body row m-0">
                <div class="col-3">
                    <h5>First Name: </h5>
                    <h5>Surname: </h5>
                    <h5>Class: </h5>
                    <h5>Tel: </h5>
                    <h5>E-mail: </h5>
                </div>
                <div class="col-9">
                    <h5><?php echo $fn?></h5>
                    <h5><?php echo $sn?></h5>
                    <h5><?php echo $class?></h5>
                    <h5><?php echo $tel?></h5>
                    <h5><?php echo $email?></h5>
                </div>
            </div>
        </div>
    </section>
</body>
</html>