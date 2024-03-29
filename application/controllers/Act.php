<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
trait Act {

	/* show display create act form */
	public function CreateActs($page_data='')
	{
		$this->load->model('Act_model');
		 if ($page_data['access'][$this->session->TYPE] == TRUE) {
		 	 $this->data['page_title'] = $page_data['page_title'];
			 $this->data['where'] = 'Acts';
			 $this->data['sub_menu'] = 'Create';
			 $this->data['user_type'] = $page_data['user_type'];
			 $this->data['menu'] = $page_data['menu'];

			 // act detatails data
			  $this->data['act_data']=array('act_code'=> $this->Act_model->get_act_code(),
			  								'data'    => $this->Act_model->get_acts()
											);
			 $this->render('create_act');
		 }
		 else
		 {
		 	echo "404 no access";
		 }				
		
	}
	public function fillup_acts()
	{ 
		if (!empty($this->input->post('acts'))) {
			$save_acts = array('act_code' 	=> $this->input->post('act_code'),
								'act' 		=> $this->input->post('act_name'),
								'shortname' => $this->input->post('shortname'),
								'act_type' 	=> $this->input->post('act_type') );			
		}
		elseif (!empty($this->input->post('sub_acts'))) {
			$save_acts = array('act_code' 	=> $this->input->post('act_code'),
								'act' 		=> $this->input->post('act_name'),
								'shortname' => $this->input->post('shortname'),
								'act_type' 	=> $this->input->post('act_type'),
								'pcr_code' 	=> $this->input->post('pcr_code'),
								'Particular'=> $this->input->post('particular'),
								'freq' 		=> $this->input->post('freq'),
								'weight' 	=> $this->input->post('weight'),
								'obligation'=> $this->input->post('obligation'),
								'due_date' 	=> $this->input->post('due_date'),
								'stat_date' => $this->input->post('stat_date')
								 );
		}
		
		return $this->security->xss_clean($save_acts);
	}
	public function act_rules()
	{
		$main_act_rules = array(
				               array(
				                     'field'   => 'act_code', 
				                     'label'   => 'Act Code', 
				                     'rules'   => 'required'
				                  ),
				               array(
				                     'field'   => 'act_name', 
				                     'label'   => 'Act Name', 
				                     'rules'   => 'required'
				                  ),
				                array(
				                     'field'   => 'shortname', 
				                     'label'   => 'Short Name', 
				                     'rules'   => 'required'
				                  ),
				                 array(
				                     'field'   => 'act_type', 
				                     'label'   => 'Act TYPE', 
				                     'rules'   => 'required'
				                  )
				           );
		return $main_act_rules;
	}
	public function sub_act_rules()
	{
		$main_act_rules = array(
				               array(
				                     'field'   => 'pcr_code', 
				                     'label'   => 'Sub Act Code', 
				                     'rules'   => 'required'
				                  ),
				               array(
				                     'field'   => 'act_code', 
				                     'label'   => 'Act Name', 
				                     'rules'   => 'required'
				                  ),
				                array(
				                     'field'   => 'weight', 
				                     'label'   => 'Weight', 
				                     'rules'   => 'required'
				                  ),
				                 array(
				                     'field'   => 'obligation', 
				                     'label'   => 'Obligation', 
				                     'rules'   => 'required'
				                  ),
				                 array(
				                     'field'   => 'freq', 
				                     'label'   => 'Frequency', 
				                     'rules'   => 'required'
				                  ),
				                 array(
				                     'field'   => 'due_date', 
				                     'label'   => 'Due Date', 
				                     'rules'   => 'required'
				                  ),
				                  array(
				                     'field'   => 'stat_date', 
				                     'label'   => 'Statutary  Date', 
				                     'rules'   => 'required'
				                  )
				           );
		return $main_act_rules;
	}

	/* insert acts in database */
	public function SaveActs($user)
	{
		$this->load->model('Act_model');
		$ruls=!empty($this->input->post('acts'))?$this->act_rules():$this->sub_act_rules();
		$this->form_validation->set_rules($ruls);
		 if ($this->form_validation->run() == FALSE) { 
	         	// echo validation_errors();
	         	 put_msg(validation_errors());
	         	redirect(base_url( $user.'/act/create'));   
	        } 
	        else
	        {
	         	// return TRUE;
	         	
	         	
	       
	         	var_dump($this->fillup_acts());
	         
	         	// if ($this->Act_model->create_act($this->fillup_acts())) {
	         		
	         	// 	 put_msg("your Act is registerd successfully..!!");
	         	// 	 // redirect(base_url( $user.'/act/create'));
	         	// }
	         	// else
	         	// {
	         	// 	put_msg("somthing went wronge...!");
	         	// 	 // redirect(base_url( $user.'/act/create'));
	         	// }
	        }
		
	}
	/* delect acto to database */
	public function RemoveActs($value='')
	{
		$this->load->model('Act_model');
	}
	/* update acts to database */
	public function EditActs($value='')
	{
		$this->load->model('Act_model');
	}

	/*  process of sub act creation with CRUD OPERATION*/
	
	public function get_sub_act_id($value='')
	{
		$this->load->model('Act_model');

		$e=$this->Act_model->get_pcr_code($this->input->post('act_code'));
			echo $e;
	}

	/* insert acts in database */
	public function SaveSubActs($user)
	{
		$this->load->model('Act_model');
		
		$this->form_validation->set_rules($this->act_rules());
		 if ($this->form_validation->run() == FALSE) { 
	         	// echo validation_errors();
	         	 put_msg(validation_errors());
	         	redirect(base_url( $user.'/act/create'));   
	        } 
	        else
	        {
	         	// return TRUE;         	
	       
	         	var_dump($this->fillup_acts());
	         
	         	// if ($this->Act_model->create_act($this->fillup_acts())) {
	         		
	         	// 	 put_msg("your Act is registerd successfully..!!");
	         	// 	 // redirect(base_url( $user.'/act/create'));
	         	// }
	         	// else
	         	// {
	         	// 	put_msg("somthing went wronge...!");
	         	// 	 // redirect(base_url( $user.'/act/create'));
	         	// }
	        }
		
	}
	/* delect acto to database */
	public function RemoveSubActs($value='')
	{
		$this->load->model('Act_model');
	}
	/* update acts to database */
	public function EditSubActs($value='')
	{
		$this->load->model('Act_model');
	}


}