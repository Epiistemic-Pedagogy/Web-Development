</head>
<body>
	<?php
	// Retrieve application details from the session
	session_start();
	$application_details = $_SESSION['application_details'];
	echo $application_details;
	?>
</body>
</html>