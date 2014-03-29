<?php 
function tpl_52a03b2a_SettingCustomerUpdLo__CbQK21Pd7TZLCARA2vLJwg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<label for="Name" class="text">Loại khách hàng:</label>
						<?php /* tag "select" from line 27 */; ?>
<select name="Type" id="Type">
							<?php 
/* tag "option" from line 28 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->lst = new PHPTAL_RepeatController($ctx->Types)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->lst as $ctx->lst): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->lst, 'Id')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if ($ctx->Customer->getType()==$ctx->Types[0]['Id']?true:false):  ;
$_tmp_4 = ' selected="selected"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
>
								<?php /* tag "span" from line 29 */; ?>
<span><?php echo phptal_escape($ctx->lst['Id']); ?>
</span>
							</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</select>
						<?php 
/* tag "input" from line 32 */ ;
if (null !== ($_tmp_3 = ($ctx->Types[0]['Id']))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<input id="Name" name="Name" type="text" class="required minlength:5"<?php echo $_tmp_3 ?>
/>						
						<?php 
/* tag "input" from line 33 */ ;
if (null !== ($_tmp_4 = ($ctx->Type[2]))):  ;
$_tmp_4 = ' value="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<input id="Name" name="Name" type="text" class="required minlength:5"<?php echo $_tmp_4 ?>
/>						
					</div>
					<?php /* tag "div" from line 35 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 36 */; ?>
<label for="Alias" class="text">Thường gọi:</label>
						<?php 
/* tag "input" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getAlias')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Alias" name="Alias" type="text" class="required minlength:5"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 39 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 40 */; ?>
<label for="Phone" class="text">Điện thoại:</label>
						<?php 
/* tag "input" from line 41 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Customer, 'getPhone')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<input id="Phone" name="Phone" type="text" class="required minlength:5"<?php echo $_tmp_3 ?>
/>
					</div>
					<?php /* tag "div" from line 43 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 44 */; ?>
<label for="Address" class="text">Địa chỉ:</label>
						<?php 
/* tag "input" from line 45 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Customer, 'getAddress')))):  ;
$_tmp_4 = ' value="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<input id="Address" name="Address" type="text" class="required minlength:5"<?php echo $_tmp_4 ?>
/>
					</div>
					<?php /* tag "div" from line 47 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 48 */; ?>
<label for="Note" class="text">Ghi chú:</label>
						<?php 
/* tag "input" from line 49 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getNote')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Note" name="Note" type="text" class="required minlength:5"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 51 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 52 */; ?>
<label for="Debt" class="text">Nợ đầu kì:</label>
						<?php 
/* tag "input" from line 53 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Customer, 'getDebt')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<input id="Debt" name="Debt" type="text" class="required minlength:5"<?php echo $_tmp_3 ?>
/>
					</div>
				</fieldset>
				<?php /* tag "button" from line 56 */; ?>
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

Generated by PHPTAL from D:\AppWebServer\SPN_MinhTai\mvc\templates\SettingCustomerUpdLoad.html (edit that file instead) */; ?>