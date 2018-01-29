<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rolle
 * @package App
 */
class Rolle extends Model
{
    
    public $timestamps = false;
    /**
     * @var string
     */
    protected $table = 'rolle';
    
    
    protected $fillable = [
        'name',
    ];
    
}
