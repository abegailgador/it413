<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function home()
	{
		$page = "home";
		// $this->load->view('index');
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
						// Whoops, we don't have a page for that!
						show_404();
		}
		
	  $this->load->view('templates/header');
	  $this->load->view('templates/menu');
		$this->load->view('pages/'.$page);
	  $this->load->view('templates/footer');
	  
	}

	public function aboutme()
	{
		
		$page = "aboutme";

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('pages/aboutme');
		$this->load->view('templates/footer');

	}

	public function education()
	{
		
		$page = "education";

		
	  $this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('pages/education');
		$this->load->view('templates/footer');

	}
}
