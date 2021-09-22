<?php 
    require_once('./config/dbconfig.php'); 
    $db = new operations();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <title>Crud Php OOP</title>
    <script>
        $(document).ready(function(){
            setInterval(function () {
                $("#info").load("view.php");
            }, 1000);
        });
        </script>
</head>
<body class="bg-white">

    <div class="container col-lg-4 m-auto float-left">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Employees Info Form </h2>
                    </div>
                        <?php $db->Store_Record(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="text" name="First" placeholder=" First Name" class="form-control mb-2" required>
                                <input type="text" name="Last" placeholder=" Last Name" class="form-control mb-2" required>
                                <input type="text" name="UserName" placeholder=" User Name" class="form-control mb-2" required>
                                <input type="Email" name="UserEmail" placeholder=" User Name" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_save"> Save </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container col-lg-8 m-auto float-right" id="info">
    </div>


</body>
</html>