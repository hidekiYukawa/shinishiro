<?php

    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 04/08/2017;
     * At Time: 19:24;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */

    /**
     * CONTROLLER
     *
     * Class Help
     *
     * The controller, accepts input and converts it (in) to commands for the model or view.
     * A controller can send commands to the model to update the models state (ergo, editing a document).
     * It can also send commands to its associated view to change the views' presentation of the model (e.g., scrolling through a document, Movement of document).
     */


    class Errror extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        // fn.index() is to prevent constructor to interfere with default page
        function index() {
            // assign value to the view
            $this->view->msg = 'This page doesn\'t exist';

            $this->view->render('error/index');
        }
    }

