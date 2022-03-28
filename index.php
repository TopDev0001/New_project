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

    <link href="assets/css/index.css" rel="stylesheet">

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <!-- <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script> -->
  <script src="assets/js/jquery2.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script> -->
 <script src="assets/js/jquery-ui.min.js"> </script>

    <style>
@media only screen and (hover: none) and (pointer: coarse) { 

}
    @font-face {
    font-family: 'Cronos Pro Display';
    font-style: normal;
    font-weight: normal;
    src: local('Cronos Pro Display'), url('Cronos-Pro-Display_12439.woff') format('woff');
    }

    body {
    font-family: 'Cronos Pro Display' !important;
    margin:0px;
    padding:0px !important;
    overflow-x:hidden;
    color:#555555;
    }
    #content {
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
    }
    
    .wideBox {
        clear: both;
        text-align: center;
        margin: 70px;
        padding: 10px;
        background: #ebedf2;
        border: 1px solid #333;
    }

    .wideBox h1 {
        font-weight: bold;
        margin: 20px;
        color: #666;
        font-size: 1.5em;
    }

    #cardPile {
        margin: 0 auto;
        background: #ffd;
    }
    #cardSlots div {
        width: 72px;
        height: 72px;
        padding: 10px;
        padding-bottom: 0;
        border-radius: 10px;
        -webkit-border-radius: 64px;
        margin: 5px;
        background-image: url(img/mark_1.png);
        background-size: cover;
    }
    #cardPile div {
        float: left;
        width: 70px;
        height: 70px;
        padding: 10px;
        padding-bottom: 0;
        border-radius: 10px;
        -webkit-border-radius: 64px;
        margin: 5px;
    }
    div#card1 {
        background-image: url(img/cream1.png);
        font-size: 1px;
        height: 40px;
        width: 40px;
        background-size: contain;
        margin-left: 15px;
    }
    div#card2 {
        background-image: url(img/cream2.png);
        font-size: 1px;
        height: 55px;
        width: 55px;
        background-size: contain;
        margin-left: 10px;
    }
    div#card3 {
        background-image: url(img/cream3.png);
        font-size: 1px;
    }
    #cardPile div.ui-draggable-dragging {
        -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
        -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
        box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
    }
    #card1.correct {
        background-image: url(img/cream_done1.png);
        background-size: cover;
    }
    #card2.correct {
        background-image: url(img/cream_done3.png);
        background-size: cover;
    }
    #card3.correct {
        background-image: url(img/cream_done2.png);
    }
    #successMessage {
        position: absolute;
        right: 300px;
        top: 250px;
        width: 0;
        height: 0;
        z-index: 100;
        background: #edf6fd;
        border: 2px solid #333;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        -moz-box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
        -webkit-box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
        box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
        padding: 20px;
        display: none;
    }
    div#cardSlots2 {
        height: 40px;
        width: 40px;
        background-size: contain;
        font-size: 1px;
        margin-left: 140px;
        margin-top: 80px;
    }

    div#cardSlots3 {
        height: 55px;
        width: 55px;
        background-size: contain;
        font-size: 1px;
        margin-top: -70px;
        margin-left: 25px;
    }

    div#cardSlotsundefined {
        font-size: 1px;
        margin-left: 60px;
        margin-top: 110px;
    }

    </style>

    <script type="text/javascript">

    var correctCards = 0;

    $(init);

    function init() {


    $( "#home_text1" ).animate({fontSize: "22px"}, {duration: 500, specialEasing: {
          width: "easeInOutSine",
          height: "easeInOutSine",
        },
        complete: function() {
            $( "#home_text2" ).animate({fontSize: "40px"}, {duration: 500,
                complete: function() {
                    $( "#home_text3" ).animate({width: "toggle"}, {duration: 400,
                        // specialEasing: {
                        //     width: "easeInOutSine",
                        //     height: "easeInOutSine",
                        //     },
                        complete: function() {
                            $( "#home_text4" ).animate({width: "toggle"}, {duration: 400

                            });


                        }
                    });
                }
            });
        }
    });

        // $('#successMessage').hide();
        // $('#home_text1').hide();
        // $('#home_text2').hide();
        // $('#home_text3').hide();
        // $('#home_text4').hide();

        // $('#home_text1').show(200,function(){
        //     $('#home_text2').show(200,function(){
        //         $('#home_text3').show(200,function(){
        //             $('#home_text4').show(200,function(){
                          

        //             });
        //         });

        //     });
        // });


        $('#successMessage').css({

            left: '580px',

            top: '250px',

            width: 0,

            height: 0

        });



        // Reset the game

        correctCards = 0;

        $('#cardPile').html('');

        $('#cardSlots').html('');



        // Create the pile of shuffled cards

        var numbers = [1, 2, 3];

        numbers.sort(function() {

            return Math.pow() - .5

        });

        for (var i = 0; i < 3; i++) {

            $('<div>' + numbers[i] + '</div>').data('number', numbers[i]).attr('id', 'card' + numbers[i])

                .appendTo(

                    '#cardPile').draggable({

                    containment: '#content',

                    stack: '#cardPile div',

                    cursor: 'pointer',

                    revert: true,

                    // dragstart: handleCardDrag

                });

        }



        // Create the card slots

        var words = ['1', '2', '3'];

        for (var i = 1; i <= 3; i++) {

            $('<div>' + words[i - 1] + '</div>').data('number', i).appendTo('#cardSlots').attr('id',

                    'cardSlots' +

                    numbers[i])

                .droppable({

                    accept: '#cardPile div',

                    hoverClass: 'hovered',

                    drop: handleCardDrop

                });

        }
    }

    function handleCardDrop(event, ui) {

        var slotNumber = $(this).data('number');

        var cardNumber = ui.draggable.data('number'); 

        if (slotNumber == cardNumber) {

            ui.draggable.addClass('correct');

            ui.draggable.draggable('disable');

            $(this).droppable('disable');

            

            ui.draggable.position({

                of: $(this),

                my: 'left top',

                at: 'left top'

            });

            ui.draggable.draggable('option', 'revert', false);

            correctCards++;

        }

        if (correctCards == 3) {

            $('#successMessage').show();

            $('#successMessage').animate({

                left: '200px',

                top: '200px',

                width: '400px',

                height: '150px',

                opacity: 1

            });

        }
    }

    </script>

