<?php 
function tpl_5208fa8c_ReportSellingDetail__TsNefRVzeRZ1l36mkgDO7A(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling')))):  ;
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
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 18 */; ?>
<h3>1. NHẬP HÀNG</h3>
					<?php /* tag "ul" from line 19 */; ?>
<ul data-role="listview" data-inset="true">
						<?php 
/* tag "li" from line 20 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Order = new PHPTAL_RepeatController($ctx->path($ctx->Customer, 'getOrdersTracking'))
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
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getOrdersTrackingValuePrint')); ?>
</strong></p>
						</li>
					</ul>
				</div>
				<?php /* tag "div" from line 33 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 34 */; ?>
<h3>2. TRẢ TIỀN</h3>
					<?php /* tag "ul" from line 35 */; ?>
<ul data-role="listview" data-inset="true">
						<?php 
/* tag "li" from line 36 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Paid = new PHPTAL_RepeatController($ctx->path($ctx->Customer, 'getPaidsTracking'))
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
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPaidsTrackingValuePrint')); ?>
</strong></p>
						</li>
					</ul>
				</div>
				<?php /* tag "div" from line 49 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 50 */; ?>
<h3>3. TỔNG KẾT</h3>
					<?php /* tag "ul" from line 51 */; ?>
<ul data-role="listview" data-inset="true">
						<?php /* tag "li" from line 52 */; ?>
<li><?php /* tag "strong" from line 52 */; ?>
<strong>NỢ TRƯỚC</strong><?php /* tag "p" from line 52 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 52 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getOldDebtPrint')); ?>
</strong></p></li>
						<?php /* tag "li" from line 53 */; ?>
<li><?php /* tag "strong" from line 53 */; ?>
<strong>NHẬP HÀNG</strong><?php /* tag "p" from line 53 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 53 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getOrdersTrackingValuePrint')); ?>
</strong></p></li>
						<?php /* tag "li" from line 54 */; ?>
<li><?php /* tag "strong" from line 54 */; ?>
<strong>TRẢ TIỀN</strong><?php /* tag "p" from line 54 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 54 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPaidsTrackingValuePrint')); ?>
</strong></p></li>
						<?php /* tag "li" from line 55 */; ?>
<li><?php /* tag "strong" from line 55 */; ?>
<strong>DƯ NỢ MỚI</strong><?php /* tag "p" from line 55 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 55 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getNewDebtPrint')); ?>
</strong></p></li>
					</ul>
				</div>				
			</div>
			<?php /* tag "div" from line 59 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 60 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 61 */; ?>
<h3>KHÁCH HÀNG</h3>
					<?php /* tag "ul" from line 62 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 63 */; ?>
<li><?php /* tag "a" from line 63 */; ?>
<a href="#general">TỔNG KẾT</a></li>
						<?php 
/* tag "li" from line 64 */ ;
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
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_5 = ('#'.$ctx->Customer1->getIdPrint()))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a<?php echo $_tmp_5 ?>
><?php /* tag "span" from line 65 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer1, 'getPrefix')); ?>
</span>  <?php /* tag "span" from line 65 */; ?>
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
		<?php /* tag "div" from line 71 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 71 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	
	<?php /* tag "div" from line 74 */; ?>
<div id="general" data-role="page" class="type-interior">
		<?php /* tag "div" from line 75 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 76 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 77 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_5 ?>
>LUI</a>
			<?php /* tag "a" from line 78 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 80 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 81 */; ?>
<div class="content-primary">								
				<?php /* tag "div" from line 82 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 83 */; ?>
<h3>TỔNG KẾT</h3>
					<?php /* tag "ul" from line 84 */; ?>
<ul data-role="listview" data-inset="true">
						<?php 
/* tag "li" from line 85 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Customer = new PHPTAL_RepeatController($ctx->Customers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Customer as $ctx->Customer): ;
?>
<li>
							<?php /* tag "strong" from line 86 */; ?>
<strong>
								<?php /* tag "span" from line 87 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Customer/number')); ?>
</span>. <?php /* tag "span" from line 87 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPrefix')); ?>
</span> <?php /* tag "span" from line 87 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getName')); ?>
</span>
							</strong>
							<?php /* tag "p" from line 89 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 89 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getNewDebtPrint')); ?>
</strong></p>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						<?php /* tag "li" from line 91 */; ?>
<li>
							<?php /* tag "strong" from line 92 */; ?>
<strong>TỔNG DƯ NỢ MỚI <?php /* tag "BR" from line 92 */; ?>
<BR/> <?php /* tag "span" from line 92 */; ?>
<span><?php echo phptal_escape($ctx->SumStr); ?>
</span></strong>
							<?php /* tag "p" from line 93 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 93 */; ?>
<strong><?php echo phptal_escape($ctx->Sum); ?>
</strong></p>							
						</li>
					</ul>
				</div>				
			</div>
			<?php /* tag "div" from line 98 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 99 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 100 */; ?>
<h3>KHÁCH HÀNG</h3>
					<?php /* tag "ul" from line 101 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 102 */; ?>
<li data-theme="a"><?php /* tag "a" from line 102 */; ?>
<a href="#general">TỔNG KẾT</a></li>
						<?php 
/* tag "li" from line 103 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Customer1 = new PHPTAL_RepeatController($ctx->Customers1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Customer1 as $ctx->Customer1): ;
?>
<li>
							<?php 
/* tag "a" from line 104 */ ;
if (null !== ($_tmp_2 = ('#'.$ctx->Customer1->getIdPrint()))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 104 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer1, 'getPrefix')); ?>
</span>  <?php /* tag "span" from line 104 */; ?>
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
		<?php /* tag "div" from line 110 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 110 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\minhtai\mvc\templates\ReportSellingDetail.html (edit that file instead) */; ?>