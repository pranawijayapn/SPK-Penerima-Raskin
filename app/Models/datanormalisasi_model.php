<?php 
namespace App\Models;
use CodeIgniter\Model;

class datanormalisasi_model extends Model
{
    protected $table = 'wp_normalisasiterbobot';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilnormalisasi()
    {
        $dataquery=$this->db->query("select * from wp_normalisasiterbobot");
        return $dataquery->getResult();
    }

    
}