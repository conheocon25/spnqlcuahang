<?php 
function tpl_52a6d4a6_ReportSellingDetail__ZGdnyMezhVy4I_TahnNWCQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$_tmp_1->Customer = new PHPTAL_RepeatController($ctx->Customers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Customer as $ctx->Customer): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getIdPrint')))):  ;
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
if ($ctx->IdFillter==1?true:false):  ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling1')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_3 ?>
>LUI</a><?php endif; ?>

			<?php 
/* tag "a" from line 13 */ ;
if ($ctx->IdFillter==2?true:false):  ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling2')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_3 ?>
>LUI</a><?php endif; ?>

			<?php /* tag "a" from line 14 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 16 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 17 */; ?>
<div class="content-primary">
				<?php /* tag "div" from line 18 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 19 */; ?>
<h3>1. NHẬP HÀNG</h3>
					<?php /* tag "ul" from line 20 */; ?>
<ul data-role="listview" data-inset="true">
						<?php 
/* tag "li" from line 21 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Order = new PHPTAL_RepeatController($ctx->path($ctx->Customer, 'getOrdersTracking'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Order as $ctx->Order): ;
?>
<li>
							<?php /* tag "strong" from line 22 */; ?>
<strong>
								<?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Order/number')); ?>
</span>. <?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</span>, 
								<?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getNote')); ?>
</span>
							</strong>								
							<?php /* tag "p" from line 26 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 26 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</strong></p>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						<?php /* tag "li" from line 28 */; ?>
<li>
							<?php /* tag "h3" from line 29 */; ?>
<h3>TỔNG CỘNG</h3>
							<?php /* tag "p" from line 30 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 30 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getOrdersTrackingValuePrint')); ?>
</strong></p>
						</li>
					</ul>
				</div>
				<?php /* tag "div" from line 34 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 35 */; ?>
<h3>2. TRẢ TIỀN</h3>
					<?php /* tag "ul" from line 36 */; ?>
<ul data-role="listview" data-inset="true">
						<?php 
/* tag "li" from line 37 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Paid = new PHPTAL_RepeatController($ctx->path($ctx->Customer, 'getPaidsTracking'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Paid as $ctx->Paid): ;
?>
<li>
							<?php /* tag "strong" from line 38 */; ?>
<strong>
								<?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Paid/number')); ?>
</span>. <?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</span>, 
								<?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getNote')); ?>
</span>
							</strong>								
							<?php /* tag "p" from line 42 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 42 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</strong></p>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						<?php /* tag "li" from line 44 */; ?>
<li>
							<?php /* tag "h3" from line 45 */; ?>
<h3>TỔNG CỘNG</h3>
							<?php /* tag "p" from line 46 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 46 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPaidsTrackingValuePrint')); ?>
</strong></p>
						</li>
					</ul>
				</div>
				<?php /* tag "div" from line 50 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 51 */; ?>
<h3>3. TỔNG KẾT</h3>
					<?php /* tag "ul" from line 52 */; ?>
<ul data-role="listview" data-inset="true">
						<?php /* tag "li" from line 53 */; ?>
<li><?php /* tag "strong" from line 53 */; ?>
<strong>NỢ TRƯỚC</strong><?php /* tag "p" from line 53 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 53 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getOldDebtPrint')); ?>
</strong></p></li>
						<?php /* tag "li" from line 54 */; ?>
<li><?php /* tag "strong" from line 54 */; ?>
<strong>NHẬP HÀNG</strong><?php /* tag "p" from line 54 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 54 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getOrdersTrackingValuePrint')); ?>
</strong></p></li>
						<?php /* tag "li" from line 55 */; ?>
<li><?php /* tag "strong" from line 55 */; ?>
<strong>TRẢ TIỀN</strong><?php /* tag "p" from line 55 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 55 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPaidsTrackingValuePrint')); ?>
</strong></p></li>
						<?php /* tag "li" from line 56 */; ?>
