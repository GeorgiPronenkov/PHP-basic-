<?php
/**
Student Academy
Write a program, which keeps information about students and their grades.
You will receive n pair of rows. First you will receive the student's name, after that you will receive his grade.
 Check if student already exists, and if not, add him. Keep track of all grades for each student.
When you finish reading data, keep students with average grade higher or equal to 4.50. 
 Order filtered students by average grade in descending.
Print the students and their average grade in format:
"{name} –> {averageGrade}"
Format the average grade to the 2nd decimal place.
 */

$studentsCount = readline();

$studentGradeTotal = [];
$studentGradeCount = [];

for ($i = 0; $i < $studentsCount; $i++) {
    
    $name = readline();
    $grade = floatval(readline());
    
    if (!key_exists($name, $studentGradeTotal)) { //ако няма такъв ученик
        $studentGradeTotal[$name] = $grade; //[$name] - -> ключ на масива
        $studentGradeCount[$name] = 1;
    }else {
        $studentGradeTotal[$name] += $grade;
        $studentGradeCount[$name] ++;
    }
}

$studentsAverageGrade = [];
foreach ($studentGradeTotal as $name => $grade) {
    $averageTemp = $grade / $studentGradeCount[$name];
    $average = number_format($averageTemp, 2);
    $studentsAverageGrade[$name] = $average;
}
arsort($studentsAverageGrade);
foreach ($studentsAverageGrade as $name=>$avg) {
    if ($avg >= 4.5) {
        echo "$name -> $avg".PHP_EOL;
    }
}
