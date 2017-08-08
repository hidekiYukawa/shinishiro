<!DOCTYPE HTML>

<html>

<head>

    <title>Test</title>

    <!-- stylesheets todo: make this dynamic -->
    <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />

    <!-- scripts todo: make this dynamic -->
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/hfr.js"></script>

    <?php
        # Remember: Program is currently in the header, which belongs to (all) the view(s) of the controller. So $this refers to the instantiated 'view'-object.

        # Loop through .js files that need to be included by the controller of this view.
        if (isset($this->js)) {
            # echo "js is set for this [view] of [controller] of [model]....";
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
            }
        }

    ?>
</head>

<body>

<?php Session::init(); ?>

<div id="header">

    <b>Nederlandsche Financiële Reserve</b>
    <br/><br/>

    <?php
        # todo: make this dynamic, independent and so on....
        $index      = '<a href="' . URL . 'index">Index</a> ';
        $help       = '<a href="' . URL . 'help">Help</a> ';
        $logout     = '<a href="' . URL . 'dashboard/logout">Logout</a> ';
        $login      = '<a href="' . URL . 'login">Login</a> ';
        $dashboard  = '<a href="' . URL . 'dashboard">Dashboard</a> ';
        $user       = '<a href="' . URL . 'user">Users</a> ';

        echo ( !Session::get( 'loggedIn' ) ) ? $index . $help . $login : $index;

        echo ( Session::get( 'loggedIn') && Session::get('role') == 'owner' ) ? $user . $dashboard . $logout :
             ( Session::get( 'loggedIn' ) ) ? $dashboard . $logout : '';




        // todo: implement Session::init in global place etc.

        // todo: think about which coding style to implement here.
        // This could be done in various ways, I personally prefer this way, mainly because of minimal code duplicates. However, for readability reasons and so on, it's probably better to do it one of the other ways:
        // $out =  '<a href="' . URL;
        // $out .= (Session::get('loggedIn')) ? 'dashboard/logout">Logout' : 'login">Login';
        // $out .= '</a>';
        // echo $out;
    ?>

</div>

<!-- start dynamic MVC-content -->
<div id="content">


