<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $birthDate = new DateTime('15 November 2017 18:56:00');

        $latitude =  -23.5489; // BH -19.8157;
        $longitude = -46.6388;//BH -43.9542;

        $timezone = -3;
        $verao = true;
    
        $this->load->library('MapaNatal');
        
        $resultado = $this->mapanatal->calcular($birthDate, $longitude, $latitude, $timezone, $verao);
    
        $nome = $this->mapanatal->getAstroNames();
        
        $data['resultado'] = $resultado;
        $data['nome'] = $nome;
        $this->load->view('index', $data);	
    }
}
?>
