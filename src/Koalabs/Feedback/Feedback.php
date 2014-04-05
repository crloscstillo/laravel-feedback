<?php namespace Koalabs\Feedback;

class Feedback {

	/**
	 * Open a feedback div tag
	 *
	 * @param  string  $type
	 * @return string
	 */
	public function open($type=null)
	{
		return '<div class="feedback '.$type.'">';
	}

	/**
	 * Close a feedback div tag
	 * 
	 * @return string
	 */
	public function close()
	{
		return '</div>';
	}

	/**
	 * Add the feedback text
	 * 
	 * @param  string $text
	 * @return string
	 */
	public function text($text)
	{
		return '<p class="feedback__text" role="alert">'.$text.'</p>';
	}

	#           ~ ---------- ~          #

	/**
	 * Create a neutral feedback message
	 * 
	 * @param  string $text
	 * @return string
	 */
	public function message($text)
	{
		return $this->open().
					 $this->text($text).
					 $this->close();
	}

	/**
	 * Create a 'success' feedback message
	 * 
	 * @param  string $text
	 * @return string
	 */
	public function success($text)
	{
		return $this->open('feedback--success').
					 $this->text($text).
					 $this->close();
	}

	/**
	 * Create an 'error' feedback message
	 * @param  string $text
	 * @return string
	 */
	public function error($text)
	{
		return $this->open('feedback--error').
					 $this->text($text).
					 $this->close();
	}

	/**
	 * Create an 'update' feedback message
	 * 
	 * @param  string $record
	 * @return string
	 */
	public function update($record)
	{
		return $this->open('feedback--update').
					 $this->text($msg).
					 $this->close();
	}

	/**
	 * Create an inline form error
	 * 
	 * @param  string $text
	 * @return string
	 */
	public static function field_error($text)
	{
		return '<span class="field-error"><i class="icon icon-spam"></i>'.$text.'</span>';
	}


}