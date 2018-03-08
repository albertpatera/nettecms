<?php
use Nette\Application\UI;
use Nette\Forms\Forms;
class LoginControl extends UI\Control
{
  public function render()
  {
    $this->template->setFile(__DIR__ . '/default.latte');
    $this->template->render();
    $form = new UI\Form;
    $form->addText('username', 'E-mail');

    dump($form);
  }

  protected function createCompomentAddCommentForm()
  { 
    $form = new UI\Form();
    $form->addText('username', 'Vaše jméno:')
         ->setType('text')
         ->setRequired();
     $form->addTextArea('message')
         ->setRequired();
    $form->addSubmit('post', 'Komentovat !');
   
    return $form;
  }
}