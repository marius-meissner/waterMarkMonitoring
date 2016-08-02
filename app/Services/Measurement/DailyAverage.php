<?php
namespace App\Services\Measurement;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Jsonable;

/**
 * Class DailyAverage
 * @package App\Services\Measurement
 */
class DailyAverage extends Average
{
    /**
     * @inheritdoc
     */
    protected function getDateFormat() : string
    {
        return 'Y-m-d';
    }
}