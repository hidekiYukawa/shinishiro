<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 06/08/2017;
     * At Time: 04:25;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */

class Login extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index() {
        // todo: automize this

        // require MODELS . 'login_model.php';
        //
        // $model = new Login_Model();

        $this->view->render('login/index');
    }


    // talk to the Model
    function run() {
        // all business logic runs in model

        $this->model->run();
    }
}