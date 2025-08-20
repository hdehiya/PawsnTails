<!DOCTYPE html>
<html>
  <head>
    <title>Survey Form</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      .small{
font-size: 100px;
      }
      body, div, form, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1, h4 {
      margin: 15px 0 4px;
      font-weight: 400;
      }
      h4 {
      margin: 20px 0 4px;
      font-weight: 400;
      }
      span.hk1 {
      color: red;
      }
      .small {
      font-size: 10px;
      line-height: 18px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      vertical-align: middle;
      }
      input:hover, textarea:hover, select:hover {
      outline: none;
      border: 1px solid #095484;
      background: #e6eef7;
      }
      .title-block select, .title-block input {
      margin-bottom: 10px;
      }
      select {
      padding: 7px 0;
      border-radius: 3px;
      border: 1px solid #ccc;
      background: transparent;
      }
      select, table {
      width: 100%;
      }
      option {
      background: #fff;
      }
      .day-visited, .time-visited {
      position: relative;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      .day-visited i, .time-visited i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      top: 8px;
      font-size: 20px;
      }
      .day-visited i, .time-visited i {
      right: 5px;
      z-index: 1;
      color: #a9a9a9;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      }
      .question-answer label {
      display: block;
      padding: 0 20px 10px 0;
      }
      .question-answer input {
      width: auto;
      margin-top: -2px;
      }
      th, td {
      width: 18%;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      }
      .first-col {
      width: 25%;
      text-align: left;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      .title-block {
      display: flex;
      justify-content: space-between;
      }
      .title-block select {
      width: 30%;
      margin-bottom: 0;
      }
      .title-block input {
      width: 31%;
      margin-bottom: 0;
      }
      th, td {
      word-break: keep-all;
      }
      }
    </style>
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
            <li class="active"><a href="survey.php"><span class="glyphicon glyphicon-list-alt"></span> Survey</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br><br>
    <div class="testbox">
      <form method="post">
        <h1>Pet-parent bond form</h1>
        <h4>How many pets have you adopted?<span class="hk1">*</span></h4>
        <select name="q1">
          <option value=""></option>
          <option value="">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">more</option>

        </select>
        <h4>Names of pets you own?</h4>
        <p></small>
          <textarea rows="2" placeholder="Kishmish, Ginger..." name="q2"></textarea>

          <h4>Have you vaccined the pet in recent time?<span class="hk1">*</span></h4>
        <select name="q3">
          <option value=""></option>
          <option value="1">Yes, last year</option>
          <option value="2">Yes, this year</option>
          <option value="3">Maybe</option>
          <option value="4">No</option>
          <option value="5">It was fully vaccinated when I got it</option>
        </select>
        <h4>How often does it eat in a day?<span class="hk1">*</span></h4>
        <select name="q4">
          <option value=""></option>
          <option value="1">More than thrice a day</option>
          <option value="2">Around 5 times a day</option>
          <option value="3">Just once</option>
          <option value="4">Never</option>
          <option value="5">I have to force it to</option>
        </select>
        <h4>Did it ever feel sick?<span class="hk1">*</span></h4>
        <select name="q5">
          <option value=""></option>
          <option value="1">Yes, once</option>
          <option value="2">Nope, never</option>
          <option value="3">I do not have any idea</option>
          <option value="4">Shall go to check soon</option>
          <option value="5">I will consult the ex-owner</option>
        </select>
        <h4>Did you take it to a vet recently?<span class="hk1">*</span></h4>
        <select name="q6">
          <option value=""></option>
          <option value="1">Yes</option>
          <option value="2">Yes, it had an internal problem</option>
          <option value="3">Yes, it got hurt while playing </option>
          <option value="4">Yes, it accidentally jumped off a roof</option>
          <option value="5">Yes, it ate something inappropriate</option>
          <option value="6">Yes, it was attacked by other pets</option>
          <option value="7">No, I did not take it to vet</option>
        </select>

       
      
        <h4>Feedback/Enquiry</h4>
        <p>Please, feel free to ask/tell us anything. Thank you for your time and valuable feedback.</small>
          <textarea rows="3" name="q7"></textarea>
        <div class="btn-block">
        <input type="submit" name="submit" value="Submit" >
        </div>
      </form>
    </div>
    <?php
include_once("config.php");

if(isset($_POST['submit'])){
$q1 = ($_POST['q1']);
$q2 = ($_POST['q2']);
$q3 = ($_POST['q3']);
$q4 = ($_POST['q4']);
$q5 = ($_POST['q5']);
$q6 = ($_POST['q6']);
$q7 = ($_POST['q7']);
  $insertquery = "insert into petsurvey(q1,q2,q3,q4,q5,q6,q7) values('$q1','$q2','$q3','$q4','$q5','$q6','$q7')";
$iquery = mysqli_query($mysqli,$insertquery);
if($iquery){

?>
    <script>
    alert("Thank you for your feedback");

    </script>
    <?php
}
else{
    ?>
    <script>
    alert("could not enter data, try again later!");
    </script>
    <?php
}
}
?>
<footer class="footer">
        <div class="container-fluid text-center">
          <br><br>
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