<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 1/26/2019
 * Time: 2:45 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
        $this->load->view('home');
	}

    public function komentar(){
        $this->load->view('viewHome.php');
    }
}

/* End of file Controllername.php */