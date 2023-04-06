<?php 
$sumber = 'http://103.76.120.90/logdata';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
?>

<?php foreach ($data as $row) {

    if($row['blok']  == 2){
        $suhu[] = $row['suhu'];
        $kelembapan[] = $row['kelembapan'];
        $date[] = $row['created_date'];
         $blok[] = $row['blok'];

    }}
?>



<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
            <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet"/> 
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>

        </head>
        <body>
                <header class="header-area header-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <nav class="main-nav">
                                    <ul class="nav">
                                    <img src="asset/Logo 2.png" alt="logo felova"  width="50px" height="50px">
                                    <a href='<?php $baseURL ?>/h2' ><button class="bt"><img src="asset/Icon-Dashboard.png" alt="dashboard" class="responsive" width="50px" height="50px"></button></a>
                                    <a href='<?php $baseURL ?>/h31'><button class="bt active"> <img src="asset/Icon-Grafik.png" alt="grafik" class="responsive" width="50px" height="50px"></button></a>
                                    <a href='<?php $baseURL ?>/h41'><button class="bt"> <img src="asset/Icon-Tables.png" alt="table" class="responsive" width="50px" height="50px"></button></a>
                                    <a href='<?php $baseURL ?>/h5'><button class="bt"> <img src="asset/Icon-Aboutus.png" alt="About Us" class="responsive" width="50px" height="50px"></button></a>

                                    <span class="responsive" style="float: right"> 
                                    <h5 id="time"></h5>
                                </span>
                                    </ul>  
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="button-blok">
                    <a href='<?php $baseURL ?>/h31'><button class="button-b">BLOK 1</button></a>
                    <a href='<?php $baseURL ?>/h32'><button class="button-b active">BLOK 2</button></a>
                    <a href='<?php $baseURL ?>/h33'><button class="button-b">BLOK 3</button></a>
                    <a href='<?php $baseURL ?>/h34'><button class="button-b">BLOK 4</button></a>
                </div>

                <div class="column" style="background-color:#f7f7f6;">
                    <canvas id="myChart" width="200" height="100"></canvas>
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

    .button-b {
        background-color: #93db74;
        border: none;
        color: black;
        padding: 10px 50px;
        text-align: center;
        text-decoration: none;
        display: inline;
        margin: 15px 75px 8px;
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
        padding-top:20px;
        width: 60%;
        /* height:50%; */
        margin: 15px auto;
                
    }

    @media screen and (max-width: 900px) {
            .column {
            padding-top:20px;
            width: 50%;
            height:25%;
            margin: 15px auto;
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
                border-radius:50px;
            }

        }
        
        @media screen and (max-width: 800px) {
            .button-blok {
            display: grid;
            place-items: center; 
        }
            .column {
            padding-top:20px;
            width: 50%;
            height:25%;
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
                border-radius:50px;
            }
        }

        @media screen and (max-width: 700px) {
            .button-blok {
            display: grid;
            place-items: center; 
        }
        
            .column {
            padding-top:20px;
            width: 50%;
            height:25%;
            margin: 15px auto;
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
                border-radius:50px;
            }

        }     
        @media screen and (max-width: 600px) {
            .button-blok {
            display: grid;
            place-items: center; 
        }
            .column {
            padding-top:20px;
            width: 50%;
            height:25%;
            margin: 15px auto;
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
                border-radius:50px;
            }

        }
        @media screen and (max-width: 500px) {
            .button-blok {
            display: grid;
            place-items: center; 
        }

            .column {
            padding-top:20px;
            width: 50%;
            height:25%;
            margin: 15px auto;
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
                border-radius:50px;
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
                width: 95%;
                height: 200px;
            }
            #time {
                float: center;
            }
            .bt.active {
                background-color: #f7f7f6;
                padding: 5px;
                padding-bottom: 1px;
                padding-top: 5px;
                border-radius:50px;
            }
        }



   
    </style>

<script>
    var kelembapan = <?= json_encode($kelembapan); ?>;
    var suhu = <?= json_encode($suhu); ?>;
    var date = <?= json_encode($date); ?>;
    var blok = <?= json_encode($blok); ?>;
    $(document).ready(function() {
        var time_Array = [date];

        var dataSuhu = {
            label: "Suhu (°C)",
            data: suhu,
            lineTension: 0,
            fill: false,
            borderColor: 'red',
            backgroundColor: 'red',

        };

        var dataKelembapan = {
            label: "Kelembapan (%)",
            data: kelembapan,
            lineTension: 0,
            fill: false,
            borderColor: 'blue',
            backgroundColor: 'blue',
        };


        var ctx = document.getElementById('myChart').getContext('2d');

        const data = {
            labels: date,
            datasets: [dataSuhu, dataKelembapan]
        }

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
                            drawOnChartArea: false,
                        },
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        ticks: {
                            beginAtZero: true
                        },
                        grid: {
                            drawOnChartArea: false,
                        },
                    },
                    xAxes: [{
                        type: 'time',
                        time: {
                            parser: 'YYYY-MM-DD HH:mm:ss',
                            unit: 'date',
                            displayFormats: {
                                'date': 'YYYY-MM-DD',
                                'minute': 'YYYY-MM-DD HH:mm:ss',
                                'hour': 'YYYY-MM-DD HH:mm:ss'
                            }
                        },
                        ticks: {
                            source: 'data'
                        }
                    }]
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