</head>



<body>

    <!-- Banners -->

    <section id="banner" class="back_section">

        <div class="container contain_div" >

            <div class="col-md-12 " >

                <div class="col-md-4 ">

                </div>

                <div class="col-md-2 cardSlots_div " >

                    <div id="cardSlots" class = "cards">

                    </div>


                    <div id="successMessage">

                        <h2>Tahniah!</h2>

                        <button onclick="init()">Main lagi</button>

                        <a href="index2.php"><button> Seterusnya </button></a>

                    </div>

                </div>

                <div class="col-md-6 col-lg-6 text_div col-sm-12" style="text-align: center;">

                    <h4 class="home_text1" id="home_text1">Kulitnya menjadi kering kerana berada di dalam <br>bilik berhawa dingin

                        sepanjang hari.</h4>

                    <h2 class="home_text2"  id="home_text2" style="color:#1b2a65"> Raya Ini, Pilih Kebaikan!</h2>
                    <div class="home_text3" id="home_text3" >
                        <div>
                        <h3   class="home_text3_1"  style="color:#1b2a65">Pilih <img src="img/logo.png" class="logo_image" style="height: 30px; margin:2px"> Cream</h3>
                        </div>
                        <div>

                        <h3   class="home_text3_2"  style="color:#1b2a65">  untuk membantu kulitnya <br> agar terasa segar, lembut dan lembap </h3>
                        </div>
                    </div>
                    <br>
                    <div class="row_div">
                                <div class= "small_image">
                                        <img src="img/small.png" class= "girl_image">
                                </div>
                                <div class="home_text4" id="home_text4">

                                    <div class="col-md-3 cream_image col-sm-12" style="padding-left: 20px;">

                                        <img src="img/tube.png">

                                    </div>

                                    <div class="col-md-2 col-sm-3 cardPile_div">

                                        <div id="cardPile" > </div>

                                    </div>
                              
                                <div style="padding: 60px 0px 0px 0px;" class=" col-sm-6 des_div">

                                            <div class="col-md-1">

                                                <img src="img/finger_image.png" class="finger_image" >

                                            </div>

                                            <div class="col-md-7 drag_text col-sm-8">

                                                <h6 style="color:#1b2a65; text-align:left" class="drag_text"> DRAG & DROP QV Cream ke atas kulit MUKA dan TANGAN nya.

                                                </h6>

                                            </div>

                                </div>

                               
                     </div>

                
                     </div>
                     <div class="wave_image col-sm-12">
                                <img src="img/wave.png" class="wave">

                    </div>
                </div>

                

            </div>

        </div>

        <br><br><br><br><br><br><br>

    </section>











    <!-- Scripts -->



    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">






    </script>






</body>



</html>