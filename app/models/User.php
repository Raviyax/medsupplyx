<?php
class User {
    
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Register user
    public function pharmacy($data) {
        $this->db->query('INSERT INTO pharmacyregistration (name, address, phone, licenceno, email, password) VALUES(:name, :address, :phone, :licenceno, :email , :password)');

        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':licenceno', $data['licenceno']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        
        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Register user
    public function supplier($data) {
        $this->db->query('INSERT INTO supplierregistration (name, address, phone, licenceno, email, password) VALUES(:name, :address, :phone, :licenceno, :email, :password)');

        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':licenceno', $data['licenceno']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Register user
    public function cashier($data) {
        $this->db->query('INSERT INTO cashierregistration (name, pharmacyId, phone, email, password) VALUES(:name, :pharmacyId, :phone, :email, :password)');

        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':pharmacyId', $data['licence']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Login User
    public function login($email, $password) {
        $this->db->query('SELECT * FROM pharmacyregistration WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        
        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function cashierLogin($email, $password) {
        $this->db->query('SELECT * FROM cashierregistration WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        
        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }


    public function checkStatus($email) {
        $this->db->query('SELECT * FROM pharmacyregistration WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $status = $row->status;



        if($status == 'approved') {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByEmailSupplier($email) {
        $this->db->query('SELECT * FROM supplierregistration WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkStatusSupplier($email) {
        $this->db->query('SELECT * FROM supplierregistration WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $status = $row->status;

        var_dump($row);

        if($status == 'approved') {
            return true;
        } else {
            return false;
        }
    }


    public function findUserByEmail($email) {
        $this->db->query('SELECT * FROM pharmacyregistration WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByEmailCashier($email) {
        $this->db->query('SELECT * FROM cashierregistration WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

   public function findUserByEmailAdmin($email) {
        $this->db->query('SELECT * FROM adminregistration WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByEmailManager($email) {
        $this->db->query('SELECT * FROM managerregistration WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
}