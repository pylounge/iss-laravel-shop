<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Request\CategoryRequest;
use App\Http\Controllers\Admin\CategoryController;


class Category extends Model
{
  protected $fillable = ['code', 'name', 'description', 'image'];
  
    public function products()
    {
      return $this->hasMany(Product::class);
    }
}
