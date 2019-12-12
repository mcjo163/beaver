<?php
foreach ($_POST as $id=>$item) {
    echo($id . ": " . $item . "\n");
}
echo("<hr>");

foreach($_FILES as $id=>$item) {
    echo($id . ": " . $item . "\n");
}