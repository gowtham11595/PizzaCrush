//Author: Gowtham Kesa
<?php
function sum($a,$b){
  return $a+$b;
}

function multiply($a,$b){
  return $a*$b;

}

class testingController extends MX_Controller
{

  public function  _construct(){
    parent:: _construct();
  }

//Add user test
  public function Test_AddUser() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['username']="testUser1";
     $input['password']=sha1("testPassword");
     $input['confirm_password']=sha1("testPassword");
     $input['emailid']=sha1("test@gmail.com");
     $input['phonenumber']=sha1("2432387");
     $input['city']=sha1("cityTest");
     $input['address']=sha1("adressTest");
     $_POST = $input;
     $this->signup_submit($_POST);
     $test = count($this->db->select('id')->from('user')->where('emailid',$input['emailid'])->get()->result());
     $expected_result = 1;
     $test_name = "testing if user is added";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
 //add pizza
 public function Test_do_addpizza() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['pizza_name']="Mean Green Pizza";
     $input['category']="Non-veg";
     $_POST = $input;
     $this->signin_submit($_POST);
     $test = count($this->db->select('pizza_name')->from('pizzas')->where('pizza_name',$input['pizza_name'])->get()->result());
     $expected_result = 1;
     $test_name = "Unit test for checking successful creation of pizza";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }

//add toppings
 public function Test_do_addtoppings() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['topping_name']="Jalapeno";
     $input['category']="Average";
     $_POST = $input;
     $this->do_addtoppings($_POST);
     $test = count($this->db->select('topping_name')->from('toppings')->where('topping_name',$input['topping_name'])->get()->result());
     $expected_result = 1;
     $test_name = "Unit test for checking successful addition of toppings";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }

//adding bread
  public function Test_do_addbread() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Wheat";
     $input['size']="Large";
     $_POST = $input;
     $this->do_addbread($_POST);
     $test = count($this->db->select('name')->from('breads')->where('name',$input['name'])->get()->result());
     $expected_result = 1;
     $test_name = "Unit test for checking successful addition of breads";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
//adding sauce test
  public function Test_do_addsauce() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Tomato";
     $_POST = $input;
     $this->do_addsauce($_POST);
     $test = count($this->db->select('name')->from('sauce')->where('name',$input['name'])->get()->result());
     $expected_result = 1;
     $test_name = "Unit test for checking successful addition of Sauces";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
//testing update pizza price
  public function Test_updatepizzaprice_submit() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Tomato";
     $_POST = $input;
     $this->updatepizzaprice_submit($_POST);
     $test = count($this->db->select('name')->from('pizzas')->where('name',$input['name'])->get()->result());
     $expected_result = 1;
     $test_name = "Unit test for updating pizzas price";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
//update toppings price testing
  public function Test_updatetoppingsprice_submit() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Tomato";
     $_POST = $input;
     $this->updatetoppingsprice_submit($_POST);
     $test = count($this->db->select('name')->from('toppings')->where('name',$input['toppingsname'])->get()->result());
     $expected_result = 1;
     $test_name = "Unit test for updating toppings price";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }

//testing update extra price
  public function Test_updateextrasprice_submit() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Mirch";
     $_POST = $input;
     $this->updateextrasprice_submit($_POST);
     $test = count($this->db->select('name')->from('extras')->where('name',$input['name'])->get()->result());
     $expected_result = 1;
     $test_name = "Unit test for updating extra price";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
  //testing update sauce price
  public function Test_updatesauceprice_submit() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Alfredo";
     $_POST = $input;
     $this->updatesauceprice_submit($_POST);
     $test = count($this->db->select('name')->from('sauce')->where('name',$input['name'])->get()->result());
     $expected_result = 1;
     $test_name = "Unit test for updating sauce price";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
//testing delete sauce
  public function Test_deletesauce() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Alfredo";
     $_POST = $input;
     $this->deletesauce($_POST);
     $test = count($this->db->select('name')->from('sauce')->where('name',$input['name'])->get()->result());
     $expected_result = 0;
     $test_name = "Unit test for updating sauce price";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
 //testing delete branch
    public function Test_deletebranch() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Himayatnagar";
     $_POST = $input;
     $this->updatesauceprice_submit($_POST);
     $test = count($this->db->select('name')->from('branch')->where('name',$input['name'])->get()->result());
     $expected_result = 0;
     $test_name = "Unit test for delete branch";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }  
//testing delete pizza 
    public function Test_deletepizza_submit() {
         $this->load->library("unit_test");
         $_SERVER["REQUEST_METHOD"] = "POST";
         $input['name']="Veg Pizza";
         $_POST = $input;
         $this->deletepizza_submit($_POST);
         $test = count($this->db->select('name')->from('pizza')->where('name',$input['name'])->get()->result());
         $expected_result = 0;
         $test_name = "Unit test for deleting pizza";
         $this->unit->run($test, $expected_result, $test_name);
         echo $this->unit->report();
      }
//testing delete toppings
  public function Test_deletetoppings_submit() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="onions";
     $_POST = $input;
     $this->deletetoppings_submit($_POST);
     $test = count($this->db->select('name')->from('toppings')->where('name',$input['name'])->get()->result());
     $expected_result = 0;
     $test_name = "Unit test for deleting toppings";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
// testing delete bread
  public function Test_deletebread_submit() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Tomato";
     $_POST = $input;
     $this->deletebread_submit($_POST);
     $test = count($this->db->select('name')->from('bread')->where('name',$input['name'])->get()->result());
     $expected_result = 0;
     $test_name = "Unit test for delete bread";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
//testing delete sauce
  public function Test_deletesauce_submit() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Game";
     $_POST = $input;
     $this->deletesauce_submit($_POST);
     $test = count($this->db->select('name')->from('sauce')->where('name',$input['name'])->get()->result());
     $expected_result = 0;
     $test_name = "Unit test for deleting sauce price";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
//testing delete branch
  public function Test_deletebranch_submit() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Alfredo";
     $_POST = $input;
     $this->deletebranch_submit($_POST);
     $test = count($this->db->select('name')->from('branch')->where('name',$input['name'])->get()->result());
     $expected_result = 0;
     $test_name = "Unit test Delete Branch";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
//testing delete p
  public function Test_delete_p() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Delete_P";
     $_POST = $input;
     $this->deletebranch_submit($_POST);
     $test = count($this->db->select('name')->from('pizza')->where('name',$input['name'])->get()->result());
     $expected_result = 0;
     $test_name = "Unit test delete Pizza";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }
//testing delete p
  public function fTest_delete_p() {
     $this->load->library("unit_test");
     $_SERVER["REQUEST_METHOD"] = "POST";
     $input['name']="Delete_T";
     $_POST = $input;
     $this->deletebranch_submit($_POST);
     $test = count($this->db->select('name')->from('pizza')->where('name',$input['name'])->get()->result());
     $expected_result = 0;
     $test_name = "Unit test delete Toppings";
     $this->unit->run($test, $expected_result, $test_name);
     echo $this->unit->report();
  }

public function testing()
 {
 return "hello world";
 }


 public function signup_submit($input){

  return 1;
   //$this->load->view('signinup.php');
 }



}

?>
