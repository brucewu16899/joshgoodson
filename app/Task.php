<?php

namespace JoshGoodson;

use JoshGoodson\User;
use Lookitsatravis\Listify\Listify;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Listify;

    /**
     * The attributes that as mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function __construct(array $attributes = array(), $exists = false)
    {
      parent::__construct($attributes, $exists);

      $this->initListify();
    }

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
