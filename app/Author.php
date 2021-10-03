<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //assegno la relazione hasMany con la tabella article
    public function article(){
          return $this->hasMany(Article::class);
    }
}
