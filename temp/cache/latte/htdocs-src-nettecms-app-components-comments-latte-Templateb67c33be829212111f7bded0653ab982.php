<?php
// source: C:\xampp\htdocs\src\nettecms\app\components/comments.latte

class Templateb67c33be829212111f7bded0653ab982 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('f0e095c708', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<div class="boxes">
	ahoj já jsem zde
	<?php echo Latte\Runtime\Filters::escapeHtml($control->name, ENT_NOQUOTES) ?>


<?php $_l->tmp = $_control->getComponent("LoginForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
</div> <?php
}}