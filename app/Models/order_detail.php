<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    protected $table='order_detail';  
    protected $fillable=['oid','pid','qty','price']; 
    // public function product(){
     
    //     return $this->hasOne(product::class, 'id', 'pid');
    //    }
    //    public function occasion(){
        
    //        return $this->hasOne(occasion::class, 'id', 'oid');
    //       }
}

               