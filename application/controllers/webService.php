<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WebService extends CI_Controller {


	public function index()
	{
		 $this->giroRoute();
	}
    /* loads giroRoute as default function */
    
    public function giroRoute()
    {
        $this->load->model("giroDB");
        
        $this->giroDB->getResults1();
        
        $data['results'] = $this->giroDB->getResults1();
        
        $this->load->view("view_GiroStage", $data);
    }
    /* Loads the DB model and getResults1 function from that model. 
    The results array containing details on each stage route from the DB class is passed into $data array. 
    view_Girostage is then loaded and $data array passed into the view */
    
    
    public function giroContenders()
    {   
        $this->load->model("giroDB");
        
        $this->giroDB->getResults2();
        
        $data['results'] = $this->giroDB->getResults2();
        
        $this->load->view("view_GiroFavourites", $data);
    }
    /* Loads the DB model and getResults2 function from that model. 
    The results array containing details on contenders for each stage from the DB class is passed into $data array. 
    view_Girostage is then loaded and $data array passed into the view */
    
    
    public function giroContendersStages($StageNum)
    {
        $this->load->model("giroDB");
        
        $this->giroDB->getResultsFavourites($StageNum);
        
        $data['results'] = $this->giroDB->getResultsFavourites($StageNum);
        
        $this->load->view("view_GiroFavourites", $data);
    }
    /* Receives $StageNum variable which is passed to DB for query. 
    Loads the DB model and getResultsFavourites function from that model. 
    The results array containing details on the contenders for a single stage from the DB class is passed into $data array. 
    view_Girostage is then loaded and $data array passed into the view_GiroFavourites view */
    
    
    public function giroRouteStages($StageNum)
    {  
        $this->load->model("giroDB");
        
        $this->giroDB->getResultsStages($StageNum);
        
        $data['results'] = $this->giroDB->getResultsStages($StageNum);
        
        $this->load->view("view_GiroStage", $data);
    }
     /* Receives $StageNum variable which is passed to DB for query.
     Loads the DB model and getResultsStages function from that model. 
    The results array containing details on each stage route from the DB class is passed into $data array. 
    view_Girostage is then loaded and $data array passed into the view_GiroFavourites view */ 
   
    
}

?>