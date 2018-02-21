<?php

namespace Core\Log\Attributes\Id\Exceptions;
use Core\Log\Exceptions\LogAttributeException;

class LogIdNotAuthorizedException extends LogAttributeException
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
	protected $code = 'LOG_ID_NOT_AUTHTORIZED';
	
	/**
	 * The message
	 *
	 * @var string
	 */
	protected $message = "You're not authorized to interact with %s, missing %s permission";




}
