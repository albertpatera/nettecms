<?php
// source: C:\xampp\htdocs\src\nettecms\app\components\default.latte

class Template013e2a562b7b4853ea3a6c44574d8aa0 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('73bad2a8c4', 'html')
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
<div class="box">
	<?php echo Latte\Runtime\Filters::escapeHtml($control->name, ENT_NOQUOTES) ?>

</div><?php
}}