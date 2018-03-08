<?php
// source: C:\xampp\htdocs\src\nettecms\app\components/default.latte

class Templatef05bdc3e922df3e5f36d87d70e5b673a extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('df0a800396', 'html')
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
	<h3>Article manager</h3>
	<?php echo Latte\Runtime\Filters::escapeHtml($control->name, ENT_NOQUOTES) ?>

	



</div><?php
}}