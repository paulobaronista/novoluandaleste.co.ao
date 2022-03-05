<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Novo Luanda Leste';
        $data['description'] = 'Uma cidade de oportunidades. Uma mar de possibilidade.';
        $data['keywords'] = 'lotes comerciais luanda; lotes residenciais luanda; novo luanda leste; crystal lagoons luanda; crystal lagoons luanda; novoluandaleste; segunda fase luanda leste; sitio luanda leste; lotes luanda; terrenos luanda';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('telefone');
            $checkboxResidenciais = $this->input->post('checkboxResidenciais');
            $checkboxComerciais = $this->input->post('checkboxComerciais');
            $checkboxAfrincorp = $this->input->post('checkboxAfrincorp');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('[Novo Lead] LP - Novo Luanda Leste');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@nluandaleste.co.ao","Novo Luanda Leste");
            $this->email->to('contacto@novoluandaleste.co.ao');
            $this->email->cc('renata@spicycomm.com.br, alebertone@spicycomm.com.br, front.baronista@gmail.com, leadsnovoluandalesteangola@gmail.com, contacto@novoluandaleste.co.ao');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
            E-mail:		{$email}<br/>
            Telefone:	{$telefone}<br/>
            Lotes residenciais: ({$checkboxResidenciais})<br/>
            Lotes comerciais: ({$checkboxComerciais})<br/>
            Mensagem:	{$mensagem}<br/>
            Aceito receber informações da Afrincorp: {$checkboxAfrincorp}<br/>
            </body></html>");

            if($this->email->send()){
                redirect('http://novoluandaleste.co.ao/contato/obrigado');
            }else{
                redirect('http://novoluandaleste.co.ao/contato/fail');
            }

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Novo Luanda Leste';
        $data['description'] = 'Uma cidade de oportunidades. Uma mar de possibilidade.';
        $data['keywords'] = 'lotes comerciais luanda; lotes residenciais luanda; novo luanda leste; crystal lagoons luanda; crystal lagoons luanda; novoluandaleste; segunda fase luanda leste; sitio luanda leste; lotes luanda; terrenos luanda';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Novo Luanda Leste';
        $data['description'] = 'Uma cidade de oportunidades. Uma mar de possibilidade.';
        $data['keywords'] = 'lotes comerciais luanda; lotes residenciais luanda; novo luanda leste; crystal lagoons luanda; crystal lagoons luanda; novoluandaleste; segunda fase luanda leste; sitio luanda leste; lotes luanda; terrenos luanda';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
