<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // $fillable berguna untuk memberitahu field input apa saja yang boleh diisi  jika menggunakan mass assignment
    protected $fillable = ['nama', 'npm', 'email', 'no_tlpn', 'alamat'];
    
}
