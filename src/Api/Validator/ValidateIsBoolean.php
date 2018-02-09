<?php

namespace Reliv\ValidationRat\Api\Validator;

use Reliv\ValidationRat\Model\ValidationResult;
use Reliv\ValidationRat\Model\ValidationResultBasic;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ValidateIsBoolean implements Validate
{
    const CODE_MUST_BE_BOOLEAN = 'must-be-boolean';

    /**
     * @param mixed $value
     * @param array $options
     *
     * @return ValidationResult
     */
    public function __invoke(
        $value,
        array $options = []
    ): ValidationResult {
        if (!is_bool($value)) {
            return new ValidationResultBasic(
                false,
                static::CODE_MUST_BE_BOOLEAN
            );
        }

        return new ValidationResultBasic();
    }
}
