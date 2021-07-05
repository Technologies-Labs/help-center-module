<?php

namespace Modules\HelpCenterModule\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suggestion extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'user_id',
        'details',
        'is_solved'
    ];

 /////////// Relationships  ////////////////

    public function user(){
     return $this->belongsTo(User::class);
    }


    // protected static function newFactory()
    // {
    //     return \Modules\HelpCenterModule\Database\factories\SuggestionFactory::new();
    // }
}
