<!DOCTYPE html>
    <html>
        <head>
            <title> Welcome | FELOVA </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet"/>
            
        </head>
        <body>
            <header>
                 <div class="icon-bar">
                    <a href="#"><img src="asset/bsop-troa.png" alt="bsip-troa" class="responsive" width="50px" height="50px"></a>
                    <a href="#"><img src="asset/sv-ipb.png" alt="svipb" class="responsive" width="250px" height="50px"></a>
                </div>
            </header>
                
            <main>
                <div class="tengah">
                    <img src="asset/Logo 1-2.png" alt="logo felova" class="responsive" width="300px" height="250px">
                    <p>
                    <span>Website Fertigasi dan Logger Pada Tanaman Vanili </span>
                    </p>
                        <a href='<?php $baseURL ?>/h2'><button class="button">MULAI</button></a>
                    
                </div>
            </main>              
        </body>
    </html> 
            
        <style>

            html{
                scroll-behavior: smooth;
            }

            * {
                box-sizing: border-box;
                
            }

            body {
               
                font-size: 14px;  
                background: linear-gradient(to bottom right, #2bd56b, #c0ff73);
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            .header{
                display: inline;
                width: 70%;
            }

            .responsive {
                max-width: 100%;
                height: auto; 
            }

            .button {
                border: 1px;
                color: #4CAF50;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                /* margin: 70px 70px; */
                cursor: pointer;
                padding: 20px 150px;
                border-radius: 20px;
                background-color: #fefefe;
                
            }

            .icon-bar {
                position: absolute;
                top: 25px;
                left: 40px;
            }
            
            .tengah {
                width: 30%;
                position: absolute;
                margin-top: 150px;
                margin-left: 500px;
                text-align: center;
                font-size: 26px;
            }
            .child{
                margin-top: 50px;
                margin-left: 0px;
                position: absolute;
                text-align: center;
            }
            

            @media screen and (max-width: 1280px) {
                .tengah{
                    width: 100%; 
                    height: auto;
                    padding: 20px 80px;
                    margin-top: 10%;
                    margin-left: 1%; 
                    margin-right: 1%;        
                }
               
            }

            @media screen and (max-width: 1024px) {
                .tengah{
                    width: 100%; 
                    height: auto;
                    padding: 20px 80px;
                    margin-top: 10%;
                    margin-left: 1%; 
                    margin-right: 1%;        
                }
               
            }
           
            @media screen and (max-width: 800px) {
                .tengah{
                    width: 100%; 
                    height: auto;
                    margin-top: 30%;
                    margin-left: 1%;  
                    padding: 20px 60px;       
                }
               
            }
            @media only screen and (max-width: 400px) {
                .tengah{
                    width: 100%; 
                    height: auto;
                    padding: 20px 80px;
                    margin-top: 30%;
                    margin-left: 1%;  
                    margin-right: 1%;       
                }
              
            } 
            
        </style>
</html>