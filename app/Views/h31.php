<?php
// $sumber = 'http://103.76.120.90/logdata';
// $konten = file_get_contents($sumber);
// $data = json_decode($konten, true);
// $sql = "SELECT TIME(created_date::TIME) AS date
// , ROUND(AVG(kelembapan),2) as kelembapan
// , ROUND(AVG(suhu),2) as suhu FROM logdata GROUP BY 1";

// $sql = "SELECT DATE(created_date) AS date,
// HOUR(created_date) AS hour,
// ROUND(AVG(kelembapan),2) as kelembapan,
// ROUND(AVG(suhu),2) as suhu FROM logdata GROUP BY DATE(created_date), HOUR(created_date), 1 ORDER BY date, hour";

$sql = "SELECT DATE(created_date) AS date,
HOUR(created_date) AS hour,
ROUND(AVG(kelembapan), 2) AS kelembapan,
ROUND(AVG(suhu), 2) AS suhu
FROM logdata
WHERE MINUTE(created_date) = 0 AND SECOND(created_date) = 0
GROUP BY DATE(created_date), HOUR(created_date), 1
ORDER BY date, hour";

?>


<?php foreach ($average as $row) {

    $suhu[] = $row['suhu'];
    $kelembapan[] = $row['kelembapan'];
    $hour[] = $row['hour'];
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            font-size: 14px;
            background: rgba(246, 247, 247, 1);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        a {
            text-decoration: none;
        }

        a:visited {
            color: inherit;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: left;
            margin: 5px;

        }

        li a {
            display: block;
            color: white;
            padding: 5px 5px;
            font-size: 5px;
        }

        .responsive {
            max-width: 100%;
            height: auto;
        }

        #time {
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


        .button {
            display: inline-block;
        }

        .bt {
            border-radius: 50%;
            border: 0px;
            background-color: #2bd56b;
            cursor: pointer;
            padding-bottom: 5px;
        }

        .bt.active {
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
            padding: 12px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 20px 115px 8px;
            cursor: pointer;
            border-radius: 16px;
            position: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;

        }

        .button-b:hover {
            background-color: #c1ff72;
        }

        .button-b.active {
            background-color: #c1ff72;

        }

        .column {
            padding-top: 20px;
            width: 60%;
            /* height:50%; */
            margin: 15px auto;

        }

        @media screen and (max-width: 1440px) {
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0px;
                font-size: 14px;
                background: rgba(246, 247, 247, 1);
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            a {
                text-decoration: none;
            }

            a:visited {
                color: inherit;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            li {
                float: left;
                margin: 5px;

            }

            li a {
                display: block;
                color: white;
                padding: 5px 5px;
                font-size: 5px;
            }

            .responsive {
                max-width: 100%;
                height: auto;
            }

            #time {
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


            .button {
                display: inline-block;
            }

            .bt {
                border-radius: 50%;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                padding-bottom: 5px;
            }

            .bt.active {
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
                padding: 12px 50px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                margin: 20px 92px 8px;
                cursor: pointer;
                border-radius: 16px;
                position: center;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;

            }

            .button-b:hover {
                background-color: #c1ff72;
            }

            .button-b.active {
                background-color: #c1ff72;

            }

            .column {
                padding-top: 20px;
                width: 60%; */
                height:50%;
                margin: 15px auto;
                /* width: 100%;
                height: 150px; */
                padding-right: 70px;
                padding-left: 10px;
                

            }
        }

        @media screen and (max-width: 900px) {
            .column {
                padding-top: 20px;
                /* width: 50%;
                height: 25%; */
                margin: 15px auto;
                width: 65%;
                height: 300px;
                padding-right: 50px;
                padding-left: -5px;
            }

            .button-b {
                margin: 20px 145px 10px;
                position: center;
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

            /* #myChart {
                width: 500px;
                height: 800px;
                font-size: 24px;
                position: 
            } */

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }


        }

        @media screen and (max-width: 800px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .column {
                padding-top: 20px;
                /* width: 50%;
                height: 25%; */
                width: 70%;
                height: 100%;
                padding-right: 40px;
                padding-left: -5px;
                margin: 15px auto;
            }

            .left,
            .main,
            .right {
                width: 100%;
                /* The width is 100%, when the viewport is 800px or smaller */
            }

            #myChart {
                width: 500px;
                height: 800px;

            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }
        }

        @media screen and (max-width: 700px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .column {
                padding-top: 20px;
                /* width: 50%;
                height: 25%; */
                margin: 15px auto;

                width: 80%;
                height: 100%;
                padding-right: 40px;
                padding-left: -5px;
            }

            .button-b {
                margin: 20px 85px 10px;
                position: center;
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

            /* #myChart {
                width: 500px;
                height: 300px;

            } */

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }

        }

        @media screen and (max-width: 600px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .column {
                padding-top: 20px;
                /* width: 50%;
                height: 25%; */
                margin: 15px auto;

                width: 100%;
                height: 300px;
                padding-right: 35px;
                padding-left: -5px;
            }

            .button-b {
                margin: 20px 85px 10px;
                position: center;
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

            #myChart {
                width: 500px;
                height: 800px;

            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }

        }

        @media screen and (max-width: 500px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .column {
                /* padding-top: 20px;
                margin: 15px auto; */

                width: 100%;
                height: 300px;
                padding-right: 35px;
                padding-left: -5px;
            }

            .button-b {
                margin: 20px 85px 10px;
                position: center;
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

            #myChart {
                width: 500px;
                height: 800px;

            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }


        }

        @media screen and (max-width: 400px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .button-b {
                margin: 10px 50px 8px;
                position: center;
                place-items: center;
            }

            .column {
                width: 100%;
                height: 200px;
                padding-right: 30px;
                padding-left: -10px;
            }

            #time {
                float: center;
            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }

            .bt {
                border-radius: 50%;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                padding-bottom: 5px;
                margin: -5px;
            }
        }

        @media screen and (max-width: 370px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .button-b {
                margin: 10px 50px 8px;
                position: center;
                place-items: center;
            }

            .column {
                width: 100%;
                height: 50px;
                padding-right: 45px;
                padding-left: -20px;
            }

            #time {
                float: center;
            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }

            .bt {
                border-radius: 50%;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                padding-bottom: 5px;
                margin: -5px;
            }
        }

        @media screen and (max-width: 350px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .button-b {
                margin: 10px 50px 8px;
                position: center;
                place-items: center;
            }

            .column {
                width: 100%;
                height: 50px;
                padding-right: 35px;
                padding-left: -60px;
            }

            #time {
                float: center;
            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }

            .bt {
                border-radius: 50%;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                padding-bottom: 5px;
                margin: -5px;
            }
        }

        @media screen and (max-width: 340px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .button-b {
                margin: 10px 50px 8px;
                position: center;
                place-items: center;
            }

            .column {
                width: 100%;
                height: 90px;
                padding-right: 35px;
                padding-left: -10px;
            }

            #time {
                float: center;
            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }

            .bt {
                border-radius: 50%;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                padding-bottom: 5px;
                margin: -5px;
            }
        }

        

        @media screen and (max-width: 330px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .button-b {
                margin: 10px 50px 8px;
                position: center;
                place-items: center;
            }

            .column {
                width: 100%;
                height: 70px;
                padding-right: 35px;
                padding-left: -55px;
            }

            #time {
                float: center;
            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }

            .bt {
                width: 20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top: 10px;
                margin-right: -9px;
                margin-left: -5px;

            }
        }

        @media screen and (max-width: 320px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .button-b {
                margin: 10px 50px 8px;
                position: center;
                place-items: center;
            }

            .column {
                width: 100%;
                height: 300px;
                padding-right: 45px;
                padding-left: -5px;

                
            }

            #time {
                float: center;
            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }

            .bt {
                width: 20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top: 10px;
                margin-right: -9px;
                margin-left: -5px;

            }
        }

        @media screen and (max-width: 310px) {
            .button-blok {
                display: grid;
                place-items: center;
            }

            .button-b {
                margin: 10px 50px 8px;
                position: center;
                place-items: center;
            }

            .column {
                width: 100%;
                height: 300px;
                padding-right: 45px;
                padding-left: -5px;
            }

            #time {
                float: center;
            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius: 50px;
            }

            .bt {
                width: 20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top: 10px;
                margin-right: -9px;
                margin-left: -5px;

            }
        }

        @media screen and (max-width: 300px) {

            * {
                font-size: 14px;
            }

            .button-b {
                padding: 10px 25px;
                display: inline;
                margin: 5px 5px 5px;
                font-size: 12px;
                border-radius: 50px;

            }

            .bt {
                width: 20%;
                padding: 0px;
                border: 0px;
                background-color: #2bd56b;
                cursor: pointer;
                display: inline;
                margin-top: 10px;
                margin-right: 2px;
                margin-left: -5px;
                padding: 2.5px;
            }

            #time {
                float: center;
                font-size: 10px;

            }

            .bt.active {
                background-color: #f7f7f6;
                padding: 3px;
                padding-bottom: 2px;
                padding-top: 3px;
                border-radius: 50px;
            }

            /* li {
                float:left;
                margin: 0.7px;
                padding: 0px;
            
            } */

            .logo {
                width: 100%;
                margin-left: 1px;
            }


            #desc {
                border: 30px;
                border-style: solid;
                border-color: #93db74;
                background-color: #93db74;
                font-family: Arial, Helvetica, sans-serif;
                /* margin-left:10px;
                margin-top:10px; */
                margin-right: 10px;
                text-align: justify;
                font-size: 10px;
            }

            .column {
                float: none;
                width: 100%;
                margin-top: 0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 6px;
                opacity: 1;
                text-align: justify;
                padding-right: 45px;
                padding-left: -30px;
                height: 80px;
                background-color: #2bd56b;


            }
            #myChart {
                width: 400px;
                height: 60px;
            }

            #g1 {
                width: 150px;
                height: 200px;
                margin-left: 40px;
            }

            #tittle {
                margin-top: 10px;
                border: 0px;
                margin-left: 80px;
            }
        }
    </style>
