<?php 
Class All_post extends CI_Controller
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
		$this->load->model('All_post_model');

		//load database libray manually
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function allpage()
	{
		redirect("All_pages/allpage");
	}

	public function addnewpage()
	{
		redirect("All_pages/addnewpage");
	}

	public function editpage()
	{
		redirect("All_pages/editpage");
	}

	public function published()
	{
		redirect("All_pages/published");
	}

	public function draft()
	{
		redirect("All_pages/draft");
	}	

	public function all_post()
	{
		//Count number of rows from table
		$result['countallpost'] = $this->All_post_model->selectallpostcount();


		//Count number of draft pages from table
		$result['countdraftpost'] = $this->All_post_model->selectdraftpostcount();

		//Count number of publish pages from table
		$result['countpublishpost'] = $this->All_post_model->selectpublishpostcount();

		//Display dynamically all dates from table
		$result['date'] = $this->All_post_model->selectallpostdates();

		//Bulk option delete
		if($this->input->post('deleteposttop'))
		{	
			$data = $this->input->post('delete_selected_post_top');

			if($data == isset($_POST['delete_selected_post_top']))
			{
				if($this->input->post('post_id'))
				{	
					foreach($this->input->post('post_id') as $post_id)
					{	
						$this->All_post_model->deleteselectedpost($post_id);
					}
				}
			}
			redirect("All_post/all_post");
		}
		else if($this->input->post('deletepostbottom'))
		{	
			$data = $this->input->post('delete_selected_post_bottom');
					
			if($data == isset($_POST['delete_selected_post_bottom']))
			{
				if($this->input->post('post_id'))
				{					
					foreach($this->input->post('post_id') as $post_id)
					{
						$this->All_post_model->deleteselectedpost($post_id);
					}
				}
			}
			redirect("All_post/all_post");
		}
		//Display data of specific date from table
		else if($this->input->post('searchdate'))
		{
			$query = $this->input->post('filterdate');
			$result['data'] = $this->All_post_model->selectpostbydate($query);
			//Display data from table on view page	
			$this->load->view('all_post',$result);
		}
		else
		{
			$query = $this->input->post('searchbox');
			$result['data'] = $this->All_post_model->selectallpost($query);
			$this->load->view('all_post',$result);	
		}	
	}
	
	public function post_add()
	{
		$i=0;

		$result['category'] = $this->All_post_model->selectcategory();
		$this->load->view('post_add',$result);

		if($this->input->post('publish'))
		{	
			$title = $this->input->post('title');
			$author = "Admin";
			$content = $this->input->post('content');
			
			$categoryid = $this->input->post('category');
			foreach ($categoryid as $ids) 
			{
				$result = $this->All_post_model->selectrecordcategorybyid($ids);

				$cat_id = $result[0]->id;
				$this->All_post_model->updaterecordcategorybyid($cat_id);
				$this->result['cat_name'] = $this->All_post_model->selectcategoryname($cat_id);

				$res[$i]=array(
		          	  'cat_name' => $this->result['cat_name'][0]->categories
            	);
            	$arraylength = $i++;
			}
			$categories = "";
			for ($i=0; $i <= $arraylength; $i++)
			{ 
				$categories .= implode(' ',$res[$i]);
				$categories .= " ";
			}
			$categories = implode(' ',(array)$categories);
			// echo $categories;
			// exit;
			
			$status = "Publish";
			$postdate = date('Y-m-d');

			$this->All_post_model->insert_publish_post($title,$author,$content,$categories,$status,$postdate);
		}
		else if($this->input->post('save'))
		{
			$title = $this->input->post('title');
			$author = "Admin";
			$content = $this->input->post('content');
			
			$categoryid = $this->input->post('category');
			foreach ($categoryid as $ids) 
			{
				$result = $this->All_post_model->selectrecordcategorybyid($ids);

				$cat_id = $result[0]->id;
				$this->All_post_model->updaterecordcategorybyid($cat_id);
				$this->result['cat_name'] = $this->All_post_model->selectcategoryname($cat_id);

				$res[$i]=array(
		          	  'cat_name' => $this->result['cat_name'][0]->categories
            	);
            	$arraylength = $i++;
			}
			$categories = "";
			for ($i=0; $i <= $arraylength; $i++)
			{ 
				$categories .= implode(' ',$res[$i]);
				$categories .= " ";
			}
			$categories = implode(' ',(array)$categories);
			// echo $categories;
			// exit;
			
			$status = "Draft";
			$postdate = date('Y-m-d');

			$this->All_post_model->insert_save_post($title,$author,$content,$categories,$status,$postdate);
		}
	}

	public function edit_post()
	{
		$i=0;

		$id=$this->input->get('id');
		$result['data']=$this->All_post_model->selectpostrecordbyid($id);
		
		$result['category'] = $this->All_post_model->selectcategory();
		$this->load->view('edit_post',$result);

		if($this->input->post('updatepublish'))
		{
			$title = $this->input->post('title');
			$author = "Admin";
			$content = $this->input->post('content');
			
			$categoryid = $this->input->post('category');
			foreach ($categoryid as $ids) 
			{
				$result = $this->All_post_model->selectrecordcategorybyid($ids);

				$cat_id = $result[0]->id;
				$this->All_post_model->updaterecordcategorybyid($cat_id);
				$this->result['cat_name'] = $this->All_post_model->selectcategoryname($cat_id);

				$res[$i]=array(
		          	  'cat_name' => $this->result['cat_name'][0]->categories
            	);
            	$arraylength = $i++;
			}
			$categories = "";
			for ($i=0; $i <= $arraylength; $i++)
			{ 
				$categories .= implode(' ',$res[$i]);
				$categories .= " ";
			}
			$categories = implode(' ',(array)$categories);
			// echo $categories;
			// exit;
			
			$status = "Publish";
			$postdate = date('Y-m-d');

			$this->All_post_model->update_publish_post($id,$title,$author,$content,$categories,$status,$postdate);
		}
		else if($this->input->post('updatesave'))
		{
			$title = $this->input->post('title');
			$author = "Admin";
			$content = $this->input->post('content');
			$categoryid = $this->input->post('category');
			foreach ($categoryid as $ids) 
			{
				$result = $this->All_post_model->selectrecordcategorybyid($ids);

				$cat_id = $result[0]->id;
				$this->All_post_model->updaterecordcategorybyid($cat_id);
				$this->result['cat_name'] = $this->All_post_model->selectcategoryname($cat_id);
	
				$res[$i]=array(
		          	  'cat_name' => $this->result['cat_name'][0]->categories
            	);
            	$arraylength = $i++;
			}
			$categories = "";
			for ($i=0; $i <= $arraylength; $i++)
			{ 
				$categories .= implode(' ',$res[$i]);
				$categories .= " ";
			}
			$categories = implode(' ',(array)$categories);
			// echo $categories;
			// exit;

			$status = "Draft";
			$postdate = date('Y-m-d');

			$this->All_post_model->update_save_post($id,$title,$author,$content,$categories,$status,$postdate);
		}
	}

	//Breadcrumb published link function
	public function published_post()
	{
		$result['countallpost'] = $this->All_post_model->selectallpostcount();
		$result['countdraftpost'] = $this->All_post_model->selectdraftpostcount();
		$result['countpublishpost'] = $this->All_post_model->selectpublishpostcount();

		//Display dynamically all dates from table
		$result['date'] = $this->All_post_model->selectallpostdates();

		if($this->input->post('deleteposttop'))
		{	
			$data = $this->input->post('delete_selected_post_top');

			if($data == isset($_POST['delete_selected_post_top']))
			{
				if($this->input->post('post_id'))
				{	
					foreach($this->input->post('post_id') as $post_id)
					{
						$this->All_post_model->deleteselectedpost($post_id);
					}
				}
			}
			redirect("All_post/published_post");
		}
		else if($this->input->post('deletepostbottom'))
		{	
			$data = $this->input->post('delete_selected_post_bottom');
					
			if($data == isset($_POST['delete_selected_post_bottom']))
			{
				if($this->input->post('post_id'))
				{					
					foreach($this->input->post('post_id') as $post_id)
					{
						$this->All_post_model->deleteselectedpost($post_id);
					}
				}
			}
			redirect("All_post/published_post");
		}
		//Display data of specific date from table
		else if($this->input->post('searchdate'))
		{
			$query = $this->input->post('filterdate');
			$result['data'] = $this->All_post_model->selectpublishpostbydate($query);
			//Display data from table on view page	
			$this->load->view('all_post',$result);
		}
		else
		{
			$query = $this->input->post('searchbox');
			//Display all published data
			$result['data'] = $this->All_post_model->selectpublishpost($query);
			$this->load->view('all_post',$result);
		}
	}

	//Breadcrumb draft link function
	public function draft_post()
	{
		$result['countallpost'] = $this->All_post_model->selectallpostcount();
		$result['countdraftpost'] = $this->All_post_model->selectdraftpostcount();
		$result['countpublishpost'] = $this->All_post_model->selectpublishpostcount();

		//Display dynamically all dates from table
		$result['date'] = $this->All_post_model->selectallpostdates();

		if($this->input->post('deleteposttop'))
		{	
			$data = $this->input->post('delete_selected_post_top');

			if($data == isset($_POST['delete_selected_post_top']))
			{
				if($this->input->post('post_id'))
				{	
					foreach($this->input->post('post_id') as $post_id)
					{
						$this->All_post_model->deleteselectedpost($post_id);
					}
				}
			}
			redirect("All_post/draft_post");
		}
		else if($this->input->post('deletepostbottom'))
		{	
			$data = $this->input->post('delete_selected_post_bottom');
					
			if($data == isset($_POST['delete_selected_post_bottom']))
			{
				if($this->input->post('post_id'))
				{					
					foreach($this->input->post('post_id') as $post_id)
					{
						$this->All_post_model->deleteselectedpost($post_id);
					}
				}
			}
			redirect("All_post/draft_post");
		}
		//Display data of specific date from table
		else if($this->input->post('searchdate'))
		{
			$query = $this->input->post('filterdate');
			$result['data'] = $this->All_post_model->selectdraftpostbydate($query);
			//Display data from table on view page	
			$this->load->view('all_post',$result);
		}
		else
		{
			$query = $this->input->post('searchbox');
			//Display all draft data
			$result['data'] = $this->All_post_model->selectdraftpost($query);
			$this->load->view('all_post',$result);
		}
	}

	//Add New Category Function for category page
	public function categories()
	{	
		//Search category by name or All data for table
		$query = $this->input->post('searchcategory');
		$result['data'] = $this->All_post_model->selectcategoryrecords($query);

		//retrive categories from database for form
		$result['category'] = $this->All_post_model->selectcategory();
		$this->load->view('categories',$result);

		//Bulk option delete
		if($this->input->post('deletecattop'))
		{	
			$data = $this->input->post('delete_cat_top');

			if($data == isset($_POST['delete_cat_top']))
			{
				if($this->input->post('cat_id'))
				{	
					foreach($this->input->post('cat_id') as $cat_id)
					{
						$this->All_post_model->deleteselectedcat($cat_id);
					}
				}
			}
			redirect("All_post/categories");
		}
		else if($this->input->post('deletecatbottom'))
		{	
			$data = $this->input->post('delete_cat_bottom');
					
			if($data == isset($_POST['delete_cat_bottom']))
			{
				if($this->input->post('cat_id'))
				{					
					foreach($this->input->post('cat_id') as $cat_id)
					{
						$this->All_post_model->deleteselectedcat($cat_id);
					}
				}
			}
			redirect("All_post/categories");
		}
		//Add new category
		else if($this->input->post('addnewcategory'))
		{
			$categoryname = $this->input->post('categoryname');
			$slug = $this->input->post('slug');
			$parentcategory = $this->input->post('parentcategory');
			$description = $this->input->post('description');
			$count = 0;

			$this->All_post_model->insert_category($categoryname,$slug,$parentcategory,$description,$count);
			redirect("All_post/categories");
		}
	}

	//Edit or Update Category for category page
	public function edit_category()
	{	
		//Retrive categories from database
		$result['category'] = $this->All_post_model->selectcategory();
		
		//Get category data by id from database
		$id = $this->input->get('id');
		$result['data'] = $this->All_post_model->selectcategorybyid($id);
		$this->load->view('edit_category',$result);

		//Update category data
		if($this->input->post('updatecategory'))
		{
			$categoryname = $this->input->post('categoryname');
			$slug = $this->input->post('slug');
			$parentcategory = $this->input->post('parentcategory');
			$description = $this->input->post('description');
			$count = 0;

			$this->All_post_model->update_category($id,$categoryname,$slug,$parentcategory,$description,$count);
			redirect('All_post/categories');
		}
	}
}

?>