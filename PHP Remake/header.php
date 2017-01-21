<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="MBoutique's Welcome Page">
    <meta name="keywords" content="HTML, CSS, third layout">
    <meta name="author" content="John (Jef) Fisher">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title> <?php echo $page_title; ?></title>
</head>
<body>
<div class="main-wrapper">
    <header class="header">
        <div class="background-logo">
            <img src="../assets/images/logo.png" alt="MBoutique Logo" class="logo"/>
        </div>
        <nav>
            <ul>
                <li><a href="index.php?page=welcome.php">WELCOME</a></li>
                <li><a href="index.php?page=our_macarons.php">OUR MACARONS</a></li>
                <li><a href="index.php?page=gifts_parties.php">GIFTS & PARTIES</a></li>
                <li><a href="index.php?page=contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>