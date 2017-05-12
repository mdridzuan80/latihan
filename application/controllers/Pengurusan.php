<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurusan extends MY_Controller
{
	public function index()
	{
		$this->render_view('dashboard/v_index');
	}

	public function pengguna()
	{
		$this->render_view('pengurusan/pengguna/v_index');
	}
}
