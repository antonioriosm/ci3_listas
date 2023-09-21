<?php 

class Ubigeo extends CI_Controller
{
    public $ug;
    function __construct() {
        parent::__construct();

        $this->load->model('ubigeo_m', 'ug');
    }
    function index() {
        $data['titulo'] = "Listas Desplegables con CodeIgniter 3";
        $data['dptos'] = $this->ug->dd_departamentos();

        $this->load->view('ubigeo_v', $data);
    }

    function provincias($coddep) {
        $this->ug->obtenerProvincias($coddep);
    }

    function distritos($codpro) {
        $this->ug->obtenerDistritos($codpro);
    }
}