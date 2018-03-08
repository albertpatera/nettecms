<?php

namespace App\Presenters;

use Nette;
use Nette\Database\Context;
use Nette\Application\UI\Presenter;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Presenter
{
	
	protected $database;
	
	public function __construct(Context $database)
	{
		$this->database = $database;
	}
	public function createComponentLoginForm()
	{
		$control = new \LoginControl;
		return $control;
	}
	


}