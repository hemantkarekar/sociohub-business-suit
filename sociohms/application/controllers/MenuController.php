<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MenuController extends CI_Controller
{

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
	public function __construct()
	{
		parent::__construct();
		$this->load->model("menu/MenuItemModel", "MenuItem");
	}


	public function index()
	{
		echo "<pre>";
		print_r($this->MenuItem->show_master());
	}

	// public function category_add()

	public function do_upload()
	{
		$config['upload_path']          = './assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('item_file')) {
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			// $this->load->view('upload_form', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			print_r($data);

			// $this->load->view('upload_success', $data);
		}
	}

	/* 
	public function menu_item_add()
	{
		$data = $this->input->post();
		$this->do_upload();
		$purifiedArray = $this->MenuItem->map_fields_with_formdata(['item_title', 'item_price', 'item_description', 'cat_id'], $data['item']);
		$this->MenuItem->new('trl_menu-items', $purifiedArray);
		$this->session->set_flashdata('success', "Added new item '" . $purifiedArray['item_title'] . "' Successfully.");
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function menu_item_delete($id)
	{
		$this->MenuItem->delete('trl_menu-items', ['menu_id' => $id]);
		$this->session->set_flashdata('success', " Successfully deleted an item from menu!");
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function menu_item_edit($id)
	{
		$data = $this->input->post();
		// print_r($data['item']);
		$purifiedArray = $this->MenuItem->map_fields_with_formdata(['item_title', 'item_price', 'item_description'], $data['item']);
		$this->MenuItem->update('trl_menu-items', $purifiedArray, array('menu_id' => $id));
		$this->session->set_flashdata('success', " Successfully Updated '" . $purifiedArray['item_title'] . "'!");
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function category_add()
	{
		$data = $this->input->post();
		$purifiedArray = $this->MenuItem->map_fields_with_formdata(['cat_title', 'cat_description'], $data['category']);
		$this->MenuItem->new('trl_menu-categories', $purifiedArray);
		$this->session->set_flashdata('success', "Added new category '" . $purifiedArray['cat_title'] . "' Successfully.");
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function category_delete($id)
	{
		$this->MenuItem->delete('trl_menu-categories', ['id' => $id]);
		$this->session->set_flashdata('success', " Successfully deleted a category!");
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function category_edit($id)
	{
		$data = $this->input->post();
		$purifiedArray = $this->MenuItem->map_fields_with_formdata(['cat_title', 'cat_description'], $data['category']);
		$this->MenuItem->update('trl_menu-categories', $purifiedArray, array('id' => $id));
		$this->session->set_flashdata('success', " Successfully Updated '" . $purifiedArray['cat_title'] . "'!");
		redirect($_SERVER['HTTP_REFERER']);
	} 
	*/
}
