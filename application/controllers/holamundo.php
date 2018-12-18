<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holamundo extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('project_model');
    }

    function index(){
        $this->load->view('myproject/bienvenido');
    }

    function cargaPagina(){
        $this->load->view('myproject/header');
        $this->load->view('myproject/bienvenido');
        $this->load->view('myproject/footer');

    }

    function nuevo(){
        $this->load->view('myproject/header');
        $this->load->view('myproject/formulario');
        $this->load->view('myproject/footer');
    }

    function recibirDatos(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'videos' => $this->input->post('videos')
        );
        $this->project_model->crearCurso($data);
        $this->load->view('myproject/header');
        $this->load->view('myproject/formulario');
        $this->load->view('myproject/footer');
    }

}