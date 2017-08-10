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
        Auth::handleLogin();
        $this->view->js = array('dashboard/js/default.js'); # set js variable to ($)this view             # todo: make path usage dynamic and efficient.
        // @Session::init();
    }

    function index()
    {
        $this->view->title = 'Dashboard';

        $this->view->render('header');
        $this->view->render('dashboard/index');
        $this->view->render('footer');
    }


    public function logout()
    {
        Session::destroy();
        header('location: ' . URL . 'login');
        exit;
    }

    public function xhrInsert()
    {
        $this->model->xhrInsert();
    }

    function xhrGetListings()
    {
        $this->model->xhrGetListings();
    }

    function xhrDeleteListing()
    {
        $this->model->xhrDeleteListing();
    }


}