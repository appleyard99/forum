<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    /*fillable(白名单)和guarded(黑名单)属性都是laravel的批量赋值方法create()的.
    *fillable表示在create()方法中可以被赋值的字段，对应的是guarded表示在create()方法中不能被赋值的字段
    */
     protected $guarde=[];//意味所有属性均可更新，后期会修复此安全隐患
}
