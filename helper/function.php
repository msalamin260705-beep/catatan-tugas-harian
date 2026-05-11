<?php

function filter($data){

    $data = htmlspecialchars($data);

    $data = trim($data);

    $data = stripslashes($data);

    return $data;

}

?>