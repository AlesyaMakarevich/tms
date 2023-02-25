<?php

require_once "People.php";
require_once "Developer.php";
require_once "Student.php";
require_once "Teacher.php";

$student = new Student("Alesya", "student");
$student->greeting();