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
                                        <a href='<?php $baseURL ?>/index.php'> <button class="bt "><img src="asset/Logo 2.png" alt="dashboard" class="logo" class="responsive" width="50px" height="50px"></button></a>
                                        <!-- <li><img src="asset/Logo 2.png" alt="logo felova"  width="50px" height="50px"></li> -->
                                        <a href='<?php $baseURL ?>/h2'><button class="bt" ><img src="asset/Icon-Dashboard.png" alt="dashboard" class="responsive" width="50px" height="50px"></button></a>
                                        <a href='<?php $baseURL ?>/h31'><button class="bt"><img src="asset/Icon-Grafik.png" alt="grafik" class="responsive" width="50px" height="50px"></button></a>
                                        <a href='<?php $baseURL ?>/h41'><button class="bt"><img src="asset/Icon-Tables.png" alt="table" class="responsive" width="50px" height="50px"></button></a>
                                        <a href='<?php $baseURL ?>/h5'><button class="bt active"><img src="asset/Icon-Aboutus.png" alt="About Us" class="responsive" width="50px" height="50px"></button></a>
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
                            <img src="asset/1.png" class="responsive" >
                        </div>
                        <div class="kirib">
                            <img src="asset/2.png" class="responsive" >
                        </div>
                    </div>
                    <div class="column2" style="background-color:#f7f7f6;"  >
                        <div class="kanana">
                            <p>Balai Pengujian Standar Instrumen Tanaman Rempah, Obat, dan Aromatik (BSIP-TROA)
                                merupakan unit kerja yang bergerak di bawah Pusat Penelitian dan Pengembangan
                                Perkebunan yang dikepalai oleh Dr. Ir. Evi Savitri Iriani, M.Si dengan fokus pada penelitian
                                tanaman rempah, obat, dan aromatik.</p>
                                <a href="https://www.instagram.com/bsiptroa/" class="fa fa-instagram"> bsiptroa</a>
                                <i class="fa fa-envelope"> balittro@litbang.pertanian.go.id</i>     
                        </div>
                        <div class="kananb">
                        <!-- <div class="column2"> -->
                        
                            <img src="asset/kelompok.png" class="responsive">
                            
                        </div>

                    </div>
                </div>
        </body>
    </html> 
    <br/><br/>

    <style>* {
        box-sizing: border-box;
        font-size:22px;
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
        width: 35%;
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
        width: 65%;
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
        margin-top: 35px;
        /* border: 30px;
        border-style: solid;
        border-color: #f7f7f6; */
        margin-right:300px;
        width:350px;
        height:275px;
        position: inline-block;
        margin-bottom:30px;
       
    }

    .kirib {
        margin-top: -30px;
        /* border: 30px;
        border-style: solid;
        border-color: #f7f7f6; */
        width:350px;
        height:275px;
        position: inline-block;
    }

    .kanana{
        height: 260px;
        width: 100%;
        margin-top: 30px;
        margin-right: 70px;
        border: 10px;
        border-left:25px;
        border-right:25px;
        border-style: solid;
        border-color: #93db74;
        background-color: #93db74;
        text-align: justify;
        font-family: Arial, Helvetica, sans-serif;
        position: inline-block;
        padding-bottom:30px;
    }


    .kananb{
        height: 260px;
        width: 100%;
        margin-top: 20px;
        margin-right: 70px;
        position: inline-block;
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
        padding: 30px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
         /* background: #93db74; */
    }

    .fa-instagram {
        /* background: #93db74; */
        color: black;
        font-size: 24px;
        display: inline;
    }

    .fa-envelope{
        display: inline;
        font-size: 24px;
    }

    @media screen and (max-width: 1024px) {
        *{
                font-size: 12px;
            }
        .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
        }
        .column1{
            /* float: left; */
            float: none;
            width: 100%;
            margin-top: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            opacity: 1;
            text-align: center;
            padding-right: 10px;
            padding-left: 10px;
            height: 30px;
            background-color: #2bd56b
            
        }
        .column2{
            float: none;
            padding-top: 10px;

        }
        nav {
            width: 100%;
            height: auto;
            position: relative;
        }
        
        nav li a {
            float: left;
            padding: 15px;
        }

        .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
        }

        .kiria {
            margin-top: 35px;
            margin-right:200px;
            margin-left:60px;
            width:200px;
            height:180px;
            position: inline-block;
            margin-bottom:20px;
            
        
        }

        .kirib {
            margin-right:200px;
            margin-left:60px;
            width:200px;
            height:180px;
            position: inline-block;
        }

        .kanana{
            height: 150px;
            width: 100%;
            margin-top: -40px;
            margin-right: 80px;
            margin-left: 250px;
            border-style: solid;
            border-color: #93db74;
            background-color: #93db74;
            text-align: justify;
            font-family: Arial, Helvetica, sans-serif;
            position: inline-block;
           
            font: size 12%;
        }

        .kananb{
            height: 150px;
            width: 100%;
            margin-top: 20px;
            margin-right: 80px;
            margin-left: 250px;
            position: inline-block;
        }


        .fa {
            padding: 30px;
            font-size: 11px;
            width: 50px;
            text-align: center;
            text-decoration: none;
        }

        .fa-instagram {
            color: black;
            font-size: 11px;
            display: inline;
        }

        .fa-envelope{
            display: inline;
            font-size: 11px;

        }
    }

    @media screen and (max-width: 800px) {
        .button-b {
            display: inline;
            margin: 20px 20px 10px;
            position: left;
        }
        .column1{
            /* float: left; */
            float: center;
            width: 35%;
            margin-top: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            opacity: 1;
            text-align: center;
            padding-right: 50px;
            padding-left: 50px;
            height: 80px;
            background-color: #2bd56b
            

        }
        .left, .main, .right {
        width: 100%; /* The width is 100%, when the viewport is 800px or smaller */}

        .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
        }

        .kiria {
            margin-top: 35px;
            margin-right:300px;
            margin-left:30px;
            width:200px;
            height:180px;
            position: inline-block;
            margin-bottom:20px;
            
        
        }

        .kirib {
            margin-right:300px;
            margin-left:30px;
            width:200px;
            height:180px;
            position: inline-block;
        }

        .kanana{
            height: 150px;
            width: 100%;
            margin-top: -40px;
            margin-right: 80px;
            margin-left: 200px;
            border-style: solid;
            border-color: #93db74;
            background-color: #93db74;
            text-align: justify;
            font-family: Arial, Helvetica, sans-serif;
            position: inline-block;
           
            font: size 11%;
        }

        .kananb{
            height: 150px;
            width: 100%;
            margin-top: 20px;
            margin-right: 80px;
            margin-left: 200px;
            position: inline-block;
        }


        .fa {
            padding: 30px;
            font-size: 11px;
            width: 50px;
            text-align: center;
            text-decoration: none;
        }

        .fa-instagram {
            color: black;
            font-size: 11px;
            display: inline;
        }

        .fa-envelope{
            display: inline;
            font-size: 11px;

        }

    }

    @media screen and (max-width: 900px) {
        *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
        }
        .column1{
            /* float: left; */
            float: none;
            width: 100%;
            margin-top: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            opacity: 1;
            text-align: center;
            padding-right: 10px;
            padding-left: 10px;
            height: 30px;
            background-color: #2bd56b
            
        }
        .column2{
            float: none;
            padding-top: 10px;

        }
        nav {
            width: 100%;
            height: auto;
            position: relative;
        }
        
        nav li a {
            float: left;
            padding: 15px;
        }

        .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
        }

        .kiria {
            margin-top: 35px;
            margin-right:300px;
            margin-left:30px;
            width:200px;
            height:180px;
            position: inline-block;
            margin-bottom:20px;
            
        
        }

        .kirib {
            margin-right:300px;
            margin-left:30px;
            width:200px;
            height:180px;
            position: inline-block;
        }

        .kanana{
            height: 150px;
            width: 100%;
            margin-top: -40px;
            margin-right: 80px;
            margin-left: 200px;
            border-style: solid;
            border-color: #93db74;
            background-color: #93db74;
            text-align: justify;
            font-family: Arial, Helvetica, sans-serif;
            position: inline-block;
           
            font: size 11%;
        }

        .kananb{
            height: 150px;
            width: 100%;
            margin-top: 20px;
            margin-right: 80px;
            margin-left: 200px;
            position: inline-block;
        }


        .fa {
            padding: 30px;
            font-size: 11px;
            width: 50px;
            text-align: center;
            text-decoration: none;
        }

        .fa-instagram {
            color: black;
            font-size: 11px;
            display: inline;
        }

        .fa-envelope{
            display: inline;
            font-size: 11px;

        }
    }

        @media screen and (max-width: 700px) {
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                
            }
            .column2{
                float: none;
                padding-top: 10px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }
            .kiria {
                margin-top: 35px;
                margin-right:300px;
                margin-left:30px;
                width:200px;
                height:180px;
                position: inline-block;
                margin-bottom:20px;
            
        
            }

            .kirib {
                margin-right:300px;
                margin-left:30px;
                width:200px;
                height:180px;
                position: inline-block;
            }

            .kanana{
                height: 160px;
                width: 100%;
                margin-top: -40px;
                margin-right: 80px;
                margin-left: 200px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: inline-block;
                font: size 10%;
            }

            .kananb{
                height: 150px;
                width: 100%;
                margin-top: 20px;
                margin-right: 80px;
                margin-left: 200px;
                position: inline-block;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
                
            }

            .fa-instagram {
                margin: -25px;
                color: black;
                font-size: 10px;
                display: inline;
                text-align:justify;
                margin-right:1px;
            }

            .fa-envelope{
                margin: -25px;
                display: inline;
                font-size: 10px;

            }
        }
        
        @media screen and (max-width: 600px) {
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                
            }
            .column2{
                float: none;
                padding-top: 10px;

            }
            .bt.active {
                    background-color: #f7f7f6;
                    padding: 5px;
                    padding-bottom: 1px;
                    padding-top: 5px;
                    border-radius:50px;
                }

            .kiria {
                margin-top: 35px;
                margin-right:300px;
                margin-left:30px;
                width:180px;
                height:150px;
                position: inline-block;
                margin-bottom:40px;
            
        
            }

            .kirib {
                margin-right:300px;
                margin-left:30px;
                width:180px;
                height:150px;
                position: inline-block;
            }

            .kanana{
                height: 210px;
                width: 100%;
                margin-top: -40px;
                margin-right: 80px;
                margin-left: 200px;
                border: 5px;
                border-left:25px;
                border-right:25px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: inline-block;
                font: size 10%;
            }

            .kananb{
                height: 150px;
                width: 100%;
                margin-top: 20px;
                margin-right: 80px;
                margin-left: 200px;
                position: inline-block;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
                
            }

            .fa-instagram {
                margin: -35px;
                color: black;
                font-size: 10px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 10px;

            }
        }
        
        @media screen and (max-width: 500px) {
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                
            }
            .column2{
                float: none;
                padding-top: 10px;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 10px;
                margin-right:155px;
                margin-left:80px;
                width:150px;
                height:130px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 75px;
                margin-left: 20px;
                margin-top:-170px;
                width: 150px;
                height: 130px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 150px;
                width: 450px;
                margin-top: 100px;
                margin-right: 50px;
                margin-left: -25px;
                border: 7px;
                border-left:20px;
                border-right:20px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 90%;
                /* width: 200.5%; */
                margin-top: 270px;
                margin-right: 60px;
                margin-left: -25px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        }

        @media screen and (max-width: 490px) {
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                
            }
            .column2{
                float: none;
                padding-top: 10px;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 10px;
                margin-right:150px;
                margin-left:70px;
                width:150px;
                height:130px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 85px;
                margin-left: 20px;
                margin-top:-170px;
                width: 150px;
                height: 130px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 150px;
                width: 450px;
                margin-top: 100px;
                margin-right: 50px;
                margin-left: -25px;
                border: 7px;
                border-left:20px;
                border-right:20px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 92%;
                /* width: 206.5%; */
                margin-top: 270px;
                margin-right: 60px;
                margin-left: -25px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        }

        

        @media screen and (max-width: 480px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:125px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 115px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 215%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 470px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:120px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 115px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 217.5%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 460px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:100px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 100px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 219.5%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media only screen and (min-width: 361px) and (max-width: 469px)  {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:115px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 110px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 219.5%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 450px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:105px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 110px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60x;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 222.5%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 440px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:105px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 95px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 224.5%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 430px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:95px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 100px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 228%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 420px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:100px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 80px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 65px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 230.5%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 410px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left: 95px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 80px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 50px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 234%; */
                margin-top: 260px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }
        

        @media screen and (max-width: 400px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:89px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 75px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 237.5%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 390px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:75px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 75px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 242%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 380px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:70px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 75px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 246%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 370px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:75px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 60px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                /* width: 250%; */
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                /* margin-left: -18px; */

                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 360px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:70px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 55px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: fixed;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }

        @media screen and (max-width: 350px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
            padding: 10px 12px;
            display: inline;
            margin: 5px 5px 5px;
            font-size: 12px;
            border-radius: 50px;
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: center;
                padding-right: 10px;
                padding-left: 10px;
                height: 30px;
                background-color: #2bd56b;
                position: block;
                
            }
            .column2{
                float: none;
                padding-top: 10px;
                position: block;

            }
            #time{
                float: center;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:65px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 50px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                margin-top: 270px;
                margin-right: 50px;
                margin-left: -40px;
                position: inline-block;
            }


            .fa {
                /* padding: 30px; */
                font-size: 11px;
                width: 50px;
                text-align: center;
                text-decoration: none;
              
                
            }

            .fa-instagram {
                margin: -7px;
                color: black;
                font-size: 8px;
                display: inline;
            }

            .fa-envelope{
                /* margin: -16px; */
                display: inline;
                font-size: 8px;
                margin-right:-5px;

            }
        
        }
        @media screen and (max-width: 340px) {
            
            *{
                font-size: 14px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
        
            }
            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:50px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 50px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                margin-top: 270px;
                margin-right: 40px;
                margin-left: -40px;
                position: fixed;
            }

            .bt{
                width:20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top:10px;
                margin-right:2px;
                margin-left:-5px;
                padding:2.5px;
            }
        
            #time{
                float: center;
                font-size: 10px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 3px;
                padding-bottom: 2px;
                padding-top: 3px;     
                border-radius:50px;
            }

            /* li {
                float:left;
                margin: 0.7px;
                padding: 0px;
            
            } */

            .logo{
                width:100%;
                margin-left:1px;
            }


            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                /* margin-left:10px;
                margin-top:10px; */
                margin-right:10px;
                text-align: justify;
                font-size: 10px;
            }

            .column {
                float: none;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 8px;
                opacity: 1;
                text-align: justify;
                padding-right: 20px;
                padding-left: 20px;
                height: 80px;
                background-color: #2bd56b;

                
            }

            #g1{
                width:150px;
                height:200px;
                margin-left:40px;
            }

            #tittle{
                margin-top:10px;
                border: 0px;
                margin-left:80px;
            }
        }
        @media screen and (max-width: 330px) {
            
            *{
                font-size: 14px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
        
            }
            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:50px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 45px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                margin-top: 270px;
                margin-right: 40px;
                margin-left: -40px;
                position: fixed;
            }

            .bt{
                width:20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top:10px;
                margin-right:2px;
                margin-left:-5px;
                padding:2.5px;
            }
        
            #time{
                float: center;
                font-size: 10px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 3px;
                padding-bottom: 2px;
                padding-top: 3px;     
                border-radius:50px;
            }

            /* li {
                float:left;
                margin: 0.7px;
                padding: 0px;
            
            } */

            .logo{
                width:100%;
                margin-left:1px;
            }


            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                /* margin-left:10px;
                margin-top:10px; */
                margin-right:10px;
                text-align: justify;
                font-size: 10px;
            }

            .column {
                float: none;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 8px;
                opacity: 1;
                text-align: justify;
                padding-right: 20px;
                padding-left: 20px;
                height: 80px;
                background-color: #2bd56b;

                
            }

            #g1{
                width:150px;
                height:200px;
                margin-left:40px;
            }

            #tittle{
                margin-top:10px;
                border: 0px;
                margin-left:80px;
            }
        }
        @media screen and (max-width: 320px) {
            
            *{
                font-size: 14px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
        
            }
            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:50px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 40px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                margin-top: 270px;
                margin-right: 40px;
                margin-left: -40px;
                position: fixed;
            }

            .bt{
                width:20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top:10px;
                margin-right:2px;
                margin-left:-5px;
                padding:2.5px;
            }
        
            #time{
                float: center;
                font-size: 10px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 3px;
                padding-bottom: 2px;
                padding-top: 3px;     
                border-radius:50px;
            }

            /* li {
                float:left;
                margin: 0.7px;
                padding: 0px;
            
            } */

            .logo{
                width:100%;
                margin-left:1px;
            }


            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                /* margin-left:10px;
                margin-top:10px; */
                margin-right:10px;
                text-align: justify;
                font-size: 10px;
            }

            .column {
                float: none;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 8px;
                opacity: 1;
                text-align: justify;
                padding-right: 20px;
                padding-left: 20px;
                height: 80px;
                background-color: #2bd56b;

                
            }

            #g1{
                width:150px;
                height:200px;
                margin-left:40px;
            }

            #tittle{
                margin-top:10px;
                border: 0px;
                margin-left:80px;
            }
        }
        @media screen and (max-width: 310px) {
            
            *{
                font-size: 14px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
        
            }
            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:40px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 40px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                margin-top: 270px;
                margin-right: 40px;
                margin-left: -39px;
                position: fixed;
            }

            .bt{
                width:20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top:10px;
                margin-right:2px;
                margin-left:-5px;
                padding:2.5px;
            }
        
            #time{
                float: center;
                font-size: 10px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 3px;
                padding-bottom: 2px;
                padding-top: 3px;     
                border-radius:50px;
            }

            /* li {
                float:left;
                margin: 0.7px;
                padding: 0px;
            
            } */

            .logo{
                width:100%;
                margin-left:1px;
            }


            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                /* margin-left:10px;
                margin-top:10px; */
                margin-right:10px;
                text-align: justify;
                font-size: 10px;
            }

            .column {
                float: none;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 8px;
                opacity: 1;
                text-align: justify;
                padding-right: 20px;
                padding-left: 20px;
                height: 80px;
                background-color: #2bd56b;

                
            }

            #g1{
                width:150px;
                height:200px;
                margin-left:40px;
            }

            #tittle{
                margin-top:10px;
                border: 0px;
                margin-left:80px;
            }
        }

        @media screen and (max-width: 300px) {
            
            *{
                font-size: 14px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
        
            }
            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:30px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 30px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                margin-top: 270px;
                margin-right: 40px;
                margin-left: -40px;
                position: fixed;
            }

            .bt{
                width:20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top:10px;
                margin-right:2px;
                margin-left:-5px;
                padding:2.5px;
            }
        
            #time{
                float: center;
                font-size: 10px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 3px;
                padding-bottom: 2px;
                padding-top: 3px;     
                border-radius:50px;
            }

            /* li {
                float:left;
                margin: 0.7px;
                padding: 0px;
            
            } */

            .logo{
                width:100%;
                margin-left:1px;
            }


            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                /* margin-left:10px;
                margin-top:10px; */
                margin-right:10px;
                text-align: justify;
                font-size: 10px;
            }

            .column {
                float: none;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 8px;
                opacity: 1;
                text-align: justify;
                padding-right: 20px;
                padding-left: 20px;
                height: 80px;
                background-color: #2bd56b;

                
            }

            #g1{
                width:150px;
                height:200px;
                margin-left:40px;
            }

            #tittle{
                margin-top:10px;
                border: 0px;
                margin-left:80px;
            }
        }

        @media screen and (max-width: 290px) {
            
            *{
                font-size: 14px;
            }
            .button-b {
                padding: 10px 12px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
        
            }
            .kiria {
                margin-top: 5px;
                margin-right:300px;
                margin-left:30px;
                width:100px;
                height:120px;
                position: grid;
                float: left;
                margin-bottom:40px;
            }

            .kirib {
                margin-right: 30px;
                margin-left: 10px;
                margin-top:-160px;
                width: 100px;
                height: 120px;
                position: grid;
                float: right;
            }

            .kanana{
                height: 200px;
                width: 95%;
                margin-top: 60px;
                margin-right: 10px;
                margin-left: -40px;
                border: 3px;
                border-left: 10px;
                border-right: 10px;
                border-style: solid;
                border-color: #93db74;
                text-align: justify;
                font-family: Arial, Helvetica, sans-serif;
                position: absolute;
                font-size:6px;
                float:none;
            }

            .kananb{
                height: 200px;
                width: 95%;
                margin-top: 270px;
                margin-right: 40px;
                margin-left: -40px;
                position: fixed;
            }

            .bt{
                width:20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top:10px;
                margin-right:2px;
                margin-left:-5px;
                padding:2.5px;
            }
        
            #time{
                float: center;
                font-size: 10px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 3px;
                padding-bottom: 2px;
                padding-top: 3px;     
                border-radius:50px;
            }

            /* li {
                float:left;
                margin: 0.7px;
                padding: 0px;
            
            } */

            .logo{
                width:100%;
                margin-left:1px;
            }


            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                /* margin-left:10px;
                margin-top:10px; */
                margin-right:10px;
                text-align: justify;
                font-size: 10px;
            }

            .column {
                float: none;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 8px;
                opacity: 1;
                text-align: justify;
                padding-right: 20px;
                padding-left: 20px;
                height: 80px;
                background-color: #2bd56b;

                
            }

            #g1{
                width:150px;
                height:200px;
                margin-left:40px;
            }

            #tittle{
                margin-top:10px;
                border: 0px;
                margin-left:80px;
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