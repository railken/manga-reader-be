<?php

namespace Core\Manga\Attributes\UpdatedAt\Exceptions;
use Core\Manga\Exceptions\MangaAttributeException;

class MangaUpdatedAtNotValidException extends MangaAttributeException
{

	/**
	 * The reason (attribute) for which this exception is thrown
	 *
	 * @var string
	 */
	protected $attribute = 'updated_at';

	/**
	 * The code to identify the error
	 *
	 * @var string
	 */
	protected $code = 'MANGA_UPDATED_AT_NOT_VALID';

	/**
	 * The message
	 *
	 * @var string
	 */
	protected $message = "The %s is not valid";

}