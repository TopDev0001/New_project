<?php

session_start();

error_reporting(0);

include('includes/config.php');

if (isset($_POST['send'])) {

    $watch = $_POST['watch'];

    $sql = "INSERT INTO  video(watch) VALUES(:watch)";

    $query = $dbh->prepare($sql);

    $query->bindParam(':watch', $watch, PDO::PARAM_STR);

    $query->execute();

    $lastInsertId = $dbh->lastInsertId();

    if ($lastInsertId) {

        header('Location:platform.php');

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

        background-image: url('img/BG_video.png');

        background-size: cover;

        background-repeat: no-repeat;

        height: 500px;

    }



    .form-control {

        background-color: #fff;

    }

    </style>

</head>



<body>

    <!-- Banners -->

    <section style="background-image: url(img/offerback.jpg); background-size:contain; background-repeat: no-repeat;">

        <div class="container bg-1">



            <div class="row">

                <div class="col-sm-12 video_text">

                    <div class="col-sm-5 col-md-5 col-lg-5">

                        <h6 class="video_first_line" > Kod baucar pembelian bernilai RM5 telah dihantar ke e-mel anda. </h6>

                        <h2 class ="video_second_line">Jom memenangi Hadiah Wang Tunai bernilai RM500 atau produk QV! </h2>

                    </div>

                    <div class="col-sm-5 ">
                    <img src="img/box.png" class="box_image" >
                    </div>

                </div>

            </div>

            <br><br>

            <div class="row formqv text-center" style="padding: 30px 30px 0px 30px;">

                <div class="col-sm-12">

                    <p style="color: #293D8A;"> Tonton video ini untuk menyertai Cabutan Bertuah Raya QV.</p>

                    <video id="myvid" width="660px" height="370px" muted autoplay controls>

                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">

                    </video>

                    <p style="color: #293D8A;"> Peringatan: Jangan tutup pelayar web anda! </p>



                </div>

            </div>

            <br> <br>





            <form method="post" name="chngpwd">

                <?php if ($error) { ?><div class="errorWrap">

                    <strong>ERROR</strong>:<?php echo htmlentities($error); ?>

                </div><?php } else if ($msg) { ?><div class="succWrap">

                    <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>

                </div>

                <?php } ?>

                <!-- <input type="text" class="form-control" value="Yes" name="watch"> -->



                <p> Tekan SIAP setelah anda habis menonton video ini. </p>

                <button name="send" type="submit" disabled="disabled" id="submitButton" class="btn btn-default"

                    style="width: 100%; background-color:#0078BF">SIAP

                </button>

                <p id="timeLeft"></p>



            </form>











        </div>

        </div>









        <script src="assets/js/bootstrap.min.js"></script>



        <script type="text/javascript">

        setTimeout(function() {

            document.getElementById('submitButton').disabled = null;

        }, 10000);



        var countdownNum = 8;

        incTimer();



        function incTimer() {

            setTimeout(function() {

                if (countdownNum != 0) {

                    countdownNum--;

                    document.getElementById('timeLeft').innerHTML = 'Time left: ' + countdownNum + ' seconds';

                    incTimer();

                } else {

                    document.getElementById('timeLeft').innerHTML = 'Ready!';

                }

            }, 1500);

        }

        </script>



</body>



</html>

<?php  ?>