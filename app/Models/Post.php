<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content', 'user_id'];

    protected $guarded = array('id');
    public static $rules = array(
        'user_id' => 'required',
        'name' => 'required',
    );

    public function getDetail()
    {
        $txt = 'ID:' . $this->id . ' ' . $this->content . $this->image;
        return $txt;
    }
}
