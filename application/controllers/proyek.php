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
class proyek extends CI_Controller {

    public function index() {
        $head['title'] = "Proyek";
        $this->load->view('v_head', $head);
        $array_navbar['active'] = 'proyek';
        $this->load->view('v_navbar', $array_navbar);
        $this->load->view('v_header');
        $this->load->view('proyek/v_portfolio');
        $this->load->view('v_footer');
    }
}
