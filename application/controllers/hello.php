<?php if ( ! defined('BASEPATH')) exit('No direct script access alowed');

class Hello extends CI_Controller {
    
    public function dbtest() {
        //
        $this->load->database();
    }

    public function one($name) {
        //
        $this->load->helper("url");

        $this->load->view('header');

        $this->load->model("hello_model", "model");
        $profile = $this->model->getProfile("victor");

        $data = array("name" => $name);
        $data['profile'] = $profile;

        $this->load->view('one', $data);   
    }

    public function libs() {
        //
        $this->load->library("table");

        $this->table->set_heading(array("Username", "Age"));

        $this->table->add_row(array("Victor", 27));
        $this->table->add_row(array("Yasmine", 25));
        $this->table->add_row(array("Leandro", 27));
        $this->table->add_row(array("Bruna", 20));

        echo $this->table->generate();
    }

    public function helpers() {
        //
        $this->load->helper("html");

        echo heading("This is heading");
    }
}