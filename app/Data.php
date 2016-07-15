<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends BaseModel {
    protected $primaryKey = 'id';
    protected $table = 'crud';
    protected $fillable = array('name', 'updated_at', 'created_at');
}{
    //
}
