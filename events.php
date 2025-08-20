<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="mystyles.css">
	
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
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-heart-empty"></span> Pets <span class="caret"></span></a>
            	<ul class="dropdown-menu">
            		<li><a href="adoptDog.html">Dog Gallery</a></li>
            		<li><a href="adoptCat.html">Cat Gallery</a></li>
					<li><a href="adoptOther.html">Other Pets</a></li>
            	</ul>
            </li>
            <li><a href="volunteer.html"><span class="glyphicon glyphicon-user"></span> Volunteer</a></li>
            <li class="active"><a href="events.php"><span class="glyphicon glyphicon-globe"></span> Events</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
            <li><a href="blog.html"><span class="glyphicon glyphicon-edit"></span> Blog</a></li>
            <li><a href="survey.php"><span class="glyphicon glyphicon-list-alt"></span> Survey</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container-fluid text-center bg-grey">
    	<div class="containerVolunteer">
			<h1 class="ml1" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;color: grey;">
				<span class="text-wrapper">
				  <span class="line line1"></span>
				  <span class="letters">LATEST EVENTS</span>
				  <span class="line line2"></span>
				</span>
			  </h1><br>
			  
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>var textWrapper = document.querySelector('.ml1 .letters');
	textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
	
	anime.timeline({loop: true})
	  .add({
		targets: '.ml1 .letter',
		scale: [0.3,1],
		opacity: [0,1],
		translateZ: 0,
		easing: "easeOutExpo",
		duration: 600,
		delay: (el, i) => 70 * (i+1)
	  }).add({
		targets: '.ml1 .line',
		scaleX: [0,1],
		opacity: [0.5,1],
		easing: "easeOutExpo",
		duration: 700,
		offset: '-=875',
		delay: (el, i, l) => 80 * (l - i)
	  }).add({
		targets: '.ml1',
		opacity: 0,
		duration: 1000,
		easing: "easeOutExpo",
		delay: 1000
	  });
	</script>
	
			<iframe width="800" height="460" src="https://www.youtube.com/embed/JFmBm_C49q8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-pictureautoplay=1&mute=1 " allowfullscreen></iframe>
    		<aside><br>
				<p style="font-family:cursive;font-size: 20pt;font-weight: bold;"><b>Virtual Dog-A-Thon!</b></p>
				<hr style="border-top: 1px solid rgb(77, 75, 75);">
				<p><b>Dates:</b>Sun, 20 Jun, 2021 – Sat, 26 Jun, 2021</p>
				<hr style="border-top: 1px solid rgb(77, 75, 75);">
				<p><b>Location:</b> The Humane Society, Thakur Village, Kandivali East, Mumbai</p>
			    <hr style="border-top: 1px solid rgb(77, 75, 75);">
				<p style="font-size: 12pt;font-weight: 50px;text-align:center;"> June 20 - 26 will be The Humane Socitey's<br> first-ever week-long Virtual Dog-A-Thon!<br> Come join a fun-filled week of walking, running, and wagging to make a difference for thousands of animals.</p>
					<a class="s1" href=https://www.thehumanesociety.org/events/dog-a-thon/  >Know More</a><br><br>
						<button  class="open-button" onclick="openForm()" >Register Now!</button>

			<div class="form-popup" id="myForm">
			  <form action="" method="REQUEST"  class="form-container">
				<h3 style="font-family:cursive">Register to get event updates!</h3><br>
			
				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>
				<button type="submit" name="submit" class="btn">Register</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
			  </form>

<?php
	
	include_once("config.php");
		if(isset($_REQUEST['submit'])) {
		if($mysqli === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$email = $_REQUEST['email'];
		
		$query = "INSERT INTO info (email) VALUES ('$email')";
			$result = mysqli_query($mysqli, $query);
		if(!$result)
{
die("Record not inserted.".mysqli_error());
}
else
{
?>
<script type="text/javascript">
alert("Your data is stored successfully. You will receive event details in mail. Stay Tuned for Event Updates!");
</script>    
<?php 
}
mysqli_close($mysqli);}?>


			</div>
			
			</aside>
			
			
			<div class="row">
    			<div class="col-md-4 text-center" >
					<img id="donateTodayImage" src="dogs.jpg" alt="Dog Event">
    				<img id="donateTodayImage" src="cats.jpg" alt="Cat Event">
    				<img id="donateTodayImage" src="dog.jpg" alt="Dog Event">
    			</div>	
  				<div class="col-md-8">
					
  					<div class="containerVolunteerMessage jumbotron text-justify" >
  						<p class="text-center" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: 30pt;font-weight: bold;" >More Events</p>
  						<hr>
  						<h2><strong>Clear the Shelters <span class="glyphicon glyphicon-flag"></span></strong></h2>
						  <h3><strong>AUG 23-SEP 19 2021</strong></h3>
						<p class=" indent">
					    NBC Universal Local is teaming up with hundreds of shelters across the country to host Clear the Shelters, a nationwide pet adoption drive in August 2021 that helps find loving homes for animals in need.</p>
						<br><a class="1" href="https://www.cleartheshelters.com/" >Know More</a><br><br>
 
						<hr> 
				        <h2><strong>Pet Fed India<span class="glyphicon glyphicon-flag"></span></strong></h2>
						<h3><strong>India's Biggest Pet Festival is back!</strong></h3>
						<p class=" indent">
						Here’s your chance to be a part of an event dedicated to you and your pet and also contribute towards their welfare at the same time.</p>
						<br><a class="1" href="https://petfed.org/events"  >Click here to know more about Pet Fed Events!</a><br><br>
						<hr>
						<h2><strong>Best Friends <span class="glyphicon glyphicon-flag"></span></strong></h2>
						  <h3><strong>Lifesaving events and workshops</strong></h3>
						<p class=" indent">
					    Join us at Best Friends Super Adoption event.These fun-filled,celebratory weekends are a fantastic way to meet tons of adoptable animals without having to run all over town- and an easy way to get your fill of cuteness</p>
						<br><a class="1" href="https://bestfriends.org/events/super-adoption-events"  >Know More</a><br>
 
						
  					</div>
  				</div>
    		</div>
    	</div>
    </div>
			
			<script>
			function openForm() {
			  document.getElementById("myForm").style.display = "block";
			}
			
			function closeForm() {
			  document.getElementById("myForm").style.display = "none";
			}
			</script>

    <br><footer class="footer">
      	<div class="container-fluid text-center">
			<a href="https://www.facebook.com" class="fa fa-facebook link"></a>
						<a href="https://www.twitter.com" class="fa fa-twitter link"></a>
			<a href="https://www.youtube.com" class="fa fa-youtube link"></a>
			<a href="https://www.instagram.com" class="fa fa-instagram link"></a><br>
			<span class="font-lemonada footer-information">Paws 'n Tales
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