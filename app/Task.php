<?php
/*@author:danblang
*@time:2017.7.12
 * model_name:task
 * */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*
     * This attributs that are mass assignable.
     * @var array
     * */
    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}


