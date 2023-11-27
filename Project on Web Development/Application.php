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

	<title> Application Form </title>
	
</head>
<body>
        <h1> Application Form</h1>
<div id="logo"><form method="post" action="process_application.php">
		<label>Name:</label><br>
		<input type="text" name="name"><br>
		<label>Phone Number:</label><br>
		<input type="text" name="phone"><br>
		<label>Gender:</label><br>
		<input type="radio" name="gender" value="male">Male<br>
		<input type="radio" name="gender" value="female">Female<br>
		<label>Experience:</label><br>
		<select name="experience">
			<option value="beginner">Beginner</option>
			<option value="intermediate">Intermediate</option>
			<option value="advanced">Advanced</option>
		</select><br>
		<label>Email:</label><br>
		<input type="text" name="email"><br>
		<label>Skills:</label><br>
		<input type="checkbox" name="skills[]" value="html">HTML<br>
		<input type="checkbox" name="skills[]" value="css">CSS<br>
		<input type="checkbox" name="skills[]" value="javascript">JavaScript<br>
		<input type="checkbox" name="skills[]" value="php">PHP<br>
		<input type="submit" value="Submit">

		
	</form>
<P>
<P>
</div>
<p>
<p>
<a class="highlight" href ="https://ccse.kennesaw.edu/" target="_blank">
<img src="./Img/K.S.U LOGO.PNG" width="100"; height="100" target>
</a>

<a class="highlight" href ="https://ccse.kennesaw.edu/it/"> 
    <h4>K.S.U Information Technology.</h4>
<br>
<br>
 <a class="highlight" href ="http://it5443.azurewebsites.net"><h4>This is a class project of IT 5443 spring group.</h4>
   
		</form>

		<?php include 'footer.php'; ?>
	
</div>
</body>
</html>
