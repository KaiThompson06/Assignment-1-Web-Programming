<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page that processes the database queries">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Kai Thompson">
    <title>Processing page</title>
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
    <div>
        <?php
        require_once './crud.php';
        require_once './validate.php';

        $crud = new crud();
        $validate = new validate();
        if(isset($_POST['submit']))
        {
            $fname = $crud->sanatize($_POST['fname']);
            $lname = $crud->sanatize($_POST['lname']);
            $gradeLvl = $crud->sanatize($_POST['gradeLvl']);
            $avgGrade = $crud->sanatize($_POST['avgGrade']);

            if ($validate->checkEmpty($_POST, array('fname', 'lname', 'gradeLvl', 'avgGrade')))
            {
                if (!$validate->checkGradeLevel($gradeLvl))
                {
                    echo "<h2>Error!</h2>";
                    echo "<p>Grade level needs to be a number between 1 and 12.</p>";
                    exit;
                }
                elseif (!$validate->checkAverageGrade($avgGrade))
                {
                    echo "<h2>Error!</h2>";
                    echo "<p>Average grade needs to be a number between 0 and 100.</p>";
                    exit;
                }

                $query = "INSERT INTO students (fName, lName, gradeLvl, avgGrade) VALUES ('$fname', '$lname', '$gradeLvl', '$avgGrade');";
                $result = $crud->create($query);
                if($result)
                {
                    echo '<h2>Great Success!</h2>';
                    echo '<p>Student with name ' . $fname . ' ' . $lname . ' in grade ' . $gradeLvl . ' with a ' . $avgGrade . '% average' . ' added to the database!</p>';
                }
                else {
                    echo '<h2>Error!</h2>';
                    echo "<p>Something went wrong connecting to the database.</p>";
                }
            }
            else
            {
                echo '<h2>Error!</h2><p>All fields must be filled out!</p>';
            }

        }
        ?>
    </div>
</main>

<footer>
    <?php
    include './navigation/footer.php';
    ?>
</footer>
</body>
</html>