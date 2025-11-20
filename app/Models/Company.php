<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    //enable mass assignment for the following fields
    protected $fillable = ['name', 'address', 'website', 'email'];

    // One-to-Many relationship with Contact model
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
