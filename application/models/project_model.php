<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function crearCurso($data){
        $this->db->insert('cursos',array('nombreCurso' => $data['nombre'], 'videosCurso' => $data['videos']));
    }
}