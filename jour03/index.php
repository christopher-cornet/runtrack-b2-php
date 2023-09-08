<?php

include 'class/Student.php';
include 'class/Grade.php';
include 'class/Room.php';
include 'class/Floor.php';

$student = new Student(1, 1, "elon.musk@spacex.com", "Elon Musk", new Datetime('1972-03-14'), "Male");
$student2 = new Student();

$grade = new Grade(1, 1, "Master 2", new Datetime('2018-01-01'));
$grade2 = new Grade();

$room = new Room(1, 1, "B1", 100);
$room2 = new Room();

$floor = new Floor(1, 1, "B", 1000);
$floor2 = new Floor();

?>