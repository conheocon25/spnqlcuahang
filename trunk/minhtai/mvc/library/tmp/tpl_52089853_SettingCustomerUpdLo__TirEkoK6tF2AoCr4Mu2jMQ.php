<?php 
function tpl_52089853_SettingCustomerUpdLo__TirEkoK6tF2AoCr4Mu2jMQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>
 
<?php /* tag "html" from line 2 */; ?>
<html>
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingCustomerUpdLoad.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="PageSettingCustomerUpdLoad" data-role="page" class="type-interior">
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "h1" from line 11 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php /* tag "a" from line 12 */; ?>
<a href="#" data-icon="back" data-rel="back" data-role="button">Lui</a>
		</div>
		<?php /* tag "div" from line 14 */; ?>
<div data-role="content" data-theme="a">
			<?php 
/* tag "form" from line 15 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSettingCustomerUpdLoad" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all"<?php echo $_tmp_1 ?>
>
				<?php /* tag "fieldset" from line 16 */; ?>
<fieldset>
					<?php /* tag "div" from line 17 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 18 */; ?>
<label for="Prefix" class="text">Xưng hô:</label>
						<?php 
/* tag "input" from line 19 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getPrefix')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Prefix" name="Prefix" type="text" class="required minlength:5"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 21 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 22 */; ?>
<label for="Name" class="text">Tên khách hàng:</label>
						<?php 
/* tag "input" from line 23 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getName')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Name" name="Name" type="text" class="required minlength:5"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 25 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 26 */; ?>
<label for="Alias" class="text">Thường gọi:</label>
						<?php 
/* tag "input" from line 27 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getAlias')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Alias" name="Alias" type="text" class="required minlength:5"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 29 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 30 */; ?>
<label for="Phone" class="text">Điện thoại:</label>
						<?php 
/* tag "input" from line 31 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getPhone')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Phone" name="Phone" type="text" class="required minlength:5"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 33 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 34 */; ?>
<label for="Address" class="text">Địa chỉ:</label>
						<?php 
/* tag "input" from line 35 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getAddress')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Address" name="Address" type="text" class="required minlength:5"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 37 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 38 */; ?>
<label for="Note" class="text">Ghi chú:</label>
						<?php 
/* tag "input" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getNote')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Note" name="Note" type="text" class="required minlength:5"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 41 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 42 */; ?>
<label for="Debt" class="text">Nợ đầu kì:</label>
						<?php 
/* tag "input" from line 43 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getDebt')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Debt" name="Debt" type="text" class="required minlength:5"<?php echo $_tmp_2 ?>
/>
					</div>
				</fieldset>
				<?php /* tag "button" from line 46 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Lưu</button>
			</form>
		</div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/minhtai/mvc/templates/SettingCustomerUpdLoad.html (edit that file instead) */; ?>