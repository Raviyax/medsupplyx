<?php
class pharmacy
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addOrder($data){
        $this->db->query('INSERT INTO requestorder (medicine, batchno, quantity, deliveryDate, orderEndDate) VALUES(:medicineName, :batchNumber, :quantity, :deliveryDate, :orderEntryDate)');
        // Bind values
        $this->db->bind(':medicineName', $data['Mname']);
        $this->db->bind(':batchNumber', $data['Bnum']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':deliveryDate', $data['ddate']);
        $this->db->bind(':orderEntryDate', $data['oedate']);
        
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }

    }

    public function getOrder()
    {
        $this->db->query('SELECT * FROM requestorder');
        $results = $this->db->resultSet();
        return $results;
    }
   

    public function deleteOrder($id)
    {
        $this->db->query('DELETE FROM requestorder WHERE id = :id');
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