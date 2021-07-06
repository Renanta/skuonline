<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subpoin extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function poins()
    {
        return $this->belongsTo(Poin::class, 'poin_id');
    }

    public function proofs()
    {
        return $this->belongsTo(Proof::class);
    }

    public function religions()
    {
        return $this->belongsTo(Religion::class);
    }
}
