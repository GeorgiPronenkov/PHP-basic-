<?php

if (isset($_GET['text'])) {

    preg_match_all("/\b[A-Z]+\b/",  $_GET['text'], $matches); //matches - result
    echo implode(', ', $matches[0]);
}

?>

<form>
    <label>
        <textarea rows="10" name="text"></textarea>
    </label>
    <br />
    <input type="submit" value="Extract">
</form>