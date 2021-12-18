<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'email', 'password', 'belongs',];


    public function getDetail()
    {
        $txt = 'ID:' . $this->id . ' ' . $this->name . '(' . $this->age .  '才' . ') ' . $this->profile . $this->image . $this->email;
        return $txt;
    }
}
