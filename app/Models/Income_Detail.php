<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income_Detail extends Model
{
    use HasFactory;
    public function income(){
        return $this->belongsto(income::class,'income_id','id');
    }
    use HasFactory;
    public function article(){
        return $this->belongsto(article::class,'article_id','id');
    }
}
