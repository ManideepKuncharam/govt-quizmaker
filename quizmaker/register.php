<?php 
include('navbar.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <title>Online Free Quiz Maker Create the Best quizzes | SchoolEdu</title>
    <link rel="icon" href="img/school.png" type="image/icon type">
    <meta property="og:type" content="article" />
<meta property="og:title" content="Quiz Maker Free Online" />
<meta property="og:description" content="Online Free Quiz Maker Create the Best quizzes | SchoolEdu" />
<meta property="og:url" content="https://quizmaker.schooledu.co.in" />
<meta property="og:image" content="/sicon.png" />
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="article:tag" content="Quiz Maker" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Online Free Quiz Maker Create the Best quizzes | SchoolEdu"/>
<meta name="twitter:title" content="Quiz Maker Free Online" />
<meta name="twitter:image" content="/sicon.png" />
<!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f3f7eae19f8fe00127a25af&product=sop' async='async'></script>
  </head>
<!------ Include the above in your HEAD tag ---------->

<body >

  <style>
        .head{
    background-image: url("img/register.jpg");
    margin-top: 3%;
    padding: 3%;
}
  
      .body{
    background-image: url("img/register.jpg");
    margin-top: 3%;
    padding: 3%;
}
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
html {
  overflow-y: scroll; 
}
  </style>
<div class="container register" style="max-width: 100%;" >
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="img/school.png" style="width: 200px; height: 100px;">
                        <h2><b>Welcome</b></h2>
                        <p>Online Quiz Platforms for Students</p>
                        <!--<input type="submit" class="btnRegister" href="accounts/login" value="Login"/>-->
                        <a href="login.php"><button class="btnRegister" >login</button></a>

                    </div>
                    <div class="col-md-9 register-right">
                           <div class="from-group">
                        </div></br>
                        <div class="tab-content" id="myTabContent">
                        <center><b><h4 style="color:red;">
                        <?php  if(isset($_GET['id2']))
                            {
                            echo $_GET['id2'];
                            } ?></h4></b>
                        <center>
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <?php if(isset($_GET['id']))
                                    {
                                        echo $_GET['id'];
                                    }
                                    ?>
                                <h3 class="register-heading">Registration</h3>
                                <form method='POST' action='rvalid.php'>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="text" required class="form-control" placeholder="FirstName *" name="firstname"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required class="form-control" placeholder="LastName *" name="lastname"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" required class="form-control" placeholder="Email *" name="email"/>
                                        </div>
                                        <div class="form-group">
                                          <select class="form-control" name="type">
                                              <option value="">Select Designation</option>
                                              <option value="CRT ( Bio.Science )">CRT ( Bio.Science )</option>
                                              <option value="CRT ( English )">CRT ( English )</option>
                                              <option value="CRT ( Hindi )">CRT ( Hindi )</option>
                                              <option value="CRT ( Mathematics )">CRT ( Mathematics )</option>
                                              <option value="CRT ( Phy.Science )">CRT ( Phy.Science )</option>
                                              <option value="CRT ( Social Studies )">CRT ( Social Studies )</option>
                                              <option value="Junior Lecturer / PGT ( English )">Junior Lecturer / PGT ( English )</option>
                                              <option value="Junior Lecturer / PGT ( Hindi )">Junior Lecturer / PGT ( Hindi )</option>
                                              <option value="Junior Lecturer / PGT ( Mathematics )">Junior Lecturer / PGT ( Mathematics )</option>
                                              <option value="Junior Lecturer / PGT ( Nursing )">Junior Lecturer / PGT ( Nursing )</option>
                                              <option value="Junior Lecturer / PGT ( Sanskrit )">Junior Lecturer / PGT ( Sanskrit )</option>
                                              <option value="Junior Lecturer / PGT ( Telugu )">Junior Lecturer / PGT ( Telugu )</option>
                                              <option value="Junior Lecturer / PGT ( Urdu )">Junior Lecturer / PGT ( Urdu )</option>
                                              <option value="Junior Lecturer / PGT (Botany)">Junior Lecturer / PGT (Botany)</option>
                                              <option value="Junior Lecturer / PGT (Chemistry)">Junior Lecturer / PGT (Chemistry)</option>
                                              <option value="Junior Lecturer / PGT (Civics)">Junior Lecturer / PGT (Civics)</option>
                                              <option value="Junior Lecturer / PGT (Commerce)">Junior Lecturer / PGT (Commerce)</option>
                                              <option value="Junior Lecturer / PGT (Economics)">Junior Lecturer / PGT (Economics)</option>
                                              <option value="Junior Lecturer / PGT (History)">Junior Lecturer / PGT (History)</option>
                                              <option value="Junior Lecturer / PGT (Others)">Junior Lecturer / PGT (Others)</option>
                                              <option value="Junior Lecturer / PGT (Physics)">Junior Lecturer / PGT (Physics)</option>
                                              <option value="Junior Lecturer / PGT (Vocational Courses)">Junior Lecturer / PGT (Vocational Courses)</option>  
                                              <option value="Junior Lecturer / PGT (Zoology)">Junior Lecturer / PGT (Zoology)</option>
                                              <option value="KGBV - PET">KGBV - PET</option>
                                              <option value="Language Pandit ( Gujarathi )">Language Pandit ( Gujarathi )</option>
                                              <option value="Language Pandit ( Hindi )">Language Pandit ( Hindi )</option>
                                              <option value="Language Pandit ( Kannada )">Language Pandit ( Kannada )</option>
                                              <option value="Language Pandit ( Telugu )">Language Pandit ( Telugu )</option>
                                              <option value="Language Pandit ( Urdu )">Language Pandit ( Urdu )</option>
                                              <option value="Language Pandit (Sanskrit)">Language Pandit (Sanskrit)</option>
                                              <option value="Part Time Instructor (Architecture)">Part Time Instructor (Architecture)</option>
                                              <option value="Part Time Instructor (Computer Eduction)">Part Time Instructor (Computer Eduction)</option>
                                              <option value="PGCRT ( English )">PGCRT ( English )</option>
                                              <option value="PGCRT ( Mathematics )">PGCRT ( Mathematics )</option>
                                              <option value="PGCRT ( Telugu )">PGCRT ( Telugu )</option>
                                              <option value="PGCRT (Botany)">PGCRT (Botany)</option>
                                              <option value="PGCRT (Civics)">PGCRT (Civics)</option>
                                              <option value="PGCRT (Zoology)">PGCRT (Zoology)</option>
                                              <option value="Primary School Vidya Volunteer">Primary School Vidya Volunteer</option>
                                              <option value="School Assistant / TGT ( Bio.Science )">School Assistant / TGT ( Bio.Science )</option>
                                              <option value="School Assistant / TGT ( English )">School Assistant / TGT ( English )</option>
                                              <option value="School Assistant / TGT ( Gujarathi )">School Assistant / TGT ( Gujarathi )</option>
                                              <option value="School Assistant / TGT ( Hindi )">School Assistant / TGT ( Hindi )</option>
                                              <option value="School Assistant / TGT ( Kannada )">School Assistant / TGT ( Kannada )</option>
                                              <option value="School Assistant / TGT ( Marathi )">School Assistant / TGT ( Marathi )</option>
                                              <option value="School Assistant / TGT ( Mathematics )">School Assistant / TGT ( Mathematics )</option>
                                              <option value="School Assistant / TGT ( Oriya )">School Assistant / TGT ( Oriya )</option>
                                              <option value="School Assistant / TGT ( Phy. Edn. )">School Assistant / TGT ( Phy. Edn. )</option>
                                              <option value="School Assistant / TGT ( Phy.Science )">School Assistant / TGT ( Phy.Science )</option>
                                              <option value="School Assistant / TGT ( Social Studies )">School Assistant / TGT ( Social Studies )</option>
                                              <option value="School Assistant / TGT ( Tamil )">School Assistant / TGT ( Tamil )</option>
                                              <option value="School Assistant / TGT ( Telugu )">School Assistant / TGT ( Telugu )</option>
                                              <option value="School Assistant / TGT ( Urdu )">School Assistant / TGT ( Urdu )</option>
                                              <option value="School Assistant / TGT (Sanskrit)">School Assistant / TGT (Sanskrit)</option>
                                              <option value="Secondary Grade Teacher">Secondary Grade Teacher</option>
                                              <option value="Vidya Volunteer ( Bio.Science )">Vidya Volunteer ( Bio.Science )</option>
                                              <option value="Vidya Volunteer ( English )">Vidya Volunteer ( English )</option>
                                              <option value="Vidya Volunteer ( Hindi )">Vidya Volunteer ( Hindi )</option>
                                              <option value="Vidya Volunteer ( Mathematics )">Vidya Volunteer ( Mathematics )</option>
                                              <option value="Vidya Volunteer ( Phy.Science )">Vidya Volunteer ( Phy.Science )</option>
                                              <option value="Vidya Volunteer ( Social Studies )">Vidya Volunteer ( Social Studies )</option>
                                              <option value="Vidya Volunteer ( Tamil )">Vidya Volunteer ( Tamil )</option>
                                              <option value="Vidya Volunteer ( Telugu )">Vidya Volunteer ( Telugu )</option>
                                              <option value="Vidya Volunteer ( Urdu )">Vidya Volunteer ( Urdu )</option>
                                              <option value="Vocational Instructor">Vocational Instructor</option>
                                              <option value="Other Teacher">Other Teacher</option>

                                          </select>
                                      </div>
                                        <div class="form-group">
                                            <input type="number" required class="form-control" placeholder="Mobile Number *" maxlength="10" minlength="10" name="mobile"/>
                                        </div>  
<?php
  include 'db.php';
  $query = "SELECT * FROM dist Order by d_name";
  $result = $con->query($query);
?> 
                                        <div class="form-group">
          <select name="district" id="d1" class="form-control" onchange="FetchState(this.value)" required>
            <option value="" selected>select district </option>
          <?php
            if ($result->num_rows > 0 ):?> 
            <?php
               while ($row = $result->fetch_assoc()):?> 
                <option value="<?php echo $row['id']?>"><?php 

                echo $row['d_name']?></option>;
               
               <?php endwhile;?>
               <?php endif;?>
           
          </select>
                                        </div>
                                        <div class="form-group">
          <select name="mandal" id="d2" class="form-control" value="mandal-val"   onchange="Fetch(this.value)" required>
            <option>Select mandal</option>
          </select>
                                        </div> 
                                        
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
          <select name="school" id="d3" class="form-control" value="school-val"  required>
            <option>Select School</option>
          </select>
                                        </div>
                                        <label> <b>Security Question :</b></label>
                                        <div class="form-group">
                                          <select class="form-control" name="security">
                                              <option value="q1">What is Your Father/ Mother Name?</option>
                                              <option value="q2">What is Your School Name?</option>
                                            </select>
                                        </div>
                                    
                                        <div class="form-group">
                                            <input type="text" required class="form-control" placeholder="Security Answer *" name="sans"/>
                                        </div> 
                                      <div class="form-group">
                                            <input type="password" required class="form-control" placeholder="Password *" name="password1"  id="txtPassword" />
                                        </div>
                                        <div class="form-group">
                                          <input type="password" required class="form-control"  placeholder="Confirm Password *" name="password2" id="txtConfirmPassword"/>
                                      </div>
                                      
                                      <button type='submit' class="btnRegister" id="btnSubmit" name='submit'>Register</button>
                                    </div>
                                  </form>
                                </div>
                            </div>                
</body>
<script type="text/javascript">
$(function () {
    $("#btnSubmit").click(function () {
        var password = $("#txtPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword) {
            alert("Password & Confirm Password do not match.");
            return false;
        }
        return true;
    });
});
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- quiz resp -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6002078647584025"
     data-ad-slot="2810859032"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</html>
<script type="text/javascript">
  function FetchState(id){

    $('#d2').html('');
    $.ajax({
      type:'post',
      url: 'nxt.php',
      data : { d_id : id},
      success : function(data){
         $('#d2').html(data);
      }

    })
  }
  function Fetch(id){
    $('#d3').html('');
    $.ajax({
      type:'post',
      url: 'nxt.php',
      data : { m_id : id},
      success : function(data){
         $('#d3').html(data);
      }

    })
  }
  </script>