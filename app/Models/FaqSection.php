<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqSection extends Model
{
    use HasFactory;

    public function faq()
    {
        return $this->hasMany(Faq::class, 'section_id');
    }
   
}