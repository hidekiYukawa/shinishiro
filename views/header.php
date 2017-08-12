<!DOCTYPE html>

<html lang="nl">

<head>
    
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Hollandsche Financiële Reserve - Landing Page"/>
    <meta name="author" content="Justin Klaassen"/>
    
    
    <?php #todo: implement dynamic title!?>
    
	<title>NFR</title>
    
    
    <!--@TODO: implement dynamic CSS rendering -->
    
    <!-- the bootstrap grid css -->
    <link href="<?php echo URL; ?>public/css/bootstrap/bootstrap.css" rel="stylesheet"/>
    
    <!-- the default css -->
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/NFR.css" />
    
    <!-- Custom fonts -->
    <link href="<?php echo URL; ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    
    <!-- the default js ASYNC scripts -->
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js" async></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/hfr.js" async></script>
	
	<?php
		if (isset($this->js)) 
		{
			foreach ($this->js as $js)
			{
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?>
    
</head>

<body id="page-top">
<?php Session::init(); ?>

<?php //var_dump($_SESSION); ?>



<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo URL; ?>index">NFR</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

            <?php
            $li_begin   = "\n" . '<li class="nav-item">';
            $li_end     = '</li>' . "\n";

            # define the nav_items in an array
            $nav_items = array();

            if (!Session::get('loggedIn')) {
                $nav_items[] = URL . 'index';
                $nav_items[] = URL . 'login';
            } elseif (Session::get('loggedIn') == true && Session::get('role') == 'owner') {
                $nav_items[] = URL . 'dashboard';
                $nav_items[] = URL . 'user';
                $nav_items[] = URL . 'dashboard/logout';
            } elseif (Session::get('loggedIn')) {
                $nav_items[] = URL . 'dashboard';
                $nav_items[] = URL . 'dashboard/logout';
            }

//                (Session::get('loggedIn') == true && Session::get('role') == 'owner') ?
//                    array(URL . 'dashboard', URL . 'user', URL . 'dashboard/logout') :
//                    (Session::get('loggedIn') == true) ?
//                        array(URL . 'dashboard', URL . 'dashboard/logout') : 'nav_item generation failed!';

            # loop over the defined nav_items array
            for ($i = 0; $i < count($nav_items); $i++) {
                echo $li_begin;

                echo '<a class="nav-link" href="' . $nav_items[$i] . '">';
                $tmp = explode('/', $nav_items[$i]);
                echo ucfirst(end($tmp));
                echo '</a>';

                echo $li_end;
            }

            ?>

            </ul>
        </div>
    </nav>

<div id="content">
	
	