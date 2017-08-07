<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 04/08/2017;
     * At Time: 18:58;
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

class Help extends Controller {

    public function __construct() {
        parent::__construct();
        // echo "<br/>We are inside help.<br/>";
    }


    public function index() {
        $this->view->render('help/index');
    }

    public function other($arg = false) {
        // echo "Optional: " . $arg;

        require 'models/help_model.php';
        $model = new Help_Model();
        //
        $this->view->blah = $model->blah();
    }
}