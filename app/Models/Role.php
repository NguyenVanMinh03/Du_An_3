<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
protected $guarded =[]; //cho phép cái nào được add thì cái đấy mí được add
 public function permissionrole (){
    // return $this->belongsToMany(Permission::class ,table:"permission_role", foreignPivotKey: "role_id" ,relatedPivotKey: "permisstion_id");

return $this->belongsToMany(Permission::class , table:"permission_role" , foreignPivotKey:"role_id", relatedPivotKey:"permission_id");

 }

}
