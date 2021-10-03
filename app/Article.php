<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //c'è la foreign key assegno il "belongsTo" relativo alla tabella 
    //collegata ovvero Author
    public function author() {
          return $this->belongsTo(Author::class);
    }
}
