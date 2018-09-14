<?php

class Blog extends CI_Controller
{
    public function index()
    {
        $resultado = $this->db->get('post'); 
        $data = array('consulta' => $resultado);
        $this->load->view('blog', $data);
    }
}