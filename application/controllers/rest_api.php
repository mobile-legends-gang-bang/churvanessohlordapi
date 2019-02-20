<?php defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
class Rest_api extends REST_Controller {
    // httpstatuses
    private $badRequestStatus = REST_Controller::HTTP_BAD_REQUEST;
    private $okStatus = REST_Controller::HTTP_OK;
    private $notFoundStatus = REST_Controller::HTTP_NOT_FOUND;
    private $createStatus = REST_Controller::HTTP_CREATED;
    private $noContentStatus = REST_Controller::HTTP_NO_CONTENT;
    
    public function login_post() {
        // for login codes
    }
    public function events_get() {
        $data['teacher_id'] = $this->get('teacher_id');
        $row = $this->db->query("select fname, lname from public.register WHERE teacher_id = ?", $data['teacher_id'])->row();

        $data['teacher_name'] = $row->lname.", ".$row->lname;
        
        $data['records'] = $this->db->query("select * from public.events where teacher_id = ?",$data['teacher_id'])->result(); 
        $this->response($data, $this->badRequestStatus);
    }

    public function edit_events_put() { // or post
        // edit the events
    }

    public function logout_post() {
        // logout
    }
}