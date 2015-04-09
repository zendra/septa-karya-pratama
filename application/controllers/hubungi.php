<?php

class Hubungi extends CI_Controller {

    var $_array_header;
    var $_array_navigation;
    
    function __construct() {
        parent::__construct();
        $head['title'] = "Hubungi Kami";
        $this->load->helper('form');
        $head['username'] = "";
        $this->load->vars($head);
        $this->load->view('v_head', $head);
        
        $array_navbar['active'] = 'hubungi';
        $this->load->view('v_navbar', $array_navbar);
        
        $this->_array_navigation = array(
            'Kontak Kami' => site_url('hubungi'),
            'Alamat' => site_url('hubungi/alamat')
        );        
        $this->_array_header['array_navigation'] = $this->_array_navigation;
    }

    public function index() {
        //$this->_array_header['active'] = array_keys($this->_array_navigation)[0];
        $this->load->view('v_header', $this->_array_header);
        $this->load->view('contactus/v_contact_us');
        $this->load_footer();
    }

    public function alamat() {
        //$this->_array_header['active'] = array_keys($this->_array_navigation)[1];
        $this->load->view('v_header', $this->_array_header);
        $this->load->view('contactus/v_address');
        $this->load_footer();
    }

    public function load_footer() {
        $this->load->view('v_footer');
    }

}

?>