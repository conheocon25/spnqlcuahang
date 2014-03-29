<?php 
function tpl_5208fa8c_Import__yCWKUh_0U4H6WtDO9MVUyA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Import.js"></script>
		
	</head>
<?php /* tag "body" from line 9 */; ?>
<body>
	<?php /* tag "div" from line 10 */; ?>
<div id="import" data-role="page" class="type-interior"></div>

	<!-- supplier -->
	<?php 
/* tag "div" from line 13 */ ;
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
		<?php /* tag "div" from line 14 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 15 */; ?>
<h1><?php echo phptal_escape('NHẬP HÀNG TỪ '.$ctx->Supplier->getName()); ?>
</h1>
			<?php 
/* tag "a" from line 16 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="back"<?php echo $_tmp_3 ?>
>LUI</a>
			<?php 
/* tag "a" from line 17 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none"<?php echo $_tmp_3 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 19 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 20 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 21 */; ?>
<ul data-filter="true" data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true" data-filter-placeholder="Gõ để đơn hàng...">
					<?php 
/* tag "li" from line 22 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Order = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getOrdersTop10'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Order as $ctx->Order): ;
?>
<li>
						<?php 
/* tag "a" from line 23 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Order, 'getURLDetail')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_4 ?>
>
							<?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Order/number')); ?>
</span>. <?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</span>
							<?php /* tag "span" from line 25 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</span>
						</a>
						<?php 
/* tag "a" from line 27 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Order, 'getURLDelLoad')))):  ;
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
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Supplier, 'getURLImportInsLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a rel="external" data-theme="b" data-ajax="false" data-role="button" data-icon="plus"<?php echo $_tmp_4 ?>
>THÊM ĐƠN HÀNG</a>
			</div>
			<?php /* tag "div" from line 32 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 33 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 34 */; ?>
<h3>NHÀ CUNG CẤP</h3>
					<?php /* tag "ul" from line 35 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 36 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Supplier1 = new PHPTAL_RepeatController($ctx->Suppliers1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Supplier1 as $ctx->Supplier1): ;
if (null !== ($_tmp_4 = ($ctx->Supplier->getId()==$ctx->Supplier1->getId() ? 'a' : 'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Supplier1, 'getURLImport')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_5 ?>
>
								<?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier1/number')); ?>
</span>. <?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
</span>
							</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
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

Generated by PHPTAL from D:\AppWebServer\SPN_MinhTai\mvc\templates\Import.html (edit that file instead) */; ?>