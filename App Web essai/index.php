<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" /> 
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Eneam</title>

    <style type="text/css">
            
       [class*="col"] { margin-bottom: 20px; }     
        .form-inline { margin-top: 20px}    
          img { width: 15%; }  

           .well {      
                
                padding: 20px;      }   
                h1, h2{
                    text-align: center;
                    width: 60%;
                    margin-left: 20%;
                    font-weight: bold;

                } 
                body{
                    background-image: url("asi.jpg");
border-radius: 10px;
color:white;}

                    </style>

</head>
<body>









<form action="index.php"method="POST">
<div class="container" id="deux">
    <div class="container" id="trois">
        <form role="form" class="form-horizontal" action=""></form>
            <div class="form-group">
                <label for="login" class="control-label col-sm-3">login</label>
                <div class="col-sm-4">
                    <input type="login" class="form-control" autofocus id="login" name="login">
                </div>
            </div><br>
            <div class="form-group">
                    <label for="password" class="control-label col-sm-3">Password</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="password" name="password">
                        <br>
                        <label> <input type="checkbox">Remember me!</label>
                        <br>
                        <button type="submit" class="btn btn-success glyphicon glyphicon-ok form-control" >Submit</button>
                    </div>
                </div>
    </div>
</div>
                    </form>




<?php
try {
    $bdd=new PDO('mysql:host=;dbname=mabase','root','');

}
catch(Exception $e)
{
    die('Error'.$e-> getMessage());
}
if(  isset($_POST['login']) && isset($_POST['password'])  && $_POST['login']=="KPOTON" &&  $_POST['password']=="Gérardo" )
{


header('location:PRO2.html');
}
else{}
?>


                    </body>
                    </html>