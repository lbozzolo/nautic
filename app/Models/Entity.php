<?php

namespace Ramiroquai\Models;

use Eloquent as Model;
use Ramiroquai\Models\Image as Image;

class Entity extends Model
{

    public function getFechaCreadoAttribute()
    {
        return ($this->created_at)? date_format($this->created_at,"d/m/Y") : '';
    }

    public function getFechaEditadoAttribute()
    {
        return ($this->updated_at)? date_format($this->updated_at,"d/m/Y") : '';
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function mainImage()
    {
        return $this->images()->where('main', 1)->first();
    }

    public function imagesThumb()
    {
        return $this->morphMany(Image::class, 'imageable')->where('thumbnail_id', null);
    }

    public function imagesBig()
    {
        return $this->morphMany(Image::class, 'imageable')->where('thumbnail_id', '!=', null);
    }

}
