<?php

namespace Core\Manga\Exceptions;

class MangaMangafoxUidNotDefinedException extends MangaAttributeException
{

	/**
	 * The reason (attribute) for which this exception is thrown
	 *
	 * @var string
	 */
	protected $attribute = 'mangafox_uid';

	/**
	 * The code to identify the error
	 *
	 * @var string
	 */
	protected $code = 'MANGA_MANGAFOX_UID_NOT_DEFINED';

	/**
	 * The message
	 *
	 * @var string
	 */
	protected $message = "The %s is required";

}