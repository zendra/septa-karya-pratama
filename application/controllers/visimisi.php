<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main
 *
 * @author Yowanda
 */
class VisiMisi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $head['title'] = "Visi dan Misi";
        $this->load->vars($head);
        $this->load->view('v_head', $head);
        
        $array_navbar['active'] = 'visimisi';
        $this->load->view('v_navbar', $array_navbar);
    }
    
    public function index() {        
        $this->load->view('visimisi/v_visimisi');
        $this->load->view('v_footer');
    }
}
