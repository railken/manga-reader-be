<?php

namespace Core\User\Attributes\Password\Exceptions;
use Core\User\Exceptions\UserAttributeException;

class UserPasswordNotUniqueException extends UserAttributeException
{

	/**
	 * The reason (attribute) for which this exception is thrown
	 *
	 * @var string
	 */
	protected $attribute = 'password';

	/**
	 * The code to identify the error
	 *
	 * @var string
	 */
	protected $code = 'USER_PASSWORD_NOT_UNIQUE';

	/**
	 * The message
	 *
	 * @var string
	 */
	protected $message = "The %s is not unique";

}