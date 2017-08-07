<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 07/08/2017;
     * At Time: 23:34;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */
    # Model does all data/dirty work
    class Dashboard_Model extends Model
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function xhrInsert()
        {
            # todo: add high level security!!
            $text = $_POST[ 'text' ];
            // $dt = new DateTimeImmutable();
            $ts = $this->getCurrentDate('moment');


            $stmt = $this->db->prepare('INSERT INTO data (data, timestamp) VALUES (:text, :tss)');

            $stmt->execute(array(':text' => $text, ':tss' => $ts));
        }

        public function xhrGetListings()
        {
            $stmt = $this->db->query('SELECT * FROM data');

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $stmt->execute();

            $data = $stmt->fetchAll();
            // var_dump($data);

            # Convert to an array of (json) objects
            echo json_encode($data);
        }

        function xhrDeleteListing()
        {
            $id = $_POST['id'];
            $sth = $this->db->prepare('DELETE FROM data WHERE id = "'.$id.'"');
            $sth->execute();
        }


        // todo: place this function (static) in better suiting general purpose class.
        public function getCurrentDate($f)
        {

            switch ($f) {
                case 'hour':
                    return date('H');
                    break;
                case 'year':
                    return date('Y');
                    break;
                case 'month':
                    return date('m');
                    break;
                case 'day':
                    return date('d');
                    break;
                case 'moment':
                    return date('Y-m-d H:i:s');
                    break;
                case 'day_of_year':
                    return date('d-m-Y');
                    break;
                default:
                    return false;
                    break;
            }

        }
    }