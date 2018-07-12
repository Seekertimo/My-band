<?php

function make_connection() {
    $mysqli = new mysqli('localhost', 'root', '', 'myband_db');
    if ($mysqli->connect_errno) {
        die ('Connection error: ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function get_articles() {
    $mysqli = make_connection();
    $query = "SELECT title From articles";
    $stmt = $mysqli->prepare($query) or die ('Error Preparing.');
    $stmt->bind_result( $title) or die ('Error Binding Results 1.');
    $stmt->execute() or die('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $results[] = $title;
    }
    return $results;
}


function get_some_articles() {
    global $pageno, $searchterm;
    $mysqli = make_connection();
    //$number_of_pages = get_number_of_pages() or die ('Error calculating');
    $firstrow = ($pageno -1) * ARTICLES_PER_PAGE;
    $per_page = ARTICLES_PER_PAGE;

    $query = "SELECT title,content, imagelink ";
    $query .= "FROM articles ";
    $query .= "WHERE title LIKE ? OR ";
    $query .= "content LIKE ? ";
    $query .= "ORDER BY article_id ";
    $query .= "DESC LIMIT $firstrow, $per_page";
//    echo $query;

    $stmt = $mysqli->prepare($query) or die ('Error Preparing 1.');
    $stmt->bind_param('ss', $searchterm, $searchterm) or die('Error preparing 2');
    $stmt->bind_result($title, $content, $imagelink) or die ('Error Binding Results 2.');
    $stmt->execute() or die('Error executing 2.');
    $results = array();
    while ($stmt->fetch()) {
        $article = array();
        $article[] = $title;
        $article[] = $content;
        $article[] = $imagelink;
        $results[] = $article; // timo is gek
    }
    return $results;
}

function get_number_of_pages(){
    $number_of_pages = calculate_pages() or die ('Error calculating');
    return $number_of_pages;
}

function calculate_pages() {
    $mysqli = make_connection();
    $query = "SELECT * FROM articles";
    $result = $mysqli->query($query) or die ('Error querying 2.');
    $rows = $result->num_rows;
//    echo 'Rows: ' . $rows;
    $number_of_pages = ceil($rows / ARTICLES_PER_PAGE);
    return $number_of_pages;
}


function check_login(){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin'){
        $_SESSION['loggedin'] = 'loggedin';
        ?>
        <script>window.location.replace("index.php?page=admin");</script>
    <?php   }
}

