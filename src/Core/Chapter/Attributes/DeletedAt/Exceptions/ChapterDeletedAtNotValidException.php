<?php

namespace Core\Chapter\Attributes\DeletedAt\Exceptions;
use Core\Chapter\Exceptions\ChapterAttributeException;

class ChapterDeletedAtNotValidException extends ChapterAttributeException
{

	/**
	 * The reason (attribute) for which this exception is thrown
	 *
	 * @var string
	 */
	protected $attribute = 'deleted_at';

	/**
	 * The code to identify the error
	 *
	 * @var string
	 */
	protected $code = 'CHAPTER_DELETED_AT_NOT_VALID';

	/**
	 * The message
	 *
	 * @var string
	 */
	protected $message = "The %s is not valid";

}
