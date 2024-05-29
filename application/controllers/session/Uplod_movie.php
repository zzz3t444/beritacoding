<?php
 
class Uplod_movie extends CI_Controller{
    public function index()
    {
        $data['movie'] = $this->Uplod_model->Uplod_view()->result();
        $this->load->view('session/Uplod_view', $data);
        
    }
}