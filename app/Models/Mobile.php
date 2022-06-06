<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Mobile extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'category_id', 'brand_id','picture', 'slug', 'first_release','official_price', 'unofficeal_price', 'color', 'network',
        'sim', 'wlan', 'bluetooth', 'gps', 'radio','usb', 'otg', 'style', 'material',
        'dimensions', 'weight', 'size', 'resolution', 'technology','protection', 'features', 'video_recording', 'material',
        'fornt_camera', 'back_camera', 'battery_type_capacity', 'os', 'chipset','rom', 'ram', 'processor', 'microsd_slot',
        'fingerprint', 'face_unlock', 'manufactured_by', 'mad_in', 'chipset','rom', 'ram', 'processor', 'microsd_slot',
    ];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
