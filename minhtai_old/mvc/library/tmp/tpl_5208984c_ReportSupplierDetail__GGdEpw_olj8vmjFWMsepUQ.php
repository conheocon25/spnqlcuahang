<?php 
function tpl_5208984c_ReportSupplierDetail__GGdEpw_olj8vmjFWMsepUQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/ReportSupplierDetail.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php 
/* tag "div" from line 9 */ ;
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
<div data-role="page" class="type-interior"<?php echo $_tmp_2 ?>
>
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 11 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_3 ?>
>LUI</a>
			<?php /* tag "a" from line 13 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 15 */; ?>
<div data-role="content">			
			<?php /* tag "div" from line 16 */; ?>
<div class="content-primary">								
				<?php /* tag "div" from line 17 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="a" data-content-theme="d">
					<?php /* tag "h3" from line 18 */; ?>
<h3>1. NHẬP HÀNG</h3>
					<?php /* tag "ul" from line 19 */; ?>
<ul data-role="listview" data-inset="true">						
						<?php 
/* tag "li" from line 20 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Order = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getOrdersTracking'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Order as $ctx->Order): ;
?>
<li>
							<?php /* tag "strong" from line 21 */; ?>
<strong>
								<?php /* tag "span" from line 22 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Order/number')); ?>
</span>. <?php /* tag "span" from line 22 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</span>, 
								<?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getNote')); ?>
</span>
							</strong>								
							<?php /* tag "p" from line 25 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 25 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</strong></p>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						<?php /* tag "li" from line 27 */; ?>
<li>
							<?php /* tag "h3" from line 28 */; ?>
<h3>TỔNG CỘNG</h3>
							<?php /* tag "p" from line 29 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 29 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getOrdersTrackingValuePrint')); ?>
</strong></p>
						</li>							
					</ul>
				</div>				
				<?php /* tag "div" from line 33 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="a" data-content-theme="d">
					<?php /* tag "h3" from line 34 */; ?>
<h3>2. TRẢ TIỀN</h3>
					<?php /* tag "ul" from line 35 */; ?>
<ul data-role="listview" data-inset="true">
						<?php 
/* tag "li" from line 36 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Paid = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getPaidsTracking'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Paid as $ctx->Paid): ;
?>
<li>
							<?php /* tag "strong" from line 37 */; ?>
<strong>
								<?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Paid/number')); ?>
</span>. <?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</span>, 
								<?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getNote')); ?>
</span>
							</strong>								
							<?php /* tag "p" from line 41 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 41 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</strong></p>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						<?php /* tag "li" from line 43 */; ?>
<li>
							<?php /* tag "h3" from line 44 */; ?>
<h3>TỔNG CỘNG</h3>
							<?php /* tag "p" from line 45 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 45 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getPaidsTrackingValuePrint')); ?>
</strong></p>
						</li>
					</ul>
				</div>
				<?php /* tag "div" from line 49 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="a" data-content-theme="d">
					<?php /* tag "h3" from line 50 */; ?>
<h3>3. TỔNG KẾT</h3>
					<?php /* tag "ul" from line 51 */; ?>
<ul data-role="listview" data-inset="true">
						<?php /* tag "li" from line 52 */; ?>
<li><?php /* tag "strong" from line 52 */; ?>
<strong>NỢ TRƯỚC</strong><?php /* tag "p" from line 52 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 52 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getOldDebtPrint')); ?>
</strong></p></li>
						<?php /* tag "li" from line 53 */; ?>
<li><?php /* tag "strong" from line 53 */; ?>
<strong>NHẬP HÀNG</strong><?php /* tag "p" from line 53 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 53 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getOrdersTrackingValuePrint')); ?>
</strong></p></li>
						<?php /* tag "li" from line 54 */; ?>
<li><?php /* tag "strong" from line 54 */; ?>
<strong>TRẢ TIỀN</strong><?php /* tag "p" from line 54 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 54 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getPaidsTrackingValuePrint')); ?>
</strong></p></li>
						<?php /* tag "li" from line 55 */; ?>
<li><?php /* tag "strong" from line 55 */; ?>
<strong>DƯ NỢ MỚI</strong><?php /* tag "p" from line 55 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 55 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getNewDebtPrint')); ?>
</strong></p></li>
					</ul>
				</div>								
			</div><!--/content-primary -->
			<?php /* tag "div" from line 59 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 60 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">				
					<?php /* tag "h3" from line 61 */; ?>
<h3>NHÀ PHÂN PHỐI</h3>
					<?php /* tag "ul" from line 62 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 63 */; ?>
<li><?php /* tag "a" from line 63 */; ?>
<a href="#general">TỔNG KẾT</a></li>
						<?php 
/* tag "li" from line 64 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Supplier1 = new PHPTAL_RepeatController($ctx->Supplier1s)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Supplier1 as $ctx->Supplier1): ;
if (null !== ($_tmp_4 = ($ctx->Supplier1->getId()==$ctx->Supplier->getId()?'a':'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_5 = ('#'.$ctx->Supplier1->getIdPrint()))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a<?php echo $_tmp_5 ?>
><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 71 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 71 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	<?php /* tag "div" from line 73 */; ?>
<div id="general" data-role="page" class="type-interior">
		<?php /* tag "div" from line 74 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 75 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 76 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_5 ?>
>LUI</a>
			<?php /* tag "a" from line 77 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 79 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 80 */; ?>
<div class="content-primary">								
				<?php /* tag "ul" from line 81 */; ?>
<ul data-role="listview" data-inset="true">
					<?php 
/* tag "li" from line 82 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Supplier as $ctx->Supplier): ;
?>
<li>
						<?php /* tag "strong" from line 83 */; ?>
<strong><?php /* tag "span" from line 83 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 83 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span></strong>
						<?php /* tag "p" from line 84 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 84 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getNewDebtPrint')); ?>
</strong></p>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					<?php /* tag "li" from line 86 */; ?>
<li>
						<?php /* tag "strong" from line 87 */; ?>
<strong>TỔNG DƯ NỢ MỚI</strong>
						<?php /* tag "p" from line 88 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 88 */; ?>
<strong><?php echo phptal_escape($ctx->SNewDebt); ?>
</strong></p>
					</li>
				</ul>
			</div>
			<?php /* tag "div" from line 92 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 93 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 94 */; ?>
<h3>NHÀ CUNG CẤP</h3>
					<?php /* tag "ul" from line 95 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 96 */; ?>
<li data-theme="a"><?php /* tag "a" from line 96 */; ?>
<a href="#general">TỔNG KẾT</a></li>
						<?php 
/* tag "li" from line 97 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Supplier1 = new PHPTAL_RepeatController($ctx->Supplier1s)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Supplier1 as $ctx->Supplier1): ;
?>
<li>
							<?php 
/* tag "a" from line 98 */ ;
if (null !== ($_tmp_2 = ('#'.$ctx->Supplier1->getIdPrint()))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 98 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
</span></a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 104 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 104 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/minhtai/mvc/templates/ReportSupplierDetail.html (edit that file instead) */; ?>