<?php

    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 04/08/2017;
     * At Time: 19:19;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */
    
    // initiating Model View Controller (MVC) ARCHITECTURE
    class Bootstrap
    {
        public function __construct()
        {
            // check if $_GET['url'] is set, else, set $url to NULL
            $url = (isset($_GET[ 'url' ])) ? $_GET[ 'url' ] : null;

            // trim the right forward slash of url
            $url = rtrim($url, '/');

            // explode into array, delimiter = '/'
            $url = explode('/', $url);

            // print_r($url);
            
            // if modified URL[0] (controlller) is an empty String OR carries the name 'index.php', require default index controller
            if (empty($url[ 0 ])) {
                require 'controllers/index.php';

                // instantiate new Index obj.
                $controller = new Index();

                // call index() function for page rendering
                $controller->index();

                // do not proceed (remaining part of) this script if THIS IF condition is met, ergo return false
                return false;
            }

            // ** String not empty and not carrying the name 'index.php'

            // set file according to requested controller ( $url[0] )
            $file = 'controllers/' . $url[ 0 ] . '.php';

            // check if the file exists, if so require it, else require and instantiate error and return false
            if (file_exists($file)) {
                // var_dump($file);
                require($file);
            } else {
                // var_dump($file);
                $this->error();
                return false;
            }

            // ** nothing returned false up until this line! Set controller to new instantiation of object with name of requested ($url([0])) controller 
            $controller = new $url[ 0 ];

            $controller->loadModel($url[ 0 ]);
            
            // IF arg is passed to method {$url[2]}
            if (isset($url[ 2 ])) {

                if (method_exists($controller, $url[ 1 ])) {
                    $controller->{$url[ 1 ]}($url[ 2 ]);
                } else {
                    $this->error();
                }
            } else {
                // check if method is requested in this query ( $url[ 1 ] )
                if (isset($url[ 1 ])) {

                    if (method_exists($controller, $url[ 1 ])) {
                        // load the requested method without argument(s) - default = false
                        $controller->{$url[ 1 ]}();
                    } else {
                        $this->error();
                    }
                } else {
                    // load the requested controller without method or args
                    $controller->index();
                }
            }
        }

        public function error() {
            require 'controllers/error.php';

            $controller = new Errror();
            $controller->index();

            // do not proceed (remaining part of) this script if THIS IF condition is met, ergo return false
            return false;
        }
    }