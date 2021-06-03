<?php 
include('navbar.php')
?>
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160685662-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160685662-1');
</script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
</style>
<div class="container contact">
<?php 
             if(isset($_GET['id']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['id']))
                          {
                            echo $_GET['id'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
	<div class="row">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- quiz verti contact page -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6002078647584025"
     data-ad-slot="6219605095"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
		<div class="col-md-9">
			<div class="contact-form">
            <form method="POST" action="contact.php">
                <center><h3><b>Contact Us</b></h3></center>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" required id="fname" placeholder="Enter First Name" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Last Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" required id="lname" placeholder="Enter Last Name" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" required placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" required id="comment" name="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="comment1" class="btn btn-default">Submit</button>
				  </div>
				</div>
            </form>
            	<div align="center">
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
</script></div>
			</div>
		</div>
	</div>
</div>
<script>
$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f3f7eae19f8fe00127a25af&product=sop' async='async'></script>
