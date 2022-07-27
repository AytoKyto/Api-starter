<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Collection;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
    public function imageproduct()
    {
        return $this->belongsTo(Imageproduct::class);
    }
}
