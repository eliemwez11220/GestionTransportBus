<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mouvement extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mouvement_model');
    } 

    /*
     * Listing of mouvements
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mouvement/index?');
        $config['total_rows'] = $this->Mouvement_model->get_all_mouvements_count();
        $this->pagination->initialize($config);

        $data['mouvements'] = $this->Mouvement_model->get_all_mouvements($params);
        
        $data['_view'] = 'mouvement/index';
        $this->load->view('layouts/main',$data);
    }
 function rapport()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mouvement/index?');
        $config['total_rows'] = $this->Mouvement_model->get_all_mouvements_count();
        $this->pagination->initialize($config);

        $data['mouvements'] = $this->Mouvement_model->get_all_mouvements($params);
        
        $data['_view'] = 'rapport/mouvement';
        $this->load->view('layouts/main',$data);
    }
    /*
     * Adding a new mouvement
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('bus_sid','Bus Sid','required');
		$this->form_validation->set_rules('chauf_sid','Chauf Sid','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'bus_sid' => $this->input->post('bus_sid'),
				'chauf_sid' => $this->input->post('chauf_sid'),
				'dateMouvement' => $this->input->post('dateMouvement'),
				'heureDepart' => $this->input->post('heureDepart'),
				'heureArrivee' => $this->input->post('heureArrivee'),
				'destination' => $this->input->post('destination'),
				'mvm_observation' => $this->input->post('mvm_observation'),
            );
            
            $mouvement_id = $this->Mouvement_model->add_mouvement($params);
            redirect('mouvement/index');
        }
        else
        {
			$this->load->model('Bus_model');
			$data['all_bus'] = $this->Bus_model->get_all_bus();

			$this->load->model('Chauffeur_model');
			$data['all_chauffeurs'] = $this->Chauffeur_model->get_all_chauffeurs();
            
            $data['_view'] = 'mouvement/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a mouvement
     */
    function edit($mvm_id)
    {   
        // check if the mouvement exists before trying to edit it
        $data['mouvement'] = $this->Mouvement_model->get_mouvement($mvm_id);
        
        if(isset($data['mouvement']['mvm_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('bus_sid','Bus Sid','required');
			$this->form_validation->set_rules('chauf_sid','Chauf Sid','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'bus_sid' => $this->input->post('bus_sid'),
					'chauf_sid' => $this->input->post('chauf_sid'),
					'dateMouvement' => $this->input->post('dateMouvement'),
					'heureDepart' => $this->input->post('heureDepart'),
					'heureArrivee' => $this->input->post('heureArrivee'),
					'destination' => $this->input->post('destination'),
					'mvm_observation' => $this->input->post('mvm_observation'),
                );

                $this->Mouvement_model->update_mouvement($mvm_id,$params);            
                redirect('mouvement/index');
            }
            else
            {
				$this->load->model('Bus_model');
				$data['all_bus'] = $this->Bus_model->get_all_bus();

				$this->load->model('Chauffeur_model');
				$data['all_chauffeurs'] = $this->Chauffeur_model->get_all_chauffeurs();

                $data['_view'] = 'mouvement/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The mouvement you are trying to edit does not exist.');
    } 

    /*
     * Deleting mouvement
     */
    function remove($mvm_id)
    {
        $mouvement = $this->Mouvement_model->get_mouvement($mvm_id);

        // check if the mouvement exists before trying to delete it
        if(isset($mouvement['mvm_id']))
        {
            $this->Mouvement_model->delete_mouvement($mvm_id);
            redirect('mouvement/index');
        }
        else
            show_error('The mouvement you are trying to delete does not exist.');
    }
    
}
