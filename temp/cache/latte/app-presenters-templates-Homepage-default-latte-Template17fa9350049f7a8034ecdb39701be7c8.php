<?php
// source: C:\xampp\htdocs\src\nettecms\app\presenters/templates/Homepage/default.latte

class Template17fa9350049f7a8034ecdb39701be7c8 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('e0eef2e180', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb06ccaa581a_content')) { function _lb06ccaa581a_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="banner">
<?php call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>
</div>


<?php call_user_func(reset($_b->blocks['menu']), $_b, get_defined_vars())  ?>
<div id="content">

    
    


</div>

<style>
	html { font: normal 18px/1.3 Georgia, "New York CE", utopia, serif; color: #666; -webkit-text-stroke: 1px rgba(0,0,0,0); overflow-y: scroll; }
	body { background: #3484d2; color: #333; margin: 2em auto; padding: 0 .5em; max-width: 600px; min-width: 320px; }
	a { color: #006aeb; padding: 3px 1px; }
	a:hover, a:active, a:focus { background-color: #006aeb; text-decoration: none; color: white; }
	#banner { border-radius: 12px 12px 0 0; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAB5CAMAAADPursXAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAGBQTFRFD1CRDkqFDTlmDkF1D06NDT1tDTNZDk2KEFWaDTZgDkiCDTtpDT5wDkZ/DTBVEFacEFOWD1KUDTRcDTFWDkV9DkR7DkN4DkByDTVeDC9TDThjDTxrDkeADkuIDTRbDC9SbsUaggAAAEdJREFUeNqkwYURgAAQA7DH3d3335LSKyxAYpf9vWCpnYbf01qcOdFVXc14w4BznNTjkQfsscAdU3b4wIh9fDVYc4zV8xZgAAYaCMI6vPgLAAAAAElFTkSuQmCC); }
	h1 { font: inherit; color: white; font-size: 50px; line-height: 121px; margin: 0; padding-left: 4%; background: url(http://files.nette.org/images/logo-nette@2.png) no-repeat 95%; background-size: 130px auto; text-shadow: 1px 1px 0 rgba(0, 0, 0, .9); }
	@media (max-width: 600px) {
		h1 { background: none; font-size: 40px; }
	}
	#content { background: white; border: 1px solid #eff4f7; border-radius: 0 0 12px 12px; padding: 10px 4%; overflow: hidden; }
	h2 { font: inherit; padding: 1.2em 0; margin: 0; }
	img { border: none; float: right; margin: 0 0 1em 3em; }
</style>
<?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lbb5fbd3efa3_title')) { function _lbb5fbd3efa3_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1>Homepage</h1>
<?php
}}

//
// block menu
//
if (!function_exists($_b->blocks['menu'][] = '_lb4e58dc09c9_menu')) { function _lb4e58dc09c9_menu($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="boxes">
	<ul>
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
">home</a></li>		
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Login:show"), ENT_COMPAT) ?>
">Sing in </a></li>
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Calculator:default"), ENT_COMPAT) ?>
">Kalkulačka</a></li>
		<li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Article:default"), ENT_COMPAT) ?>
">Clanky</a></li>
	</ul>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}