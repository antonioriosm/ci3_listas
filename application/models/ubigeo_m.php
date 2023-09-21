<?php 

class ubigeo_m extends CI_Model
{
    function obtenerDepartamentos() {
        $this->db->order_by('desdep');
        $query = $this->db->get('departamentos');

        return $query->result();
    }

    function dd_departamentos() {
        $dptos = $this->obtenerDepartamentos();

        // $data = [['01' => ''],['02' => '']];
        // $data = ['01' => '','02' => ''];
        $data = [];

        foreach ($dptos as $dpto) {
            $data[$dpto->id] = $dpto->desdep;
        }

        return $data;
    }

    function obtenerProvincias($coddep) {
        $this->db->where('departamento_id', $coddep);
        $query = $this->db->get('provincias');

        echo json_encode($query->result());
    }
    function obtenerDistritos($codpro) {
        $this->db->where('provincia_id', $codpro);
        $query = $this->db->get('distritos');

        echo json_encode($query->result());
    }
}
