<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 15:59
 */
class  home extends  CI_Controller
{
    public  function  index(){
        $this->load->view('layout/header_view');
        $this->load->view('home_view');
    }
}