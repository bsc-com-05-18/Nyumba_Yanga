
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
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

if($req->has('pictures')){
    foreach($req->file('pictures')as $picture){
        $pictureName = $data['title'].'-picture-'.time().rand(1,1000).'.'.$picture->extension();
        $picture->move(public_path('property_pictures'),$pictureName);
        Picture::create([
            'property_id'=>$new_property->id,
            'pic'=>$pictureName
        ]);
    }
}


$table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
