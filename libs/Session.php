<?php

    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 07/08/2017;
     * At Time: 20:54;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */
    
    
    class Session
    {

        public static function init()
        {
            // override debug info
            @session_start();
        }

        public static function set($key, $value)
        {
            $_SESSION[ $key ] = $value;
        }

        public static function get($key)
        {
            // if (isset($_SESSION[$key])) {
            //     return $_SESSION[$key];
            // }

            return (isset($_SESSION[$key])) ? $_SESSION[$key] : '';
        }

        public static function destroy()
        {
            // todo: unset the session!
            // unset($_SESSION);
            session_destroy();
        }
    }
