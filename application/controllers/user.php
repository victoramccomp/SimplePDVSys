<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert($username, $password) {

        // WITH SQL
        // $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
        // $this->db->query($sql, array($username, $password));

        // WITH ACTIVE RECORDS
        $data = array(
            "username" => $username,
            "password" => $password
        );

        $this->db->insert("user", $data);

        echo "Inserted";
    }

    public function select() {

        // WITH SQL
        // $sql = 'SELECT * FROM user';
        // //$users = $this->db->query($sql)->result();
        // $users = $this->db->query($sql)->result_array();

        // foreach($users as $user) {
        //     //echo "{$user->username} - {$user->password}<br>";
        //     echo "{$user['username']} - {$user['password']}<br>";
        // }

        // WITH ACTIVE RECORDS
        $result = $this->db->get("user")->result_array();

        $this->load->library("table");

        echo $this->table->generate($result);
    }

    public function update($username, $password) {
        
        // WITH SQL
        // $sql = "UPDATE user SET password = ? WHERE username = ?";
        // $this->db->query($sql, array($password, $username));

        // WITH ACTIVE RECORDS
        $this->db->where("username", $username);
        $data = array("password" => $password);
        $this->db->update("user", $data);

        echo "Updated";
    }

    public function delete($username) {

        // WITH SQL
        // $sql = "DELETE FROM user WHERE username = ?";
        // $this->db->query($sql, array($username));

        // WITH ACTIVE RECORDS
        $this->db->where("username", $username);
        $this->db->delete("user");
        
        echo "Deleted";
    }
}
