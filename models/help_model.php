<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 06/08/2017;
     * At Time: 02:42;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */


    /**
     * Class Help_Model
     *
     *The model is the central component of the pattern.
     * It expresses the applications behaviour in terms of the problem domain.
     * Independent of the user interface.
     * It directly manages the data, logic and rules of the application.
     */
    
    
    class Help_Model extends Model {

        function __construct() {
            // parent::__construct();
            echo 'Help model!';
        }

        public function blah() {
            return 10 + 10;
        }
    }