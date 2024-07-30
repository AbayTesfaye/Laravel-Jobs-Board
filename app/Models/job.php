<?php
namespace App\Models;

use Illuminate\Support\Arr;

class job {
    public static function all() : array
    {
      return [
        [
             'id'=>1,
             'title'=>'Director',
             'salary'=> '$40'
        ],
        [
            'id'=>2,
            'title'=>'Programmer',
            'salary'=> '$50'
        ],
        [
            'id'=>3,
            'title'=>'Teacher',
            'salary'=> '$30'
       ]
        ];
    }

    public static function find($id): array
    {
     $job = Arr::first(job::all(), fn($job) => $job['id'] == $id);

     if(! $job){
        abort(404);
     }

     return $job;
    }
}
