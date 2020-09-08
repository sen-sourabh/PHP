<?php 
Class All_pages extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();

		//Loading url helper
		$this->load->helper('url');

		//Load session library manually
		$this->load->library('session');

		if(!$this->session->userdata('username'))
		{
			redirect("Login/login");
		}

		//load model
		$this->load->model('All_page_model');

		//load database libray manually
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('index');
	} 

	public function allpage()
	{	
		//Count number of rows from table
		$result['countall'] = $this->All_page_model->selectallcount();

		//Count number of draft pages from table
		$result['countdraft'] = $this->All_page_model->selectdraftcount();

		//Count number of publish pages from table
		$result['countpublish'] = $this->All_page_model->selectpublishcount();

		//Display dynamically all dates from table
		$result['date'] = $this->All_page_model->selectalldates();

		//Display data of specific date from table
		if($this->input->post('delete'))
		{	
			$data = $this->input->post('delete_select');
			if($data == isset($_POST['delete_select']))
			{
				if($this->input->post('row_id'))
				{					
					foreach($this->input->post('row_id') as $row_id)
					{
						$this->All_page_model->deleteselected($row_id);
					}
				}
			}
			redirect("All_pages/allpage");
		}
		//Display data of specific date from table
		else if($this->input->post('filter'))
		{
			$query = $this->input->post('filterdate');
			$result['data'] = $this->All_page_model->selectpagebydate($query);

			//Display data from table on view page	
			$this->load->view('all_page',$result);
		}
		else
		{	
			//Take input from search box in view page
			$query = $this->input->post('search_page');
			$result['data'] = $this->All_page_model->selectpage($query);

			//Display data according to search on view page
			$this->load->view('all_page',$result);
		}
	}

	public function addnewpage()
	{
		//Dynamically display parent and template on view page
		$result['parent'] = $this->All_page_model->selectparent();
		$result['template'] = $this->All_page_model->selecttemplate();
		// echo "<pre>";
		// print_r($result['parent']);
		// print_r($result['template']);
		// exit;

		$this->load->view('page_add',$result);

		//Take input with publish and draft conditions
		if($this->input->post('publish'))
		{
			$author = "Admin";
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			
			$parent = $this->input->post('parent');
			// echo "<pre>";
			// print_r($parent);
			// $result = $this->All_page_model->selectparentbyid($parentid);
			// // echo "<pre>";
			// // print_r($result[0]->parent);
			// // exit;
			// $parent = $result[0]->parent;

			$template = $this->input->post('template');
			// $result = $this->All_page_model->selecttemplatebyid($templateid);
			// $template = $result[0]->template;
			// echo "<pre>";
			// print_r($template);
			

			$pageorder = $this->input->post('pageorder');

			$image = $_FILES['image']['name'];
			$temp_name = $_FILES['image']['tmp_name'];
			move_uploaded_file($temp_name,"uploads/$image");

			$status = "Publish";
			$date = date('Y-m-d');

			$this->All_page_model->insert_publish_page($title,$author,$content,$parent,$template,$pageorder,$image,$status,$date);
		}
		else if($this->input->post('save'))
		{
			$author = "Admin";
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			
			$parent = $this->input->post('parent');
			// echo "<pre>";
			// print_r($parent);

			// $result = $this->All_page_model->selectparentbyid($parentid);
			// // echo "<pre>";
			// // print_r($result[0]->parent);
			// // exit;
			// $parent = $result[0]->parent;

			$template = $this->input->post('template');
			// $result = $this->All_page_model->selecttemplatebyid($templateid);
			// $template = $result[0]->template;
			// echo "<pre>";
			// print_r($template);
			// exit;

			$pageorder = $this->input->post('pageorder');

			$image = $_FILES['image']['name'];
			$temp_name = $_FILES['image']['name'];
			move_uploaded_file($temp_name,"uploads/$image");
			
			$status = "Draft";
			$date = date('Y-m-d');

			$this->All_page_model->insert_save_page($title,$author,$content,$parent,$template,$pageorder,$image,$status,$date);
		}
	}

	public function editpage()
	{
		$id=$this->input->get('id');
		$result['data']=$this->All_page_model->selectpagerecordbyid($id);
		// echo "<pre>";
		// 	print_r($result['data'][0]->featuredimage);
		// 	exit;
		$old_image = $result['data'][0]->featuredimage;
		
		$result['parent'] = $this->All_page_model->selectparent();
		$result['template'] = $this->All_page_model->selecttemplate();
		$this->load->view('edit_page',$result);

		// if($this->input->post('delimage'))
		// {
		// 	$delimage = "";
		// 	$this->All_page_model->update_image_on_edit_page($id,$delimage);
		// 	return redirect("All_pages/editpage?id=$id");
		// }
		
		//Update data with publish and draft conditions
		if($this->input->post('updatepublish'))
		{
			$author = "Admin";
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			
			$parent = $this->input->post('parent');
			$template = $this->input->post('template');
			$pageorder = $this->input->post('pageorder');


			if($_FILES['newimage']['name'])
			{
				$newimage = $_FILES['newimage']['name'];
				$temp_name = $_FILES['newimage']['tmp_name'];
				move_uploaded_file($temp_name,"uploads/$newimage");
				$image = $newimage;
			}
			else
			{
				$image = $old_image;
			}
				
			// $image = $_FILES['image']['name'];
			// $temp_name = $_FILES['image']['tmp_name'];
			// move_uploaded_file($temp_name,"uploads/$image");

			$status = "Publish";
			$date = date('Y-m-d');

			$this->All_page_model->update_publish_page($id,$title,$author,$content,$parent,$template,$pageorder,$image,$status,$date);
		}
		else if($this->input->post('updatesave'))
		{
			$author = "Admin";
			$title = $this->input->post('title');
			$content = $this->input->post('content');

			$parent = $this->input->post('parent');
			// $result = $this->All_page_model->selectparentbyid($parentid);
			// echo "<pre>";
			// print_r($parent);
			
			// $parent = $result[0]->parent;

			$template = $this->input->post('template');
			// $result = $this->All_page_model->selecttemplatebyid($templateid);
			// $template = $result[0]->template;
			// echo "<pre>";
			// print_r($template);
			// exit;

			$pageorder = $this->input->post('pageorder');
			
			if($_FILES['newimage']['name'])
			{
				$newimage = $_FILES['newimage']['name'];
				$temp_name = $_FILES['newimage']['tmp_name'];
				move_uploaded_file($temp_name,"uploads/$newimage");
				$image = $newimage;
			}
			else
			{
				$image = $old_image;
			}

			// $image = $_FILES['image']['name'];
			// $temp_name = $_FILES['image']['name'];
			// move_uploaded_file($temp_name,"uploads/$image");
			
			$status = "Draft";
			$date = date('Y-m-d');

			$this->All_page_model->update_save_page($id,$title,$author,$content,$parent,$template,$pageorder,$image,$status,$date);
		}
	}

	//Breadcrumb published link function
	public function published()
	{
		$result['countall'] = $this->All_page_model->selectallcount();
		$result['countdraft'] = $this->All_page_model->selectdraftcount();
		$result['countpublish'] = $this->All_page_model->selectpublishcount();
		
		$result['date'] = $this->All_page_model->selectalldates();

		
		
		if($this->input->post('delete'))
		{	
			$data = $this->input->post('delete_select');
			if($data == isset($_POST['delete_select']))
			{
				if($this->input->post('row_id'))
				{					
					foreach($this->input->post('row_id') as $row_id)
					{
						$this->All_page_model->deleteselected($row_id);
					}
				}
			}
			redirect("All_pages/published");
		}
		//Display data of specific date from table
		else if($this->input->post('filter'))
		{
			$query = $this->input->post('filterdate');
			$result['data'] = $this->All_page_model->selectpublishpagebydate($query);
			//Display data from table on view page	
			$this->load->view('all_page',$result);
		}
		else
		{	
			//Take input from search box in view page
			$query = $this->input->post('search_page');
			$result['data'] = $this->All_page_model->selectpublishpage($query);
			$this->load->view('all_page',$result);
		}
	}

	//Breadcrumb draft link function
	public function draft()
	{
		$result['countall'] = $this->All_page_model->selectallcount();
		$result['countdraft'] = $this->All_page_model->selectdraftcount();
		$result['countpublish'] = $this->All_page_model->selectpublishcount();
		
		$result['date'] = $this->All_page_model->selectalldates();


		if($this->input->post('delete'))
		{	
			$data = $this->input->post('delete_select');
			if($data == isset($_POST['delete_select']))
			{
				if($this->input->post('row_id'))
				{					
					foreach($this->input->post('row_id') as $row_id)
					{
						$this->All_page_model->deleteselected($row_id);
					}
				}
			}
			redirect("All_pages/draft");
		}
		//Display data of specific date from table
		else if($this->input->post('filter'))
		{
			$query = $this->input->post('filterdate');
			$result['data'] = $this->All_page_model->selectdraftpagebydate($query);
			//Display data from table on view page	
			$this->load->view('all_page',$result);
		}
		else
		{	
			//Take input from search box in view page
			$query = $this->input->post('search_page');
			$result['data'] = $this->All_page_model->selectdraftpage($query);
			$this->load->view('all_page',$result);
		}
	}

	public function all_post()
	{
		redirect("All_post/all_post");
	}

	public function post_add()
	{
		redirect("All_post/post_add");
	}

	public function edit_post()
	{
		redirect("All_post/edit_post");
	}

	public function published_post()
	{
		redirect("All_post/published_post");
	}

	public function draft_post()
	{
		redirect("All_post/draft_post");
	}

	public function categories()
	{
		redirect("All_post/categories");
	}

	public function edit_category()
	{
		redirect("All_post/edit_category");
	}
}
?>