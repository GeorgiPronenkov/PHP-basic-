<form action="">
    <label>
        <input type="text" name="name" placeholder="Name">
    </label><br />
    <label>
        <input type="text" name="age" placeholder="Age">
    </label><br />
    <label>
        <input type="radio" name="gender" value="male" >
    </label>Male <br />
    <label>
        <input type="radio" name="gender"  value="female">
    </label>Female <br />
    <input type="submit">
</form>

<?php

if (isset($_GET['name']) &&
    isset($_GET['age']) &&
    isset($_GET['gender'])) {

    $name = htmlspecialchars($_GET['name']);
    $age = htmlspecialchars($_GET['age']);
    $gender = htmlspecialchars($_GET['gender']);

    echo "My name is $name. Iam $age years old. I am $gender";
}