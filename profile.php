<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="shortcut icon" href="android-chrome-512x512.png" type="image/x-icon">
    <title>Tutors</title>
</head>
<body>
    <header>
        <div class="container">
           <div class="logo">CodeBegin</div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="course.html" >Courses</a></li>
                <li class="courses"><a href="tutor.html">Tutors</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
            <div class="userlogo">
                <img src="person.png" alt="userlogo">
            </div>
        </nav> 
        </div>
    </header>
<body>
	<div class="Profile">
		<h1>Profile</h1>
			<br>
			Hello, <?php echo $user_data['user_name']; ?>
			<br>
			<a href="logout.php">Logout</a>
	</div>	
</body>
</html>