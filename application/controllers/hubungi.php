<?php

class Hubungi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $head['title'] = "Hubungi Kami";
        $this->load->helper('form');
        $head['username'] = "";
        $this->load->vars($head);
        $this->load->view('v_head', $head);
        
        $array_navbar['active'] = 'hubungi';
        $this->load->view('v_navbar', $array_navbar);
        
        $array_navigation = array(
            'Alamat' => site_url('hubungi/alamat'),
            'Kontak Kami' => site_url('hubungi')
        );
        
        $array_header['array_navigation'] = $array_navigation;
        $this->load->view('v_header', $array_header);
    }

    public function index() {
        $this->load->view('contactus/v_contact_us');
        $this->load_footer();
    }

    public function alamat() {
        $this->load->view('contactus/v_address');
        $this->load_footer();
    }

    public function load_footer() {
        $this->load->view('v_footer');
    }

}

?>