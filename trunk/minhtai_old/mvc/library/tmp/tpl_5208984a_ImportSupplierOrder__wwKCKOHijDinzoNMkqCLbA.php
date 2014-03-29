<?php 
function tpl_5208984a_ImportSupplierOrder__wwKCKOHijDinzoNMkqCLbA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/ImportSupplierOrder.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="main" data-role="page" class="type-interior"></div>
	<?php 
/* tag "div" from line 10 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->OI = new PHPTAL_RepeatController($ctx->OIs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->OI as $ctx->OI): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OI, 'getIdPrint')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div data-role="page" class="order type-interior"<?php echo $_tmp_2 ?>
>
		<?php /* tag "div" from line 11 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 12 */; ?>
<h1><?php echo phptal_escape('ĐƠN HÀNG CỦA '.$ctx->Supplier->getName()); ?>
</h1>
			<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier, 'getURLImport')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_3 ?>
>LUI</a>
			<?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false" data-icon="gear" data-transition="none"<?php echo $_tmp_3 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 16 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 17 */; ?>
<div class="content-primary">
				<?php /* tag "ul" from line 18 */; ?>
<ul data-role="listview" data-theme="a" data-dividertheme="d" data-inset="true">
					<?php /* tag "li" from line 19 */; ?>
<li>
						<?php 
/* tag "a" from line 20 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->OI, 'getURLUpdLoad')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_3 ?>
>
							<?php /* tag "h3" from line 21 */; ?>
<h3>NHẬP VÀO <?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OI, 'getStore/getName')); ?>
</span></h3>
							<?php /* tag "span" from line 22 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->OI, 'getDatePrint')); ?>
</span>
							<?php /* tag "p" from line 23 */; ?>
<p><?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OI, 'getNote')); ?>
</span></p>
						</a>
						<?php /* tag "a" from line 25 */; ?>
<a data-theme="d" href="#" data-icon="gear"></a>
					</li>
				</ul>
				<?php /* tag "ul" from line 28 */; ?>
<ul data-filter="true" data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true" data-filter-placeholder="Gõ để lọc tìm...">
					<?php 
/* tag "li" from line 29 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Detail = new PHPTAL_RepeatController($ctx->path($ctx->OI, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Detail as $ctx->Detail): ;
?>
<li>
						<?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getURLUpdLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
							<?php /* tag "h3" from line 31 */; ?>
<h3>
								<?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</span>. <?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</span>
								<?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</span>(<?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</span>) x<?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</span>
							</h3>
							<?php /* tag "span" from line 35 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
				</ul>
				<?php /* tag "ul" from line 39 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true">
					<?php /* tag "li" from line 40 */; ?>
<li data-theme="b">
						<?php /* tag "h3" from line 41 */; ?>
<h3>TỔNG CỘNG:</h3><?php /* tag "span" from line 41 */; ?>
<span class="ui-li-count"><?php echo phptal_escape($ctx->path($ctx->OI, 'getValuePrint')); ?>
</span>
						<?php /* tag "p" from line 42 */; ?>
<p>( <?php /* tag "span" from line 42 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OI, 'getValueStrPrint')); ?>
</span> )</p>
					</li>
				</ul>
			</div><!--/content-primary -->
			<?php /* tag "div" from line 46 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 47 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 48 */; ?>
<h3>CÁC ĐƠN HÀNG</h3>
					<?php /* tag "ul" from line 49 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 50 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->OI1 = new PHPTAL_RepeatController($ctx->OIs1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->OI1 as $ctx->OI1): ;
if (null !== ($_tmp_3 = ($ctx->OI->getId()==$ctx->OI1->getId()?'a':'c'))):  ;
$_tmp_3 = ' data-theme="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
							<?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->OI1, 'getURLDetail')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_5 ?>
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
		<?php /* tag "div" from line 57 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 57 */; ?>
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

Generated by PHPTAL from /home/spnsoft/public_html/minhtai/mvc/templates/ImportSupplierOrder.html (edit that file instead) */; ?>