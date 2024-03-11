<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class MenuFilter extends ApiFilter{ 

    protected $safeParams = [
        'id' => ['eq'],
        'name' => ['like', 'eq'],
    ];
    protected $columnMap = [
        'name' => 'name',
    ]; 
    protected $operatorMap = [
        'like' => 'like',
        'eq' => '=',
        'gt' => '>',
        'lt' => '<'
    ]; 

}