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
            $data['productarr'] = $this->user->getAllProductResult('product');

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
            'cat_id' => strip_tags($this->input->post('cat_id'))
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

                  $update=$this->user->updateAllResultWhere('product',array('product_id'=>$insetProduct),$imageSet);
              }else{
                  echo $this->upload->display_errors(); die();  
              }
          }

          $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
          $data['category']= $this->user->getAllResultArray('category',array('cat_status'=>'active'));
          $data['productarr'] = $this->user->getAllProductResult('product');
          
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

    public function footer_widget_left()
    {
      if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
      {
        $this->load->view('admin/header');
        $result['about_data'] = null;
        $result['about_data'] = $this->My_model->getAboutData();
        $this->load->view('admin/footer_widget_left',$result);

        if($this->input->post('addwidget'))
        {
          $about_data = array(
              'widget_about_title'        => strip_tags($this->input->post('about_title')),
              'widget_about_description'  => $this->input->post('about_desc'),
              'widget_about_facebook'     => strip_tags($this->input->post('facebook')),
              'widget_about_twitter'      => strip_tags($this->input->post('twitter')),
              'widget_about_linkedin'     => strip_tags($this->input->post('linkedin')),
              'widget_about_tumblr'       => strip_tags($this->input->post('tumblr')),
              'widget_about_youtube'      => strip_tags($this->input->post('youtube')),
              'widget_about_skype'        => strip_tags($this->input->post('skype')),
              'widget_about_instagram'    => strip_tags($this->input->post('instagram')),
              'widget_about_google'       => strip_tags($this->input->post('google_plus')),
              'widget_about_pinterest'    => strip_tags($this->input->post('pinterest'))
          );
          $this->My_model->update_about_data($about_data);
          redirect('Admin/footer_widget_left');
        }
      }
      else
      {
        redirect('admin/');
      }
    }

    public function footer_widget_right()
    {
      if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
      {
        $this->load->view('admin/header');
        $result['contact_data'] = null;
        $result['contact_data'] = $this->My_model->getContactData();
        $this->load->view('admin/footer_widget_right',$result);

        if($this->input->post('addwidgetcontact'))
        {
          $contact_data = array(
              'widget_contact_title'    => strip_tags($this->input->post('contact_title')),
              'widget_contact_address'  => strip_tags($this->input->post('address')),
              'widget_contact_city'     => strip_tags($this->input->post('city')),
              'widget_contact_state'    => strip_tags($this->input->post('state')),
              'widget_contact_country'  => strip_tags($this->input->post('country')),
              'widget_contact_phone'    => strip_tags($this->input->post('phone')),
              'widget_contact_email'    => strip_tags($this->input->post('contact_email'))
          );
          $this->My_model->update_contact_data($contact_data);
          redirect('Admin/footer_widget_right');
        }
      }
      else
      {
        redirect('admin/');
      }
    }


    public function slider()
    {
      if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
      {
        $this->load->view('admin/header');
        $result['slider_data'] = null;
        $result['slider_data'] = $this->My_model->getSliderData();
        $this->load->view('admin/slider',$result);
      }
      else
      {
        redirect('admin/');
      }
    }

    public function addslider()
    {
      if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
      {
        $this->load->view('admin/header');
        $this->load->view('admin/addslider');

        if($this->input->post('addslider'))
        {
              if($_FILES['slider_image']['name'])
              { 
                  $slider_image = preg_replace('/\s+/', '',$_FILES['slider_image']['name']);
                  $temp_name = preg_replace('/\s+/', '',$_FILES['slider_image']['tmp_name']);                 
                  move_uploaded_file($temp_name,"assets/img/$slider_image"); 
              }
              else
              {
                  $image = "slider1(2).jpg";
                  $slider_image = preg_replace('/\s+/', '',$image);
              }

              $slider_date = date('Y-m-d');
              $slider_data = array(
                'slider_title' => strip_tags($this->input->post('slider_title')),
                'slider_description' => $this->input->post('slider_description'),
                'slider_btn_text' => strip_tags($this->input->post('slider_btn_text')),
                'slider_img' => strip_tags($slider_image),
                'slider_date' => strip_tags($slider_date)
              );
              $this->My_model->insert_slider_data($slider_data);
              redirect('Admin/slider');
          }
      }
      else
      {
        redirect('Admin/');
      }
    }

    public function editslider()
    {
      if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
      {
        $this->load->view('admin/header');
        $result['slider_data'] = null;
        $slider_id = $this->input->get('slider_id');
        $result['slider_data'] = $this->My_model->getSliderDataById($slider_id);
        $old_image = $result['slider_data'][0]->slider_img;
        $this->load->view('admin/editslider',$result);

        if($this->input->post('editslider'))
        {
              if($_FILES['slider_image']['name'])
              {
                    $slider_image = preg_replace('/\s+/', '',$_FILES['slider_image']['name']);
                    $temp_name = preg_replace('/\s+/', '',$_FILES['slider_image']['tmp_name']);
                    move_uploaded_file($temp_name,"assets/img/$slider_image"); 
              }
              else
              {
                  $image = $old_image;
                  $slider_image = preg_replace('/\s+/', '',$image);
              }

              $slider_date = date('Y-m-d');

              $slider_data = array(
                'slider_title' => strip_tags($this->input->post('slider_title')),
                'slider_description' => $this->input->post('slider_description'),
                'slider_btn_text' => strip_tags($this->input->post('slider_btn_text')),
                'slider_img' => strip_tags($slider_image),
                'slider_date' => strip_tags($slider_date)
              );
              $slider_date = date('Y-m-d');

              $this->My_model->update_slider_data($slider_id,$slider_data);
              redirect('Admin/slider');
        }
      }
      else
      {
        redirect('Admin/');
      }
  }

  public function deleteslider()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
      {
        $this->load->view('admin/header');
        $result['slider_data'] = null;
        $slider_id = $this->input->get('slider_id');
        $result['slider_data'] = $this->My_model->deleteSliderById($slider_id);
        redirect('Admin/slider');
      }
      else
      {
        redirect('Admin/');
      }
  }

  public function banners()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $this->load->view('admin/header');
      $result['top_banner_data'] = $this->My_model->getTopBannerData();
      $result['shop_banner_data'] = $this->My_model->getShopBannerData();
      $result['bottom_banner_data'] = $this->My_model->getBottomBannerData();
      $this->load->view('admin/banners',$result);
    }
    else
    {
      redirect('Admin/');
    }
  }

  public function add_top_banner()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/top_banner');
      if($this->input->post('addVideo'))
      {
        if($_FILES['image']['name'])
        {
              $video_back_image = preg_replace('/\s+/', '',$_FILES['image']['name']);
              $temp_name = preg_replace('/\s+/', '',$_FILES['image']['tmp_name']);
              move_uploaded_file($temp_name,"assets/img/$video_back_image");
        }
        else
        {
            $image = "quiz-back.png";
            $video_back_image = preg_replace('/\s+/', '',$image);
        }

        $ban_video = preg_replace('/\s+/', '',$_FILES['video']['name']);
        $fileType = pathinfo($ban_video,PATHINFO_EXTENSION);
        if($fileType != "mp4" && $fileType != "avi" && $fileType != "mov" && $fileType != "3gp" && $fileType != "mpeg")
        {
            echo "File Format Not Suppoted";
        }
        else
        {
          $video = $ban_video;
          $temp = preg_replace('/\s+/', '',$_FILES['video']['tmp_name']);
          move_uploaded_file($temp,"sound/$video");
        }
        $video_date = date('Y-m-d');


        $top_ban_data = array(
                'video_title' => strip_tags($this->input->post('video_title')),
                'video' => strip_tags($video),
                'video_back_image' => strip_tags($video_back_image),
                'video_date' => strip_tags($video_date)
              );
        $this->My_model->insert_Top_Banner_Data($top_ban_data);
        redirect('Admin/banners');
      }
    }
    else
    {
      redirect('Admin/');
    }
  }

  public function edit_Top_Banner()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $this->load->view('admin/header');
      $video_id = $this->input->get('top_banner_id');
      $result['top_banner_data'] = $this->My_model->getTopBannerDataById($video_id);
      $old_image = $result['top_banner_data'][0]->video_back_image;
      $old_video = $result['top_banner_data'][0]->video;
      $this->load->view('admin/edit_top_banner',$result);

      if($this->input->post('editVideo'))
      {
        if($_FILES['image']['name'])
        {
              $video_back_image = preg_replace('/\s+/', '',$_FILES['image']['name']);
              $temp_name = preg_replace('/\s+/', '',$_FILES['image']['tmp_name']);
              move_uploaded_file($temp_name,"assets/img/$video_back_image");
        }
        else
        {
            $image = $old_image;
            $video_back_image = preg_replace('/\s+/', '',$image);
        }

        if($_FILES['video']['name'])
        {
          $ban_video = preg_replace('/\s+/', '',$_FILES['video']['name']);
          $fileType = pathinfo($ban_video,PATHINFO_EXTENSION);
          if($fileType != "mp4" && $fileType != "avi" && $fileType != "mov" && $fileType != "3gp" && $fileType != "mpeg")
          {
              echo "File Format Not Suppoted";
          }
          else
          {
            $video = $ban_video;
            $temp = preg_replace('/\s+/', '',$_FILES['video']['tmp_name']);
            move_uploaded_file($temp,"sound/$video");
          }  
        }
        else
        {
          $video = $old_video;
        }
        $video_date = date('Y-m-d');
       $top_ban_data = array(
          'video_title' => strip_tags($this->input->post('video_title')),
          'video' => strip_tags($video),
          'video_back_image' => strip_tags($video_back_image),
          'video_date' => strip_tags($video_date)
        );
        $this->My_model->update_Top_Banner_Data($top_ban_data,$video_id);
        redirect('Admin/banners');
      }
    }
    else
    {
      redirect('Admin/');
    }
  }

  public function delete_Top_Banner()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $this->load->view('admin/header');
      $video_id  =$this->input->get('top_banner_id');
      $this->My_model->delete_Top_Banner_Data($video_id);
      redirect('Admin/banners');
    }
    else
    {
      redirect('Admin/');
    }
  }

  public function add_bottom_banner()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/bottom_banner');
      if($this->input->post('addBanner'))
      { 
        if($_FILES['ban_back_image']['name'])
        {
          $ban_image = preg_replace('/\s+/', '',$_FILES['ban_back_image']['name']);
          $temp_name = preg_replace('/\s+/', '',$_FILES['ban_back_image']['tmp_name']);
          move_uploaded_file($temp_name,"assets/images/$ban_image");  
        }
        else
        {
          $image = "quiz-back.png";
          $ban_image = preg_replace('/\s+/', '',$image);
        }
        $ban_date = date('Y-m-d');
        $bot_ban_data = array(
          'bottom_banner_title' => strip_tags($this->input->post('ban_title')),
          'bottom_banner_desc' => $this->input->post('ban_desc'),
          'bottom_banner_btn_text' => strip_tags($this->input->post('ban_btn_text')),
          'bottom_banner_image' => strip_tags($ban_image),
          'bottom_banner_date' => strip_tags($ban_date)
        );
        
        $this->My_model->insert_bottom_banner($bot_ban_data);
        redirect('Admin/banners');
      }
    }
    else
    {
      redirect('Admin/');
    }
  }

  public function edit_Bottom_Banner()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $this->load->view('admin/header');
      $ban_id = $this->input->get('ban_id');
      $result['bottom_banner_data'] = $this->My_model->getBottomBannerDataById($ban_id);
      $old_image = $result['bottom_banner_data'][0]->bottom_banner_image;
      $this->load->view('admin/edit_bottom_banner',$result);
      if($this->input->post('editBanner'))
      {
        if($_FILES['ban_back_image']['name'])
        {
          $ban_image = preg_replace('/\s+/', '',$_FILES['ban_back_image']['name']);
          $temp_name = preg_replace('/\s+/', '',$_FILES['ban_back_image']['tmp_name']);
          move_uploaded_file($temp_name,"assets/images/$ban_image");  
        }
        else
        {
          $image = $old_image;
          $ban_image = preg_replace('/\s+/', '',$image);
        }
        $ban_date = date('Y-m-d');
        $bot_ban_data = array(
          'bottom_banner_title' => strip_tags($this->input->post('ban_title')),
          'bottom_banner_desc' => $this->input->post('ban_desc'),
          'bottom_banner_btn_text' => strip_tags($this->input->post('ban_btn_text')),
          'bottom_banner_image' => strip_tags($ban_image),
          'bottom_banner_date' => strip_tags($ban_date)
        );
        $this->My_model->update_bottom_banner($ban_id,$bot_ban_data);
        redirect('Admin/banners');
      }
    }
    else
    {
      redirect('Admin/');
    }
  }

  public function delete_Bottom_Banner()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $ban_id = $this->input->get('ban_id');
      $this->My_model->delete_Bottom_Banner($ban_id);
      redirect('Admin/banners');
    }
    else
    {
      redirect('Admin/');
    }
  }



  public function add_shop_Banner()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/shop_banner');
      if($this->input->post('addShop'))
      {
        if($_FILES['shop_image']['name'])
        {
              $shop_back_image = preg_replace('/\s+/', '',$_FILES['shop_image']['name']);
              $temp_name = preg_replace('/\s+/', '',$_FILES['shop_image']['tmp_name']);
              move_uploaded_file($temp_name,"assets/img/$shop_back_image");
        }
        else
        {
            $image = "pattern.png";
            $shop_back_image = preg_replace('/\s+/', '',$image);
        }

        $shop_date = date('Y-m-d');


        $shop_ban_data = array(
                'shop_banner_title' => strip_tags($this->input->post('shop_title')),
                'shop_banner_desc' => $this->input->post('shop_desc'),
                'shop_banner_back_image' => strip_tags($shop_back_image),
                'shop_banner_date' => strip_tags($shop_date)
              );
        $this->My_model->insert_Shop_Banner_Data($shop_ban_data);
        redirect('Admin/banners');
      }
    }
    else
    {
      redirect('Admin/');
    }
  }

  public function edit_Shop_Banner()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $this->load->view('admin/header');
      $ban_id = $this->input->get('ban_id');
      $result['shop_banner_data'] = $this->My_model->getShopBannerDataById($ban_id);
      $old_image = $result['shop_banner_data'][0]->shop_banner_back_image;
      $this->load->view('admin/edit_shop_banner',$result);
      if($this->input->post('editShop'))
      {
        if($_FILES['shop_image']['name'])
        {
              $shop_back_image = preg_replace('/\s+/', '',$_FILES['shop_image']['name']);
              $temp_name = preg_replace('/\s+/', '',$_FILES['shop_image']['tmp_name']);
              move_uploaded_file($temp_name,"assets/img/$shop_back_image");
        }
        else
        {
            $image = $old_image;
            $shop_back_image = preg_replace('/\s+/', '',$image);
        }

        $shop_date = date('Y-m-d');


        $shop_ban_data = array(
                'shop_banner_title' => strip_tags($this->input->post('shop_title')),
                'shop_banner_desc' => $this->input->post('shop_desc'),
                'shop_banner_back_image' => strip_tags($shop_back_image),
                'shop_banner_date' => strip_tags($shop_date)
              );
        $this->My_model->update_Shop_Banner_Data($ban_id,$shop_ban_data);
        redirect('Admin/banners');
      }
    }
    else
    {
      redirect('Admin/');
    }
  }

  public function delete_Shop_Banner()
  {
    if($this->session->userdata('isUserLoggedIn')  &&  $this->session->userdata('userType')=='Admin')
    {
      $ban_id = $this->input->get('ban_id');
      $this->My_model->delete_Shop_Banner($ban_id);
      redirect('Admin/banners');
    }
    else
    {
      redirect('Admin/');
    }
  }
  
}

?>