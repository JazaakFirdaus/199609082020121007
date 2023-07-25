<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$result = [];
		$data_req = json_decode(file_get_contents('http://103.226.55.159/json/data_rekrutmen.json'),true);
		$data_req2 = json_decode(file_get_contents('http://103.226.55.159/json/data_attribut.json'),true);
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
		foreach($data_req2 as $dt2) {
			if($id == $dt2['id_pendaftar']) {
				$temp_data = [
					'id_pendaftar' => $dt['id_pendaftar'],
					'jenis_attr' => $dt['jenis_attr'],
					'value' => $dt['value'],
				];
				array_push($result, $temp_data);
			}
		}
		$data['attr'] = $result;
		$this->load->view('detail', $data);
	}
}
