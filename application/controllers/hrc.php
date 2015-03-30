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
class hrc extends CI_Controller {

	function Hrc()
	{
		parent::__construct();
		$head['title'] = "HRC";
		$this->load->vars($head);
		$this->load->view('v_head', $head);
        $this->load->view('v_navbar');
        $this->load->view('hrc/v_header');
	}
	
    public function index() 
	{
		$this->load->view('hrc/v_sdm');
		$this->load_footer();
    }
	
	public function sdm()
	{
		$this->load->view('hrc/v_sdm');
		$this->load_footer();
	}
	
	public function karir()
	{
		$this->load->view('hrc/v_karir');
		$this->load_footer();
	}
	
	public function load_footer()
	{
		$this->load->view('v_footer');
	}
}
