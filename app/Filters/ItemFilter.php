<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ItemFilter extends ApiFilter{

    // protected $fillable = ['name', 'description', 'price', 'menu_id'];

    protected $safeParams = [
        'name' => ['eq'],
        'price' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'menu_id' => ['eq', 'lt', 'lte', 'gt', 'gte']
    ];
    protected $columnMap = [
        'name' => 'name',
        'price' => 'price',
        'menu_id' => 'menu_id'

    ]; 
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ]; 
}