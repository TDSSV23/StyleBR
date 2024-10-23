<?php

require_once './models/Cliente
.php';

class ClienteController {
    protected $model;

    function __construct(){
       $this->model = new Cliente(); 
    }

    function selectAll() {
        $result = $this->model->selectAll();
        require('./views/clienteList.php');
    }

    function novaPessoa() {
        require('./views/clienteForm.php');
      }

    function editar($id) {
        $result = $this->model->selectById($id);
        require('./views/clienteForm.php');
    }

    function insert($data) {
        $result = $this->model->insert($data);
        header('Location: ./cliente.php');
    }

    function delete($id) {
        $result = $this->model->delete($id);
        header('Location: ./cliente.php');
    }

    function update($data) {
        $result = $this->model->update($data);
        header('Location: ./cliente.php');
    }
}