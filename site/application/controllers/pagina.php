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
        $dados['titulo'] = 'Clientes- bLAB Desenvolvimento Web';
        $this->load->view('clientes', $dados);
    }

    public function servicos() {
        $dados['titulo'] = 'Serviços- bLAB Desenvolvimento Web';
        $this->load->view('servicos', $dados);
    }

    public function sobre() {
        $dados['titulo'] = 'Sobre- sobre mim';
        $this->load->view('sobre', $dados);
    }

    public function contato() {

        //aqui é chamado o form e form_validation
        $this->load->helper('form');
        $this->load->library(array('form_validation', 'email'));
        //regras de validação doformulario
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required');

        if ($this->form_validation->run() == false) {
            $dados['formerror'] = validation_errors();
        } else {
//            $dados_form = $this->input->post();
//            $this->email->from($dados_form['email'], $dados_form['nome']);
//            $this->email->to('sindy_antunes@hotmail.com');
//            $this->email->subject($dados_form['assunto']);
//            $this->email->message($dados_form['mensagem']);
//            if ($this->email->send()) {
//                $dados['formerror'] = "Email enviado com sucesso!";
//            }else{
//                $dados['formerror'] = "Erro ao enviar email, tente novamente em alguns minutos!";
//            }
//            $this->email->to($dados_form['email'],$dados_form['nome']);
            $dados['formerror'] = 'A validação esta funcionando corretamente!';
        }
        $dados['titulo'] = 'Fale comigo';
        $this->load->view('contato', $dados);
    }

}
