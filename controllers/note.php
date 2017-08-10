<?php
/**
 * Created
 * With PhpStorm;
 * By User: shinishirotomonaga;
 * On Date: 10/08/2017;
 * At Time: 04:49;
 *
 * Project name:    Nederlandsche Financiële Reserve
 * File name:       ${FILENAME}
 *
 * All rights reserved on behalf of J.Klaassen.
 */


class Note extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index()
    {
        $this->view->title = 'Notes';
        $this->view->noteList = $this->model->noteList();

        $this->view->render('header');
        $this->view->render('note/index');
        $this->view->render('footer');
    }

    public function create()
    {
        $data = array(
            'title' => $_POST['title'],
            'content' => $_POST['content']
        );
        $this->model->create($data);
        header('location: ' . URL . 'note');
    }

    public function edit($id)
    {
        $this->view->note = $this->model->noteSingleList($id);

        if (empty($this->view->note)) {
            die('This is an invalid note!');
        }

        $this->view->title = 'Edit Note';

        $this->view->render('header');
        $this->view->render('note/edit');
        $this->view->render('footer');
    }

    public function editSave($noteid)
    {
        $data = array(
            'noteid' => $noteid,
            'title' => $_POST['title'],
            'content' => $_POST['content']
        );

        // @TODO: Do your error checking!

        $this->model->editSave($data);
        header('location: ' . URL . 'note');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'note');
    }
}