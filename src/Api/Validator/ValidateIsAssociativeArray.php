<?php

namespace Reliv\ValidationRat\Api\Validator;

use Reliv\ValidationRat\Api\BuildOptionCode;
use Reliv\ValidationRat\Model\ValidationResult;
use Reliv\ValidationRat\Model\ValidationResultBasic;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ValidateIsAssociativeArray implements Validate
{
    const OPTION_CODES = BuildOptionCode::OPTION_CODES;
    
    const CODE_MUST_BE_ARRAY = ValidateIsArray::CODE_MUST_BE_ARRAY;
    const CODE_MUST_BE_ASSOCIATIVE_ARRAY = 'must-be-associative-array';

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
        if (!is_array($value)) {
            return new ValidationResultBasic(
                false,
                BuildOptionCode::invoke($options, static::CODE_MUST_BE_ARRAY)
            );
        }

        if (!(array_keys($value) !== range(0, count($value) - 1))) {
            return new ValidationResultBasic(
                false,
                BuildOptionCode::invoke($options, static::CODE_MUST_BE_ASSOCIATIVE_ARRAY)
            );
        }

        return new ValidationResultBasic();
    }
}
