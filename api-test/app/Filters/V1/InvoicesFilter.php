<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter
{
    protected array $allowedParams = [
        'customer_id' => ['eq'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billed_date' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paid_date' => ['eq', 'lt', 'gt', 'lte', 'gte']
    ];

    protected array $columnMap = [
        'customer_id' => 'customerId',
        'billed_date' => 'billedDate',
        'paid_date' => 'paidDate',
    ];

    protected array $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
}
