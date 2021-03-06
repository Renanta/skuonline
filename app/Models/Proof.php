<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proof extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subpoins()
    {
        return $this->belongsTo(Subpoin::class);;
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
