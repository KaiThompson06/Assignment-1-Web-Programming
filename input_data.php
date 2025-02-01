<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="input data page">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Kai Thompson">
    <title>Data Input</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <img src="./images/lorem-ipsum-logo.jpg" alt="Logo">
    <h2>Student Data Inc.</h2>
    <?php
    include './navigation/header_nav.php';
    ?>
</header>
<main>
    <h3>Data Input Form</h3>
    <form method="POST" action="process.php">
        <div>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname">
        </div>
        <div>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname">
        </div>
        <div>
            <label for="gradeLvl">Grade Level:</label>
            <input type="number" id="gradeLvl" name="gradeLvl">
        </div>
        <div>
            <label for="avgGrade">Average Grade:</label>
            <input type="text" id="avgGrade" name="avgGrade">
        </div>
        <input type="submit" name="submit" id="submit">
    </form>
</main>

<footer>
    <?php
    include './navigation/footer.php';
    ?>
</footer>
</body>
</html>