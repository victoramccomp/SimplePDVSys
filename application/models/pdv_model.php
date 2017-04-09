<?php

class PDV_Model extends CI_Model {

    public function add($description, $price, $owner) {

        $data = array(
            "description" => $description,
            "price" => $price,
            "owner" => $owner,
            "date_time" => time()
        );

        $this->db->insert("sale", $data);
    }

    public function getAll() {

        $this->db->order_by("id_sale", "desc");
        return $this->db->get("sale")->result_array();
    }

    public function get($id_sale) {

        $this->db->where("id_sale", $id_sale);
        $result = $this->db->get("sale")->result_array();

        if (count($result) == 1)
            return $result[0]; 
        else 
            return false;
    }

    public function delete($id_sale) {

        $sql = "DELETE FROM sale WHERE id_sale=?";
        $this->db->query($sql, array($id_sale));
    }
}