<?php

namespace Modules\HelpCenterModule\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'opponent_id',
        'details'
    ];

 /////////// Relationships  ////////////////

    public function user(){
     return $this->belongsTo(User::class);
    }

    public function opponent(){
     return $this->hasOne(User::class,'id','opponent_id');
    }




    // protected static function newFactory()
    // {
    //     return \Modules\HelpCenterModule\Database\factories\AnnouncementFactory::new();
    // }
}
