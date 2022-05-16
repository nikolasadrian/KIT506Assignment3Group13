<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroups extends Model
{
    use HasFactory;
    protected $table = 'studentGroup';
    protected $primaryKey = 'group_id';
	public $timestamps = false;
}
