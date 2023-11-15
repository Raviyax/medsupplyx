<?php
 class Pharmacies extends Controller {

    public $pharmacyModel;
    public function __construct() {
        $this->pharmacyModel = $this->model('Pharmacy');
    }

    public function index() {
        $data = [];
        
        $this->view('pharmacy/index', $data);
    }

    public function inventory() {
        $data = [];
        
        $this->view('pharmacy/inventory', $data);
    }

    public function messages() {
        $data = [];
        
        $this->view('pharmacy/messages', $data);
    }

    public function advertistments() {
        $data = [];
        
        $this->view('pharmacy/advertistments', $data);
    }

    public function orders() {
        $order = $this->pharmacyModel->getOrder();


        $data = [
            'order' => $order
        ];
        
        

        $this->view('pharmacy/orders', $data);

       
    }

    public function history() {
        $data = [];
        
        $this->view('pharmacy/history', $data);
    }

    public function profile() {
        $data = [];
        
        $this->view('pharmacy/profile', $data);
    }

    public function logout() {
        unset($_SESSION['USER_DATA']);
        redirect('users/login');
     }

    public function new_order() {
    

        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'Mname' => trim($_POST['Mname']),
                'Bnum' => trim($_POST['Bnum']),
                'quantity' => trim($_POST['quantity']),
                'ddate' => trim($_POST['ddate']),
                'oedate' => trim($_POST['oedate']),
                'Mname_err' => '',
                'Bnum_err' => '',
                'quantity_err' => '',
                'ddate_err' => '',
                'oedate_err' => ''
            ];

            // Validate data
            if(empty($data['Mname'])) {
                $data['Mname_err'] = 'Please enter medicine name';
            }

            if(empty($data['Bnum'])) {
                $data['Bnum_err'] = 'Please enter batch number';
            }

            if(empty($data['quantity'])) {
                $data['quantity_err'] = 'Please enter quantity';
            }

            if(empty($data['ddate'])) {
                $data['ddate_err'] = 'Please enter delivery date';
            }

            if(empty($data['oedate'])) {
                $data['oedent_err'] = 'Please enter order entry date';
            }

            // Make sure no errors
            if(empty($data['Mname_err']) && empty($data['Bnum_err']) && empty($data['quantity_err']) && empty($data['ddate_err']) && empty($data['oedent_err'])) {
                // Validated

                // Check and set logged in user
                if(isset($_SESSION['user_id'])) {
                    $data['user_id'] = $_SESSION['user_id'];
                } else {
                    $data['user_id'] = 0;
                }

                // Register user from model function
                if($this->pharmacyModel->addOrder($data)) {
                    // Redirect to order
                    redirect('pharmacies/orders');
                } else {
                    die('Something went wrong');
                }

            } else {
                // Load view with errors
                $this->view('pharmacy/new_order', $data);
            }
    } else {
        // Init data
        $data = [
            'Mname' => '',
            'Bnum' => '',
            'quantity' => '',
            'ddate' => '',
            'oedate' => '',
            'Mname_err' => '',
            'Bnum_err' => '',
            'quantity_err' => '',
            'ddate_err' => '',
            'oedate_err' => ''
        ];

        // Load view
        $this->view('pharmacy/new_order', $data);
    }
}


public function deleteOrder() {
    if(isset($data['delete'])){
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get existing post from model
        $order = $this->pharmacyModel->getOrder();
        

        // Check for owner
        if($order->user_id != $_SESSION['user_id']) {
            redirect('pharmacies/orders');
        }

        if($this->pharmacyModel->deleteOrder()) {
            redirect('pharmacies/orders');
        } else {
            die('Something went wrong');
        }
    } else {
        redirect('pharmacies/orders');
    }
}
}

}
?>