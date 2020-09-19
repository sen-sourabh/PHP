<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Admin extends CI_Controller {
    
     function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }

     /*
     * User login
     */

    public function index()
    {

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
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    $this->session->set_userdata('userType',$checkLogin['type']);
                    $this->session->set_userdata('userName',$checkLogin['name']);
                    redirect('admin/account/');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('admin/login', $data);
    }

      /*
     * User account information
     */
    public function account(){

        
        $data = array();
        if($this->session->userdata('isUserLoggedIn') &&  $this->session->userdata('userType')=='Admin'){
            
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            $data['totalOrder'] = $this->user->getAllResult('userorder');
            $data['newOrder'] = $this->user->getAllResultArray('userorder',array('status' =>'Paid'));
            $data['completeOrder'] = $this->user->getAllResultArray('userorder',array('status' =>'Complete'));
            $data['userList'] = $this->user->getAllResultArray('users',array('type' =>'Customer'));

            //$data['location']= $this->user->getAllResult('gps');
            //load the view
             $this->load->view('admin/header');
            $this->load->view('admin/account', $data);
        }else{
            redirect('admin/');
        }

    }

 



    /*
     * User account information
     */
    public function productlist(){


        $data = array();
        if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){


            if(isset($_GET['deleteID'])){

                $deleteID = $_GET['deleteID'];
                $delete = $this->user->deleteArray('product',array('product_id' =>$deleteID));
                

            }
            
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            $data['productarr'] = $this->user->getAllResult('product');

            $this->load->view('admin/header');
            $this->load->view('admin/productlist', $data);
        }else{
            redirect('admin/');
        }

    }

          /*
     * User account information
     */
    public function addproduct(){

        if(isset($_POST['addproduct'])){
          $productData = array(
            'product_title' => strip_tags($this->input->post('product_title')),
            'product_desc' => $this->input->post('product_desc'),
            'product_sku' => strip_tags($this->input->post('product_sku')),
            'product_price' => $this->input->post('product_price'),
            'Product_Stock' => strip_tags($this->input->post('Product_Stock')),
            'cat_id' => strip_tags($this->input->post('cat_id')),
          );
          $insetProduct=$this->user->insertData('product',$productData);
          if(!empty($_FILES['product_img']['name'])){
              $config['upload_path'] = 'assets/product';
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['file_name'] = $_FILES['product_img']['name'];   
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);   
              if($this->upload->do_upload('product_img')){
                  $uploadData = $this->upload->data();
                  $picture = $uploadData['file_name'];

                   $imageSet = array(
                      'product_img' => $picture
                    );

                  $update=$this->user->updateAllResultWhere('product',array('product_id'=>$insetProduct),$imageSet );
              }else{
                  echo $this->upload->display_errors(); die();  
              }
          }

          $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
          $data['category']= $this->user->getAllResultArray('category',array('cat_status'=>'active'));
          $data['productarr'] = $this->user->getAllResult('product');
          $this->load->view('admin/header');
          $this->load->view('admin/productlist', $data);

      }else{

          $data = array();
          if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){

                $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
                $data['category']= $this->user->getAllResultArray('category',array('cat_status'=>'active'));
                $this->load->view('admin/header');
                $this->load->view('admin/addproduct', $data);

          }else{
                redirect('admin/');
          }
      }
    }




      /*
     * User account information
     */
    public function productdetail(){

        $ProductID=$_GET['ProductID'];

        if(isset($_POST['product_title'])){

                  $cat_title = "";
                  $cat_id=$this->input->post('cat_id');
                  $category= $this->user->getAllResultArray('category',array('cat_id'=> $cat_id));
                  foreach ($category as  $valueArr) {
                     $cat_title = $valueArr->cat_title;
                  }
                  

                $productData = array(
                    'product_title' => strip_tags($this->input->post('product_title')),
                    'product_desc' => $this->input->post('product_desc'),
                    'product_sku' => strip_tags($this->input->post('product_sku')),
                    'product_price' => $this->input->post('product_price'),
                    'Product_Stock' => strip_tags($this->input->post('Product_Stock')),
                    'cat_id' => $this->input->post('cat_id'),
                    'product_cat' => $cat_title
                  );
                $update=$this->user->updateAllResultWhere('product',array('product_id'=>$ProductID),$productData);
        }

        if(isset($_POST['product_img'])){

             $config['upload_path']   = ''; 
             $config['allowed_types'] = 'gif|jpg|png'; 
             $config['max_size']      = 100; 
             $config['max_width']     = 1024; 
             $config['max_height']    = 768;  
             $this->load->library('upload', $config);
                
             if ( ! $this->upload->do_upload('product_img')) {
                $error = array('error' => $this->upload->display_errors()); 
                $this->load->view('upload_form', $error); 
             }
                
             else { 
               echo  "sdkjflksajhdksahkdshakdsjkadhjksahdjksad";
             } 

            
            // $productData = array(
            //         'product_img' => strip_tags($this->input->post('product_img'))
            //       );
            // $update=$this->user->updateAllResultWhere('product',array('product_id'=>$ProductID),$productData);
        }

        $data = array();
        if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            $data['productdetail']=$this->user->getAllResultArray('product',array('product_id'=>$ProductID));
            $data['category']= $this->user->getAllResultArray('category',array('cat_status'=>'active'));
             $this->load->view('admin/header');
            $this->load->view('admin/productdetail', $data);
        }else{
            redirect('admin/');
        }

    }

       /*
     * User account information
     */
    public function order(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            $data['userorder'] = $this->user->getAllResult('userorder');
            $this->load->view('admin/header');
            $this->load->view('admin/order', $data);
        }else{
            redirect('admin/');
        }

    }

    public function showorder(){
        $orderId=$_POST['orderid'];
        $data = array();
        if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            $data['orderlist'] = $this->user->getAllResultArray('orderlist',array('order_id' =>$orderId ));
            
            $this->load->view('admin/showorder', $data);
        }else{
            redirect('admin/');
        }
    }




    public function deleteorder(){
        $orderId=$_POST['orderid'];
        $delete = $this->user->deleteArray('userorder',array('order_id' => $orderId));
        $delete = $this->user->deleteArray('orderlist',array('order_id' => $orderId));
        echo '<div class="alert bg-success" role="alert">Delete order  : '.$orderId.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';
    }

       /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('admin/');
    }
    
    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->user->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

         /*
     * User setting information
     */


    public function setting(){

        $data = array();
        if(isset($_POST['password'])){
              $this->form_validation->set_rules('password', 'Current Password', 'required');
              $this->form_validation->set_rules('newpass', 'New Password', 'required');
              $this->form_validation->set_rules('confpassword', 'Confirm Password', 'required');

              if($this->form_validation->run())
              {
                  $cur_password = $this->input->post('password');
                  $new_password = $this->input->post('newpass');
                  $conf_password = $this->input->post('confpassword');
                 
                  $userid = '1';

                  try
                  {
                      $objUser = $this->user->getUser($userid);
                      if ($objUser->password != md5($cur_password)){

                        $data['message']='<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Sorry! Current password is not matching <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div> ';
                        //throw new Exception('Sorry! Current password is not matching');
                      }elseif ($new_password != $conf_password){
                         $data['message']='<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> New password & Confirm password is not matching <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div> ';
                          //throw new Exception('New password & Confirm password is not matching');
                      }else{    
                     
                        $this->user->updatePassword($new_password, $userid);
                        $data['message']='<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Password updated successfully <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';
                        //echo 'Password updated successfully';
                      }
                  }
                  catch (Exception $e)
                  {
                      echo $e->getMessage();
                  }
              }
              else
              {
                  echo validation_errors();
              }
        }

          if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){
            
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //$data['location']= $this->user->getAllResult('gps');
            //load the view
             $this->load->view('admin/header');
            $this->load->view('admin/setting', $data);
        }else{
            redirect('admin/');
        }

      }
       

    /* contact */
    public function contact(){

      $data = array();
        if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){
            
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            $data['contact'] = $this->user->getAllResult('contact');

            $this->load->view('admin/header');
            $this->load->view('admin/contact', $data);
        }else{
            redirect('admin/');
        }
    }

    public  function page(){
      $data=array();
         if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){

            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            $data['page'] = $this->user->getAllResult('page');
            $this->load->view('admin/header');
            $this->load->view('admin/page', $data);
        }else{
            redirect('admin/');
        }

    }

    public  function pagedelete(){
      $data=array();
         if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){

            $pageid=$_GET['pageid'];
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));

            $delete =$this->user->deleteArray('page',array('page_id' => $pageid));
            if($delete){
                $data['message']='<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> successfully  deteted <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';
            }
            $data['page'] = $this->user->getAllResult('page');
            $this->load->view('admin/header');
            $this->load->view('admin/page', $data);

        }else{
            redirect('admin/');
        }
    }



  public  function addpage(){
      $data=array();
         if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){

            if(isset($_POST['addPage'])){


                $addDate = date("Y-m-d H:i:s");
                $status  ='Post';
                 $pageData = array(
                    'page_title' => strip_tags($this->input->post('pageTitle')),
                    'page_desc' => $this->input->post('pageDescription'),
                    'page_type' => strip_tags($this->input->post('pageType')),
                    'page_status' => 'Active',
                    'page_cat' => 'No Category',
                    'page_adddate'=>$addDate
                  );
                $insetPage=$this->user->insertData('page',$pageData);
                if($insetPage){

                      if(!empty($_FILES['pageImage']['name'])){

                            $config['upload_path'] = 'uploads';
                            $config['allowed_types'] = 'jpg|jpeg|png|gif';
                            $config['file_name'] = $_FILES['pageImage']['name'];
                            
                            //Load upload library and initialize configuration
                            $this->load->library('upload',$config);
                            $this->upload->initialize($config);
                            
                            if($this->upload->do_upload('pageImage')){
                                $uploadData = $this->upload->data();
                                $picture = $uploadData['file_name'];

                                 $imageSet = array(
                                    'page_image' => $picture
                                  );

                                $update=$this->user->updateAllResultWhere('page',array('page_id'=>$insetPage),$imageSet );
                            }else{
                                echo $this->upload->display_errors(); die();  
                            }
                      }
                      $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
                      $data['page'] = $this->user->getAllResult('page');
                      $this->load->view('admin/header');
                      $this->load->view('admin/page', $data);

                      
                }else{

                       $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
                        $data['page'] = $this->user->getAllResult('page');
                        $this->load->view('admin/header');
                        $this->load->view('admin/page', $data);
                }


            }else{
            
                $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
                $data['page'] = $this->user->getAllResult('page');
                $this->load->view('admin/header');
                $this->load->view('admin/addpage', $data);

              }
        }else{
            redirect('admin/');
        }

    }


    public  function pageedit(){

         $data=array();
         if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin'){

            $pageid=$_GET['pageid'];

            if(isset($_POST['editPage'])){

                $addDate = date("Y-m-d H:i:s");
                $status  ='Post';
                $pageData = array(
                  'page_title' => strip_tags($this->input->post('pageTitle')),
                  'page_desc' => $this->input->post('pageDescription'),
                  'page_type' => strip_tags($this->input->post('pageType')),
                  'page_status' => 'Active',
                  'page_cat' => 'No Category',
                  'page_updatedate'=>$addDate
                );


                $insetPage=$this->user->updateAllResultWhere('page',array('page_id'=>$pageid),$pageData);

                if($insetPage){

                      if(!empty($_FILES['pageImage']['name'])){

                            $config['upload_path'] = 'uploads';
                            $config['allowed_types'] = 'jpg|jpeg|png|gif';
                            $config['file_name'] = $_FILES['pageImage']['name'];
                            
                            //Load upload library and initialize configuration
                            $this->load->library('upload',$config);
                            $this->upload->initialize($config);
                            
                            if($this->upload->do_upload('pageImage')){
                                $uploadData = $this->upload->data();
                                $picture = $uploadData['file_name'];

                                 $imageSet = array(
                                    'page_image' => $picture
                                  );

                                $update=$this->user->updateAllResultWhere('page',array('page_id'=>$pageid),$imageSet );
                            }else{
                                echo $this->upload->display_errors(); die();  
                            }
                      }
                      $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
                      $data['pageDetail'] = $this->user->getAllResultArray('page',array('page_id' => $pageid));
                      $this->load->view('admin/header');
                      $this->load->view('admin/pageedit', $data);

                }else{

                      $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
                      $data['pageDetail'] = $this->user->getAllResultArray('page',array('page_id' => $pageid));
                      $this->load->view('admin/header');
                      $this->load->view('admin/pageedit', $data);

                }
            
            }else{

                $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
                $data['pageDetail'] = $this->user->getAllResultArray('page',array('page_id' => $pageid));
                $this->load->view('admin/header');
                $this->load->view('admin/pageedit', $data);
            }

        }else{
            redirect('admin/');
        }

    }
}

?>