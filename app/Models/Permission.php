<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','label','slug'
    ];

    public function roles() {
        return $this->belongsToMany(Role::class,'role_permissions');
     }
 
     public function users() {
        return $this->belongsToMany(User::class,'users_permissions');  
     }
}
