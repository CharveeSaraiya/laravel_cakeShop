<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table='orders';  
    protected $fillable=['id','ddate','billamt','deliverycharges','netamt','deliveryaddress','cid','odate','firstname','lastname','city','email','phone','status','mode']; 
    // public function category(){
     
    //     return $this->hasOne(category::class, 'id', 'cid');
    //    }
    //    public function occasion(){
        
    //        return $this->hasOne(occasion::class, 'date', 'odate');
    //       }

      
}
