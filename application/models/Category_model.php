<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 11:51
 */
class Category_model extends CI_Model
{
    public function  getCategory()
    {
        return $this->db->get('categories');
        //SELECT * FROM CATEGORIES;
    }
    public function  insertCategory()
    {
        //INSERT INTO category (name) VALUES ($name);
        $data = array(
          'name' => $name
        );
        $this->db->insert('categories',$data);
    }
}