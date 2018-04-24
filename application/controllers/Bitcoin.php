<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* developed by Shubham Sahu
*/

include APPPATH . 'third_party/jsonRPCClient.php';
include APPPATH . 'third_party/Client.php';

class Bitcoin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Daemon_model');
		//$this->load->database();
	}
	public function index()
	{
		//$data=$this->Daemon_model->daemonData();
		/*$user=$data[0]->daemon_name;
		$pass=$data[0]->daemon_password;
		$ip=$data[0]->daemon_ip;
		$port=$data[0]->daemon_port;*/

		$host='localhost';
		$port='8011';
		$user='PennyBaseCoinrpc';
		$pass='E2h1B9ZUSJpCX3Negb';
		$deamon=new Client($host, $port, $user, $pass);
		$response= $deamon->getTransactionList('pv16061995@gmail.com');
		print_r($response);

	}
}