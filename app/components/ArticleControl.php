<?php
use Nette\Application\UI;


class ArticleControl extends UI\Control
{
	public function render()
	{
		$this->template->setFile(__DIR__ . '/../presenters/templates/article/default.latte');
		$this->templatel->render();
    echo "hello box world";
	}

	protected function createCompomentAddCommentForm()
 	{	
 		$form = new UI\Form();
 		$form->addText('username', 'Vaše jméno:')
         ->setType('text')
         ->setRequired();
     $form->addTextArea('message', 'Text:');
         ->setRequired();
    $form->addSubmit('post', 'Komentovat !');
	 
    return $form;
  }
}