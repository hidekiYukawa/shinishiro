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

<div id="header">

    Header
    <br/><br/>

    <a href="<?php echo URL; ?>index">Index</a>
    <a href="<?php echo URL; ?>help">Help</a>

    <?php
        // todo: implement Session::init in global place etc.
        Session::init();

        // todo: think about which coding style to implement here.
        // This could be done in various ways, I personally prefer this way, mainly because of minimal code duplicates. However, for readability reasons and so on, it's probably better to do it one of the other ways:
        $out =  '<a href="' . URL;
        $out .= (Session::get('loggedIn')) ? 'dashboard/logout">Logout' : 'login">Login';
        $out .= '</a>';
        echo $out;
    ?>

</div>

<!-- start dynamic MVC-content -->
<div id="content">


