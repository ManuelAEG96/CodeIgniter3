<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$dato['string'] = '😉';
		$client = new Client([
			// Base URI is used with relative requests
			'base_uri' => 'https://jsonplaceholder.typicode.com/',
			// You can set any number of default request options.
			'timeout'  => 2.0,
		]);
		$response = $client->request('GET', 'posts');
		$dato['body'] = json_decode($response->getBody()->getContents());
		$this->load->view('headers');
		$this->load->view('welcome_message',$dato);
		$this->load->view('footer');
	}
}
