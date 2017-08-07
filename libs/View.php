<?php

    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 06/08/2017;
     * At Time: 02:19;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */
    class View
    {
        public function __construct()
        {
            // echo 'This is the view.<br/>';
        }

        public function render($name, $noInclude = false) {

            /** IF $noInclude is set, don't include default header and footer */
            if ($noInclude) {
                require VIEWS . $name . '.php';
            } else {
                require VIEWS . HEADER;
                require VIEWS . $name . '.php';
                require VIEWS . FOOTER;
            }
        }
    }