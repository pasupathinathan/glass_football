<?php 

class FirebaseNotification 
{
	/* @var Title
	 * @desc Notification Title
	 */
	private $title;

	/* @var MessageBody
	 * @desc MessageBody Title
	 */
	private $messageBody;
	/* @var payload
	 * @desc Data to be handled by Frontend on clicking Notification
	 */
	private $payload;

	function __construct()
	{
		$this->title = '';
		$this->messageBody = '';
		$this->payload = array();
	}


	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setMessageBody($messageBody)
	{
		$this->messageBody = $messageBody;
	}

	public function getMessageBody()
	{
		return $this->messageBody;
	}

	public function setPayload($payload)
	{
		$this->payload = $payload;
	}

	public function getPayload()
	{
		return $this->payload;
	}
}