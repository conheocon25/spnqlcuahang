<?php 
function tpl_5208fa8c_App__MAmimBZ4OxWAG2hoz5BriA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		
	</head>
<?php /* tag "body" from line 7 */; ?>
<body>
	<?php /* tag "div" from line 8 */; ?>
<div data-role="page" class="type-interior">
		<?php /* tag "div" from line 9 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 10 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>			
			<?php /* tag "a" from line 11 */; ?>
<a href="/signout/load" data-icon="delete">THOÁT</a>
		</div>
		<?php /* tag "div" from line 13 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 14 */; ?>
<div class="content-primary">				
				<?php /* tag "div" from line 15 */; ?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 16 */; ?>
<h3>CÁC MODULE</h3>
					<?php /* tag "ul" from line 17 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 18 */; ?>
<li><?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>BÁN HÀNG</a></li>
						<?php /* tag "li" from line 19 */; ?>
<li><?php 
/* tag "a" from line 19 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLImport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 20 */; ?>
<li><?php 
/* tag "a" from line 20 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>CHI TRẢ</a></li>
						<?php /* tag "li" from line 21 */; ?>
<li><?php 
/* tag "a" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>BÁO CÁO</a></li>
						<?php /* tag "li" from line 22 */; ?>
<li><?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a></li>
					</ul>
				</div>
			</div><!--/content-primary -->
			<?php /* tag "div" from line 26 */; ?>
<div class="content-secondary">
				
			</div>
		</div><!-- /content -->
		<?php /* tag "div" from line 30 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c">
			<?php /* tag "p" from line 31 */; ?>
<p>&copy; 2012 SPN Co, Ltd.</p>
		</div>
	</div><!-- /page -->
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\SPN_MinhTai\mvc\templates\App.html (edit that file instead) */; ?>