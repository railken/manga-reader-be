<?php

namespace Core\Log\Attributes\CreatedAt\Exceptions;
use Core\Log\Exceptions\LogAttributeException;

class LogCreatedAtNotDefinedException extends LogAttributeException
{

	/**
	 * The reason (attribute) for which this exception is thrown
	 *
	 * @var string
	 */
	protected $attribute = 'created_at';

	/**
	 * The code to identify the error
	 *
	 * @var string
	 */
	protected $code = 'LOG_CREATED_AT_NOT_DEFINED';

	/**
	 * The message
	 *
	 * @var string
	 */
	protected $message = "The %s is required";

}
