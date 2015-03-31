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
class tentang extends CI_Controller {

    function __construct() {
        parent::__construct();
        $head['title'] = "Tentang Kami";
        $this->load->vars($head);
        $this->load->view('v_head', $head);
        $this->load->view('v_navbar');
    }

    public function index() {
        $this->load->view('tentang/v_profil');
        $this->load_footer();
    }

    public function load_footer() {
        $this->load->view('v_footer');
    }

}
