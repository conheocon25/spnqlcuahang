<?php 
function tpl_5208fa8c_SettingSupplierResou__F5K9SuqqR_gZI87V08u1FQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingSupplierResource.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="main" data-role="page" class="type-interior"></div>
	<?php 
/* tag "div" from line 10 */ ;
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
		<?php /* tag "div" from line 11 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 12 */; ?>
<h1><?php echo phptal_escape('SẢN PHẨM CỦA '.$ctx->Supplier->getName()); ?>
</h1>
			<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_3 ?>
>LUI</a>
			<?php /* tag "a" from line 14 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 16 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 17 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 18 */; ?>
<ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Gõ để lọc sản phẩm...">
					<?php 
/* tag "li" from line 19 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Resource = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getResources'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Resource as $ctx->Resource): ;
?>
<li>
						<?php 
/* tag "a" from line 20 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Resource, 'getURLUpdLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_4 ?>
>
							<?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Resource/number')); ?>
</span>. <?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getName')); ?>
</span>
							 (<?php /* tag "span" from line 22 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getUnit/getName')); ?>
</span>)
							<?php /* tag "p" from line 23 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 23 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Resource, 'getPrice1Print')); ?>
</strong></p>
						</a>
						<?php 
/* tag "a" from line 25 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Resource, 'getURLDelLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_4 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				<?php 
/* tag "a" from line 28 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Supplier, 'getURLResourceInsLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_4 ?>
>THÊM SẢN PHẨM</a>
			</div><!--/content-primary -->
			<?php /* tag "div" from line 30 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 31 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 32 */; ?>
<h3>NHÀ CUNG CẤP</h3>
					<?php /* tag "ul" from line 33 */; ?>
<ul data-role="listview" data-theme="c">
						<?php 
/* tag "li" from line 34 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Supplier1 = new PHPTAL_RepeatController($ctx->Suppliers1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Supplier1 as $ctx->Supplier1): ;
if (null !== ($_tmp_4 = ($ctx->Supplier1->getId()==$ctx->Supplier->getId() ? 'a' : 'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Supplier1, 'getURLResource')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_5 ?>
>
								<?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier1/number')); ?>
</span>. <?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
</span>
							</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
					<?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Supplier, 'getURLUpdLoad')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="gear" data-theme="b"<?php echo $_tmp_5 ?>
>CẬP NHẬT</a>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 44 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 44 */; ?>
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

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\minhtai\mvc\templates\SettingSupplierResource.html (edit that file instead) */; ?>