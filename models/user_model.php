<?php

    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 09/08/2017;
     * At Time: 02:09;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */
    class User_Model extends Model
    {

        public function __construct() {
            parent::__construct();
        }

        public function userList()
        {
            $stmt = $this->db->prepare('SELECT id, login, role FROM users');
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function userSingleList($id)
        {
            $stmt = $this->db->prepare('SELECT id, login role FROM users WHERE id = :id');
            $stmt->execute(array(':id' => $id));
            return stmt->fetch();
        }
        
        public function create($data)
        {
            $stmt = $this->db->prepare('INSERT INTO users (login, password, role) VALUES (:login, :password, :role)');
            
            $stmt->execute(array(
                ':login' => $data['login'],
                ':password' => $data['password'],
                ':role' => $data['role']
            ));
        }
        
        public function editSave($data) 
        {
            $stmt = $this->db->prepare('UPDATE users SET login = :login, password = :password, role = :role WHERE id = :id');
            
            // todo: CHANGE MD5, SAME STORY...
            $stmt->execute(array(
                ':id' => $data['id'],
                ':login' => $data['login'],
                ':password' => md5($data['password']),
                ':role' => $data['role']
            ));
        }
        
        public function delete($id) {
            $stmt = $this->db->prepare('DELETE FROM users WHERE id = :id');
            $stmt->execute(array(
                ':id' => $id
            ));
        }
        
    }