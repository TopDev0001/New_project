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



    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js">

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js">

    </script>

    <style>

    #content {





        -moz-user-select: none;

        -webkit-user-select: none;

        user-select: none;

    }



    /* Header/footer boxes */



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



    /* Slots for final card positions */



    /* #cardSlots {

        margin: 50px auto 0 auto;

        background: #ddf;

    } */



    /* The initial pile of unsorted cards */



    #cardPile {

        margin: 0 auto;

        background: #ffd;

    }







    /* Individual cards and slots */



    #cardSlots div {



        width: 70px;

        height: 70px;

        padding: 10px;

        padding-bottom: 0;

        border-radius: 10px;

        -webkit-border-radius: 64px;

        margin: 5px;

        background-image: url(img/mark.png);

        background-size: cover;



    }



    #cardPile div {

        float: left;

        width: 70px;

        height: 70px;

        padding: 10px;

        padding-bottom: 0;

        /* border: 2px solid #333; */

        border-radius: 10px;

        -webkit-border-radius: 64px;

        /* border-radius: 88px; */

        margin: 5px;

        /* background: #fff; */

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











    /* #cardPile div {

        background: #666;

        color: #fff;

        font-size: 50px;

        text-shadow: 0 0 3px #000;

    } */



    #cardPile div.ui-draggable-dragging {

        -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);

        -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);

        box-shadow: 0 0 .5em rgba(0, 0, 0, .8);

    }



    /* Individually coloured cards */



    #card1.correct {

        background-image: url(img/done.png);

        background-size: cover;



    }



    #card2.correct {

        background-image: url(img/done.png);

        background-size: cover;



    }



    #card3.correct {

        background-image: url(img/done.png);

    }





    /* "You did it!" message */

    #successMessage {

        position: absolute;

        left: 580px;

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



    /* ___________Other Own CSS_________________________________ */



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



        // Hide the success message

        $('#successMessage').hide();

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

                    cursor: 'move',

                    revert: true

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



        // If the card was dropped to the correct slot,

        // change the card colour, position it directly

        // on top of the slot, and prevent it being dragged

        // again



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



        // If all the cards have been placed correctly then display a message

        // and reset the cards for another go



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

    <section id="banner" class="banner-section">

        <div class="container" style=" width: 100%;">

            <div class="col-md-12 " style="padding-top: 90px;">

                <div class="col-md-4 ">

                </div>



                <div class="col-md-2 ">

                    <div id="cardSlots">

                    </div>



                    <div id="successMessage">

                        <h2>You did it!</h2>

                        <button onclick="init()">Play Again</button>

                        <a href="index2.php"><button> Next </button></a>

                    </div>


                </div>

                <div class="col-md-6" style="text-align: center;">

                    <h4 style="color: #293D8A;">Kulitnya menjadi kering kerana berada di dalam <br>bilik berhawa dingin

                        sepanjang hari.</h4>

                    <h2 style="color:#293D8A"> Raya Ini, Pilih Kebaikan!</h2>

                    <h3 style="color:#293D8A">Pilih <img src="img/logo.png" style="height: 30px; margin:2px"> Cream

                        untuk membantu kulitnya <br> agar terasa segar, lembut dan lembap </h3>

                    <br>

                    <div class="col-md-3 " style="padding-left: 20px;">

                        <img src="img/tube.png">

                    </div>

                    <div class="col-md-2 ">

                        <div id="cardPile"> </div>

                    </div>

                    <div style="padding: 60px 0px 0px 0px;">

                        <div class="col-md-1 ">

                            <img src="img/finger.png" style="height: 50px;">

                        </div>

                        <div class="col-md-4 ">

                            <h6 style="color:#293D8A"> DRAG & DROP QV Cream ke atas kulit MUKA dan TANGAN nya.

                            </h6>

                        </div>

                    </div>

                </div>





            </div>

        </div>

        <br><br><br><br><br><br><br>

    </section>











    <!-- Scripts -->



    <script src="assets/js/bootstrap.min.js"></script>









</body>



</html>