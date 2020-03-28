<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Problem extends Model
{
    //
    protected $fillable = [
        'nama', 'menu', 'submenu', 'lokasi', 'tanggal', 'deskripsi', 'imagePath',
    ];

    

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->locale('id')
        ->isoFormat('LLLL');
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])
           ->diffForHumans();
    }
}
