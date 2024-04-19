<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MenuItemModel extends CI_Model
{
	public $table;
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->table = ['trl_menu-types', 'trl_menu-item_categories', 'trl_menu-items'];
		$this->data = [];
	}
	
	public function show_master(){
		$this->load->model('menu/MenuTypeModel', 'MenuType');
		$this->load->model('menu/MenuCategoryModel', 'MenuCategory');

		
		$master = json_decode($this->MenuType->show(), true, 4);

		foreach ($master as $type_key => $type_value) {
			# code...
			$master[$type_key]['type_categories'] = json_decode($this->MenuCategory->show(['category_type'=>$type_value['id']]), true, 4);

			foreach ($master[$type_key]['type_categories'] as $menu_key => $menu_value) {
				$master[$type_key]['type_categories'][$menu_key]['menu_items'] = json_decode($this->MenuItem->show(['cat_id'=> $menu_value['id']]));
			}
		}
        /* 
		$categories_array = [];
        for ($i=0; $i < count($categories); $i++) { 
            $categories[$i] = (array)$categories[$i];
            $categories_array[$i] = $categories[$i];
            $items = $this->db->query("SELECT * FROM `trl_menu-items` WHERE `trl_menu-items`.`cat_id` = " . $categories[$i]['id'])->result();
            $categories[$i]['items'] = [];
            for ($j=0; $j < count($items); $j++) {
                $items[$j] = (array)$items[$j];
                $items_array[$j] = $items[$j];
                $categories[$i]['items'][$j] = $items[$j];
            }
        } 
		*/
        return $master;
	}

	public function show(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		return json_encode($this->db->get($this->table[2])->result_array());
	}

	// INSERT FROM DB
	public function create()
	{
		$this->db->insert($this->table[2], $this->data);
	}
	// UPDATE FROM DB
	public function edit(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->update($this->table[2], $this->data);
	}
	// UPDATE FLAG FROM DB
	public function remove(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->where($where);
		$this->db->delete($this->table[2]);
	}
	// DELETE FROM DB
	public function delete(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->where($where);
		$this->db->delete($this->table[2]);
	}
}
