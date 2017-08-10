<?php
/**
 * Created
 * With PhpStorm;
 * By User: shinishirotomonaga;
 * On Date: 06/08/2017;
 * At Time: 02:45;
 *
 * Project name:    Nederlandsche Financiële Reserve
 * File name:       ${FILENAME}
 *
 * All rights reserved on behalf of J.Klaassen.
 */

/*
 * The model is the central component of the pattern.
 * It expresses the applications' behaviour in terms of the problem domain.
 * Independent of the user interface.
 * It directly manages the data, logic and rules of the application.
 */


// this is the base model

class Model {

    public function __construct() {

        # instantiate DB-object for each model on load
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);

    }

}