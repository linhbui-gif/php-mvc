<?php

const FOLDER_VIEW = 'Views';

/**
 * 
 */
class View
{
	public $parentTemplate = 'app';

	public $content = '';

	public function __construct($content)
	{
		$this->content = $content;
	}

	public function render()
	{
		$file = __DIR__ . '\\' . $this->parentTemplate . '.php';

		if(!file_exists($file)) {
			throw new \Exception("View not fucking found!");
		}

		$content = $this->content;

		include $file;
	}
}