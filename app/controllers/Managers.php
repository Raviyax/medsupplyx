<?php
class Managers extends Controller {
    public $managerModel;
    public $userModel;
    public $db;

    public function __construct() {
        $this->managerModel = $this->model('Manager');
    }

    public function index() {   
        $data = [];
    
        $this->view('manager/index', $data);
    }

public function registration() {

    $pharmacyRegistration = $this->managerModel->getPharmacyRegistration();
    $supplierRegistration = $this->managerModel->getSupplierRegistration();

    $data = [
        'pharmacyRegistration' => $pharmacyRegistration ,
        'supplierRegistration' => $supplierRegistration
    ];


    
    $this->view('manager/registration', $data);
}



public function rejectPharmacy($id) {
    if($this->managerModel->rejectPharmacy($id)) {
        $this->view('popup/reject');
    } else {
        die('Something went wrong');
    }
}

public function all_pharmacies() {

    
    $data = [];
    
    $this->view('manager/all_pharmacies', $data);

}

public function all_suppliers() {
    $data = [];
    
    $this->view('manager/all_suppliers', $data);

}

public function medicines() {
    $data = [];
    
    $this->view('manager/medicines', $data);

}

public function new_medicine() {
    $data = [];
    
    $this->view('manager/new_medicine', $data);

}


public function messages() {
    $data = [];
    
    $this->view('manager/messages', $data);

}




public function profile() {
    $data = [];
    
    $this->view('manager/profile', $data);

}

public function logout() {
    unset($_SESSION['USER_DATA']);
    redirect('users/login');
 }

public function approve_supplier() {

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['acceptsupplier'])){
            $this->db = new Database;                                   
            $email = $_POST['acceptsupplier'];
            $data = [
                'email' => $email
            ];
            $keys = array_keys($data);
        $query = "SELECT * FROM supplierregistration WHERE ";
        $conditions = [];
        foreach ($keys as $key) {
            $conditions[] = $key . "=:" . $key;
        }
        $query .= implode(' AND ', $conditions) . ' ORDER BY id DESC LIMIT 1';
    
        $res = $this->db->query2($query, $data);
        
           $name = $res[0]->name;
           $email = $res[0]->email;
           $password = $res[0]->password;        

        $this->db->query('INSERT INTO users (name, email, password , role) VALUES(:name, :email , :password, :role)');
    
 
        // Bind values
        
        $this->db->bind(':name',$name);
        $this->db->bind(':email',  $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', 'supplier');

        // Execute
        if($this->db->execute()) {
            header('location: ' . URLROOT . '/managers/registration');

            return true;
        } else {
            return false;
        }
        
        header('location: ' . URLROOT . '/managers/registration');
       
    
        }
    }
}

public function approve_pharmacy() {

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['acceptpharmacy'])){
            $this->db = new Database;                                   
            $email = $_POST['acceptpharmacy'];
            $data = [
                'email' => $email
            ];
            $keys = array_keys($data);
        $query = "SELECT * FROM pharmacyregistration WHERE ";
        $conditions = [];
        foreach ($keys as $key) {
            $conditions[] = $key . "=:" . $key;
        }
        $query .= implode(' AND ', $conditions) . ' ORDER BY id DESC LIMIT 1';
    
        $res = $this->db->query2($query, $data);
        
           $name = $res[0]->name;
           $email = $res[0]->email;
           $password = $res[0]->password;        

        $this->db->query('INSERT INTO users (name, email, password , role) VALUES(:name, :email , :password, :role)');
    
 
        // Bind values
        
        $this->db->bind(':name',$name);

        $this->db->bind(':email',  $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', 'pharmacy');

        // Execute
        if($this->db->execute()) {
            header('location: ' . URLROOT . '/managers/registration');

            return true;
        } else {
            return false;
        }
        
        header('location: ' . URLROOT . '/managers/registration');
       
    
        }
    }
        
}
}

