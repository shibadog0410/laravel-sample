<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestData extends Model
{
    protected $table = 'restdata';
    protected $guarded = array('id');

    protected static $rules = array(
        'message' => 'required',
        'url' => 'required',
    );

    public function getData()
    {
        return $this->id . ': ' . $this->message . '(' . $this->url . ')';
    }
}
