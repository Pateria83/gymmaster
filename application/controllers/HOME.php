<?php defined('BASEPATH') OR exit('No direct script access allowed');
class HOME extends CI_Controller {
	public $data = [];

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	/**
	 * Redirect if needed, otherwise display the user list
	 */
	public function index() {
        $this->load->view( 'LAYOUT/header' );
        $this->load->view( 'LAYOUT/sidebar' );
        $this->load->view( 'home/index' );
        $this->load->view( 'LAYOUT/footer' );
	}

}
