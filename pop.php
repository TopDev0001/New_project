<?php

session_start();

error_reporting(0);

include('includes/config.php');

if (isset($_POST['send'])) {

    $name = $_POST['name'];

    $kp = $_POST['kp'];

    $telefon = $_POST['telefon'];

    $email = $_POST['email'];





    $sql = "INSERT INTO tblbooking(name,kp,telefon,email) VALUES(:name,:kp,:telefon,:email)";

    $query = $dbh->prepare($sql);

    $query->bindParam(':name', $name, PDO::PARAM_STR);

    $query->bindParam(':kp', $kp, PDO::PARAM_STR);

    $query->bindParam(':telefon', $telefon, PDO::PARAM_STR);

    $query->bindParam(':email', $email, PDO::PARAM_STR);

    $query->execute();

    $lastInsertId = $dbh->lastInsertId();

    if ($lastInsertId) {

        header('Location:video.php');

    } else {

        $error = "Something went wrong. Please try again";

    }

}





?>



<!DOCTYPE HTML>

<html lang="en">



<head>



    <title> QV Mini Game </title>

    <!--Bootstrap -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/index.css" type="text/css">
    
    <style>

    .formqv {

        background: linear-gradient(180deg, #EAF6FE 17.47%, #FFFFFF 106.87%);

        padding: 60px 60px 30px 60px;

        border: 1px solid #FFFFFF;

        box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.25);

        border-radius: 24px;

    }



    .form-control {

        background-color: #fff;

    }

    </style>

</head>



<body>

    <!-- Banners -->

    <section style="background-image: url(img/BG_pattern.png); background-size:contain; background-repeat: no-repeat;">

        <div class="container bg-1">



            <div class="row">

                <div class="col-sm-12 pop_text">

                    <div class=" col-md-6 col-lg-6">

                        <h6  class = "pop_fist_line"> Tahniah, anda semakin menghampiri peluang untuk memenangi </h6>

                        <h2 class = "pop_second_line">Hadiah Wang Tunai bernilai RM500 atau produk QV! </h2>

                    </div>

                    <div class=" clo-md-6 box_div">
                    <img src="img/box.png" class="box_image" >
                    </div>

                </div>

            </div>

        

            <div class="formqv">

                <p style="color: #293D8A;" class="form_text1"> Sila isi butiran peribadi anda untuk mendapatkan kod baucar pembelian

                    bernilai <b> RM5 </b> dan penyertaan untuk <b> Cabutan Bertuah Raya QV! </b> </p>

                <form method="post">

                    <?php if ($error) { ?><div class="errorWrap">

                        <strong>ERROR</strong>:<?php echo htmlentities($error); ?>

                    </div><?php } else if ($msg) { ?><div class="succWrap">

                        <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>

                    </div>

                    <?php } ?>

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Nama *" name="name" required>

                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="NO. K/P *" name="kp" required>

                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="NO. Telefon *" name="telefon" required>

                    </div>

                    <div class="form-group">

                        <input type="email" class="form-control" placeholder="E-mel *" name="email" required>

                    </div>



                    <br>

                    <button name="send" type="submit" class="btn btn-default"

                        style="width: 100%; background-color:#0078BF">HANTAR

                    </button>



                </form>

                <br>

                <p style="color: #293D8A;" class="form_text2"> Dengan penghantaran butiran ini, anda telah dianggap sudah baca, faham dan

                    bersetuju dengan Terma & Syarat QV dan Dasar Privasi Digital. </p>

            </div>



        </div>

        </div>









        <script src="assets/js/bootstrap.min.js"></script>









</body>



</html>

<?php  ?>