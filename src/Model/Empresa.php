<?php
namespace UMSA\SidomModel\Model;

use Illuminate\Database\Eloquent\Model;
use UMSA\SidomModel\Model\Permiso;
class Empresa extends Model
{
    protected $table = 'empresas';
    protected $primaryKey = 'cuit';

    public function permisos() {
        return $this->hasMany(Permiso::class, 'id_per', 'id_mod');
    }
    public function usuarios() {
        return $this->belongsToMany(Empresa::class, 'usuarios_empresas', 'empresas_cuit', 'usuarios_id_usu');
    }

}