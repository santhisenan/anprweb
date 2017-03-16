<?php 
class LoginController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->clear_cache();		
		$this->load->library('session');
		$this->load->model('loginModel');
		$this->load->helper('form');

	}
	public function index(){
		$this->load->view('loginView');
	}

	public function clear_cache(){
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform,max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

	public function loginValidate(){
		//validation
		
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('loginSuccess');
			}
			else{
			$this->load->view('loginErrorView');
		    }
		} 
		else {
			$data = array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				);
			// echo $data['password'];
			//$result = $this->loginModel->loginAuth($data);
			if($data['username'] =="12345" && $data['password'] == "password"){
			$session_data = array(
				'username'=>$data['username'],
				'logged_in'=>TRUE );
			$this->session->set_userdata($session_data);
			//$name = $session_data['username'];
			//$data['row'] = $this->loginModel->getTeam($name);
			//$this->load->view('templates/headerTemplate.php');
			$this->load->view('loginSuccess');
			//$this->load->view('templates/footerTemplate.php');
		}
						else{
			$this->load->view('loginErrorView');

			}
		}

	}

	public function displayAll(){
		$data['items'] = $this->loginModel->showAll();
		$this->load->view('dbView',$data);
	}

	public function logout(){
		$sess_array = array('username' =>'','logged_in'=>FALSE);
		$this->session->unset_userdata('logged_in', $sess_array);
		$this->load->view('loggedOut');
	}


}
 ?>
