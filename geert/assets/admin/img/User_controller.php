<?php 
class User_controller extends Ci_controller{

function index(){
       $this->load->view('index'); 
    }

function add_announcement(){
	$payment_id=$_GET['id'];
	$result['data']=$this->My_model->plans_announcement($payment_id);
	$result['dat']=$this->My_model->plans_detail();
    $this->load->view('add-announcement',$result); 
    }
function edit_announcement(){

$uniq_id=$_GET['id'];
//$payment_id=$_GET['pay_id'];
   $result['data']=$this->My_model->edit_announcement_first($uniq_id);
   $result['dat']=$this->My_model->edit_announcement_firs($uniq_id);
   $result['da']=$this->My_model->edit_announcement_fir($uniq_id);
 $this->load->view('edit_announcement',$result); 
}

function edit_announce(){
$uniq_id=$this->input->post('uniq_id');
$formData = array(
        'add_page' =>$this->input->post('announcement'),
        'no_of_deceased'=> $this->input->post('deceased'),
        'add_title' =>$this->input->post('title'),
        'oname'=> $this->input->post('first_name'),
        'dob'=> $this->input->post('date_of_birth'),
        'dod'=>$this->input->post('date_of_death'),
        'oname2' =>$this->input->post('first_name__second'),
        'place'=> $this->input->post('birth_place'),
        'dob2'=> $this->input->post('date_of_birth_third'),
        'dod2' =>$this->input->post('date_of_death_third'),
       'adddesc' =>$this->input->post('descrition'),
        'dt'=>date('Y-m-d'),
        'place2'=>$this->input->post('birth_place_second'),
         'uniq_id' =>$this->input->post('uniq_id'),
         'frame' =>$this->input->post('selFrameName'),
);

$formDat = array(
	//'image'=>$images_first,
           'uniq_id' =>$this->input->post('uniq_id'),
        'SelectedPackagePrice' => $this->input->post('package_price'),
        'SelectedPackage' => $this->input->post('plan_day'),
        'Announcementfor' =>$this->input->post('announcement'),
        'NumberofDeceased'=> $this->input->post('deceased'),
        'AdditionalServiceOffered' =>$this->input->post('service_offered_for'),
        'StartDate'=> $this->input->post('start_date_for'),
        'end_date'=> $this->input->post('end_date_for'),
        'AdditionalDescrition' => $this->input->post('descrition'),
        'date' =>date('Y-m-d'),
        'is_active' => '1',

);

$formDa = array(
	/*'image'=>$image_second,
 'image2'=>$images_third,*/
          'uniq_id' =>$this->input->post('uniq_id'),
        'plan_name' =>$this->input->post('plan_day'),
        'dnumber'=> $this->input->post('deceased'),
        'Title' =>$this->input->post('title'),
        'FullName'=> $this->input->post('first_name'),
        'SecondName' => $this->input->post('second_name'),
        'LastName' => $this->input->post('surname'),
        'PreferredNameonNotice' => $this->input->post('preferred_name'),
        'dob'=> $this->input->post('date_of_birth'),
        'dod'=>$this->input->post('date_of_death'),
        'Title2' => $this->input->post('title_second'),
        'FullName2' =>$this->input->post('first_name__second'),
        'SecondName2' => $this->input->post('second_name_second'),
        'LastName2' => $this->input->post('surname_second'),
        'PlaceofBirth2'=> $this->input->post('birth_place_second'),
        'PreferredNameonNotice2' => $this->input->post('preferred_name_second'),
        'dob2'=> $this->input->post('date_of_birth_third'),
        'dod2' =>$this->input->post('date_of_death_third'),
        'date'=>date('Y-m-d'),
);

$this->My_model->updateAll_deceased('deceased',$formDa,$uniq_id);
$resul=$this->My_model->updateAll_announcement('announcement',$formDat,$uniq_id);
 $this->My_model->updateAll('addNotice',$formData,$uniq_id);
redirect('view_announcement_second?id='.$uniq_id);
}
function notice(){

    	 $result['data']=$this->My_model->plans_detail();
    /* print_r($result['data']);
     exit();*/
       $this->load->view('notice',$result); 


    }
  function view_announcement(){

                $image_second = $_FILES['image_second']['name'];
                $temp_name = $_FILES['image_second']['tmp_name'];
                  move_uploaded_file($temp_name,"image/$image_second");
              $files = $_FILES;
              $count = count($_FILES['image_first']['name']);
              for($i=0; $i<$count; $i++)
              {
                  $_FILES['image_first']['name'] = $files['image_first']['name'][$i];
                  $_FILES['image_first']['tmp_name'] = $files['image_first']['tmp_name'][$i];
                  $image_first = $_FILES['image_first']['name'];
                $temp_name = $_FILES['image_first']['tmp_name'];
                  move_uploaded_file($temp_name,"image/$image_first");
                  $dataInfo[$i] = $image_first;     
              }
              $image_first = array($dataInfo);
              $images_first = implode(' ',$image_first[0]); 
              $files = $_FILES;
              $count = count($_FILES['image_third']['name']);
              for($i=0; $i<$count; $i++)
              {
                  $_FILES['image_third']['name'] = $files['image_third']['name'][$i];
                  $_FILES['image_third']['tmp_name'] = $files['image_third']['tmp_name'][$i];
                  $image_third = $_FILES['image_third']['name'];
                $temp_name = $_FILES['image_third']['tmp_name'];
                  move_uploaded_file($temp_name,"image/$image_third");
                  $dataInfo[$i] = $image_third;     
              }
              $image_third = array($dataInfo);
              $images_third = implode(' ',$image_third[0]); 
 $formData = array(
        'add_page' =>$this->input->post('announcement'),
        'no_of_deceased'=> $this->input->post('deceased'),
        'add_title' =>$this->input->post('title'),
        'oname'=> $this->input->post('first_name'),
        'dob'=> $this->input->post('date_of_birth'),
        'dod'=>$this->input->post('date_of_death'),
        'oname2' =>$this->input->post('first_name__second'),
        'place'=> $this->input->post('birth_place'),
        'dob2'=> $this->input->post('date_of_birth_third'),
        'dod2' =>$this->input->post('date_of_death_third'),
       'adddesc' =>$this->input->post('descrition'),
        'dt'=>date('Y-m-d'),
        'place2'=>$this->input->post('birth_place_second'),
         'uniq_id' =>$this->input->post('uniq_id'),
         'frame' =>$this->input->post('selFrameName'),
);

$formDat = array(
	'image'=>$images_first,
           'uniq_id' =>$this->input->post('uniq_id'),
        'SelectedPackagePrice' => $this->input->post('package_price'),
        'SelectedPackage' => $this->input->post('plan_day'),
        'Announcementfor' =>$this->input->post('announcement'),
        'NumberofDeceased'=> $this->input->post('deceased'),
        'AdditionalServiceOffered' =>$this->input->post('service_offered_for'),
        'StartDate'=> $this->input->post('start_date_for'),
        'end_date'=> $this->input->post('end_date_for'),
        'AdditionalDescrition' => $this->input->post('descrition'),
        'date' =>date('Y-m-d'),
        'is_active' => '1',

);

$formDa = array(
	'image'=>$image_second,
 'image2'=>$images_third,
          'uniq_id' =>$this->input->post('uniq_id'),
        'plan_name' =>$this->input->post('plan_day'),
        'dnumber'=> $this->input->post('deceased'),
        'Title' =>$this->input->post('title'),
        'FullName'=> $this->input->post('first_name'),
        'SecondName' => $this->input->post('second_name'),
        'LastName' => $this->input->post('surname'),
        'PreferredNameonNotice' => $this->input->post('preferred_name'),
        'dob'=> $this->input->post('date_of_birth'),
        'dod'=>$this->input->post('date_of_death'),
        'Title2' => $this->input->post('title_second'),
        'FullName2' =>$this->input->post('first_name__second'),
        'SecondName2' => $this->input->post('second_name_second'),
        'LastName2' => $this->input->post('surname_second'),
        'PlaceofBirth2'=> $this->input->post('birth_place_second'),
        'PreferredNameonNotice2' => $this->input->post('preferred_name_second'),
        'dob2'=> $this->input->post('date_of_birth_third'),
        'dod2' =>$this->input->post('date_of_death_third'),
        'date'=>date('Y-m-d'),
);

$this->My_model->insertAll_deceased('deceased',$formDa);
$resul=$this->My_model->insertAll_announcement('announcement',$formDat);
         $id = $this->My_model->insertAll('addNotice',$formData);
         $result=$this->My_model->insertAll_uniq_id($id);
 $uniq_id=$result[0]->uniq_id;
 $payment=$resul[0]->$SelectedPackagePrice;
        //print_r($uniq_id);
        
         if($id){
        redirect('edit_announcement?id='.$uniq_id);
  }

}

function poems(){
       $this->load->view('poems'); 
    }
function education(){
       $this->load->view('education'); 
    }
function contact(){
	 $result['data']=$this->My_model->contact_detail();
       $this->load->view('contact',$result); 
    }
function charity(){
       $this->load->view('charity'); 
    }
function detail_page(){
       $this->load->view('detail_page'); 
  }

 function view_announcement_second(){
 	$uniq_id=$_GET['id'];
 	 $result['data']=$this->My_model->edit_announcement_first($uniq_id);
     $result['dat']=$this->My_model->edit_announcement_firs($uniq_id);
     $result['da']=$this->My_model->edit_announcement_fir($uniq_id);
    $this->load->view('View_ Announcement',$result);
  }

}
?>