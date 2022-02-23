<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    protected $table = 'post';

    /*
     * post data (mass assignable)
     *  - title      / title of the post
     *  - text       / the text of the post
     *  - file_name  / file name
     *  - file_path  / file path
     *  - created_at / time and date the post was created
     *  - updated_at / time and date the post was updated
     */
    protected $fillable = [
        'title',
        'text',
        'file_name',
        'file_path',
        'created_at',
        'updated_at'
    ];

    // member variables
}
