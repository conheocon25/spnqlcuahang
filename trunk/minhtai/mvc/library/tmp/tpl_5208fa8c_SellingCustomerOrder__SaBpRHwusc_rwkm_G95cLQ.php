<?php 
function tpl_5208fa8c_SellingCustomerOrder__SaBpRHwusc_rwkm_G95cLQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<?php /* tag "body" from line 8 */; ?>
<body>
	
	<?php 
/* tag "div" from line 10 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->OrderExport, 'getIdPrint')))):  ;
$_tmp_1 = ' id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div data-role="page" class="order type-interior"<?php echo $_tmp_1 ?>
>
		<?php /* tag "div" from line 11 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 12 */; ?>
<h1><?php echo phptal_escape('ĐƠN HÀNG CỦA '.$ctx->Customer->getName()); ?>
</h1>
			<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getURLSelling')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-icon="gear" data-transition="none"<?php echo $_tmp_2 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 16 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 17 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 18 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true">
					<?php /* tag "li" from line 19 */; ?>
<li>
						<?php 
/* tag "a" from line 20 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OrderExport, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "h3" from line 21 */; ?>
<h3>XUẤT TỪ <?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OrderExport, 'getStore/getName')); ?>
</span></h3>
							<?php /* tag "span" from line 22 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->OrderExport, 'getDatePrint')); ?>
</span>
							<?php /* tag "p" from line 23 */; ?>
<p><?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OrderExport, 'getNote')); ?>
</span></p>
						</a>
						<?php 
/* tag "a" from line 25 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OrderExport, 'getURLPrint')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="d" target="blank" data-icon="gear"<?php echo $_tmp_2 ?>
></a>
					</li>
					<?php /* tag "li" from line 27 */; ?>
<li data-role="list-divider">
						CHI TIẾT GỌI <?php /* tag "span" from line 28 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->OrderExport, 'getValue1Print')); ?>
</span>
					</li>
					<?php 
/* tag "li" from line 30 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Detail = new PHPTAL_RepeatController($ctx->path($ctx->OrderExport, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Detail as $ctx->Detail): ;
?>
<li>
						<?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getURLUpdLoad')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
							<?php /* tag "strong" from line 32 */; ?>
<strong>
								<?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</span>. <?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</span>
								<?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</span>(<?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</span>) x<?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</span>
							</strong>
							<?php /* tag "span" from line 36 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span>
						</a>
						<?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getURLDelLoad')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-theme="d" data-icon="delete"<?php echo $_tmp_3 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					<?php /* tag "li" from line 40 */; ?>
<li data-role="list-divider">
						ĐƯỢC KHUYẾN MÃI	<?php /* tag "span" from line 41 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->OrderExport, 'getValue2Print')); ?>
</span>
					</li>
					<?php 
/* tag "li" from line 43 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Detail = new PHPTAL_RepeatController($ctx->path($ctx->OrderExport, 'getDetailExtras'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Detail as $ctx->Detail): ;
?>
<li>
						<?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a rel="external"<?php echo $_tmp_2 ?>
>
							<?php /* tag "strong" from line 45 */; ?>
<strong>
								<?php /* tag "span" from line 46 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</span>. <?php /* tag "span" from line 46 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</span>
								<?php /* tag "span" from line 47 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</span>(<?php /* tag "span" from line 47 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</span>) x<?php /* tag "span" from line 47 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</span>
							</strong>
							<?php /* tag "span" from line 49 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span>
						</a>
						<?php /* tag "a" from line 51 */; ?>
<a data-theme="d" href="#" data-icon="delete"></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					<?php /* tag "li" from line 53 */; ?>
<li data-role="list-divider">
						<?php /* tag "strong" from line 54 */; ?>
<strong>TỔNG CỘNG:<?php /* tag "span" from line 54 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->OrderExport, 'getValuePrint')); ?>
</span>
						<?php /* tag "BR" from line 55 */; ?>
<BR/>
						( <?php /* tag "span" from line 56 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OrderExport, 'getValueStrPrint')); ?>
</span> )
						</strong>
					</li>
				</ul>				
				<?php 
/* tag "a" from line 60 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OrderExport, 'getURLCallLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="b" data-ajax="false" data-role="button" data-icon="plus"<?php echo $_tmp_2 ?>
>GỌI THÊM</a>
				
			</div><!--/content-primary -->
			<?php /* tag "div" from line 63 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 64 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 65 */; ?>
<h3>CÁC ĐƠN HÀNG</h3>
						<?php /* tag "div" from line 66 */; ?>
<div align="center" data-role="header" data-theme="d">
							<?php /* tag "div" from line 67 */; ?>
<div data-role="navbar" data-theme="f">
								<?php 
/* tag "b" from line 68 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Page = new PHPTAL_RepeatController($ctx->path($ctx->Pages, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Page as $ctx->Page): ;
?>
<b>								
									<?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_2 = ($ctx->Page->getId()==$ctx->CurrentPage?'a':'f'))):  ;
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
					<?php /* tag "ul" from line 73 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 74 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->OE1 = new PHPTAL_RepeatController($ctx->OEs1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->OE1 as $ctx->OE1): ;
if (null !== ($_tmp_4 = ($ctx->OrderExport->getId()==$ctx->OE1->getId()?'a':'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 75 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->OE1, 'getURLDetail')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->OE1, 'getDatePrint')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 81 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 81 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\minhtai\mvc\templates\SellingCustomerOrderDetail.html (edit that file instead) */; ?>