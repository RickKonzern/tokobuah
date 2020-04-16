
<?php 

defined('BASEPATH') OR exit ('No Direct script acces allowed');

class Sampel extends CI_Controller
{
public function __construct()
{
	parent::__construct();
	$this->BASE_API="http://localhost/tokobuah1/index.php";
	$this->load->library('curl');
	$this->load->helper('url');
	$this->load->helper('form');
	
}

public function index()
{
	$data["products"] = json_decode($this->curl->simple_get($this->BASE_API.'/api/product'));
	$this->load->view("sampel/sampel_view",$data);
}

}