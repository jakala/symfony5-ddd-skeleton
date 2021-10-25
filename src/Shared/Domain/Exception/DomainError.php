<?php

declare(strict_types=1);

namespace App\Shared\Domain\Exception;

use App\Shared\Domain\Interface\Exception;

abstract class DomainError extends \DomainException implements Exception
{
    protected mixed $value;

    public function __construct(mixed $value)
    {
        $this->value = $value;
        parent::__construct($this->message());
    }

    abstract protected function message(): string;
}
