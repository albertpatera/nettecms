<?php

namespace App\Presenters;
use Nette;
use Nette\Forms\Form;
use Nette\Application\UI;
use Nette\Database\Connection;
use App\Model\ArctileManager;
use App\Presenters\BasePresenter;
use Nette\Application\BadRequestException;

final class ArticlePresenter extends BasePresenter
{

  const DEFAULT_ARTICLE_URL = 'uvod';

  protected $articleManager;

  public function __construct(ArticleManager $articleManager)
  {
    parent::__construct();
    $this->articleManager = $articleManager;
  }

  public function renderDefalut()
  {
    if(!$url)
      $url = self::DEFAULT_ARTICLE_URL;

    if(!($article = $this->articleManager->getArticle($url)))
      throw new BadRequestException();

    //předá článek do šablony 

     $this->template->article = $article;
  }
  public function renderShow()
  {
    $this->flashMessage('this is renderShow - action');
  }

	public function createComponentArticleManager()
	{
  		$control = new ArticleControl();
  		
  		//$control->addComponent(new LoginControl, 'comp')
  		return $control;
	}

	public function createComponentLoginForm()
  	{
  		$form = new UI\Form;
  		$form->addGroup('ArticleManager');
      $form->addText('articleTitle', 'Nadpis:')
  			->setType('text')
  			->setRequired();
  		$form->addText('text', 'Autor:')
  			->setType('text')
  			->setRequired()
        ->setDefaultValue('admin');
      $form->addTextArea('desc', 'Strucny popis:');
      $form->addTextArea('mainDesc', 'Obsah článku');
  		$form->addCheckbox('agree', 'show')
      ->setDefaultValue(false);
      $form->addSubmit('login', 'Předat článek ke schálení');
      $form->addProtection('Vypršel časový limit pro napsání postu !');
      $form->onSuccess[] = [$this, 'articleAddSuccessed'];
  		

      return $form;
  }

  public function articleAddSuccessed(UI\Form $form, $values)
  {
    //$this->redirect("Login:default"); 
    $this->flashMessage('Čláínek byl předán ke schválnení. Budeme Vás co nejdříve kontaktovat.');
   


  }
}