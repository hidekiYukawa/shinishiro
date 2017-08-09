<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 10/08/2017;
     * At Time: 00:40;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */

/**
 *
 */
class Auth
{

    public static function handleLogin()
    {
        @session_start();
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            header('location: ../login');
            exit;
        }
    }

}