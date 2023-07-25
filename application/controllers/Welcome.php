<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$result = [];
		$data_req = json_decode(file_get_contents('http://103.226.55.159/json/data_rekrutmen.json'),true);
		foreach($data_req["Form Responses 1"] as $dt) {
			$temp_data = [
				'id' => $dt['id'],
				'timestamp' => $dt['timestamp'],
				'nama' => $dt['nama'],
				'nip' => $dt['nip'],
				'satuan_kerja' => $dt['satuan_kerja'],
				'posisi_yang_dipilih' => $dt['posisi_yang_dipilih'],
				'bahasa_pemrograman_yang_dikuasai' => $dt['bahasa_pemrograman_yang_dikuasai'],
				'database_yang_dikuasai' => $dt['database_yang_dikuasai'],
				'tools_yang_dikuasai' => $dt['tools_yang_dikuasai'],
				'pernah_membuat_mobile_apps' => $dt['pernah_membuat_mobile_apps']
			];
			array_push($result, $temp_data);
		}
		$data['pendaftaran'] = $result;
		$this->load->view('welcome_message', $data);
	}

	public function data_detail($id)
	{
		$this->load->helper('url');
		$data_req = json_decode(file_get_contents('http://103.226.55.159/json/data_rekrutmen.json'),true);
		foreach($data_req["Form Responses 1"] as $dt) {
			if($id == $dt['id']) {
				$data['id'] = $dt['id'];
				$data['timestamp'] = $dt['timestamp'];
				$data['nama'] = $dt['nama'];
				$data['nip'] = $dt['nip'];
				$data['satuan_kerja'] = $dt['satuan_kerja'];
				$data['posisi_yang_dipilih'] = $dt['posisi_yang_dipilih'];
				$data['bahasa_pemrograman_yang_dikuasai'] = $dt['bahasa_pemrograman_yang_dikuasai'];
				$data['database_yang_dikuasai'] = $dt['database_yang_dikuasai'];
				$data['tools_yang_dikuasai'] = $dt['tools_yang_dikuasai'];
				$data['pernah_membuat_mobile_apps'] = $dt['pernah_membuat_mobile_apps'];
			}
		}

		// $data_req2 = json_decode(file_get_contents('http://103.226.55.159/json/data_rekrutmen.json'),true);
		// foreach($data_req2 as $dt) {
		// 	if($id == $dt['id']) {
		// 		$data['id'] = $dt['id'];
		// 		$data['timestamp'] = $dt['timestamp'];
		// 		$data['nama'] = $dt['nama'];
		// 		$data['nip'] = $dt['nip'];
		// 		$data['satuan_kerja'] = $dt['satuan_kerja'];
		// 		$data['posisi_yang_dipilih'] = $dt['posisi_yang_dipilih'];
		// 		$data['bahasa_pemrograman_yang_dikuasai'] = $dt['bahasa_pemrograman_yang_dikuasai'];
		// 		$data['database_yang_dikuasai'] = $dt['database_yang_dikuasai'];
		// 		$data['tools_yang_dikuasai'] = $dt['tools_yang_dikuasai'];
		// 		$data['pernah_membuat_mobile_apps'] = $dt['pernah_membuat_mobile_apps'];
		// 	}
		// }
		$this->load->view('detail', $data);
	}
}
