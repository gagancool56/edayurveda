<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$res['posts'] = $this->db->get('post')->result_array();
		load_file('index', $res);
	}

	function pages($filename = '')
	{
		$data = array();
		if ($filename == 'blog') {
			$postid = $_REQUEST['postid'];
			$data['post'] = $this->db->where('postid', $postid)->get('post')->result_array();
			$data['posts'] = $this->db->get('post')->result_array();
		}

		load_file($filename, $data);
	}
}
