<?php 
function tpl_52089854_SettingStoreInit__pu2oDRrmXSy8HH0vwlGT5A(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingStoreInit.js"></script>		
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="storeinit" data-role="page" class="type-interior"></div>
	
	<!-- supplier -->
	<?php 
/* tag "div" from line 12 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier as $ctx->Supplier): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getIdPrint')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div data-role="page" class="supplier type-interior"<?php echo $_tmp_2 ?>
>
		<?php /* tag "div" from line 13 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 14 */; ?>
<h1><?php echo phptal_escape('KHỞI TẠO '.$ctx->Store->getName()); ?>
</h1>
			<?php 
/* tag "a" from line 15 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false" data-icon="back"<?php echo $_tmp_3 ?>
>LUI</a>
			<?php 
/* tag "a" from line 16 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false" data-icon="gear" data-transition="none"<?php echo $_tmp_3 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 18 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 19 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 20 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true">
					<?php 
/* tag "li" from line 21 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->SD = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getStoreInits'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->SD as $ctx->SD): ;
?>
<li>
						<?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->SD, 'getURLUpdLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_4 ?>
>
							<?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'SD/number')); ?>
</span>. <?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->SD, 'getResource/getName')); ?>
</span>
							<?php /* tag "span" from line 24 */; ?>
<span class="ui-li-aside">
								<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->SD, 'getCount')); ?>
</span> (<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->SD, 'getResource/getUnit/getName')); ?>
</span>)
							</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>				
			</div>
			<?php /* tag "div" from line 31 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 32 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 33 */; ?>
<h3>NHÀ CUNG CẤP</h3>
					<?php /* tag "ul" from line 34 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 35 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Supplier1 = new PHPTAL_RepeatController($ctx->Suppliers1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Supplier1 as $ctx->Supplier1): ;
if (null !== ($_tmp_3 = ($ctx->Supplier->getId()==$ctx->Supplier1->getId() ? 'a' : 'c'))):  ;
$_tmp_3 = ' data-theme="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
							<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Supplier1, 'getURLImport')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_5 ?>
>
								<?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier1/number')); ?>
</span>. <?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
</span>
							</a>							
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
				<?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Store, 'getURLUpdLoad')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="gear" data-theme="b"<?php echo $_tmp_5 ?>
>CẬP NHẬT</a>
			</div>
		</div>
		<?php /* tag "div" from line 45 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 45 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/minhtai/mvc/templates/SettingStoreInit.html (edit that file instead) */; ?>