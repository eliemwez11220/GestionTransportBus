<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Entretien extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Entretien_model');
    } 

    /*
     * Listing of entretiens
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('entretien/index?');
        $config['total_rows'] = $this->Entretien_model->get_all_entretiens_count();
        $this->pagination->initialize($config);

        $data['entretiens'] = $this->Entretien_model->get_all_entretiens($params);
        
        $data['_view'] = 'entretien/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new entretien
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('bus_sid','Bus Sid','required');
		$this->form_validation->set_rules('dateEntretien','DateEntretien','required');
		$this->form_validation->set_rules('mec_sid','Mec Sid','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'bus_sid' => $this->input->post('bus_sid'),
				'mec_sid' => $this->input->post('mec_sid'),
				'dateEntretien' => $this->input->post('dateEntretien'),
				'etatBus' => $this->input->post('etatBus'),
				'fraisEntretien' => $this->input->post('fraisEntretien'),
				'panneDetectee' => $this->input->post('panneDetectee'),
				'pieceEndommagee' => $this->input->post('pieceEndommagee'),
				'ent_observation' => $this->input->post('ent_observation'),
            );
            
            $entretien_id = $this->Entretien_model->add_entretien($params);
            redirect('entretien/index');
        }
        else
        {
			$this->load->model('Bus_model');
			$data['all_bus'] = $this->Bus_model->get_all_bus();

			$this->load->model('Mecanicien_model');
			$data['all_mecaniciens'] = $this->Mecanicien_model->get_all_mecaniciens();
            
            $data['_view'] = 'entretien/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a entretien
     */
    function edit($ent_id)
    {   
        // check if the entretien exists before trying to edit it
        $data['entretien'] = $this->Entretien_model->get_entretien($ent_id);
        
        if(isset($data['entretien']['ent_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('bus_sid','Bus Sid','required');
			$this->form_validation->set_rules('dateEntretien','DateEntretien','required');
			$this->form_validation->set_rules('mec_sid','Mec Sid','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'bus_sid' => $this->input->post('bus_sid'),
					'mec_sid' => $this->input->post('mec_sid'),
					'dateEntretien' => $this->input->post('dateEntretien'),
					'etatBus' => $this->input->post('etatBus'),
					'fraisEntretien' => $this->input->post('fraisEntretien'),
					'panneDetectee' => $this->input->post('panneDetectee'),
					'pieceEndommagee' => $this->input->post('pieceEndommagee'),
					'ent_observation' => $this->input->post('ent_observation'),
                );

                $this->Entretien_model->update_entretien($ent_id,$params);            
                redirect('entretien/index');
            }
            else
            {
				$this->load->model('Bus_model');
				$data['all_bus'] = $this->Bus_model->get_all_bus();

				$this->load->model('Mecanicien_model');
				$data['all_mecaniciens'] = $this->Mecanicien_model->get_all_mecaniciens();

                $data['_view'] = 'entretien/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The entretien you are trying to edit does not exist.');
    } 

    /*
     * Deleting entretien
     */
    function remove($ent_id)
    {
        $entretien = $this->Entretien_model->get_entretien($ent_id);

        // check if the entretien exists before trying to delete it
        if(isset($entretien['ent_id']))
        {
            $this->Entretien_model->delete_entretien($ent_id);
            redirect('entretien/index');
        }
        else
            show_error('The entretien you are trying to delete does not exist.');
    }
     /*
     * Listing of entretiens
     */
    function rapport()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('entretien/index?');
        $config['total_rows'] = $this->Entretien_model->get_all_entretiens_count();
        $this->pagination->initialize($config);

        $data['entretiens'] = $this->Entretien_model->get_all_entretiens($params);
        
        $data['_view'] = 'rapport/entretien';
        $this->load->view('layouts/main',$data);
    }
}
