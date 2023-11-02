<?php
class Manager
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getPharmacyRegistration() {
        $this->db->query("SELECT * FROM pharmacyregistration WHERE status='rejected'");

        $results = $this->db->resultSet();

        return $results;
    }

    public function getApprovedPharmacyRegistration() {
        $this->db->query("SELECT * FROM pharmacyregistration WHERE status='approved'");

        $results = $this->db->resultSet();

        return $results;
    }

    

    public function getSupplierRegistration() {
        $this->db->query("SELECT * FROM supplierregistration");

        $results = $this->db->resultSet();

        return $results;
    }

    public function getPharmacyById($id) {
        $this->db->query("SELECT * FROM pharmacyregistration WHERE id = :id");

        // Bind values
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function approvePharmacy($id) {
        $this->db->query('UPDATE pharmacyregistration SET status = "approved" WHERE id = :id');

        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function rejectPharmacy($id) {
        $this->db->query('UPDATE pharmacyregistration SET status = "rejected" WHERE id = :id');

        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}