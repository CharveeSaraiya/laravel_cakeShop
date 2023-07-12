<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='product';  
    protected $fillable=['id','pname','price','weight','unit','calories','catid','oid','description','mfgdate','expdate','image1','image2','image3','image4','status']; 
    public function category(){
     
     return $this->hasOne(category::class, 'id', 'catid');
    }
    public function occasion(){
     
        return $this->hasOne(occasion::class, 'id', 'oid');
       }
}
