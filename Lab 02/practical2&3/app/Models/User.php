<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;

    //Mass Assingment
    protected $fillable=["name","email","password","is_admin"];

    

    public function getCompany() {
        return $this->hasOne('App\Models\Company');
    } 
    
    public function getManyCompanies() {
        return $this->hasMany('App\Models\Company');
    } 

}
