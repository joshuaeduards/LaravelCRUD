<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    
    protected $table = 'cars';

    protected $primaryKey = 'id';

    // protected $hiddden = 'timestamps';
    
    public $timestamp = false;
    
    protected $fillable = ['name', 'description', 'imageurl'];

    protected $guarded = ['created_at', 'updated_at'];

}
