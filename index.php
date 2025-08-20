<!DOCTYPE html>
<html>
<head>
	<title>Paws 'n Tales</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand font-lemonada">Paws 'n Tales</span>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class="dropdown"><a href="adopt.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-heart-empty"></span> Pets <span class="caret"></span></a>
            	<ul class="dropdown-menu">
            		<li><a href="adoptDog.html">Dog Gallery</a></li>
            		<li><a href="adoptCat.html">Cat Gallery</a></li>
            		<li><a href="adoptOther.html">Other Pets</a></li>
            	</ul>
            </li>
            <li><a href="volunteer.html"><span class="glyphicon glyphicon-user"></span> Volunteer</a></li>
            <li><a href="events.php"><span class="glyphicon glyphicon-globe"></span> Events</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
            <li><a href="dogblog.html"><span class="glyphicon glyphicon-edit"></span> Blog</a></li>
            <li><a href="survey.php"><span class="glyphicon glyphicon-list-alt"></span> Survey</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/carousel/1.jpg">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary buttonCarosel" href="adopt.html" role="button"><span class="glyphicon glyphicon-heart-empty"></span> Adopt</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/carousel/3.jpg">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary buttonCarosel" href="volunteer.html" role="button"><span class="glyphicon glyphicon-user"></span> Volunteer</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/carousel/5.jpg">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary buttonCarosel" href="dogblog.html" role="button"><span class="glyphicon glyphicon-edit"></span> Blog</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fourth-slide" src="img/carousel/4.jpg">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary buttonCarosel" href="#contact" role="button"><span class="glyphicon glyphicon-envelope"></span> Contact</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="container-fluid text-center">
    	<div class="jumbotron text-center">
    		<span class="font-lemonada"><h1>Welcome to Paws 'n Pets</h1></span>
    		<p> Paws 'n Tales is a non-profit project. We collaborate with local shelters to provide short and long term humane solutions to the homeless dogs and cats population, exposed to abuses, hunger and often, a cruel death..<br>

			We help rescued dogs and cats to find their forever homes with loving human beings.
			<br>
			With us, a pet stops subsisting and starts living!

 			</p>
    		<br>    
    	</div>

    	<!-- INFORMATION -->

      	<div id="divInformation" class="row">
        	<h1>Come visit us! <span class="glyphicon glyphicon-time"></span></h1><br>
	        <div class="col-md-3 text-center">
	          	<a href="adopt.html">
	          		<div id="thumbnailInfo" class="thumbnail">	        		
	        			<img src="img/adopt.jpg" alt="Adopt">
		        		<h1><strong>Adopt</strong></h1>
		        		<p class="titleCard">Adopt a dog or cat today</p>	      			
	      			</div>
	      		</a>
	        </div>
	        <div class="col-md-3 text-center">
	        	<a href="volunteer.html">
	          		<div id="thumbnailInfo" class="thumbnail">	        		
		        		<img src="img/volunteer.jpg" alt="Volunteer">
			        	<div id="volunteer">
				        	<h1><strong>Volunteer</strong></h1>
				        	<p class="titleCard">Become a volunteer</p>
			        	</div>		      			
	      			</div>
	      		</a>
	        </div>
	        <div class="col-md-3 text-center">
	          	<a href="events.html">
		          	<div id="thumbnailInfo" class="thumbnail">
		        		<img src="img/event.jpg" alt="Events">
			        	<h1><strong>Events</strong></h1>
			        	<p class="titleCard">Check out our events</p>
		      		</div>
		        </a>
	        </div>
	        <div class="col-md-3 text-center">
          		<a href="blog.html">
          			<div id="thumbnailInfo" class="thumbnail">
        				<img src="img/top-pet-blogs.jpg" alt="Blog">
	        			<h1><strong>Blog</strong></h1>
	        			<p class="titleCard">Articles about Pets</p>    				
      				</div>
      			</a>
        	</div>
	    </div>
    </div>  

