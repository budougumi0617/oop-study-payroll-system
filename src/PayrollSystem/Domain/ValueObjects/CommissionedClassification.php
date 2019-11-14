<?php
declare(strict_types=1);

namespace PayrollSystem\Domain\ValueObjects;

use PayrollSystem\Domain\Exceptions\InvalidArgumentException;

class CommissionedClassification extends SalariedClassification
{
    private int $commissionRate;

    public function __construct(int $salaryRate, int $commissionRate)
    {
        parent::__construct($salaryRate);

        if ($commissionRate <= 0) {
            throw new InvalidArgumentException();
        }
        $this->commissionRate = $commissionRate;
    }
}
