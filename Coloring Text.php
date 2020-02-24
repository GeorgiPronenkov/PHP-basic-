<!--
Write a PHP program TextColorer.php that takes a text from a textfield with attribute name=”input” ,
colors each character according to its ASCII value and prints the result. If the ASCII value of a character is odd,
the character should be printed in blue. If it’s even, it should be printed in red.For the colors use the <span> tag. -->

<form>
    <label>
        <textarea cols="50" name="input"></textarea>
    </label><br /> <br />
    <input type="submit" value="Color letters">
</form>


<?php
if (isset($_GET['input'])) {
    $text = $_GET['input'];

    for ($x = 0; $x < strlen($text); $x++) {
        if ($text[$x] != " ") {
            $currentSymbol = ord($text[$x]); //ord - ascii value
            $result = "";
            if ($currentSymbol % 2 == 0) {
                $result .= "<span style='color: red'>$text[$x] </span>";
            } else {
                $result .= "<span style='color: blue'>$text[$x] </span>";
            }
            echo $result;
        }
    }
}
/**
abcd efgh ijkl
a b c d e d g h i j k l
 */