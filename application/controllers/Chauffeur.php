<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Chauffeur extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Chauffeur_model');
    } 

    /*
     * Listing of chauffeurs
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('chauffeur/index?');
        $config['total_rows'] = $this->Chauffeur_model->get_all_chauffeurs_count();
        $this->pagination->initialize($config);

        $data['chauffeurs'] = $this->Chauffeur_model->get_all_chauffeurs($params);
        
        $data['_view'] = 'chauffeur/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new chauffeur
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('matriculeChauffeur','MatriculeChauffeur','required');
		$this->form_validation->set_rules('nomChauffeur','NomChauffeur','required');
		$this->form_validation->set_rules('telephone','Telephone','is_unique[telephone]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'matriculeChauffeur' => $this->input->post('matriculeChauffeur'),
				'nomChauffeur' => $this->input->post('nomChauffeur'),
				'telephone' => $this->input->post('telephone'),
				'dateAjout' => date('Y-m-d H:i:s'),
				'adresseChauffeur' => $this->input->post('adresseChauffeur'),
            );
            
            $chauffeur_id = $this->Chauffeur_model->add_chauffeur($params);
            redirect('chauffeur/index');
        }
        else
        {            
            $data['_view'] = 'chauffeur/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a chauffeur
     */
    function edit($chauff_id)
    {   
        // check if the chauffeur exists before trying to edit it
        $data['chauffeur'] = $this->Chauffeur_model->get_chauffeur($chauff_id);
        
        if(isset($data['chauffeur']['chauff_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('matriculeChauffeur','MatriculeChauffeur','required');
			$this->form_validation->set_rules('nomChauffeur','NomChauffeur','required');
			$this->form_validation->set_rules('telephone','Telephone','is_unique[telephone]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'matriculeChauffeur' => $this->input->post('matriculeChauffeur'),
					'nomChauffeur' => $this->input->post('nomChauffeur'),
					'telephone' => $this->input->post('telephone'),
					
					'adresseChauffeur' => $this->input->post('adresseChauffeur'),
                );

                $this->Chauffeur_model->update_chauffeur($chauff_id,$params);            
                redirect('chauffeur/index');
            }
            else
            {
                $data['_view'] = 'chauffeur/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The chauffeur you are trying to edit does not exist.');
    } 

    /*
     * Deleting chauffeur
     */
    function remove($chauff_id)
    {
        $chauffeur = $this->Chauffeur_model->get_chauffeur($chauff_id);

        // check if the chauffeur exists before trying to delete it
        if(isset($chauffeur['chauff_id']))
        {
            $this->Chauffeur_model->delete_chauffeur($chauff_id);
            redirect('chauffeur/index');
        }
        else
            show_error('The chauffeur you are trying to delete does not exist.');
    }
    
}
