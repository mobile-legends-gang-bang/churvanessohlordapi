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
        $data['username'] = $this->post('username');
        $data['password'] = $this->post('password');
        $data['status'] = ''; // true or fasle
        $data['message'] = 'message';
        $this->response($data, $this->badRequestStatus);
    }
    public function sample_get() {
        $data['status'] = $this->get('sample1');
        $data['message'] = $this->get('sample2');
        $this->response($data, $this->badRequestStatus);
    }
}