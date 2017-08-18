<!DOCTYPE html>

<html lang="nl">


<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nederlandse Financiële Reserve - Landing Page"/>
    <meta name="author" content="Justin Klaassen"/>


    <?php #todo: implement dynamic title!?>

    <title>NFR</title>


    <?php #TODO: implement dynamic CSS rendering ?>
    <?php #TODO: add keywords ?>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL; ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo URL; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet'
          type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo URL; ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URL; ?>public/css/creative.css" rel="stylesheet">

    <script src="<?php echo URL; ?>vendor/jquery/jquery.min.js"></script>

    <?php
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
        }
    }
    ?>
</head>

<body id="page-top">
<!-- todo: implement dynamic element-page-css rendering -->
<?php Session::init(); ?>
<?php //var_dump($_SESSION); ?>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <?php if (Session::get('page') == 'index'): ?>
    <a class="navbar-brand" href="#page-top">NFR</a>
    <?php else: ?>
    <a class="navbar-brand" href="index">NFR</a>
    <?php endif; ?>


    <button class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

<!--            --><?php //if (Session::get('page') == 'index' || Session::get('page') == ''): ?>
            <li class="nav-item">
                <a class="nav-link" href="#intro">Intro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#steps">Registreren</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#marketplace">Marketplace</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
<!--            --><?php //endif; ?>


            <?php if (Session::get('loggedIn') == false): ?>


                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL; ?>help">Help</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?php //echo URL; ?><!--index">Index</a>-->
<!--                </li>-->
            <?php endif; ?>
            <?php if (Session::get('loggedIn') == true): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL; ?>dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL; ?>note">Notes</a>
                </li>

                <?php if (Session::get('role') == 'owner'): ?>
                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo URL; ?>user">Users</a>
                    </li>
                <?php endif; ?>

                <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL; ?>login">Login</a>
                </li>
            <?php endif; ?>


        </ul>
    </div>
</nav>

<?php if (Session::get('page') == 'index'): ?>
<div id="pageWrapper">
    <?php endif; ?>
    
