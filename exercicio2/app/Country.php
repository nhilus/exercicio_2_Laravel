<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Owner;

class Country extends Model
{
    public function owner()
    {
        return $this->hasMany(Owner::Class);
    }
}
