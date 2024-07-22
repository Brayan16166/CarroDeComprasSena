<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    public function person(){
        return $this->belongsto(person::class,'provider_id','id');
    }
    use HasFactory;
    public function user(){
        return $this->belongsto(user::class,'user_id','id');
    }
    use HasFactory;
    public function article(){
        return $this->belongsto(article::class,'article_id','id');
    }
    public function details()
    {
        return $this->hasMany(IncomeDetail::class);
    }
}
