<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='images';
    protected $primaryKey='id';
    protected $fillable = [
        'title', 
        'location',
        'description',
        'price',
        'image',
        ];
        public function getImageData()
        {
            return base64_encode($this->image);
        }
}
