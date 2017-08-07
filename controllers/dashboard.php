<?php

    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 07/08/2017;
     * At Time: 20:45;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */

    class Dashboard extends Controller
    {
        // User (ONLY) sees this page after successful login

        public function __construct()
        {
            parent::__construct();

            @Session::init();

            $logged = Session::get('loggedIn');

            // todo: rewrite and shorten (ternary) this and other if/else statements!
            if (!$logged) {
                Session::destroy();
                header('location: login');
                exit;
            }

            # set js variable to ($)this view
            $this->view->js = array();
        }

        public function index()
        {
            $this->view->render('dashboard/index');
        }

        public function logout()
        {
            Session::destroy();
            header('location: ../login');
            exit;
        }


    }