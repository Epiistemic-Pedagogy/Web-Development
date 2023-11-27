<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">

<div id="container">

<?php include 'header.php'; ?>
<p>
<p>
<div id="spring"><li class="highlight">Politics</li>
    <li class="highlight">Sports</li>
    <li class="highlight">Health</li>
    <li class="highlight">Technology</li>
    <li class="highlight">Agriculture</li>
    </div> 

	<h1> Application Submitted</h1>
	
</head>
<body>
<P>
<P>
<P>
<P>
<P>
<P>
<div id="logo">
<?php
// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$experience = $_POST['experience'];
$email = $_POST['email'];
$skills = implode(",", $_POST['skills']);

// Create application details string
$app_details = "Name: $name<br>Phone Number: $phone<br>Gender: $gender<br>Experience: $experience<br>Email: $email<br>Skills: $skills";

// Display application details
echo $app_details;

// Link to application details page
echo "<br><a href='application_details.php'>View Application Details</a>";
?>
<P>
<P>
<P>
</div>
<a class="highlight" href ="https://ccse.kennesaw.edu/" target="_blank">
<img src="./Img/K.S.U LOGO.PNG" width="100"; height="100" target>
</a>

<a class="highlight" href ="https://ccse.kennesaw.edu/it/"> 
    <h4>K.S.U Information Technology.</h4>
<br>
<br>
 <a class="highlight" href ="http://it5443.azurewebsites.net"><h4>This is a class project of IT 5443 spring group.</h4>


<?php include 'footer.php'; ?>

</div>

<body>
<html>