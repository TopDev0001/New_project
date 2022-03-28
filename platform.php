<?php

session_start();

include('includes/config.php');

error_reporting(0);



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

    <script src="https://kit.fontawesome.com/d97b87339f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/index.css" type="text/css">

    <style>

    .clipboard {

        position: relative;

    }



    /* You just need to get this field */

    .copy-input {

        max-width: 300px;

        width: 100%;

        cursor: pointer;

        color: #6c6c6c;

        font-size: 14px;

        padding: 15px 45px 15px 15px;

        font-family: 'Montserrat', sans-serif;

        box-shadow: 0 3px 15px #b8c6db;

        -moz-box-shadow: 0 3px 15px #b8c6db;

        -webkit-box-shadow: 0 3px 15px #b8c6db;

        background: rgba(172, 207, 239, 0.1);

        border: 0.48px solid #FFFFFF;

        box-sizing: border-box;

        border-radius: 12.72px;

    }





    .copy-btn {

        width: 40px;

        background-color: #eaeaeb;

        font-size: 18px;

        padding: 6px 9px;

        border-radius: 5px;

        border: none;

        color: #6c6c6c;

        margin-left: -50px;

        transition: all .4s;

    }



    .copy-btn:hover {

        transform: scale(1.3);

        color: #1a1a1a;

        cursor: pointer;

    }









    .qvclass {

        background: #FAFDFF;

        border: 1px solid #FFFFFF;

        box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.25);

        border-radius: 24px 24px 0px 0px;

        padding: 30px;

    }

    </style>

    <script>

    function copy() {

        var copyText = document.getElementById("copyClipboard");

        copyText.select();

        copyText.setSelectionRange(0, 99999);

        document.execCommand("copy");



        $('#copied-success').fadeIn(800);

        $('#copied-success').fadeOut(800);

    }

    </script>

</head>



<body>

    <!-- Banners -->

    <section style="background-image: url(img/platform.jpg); background-size:contain; background-repeat: no-repeat;">

        <div class="container bg-1">



            <div class="row text-center ">

                <div class="col-sm-12 platform_text" style="margin-top: 30px;">

                    <div class="col-sm-12">

                        <h6 class = "platform_first_line" > Anda telah berjaya menyertai Cabutan Bertuah Raya QV dan berpeluang

                            memenangi</h6>

                        <h2  class = "platform_second_line" >Hadiah Wang Tunai bernilai RM 500! </h2>

                    </div>

                    <div class="platform_image_div" >
                   <img src="img/platform.png" class="platform_image">
                    </div>

                </div>

            </div>

            <!-- <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> -->



            <div class="row formqv platform_sub" >

                <div class=" col-sm-12 qvclass">



                    <div class=" col-sm-6">

                        <p style="color: #293D8A;">Jangan lupa kongsikan permainan ini dengan rakan-rakan anda dan

                            meningkatkan peluang untuk menang! </p>

                        <a href="https://www.facebook.com/home.php">
                        <img src="img/fb.png">

                        <a href="https://www.instagram.com">
                        <img src="img/insta.png">





                        <input onclick="copy()" class="copy-input" value="https://www.qvskincare.com/my"

                            id="copyClipboard" readonly>

                        <button class="copy-btn" id="copyButton" onclick="copy()"><i class="far fa-copy"></i></button>





                    </div>

                    <div class="col-sm-6">

                        <p style="color: #293D8A;">Layari kedai e-dagang QV untuk pembelian produk QV! </p>

                        <a href="https://www.lazada.com.my/shop/qv-official-store/"><img src="img/qv1.png"></a>

                        <a href="https://shopee.com.my/qv.os"><img src="img/qv2.png"></a>

                    </div>



                </div>

                <div class="col-sm-12 text-center" style="background: #003AA5; padding: 30px;">

                    <p style="color: #fff;">Layari laman web untuk maklumat lebih lanjut berkaitan produk QV sekarang!

                    </p>
                    <a href="https://www.qvskincare.com/my/en/news-and-promos/qvbodycampaign21.html">
                    <img src="img/qv3.png">

                </div>

            </div>

            <!-- <br> <br> <br> <br> -->





        </div>

        </div>









        <script src=" assets/js/bootstrap.min.js">

        </script>









</body>



</html>