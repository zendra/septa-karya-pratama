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
class home extends CI_Controller {

	public function index() 
	{
        $head['title'] = "Septa Karya Pratama";
        $this->load->view('v_head', $head);
        $this->load->view('v_navbar');
        $this->load->view('home/v_carousel');
        $this->load->view('home/v_about');
        $this->load->view('home/v_cta2');
        $this->load->view('home/v_features');
        $this->load->view('v_footer');
    }
}
