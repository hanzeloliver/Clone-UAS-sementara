<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    // Define the table name if it's not the plural form of the model
    protected $table = 'pembayarans';  // Ensure the table name matches

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'student_id',      // Foreign key to the students table
        'nominal',         // Payment amount
        'metode_pembayaran' // Payment method
    ];

    // Optionally, if you have timestamps in your table (created_at and updated_at)
    public $timestamps = true;
}
