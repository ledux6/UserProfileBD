<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function certificates()
    {
        return $this->belongsToMany(Certificate::class);
    }

    public function achievements()
    {
        return $this->belongsToMany(Achievement::class);
    }

    public function experience()
    {
        $expierienceSum = 0;
        foreach ($this->courses as $course){
            $expierienceSum += $course->experience_points;
        }
        return $expierienceSum;
    }

    public function completed_courses_count(){
        $count = 0;
        foreach ($this->courses as $course){
            if($course->completed == 1){
                $count++;
            }
        }
        return $count;
    }
    public function recommendations(){
        return $this->hasOne(Recommendation::class);
    }
}
