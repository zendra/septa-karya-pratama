<?php 

class contactus extends CI_Controller 
{
	function Contactus()
	{
		parent::__construct();
		$head['title'] = "Hubungi Kami";
		$this->load->helper('form');
		$head['username']= "";
		$this->load->vars($head);
		$this->load->view('v_head', $head);
        $this->load->view('v_navbar');
		$this->load->view('contactus/v_header');
	}
	
    public function index() 
	{
		$this->load->view('contactus/v_contact_us');
		$this->load_footer();
    }
	
	public function contact_us() 
	{
		$this->load->view('contactus/v_contact_us');
		$this->load_footer();
    }
	
	public function address() 
	{
		$this->load->view('contactus/v_address');
		$this->load_footer();
    }
	
	public function load_footer()
	{
		$this->load->view('v_footer');
	}
}
?>