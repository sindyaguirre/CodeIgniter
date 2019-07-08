<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $dados['titulo'] = 'Título blablba';
        $this->load->view('home', $dados);
    }
    public function clientes() {
        $dados['titulo'] = 'Clientes- bLAB';
        $this->load->view('clientes', $dados);
    }
    public function servicos() {
        $dados['titulo'] = 'Serviços- bLAB';
        $this->load->view('servicos', $dados);
    }
    public function sobre() {
        $dados['titulo'] = 'Sobre- sobre mim';
        $this->load->view('sobre', $dados);
    }

    public function contato() {
        $dados['titulo'] = 'Fale comigo';
        $this->load->view('contato', $dados);
    }

}
