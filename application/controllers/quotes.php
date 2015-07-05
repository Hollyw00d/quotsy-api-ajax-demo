<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quotes extends CI_Controller {

    public function index_json()
    {
        $this->load->model('Quote');
        $data['quotes'] = $this->Quote->all();
        echo json_encode($data);
    }

    public function index()
    {
        $this->load->view('index');
    }
}