</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <ul class="nav">
                            <a href='<?php $baseURL ?>/index.php'> <button class="bt "><img src="asset/Logo 2.png" alt="dashboard" class="responsive" class="logo" width="50px" height="50px"></button></a>
                            <!-- <li><img src="asset/Logo 2.png" alt="logo felova"  width="50px" height="50px"></li> -->
                            <a href='<?php $baseURL ?>/h2'><button class="bt"><img src="asset/Icon-Dashboard.png" alt="dashboard" class="responsive" width="50px" height="50px"></button></a>
                            <a href='<?php $baseURL ?>/h31'><button class="bt active"><img src="asset/Icon-Grafik.png" alt="grafik" class="responsive" width="50px" height="50px"></button></a>
                            <a href='<?php $baseURL ?>/h41'><button class="bt"><img src="asset/Icon-Tables.png" alt="table" class="responsive" width="50px" height="50px"></button></a>
                            <a href='<?php $baseURL ?>/h5'><button class="bt"><img src="asset/Icon-Aboutus.png" alt="About Us" class="responsive" width="50px" height="50px"></button></a>
                            <span class="responsive" style="float: right">
                                <h5 id="time"></h5>
                            </span>
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </header>



    <div class="column" style="background-color:#f7f7f6;" >
        <canvas id="myChart" width="100%" height="65%"></canvas>
    </div>


