<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signinup extends MX_Controller {

	

	
	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		
	}
	public function orderisplaced()
    {
		
		if($this->session->userdata('id')=='')
		{redirect('');}
		$d['status']='ordered';
		$this->db->where('uid',$this->session->userdata('id'))->where('status','added');
        $this->db->update('temp_p',$d);
	    
		$this->load->view('orderisplaced.php');
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
	public function afterlogin()
	{  	if($this->session->userdata('id')=='')
		{redirect('');}
	     $data['main_body']='afterlogin.php';
		$this->load->view('template.php',$data);
	}
	public function addpizza()
	{   if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='addpizza.php';
		$this->load->view('template.php',$data);
	}
	public function addtoppings()
	{   if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='addtoppings.php';
		$this->load->view('template.php',$data);
	}
	public function addbread()
	{   if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='addbread.php';
		$this->load->view('template.php',$data);
	}
    

    	public function addcombo()
	{   if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='addcombo.php';
		$this->load->view('template.php',$data);
	}
	
	public function updatepizzaprice()
	{
		if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='updatepizzaprice.php';
	   	$this->load->view('template.php',$data);
	}
	public function updatetoppingsprice()
	{
	   	if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='updatetoppingsprice.php';
		$this->load->view('template.php',$data);
	}
	public function updatebreadprice()
	{
	   	if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='updatebreadprice.php';
		$this->load->view('template.php',$data);
	}
	public function updateextrasprice()
	{
	   	if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='updateextrasprice.php';
		$this->load->view('template.php',$data);
	}
	public function updatesauceprice()
	{
	   	if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='updatesauceprice.php';
		$this->load->view('template.php',$data);
	}
	public function addbranch()
	{
	   	if($this->session->userdata('id')=='')
		{redirect('');}
	     $data['main_body']='addbranch.php';
		$this->load->view('template.php',$data);
	}
	public function addplace()
	{
	    if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='addplace.php';
		$this->load->view('template.php',$data);
	}
	
	public function addextras()
	{
	    if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='addextras.php';
		$this->load->view('template.php',$data);
	}
	public function addsauce()
	{
	    if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='addsauce.php';
		$this->load->view('template.php',$data);
	}
	function deletepizza()
	{
        if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='deletepizza.php';
		$this->load->view('template.php',$data);
	}
	function deletetoppings()
	{
     	if($this->session->userdata('id')=='')
		{redirect('');}
	 $data['main_body']='deletetoppings.php';
	 $this->load->view('template.php',$data);
	}
	function deleteextras()
	{
        if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='deleteextras.php';
		$this->load->view('template.php',$data);
	}
	function deletebread()
	{
       	if($this->session->userdata('id')=='')
		{redirect('');}
	   $data['main_body']='deletebread.php';
	   $this->load->view('template.php',$data);
	}
	function deletesauce()
	{    
		if($this->session->userdata('id')=='')
		{redirect('');}
	     $data['main_body']='deletesauce.php';
        $this->load->view('template.php',$data);
	}
	function deletebranch()
	{   
	    if($this->session->userdata('id')=='')
		{redirect('');}
	    $data['main_body']='deletebranch.php';
        $this->load->view('template.php',$data);
	}
	public function deleteplace()
	{
       	if($this->session->userdata('id')=='')
		{redirect('');}
	   $data['main_body']='deleteplace.php';
	   $this->load->view('template.php',$data);
	}
	public function locator()
	{
		$data['main_body']='locator.php';
		$this->load->view('template.php',$data);
	}
	public function order_online()
	{
		if($this->session->userdata('id')=='')
		{redirect('');}
	   
		$this->load->view('order_online.php');
	}
	public function readymade()
	{
	    if($this->session->userdata('id')=='')
		{redirect('');}
		$data=$this->db->select('*')->from('pizzas')->where('status','added')->get()->result();
		$array['data']=$data;
		$this->load->view('readymade.php',$array);
	}
	public function ownpizza()
	{
	    if($this->session->userdata('id')=='')
		{redirect('');}
	$check=$this->db->select('id')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('type','bread')->where('status','added')->get()->result();
		if(Sizeof($check)==0){
		
		$data=$this->db->select('*')->from('breads')->where('status','added')->get()->result();
		$array['data']=$data;
		$this->load->view('ownpizza.php',$array);}
		else{
			$size=$this->db->select('id')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
		
	    $data['input']=$this->db->select('*')->from('toppings')->where('status','added')->get()->result();
		$this->load->view('own_toppings_display.php',$data);
		
		
		}
	}
	public function toppings_display()
	{   if($this->session->userdata('id')=='')
		{redirect('');}
	    $size=$this->db->select('id')->from('temp_p')->where('uid',$this->session->userdata('id'))->get()->result();
		if(sizeof($size)!=0){
	    $data['input']=$this->db->select('*')->from('toppings')->where('status','added')->get()->result();
		$this->load->view('toppings_display.php',$data);
		}
		else
		{
			redirect('readymade');
		}
	}
	public function own_toppings_display()
	{   if($this->session->userdata('id')=='')
		{redirect('');}
	    $size=$this->db->select('id')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
		if(sizeof($size)!=0){
	    $data['input']=$this->db->select('*')->from('toppings')->where('status','added')->get()->result();
		$this->load->view('own_toppings_display.php',$data);
		}
		else
		{
			redirect('ownpizza');
		}
	}
	public function about()
	{
			$data['main_body']='about.php';
		$this->load->view('template.php',$data);
	}
	public function sauce_display()
	{   if($this->session->userdata('id')=='')
		{redirect('');}
	    $size=$this->db->select('id')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
		if(sizeof($size)!=0){
	    $data['input']=$this->db->select('*')->from('sauce')->where('status','added')->get()->result();
		$this->load->view('sauce_display.php',$data);
		}
		else
		{
			redirect('ownpizza');
		}
	}
	public function pizza_application()
	{
		
		$array['data']=$this->db->select('*')->from('temp_p')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
		if(sizeof($array['data'])==0){$this->load->view('order_online.php');}
		else{
		$this->load->view('pizza_application.php',$array);}
	}
	public function own_pizza_application()
	{
		$array['data']=$this->db->select('*')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
		if(sizeof($array['data'])==0){$this->load->view('order_online.php');}
		else{
		
		$this->load->view('own_pizza_application.php',$array);}
	}
	public function images()
	{
		$data['main_body']='images.php';
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
	function do_addpizza()
	{   
	   	if($this->session->userdata('id')=='')
		{redirect('');}
	    $config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		$config['max_width']  = '10000000';
		$config['max_height']  = '10000000';
      
		$this->load->library('upload', $config);
        $this->load->library('image_lib');
		if ( ! $this->upload->do_upload())
		{
			$data['error'] = $this->upload->display_errors();
			
			print_r($data['error']);
			
			//$this->load->view('addpizza.php', $data);
		}
		else
		{  
		      $result = array('upload_data' => $this->upload->data());
              $data = $result['upload_data'];
			  $insert_data = array(
              'name' =>$this->input->post('pizza_name'),
              'path' => $data['file_name'],
			  'category'  =>$this->input->post('category'),
              'price'  =>$this->input->post('spizza_price'),
              'size'  =>"small",
			  'status' =>'added'
              );
        
	    $this->db->insert('pizzas', $insert_data);//load array to database
		
		
		       $insert_data = array(
              'name' =>$this->input->post('pizza_name'),
              'path' => $data['file_name'],
			  'category'  =>$this->input->post('category'),
              'price'  =>$this->input->post('mpizza_price'),
              'size'  =>"medium",
			  'status' =>'added'
              );
        
	    $this->db->insert('pizzas', $insert_data);//load array to database
			
			    $insert_data = array(
              'name' =>$this->input->post('pizza_name'),
              'path' => $data['file_name'],
			  'category'  =>$this->input->post('category'),
              'price'  =>$this->input->post('lpizza_price'),
              'size'  =>"large",
			  'status' =>'added'
              );
        
	    $this->db->insert('pizzas', $insert_data);//load array to database
			
		
			print_r("success!!");
			//$this->load->view('Success.php');//, $data);
	
		
	}
	}


function do_addtoppings()
	{   
	   	if($this->session->userdata('id')=='')
		{redirect('');}
	    $config['upload_path'] = 'assets/uploadtoppings/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		$config['max_width']  = '10000000';
		$config['max_height']  = '10000000';
      
		$this->load->library('upload', $config);
        $this->load->library('image_lib');
		if ( ! $this->upload->do_upload())
		{
			$data['error'] = $this->upload->display_errors();
			
			print_r($data['error']);
			
			//$this->load->view('addpizza.php', $data);
		}
		else
		{  
		      $result = array('upload_data' => $this->upload->data());
              $data = $result['upload_data'];
			  $insert_data = array(
              'name' =>$this->input->post('topping_name'),
              'path' => $data['file_name'],
			  'category'  =>$this->input->post('category'),
              'price'  =>$this->input->post('topping_price'),
              'status' =>'added'
			 );
        
	    $this->db->insert('toppings', $insert_data);//load array to database
			print_r("success!!");
			//$this->load->view('Success.php');//, $data);
	
		
	}
	}
	

	
	
	
	function do_addbread()
	{   
	    if($this->session->userdata('id')=='')
		{redirect('');}
	    $config['upload_path'] = 'assets/uploadbread/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		$config['max_width']  = '10000000';
		$config['max_height']  = '10000000';
      
		$this->load->library('upload', $config);
        $this->load->library('image_lib');
		if ( ! $this->upload->do_upload())
		{
			$data['error'] = $this->upload->display_errors();
			
			print_r($data['error']);
			
			//$this->load->view('addpizza.php', $data);
		}
		else
		{  
		      $result = array('upload_data' => $this->upload->data());
              $data = $result['upload_data'];
			  $insert_data = array(
              'name' =>$this->input->post('name'),
              'path' => $data['file_name'],
              'price'  =>$this->input->post('sprice'),
              'size' =>"small",
			  'status' =>'added'
			  
              );
        
	    $this->db->insert('breads', $insert_data);//load array to database
			print_r("success!!");
			
			  $insert_data = array(
              'name' =>$this->input->post('name'),
              'path' => $data['file_name'],
              'price'  =>$this->input->post('mprice'),
              'size' =>"medium",
			  'status' =>'added'
			  
              );
        
	    $this->db->insert('breads', $insert_data);//load array to database
			
			  $insert_data = array(
              'name' =>$this->input->post('name'),
              'path' => $data['file_name'],
              'price'  =>$this->input->post('lprice'),
              'size' =>"large",
			  'status' =>'added'
			  
              );
        
	    $this->db->insert('breads', $insert_data);//load array to database
			
			//$this->load->view('Success.php');//, $data);
	
		
	}
	}
	


		function do_addextra()
	{   
	    if($this->session->userdata('id')=='')
		{redirect('');}
	    $config['upload_path'] = 'assets/uploadextras/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		$config['max_width']  = '10000000';
		$config['max_height']  = '10000000';
      
		$this->load->library('upload', $config);
        $this->load->library('image_lib');
		if ( ! $this->upload->do_upload())
		{
			$data['error'] = $this->upload->display_errors();
			
			print_r($data['error']);
			
			//$this->load->view('addpizza.php', $data);
		}
		else
		{  
		      $result = array('upload_data' => $this->upload->data());
              $data = $result['upload_data'];
			  $insert_data = array(
              'name' =>$this->input->post('name'),
              'path' => $data['file_name'],
              'price'  =>$this->input->post('price'),
			  'status' =>'added'
              );
        
	    $this->db->insert('extras', $insert_data);//load array to database
			print_r("success!!");
			//$this->load->view('Success.php');//, $data);
	
		
	}
	}
	
	
	function do_addsauce()
	{   
	    if($this->session->userdata('id')=='')
		{redirect('');}
		$config['upload_path'] = 'assets/uploadsauce/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		$config['max_width']  = '10000000';
		$config['max_height']  = '10000000';
      
		$this->load->library('upload', $config);
        $this->load->library('image_lib');
		if ( ! $this->upload->do_upload())
		{
			$data['error'] = $this->upload->display_errors();
			
			print_r($data['error']);
			
			
		}
		else
		{  
		      $result = array('upload_data' => $this->upload->data());
              $data = $result['upload_data'];
			  $insert_data = array(
              'name' =>$this->input->post('name'),
              'path' => $data['file_name'],
              'price'  =>$this->input->post('price'),
			  'status' =>'added'
              );
        
	    $this->db->insert('sauce', $insert_data);//load array to database
			print_r("success!!");
			//$this->load->view('Success.php');//, $data);
	
		
	}
	}
	
	
	 function do_addcombo()
	{
		$input=$this->input->post();
	
	    $bid=$this->db->select('id')->from('breads')->where('name',$input['bread_name'])->get()->result();
		$tid=$this->db->select('id')->from('toppings')->where('name',$input['toppings_name'])->get()->result();
	    $sid=$this->db->select('id')->from('sauce')->where('name',$input['sauce_name'])->get()->result();
		$bid=$bid[0];
		$bid=(array)$bid;
		$bid=$bid['id'];
		$tid=$tid[0];
		$tid=(array)$tid;
		$tid=$tid['id'];
		$sid=$sid[0];
		$sid=(array)$sid;
		$sid=$sid['id'];
		
		  if($this->session->userdata('id')=='')
		{redirect('');}
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000000';
		$config['max_width']  = '10000000';
		$config['max_height']  = '10000000';
      
		$this->load->library('upload', $config);
        $this->load->library('image_lib');
		if ( ! $this->upload->do_upload())
		{
			$data['error'] = $this->upload->display_errors();
			
			print_r($data['error']);
			
			//$this->load->view('addpizza.php', $data);
		}
		else
		{  
		      $result = array('upload_data' => $this->upload->data());
              $data = $result['upload_data'];
			  $input=$this->input->post();
	    	  $insert_data = array(
                    
              'path' => $data['file_name'],
              'bid' => $bid,
			  'tid' => $tid,
			  'sid' => $sid,
			  'status' =>'added'
              );
        
	    $this->db->insert('combo', $insert_data);//load array to database
			print_r("success!!");
			//$this->load->view('Success.php');, $data);
		}
		
	}
	
	public function updatepizzaprice_submit()
	{
	   	if($this->session->userdata('id')=='')
		{redirect('');}
		$data=$this->input->post();
	    $size=$this->db->select('name')->from('pizzas')->where('name',$data['pizzaname'])->where('size',$data['size'])->get()->result();
		if(Sizeof($size)!=0)
		{
			$d['price']=$data['price'];
		    $this->db->where('name', $data['pizzaname'])->where('size',$data['size']);
            $this->db->update('pizzas',$d);
		    print_r("success!!");
			//$this->load->view('Success.php');//, $data);
	    }
		else
		{
			print_r("This topping already exists.");
			$this->load->view('updatepizzaprice.php',$data);
		}
	}
	public function updatetoppingsprice_submit()
	{
	   	
		if($this->session->userdata('id')=='')
		{redirect('');}
		$data=$this->input->post();
	    $size=$this->db->select('name')->from('toppings')->where('name',$data['toppingsname'])->get()->result();
		if(Sizeof($size)!=0)
		{
			$d['price']=$data['price'];
		    $this->db->where('name', $data['toppingsname']);
            $this->db->update('toppings',$d);
		    print_r("success!!");
			//$this->load->view('Success.php');//, $data);
	    }
		else
		{
			print_r("This topping already exists.");
			$this->load->view('updatetoppingsprice.php',$data);
		}
	}
	
	
	public function updatebreadprice_submit()
	{
	   	
		if($this->session->userdata('id')=='')
		{redirect('');}
		$data=$this->input->post();
	    $size=$this->db->select('name')->from('breads')->where('name',$data['name'])->where('size',$data['size'])->get()->result();
		if(Sizeof($size)!=0)
		{
			$d['price']=$data['price'];
		    $this->db->where('name', $data['name'])->where('size',$data['size']);
            $this->db->update('breads',$d);
		    print_r("success!!");
			//$this->load->view('Success.php');//, $data);
	    }
		else
		{
			print_r("This topping already exists.");
			$this->load->view('updatebreadsprice.php',$data);
		}
	}
	
	public function updateextrasprice_submit()
	{
	   	
		if($this->session->userdata('id')=='')
		{redirect('');}
		$data=$this->input->post();
	    $size=$this->db->select('name')->from('extras')->where('name',$data['name'])->get()->result();
		if(Sizeof($size)!=0)
		{
			$d['price']=$data['price'];
		    $this->db->where('name', $data['name']);
            $this->db->update('extras',$d);
		    print_r("success!!");
			//$this->load->view('Success.php');//, $data);
	    }
		else
		{
			print_r("This topping already exists.");
			$this->load->view('updatetoppingsprice.php',$data);
		}
	}
	
	public function updatesauceprice_submit()
	{
	   	if($this->session->userdata('id')=='')
		{redirect('');}
		$data=$this->input->post();
	    $size=$this->db->select('name')->from('sauce')->where('name',$data['name'])->get()->result();
		if(Sizeof($size)!=0)
		{
			$d['price']=$data['price'];
		    $this->db->where('name', $data['name']);
            $this->db->update('sauce',$d);
		    print_r("success!!");
			//$this->load->view('Success.php');//, $data);
	    }
		else
		{
			print_r("This topping already exists.");
			$this->load->view('updatetoppingsprice.php',$data);
		}
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
	public function place_submit()
	{
		if($this->session->userdata('id')=='')
		{redirect('');}
		$input=$this->input->post();
		$input['status']='added';
	   $this->db->insert('near_by_places',$input);print_r("success!!!");
	}
	
	public function deletepizza_submit()
	{
		
      		if($this->session->userdata('id')=='')
		{redirect('');}
 		$data=$this->input->post();
		 $size=$this->db->select('id')->from('pizzas')->where('name',$data['name'])->where('size',$data['size'])->get()->result();
		 
         if(Sizeof($size)!=0)
		 {   
	         $size=$size[0];
			 $size=(array)$size;
			 $size=$size['id'];
			 $d['status']='deleted';
			 $this->db->where('id',$size);
             $this->db->update('pizzas',$d);
			 $sizer=$this->db->select('id')->from('pizzas')->where('name',$data['name'])->where('status','added')->get()->result();
			 if(Sizeof($sizer)==0)
			 {$this->db->delete('review',array('pizzaname' => $data['name'] ));}
			 print_r('success');
		 }
         else{print_r("no such pizza exists");}		 
	}
	
	public function deletetoppings_submit()
	{		if($this->session->userdata('id')=='')
		{redirect('');}
		 $data=$this->input->post();
		 $size=$this->db->select('id')->from('toppings')->where('name',$data['name'])->where('category',$data['category'])->get()->result();
         if(Sizeof($size)!=0)
		 {   
	         $size=$size[0];
			 $size=(array)$size;
			 $size=$size['id'];
			 $d['status']='deleted';
			 $this->db->where('id',$size);
             $this->db->update('toppings',$d);
			// $this->db->delete('toppings',array('id' => $size ));
			 print_r('success');
		 }
         else{print_r("no such topping exists");}		 
	}
	

		public function deleteextras_submit()
	{		if($this->session->userdata('id')=='')
		{redirect('');}
		 $data=$this->input->post();
		 $size=$this->db->select('id')->from('extras')->where('name',$data['name'])->get()->result();
         if(Sizeof($size)!=0)
		 {   
	         $size=$size[0];
			 $size=(array)$size;
			 $size=$size['id'];
			 $d['status']='deleted';
			 $this->db->where('id',$size);
             $this->db->update('extras',$d);
			 //$this->db->delete('extras',array('id' => $size ));
			 print_r('success');
		 }
         else{print_r("no such extra exists");}		 
	}

    public function deletebread_submit()
	{		if($this->session->userdata('id')=='')
		{redirect('');}
		 $data=$this->input->post();
		 $size=$this->db->select('id')->from('breads')->where('name',$data['name'])->where('size',$data['size'])->get()->result();
         if(Sizeof($size)!=0)
		 {   
	         $size=$size[0];
			 $size=(array)$size;
			 $size=$size['id'];
			 $d['status']='deleted';
			 $this->db->where('id',$size);
             $this->db->update('breads',$d);
			// $this->db->delete('breads',array('id' => $size ));
			 print_r('success');
		 }
         else{print_r("no such bread exists");}		 
	}
	
	public function deletesauce_submit()
	{		if($this->session->userdata('id')=='')
		{redirect('');}
		 $data=$this->input->post();
		 $size=$this->db->select('id')->from('sauce')->where('name',$data['name'])->get()->result();
         if(Sizeof($size)!=0)
		 {   
	         $size=$size[0];
			 $size=(array)$size;
			 $size=$size['id'];
			 $d['status']='deleted';
			 $this->db->where('id',$size);
             $this->db->update('sauce',$d);
			// $this->db->delete('sauce',array('id' => $size ));
			 print_r('success');
		 }
         else{print_r("no such sauce exists");}		 
	}
	public function deletebranch_submit()
	{		if($this->session->userdata('id')=='')
		{redirect('');}
		 $data=$this->input->post();
		 $size=$this->db->select('id')->from('branches')->where('branch_name',$data['branch_name'])->where('state',$data['state'])->get()->result();
         if(Sizeof($size)!=0)
		 {   
	         $size=$size[0];
			 $size=(array)$size;
			 $size=$size['id'];
			 $d['status']='deleted';
			 $this->db->where('id',$size);
             $this->db->update('branches',$d);
			 //$this->db->delete('branches',array('id' => $size ));
			 print_r('success');
		 }
         else{print_r("no such branch exists");}		 
	}
	
	public function deleteplace_submit()
	{		if($this->session->userdata('id')=='')
		{redirect('');}
		 $data=$this->input->post();
		 $size=$this->db->select('id')->from('near_by_places')->where('place_name',$data['place_name'])->get()->result();
         if(Sizeof($size)!=0)
		 {   
	         $size=$size[0];
			 $size=(array)$size;
			 $size=$size['id'];
			 $d['status']='deleted';
			 $this->db->where('id',$size);
             $this->db->update('near_by_places',$d);
			 //$this->db->delete('near_by_places',array('id' => $size ));
			 print_r('success');
		 }
         else{print_r("no such branch exists");}		 
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
	
	public function pizza_click($name,$price,$category,$size)
	{   
			if($this->session->userdata('id')=='')
		{redirect('');}
	    $input['uid']=$this->session->userdata('id');
		$input['name']=$name;
		$input['price']=$price;
		$input['category']=$category;
		$input['size']=$size;
		$size=$this->db->select('id')->from('temp_p')->where('uid',$this->session->userdata('id'))->where('name',$name)->where('size',$size)->get()->result();
		
			$input['status']='added';
	    $this->db->insert('temp_p',$input);
		$data=$this->db->select('*')->from('pizzas')->where('status','added')->get()->result();
		$array['data']=$data;
		$this->load->view('readymade.php',$array);
    }
	
	public function delete_p($id)
	{		if($this->session->userdata('id')=='')
		{redirect('');}
	    
		$this->db->delete('temp_p',array('id' => $id,'uid' => $this->session->userdata('id') ));
	    $data=$this->db->select('*')->from('pizzas')->where('status','added')->get()->result();
		$array['data']=$data;
		$this->load->view('readymade.php',$array);
	}
	
	public function delete_t($id)
	{		if($this->session->userdata('id')=='')
		{redirect('');}
	    
		$this->db->delete('temp_p',array('id' => $id,'uid' => $this->session->userdata('id') ));
	     $size=$this->db->select('id')->from('temp_p')->where('uid',$this->session->userdata('id'))->get()->result();
		if(sizeof($size)!=0){
			
		$data=$this->db->select('*')->from('toppings')->where('status','added')->get()->result();
		$array['input']=$data;
		$this->load->view('toppings_display.php',$array);}
		else{redirect('readymade');}
	}
	
	
	public function delete_b($id,$type)
	{		if($this->session->userdata('id')=='')
		{redirect('');}
	     $size=$this->db->select('id')->from('temp_o')->where('uid',$this->session->userdata('id'))->get()->result();

		$this->db->delete('temp_o',array('id' => $id,'uid' => $this->session->userdata('id'),'type' => $type));
	    // $size=$this->db->select('id')->from('temp_p')->where('uid',$this->session->userdata('id'))->get()->result();
           		if(sizeof($size)!=0){
			$data=$this->db->select('*')->from('breads')->where('status','added')->get()->result();
		$array['data']=$data;
		$this->load->view('ownpizza.php',$array);
		
		}else{ 
	    if($type=='bread'){
		$data=$this->db->select('*')->from('breads')->where('status','added')->get()->result();
		$array['data']=$data;
		
		$this->load->view('ownpizza.php',$array);
		}
		if($type=='toppings')
		{   $data=$this->db->select('*')->from('breads')->where('status','added')->get()->result();
		    $array['data']=$data;
			$this->load->view('ownpizza.php',$array);
		}
		if($type=='sauce')
		{
            $data=$this->db->select('*')->from('toppings')->where('status','added')->get()->result();
		    $array['input']=$data;
			$this->load->view('own_toppings_display.php',$array);
			
		}}
	}
	public function delete_s($id)
	{		if($this->session->userdata('id')=='')
		{redirect('');}
	    
		$this->db->delete('temp_o',array('id' => $id,'uid' => $this->session->userdata('id') ));
	     $size=$this->db->select('id')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->where('type','bread')->get()->result();
         if(Sizeof($size)==0){redirect('ownpizza');}
			$data=$this->db->select('*')->from('sauce')->where('status','added')->get()->result();
		$array['input']=$data;
		$this->load->view('sauce_display.php',$array);
		
		
	}
	public function own_pay_submit($bid,$tid,$sid)
	{		if($this->session->userdata('id')=='')
		{redirect('');}
	    $d['status']='semiordered';
		$this->db->where('id',$this->session->userdata('id'));
        $this->db->update('temp_o',$d);
		  	  $insert_data = array(
                    
              'uid' => $this->session->userdata('id'),
              'bid' => $bid,
			  'tid' => $tid,
			  'sid' => $sid,
			  'status' =>'semiordered'
              );
        
	    $this->db->insert('combo', $insert_data);//load array to database
		
		$data=$this->db->select('*')->from('breads')->where('status','added')->get()->result();
		$array['data']=$data;
		$this->load->view('ownpizza.php',$array);
	//	print_r("<head>  </head><body bgcolor='whitesmoke'><h1>Thank You</h1></body>");
	}
	public function toppings_click($name,$price,$category)
	{   
			if($this->session->userdata('id')=='')
		{redirect('');}
	    $input['uid']=$this->session->userdata('id');
		$input['name']=$name;
		$input['price']=$price;
		$input['category']=$category;
		
		$size=$this->db->select('id')->from('temp_p')->where('uid',$this->session->userdata('id'))->where('name',$name)->get()->result();
		
		$input['status']='added';	
	    $this->db->insert('temp_p',$input);
		$data=$this->db->select('*')->from('toppings')->where('status','added')->get()->result();
		$array['input']=$data;
		$this->load->view('toppings_display.php',$array);
    }
	
	public function bread_click($name,$price)
	{
		$d=$this->db->select('id')->from('breads')->where('name',$name)->where('price',$price)->get()->result();
		
		$d=$d[0];
		$d=(array)$d;
		$d=$d['id'];
		//$check=$this->db->select('id')->from('temp_o')->where('type','bread')->where('iid',$d)->where('status','added')->get()->result();
		//if(sizeof($check)==0){
		$input['iid']=$d;
		$input['uid']=$this->session->userdata('id');
		$input['type']='bread';
		$input['status']='added';
		$this->db->insert('temp_o',$input);
		//}
		$data=$this->db->select('*')->from('toppings')->where('status','added')->get()->result();
		$array['input']=$data;
	    $this->load->view('own_toppings_display.php',$array);	
	}
	
	
	public function own_toppings_click($name,$price,$category)
	{   
			if($this->session->userdata('id')=='')
		{redirect('');}
	    $input['uid']=$this->session->userdata('id');
		$iid=$this->db->select('id')->from('toppings')->where('name',$name)->where('price',$price)->where('category',$category)->get()->result();
		$iid=$iid[0];
		$iid=(array)$iid;
		$iid=$iid['id'];
		$input['iid']=$iid;
		$input['type']='toppings';
		
		$input['status']='added';	
	    $this->db->insert('temp_o',$input);
		$data=$this->db->select('*')->from('toppings')->where('status','added')->get()->result();
		$array['input']=$data;
		$this->load->view('own_toppings_display.php',$array);
    }
	
	public function sauce_click($name,$price)
	{   
			if($this->session->userdata('id')=='')
		{redirect('');}
	    $input['uid']=$this->session->userdata('id');
		$iid=$this->db->select('id')->from('sauce')->where('name',$name)->where('price',$price)->get()->result();
		$iid=$iid[0];
		$iid=(array)$iid;
		$iid=$iid['id'];
		$input['iid']=$iid;
		$input['type']='sauce';
		
		$input['status']='added';	
	    $this->db->insert('temp_o',$input);
		$data=$this->db->select('*')->from('sauce')->where('status','added')->get()->result();
		$array['input']=$data;
		$this->load->view('sauce_display.php',$array);
    }
	
	public function addreview()
	{
			if($this->session->userdata('id')=='')
		    {redirect('');}
		    $name=$this->db->select('DISTINCT `name`', FALSE)->from('pizzas')->where('status','added')->get()->result();
		    $data['name']=$name;
	        $this->load->view('addreview.php',$data);
	}
	public function deletereview()
	{
			if($this->session->userdata('id')=='')
		    {redirect('');}
		    $name=$this->db->select('pizzaname')->from('review')->get()->result();
		    $data['name']=$name;
	        $this->load->view('deletereview.php',$data);
	}
	
	public function review_submit()
	{
			if($this->session->userdata('id')=='')
		    {redirect('');}
	
	    	 $data=$this->input->post();
		     
			 $array['pizzaname']=$data['pizza_name'];
			 $array['review']=$data['review'];
			 $review_id=$this->db->select('id')->from('review')->where('pizzaname',$data['pizza_name'])->get()->result();
			 if(sizeof($review_id)==0){
			 $this->db->insert('review',$array);
			 }
			 else
			 {
		    $this->db->where('pizzaname', $data['pizza_name']);
            $this->db->update('review',$array);
			 }
			 print_r("successfully added review");
	}
	
		public function delete_review_submit()
	{
			if($this->session->userdata('id')=='')
		    {redirect('');}
	
	    	 $data=$this->input->post();
			 
			 $array['pizzaname']=$data['pizza_name'];
			 $this->db->where('pizzaname',$array['pizzaname']);
			 $this->db->delete('review',$array);
			 print_r("done");
	}
	public function view_review()
	{
		$review=$this->db->select('review')->from('review')->get()->result();
		$pizzaname=$this->db->select('pizzaname')->from('review')->get()->result();
		$data['review']=$review;
		$data['pizzaname']=$pizzaname;
		$this->load->view('view_review.php',$data);
	}
	public function show_orders()
	{
		if($this->session->userdata('id')=='')
		{redirect('');}
		
		$this->load->view('showorders.php');

	}
	
	public function proceedt()
	{
		if($this->session->userdata('id')=='')
		{redirect('');}
		$d['status']='ordered';
		$this->db->where('uid',$this->session->userdata('id'))->where('status','added');
        $this->db->update('temp_p',$d);
	    $this->load->view('orderisplaced.php');		
	}
	
	public function pay_submit()
	{		if($this->session->userdata('id')=='')
		{redirect('');}
	    $d['status']='ordered';
		$this->db->where('uid',$this->session->userdata('id'))->where('status','added');
        $this->db->update('temp_o',$d);
		$this->load->view('orderisplaced.php');
	    
	}
	public function ownorders()
	{
        if($this->session->userdata('id')=='')
		{redirect('');}
	    $data=$this->db->select('*')->from('temp_o')->where('status','ordered')->get()->result();
		$input['data']=$data;
		$this->load->view('ownorders.php',$input);
	}
	
	public function menuorders()
	{
        if($this->session->userdata('id')=='')
		{redirect('');}
	    $data=$this->db->select('*')->from('temp_p')->where('status','ordered')->get()->result();
		$input['data']=$data;
		$this->load->view('menuorders.php',$input);
	}
	public function owndelivered($id)
	{
		    $uid=$this->db->select('uid')->from('temp_o')->where('id',$id)->get()->result();
			$uid=$uid[0];
			$uid=(array)$uid;
			$uid=$uid['uid'];
			$nextid=$this->db->select('id')->from('temp_o')->where('type','bread')->where('status','ordered')->where('uid',$uid)->where('id >',$id)->get()->result();
			if(sizeof($nextid)!=0){
			$nextid=$nextid[0];
			$nextid=(array)$nextid;
			$nextid=$nextid['id'];
			//print_r($nextid);
			$allid=$this->db->select('id')->from('temp_o')->where('id >=',$id)->where('uid',$uid)->where('id <',$nextid)->get()->result();
			//print_r($allid);
			foreach($allid as $key => $value)
			{
				$value=(array)$value;
				$value=$value['id'];
				
	    $d['status']='delivered';
		$this->db->where('uid',$uid)->where('status','ordered')->where('id',$value);
        $this->db->update('temp_o',$d);
			 	
			}
			 $data=$this->db->select('*')->from('temp_o')->where('status','ordered')->get()->result();
	     	 $input['data']=$data;
		     $this->load->view('ownorders.php',$input);
			}
			else
			{
			 	
	    $d['status']='delivered';
		$this->db->where('uid',$uid)->where('status','ordered')->where('id >=',$id);
        $this->db->update('temp_o',$d);
			 $data=$this->db->select('*')->from('temp_o')->where('status','ordered')->get()->result();
	     	 $input['data']=$data;
		     $this->load->view('ownorders.php',$input);
			 			
			}
	}
	public function menudelivered($id)
	{
		    $uid=$this->db->select('uid')->from('temp_p')->where('id',$id)->get()->result();
			$uid=$uid[0];
			$uid=(array)$uid;
			$uid=$uid['uid'];
			$nextid=$this->db->select('id')->from('temp_p')->where('size !=','')->where('status','ordered')->where('uid',$uid)->where('id >',$id)->get()->result();
			
			if(sizeof($nextid)!=0){
			$nextid=$nextid[0];
			$nextid=(array)$nextid;
			$nextid=$nextid['id'];
			//print_r($nextid);
			$allid=$this->db->select('id')->from('temp_p')->where('id >=',$id)->where('uid',$uid)->where('id <',$nextid)->get()->result();
			//print_r($allid);
			foreach($allid as $key => $value)
			{
				$value=(array)$value;
				$value=$value['id'];
				
	    $d['status']='delivered';
		$this->db->where('uid',$uid)->where('status','ordered')->where('id',$value);
        $this->db->update('temp_p',$d);
			 	
			}
			 $data=$this->db->select('*')->from('temp_p')->where('status','ordered')->get()->result();
	     	 $input['data']=$data;
		     $this->load->view('menuorders.php',$input);
			}
			else
			{
			 	
	    $d['status']='delivered';
		$this->db->where('uid',$uid)->where('status','ordered')->where('id >=',$id);
        $this->db->update('temp_p',$d);
			 $data=$this->db->select('*')->from('temp_p')->where('status','ordered')->get()->result();
	     	 $input['data']=$data;
		     $this->load->view('menuorders.php',$input);
			 			
			}
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