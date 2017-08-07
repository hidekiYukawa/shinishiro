<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 06/08/2017;
     * At Time: 02:10;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */


    
    /*
     * The controller, accepts input and converts it (in) to commands for the model or view.
     * A controller can send commands to the model to update the models state (ergo, editing a document).
     * It can also send commands to its associated view to change the views' presentation of the model (e.g., scrolling through a document, Movement of document).
     */

// this is the BASE controller, I want controller accessible form other controllers


class Controller {


    public function __construct()
    {
        // echo 'Main Controller<br/>';

        // main controller is going to have the view, so instantiate a new view object
        $this->view = new View();
    }


    // automatically load the Model, if it exists
    public function loadModel($name) {
        // todo: make this more beautiful

        $path = MODELS . $name . '_model.php';

        if (file_exists($path)) {

            require MODELS . $name . '_model.php';

            // create variable to instantiate object
            $modelName = $name . '_model';

            $this->model = new $modelName();
        }
    }
    
    
    // todo: implement function index() and override for the not redundant information
}