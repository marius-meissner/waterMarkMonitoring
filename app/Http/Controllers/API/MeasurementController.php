<?php
namespace App\Http\Controllers\API;

use App\Services\Measurement\Measurement;
use App\Services\Measurement\MeasurementRepository;
use Assert\Assertion;
use Illuminate\Http\Request;

/**
 * Class Measurement
 * @package App\Http\Controllers\API
 */
class MeasurementController
{
    /**
     * @var MeasurementRepository
     */
    private $repository;

    /**
     * MeasurementController constructor.
     * @param MeasurementRepository $repository
     */
    public function __construct(MeasurementRepository $repository = null)
    {
        $this->repository = $repository ?: new MeasurementRepository();
    }

    public function create(Request $request)
    {
        $value = $request->json('value');
        Assertion::float($value);

        $measurement = new Measurement(['value' => $value]);
        $this->repository->save($measurement);
    }
}