<?php

namespace Core\Log\Attributes\Id\Exceptions;

use Core\Log\Exceptions\LogAttributeException;

class LogIdNotValidException extends LogAttributeException
{

    /**
     * The reason (attribute) for which this exception is thrown
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error
     *
     * @var string
     */
    protected $code = 'LOG_ID_NOT_VALID';

    /**
     * The message
     *
     * @var string
     */
    protected $message = "The %s is not valid";
}
