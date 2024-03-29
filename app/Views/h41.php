<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
            <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet"/> 
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
        </head>

        <body>
                <header class="header-area header-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <nav class="main-nav">
                                    <ul class="nav">
                                    <a href='<?php $baseURL ?>/index.php'> <button class="bt "><img src="asset/Logo 2.png" alt="dashboard" class="logo" class="responsive" width="50px" height="50px"></button></a>
                                    <!-- <img src="asset/Logo 2.png" alt="logo felova"  width="50px" height="50px"> -->
                                   <a href='<?php $baseURL ?>/h2'><button  class="bt"><img src="asset/Icon-Dashboard.png" alt="dashboard" class="responsive" width="50px" height="50px"></button></a>
                                    <a href='<?php $baseURL ?>/h31'><button class="bt "> <img src="asset/Icon-Grafik.png" alt="grafik" class="responsive" width="50px" height="50px"></button></a>
                                    <a href='<?php $baseURL ?>/h41'><button class="bt active"> <img src="asset/Icon-Tables.png" alt="table" class="responsive" width="50px" height="50px"></button></a>
                                    <a href='<?php $baseURL ?>/h5'><button class="bt"> <img src="asset/Icon-Aboutus.png" alt="About Us" class="responsive" width="50px" height="50px"></button></a>
                                    <span class="responsive" style="float: right"> <h5 id="time"></h5></span>
                                    </ul>    
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>
        
                    <div class="column2" style="background-color:#f7f7f6;">
                        <table id="data" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Suhu</th>
                                    <th>Kelembapan</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $sumber = 'http://103.76.120.90/logdata';
                            $konten = file_get_contents($sumber);
                            $data = json_decode($konten, true);
                            
                                    
                            $no_urut = 0;
                                 foreach ($data as $row) {
                                   

                                    if($row['blok']  == 1){
                                        $no_urut++;
                                        $suhu = $row['suhu'];
                                        $kelembapan = $row['kelembapan'];
                                        $date = $row['created_date'];
                                        $blok = $row['blok'];
                                        echo '<tr>
                                        <td>'.$no_urut.'</td>
                                        <td>'.$suhu.'</td>
                                        <td>'.$kelembapan.'</td>
                                        <td>'.$date.'</td>
                                         </tr>';

                                    }}
                                    ?>
                            </tbody>
                        </table>
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
        a{
        text-decoration: none;
        }
        a:visited{
        color: inherit;
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
            text-align: center;
            padding-right: 50px;
            padding-left: 20px;
            height: 80px;
            background-color: #2bd56b
        }

        .column2 {
            float: right;
            width: 95%;
            margin-top: 30px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            opacity: 1;
            text-align: justify;
            padding-right: 70px;
            padding-left: 20px;
            height: 80px;
            background-color: #2bd56b;
           
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .button {
            display: block;
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

        .button-b {
            background-color: #93db74;
            border: none;
            color: black;
            padding: 10px 60px;
            text-align: center;
            text-decoration: none;
            display: block;
            margin: 80px 70px 75px;
            cursor: pointer;
            border-radius: 16px;
            position: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 16px;
        }

        .button-b.active {
            background-color: #c1ff72;

        }

        .button-b:hover {
            background-color: #c1ff72;
        }

        /* th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 0px;
                margin: 0 auto;
            }
        
            tr { height: 100px; } */
    
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
                padding-right: 20px;
                padding-left: 70px;

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
                padding-right: 60px;
                padding-left: 90px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
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
                padding-right: 50px;
                padding-left: 70px;

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 430px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 420px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 410px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 395px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 390px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 370px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 365px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 355px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 345px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
                

            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 335px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
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
                padding-right: 50px;
                padding-left: 35px;
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

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 330px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }

        @media screen and (max-width: 390px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 5px 10px;
                display: inline;
                margin: 0px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
                
       
            }
            .column1{
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
                padding-right: 50px;
                padding-left: 35px;
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

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 310px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }

        @media screen and (max-width: 380px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 5px 10px;
                display: inline;
                margin: 0px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
                
       
            }
            .column1{
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
                padding-right: 50px;
                padding-left: 45px;
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

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 295px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }

        @media screen and (max-width: 370px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 5px 10px;
                display: inline;
                margin: 0px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
                
       
            }
            .column1{
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
                padding-right: 50px;
                padding-left: 45px;
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

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 280px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }

        @media screen and (max-width: 360px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 5px 10px;
                display: inline;
                margin: 0px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
                
       
            }
            .column1{
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
                padding-right: 50px;
                padding-left: 45px;
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

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 270px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }


        @media screen and (max-width: 350px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 5px 10px;
                display: inline;
                margin: 0px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
                
       
            }
            .column1{
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
                padding-right: 50px;
                padding-left: 45px;
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

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 260px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }

        @media screen and (max-width: 340px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 5px 10px;
                display: inline;
                margin: 0px 5px 5px;
                font-size: 12px;
                border-radius: 50px;
                
       
            }
            .column1{
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
                padding-right: 50px;
                padding-left: 45px;

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

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 250px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }

        @media screen and (max-width: 330px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 5px 10px;
                display: inline;
                margin: 0px 20px 5px;
                font-size: 12px;
                border-radius: 50px;
                
       
            }
            .column1{
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
                padding-right: 50px;
                padding-left: 45px;

            }
            #time{
                float: center;

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

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 240px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }

        @media screen and (max-width: 320px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 5px 10px;
                display: inline;
                margin: 0px 20px 5px;
                font-size: 12px;
                border-radius: 50px;
                
       
            }
            .column1{
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
                padding-right: 50px;
                padding-left: 45px;

            }
            #time{
                float: center;

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

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 235px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }

        @media screen and (max-width: 310px) {
            
            *{
                font-size: 12px;
            }
            .button-b {
                padding: 7px 10px;
                display: inline;
                margin: 0px 20px 3px;
                font-size: 12px;
                border-radius: 50px;
                
       
            }
            .column1{
                /* float: left; */
                float: none;
                width: 100%;
                margin-top: 15px;
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
                padding-right: 70px;
                padding-left: 40px;

            }
            #time{
                float: center;

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
            

            .bt.active {
                background-color: #f7f7f6;
                padding: 3px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 235px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }
        }


        @media screen and (max-width: 300px) {
            
            *{
                font-size: 14px;
            }

            .button-b {
                padding: 5px 10px;
                display: inline;
                margin: -7px 20px 10px;
                font-size: 12px;
                border-radius: 50px;
    
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

            .logo{
                width:100%;
                margin-left:1px;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 230px;
                margin: 0 auto;
            }
        
            tr { height: 50px; }


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

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/4.2.2/css/fixedColumns.dataTables.min.css"></script>
        
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
        <script>
            $(document).ready(function() {
                $('#data').DataTable( {
                    dom: 'Bfrtip ',
                    buttons: [
                        {
                            extend:    'excelHtml5',
                            text:      'Download',
                            titleAttr: 'Excel'
                        }
                    ],
                    scrollY:        "300px",
                    scrollX:        true,
                    scrollCollapse: true,
                    paging:         false,
                    fixedColumns:   {
                    heightMatch: 'semiauto'},
                } );
            } ); 
        </script>
        
        <!-- <script>
        $('button-b').click(function () {
            $('button-b').removeClass('active');
            $(this).addClass('active');
        });
        </script> -->
        <!-- <script>
           const btnb = document.querySelectorAll('.button-b');

            btnb.forEach( btnbel => {
                btnbel.addEventListener('click', () =>{
                    document.querySelector('.button-b:hover')?.classList.remove('button-b:hover');
                    btnbel.classList.add('button-b:hover');  
               })
           })
        </script> -->

</html>