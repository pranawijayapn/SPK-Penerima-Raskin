<?php 
namespace App\Models;
use CodeIgniter\Model;

class dataperankingan_model extends Model
{
    protected $table = 'wp_nilaiv';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilranking()
    {
        $dataquery=$this->db->query("select * from wp_nilaiv");
        return $dataquery->getResult();
    }

    
}