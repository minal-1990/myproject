<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
require_once APPPATH."core\Base_model.php";
class DB_install extends Base_model
{
	
	function __construct()
	{
		parent::__construct();
		$this->newdb=$this->load->database('db1',TRUE);
		 $this->load->dbforge($this->newdb);

	}	

	public function CreateTable_customer_master()
	{
		 $fields = array(
            		'cust_id' 		=> array(
					                    'type' => 'INT',					                 
					                    'auto_increment' => TRUE
							            ),
		            'custtype'		=> array(
					                    'type' =>'INT',
					                    'constraint' => '2'					                    
							            ),
		            'custid'		=> array(
					                    'type' =>'BIGINT',
					                    'constraint' => '13',
					                    'unique' => TRUE					                    
							            ),
		            'allianceid'		=> array(
					                    'type' =>'BIGINT',
					                    'constraint' => '20'					                    
							            ),
		            'entity_pan'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '10'					                    
							            ),
		            'entity_name'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '200'					                    
							            ),
		            'address'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '400'					                    
							            ),
		            'landmark'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '200'					                    
							            ),
		            'entity_email'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'pin'		=> array(
					                    'type' =>'INT',
					                    'constraint' => '6'					                    
							            ),
		            'ph_no'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '30'					                    
							            ),
		            'res_person'=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'res_email'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'res_ph'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '30'					                    
							            ),
		            'hr_person'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'hr_email'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'hr_ph'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'vp_person'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'vp_email'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'vp_ph'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),


		            'dh_person'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'dh_email'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'dh_ph'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'dh_mgr'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'mgr_email'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'mgr_ph'=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'dh_vp'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'dh_vp_email'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'dh_vp_ph'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '100'					                    
							            ),
		            'enable'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '5'					                    
							            ),
		            'branch_code'		=> array(
					                    'type' =>'INT',
					                    'constraint' => '4'					                    
							            ),
		            'spgid'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '200'					                    
							            ),
		            'state'		=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '200'					                    
							            ),
		            // 'dat'		=> array(		
					         //            'type' 	=>'TIMESTAMP',
					         //           	'default' => 'CURRENT_TIMESTAMP'					                   			                    
							       //      )
		             'dat TIMESTAMP DEFAULT CURRENT_TIMESTAMP'

    );
    $this->dbforge->add_key('cust_id', TRUE);
    $this->dbforge->add_field($fields);
    return $this->dbforge->create_table('customer_master',TRUE);
	}
	public function DropTable_customer_master()
	{
		$this->dbforge->drop_table('customer_master');
	}

	public function CreateTable_custid_backup($value='')
	{
		 $fields = array(
            		'SrNo' 		=> array(
					                    'type' => 'INT',					                 
					                    'auto_increment' => TRUE
							            ),
		            'custtype'		=> array(
					                    'type' =>'INT',
					                    'constraint' => '2'					                    
							            ),
		            'custid'		=> array(
					                    'type' =>'BIGINT',
					                    'constraint' => '13',
					                    'unique' => TRUE					                    
							            ),
		            'allianceid'	=> array(
					                    'type' =>'BIGINT',
					                    'constraint' => '20'					                    
							            ),
		            'entity_name'	=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '200'					                    
							            ),
		            'entity_email'	=> array(
					                    'type' =>'VARCHAR',
					                    'constraint' => '200'					                    
							            ),
		            'pin'			=> array(
		            					'type' =>'INT',
					                    'constraint' => '11'		            						
		            		            ),
		            'ph_no'			=> array(
		            					'type' =>'VARCHAR',
					                    'constraint' => '20'	
		            						),
		             'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
		            		);
	$this->dbforge->add_key('SrNo', TRUE);
    $this->dbforge->add_field($fields);
    return $this->dbforge->create_table('custid_backup',TRUE);
		
	}
	public function DropTable_custid_backup()
	{
		$this->dbforge->drop_table('custid_backup');
	}


}	