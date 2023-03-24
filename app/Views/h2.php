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
                                        <img src="asset/Logo 2.png" alt="logo felova"  width="50px" height="50px">
                                        <a href='<?php $baseURL ?>/h2' class="bt active">  ><img src="asset/Icon-Dashboard.png" alt="dashboard" class="responsive" width="50px" height="50px"></a>
                                        <a href='<?php $baseURL ?>/h31'class="bt"> <img src="asset/Icon-Grafik.png" alt="grafik" class="responsive" width="50px" height="50px"></a>
                                        <a href='<?php $baseURL ?>/h41'class="bt"> <img src="asset/Icon-Tables.png" alt="table" class="responsive" width="50px" height="50px"></a>
                                        <a href='<?php $baseURL ?>/h5'class="bt"> <img src="asset/Icon-Aboutus.png" alt="About Us" class="responsive" width="50px" height="50px"></a>
                                        <span class="responsive" style="float: right"> <h5 id="time"></h5></span>
                                    </ul>  
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">
                    <div class="column" style="background-color:#f7f7f6;">
                        <img src="asset/Capture 3.png" alt="logo felova" class="responsive" width="570px" height="600px">
                    </div>
                    <div class="column" style="background-color:#f7f7f6;">
                        <h3>FELOPEDIA</h3>
                        <h6 id="desc">Vanili atau Vanilla Planifolia merupakan tanaman dari keluarga orkid (Orchidaceae) yang berasal dari Meksiko dan Amerika Tengah. Kini, Vanili sudah tersebar di berbagai wilayah termasuk Madagaskar, Indonesia, dan India. Vanili ditanam untuk menghasilkan bunga dan buah vanili yang digunakan sebagai bahan dasar pembuatan makanan dan minuman. Tanaman Vanili membutuhkan iklim hangat dan lembap untuk tumbuh dengan baik pada kisaran suhu 20-30 derajat.</h6>
                        <img src="asset/Capture 2.png" alt="logo felova" class="responsive" >
                    </div>
                </div>
        </body>
    </html> 
    <br/><br/>

    <style>
    * {
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
        /* overflow: hidden; */
    }

    /* li a{
        display: block;
        color: white;
        padding: 5px 5px;
        font-size: 5px;
    } */

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

    .nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 5px 10px;
        font-size: 64px;
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

    .column {
        float: left;
        width: 50%;
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
            padding: 0 5px 5px 5px;

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