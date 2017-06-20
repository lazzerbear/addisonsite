<?php 
include_once("analyticstracking.php");
require 'bootstrapheader.php'; 
	echo $bootstrapcdn; 				
 ?>
<link href="customCSS1.css" rel="stylesheet" type="text/css">
<title>Addison Martin's website. Made for fun and practice.</title>
<style>
    /* ----------------------------------------BUTTER BOT------------------------ */
    
    .st0 {
        fill: #C3CFD2;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st1 {
        fill: #928DA4;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st2 {
        fill: #C0BDCC;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st3 {
        fill: #5D696F;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st4 {
        fill: #36454A;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st5 {
        fill: #BECACD;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st6 {
        fill: #79848C;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st7 {
        fill: #5B686B;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st8 {
        fill: #444D51;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st9 {
        fill: #0F191C;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st10 {
        fill: #C4FEFF;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st11 {
        fill: #475766;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st12 {
        fill: #536573;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st13 {
        fill: #232D37;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st14 {
        fill: #38443F;
    }
    
    .st15 {
        fill: #3D454F;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st16 {
        fill: #5D6870;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st17 {
        fill: #57666F;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st18 {
        fill: #38454A;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st19 {
        fill: #40434B;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st20 {
        fill: #444A51;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st21 {
        fill: #3F4751;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st22 {
        fill: #404550;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st23 {
        fill: #B2BDC5;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st24 {
        fill: #17171E;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st25 {
        fill: #17171F;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st26 {
        fill: #3B474D;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st27 {
        fill: #313A43;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st28 {
        fill: #17181E;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st29 {
        fill: #363F43;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st30 {
        fill: #A2A0AE;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st31 {
        fill: #C7C4CF;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st32 {
        fill: #C7C3D2;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st33 {
        fill: #DFC439;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st34 {
        fill: #883802;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st35 {
        fill: #7C7F88;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    
    .st36 {
        fill: #860500;
        stroke: #000000;
        stroke-miterlimit: 10;
    }
    /*---------------ANIMATION------------*/
    
    @keyframes tater {
        100% {
            transform: rotate(360deg);
        }
    }
    
    @keyframes mymove {
        50% {
            transform: translate(-100px, 50px);
        }
        100% {
            transform: translate(0px, 0px);
        }
    }
    
    .butter {
        animation: mymove 4s 0s linear infinite;
    }
    
    .rightarm {
        transform-origin: 100% 100%;
        animation: tater 4s 2s linear 1;
    }

</style>
</head>

<body>

    <?php require 'top_navigation_bar.php'; ?>


    <div class="container white-background">
        <div class="container">
            <audio controls loop class="pull-right">
                    <source src="sounds/coffeeOnTheBrainTrack.mp3" type="audio/mpeg">
                    No music for you because your browser is garbage. Have you considered trying google chrome or firefox?
                </audio>
        </div>
        <div class="well">
            <div class="fancyerpink text-center"> Addison made this website.</div>
            <p class="fancypink text-center">Butter Bot!?</p>
        </div>
        <div class="butter">
            <img class="img-responsive center-block" src="img/ButterBot.svg" alt="Butter Bot" width="1050" height="550">
        </div>
    </div>

    <script>
        document.getElementById("on-home").style.backgroundColor = "#F0F8FF";

    </script>
</body>

</html>
