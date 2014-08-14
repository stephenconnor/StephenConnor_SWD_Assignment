<?php 

class GiroDB extends CI_Model {


    
    function getResults1()
    {
        $query = $this->db->get('giro_dItalia_2014');
        $this->db->select('StageNo, Route, StageProfile');
        
        return $query->result();
    }
    /* Sql query of giro_dItalia_2014 DB, sellects columns StageNo, Route, StageProfile 
    and returns all records into result array */
    
    
    function getResults2()
    {
        $query = $this->db->get('giro_dItalia_2014');
        $this->db->select('StageNo, Route, Favourites');
        
        return $query->result();
    }
    /* Sql query of giro_dItalia_2014 DB, sellects columns StageNo, Route, Favourites
    and returns all records into result array */
    
    
      function getResultsFavourites($StageNum)
    {
        
        $query = $this->db->get('giro_dItalia_2014');
        $this->db->select('StageNo, Route, Favourites');
        $this->db->where('StageNo', $StageNum); 
        
        return $query->result();
    }
    /* Sql query of giro_dItalia_2014 DB, sellects columns StageNo, Route, Favourites
    and returns record depending on $StageNum variable passed from controller into result array */
    
    
    function getResultsStages($StageNum)
    {
        
        $query = $this->db->get('giro_dItalia_2014');
        $this->db->select('StageNo, Route, StageProfile');
        $this->db->where('StageNo', $StageNum); 
        
        return $query->result();
    }
     /* Sql query of giro_dItalia_2014 DB, sellects columns StageNo, Route, StageProfile
    and returns record depending on $StageNum variable passed from controller into result array */
    
    
}
