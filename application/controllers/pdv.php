<?php

class PDV extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();
        $this->load->model("pdv_model", "PDVmodel");
    }

    public function index() {
      
        $this->load->view("header");

        $sales = $this->PDVmodel->getAll();

        $data = array("sales" => $sales);
        $this->load->view("sale/all", $data);

        $this->load->view("footer");
    }

    public function view($id_sale) {

        $sale = $this->PDVmodel->get($id_sale);

        if($sale) {
            $this->load->view("header");

            $data = array("sale" => $sale);
            $this->load->view("sale/view.php", $data);

            $this->load->view("footer");
        } else {
            show_404();
        }

    }

    public function show_add() {
      
        $this->load->view("header");

        $this->load->helper("form");
        $this->load->view("sale/add");

        $this->load->view("footer");
    }

    public function do_add() {
      
      //Loaded automatically by CodeIgniter 3 (The Udemy Video is in Version 2)
      //$this->load->library("input");

      $description = $this->input->post("description");
      $price = $this->input->post("price");
      $owner = $this->input->post("owner");

      $this->PDVmodel->add($description, $price, $owner);

      redirect(site_url("pdv/show_add"));
    }

    public function delete($id_sale) {

        $this->PDVmodel->delete($id_sale);
        redirect(site_url("sale"));
    }
}