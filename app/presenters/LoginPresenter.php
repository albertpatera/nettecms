<?php

namespace App\Presenters;
use Nette;
use Nette\Forms\Form;
use Nette\Utils\DateTime;
use Nette\Utils\Html;
class LoginPresenter extends Nette\Application\UI\Presenter
{
	public function renderDefault()
	{
		$control = $this->getComponent('login');
		$form = new Form;
		$form->addText('user', 'E-mail:')
			->setType('email')
			->setRequired();
		$form->addPassword('password', 'Heslo:')
			->setType('password')
			->setRequired();
		$form->addMultiUpload('files', 'Soubory');
		$form->addSubmit('login', 'Prihlait se !');
		$form->onSuccess[] = [$this, 'loginFormSuccess'];

		$netteRealease = DateTime::from('2018-03-06 00.00.00');
		$netteRealease->modify('+10 years, 1 month');
		$netteRealease = DateTime::createFromFormat('d.m.y', '2000.04.04');
		//echo $netteRealease->getTimestamp();
		echo $netteRealease;

		$date = DateTime::from('2017-02-03');
		echo json_encode($date);

		$el = Html::el('img');
		$el->src = 'image.png';
		$el->alt = 'test image';
		$el->title = 'Title of image';
		echo $el;


		echo $form;
		dump($form);
		dump($control);
	}

	protected function createComponentLogin()
	{
  		$control = new \LoginControl();
  		
  		//$control->addComponent(new LoginControl, 'comp')
  		return $control;
	}

	protected function createComponentLoginForm()
  	{
  		$form = new UI\Form;
  		$form->addText('username', 'Uzivatelske jmeno:')
  			->setType('email')
  			->setRequired();
  		$form->addPassword('password', 'Heslo:')
  			->setType('password')
  			->setRequired();
  		$form->addTextArea('description', 'Obsah článku');
  		
  		$form->addSubmit('login', 'prihlasit');
  		
  	
  }

  public function loginFormSuccess(UI\Form $form, $values)
  {
  	$this->flashMessage('You are login successfully');
  	$this->redirect("http://google.com");
  }
}