<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signinup extends MX_Controller {


	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

	}

	public function login_view()
	{

	    $this->load->view('login_view.php');

	}
	public function afteradminlogin()
	{
		if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='afteradminlogin.php';
		$this->load->view('template.php',$data);
	}
	public function locator()
	{
		$data['main_body']='locator.php';
		$this->load->view('template.php',$data);
	}

	public function about()
	{
			$data['main_body']='about.php';
		$this->load->view('template.php',$data);
	}



	public function signup_submit(){

		$input=$this->input->post();
		if($input==''){redirect('');}
		$input['password']=sha1($input['password']);
		 $input['confirm_password']=sha1($input['confirm_password']);
		 $x=$input['password'];
		 $y=$input['confirm_password'];
		 $size1= $this->db->select('id')->from('user')->where('emailid',$input['emailid'])->get()->result();
		 $size2= $this->db->select('id')->from('user')->where('username',$input['username'])->get()->result();
         if($x!=$y ){
		  $data['msg']="These passwords don't match. Try again.";
          $this->load->view('login_view.php',$data);

	        }
	    else{
		 if(Sizeof($size1)==0 && Sizeof($size2)==0 )
			 {
                if($input['emailid']!='' || $input['username']!=''){
			         $this->db->insert('user',$input);
				//	$this->db->insert('admin',$input);
					$data['msg']="Register success";
					 $this->load->view('login_view.php',$data);

					 }
				else{ $data['msg']="none";$this->load->view('login_view.php',$data);}
			 }
			 else
			{

               $data['msg']="none";
			   if(Sizeof($size1)!=0){
			   $data['msg']="emailid already exits.Try again.";
			   			   }
		       if(Sizeof($size2)!=0){
			   $data['msg']="username already exist.Try again.";

			   }
			    $this->load->view('login_view.php',$data);
			}
	     }
		//$this->load->view('signinup.php');
	}
	public function signin_submit(){
		$data=$this->input->post();
	   $where= array('username'=>$data['username'],'password'=>sha1($data['password']));
			$size= $this->db->select('id,username')->from('user')->where($where)->get()->result();

			if(Sizeof($size)==0)
			 {
	              $data['mess']="Invalid username or password.Try again.";
                  //$data['main_body'] = 'login_view.php';

                  $this->load->view('login_view.php',$data);
			 }
			else
			{
			    $result_array = (array)$size[0];

				$id = $result_array['id'];
				$username = $result_array['username'];
				$sizea=$this->db->select('id')->from('admin')->where('username',$username)->get()->result();
				if(Sizeof($sizea)=='0'){
				$newdata = array(
                         'id'  => $id,
                         'username' => $username,
                         'logged_in' => TRUE,
						 'admin'=>false,
				               );
				}
				else{
				$newdata = array(
                         'id'  => $id,
                         'username' => $username,
                         'logged_in' => TRUE,
						 'admin'=>TRUE,
				               );
				}
				$this->session->set_userdata($newdata);
			    if($this->session->userdata('admin')==TRUE){
				redirect('afteradminlogin');}
				else{

					redirect('order_online');}


			}
	}
	public function logout()
	{
		 $user_data = $this->session->all_userdata();
           foreach ($user_data as $key => $value) {
                  $this->session->unset_userdata($key);

                                                 }
			$this->session->sess_destroy();

			redirect('','refresh');
	}


	public function branch_submit()
	{   if($this->session->userdata('id')=='')
		{redirect('');}
		$input=$this->input->post();
		$input['status']='added';
		$size=$this->db->select('id')->from('branches')->where('address',$input['address'])->get()->result();
		if(Sizeof($size)==0)
		{
			$this->db->insert('branches',$input);
			print_r("success!!");
			//$this->load->view('Success.php');//, $data);

		}
		else
		{
			$data['msg']="branch already exists";
			$this->load->view('addbranch.php',$data);
		}
	}



	public function locator_submit()
	{
		$data=$this->input->post();
		$where=array('city'=>$data['city']);//'state'=>$data['state'],
		$size=$this->db->select('id')->from('branches')->where($where)->get()->result();

    	  if(Sizeof($size)!=0)
		{
			$address=$this->db->select('address')->from('branches')->where('city',$data['city'])->get()->result();
			$address=$address[0];
			$address=(array)$address;
			$address=$address['address'];
			$emailid=$this->db->select('emailid')->from('branches')->where('city',$data['city'])->get()->result();
		    $emailid=$emailid[0];
			$emailid=(array)$emailid;
			$emailid=$emailid['emailid'];
			$phone=$this->db->select('contact')->from('branches')->where('city',$data['city'])->get()->result();
			    $phone=$phone[0];
			$phone=(array)$phone;
			$phone=$phone['contact'];
            //->where('state',$data['state'])
            $data['address']=$address;
            $data['emailid']=$emailid;
            $data['phone']=$phone;
			$inform['msg']=$data;
			$this->load->view('message.php',$inform);
		}
		else{$inform['msg']='Sorry!!!No such branch exists.';$this->load->view('message.php',$inform);}
	}



	public function changeloc()
	{

	    $this->load->view('changelocation.php');
	}


	public function changeloc_submit()
	{
		if($this->session->userdata('id')=='')
		{redirect('');}
	    $input=$this->input->post();

		$d['address']=$input['address'];
		$d['city']=$input['city'];
		$d['phonenumber']=$input['contact'];
	    $this->db->where('id',$this->session->userdata('id'));
        $this->db->update('user',$d);
		print_r("success");

	}

}

