<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Create extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->model('create_model');
        $this->call->library('form_validation'); // Load the form_validation library
    }

    public function read(){
        $this->create_model->read();
        $data['cret'] = $this->create_model->read();
        $this->call->view('users/display', $data);
    }

    public function create(){
        if($this->form_validation->submitted()) {
            $hpn_last_name = $this->io->post('hpn_last_name');
            $hpn_first_name = $this->io->post('hpn_first_name');
            $hpn_email = $this->io->post('hpn_email');
            $hpn_gender = $this->io->post('hpn_gender');
            $hpn_address = $this->io->post('hpn_address');

            $this->create_model->create($hpn_last_name, $hpn_first_name, $hpn_email, $hpn_gender, $hpn_address);
        }
        $this->call->view('users/insert');
    }

    public function update($id){
        if($this->form_validation->submitted()) {
            $hpn_last_name = $this->io->post('hpn_last_name');
            $hpn_first_name = $this->io->post('hpn_first_name');
            $hpn_email = $this->io->post('hpn_email');
            $hpn_gender = $this->io->post('hpn_gender');
            $hpn_address = $this->io->post('hpn_address');

            $this->create_model->update($hpn_last_name, $hpn_first_name, $hpn_email, $hpn_gender, $hpn_address, $id);
        }
        $data['users'] = $this->create_model->get_one($id);
        $this->call->view('users/update', $data);
    }

    public function delete($id){
        if($this->create_model->delete($id)){
           echo 'Done!';
           redirect('create/display');
        } else {
           echo 'Not Done.';
           redirect('create/display');
        }
    }
}

?>
