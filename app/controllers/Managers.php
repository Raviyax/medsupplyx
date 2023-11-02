<?php
class Managers extends Controller {
    public $managerModel;

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

public function approvePharmacy($id) {
    if($this->managerModel->approvePharmacy($id)) {
        $this->view('popup/approved');
    } else {
        die('Something went wrong');
    }
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
    $data = [];
    
    $this->view('manager/logout', $data);

}


}