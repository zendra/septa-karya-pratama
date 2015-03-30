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
class hubunganinvestor extends CI_Controller {

    public function index() {
        $head['title'] = "Hubungan Investor";
        $this->load->view('v_head', $head);
        $this->load->view('v_navbar');
        $this->load->view('hubunganinvestor/v_header');
        $this->load->view('v_footer');
    }
}
