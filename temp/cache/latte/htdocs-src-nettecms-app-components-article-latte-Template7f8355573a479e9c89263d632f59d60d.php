<?php
// source: C:\xampp\htdocs\src\nettecms\app\components/article.latte

class Template7f8355573a479e9c89263d632f59d60d extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('ae21de5a4b', 'html')
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
	<h2><u>Article manager</u></h2>
	<h3>Article template is here......</h3>
<?php $_l->tmp = $_control->getComponent("ArticleManager"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
	<?php echo Latte\Runtime\Filters::escapeHtml($control->name, ENT_NOQUOTES) ?>

</div><?php
}}