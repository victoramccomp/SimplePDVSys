<?php if ( ! defined('BASEPATH')) exit('No direct script access alowed');

class Hello_model extends CI_Model {

    public function getProfile($name) {

        return array("fullName" => "Victor Angelo Marcorin", "age" => 27);
    }
}