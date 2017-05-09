<?php

namespace Fully\Models;

use Illuminate\Database\Eloquent\Model;

class ClientsSay extends Model
{
    public $table = 'clients_say';
    public $timestamps = false;
    protected $fillable = ['name','content','lang','position'];
}
