<?php
$name = "Gasper Lismoras";
$course = "Bachelor of Science in Information Technology";
$year = "2nd Year";
$school = "Mater Dei College";
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Personal Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f0f5;
            margin: 0;
            padding: 20px;
        }

        .header {
            background-color: #355c7d;
            color: white;
            text-align: center;
            padding: 30px;
            border-radius: 10px;
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid white;
            margin-bottom: 15px;
        }

        .box {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px #cccccc;
        }

        h2 {
            color: #355c7d;
        }

        footer {
            text-align: center;
            margin-top: 25px;
            color: #555;
        }
    </style>
</head>

<body>

<div class="header">

    <img src="profile.jpg" class="profile-pic"
         alt="My Profile Picture">

    <h1><?php echo $name; ?></h1>
    <p><?php echo $course; ?></p>
    <p><?php echo $year; ?></p>
    <p><?php echo $school; ?></p>

</div>

<div class="box">
    <h2>About Me</h2>
    <p>
        Hello! I am <?php echo $name; ?>.
        I am an IT student who is passionate about technology and eager to learn new skills. I enjoy exploring computers, programming, and web development. I am hardworking, responsible, and motivated to improve my knowledge and become a successful IT professional.
    </p>
</div>

<div class="box">
    <h2>Educational Background</h2>
    <p><b>Course:</b> <?php echo $course; ?></p>
    <p><b>Year Level:</b> <?php echo $year; ?></p>
    <p><b>School:</b> <?php echo $school; ?></p>
</div>

<div class="box">
    <h2>My Skills</h2>
    <p>HTML</p>
    <p>CSS</p>
    <p>PHP</p>
</div>

<div class="box">
    <h2>Hobbies and Interests</h2>
    <p>Playing Online Games</p>
    <p>Watching Movies</p>
    <p>Listening to Music</p>
    <p>Playing Volleyball</p>
    <p>Learning New Things</p>
</div>

<footer>
    <p>© 2026 Gasper Lismoras</p>
</footer>

</body>
</html>