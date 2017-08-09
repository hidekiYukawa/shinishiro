<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 07/08/2017;
     * At Time: 18:19;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */


    /**
     * Class Login_Model
     *
     * The model is the central component of the pattern.
     * It expresses the applications behaviour in terms of the problem domain.
     * Independent of the user interface.
     * It directly manages the data, logic and rules of the application.
     */
    
    
    class Login_Model extends Model
    {
        
        public function __construct()
        {
            parent::__construct();
            // echo md5('info@jklaassen.com');
        }

        public function run()
        {// straight up PDO

            // TODO: IMPLEMENT SPACE ENGINEERING LEVEL SECURITY!!!!! DO NOT USE MD5!

            $sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = MD5(:password)");

            $sth->execute(array(':login' => $_POST[ 'login' ], ':password' => $_POST[ 'password' ]));

            $data = $sth->fetch();
            
            $count = $sth->rowCount();

            if ($count > 0) { // a record is returned
                Session::init();
                
                Session::set('role', $data['role']);
                Session::set('loggedIn', true);

                header('location: ../dashboard');
            } else {
                // show an error!
                header('location: ../login');
            }

        }

    }