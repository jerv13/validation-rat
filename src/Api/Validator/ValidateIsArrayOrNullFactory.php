<?php

namespace Reliv\ValidationRat\Api\Validator;

use Psr\Container\ContainerInterface;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ValidateIsArrayOrNullFactory
{
    /**
     * @param ContainerInterface $serviceContainer
     *
     * @return ValidateIsArrayOrNull
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(
        ContainerInterface $serviceContainer
    ) {
        return new ValidateIsArrayOrNull();
    }
}
