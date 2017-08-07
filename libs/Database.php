<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 06/08/2017;
     * At Time: 07:09;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */

    // PDO = Protected Designation of Origin

class Database extends PDO {

    public function __construct()
    {
        // construct connection in PDO class - creates new DB object
        parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

        
    }
}