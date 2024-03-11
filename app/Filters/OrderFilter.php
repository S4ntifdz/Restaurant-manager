<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class OrderFilter extends ApiFilter{ 

    protected $safeParams = [
        'id' => ['eq', 'gt', 'lt'],
        'tableclient_id' => ['like', 'eq'],
        'status' => ['eq', 'gt', 'lt'],
        'total' => ['eq', 'gt', 'lt'],
    ]; 
    protected $columnMap = [
        'id' => 'id',
        'tableclient_id' => 'tableclient_id',
        'status' => 'status',
        'total' => 'total'
    ];
    protected $operatorMap = [
        'like' => 'like',
        'eq' => '=',
        'gt' => '>',
        'lt' => '<'
    ]; 
}
