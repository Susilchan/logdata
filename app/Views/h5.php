<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
            <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet"/> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        </head>
        <body>
                <header class="header-area header-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <nav class="main-nav">
                                    <ul class="nav">
                                        <li><img src="asset/Logo 2.png" alt="logo felova"  width="50px" height="50px"></li>
                                        <li><a href='<?php $baseURL ?>/h2'><button class="bt" ><img src="asset/Icon-Dashboard.png" alt="dashboard" class="responsive" width="50px" height="50px"></button></a></li>
                                        <li><a href='<?php $baseURL ?>/h31'><button class="bt"><img src="asset/Icon-Grafik.png" alt="grafik" class="responsive" width="50px" height="50px"></button></a></li>
                                        <li><a href='<?php $baseURL ?>/h41'><button class="bt"><img src="asset/Icon-Tables.png" alt="table" class="responsive" width="50px" height="50px"></button></a></li>
                                        <li><a href='<?php $baseURL ?>/h5'><button class="bt active"><img src="asset/Icon-Aboutus.png" alt="About Us" class="responsive" width="50px" height="50px"></button></a></li>
                                        <span class="responsive" style="float: right"> <h5 id="time"></h5></span>
                                    </ul>  
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">
                    <div class="column1" style="background-color:#f7f7f6;">
                        <div class="kiria">
                            <h5 class="labeln">BSIP-TROA</h5>
                            <img src="asset/images.jfif" class="responsive" width="100px" height="100px" style="border-radius: 75px;" id="center">
                            <h5 class="labelin">Dr. Ir. Evi Savitri Iriani, M.Si.</h5>
                        </div>
                        <div class="kirib">
                            <h5 class="labeln">KELOMPOK 7 IOT SV IPB</h5>
                            <img src="asset/TEK-DOSEN-6.png" class="responsive" width="100px" height="100px" style="border-radius: 75px;" id="center">
                            <h5 class="labelin">Bayu Widodo, S.T., M.T.</h5>
                        </div>
                    </div>
                    <div class="column2" style="background-color:#f7f7f6;">
                        <div class="kanana">
                            <p>Balai Pengujian Standar Instrumen Tanaman Rempah, Obat, dan Aromatik (BSIP-TROA)
                                merupakan unit kerja yang bergerak di bawah Pusat Penelitian dan Pengembangan
                                Perkebunan yang dikepalai oleh Dr. Ir. Evi Savitri Iriani, M.Si dengan fokus pada penelitian
                                tanaman rempah, obat, dan aromatik.</p>
                                <a href="https://www.instagram.com/bsiptroa/" class="fa fa-instagram"> bsiptroa</a>
                                <i class="fa fa-envelope" style="font-size:24px"> balittro@litbang.pertanian.go.id</i>     
                        </div>
                        <div class="kananb">
                            <img src="asset/hafid.png" class="responsive" width="70px" height="70px" style="border-radius: 75px;" >
                            <img src="asset/chikaa.jpg" class="responsive" width="70px" height="70px" style="border-radius: 75px;">
                            
                        </div>

                    </div>
                </div>
        </body>
    </html> 
    <br/><br/>

    <style>* {
        box-sizing: border-box;
    }
    body {
        margin:0px;
        font-size: 14px;
        background: rgba(246,247,247,1);
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    li {
        float:left;
        margin: 5px;
      
    }

    li a{
        display: block;
        color: white;
        padding: 5px 5px;
        font-size: 5px;
    }

    .responsive {
        max-width: 100%;
        height: auto; 
    }

    #time{
        margin: 10px;
        padding: 5px 5px;
        border: 5px;
        border-color: #fefefe;
        background-color: #fefefe;
        border-style: solid;
        border-radius: 30px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: small;
    }

    nav {
        padding: 5px 5px;
        font-size: 64px;
        text-decoration: none;
        border: 10px;
        margin: 0px;
        background-color: #2bd56b;
        width: 100%;
        height: 80px;
    }

    #desc{
        border: 30px;
        border-style: solid;
        border-color: #93db74;
        background-color: #93db74;
        font-family: Arial, Helvetica, sans-serif;
    }

    .column1 {
        float: left;
        width: 30%;
        margin-top: 0px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 24px;
        opacity: 1;
        text-align: justify;
        padding-right: 50px;
        padding-left: 50px;
        height: 80px;
        background-color: #2bd56b
    }

    .column2 {
        float: left;
        width: 70%;
        margin-top: 0px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 24px;
        opacity: 1;
        text-align: justify;
        padding-right: 50px;
        padding-left: 50px;
        height: 80px;
        background-color: #2bd56b
    }

    .kiria {
    
        margin-top: 1px;
        border: 30px;
        border-style: solid;
        border-color: #f7f7f6;
        background-color: #2bd56b;
    }

    .kirib {
        margin-top: -30px;
        border: 30px;
        border-style: solid;
        border-color: #f7f7f6;
        background-color: #2bd56b;
    }

    .kanana{
        height: 300px;
        width: 100%;
        margin-top: 30px;
        margin-right: 70px;
        border: 60px;
        border-style: solid;
        border-color: #93db74;
        background-color: #93db74;
        text-align: justify;
        font-family: Arial, Helvetica, sans-serif;
    }

    .kananb{
        height: 300px;
        width: 100%;
        margin-top: 20px;
        margin-right: 70px;
        border: 60px;
        border-style: solid;
        border-color: #93db74;
        background-color: #93db74;
        text-align: justify;
        font-family: Arial, Helvetica, sans-serif;
    }

    .labeln {
        padding:0px;
        margin-top: 0px;
        border: 5px;
        border-style: solid;
        border-color: #c0ff73;
        background-color: #c0ff73;
        text-align: center;

    }

    .labelin {
        padding:0px;
        margin-bottom: 20px;
        margin-left: 30px;
        margin-right: 30px;
        border: 3px;
        border-style: solid;
        border-color: #c0ff73;
        background-color: #c0ff73;
        text-align: center;

    }

    #center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }


    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    .button {
        display: inline-block;
    }

    .bt{
        border-radius: 50%;
        border: 0px;
        background-color: #2bd56b;
        cursor: pointer;
        padding-bottom: 5px ;
    }

    .bt.active{
        background-color: #f7f7f6;
        border-bottom-left-radius: 1px;
        border-bottom-right-radius: 1px;
        padding: 5px;
        padding-bottom: 10px;
        padding-top: 5px;
    }

    .fa {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
    }

    .fa-instagram {
        background: #93db74;
        color: black;
        font-size: 24px;
        display: inline;
    }

    .fa-envelope{
        display: inline;
    }

    @media screen and (max-width: 800px) {
        .left, .main, .right {
        width: 100%; /* The width is 100%, when the viewport is 800px or smaller */}
    }

    @media screen and (max-width: 900px) {
        nav {
            width: 100%;
            height: auto;
            position: relative;
        }
        
        nav li a {
            float: left;
            padding: 15px;
        }
        

        @media screen and (max-width: 400px) {
            #time{
                float: center;

            }
        }
    }
    </style>
    <script>
        `use strict`;
        function refreshTime() {
        const timeDisplay = document.getElementById("time");
        const dateString = new Date().toLocaleString();
        const formattedString = dateString.replace(", ", " - ");
        timeDisplay.textContent = formattedString;
        }
        setInterval(refreshTime, 1000);

        var datetime = new Date().getDay();
        console.log(datetime); // it will represent date in the console of developers tool
        document.getElementById("time").textContent = datetime; //it will print on html page

        `use strict`
        var datetime = new Date().getMonth() + 1;
        console.log(datetime); // it will represent date in the console of  developers tool
        document.getElementById("time").textContent = datetime; // represent on html page
    </script>
</html>