<li><?php /* tag "strong" from line 56 */; ?>
<strong>DƯ NỢ MỚI</strong><?php /* tag "p" from line 56 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 56 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getNewDebtPrint')); ?>
</strong></p></li>
					</ul>
				</div>				
			</div>
			<?php /* tag "div" from line 60 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 61 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 62 */; ?>
<h3>KHÁCH HÀNG</h3>
					<?php /* tag "ul" from line 63 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 64 */; ?>
<li><?php /* tag "a" from line 64 */; ?>
<a href="#general">TỔNG KẾT</a></li>
						<?php 
/* tag "li" from line 65 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Customer1 = new PHPTAL_RepeatController($ctx->Customers1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Customer1 as $ctx->Customer1): ;
if (null !== ($_tmp_4 = ($ctx->Customer->getId()==$ctx->Customer1->getId()?'a':'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_5 = ('#'.$ctx->Customer1->getIdPrint()))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a<?php echo $_tmp_5 ?>
><?php /* tag "span" from line 66 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer1, 'getPrefix')); ?>
</span>  <?php /* tag "span" from line 66 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer1, 'getName')); ?>
</span></a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>			
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 72 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 72 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	
	<?php /* tag "div" from line 75 */; ?>
<div id="general" data-role="page" class="type-interior">
		<?php /* tag "div" from line 76 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 77 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 78 */ ;
if ($ctx->IdFillter==1?true:false):  ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling1')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_5 ?>
>LUI</a><?php endif; ?>

			<?php 
/* tag "a" from line 79 */ ;
if ($ctx->IdFillter==2?true:false):  ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling2')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_4 ?>
>LUI</a><?php endif; ?>

			<?php /* tag "a" from line 80 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 82 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 83 */; ?>
<div class="content-primary">								
				<?php /* tag "div" from line 84 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 85 */; ?>
<h3>TỔNG KẾT</h3>
					<?php /* tag "ul" from line 86 */; ?>
<ul data-role="listview" data-inset="true">
						<?php 
/* tag "li" from line 87 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Customer = new PHPTAL_RepeatController($ctx->Customers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Customer as $ctx->Customer): ;
?>
<li>
							<?php /* tag "strong" from line 88 */; ?>
<strong>
								<?php /* tag "span" from line 89 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Customer/number')); ?>
</span>. <?php /* tag "span" from line 89 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPrefix')); ?>
</span> <?php /* tag "span" from line 89 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getName')); ?>
</span>
							</strong>
							<?php /* tag "p" from line 91 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 91 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getNewDebtPrint')); ?>
</strong></p>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						<?php /* tag "li" from line 93 */; ?>
<li>
							<?php /* tag "strong" from line 94 */; ?>
<strong>TỔNG DƯ NỢ MỚI <?php /* tag "BR" from line 94 */; ?>
<BR/> <?php /* tag "span" from line 94 */; ?>
<span><?php echo phptal_escape($ctx->SumStr); ?>
</span></strong>
							<?php /* tag "p" from line 95 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 95 */; ?>
<strong><?php echo phptal_escape($ctx->Sum); ?>
</strong></p>							
						</li>
					</ul>
				</div>				
			</div>
			<?php /* tag "div" from line 100 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 101 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 102 */; ?>
<h3>KHÁCH HÀNG</h3>
					<?php /* tag "ul" from line 103 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 104 */; ?>
<li data-theme="a"><?php /* tag "a" from line 104 */; ?>
<a href="#general">TỔNG KẾT</a></li>
						<?php 
/* tag "li" from line 105 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Customer1 = new PHPTAL_RepeatController($ctx->Customers1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Customer1 as $ctx->Customer1): ;
?>
<li>
							<?php 
/* tag "a" from line 106 */ ;
if (null !== ($_tmp_1 = ('#'.$ctx->Customer1->getIdPrint()))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 106 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer1, 'getPrefix')); ?>
</span>  <?php /* tag "span" from line 106 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer1, 'getName')); ?>
</span></a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 112 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 112 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\SPN_MinhTai\mvc\templates\ReportSellingDetail.html (edit that file instead) */; ?>