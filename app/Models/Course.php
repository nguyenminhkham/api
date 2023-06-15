<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['serial_no', 'name', 'description', 'thumbnail', 'price'];
    protected $dates = ['created_at', 'updated_at'];

    // serial_no autoincrement
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->serial_no = static::getNextSerial_noValue();
        });
    }

    private static function getNextSerial_noValue()
    {
        $lastCourse = static::query()->latest('serial_no')->first();

        if (!$lastCourse) {
            return 1;
        }

        return $lastCourse->serial_no + 1;
    }
}
