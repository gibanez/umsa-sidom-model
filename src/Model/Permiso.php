<?php
namespace UMSA\SidomModel\Model;

use Illuminate\Database\Eloquent\Model;
use UMSA\SidomModel\Model\Modulo;
class Permiso extends Model
{
    protected $table = 'permisos';
    protected $primaryKey = 'id_per';

    public function modulo() {
        return $this->belongsTo(Modulo::class, 'id_mod');
        return $this->hasOne(Modulo::class, 'id_mod');
    }

}