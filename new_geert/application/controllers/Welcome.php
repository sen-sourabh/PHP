<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct(){
        parent::__construct();
        $this->load->model('My_model');
        $this->load->library("cart");
    }
 

	public function index()
	{
		$this->load->view('header');
		$query=$this->My_model->getAllResultArray('product',array('product_status'=>'active'));
		$data['productlist'] = null;
		if($query){
			$data['productlist'] =  $query;
		}
		$this->load->view('home',$data);
		$this->load->view('footer');
	}

		public function shop()
	{
		$this->load->view('header');
    $query=$this->My_model->getAllResultArray('product',array('product_status'=>'active'));
    if(isset($_GET['cat'])){
       $catName=$_GET['cat'];
        $query=$this->My_model->getAllResultArray('product',array('product_status'=>'active', 'product_cat'=> $catName ));
    }

		$data['productlist'] = null;
		if($query){
			$data['productlist'] =  $query;
		}
		$this->load->view('shop',$data);
		$this->load->view('footer');
	}

	public function kidsquiz()
	{

      	$this->load->view('header');
	      $query=$this->My_model->getAllResultArray('kidsquiz',array('quiz_id'=>1));
	      $data['quiz'] = null;
	        if($query){
	         $data['quiz'] =  $query;
	        }
	      $this->load->view('kidsquiz',$data); 
		    $this->load->view('footer');
	}

	public function anscheck(){

		$quid= $_POST['type'];
    $ans= $_POST['ans'];
	  $query=$this->My_model->getAllResultArray('kidsquiz',array('quiz_id'=>$quid));
	  $ansR=$query[0]->quiz_ans;
	  if($ansR == $ans){
		    $data['quiz'] = null;
		    if($query){
		         $data['quiz'] =  $query;
		    }
         
        echo '<script>  new Audio("http://www.geert.geertgevaar.nl/sound/sound_one.mp3").play(); </script>';

		    $this->load->view('anscheck',$data); 


		}else{
			if($quid == 5){
				echo "<script> window.location.href = 'http://www.geert.geertgevaar.nl/product?item=1&diploma'; </script>";
			}else{
		      $newquid=$quid+1;
			    $query=$this->My_model->getAllResultArray('kidsquiz',array('quiz_id'=>$newquid));
			    $data['quiz'] = null;
			    if($query){
			        $data['quiz'] =  $query;
			    }
          echo '<script>  new Audio("http://www.geert.geertgevaar.nl/sound/sound_two.mp3").play(); </script>';
			    $this->load->view('anscheck',$data); 
			}
		}
	}

	public function product(){

    if(isset($_GET['diploma'])){
             echo '<script>  new Audio("http://www.geert.geertgevaar.nl/sound/sound_two.mp3").play(); </script>';
    }
		$item=$_GET['item'];
		$this->load->view('header');
    	$query=$this->My_model->getAllResultArray('product',array('product_id'=>$item));
		$data['product'] = null;
		if($query){
			$data['product'] =  $query;
		}
		$this->load->view('product',$data);
		$this->load->view('footer');

	}

	public function addtocart(){
		//echo "10";
		$data = array(
		   "id"  => $_POST["itemid"],
		   "name"  => $_POST["itemtitle"],
		   "qty"  => $_POST["itemqty"],
		   "price"  => $_POST["itemprice"],
		   "img"  => $_POST["itemimg"] 
		);

		$this->cart->insert($data);
		echo $this->cart->total_items();
	}

	public function cart(){

		  $this->load->view('header');
		  $this->load->view('cart');
		  $this->load->view('footer');

	}


	public function remove() {
	  $row_id = $_POST["row_id"];
	  $data = array(
	   'rowid'  => $row_id,
	   'qty'  => 0
	  );
	  $this->cart->update($data);

	  echo $this->viewCart();
	  
	 }

	public function clear() {
	  $this->cart->destroy();
	  echo $this->viewCart();
	 }

	 public function viewCart(){

	 	
	 	$output = '';
                $output .= '
                <h3>Shopping Cart</h3><br />
                <div class="table-responsive">
                 <div align="right">
                  <button type="button" id="clear_cart" class="btn btn-warning">Clear Cart</button>
                 </div>
                 <br />
                 <table class="table table-bordered">
                  <tr>
                   <th width="40%">Name</th>
                   <th width="15%">Quantity</th>
                   <th width="15%">Price</th>
                   <th width="15%">Total</th>
                   <th width="15%">Action</th>
                  </tr> ';

                $count = 0;
                foreach($this->cart->contents() as $items)
                {
                 $count++;
                 $output .= '
                 <tr> 
                  <td>'.$items["name"].'</td>
                  <td>'.$items["qty"].'</td>
                  <td>'.$items["price"].'</td>
                  <td>'.$items["subtotal"].'</td>
                  <td><button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory" id="'.$items["rowid"].'">Remove</button></td>
                 </tr>
                 ';
                }

                $output .= '
                 <tr>
                  <td colspan="4" align="right">Total</td>
                  <td>'.$this->cart->total().'</td>
                 </tr>
                </table>

                </div>
                ';

                if($count == 0)
                {
                 $output = '<h3 align="center">Cart is Empty</h3>';
                }
                
               echo  $output; 
	 }

	public function contact(){
      $data = array();
      
      if(isset($_POST['txtName'])){

              $this->form_validation->set_rules('txtName', 'Name', 'required');
              $this->form_validation->set_rules('txtEmail', 'Email', 'required');
              $this->form_validation->set_rules('txtMessage', 'Message', 'required');

              if($this->form_validation->run())
              {
                  $txtName = $this->input->post('txtName');
                  $txtEmail = $this->input->post('txtEmail');
                  $txtMessage = $this->input->post('txtMessage');
                  $userData = array(
                      'contact_name' => strip_tags($this->input->post('txtName')),
                      'contact_email' => strip_tags($this->input->post('txtEmail')),
                      'contact_meaasge' => strip_tags($this->input->post('txtMessage'))
                  );

                  $insert = $this->My_model->insertAll('contact',$userData);
                  $data['message']="Form submit success!";
              }
              else
              {
                  $data['message']="Form submit not success!";
              }
      }

		$this->load->view('header');
		$this->load->view('contact',$data);
		$this->load->view('footer');
	}

  
	public function login(){

		$this->load->view('header');
		 $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'status' => '1'
                );
                $checkLogin = $this->My_model->getRows('users',$con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    $this->session->set_userdata('userType',$checkLogin['type']);
                    $this->session->set_userdata('userName',$checkLogin['name']);
                    redirect('account/');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('login', $data);
		
		$this->load->view('footer');
	}



	    /*
     * User registration
     */

	public function register(){
		$this->load->view('header');
		$data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'gender' => $this->input->post('gender'),
                'phone' => strip_tags($this->input->post('phone'))
            );

            if($this->form_validation->run() == true){
                $insert = $this->My_model->insert('users',$userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    redirect('login');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['user'] = $userData;
        //load the view
        $this->load->view('register', $data);
		$this->load->view('footer');
	}


	    
    /*
     * Existing email check during validation
     */
    public function email_check($str){

        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->My_model->getRows('users',$con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }

    }

        
    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->unset_userdata('userType');
        $this->session->unset_userdata('userName');
        $this->session->sess_destroy();
        redirect('login/');
    }


	public function account(){
	    $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            
            $data['user'] = $this->My_model->getRows('users',array('id'=>$this->session->userdata('userId')));

            //$data['orderlist'] = $this->My_model->getRows('userorder',array('userid'=>$this->session->userdata('userId')));

            $query=$this->My_model->getAllResultArray('userorder',array('userid'=>$this->session->userdata('userId'),'status'=>'Paid'));
				$data['neworderlist'] = null;
				if($query){
					$data['neworderlist'] =  $query;
			}

			$query=$this->My_model->getAllResultArray('userorder',array('userid'=>$this->session->userdata('userId'),'status'=>'Delivered'));
				$data['deliveredorderlist'] = null;
				if($query){
					$data['deliveredorderlist'] =  $query;
			}

			$query=$this->My_model->getAllResultArray('userorder',array('userid'=>$this->session->userdata('userId'),'status'=>'Shipped'));
				$data['shippedorderlist'] = null;
				if($query){
					$data['shippedorderlist'] =  $query;
			}


			$data['orderlist'] = null;
			if(isset($_GET['order'])){

				$orderID=$_GET['order'];

				$query=$this->My_model->getAllResultArray('orderlist',array('order_id'=>$orderID ));

				if($query){
					$data['orderlist'] =  $query;
				}
			}

            $this->load->view('header');
            $this->load->view('account', $data);
            $this->load->view('footer');
        }else{
            redirect('login/');
        }
	}

	 public function checkout(){
		$this->load->view('header');



		 if($this->session->userdata('isUserLoggedIn')){


		 	    $data['user'] = $this->My_model->getAllResultArray('users',array('id'=>$this->session->userdata('userId')));
		 	    $this->load->view('checkout',$data);
		 }else{
			$this->load->view('register');
		}


		$this->load->view('footer');
	}

  public function returnpage(){

  	  $order_id=$_GET['order_id'];
  	  $updateCart = $this->My_model->updateAllResultWhere('userorder', array('order_id'=>$order_id),array('status'=>'Paid'));	
  	  $this->cart->destroy();
  	  $data = array();
  	  $this->load->view('header');
  	  $data['userorder'] = $this->My_model->getAllResultArray('userorder',array('order_id'=>$order_id));
  	  $data['orderlist'] = $this->My_model->getAllResultArray('orderlist',array('order_id'=>$order_id));

      $this->load->view('return',$data);
      $this->load->view('footer');

  }


	public function checkoutprocess(){
		
		  //$this->My_model->payment();
	  $data = array();
	  $orderData = array();
	  $this->form_validation->set_rules('txtName', 'Name', 'required');
	  $this->form_validation->set_rules('txtEmail', 'Email', 'required|valid_email|callback_email_check');
      $this->form_validation->set_rules('txtPhone', 'Phone', 'required');
      $this->form_validation->set_rules('txtCountry', 'Country', 'required');
      $this->form_validation->set_rules('txtCity', 'City', 'required');
      $this->form_validation->set_rules('txtPostcode', 'Postcode', 'required');
      $this->form_validation->set_rules('txtAddress', 'Address', 'required');
      $orderdate = date("l jS \of F Y h:i:s A");
      $userId="";

		  $txtName=strip_tags($this->input->post('txtName'));
		  $txtEmail=strip_tags($this->input->post('txtEmail'));
      	  $txtCountry=strip_tags($this->input->post('txtCountry'));
          $txtCity=strip_tags($this->input->post('txtCity'));
          $txtPostcode=strip_tags($this->input->post('txtPostcode'));
          $txtAddress=strip_tags($this->input->post('txtAddress'));

          $txtCountryTwo=strip_tags($this->input->post('txtCountryTwo'));
          $txtCityTwo=strip_tags($this->input->post('txtCityTwo'));
          $txtPostcodeTwo=strip_tags($this->input->post('txtPostcodeTwo'));
          $txtAddressTwo=strip_tags($this->input->post('txtAddressTwo'));


           $CountryCode = $this->My_model->getAllResultArray('apps_countries',array('country_name'=>$txtCountry));
           $CountryOne=$CountryCode[0]->country_code;

           $CountryCode = $this->My_model->getAllResultArray('apps_countries',array('country_name'=>$txtCountryTwo));
           $CountryTwo=$CountryCode[0]->country_code;

      if($this->session->userdata('isUserLoggedIn')){
		 	  $userId= $this->session->userdata('userId');
         	
	          $update = $this->My_model->updateAllResultWhere('users', array('id'=>$this->session->userdata('userId')),array('country'=>$txtCountry));
	          $update = $this->My_model->updateAllResultWhere('users', array('id'=>$this->session->userdata('userId')),array('city'=>$txtCity));
	          $update = $this->My_model->updateAllResultWhere('users', array('id'=>$this->session->userdata('userId')),array('postcode'=>$txtPostcode));
	          $update = $this->My_model->updateAllResultWhere('users', array('id'=>$this->session->userdata('userId')),array('address'=>$txtAddress));   
		}
      $orderData = array(
        'userid' => $userId,
        'username' => strip_tags($this->input->post('txtName')),
        'useremail' => strip_tags($this->input->post('txtEmail')),
        'orderdate' => $orderdate,
        'status' =>  'New Order',
        'Country' => strip_tags($this->input->post('txtCountry')),
        'City' => strip_tags($this->input->post('txtCity')),
        'postcode' => strip_tags($this->input->post('txtPostcode')),
        'Address' => strip_tags($this->input->post('txtAddress')),
        'TotalAmount' => $this->cart->total()
      );

      $insert = $this->My_model->insertAll('userorder', $orderData);
      if($insert){
          foreach($this->cart->contents() as $items){
      
        	 	$orderList=array(
        	 		'productid' =>$items["id"], 
        	 		'name' => $items["name"], 
        	 		'price' => $items["price"] , 
        	 		'quantity' =>$items["qty"] , 
        	 		'order_id' => $insert, 
        	 		'images' => $items["img"], 
        	 		'subtotal' => $items["subtotal"] 
        	 	);
            $insertList = $this->My_model->insertAll('orderlist', $orderList);
      }

  	  $data['OrderID']=$insert;
      $orderId=$insert;

      	$sku=array();
      	$name=array();
      	$productUrl=array();
      	$imageUrl=array();
      	$quantity=array();
      	$vatRate=array();
      	$currencyU=array();
      	$valueU=array();
      	$currencyT=array();
      	$valueT=array();
      	$currencyD=array();
      	$valueD=array();
      	$currencyV=array();
      	$valueV=array();
      	$tot="".$this->cart->total()."";

      	foreach($this->cart->contents() as $items){

      		$sku[]=$items["id"];
	      	$name[]=$items["name"];
	      	$productUrl[]="http://www.geert.geertgevaar.nl/product?item=".$items['id'];
	      	$imageUrl[]="http://www.geert.geertgevaar.nl/product?item=".$items['img'];
	      	$quantity[]=$items["qty"];
	      	$vatRate[]="00.00";
	      	$currencyU[]= "EUR";
	      	$valueU[]=$items["price"];
	      	$currencyT[]= "EUR";
	      	$valueT[]=$items["subtotal"];
	      	$currencyD[]="EUR";
	      	$valueD[]="0.00";
	      	$currencyV[]="EUR";
	      	$valueV[]="0.00";
      	}

        try {
          
            require "./mollie-api-php/examples/initialize.php";
     
            $protocol = isset($_SERVER['HTTPS']) && strcasecmp('off', $_SERVER['HTTPS']) !== 0 ? "https" : "http";
            $hostname = $_SERVER['HTTP_HOST'];
            $path = dirname(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PHP_SELF']);

             $countNum = count($this->cart->contents());

             if($countNum==1){
		            $order = $mollie->orders->create([
		                "amount" => [
		                  "value" => $tot,
		                  "currency" => "EUR"
		                ],
		                "billingAddress" => [
		                  "streetAndNumber" => $txtAddress,
		                  "postalCode" => $txtPostcode,
		                  "city" => $txtCity,
		                  "country" => $CountryOne,
		                  "givenName" => $txtName,
		                  "familyName" => "",
		                  "email" =>$txtEmail,
		                ],
		                "shippingAddress" => [
		                  "streetAndNumber" => $txtAddressTwo,
		                  "postalCode" => $txtPostcodeTwo,
		                  "city" => $txtCityTwo,
		                  "country" =>  $CountryTwo,
		                  "givenName" => $txtName,
		                  "familyName" => "",
		                  "email" => $txtEmail,
		                ],
		                "metadata" => [
		                  "order_id" => $orderId
		                ],
		                "consumerDateOfBirth" => "1958-01-31",
		                "locale" => "en_US",
		                "orderNumber" => '$orderId',
		                "redirectUrl" => "{$protocol}://{$hostname}{$path}/returnpage?order_id={$orderId}",
		                "webhookUrl" => "{$protocol}://{$hostname}{$path}/webhook.php",
		                "method" => "ideal",
		                "lines" => [
		                    [
		                        "sku" => $sku[0],
		                        "name" => $name[0],
		                        "productUrl" => $productUrl[0],
		                        "imageUrl" => $imageUrl[0],
		                        "quantity" => $quantity[0],
		                        "vatRate" => $vatRate[0],
		                        "unitPrice" => [
		                            "currency" => $currencyU[0],
		                            "value" => "$valueU[0]"
		                        ],
		                        "totalAmount" => [
		                            "currency" => $currencyT[0],
		                            "value" => "$valueT[0]"
		                        ],
		                        "discountAmount" => [
		                            "currency" => $currencyD[0],
		                            "value" => $valueD[0]
		                        ],
		                        "vatAmount" => [
		                            "currency" => $currencyV[0],
		                            "value" =>$valueV[0]
		                        ]
		                    ]
		                ]
		            ]);


		        }else if($countNum==2){

		        	 $order = $mollie->orders->create([
		                "amount" => [
		                  "value" => $tot,
		                  "currency" => "EUR"
		                ],
		                "billingAddress" => [
		                  "streetAndNumber" => $txtAddress,
		                  "postalCode" => $txtPostcode,
		                  "city" => $txtCity,
		                  "country" => $CountryOne,
		                  "givenName" => $txtName,
		                  "familyName" => "",
		                  "email" =>$txtEmail,
		                ],
		                "shippingAddress" => [
		                  "streetAndNumber" => $txtAddressTwo,
		                  "postalCode" => $txtPostcodeTwo,
		                  "city" => $txtCityTwo,
		                  "country" =>  $CountryTwo,
		                  "givenName" => $txtName,
		                  "familyName" => "",
		                  "email" => $txtEmail,
		                ],
		                "metadata" => [
		                  "order_id" => $orderId
		                ],
		                "consumerDateOfBirth" => "1958-01-31",
		                "locale" => "en_US",
		                "orderNumber" => '$orderId',
		                "redirectUrl" => "{$protocol}://{$hostname}{$path}/returnpage?order_id={$orderId}",
		                "webhookUrl" => "{$protocol}://{$hostname}{$path}/webhook.php",
		                "method" => "ideal",
		                "lines" => [
		                    [
		                        "sku" => $sku[0],
		                        "name" => $name[0],
		                        "productUrl" => $productUrl[0],
		                        "imageUrl" => $imageUrl[0],
		                        "quantity" => $quantity[0],
		                        "vatRate" => $vatRate[0],
		                        "unitPrice" => [
		                            "currency" => $currencyU[0],
		                            "value" => "$valueU[0]"
		                        ],
		                        "totalAmount" => [
		                            "currency" => $currencyT[0],
		                            "value" => "$valueT[0]"
		                        ],
		                        "discountAmount" => [
		                            "currency" => $currencyD[0],
		                            "value" => $valueD[0]
		                        ],
		                        "vatAmount" => [
		                            "currency" => $currencyV[0],
		                            "value" =>$valueV[0]
		                        ]
		                    ],
		                    [
		                        "sku" => $sku[1],
		                        "name" => $name[1],
		                        "productUrl" => $productUrl[1],
		                        "imageUrl" => $imageUrl[1],
		                        "quantity" => $quantity[1],
		                        "vatRate" => $vatRate[1],
		                        "unitPrice" => [
		                            "currency" => $currencyU[1],
		                            "value" => "$valueU[1]"
		                        ],
		                        "totalAmount" => [
		                            "currency" => $currencyT[1],
		                            "value" => "$valueT[1]"
		                        ],
		                        "discountAmount" => [
		                            "currency" => $currencyD[1],
		                            "value" => $valueD[1]
		                        ],
		                        "vatAmount" => [
		                            "currency" => $currencyV[1],
		                            "value" =>$valueV[1]
		                        ]
		                    ]
		                ]
		            ]);




		        }else  if($countNum==3){


		        			        	 $order = $mollie->orders->create([
		                "amount" => [
		                  "value" => $tot,
		                  "currency" => "EUR"
		                ],
		                "billingAddress" => [
		                  "streetAndNumber" => $txtAddress,
		                  "postalCode" => $txtPostcode,
		                  "city" => $txtCity,
		                  "country" => $CountryOne,
		                  "givenName" => $txtName,
		                  "familyName" => "",
		                  "email" =>$txtEmail,
		                ],
		                "shippingAddress" => [
		                  "streetAndNumber" => $txtAddressTwo,
		                  "postalCode" => $txtPostcodeTwo,
		                  "city" => $txtCityTwo,
		                  "country" =>  $CountryTwo,
		                  "givenName" => $txtName,
		                  "familyName" => "",
		                  "email" => $txtEmail,
		                ],
		                "metadata" => [
		                  "order_id" => $orderId
		                ],
		                "consumerDateOfBirth" => "1958-01-31",
		                "locale" => "en_US",
		                "orderNumber" => '$orderId',
		                "redirectUrl" => "{$protocol}://{$hostname}{$path}/returnpage?order_id={$orderId}",
		                "webhookUrl" => "{$protocol}://{$hostname}{$path}/webhook.php",
		                "method" => "ideal",
		                "lines" => [
		                    [
		                        "sku" => $sku[0],
		                        "name" => $name[0],
		                        "productUrl" => $productUrl[0],
		                        "imageUrl" => $imageUrl[0],
		                        "quantity" => $quantity[0],
		                        "vatRate" => $vatRate[0],
		                        "unitPrice" => [
		                            "currency" => $currencyU[0],
		                            "value" => "$valueU[0]"
		                        ],
		                        "totalAmount" => [
		                            "currency" => $currencyT[0],
		                            "value" => "$valueT[0]"
		                        ],
		                        "discountAmount" => [
		                            "currency" => $currencyD[0],
		                            "value" => $valueD[0]
		                        ],
		                        "vatAmount" => [
		                            "currency" => $currencyV[0],
		                            "value" =>$valueV[0]
		                        ]
		                    ],
		                    [
		                        "sku" => $sku[1],
		                        "name" => $name[1],
		                        "productUrl" => $productUrl[1],
		                        "imageUrl" => $imageUrl[1],
		                        "quantity" => $quantity[1],
		                        "vatRate" => $vatRate[1],
		                        "unitPrice" => [
		                            "currency" => $currencyU[1],
		                            "value" => "$valueU[1]"
		                        ],
		                        "totalAmount" => [
		                            "currency" => $currencyT[1],
		                            "value" => "$valueT[1]"
		                        ],
		                        "discountAmount" => [
		                            "currency" => $currencyD[1],
		                            "value" => $valueD[1]
		                        ],
		                        "vatAmount" => [
		                            "currency" => $currencyV[1],
		                            "value" =>$valueV[1]
		                        ]
		                    ],
		                    [
		                        "sku" => $sku[2],
		                        "name" => $name[2],
		                        "productUrl" => $productUrl[2],
		                        "imageUrl" => $imageUrl[2],
		                        "quantity" => $quantity[2],
		                        "vatRate" => $vatRate[2],
		                        "unitPrice" => [
		                            "currency" => $currencyU[2],
		                            "value" => "$valueU[2]"
		                        ],
		                        "totalAmount" => [
		                            "currency" => $currencyT[2],
		                            "value" => "$valueT[2]"
		                        ],
		                        "discountAmount" => [
		                            "currency" => $currencyD[2],
		                            "value" => $valueD[2]
		                        ],
		                        "vatAmount" => [
		                            "currency" => $currencyV[2],
		                            "value" =>$valueV[2]
		                        ]
		                    ]
		                    

		                ]
		            ]);






		        }
                /*
                 * Send the customer off to complete the order payment.
                 * This request should always be a GET, thus we enforce 303 http response code
                 */
                header("Location: " . $order->getCheckoutUrl(), true, 303);

                //echo "succc payment";
            } catch (\Mollie\Api\Exceptions\ApiException $e) {
                echo "API call failed: " . htmlspecialchars($e->getMessage());
            }




    	// $this->load->view('header');
    	// $this->load->view('checkoutprocess',$data );
    	// $this->load->view('footer');
      //  $this->cart->destroy();
      }else{
                    
      }
          // }
	 }


    public function info(){
      $this->load->view('header');
      $query=$this->My_model->getAllResultArray('page',array('page_type'=>'Blog'));
      $data['blog'] = $query; 

      $this->load->view('info',$data);
      $this->load->view('footer');
    }


}