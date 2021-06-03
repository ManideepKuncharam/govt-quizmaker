<!doctype html>
<html lang="en" style="background-image: url("img/register.jpg");">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/test maker.png" type="image/icon type">
    <title>SchoolEdu | Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  
<!------ Include the above in your HEAD tag ---------->
<body >
  <style>
    .register{
    background-image: url("img/register.jpg");
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #0062cc;
    font-weight: bold;
    color: #f8f9fa;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
  </style>
<div class="container register" style="max-width: 100%;" >
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="img/test maker.png" style="width: 200px; height: 100px;">
                        <h3 style="color:white">Welcome</h3>
                        <p style="color:white">Online Quiz Platforms for Students</p>
                        <a href="login.php"><button class="btnRegister">Login</button></a>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="from-group">
                        </div>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <img src="img/student.png" style="width: 300px; height: 250px;">
                                    </div>
                                    <div class="col-md-6">                   
                                    <form method='post' action='valid1.php'> 
                                    <div class="form-group">
                                            <input type="email" required class="form-control" placeholder=" Email-ID *" name='email' id="myInput" />
                                        </div>
                                    <div class="form-group">
                                          <select class="form-control" name="security">
                                            <option value="q1">What is Your Father/ Mother Name?</option>
                                            <option value="q2">What is Your School Name?</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" required class="form-control" placeholder="Security Answer *" name='sans' id="myInput" />
                                        </div>
                                        
                                            <button class="btnRegister" name='next1'>Next</button>
                                      </form>
                                    </center>
                                </div>
                            
                            
                            </div>



                            
</body>
