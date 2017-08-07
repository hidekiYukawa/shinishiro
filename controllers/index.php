<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 04/08/2017;
     * At Time: 05:08;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */


class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index() {
        // echo 'INDEX INDEX INDEX';
        $this->view->render('index/index');
    }

    function details() {
        $this->view->render('index/index');
    }
}