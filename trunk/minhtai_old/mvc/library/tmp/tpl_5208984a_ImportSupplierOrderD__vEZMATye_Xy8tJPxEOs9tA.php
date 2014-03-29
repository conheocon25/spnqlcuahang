<?php 
function tpl_5208984a_ImportSupplierOrderD__vEZMATye_Xy8tJPxEOs9tA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	
	<?php 
/* tag "div" from line 9 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->OrderImport, 'getIdPrint')))):  ;
$_tmp_1 = ' id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div data-role="page" class="order type-interior"<?php echo $_tmp_1 ?>
>
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 11 */; ?>
<h1><?php echo phptal_escape('ĐƠN HÀNG CỦA '.$ctx->Supplier->getName()); ?>
</h1>
			<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLImport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-icon="gear" data-transition="none"<?php echo $_tmp_2 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 15 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 16 */; ?>
<div class="content-primary">
				<?php /* tag "ul" from line 17 */; ?>
<ul data-role="listview" data-theme="a" data-dividertheme="d" data-inset="true">
					<?php /* tag "li" from line 18 */; ?>
<li>
						<?php 
/* tag "a" from line 19 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OrderImport, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "h3" from line 20 */; ?>
<h3>NHẬP VÀO <?php /* tag "span" from line 20 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OrderImport, 'getStore/getName')); ?>
</span></h3>
							<?php /* tag "span" from line 21 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->OrderImport, 'getDatePrint')); ?>
</span>
							<?php /* tag "p" from line 22 */; ?>
<p><?php /* tag "span" from line 22 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OrderImport, 'getNote')); ?>
</span></p>
						</a>
						<?php /* tag "a" from line 24 */; ?>
<a data-theme="d" href="#" data-icon="gear"></a>
					</li>
				</ul>
				<?php /* tag "ul" from line 27 */; ?>
<ul data-filter="true" data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true" data-filter-placeholder="Gõ để lọc tìm...">
					<?php 
/* tag "li" from line 28 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Detail = new PHPTAL_RepeatController($ctx->path($ctx->OrderImport, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Detail as $ctx->Detail): ;
?>
<li>
						<?php 
/* tag "a" from line 29 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getURLUpdLoad')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
							<?php /* tag "h3" from line 30 */; ?>
<h3>
								<?php /* tag "span" from line 31 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</span>. <?php /* tag "span" from line 31 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</span>
								<?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</span>(<?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</span>) x<?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</span>
							</h3>
							<?php /* tag "span" from line 34 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
				</ul>
				<?php /* tag "ul" from line 38 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true">
					<?php /* tag "li" from line 39 */; ?>
<li data-theme="b">
						<?php /* tag "h3" from line 40 */; ?>
<h3>TỔNG CỘNG:</h3><?php /* tag "span" from line 40 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->OrderImport, 'getValuePrint')); ?>
</span>
						<?php /* tag "p" from line 41 */; ?>
<p>( <?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OrderImport, 'getValueStrPrint')); ?>
</span> )</p>
					</li>
				</ul>
			</div><!--/content-primary -->
			<?php /* tag "div" from line 45 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 46 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 47 */; ?>
<h3>CÁC ĐƠN HÀNG</h3>
					<?php /* tag "div" from line 48 */; ?>
<div align="center" data-role="header" data-theme="d">
						<?php /* tag "div" from line 49 */; ?>
<div data-role="navbar" data-theme="f">
							<?php 
/* tag "b" from line 50 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Page = new PHPTAL_RepeatController($ctx->path($ctx->Pages, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Page as $ctx->Page): ;
?>
<b data-theme="a">
								 <?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->Page->getId()==$ctx->OrderImport->getCurrentImportPage()?'a':'f'))):  ;
$_tmp_2 = ' data-theme="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Page, 'getURL')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_4 ?>
><?php echo phptal_escape($ctx->path($ctx->Page, 'getName')); ?>
</a>
							</b><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</div>
					</div>
					<?php /* tag "ul" from line 55 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 56 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->OI1 = new PHPTAL_RepeatController($ctx->OIs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->OI1 as $ctx->OI1): ;
if (null !== ($_tmp_4 = ($ctx->OrderImport->getId()==$ctx->OI1->getId()?'a':'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->OI1, 'getURLDetail')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->OI1, 'getDatePrint')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>					
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 63 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 63 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/minhtai/mvc/templates/ImportSupplierOrderDetail.html (edit that file instead) */; ?>