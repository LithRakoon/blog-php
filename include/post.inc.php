<?php

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $post = $_POST["post"];
    $summary = $_POST["summary"];

    require 'dbh.inc.php';
    require_once 'functions.inc.php';

    createPost($title, $post, $summary, $conn);
}
