<?php
namespace UMSA\SidomModel\Model;

use Illuminate\Database\Eloquent\Model;
use UMSA\SidomModel\Model\Permiso;
class Modulo extends Model
{
    protected $table = 'modulos';
    protected $primaryKey = 'id_mod';

    public function permisos() {
        return $this->hasMany(Permiso::class, 'id_per', 'id_mod');
    }

}