</body>

</html>
<br /><br />

<script>
    var kelembapan = <?= json_encode($kelembapan); ?>;
    var suhu = <?= json_encode($suhu); ?>;
    var hour = <?= json_encode($hour); ?>;
    var hour = <?= json_encode($hour); ?>;
    $(document).ready(function() {
        var dataSuhu = {
            label: "Suhu (°C)",
            data: suhu,
            lineTension: 0,
            fill: false,
            borderColor: 'red',
            backgroundColor: 'red',
            size: 12
        };

        var dataKelembapan = {
            label: "Kelembapan",
            data: kelembapan,
            lineTension: 0,
            fill: false,
            borderColor: 'blue',
            backgroundColor: 'blue',
        };

        var ctx = document.getElementById('myChart').getContext('2d');

        const data = {
            labels: hour,
            datasets: [dataSuhu, dataKelembapan]
        };

        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                stacked: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Chart.js Line Chart - Multi Axis'
                    }
                },
                scales: {
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                        ticks: {
                            beginAtZero: true
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        ticks: {
                            beginAtZero: true
                        },
                        grid: {
                            drawOnChartArea: false
                        },
                        suggestedMin: 20,
                        suggestedMax: 600
                    },
                    x: {
                        type: 'time',
                        time: {
                            parser: 'YYYY-MM-DD HH:mm:ss',
                            unit: 'hour',
                            stepSize: 1,
                            displayFormats: {
                                hour: 'HH:mm'
                            }
                        },
                        ticks: {
                            source: 'data',
                            autoSkip: true,
                            maxTicksLimit: 24, // Adjust the maximum number of ticks as needed
                            maxRotation: 90, // Prevent label rotation
                            minRotation: 90 // Prevent label rotation
                        },
                        font: {
                            size: 8
                        },
                        position: 'right'
                    }

                }
            }
        });
    });
</script>



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