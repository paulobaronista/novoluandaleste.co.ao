<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Novo Luanda Leste';
        $data['description'] = 'Uma cidade de oportunidades. Uma mar de possibilidade.';
        $data['keywords'] = 'lotes comerciais luanda; lotes residenciais luanda; novo luanda leste; crystal lagoons luanda; crystal lagoons luanda; novoluandaleste; segunda fase luanda leste; sitio luanda leste; lotes luanda; terrenos luanda';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade()
    {
        $data['title'] = 'Novo Luanda Leste';
        $data['description'] = 'Uma cidade de oportunidades. Uma mar de possibilidade.';
        $data['keywords'] = 'lotes comerciais luanda; lotes residenciais luanda; novo luanda leste; crystal lagoons luanda; crystal lagoons luanda; novoluandaleste; segunda fase luanda leste; sitio luanda leste; lotes luanda; terrenos luanda';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadecookies()
    {
        $data['title'] = 'Novo Luanda Leste';
        $data['description'] = 'Uma cidade de oportunidades. Uma mar de possibilidade.';
        $data['keywords'] = 'lotes comerciais luanda; lotes residenciais luanda; novo luanda leste; crystal lagoons luanda; crystal lagoons luanda; novoluandaleste; segunda fase luanda leste; sitio luanda leste; lotes luanda; terrenos luanda';
        $menu['politicadecookies'] = 'active';
        $conteudo['pagina_view'] = 'politicadecookies_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
