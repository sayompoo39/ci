<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 12:14
 */
class Admin extends  CI_Controller
{
    public function  __construct()
    {
        $this->load->model('category_model');
    }

    public function  index(){
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/admin_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function category()
    {
        $data = array(
            'categories' => $this->category_model->getCategory()
        );


        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/category_view', $data);
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function add_category()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/add_category_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function  create_category()
    {
        $name = $this->input->post('name');
        $this->category_model->insertCategory($name);
        redirect(base_url('admin/category'));
    }
    public function news()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/news_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function comment()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/comment_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function user()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/user_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
}