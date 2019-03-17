<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Home Exercise</title>
</head>
<body>

<?php
    //this function will inlude all the files which will need
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });

    $myStudent = new Student("Marty", "McFly", 1985, array("Mathematics", "Physics", "electronics"), 88);
    $myTeacher = new Teacher("Emmett", "Brown", 1955, array("Programming", "UI Design", "Software production"), "IT");
    $myStaff1  = new Staff("John", "Doe", 1970, "Cleaner");
    $myStaff2  = new Staff("Biff", "Tannen", 1975, "Caretaker");
    
    echo '<h2>Student</h2>';
    $myStudent->printProperties();

    echo '<br><h2>Teacher</h2>';
    $myTeacher->printProperties();

    echo '<br><h2>Staff member 1</h2>';
    $myStaff1->printProperties();

    echo '<br><h2>Staff member 2</h2>';
    $myStaff2->printProperties();
?>

</body>
</html>