<!-- Shelters -->

    <div id="ourTeam" class="container-fluid text-center bg-blue">
    	<span class="font-lemonada"><h1>Our Partners <span class="glyphicon glyphicon-user"></span></h1></span>
    	<div class="row">
        	<div class="col-md-3 text-center">
		    	<div class="card">
		  			<img class="imgCardTeam" src="img/shelters/s1.png" alt="Shelter">
		  			<div class="containerCard">
					    <h1>Heart & Home</h1>
					    <p class="titleCard">Malad East</p>  
					    <a href="https://www.facebook.com" class="fa fa-facebook link"></a>
						<a href="https://www.twitter.com" class="fa fa-twitter link"></a>
						<a href="https://www.instagram.com" class="fa fa-instagram link"></a> 
					    <button type="submit" class="btn btn-primary pull-right teamButton" id="btnTeamContact">
				        Website <span class="glyphicon glyphicon-envelope"></span></button>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
		    	<div class="card">
		  			<img class="imgCardTeam" src="img/shelters/s2.png" alt="shelter">
		  			<div class="containerCard">
					    <h1>Pawfect Friend</h1>
					    <p class="titleCard">Goregaon East</p>				    
					    <a href="https://www.facebook.com" class="fa fa-facebook link"></a>
						<a href="https://www.twitter.com" class="fa fa-twitter link"></a>
						<a href="https://www.instagram.com" class="fa fa-instagram link"></a>
					    <button type="submit" class="btn btn-primary pull-right teamButton" id="btnTeamContact">
				        Contact <span class="glyphicon glyphicon-envelope"></span></button>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
		    	<div class="card">
		  			<img class="imgCardTeam" src="img/shelters/s3.png" alt="shelter">
		  			<div class="containerCard">
					    <h1>The Doghouse</h1>
					    <p class="titleCard">Kandivali West</p>					    
					    <a href="https://www.facebook.com" class="fa fa-facebook link"></a>
						<a href="https://www.twitter.com" class="fa fa-twitter link"></a>
						<a href="https://www.instagram.com" class="fa fa-instagram link"></a>
					    <button type="submit" class="btn btn-primary pull-right teamButton" id="btnTeamContact">
				        Contact <span class="glyphicon glyphicon-envelope"></span></button>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
		    	<div class="card">
		  			<img class="imgCardTeam" src="img/shelters/s4.png" alt="shelter">
		  			<div class="containerCard">
					    <h1>Sambhav</h1>					    
					    <p class="titleCard">Andheri West</p>
					    <a href="https://www.facebook.com" class="fa fa-facebook link"></a>
						<a href="https://www.twitter.com" class="fa fa-twitter link"></a>
						<a href="https://www.instagram.com" class="fa fa-instagram link"></a>
					    <button type="submit" class="btn btn-primary pull-right teamButton" id="btnTeamContact">
				        Contact <span class="glyphicon glyphicon-envelope"></span></button>
					</div>
				</div>
			</div>
		</div>		
    </div>


    <!-- CONTACT -->

    <section id="contact">
	    <div id="containerContact">
	    <div class="container-fluid text-center">
	    	<span class="font-lemonada"><h1>Contact us <span class="glyphicon glyphicon-envelope"></span></h1></span>
	    	<div class="row">
		        <div class="col-md-8">
		            <div class="well well-sm">
	                <form  method="POST" action="">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label for="name">Name</label>
		                            <div class="input-group">
		                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
		                                </span>   
		                            	<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
		                            </div> 
		                        </div>		  
	                 
		                        <div class="form-group">
		                            <label for="subject">Subject</label>
		                            <div class="input-group">
		                                <span class="input-group-addon"><span class="glyphicon glyphicon-list"></span>
		                                </span>
		                            	<select id="subject" name="subject" class="form-control" required="required">
			                                <option value="na" selected="">Choose One:</option>
			                                <option value="adoption">Adoption</option>
			                                <option value="volunteering">Volunteering</option>
			                                <option value="suggestion">Suggestions</option>
			                            </select>
			                        </div>    
		                        </div>
		                        <div class="form-group">
		                            <label for="name">Mobile Number</label>
		                            <div class="input-group">
		                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span>
		                                </span>   
		                            	<input type="int" class="form-control" id="num" name="num" placeholder="Enter Mobile Number" required="required" />
		                            </div> 
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label for="name">Message</label>
		                            <div class="input-group">
		                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
		                                </span>
		                            	<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
		                                placeholder="Message"></textarea>
		                            </div>    
		                        </div>
		                    </div>
		                    <div class="col-md-12">
		                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" name="submit">
		                            Send Message <span class="glyphicon glyphicon-send"></span></button>
		                    </div>
		                </div>
		                </form>
		            </div>
		        </div>
		        <div class="col-md-4">
		            <form>

<?php
include_once("config.php");
   if(isset($_POST['submit'])) {	
    $name = $_POST['name'];
    $age = $_POST['subject'];
    $email = $_POST['message'];
    $number = $_POST['num'];

    $query="INSERT INTO contact_us (Name,Subject,Message,Num) VALUES('$name','$age','$email','$number')";
    
    $result = mysqli_query($mysqli, $query);
        if(!$result)
{
die("Record not inserted.".mysqli_error());
}
else
{
?>
<script type="text/javascript">
alert("Message recorded succesfully. We will contact you shortly.");
</script>    
<?php 
}mysqli_close($mysqli);}?>



		            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
		            <address>
		                <strong><span class="glyphicon glyphicon-home"></span> Adress:</strong><br>
		                Thakur College Of Engineering and Technology<br>
		                Kandivali(E),Mumbai-400101<br>
		                
		                <br><span class="glyphicon glyphicon-earphone"></span>
		                022-28461891
		            </address>
		            <address>
		                <strong><span class="glyphicon glyphicon-envelope"></span> Email:</strong><br>
		                <a href="mailto:tcet@thakureducation.org?Subject=Hello" target="_top">tcet@thakureducation.org</a>
		            </address>
		            </form>
		        </div>
		    </div>
	    </div>
	</div>

	</section>

	<footer class="footer">
      	<div class="container-fluid text-center">
      		<a href="https://www.facebook.com" class="fa fa-facebook link"></a>
						<a href="https://www.twitter.com" class="fa fa-twitter link"></a>
			<a href="https://www.youtube.com" class="fa fa-youtube link"></a>
			<a href="https://www.instagram.com" class="fa fa-instagram link"></a><br>
			<span class="font-lemonada footer-information">Paws 'n Pets
			<br>Copyright</span>
		</div>
    </footer>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>