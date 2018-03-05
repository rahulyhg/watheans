<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapa extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function salvaDados(){
    	$this->load->helper('form');
        $this->load->library('MapaNatal');
    	
    	$nome2 = $this->input->post('nome');
        $data = $this->input->post('data');
        $hora = $this->input->post('hora');
    	$longitude= $this->input->post('longitude');
    	$latitude= $this->input->post('latitude');
    	$fusoHorario= $this->input->post('fuso');
    	$isHorarioVerao = $this->input->post('verao');

        $datahora = DateTime::createFromFormat("d/m/Y H:i", "$data $hora");
    	$resultado = $this->mapanatal->calcular($datahora, $longitude, $latitude, $fusoHorario, $isHorarioVerao);
        $nome = $this->mapanatal->getAstroNames();
        
        $mapaDados['resultado'] = $resultado;
        $mapaDados['nome'] = $nome;
        $this->load->view('templates/htmlHeader'); 
        $this->load->view('templates/header');
        $this->load->view('mapa', $mapaDados);
        $this->load->view('mapa_canvas');
    }
}
?>
