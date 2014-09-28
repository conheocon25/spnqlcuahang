<?php 
function tpl_54228f2a_ReportDailyCollect__GVmQci1UG_D7vNfR3FXuTw(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "div" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>
	
	<?php /* tag "body" from line 8 */; ?>
<body data-menu-position="closed">
		<?php 
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "div" from line 11 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 14 */; ?>
<div class="row">
				<?php /* tag "div" from line 15 */; ?>
<div class="container-fluid">
					<?php /* tag "div" from line 16 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 17 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 18 */; ?>
<div class="widget-content nopadding">
								<?php /* tag "h3" from line 19 */; ?>
<h3>CÁC KHOẢN THU CHUNG</h3>
								<?php /* tag "table" from line 20 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 21 */; ?>
<thead>
										<?php /* tag "tr" from line 22 */; ?>
<tr>										
											<?php /* tag "th" from line 23 */; ?>
<th width="5%"><?php /* tag "B" from line 23 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 24 */; ?>
<th width="18%"><?php /* tag "div" from line 24 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 25 */; ?>
<th width="15%"><?php /* tag "div" from line 25 */; ?>
<div class="text-left">LOẠI CHI</div></th>
											<?php /* tag "th" from line 26 */; ?>
<th width="40%"><?php /* tag "div" from line 26 */; ?>
<div class="text-left">DIỄN GIẢI</div></th>
											<?php /* tag "th" from line 27 */; ?>
<th width="22%"><?php /* tag "div" from line 27 */; ?>
<div class="text-right">GIÁ TRỊ</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 30 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 31 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Collect = new PHPTAL_RepeatController($ctx->CollectAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Collect as $ctx->Collect): ;
?>
<tr>
											<?php /* tag "td" from line 32 */; ?>
<td align="center"><?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 33 */; ?>
<td align="left"><?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getDatePrint')); ?>
</span></td>
											<?php /* tag "td" from line 34 */; ?>
<td align="left"><?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getTerm/getName')); ?>
</span></td>
											<?php /* tag "td" from line 35 */; ?>
<td align="left"><?php /* tag "span" from line 35 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getNote')); ?>
</span></td>
											<?php /* tag "td" from line 36 */; ?>
<td align="right"><?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getValuePrint')); ?>
</span></td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
										
									</tbody>
								</table>
								<?php /* tag "h3" from line 40 */; ?>
<h3>CÁC KHOẢN THU KHÁCH HÀNG</h3>
								<?php /* tag "table" from line 41 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 42 */; ?>
<thead>
										<?php /* tag "tr" from line 43 */; ?>
<tr>										
											<?php /* tag "th" from line 44 */; ?>
<th width="5%"><?php /* tag "B" from line 44 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 45 */; ?>
<th width="18%"><?php /* tag "div" from line 45 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 46 */; ?>
<th width="15%"><?php /* tag "div" from line 46 */; ?>
<div class="text-left">KHÁCH HÀNG</div></th>
											<?php /* tag "th" from line 47 */; ?>
<th width="40%"><?php /* tag "div" from line 47 */; ?>
<div class="text-left">DIỄN GIẢI</div></th>
											<?php /* tag "th" from line 48 */; ?>
<th width="22%"><?php /* tag "div" from line 48 */; ?>
<div class="text-right">GIÁ TRỊ</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 51 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 52 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Collect = new PHPTAL_RepeatController($ctx->CollectCustomerAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Collect as $ctx->Collect): ;
?>
<tr>
											<?php /* tag "td" from line 53 */; ?>
<td align="center"><?php /* tag "span" from line 53 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 54 */; ?>
<td align="left"><?php /* tag "span" from line 54 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getDatePrint')); ?>
</span></td>
											<?php /* tag "td" from line 55 */; ?>
<td align="left"><?php /* tag "span" from line 55 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getCustomer/getName')); ?>
</span></td>
											<?php /* tag "td" from line 56 */; ?>
<td align="left"><?php /* tag "span" from line 56 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getNote')); ?>
</span></td>
											<?php /* tag "td" from line 57 */; ?>
<td align="right"><?php /* tag "span" from line 57 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getValuePrint')); ?>
</span></td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 59 */; ?>
<tr>
											<?php /* tag "td" from line 60 */; ?>
<td align="right" colspan="4">TỔNG CỘNG</td>
											<?php /* tag "td" from line 61 */; ?>
<td align="right"><?php /* tag "B" from line 61 */; ?>
<B><?php echo phptal_escape($ctx->NTotal->formatCurrency() . ' đ'); ?>
</B></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 71 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 72 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ReportDailyCollect.html (edit that file instead) */; ?>