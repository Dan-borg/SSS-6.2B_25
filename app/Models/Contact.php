<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    //enable mass assignment for the following fields
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'address', 'company_id'];

    // Many-to-One relationship with Company model
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
