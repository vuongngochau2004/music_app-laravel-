<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Albums extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title','artist_id','image_album'
    ];
    /**
     * Get the user that owns the Albums
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artist()
    {
        return $this->belongsTo(Artists::class);
    }
   
}
