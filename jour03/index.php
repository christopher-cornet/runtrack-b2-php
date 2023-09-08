<?php

include 'class/Student.php';

$student1 = new Student(1, 1, "elon.musk@spacex.com", "Elon Musk", new Datetime('1972-03-14'), "Male");

$student2 = new Student();

var_dump($student1);

var_dump($student2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>