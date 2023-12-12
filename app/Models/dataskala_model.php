<?php 
namespace App\Models;
use CodeIgniter\Model;

class dataskala_model extends Model
{
    protected $table = 'skala';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilskala()
    {
        $dataquery=$this->db->query("select * from skala");
        return $dataquery->getResult();
    }

    
}