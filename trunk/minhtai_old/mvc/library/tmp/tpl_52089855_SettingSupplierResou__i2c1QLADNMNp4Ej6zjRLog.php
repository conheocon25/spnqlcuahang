<?php 
function tpl_52089855_SettingSupplierResou__i2c1QLADNMNp4Ej6zjRLog(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingSupplierResourceUpdLoad.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="PageSettingSupplierResourceUpdLoad" data-role="page">
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->Resource, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSettingSupplierResourceUpdLoad" method="post" data-ajax="false" data-mini="true" class="ui-body ui-body-a ui-corner-all"<?php echo $_tmp_1 ?>
>
				<?php /* tag "fieldset" from line 16 */; ?>
<fieldset>
					<?php /* tag "div" from line 17 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 18 */; ?>
<label for="Name" class="text">Tên:</label>
						<?php 
/* tag "input" from line 19 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Resource, 'getName')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required" id="Name" name="Name" type="text"<?php echo $_tmp_2 ?>
/>
					</div>				
					<?php /* tag "div" from line 21 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 22 */; ?>
<label for="IdCategory" class="text">Danh mục:</label>
						<?php /* tag "select" from line 23 */; ?>
<select name="IdCategory" id="IdCategory" data-native-menu="false">
							<?php 
/* tag "option" from line 24 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->Categories)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if ($ctx->Resource->getIdCategory()==$ctx->Category->getId()):  ;
$_tmp_4 = ' selected="selected"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
>
								<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</span>
							</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</select>
					</div>
					<?php /* tag "div" from line 29 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 30 */; ?>
<label for="IdUnit" class="text">Đơn vị:</label>
						<?php /* tag "select" from line 31 */; ?>
<select name="IdUnit" id="IdUnit" data-native-menu="false">
							<?php 
/* tag "option" from line 32 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Unit = new PHPTAL_RepeatController($ctx->Units)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Unit as $ctx->Unit): ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Unit, 'getId')))):  ;
$_tmp_4 = ' value="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if ($ctx->Resource->getIdUnit()==$ctx->Unit->getId()):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_4 ?>
<?php echo $_tmp_2 ?>
>
								<?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
							</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</select>
					</div>
					<?php /* tag "div" from line 37 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 38 */; ?>
<label for="Size" class="text">Kích thước:</label>
						<?php 
/* tag "input" from line 39 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Resource, 'getSize')))):  ;
$_tmp_4 = ' value="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<input class="required" id="Size" name="Size" type="text"<?php echo $_tmp_4 ?>
/>
					</div>
					<?php /* tag "div" from line 41 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 42 */; ?>
<label for="Price1" class="text">Giá nhập:</label>
						<?php 
/* tag "input" from line 43 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Resource, 'getPrice1')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required" id="Price1" name="Price1" type="text"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 45 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 46 */; ?>
<label for="Price2" class="text">Giá xuất:</label>
						<?php 
/* tag "input" from line 47 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Resource, 'getPrice2')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<input class="required" id="Price2" name="Price2" type="text"<?php echo $_tmp_3 ?>
/>
					</div>
					<?php /* tag "div" from line 49 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 50 */; ?>
<label for="Note" class="text">Mô tả:</label>
						<?php 
/* tag "input" from line 51 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Resource, 'getNote')))):  ;
$_tmp_4 = ' value="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<input id="Note" name="Note" type="text"<?php echo $_tmp_4 ?>
/>
					</div>
				</fieldset>
				<?php /* tag "button" from line 54 */; ?>
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

Generated by PHPTAL from /home/spnsoft/public_html/minhtai/mvc/templates/SettingSupplierResourceUpdLoad.html (edit that file instead) */; ?>