<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Kai Thompson">
    <title>Home</title>
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
        <h2>Welcome to Student Data Inc.</h2>
        <p>We have the largest database of student grades in the world!</p>
        <p>Click here to add data!</p>
        <p><a href="./input_data.php" class="button">Add Data</a></p>

    </main>

    <footer>
        <?php
        include './navigation/footer.php';
        ?>
    </footer>
</body>
</html>