<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet"/> 
        </head>
        <body>
                <header class="header-area header-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <nav class="main-nav">
                                    <ul class="nav">
                                        <!-- <img src="asset/Logo 2.png" alt="logo felova"  width="50px" height="50px"> -->
                                        <a href='<?php $baseURL ?>/index.php'> <button class="bt "><img src="asset/Logo 2.png" alt="dashboard" class ="logo" class="responsive" width="50px" height="50px"></button></a>
                                        <a href='<?php $baseURL ?>/h2'> <button class="bt active"><img src="asset/Icon-Dashboard.png" alt="dashboard" class="responsive" width="50px" height="50px"></button></a>
                                        <a href='<?php $baseURL ?>/h31'> <button class="bt"> <img src="asset/Icon-Grafik.png" alt="grafik" class="responsive" width="50px" height="50px"></button></a>
                                        <a href='<?php $baseURL ?>/h41'> <button class="bt"> <img src="asset/Icon-Tables.png" alt="table" class="responsive" width="50px" height="50px"></button></a>
                                        <a href='<?php $baseURL ?>/h5'> <button class="bt"> <img src="asset/Icon-Aboutus.png" alt="About Us" class="responsive" width="50px" height="50px"></button></a>
                                        <span class="responsive" style="float: right"> <h5 id="time"></h5></span>
                                    </ul>  
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">
                    <div class="column" style="background-color:#f7f7f6;">
                        <img src="asset/Capture 3.png" id="g1" alt="logo felova" class="responsive" >
                        <h3 id="tittle">FELOPEDIA</h3>
                        <h6 id="desc">Vanili atau Vanilla Planifolia merupakan tanaman dari keluarga orkid (Orchidaceae) yang berasal dari Meksiko dan Amerika Tengah. Kini, Vanili sudah tersebar di berbagai wilayah termasuk Madagaskar, Indonesia, dan India. Vanili ditanam untuk menghasilkan bunga dan buah vanili yang digunakan sebagai bahan dasar pembuatan makanan dan minuman. Tanaman Vanili membutuhkan iklim hangat dan lembap untuk tumbuh dengan baik pada kisaran suhu 20-30 derajat.</h6>

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
        display:flex;
        margin-left:250px;
        margin-top:-250px;
        font-size:24px;
    }

    .column {
        float: left;
        width: 100%;
        margin-top: 50px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 24px;
        opacity: 1;
        text-align: justify;
        padding-right: 50px;
        padding-left: 50px;
        height: 80px;
        background-color: #2bd56b;
        /* margin-right:10px; */
    }

    #g1{
            width:150px;
            height:200px;
    }

    #tittle{
        margin-top:10px;
        border: 0px;
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

    @media screen and (max-width: 1024px) {
        .button-b {
            display: inline;
            margin: 20px 20px 10px;
            position: left;
        }
      

        .bt.active {
            background-color: #f7f7f6;
            padding: 5px;
            padding-bottom: 1px;
            padding-top: 5px;
            border-radius:50px;
        }
        #desc{
        border: 30px;
        border-style: solid;
        border-color: #93db74;
        background-color: #93db74;
        font-family: Arial, Helvetica, sans-serif;
        display:flex;
        margin-left:250px;
        margin-top:-200px;
    }

        .column {
            float: left;
            width: 100%;
            margin-top: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            opacity: 1;
            text-align: justify;
            padding-right: 50px;
            padding-left: 50px;
            height: 80px;
            background-color: #2bd56b;
            /* margin-right:10px; */
        }

        #g1{
                width:150px;
                height:200px;
        }

        #tittle{
            margin-top:10px;
            border: 0px;
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
        #desc{
        border: 30px;
        border-style: solid;
        border-color: #93db74;
        background-color: #93db74;
        font-family: Arial, Helvetica, sans-serif;
        display:flex;
        margin-left:250px;
        margin-top:-200px;
    }

        .column {
            float: left;
            width: 100%;
            margin-top: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            opacity: 1;
            text-align: justify;
            padding-right: 50px;
            padding-left: 50px;
            height: 80px;
            background-color: #2bd56b;
            /* margin-right:10px; */
        }

        #g1{
                width:150px;
                height:200px;
        }

        #tittle{
            margin-top:10px;
            border: 0px;
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
        #desc{
            border: 30px;
            border-style: solid;
            border-color: #93db74;
            background-color: #93db74;
            font-family: Arial, Helvetica, sans-serif;
            display:flex;
            margin-left:250px;
            margin-top:-200px;
        }

        .column {
            float: left;
            width: 100%;
            margin-top: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            opacity: 1;
            text-align: justify;
            padding-right: 50px;
            padding-left: 50px;
            height: 80px;
            background-color: #2bd56b;
            /* margin-right:10px; */
        }

        #g1{
                width:150px;
                height:200px;
        }

        #tittle{
            margin-top:10px;
            border: 0px;
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
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }
            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                display:flex;
                margin-left:250px;
                margin-top:-200px;
            }

            .column {
                float: left;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 24px;
                opacity: 1;
                text-align: justify;
                padding-right: 50px;
                padding-left: 50px;
                height: 80px;
                background-color: #2bd56b;
                /* margin-right:10px; */
            }

            #g1{
                    width:150px;
                    height:200px;
            }

            #tittle{
                margin-top:10px;
                border: 0px;
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
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }
            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                display:flex;
                margin-left:250px;
                margin-top:-200px;
            }

            .column {
                float: left;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 24px;
                opacity: 1;
                text-align: justify;
                padding-right: 50px;
                padding-left: 50px;
                height: 80px;
                background-color: #2bd56b;
                /* margin-right:10px; */
            }

            #g1{
                    width:150px;
                    height:200px;
            }

            #tittle{
                margin-top:10px;
                border: 0px;
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
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                /* display:flex; */
                margin-left:10px;
                margin-top:10px;
                font-size: 12px;
                text-align: justify;
            }

            .column {
                float: left;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 24px;
                opacity: 1;
                text-align: justify;
                padding-right: 50px;
                padding-left: 50px;
                height: 80px;
                background-color: #2bd56b;
                /* margin-right:10px; */
            }

            #g1{
                    width:150px;
                    height:200px;
                    margin-left: 80px;
            }

            #tittle{
                margin-top:10px;
                border: 0px;
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

            #desc{
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                margin-left:10px;
                margin-top:10px;
                font-size: 12px;
                text-align: justify;
            }

            .column {
                float: none;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                opacity: 1;
                text-align: justify;
                padding-right: 50px;
                padding-left: 50px;
                height: 80px;
                background-color: #2bd56b;
                /* margin-right:10px; */
            }

            #g1{
                width:150px;
                height:200px;
                margin-left: 70px;
            }

            #tittle{
                margin-top:10px;
                margin-left:110px;
                border: 0px;
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

            .bt{
                width:70%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top:10px
            }
        
            #time{
                float: center;
                font-size: 10px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            li {
                float:left;
                margin: 0.7px;
                padding: 0px;
            
            }

            .logo{
                width:80%;
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