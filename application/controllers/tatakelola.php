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
class tatakelola extends CI_Controller {

    public function index() {
        $this->tujuan();
    }
    
    function tujuan()
    {        
        $head['title'] = "Tata Kelola | Tujuan";
        $this->load->view('v_head', $head);
        $this->load->view('v_navbar');
        $this->load->view('tatakelola/v_header');
        $this->load->view('tatakelola/v_tujuan');
        $this->load->view('v_footer');
    }
    
    function pedoman()
    {        
        $head['title'] = "Tata Kelola | Pedoman";
        $this->load->view('v_head', $head);
        $this->load->view('v_navbar');
        $this->load->view('tatakelola/v_header');
        $this->load->view('tatakelola/v_pedoman');
        $this->load->view('v_footer');
    }
    
    function struktur()
    {        
        $head['title'] = "Tata Kelola | Struktur";
        $this->load->view('v_head', $head);
        $this->load->view('v_navbar');
        $this->load->view('tatakelola/v_header');
        $this->load->view('tatakelola/v_struktur');
        $this->load->view('v_footer');
    }
}
