<?php 
function tpl_5424eae1_ReportDetailCustomer__fOjWh9bGa2vybOBYe2WsNA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "div" from line 10 */; ?>
<div class="menu">
			
		</div>
		<?php /* tag "div" from line 13 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 15 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php /* tag "div" from line 16 */; ?>
<div class="container-fluid">							
				<?php /* tag "div" from line 17 */; ?>
<div class="row">
					<?php /* tag "div" from line 18 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 19 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 20 */; ?>
<div class="widget-content nopadding">
								<?php /* tag "div" from line 21 */; ?>
<div role="grid" class="dataTables_wrapper">
									<?php /* tag "H3" from line 22 */; ?>
<H3>BẢNG TỔNG KẾT</H3>
									<?php /* tag "table" from line 23 */; ?>
<table class="table table-striped table-hover">										
										<?php /* tag "tbody" from line 24 */; ?>
<tbody>											
											<?php /* tag "tr" from line 25 */; ?>
<tr>
												<?php /* tag "td" from line 26 */; ?>
<td align="right"><?php /* tag "B" from line 26 */; ?>
<B>NỢ THÁNG TRƯỚC</B></td>
												<?php /* tag "td" from line 27 */; ?>
<td align="right" width="120"><?php /* tag "B" from line 27 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NVO, 'formatCurrency')); ?>
</B> đ</td>
											</tr>											
											<?php /* tag "tr" from line 29 */; ?>
<tr>
												<?php /* tag "td" from line 30 */; ?>
<td align="right"><?php /* tag "B" from line 30 */; ?>
<B>MUA THIẾU</B></td>
												<?php /* tag "td" from line 31 */; ?>
<td align="right" width="120"><?php /* tag "B" from line 31 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NVS2, 'formatCurrency')); ?>
</B> đ</td>
											</tr>											
											<?php /* tag "tr" from line 33 */; ?>
<tr>
												<?php /* tag "td" from line 34 */; ?>
<td align="right"><?php /* tag "B" from line 34 */; ?>
<B>TRẢ TIỀN</B></td>
												<?php /* tag "td" from line 35 */; ?>
<td align="right" width="120"><?php /* tag "B" from line 35 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NVC, 'formatCurrency')); ?>
</B> đ</td>
											</tr>
											<?php /* tag "tr" from line 37 */; ?>
<tr>
												<?php /* tag "td" from line 38 */; ?>
<td align="right"><?php /* tag "B" from line 38 */; ?>
<B>TỔNG NỢ HIỆN TẠI</B></td>
												<?php /* tag "td" from line 39 */; ?>
<td align="right" width="120"><?php /* tag "B" from line 39 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NVN, 'formatCurrency')); ?>
</B> đ</td>
											</tr>
										</tbody>
									</table>
									
									<?php /* tag "p" from line 44 */; ?>
<p> Trong đó chi tiết như sau:</p>									
									<?php /* tag "H3" from line 45 */; ?>
<H3>CÁC GIAO DỊCH</H3>
									<?php /* tag "table" from line 46 */; ?>
<table class="table table-bordered table-striped table-hover">
										<?php /* tag "thead" from line 47 */; ?>
<thead>
											<?php /* tag "tr" from line 48 */; ?>
<tr role="row">
												<?php /* tag "th" from line 49 */; ?>
<th width="32"><?php /* tag "div" from line 49 */; ?>
<div class="text-left">STT</div></th>
												<?php /* tag "th" from line 50 */; ?>
<th width="120"><?php /* tag "div" from line 50 */; ?>
<div class="text-left">THỜI ĐIỂM</div></th>
												<?php /* tag "th" from line 51 */; ?>
<th width="120"><?php /* tag "div" from line 51 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>
												<?php /* tag "th" from line 52 */; ?>
<th width="160"><?php /* tag "div" from line 52 */; ?>
<div class="text-left">ĐỊA ĐIỂM</div></th>
												<?php /* tag "th" from line 53 */; ?>
<th><?php /* tag "div" from line 53 */; ?>
<div class="text-left">GHI CHÚ</div></th>
												<?php /* tag "th" from line 54 */; ?>
<th width="120"><?php /* tag "div" from line 54 */; ?>
<div class="text-right">PHIẾU THIẾU</div></th>
												<?php /* tag "th" from line 55 */; ?>
<th width="120"><?php /* tag "div" from line 55 */; ?>
<div class="text-right">TÍNH ĐỦ</div></th>
											</tr>
										</thead>
										<?php /* tag "tbody" from line 58 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
											<?php 
/* tag "tr" from line 59 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Session = new PHPTAL_RepeatController($ctx->SessionAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Session as $ctx->Session): ;
?>
<tr class="gradeA odd">
												<?php /* tag "td" from line 60 */; ?>
<td><?php /* tag "span" from line 60 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Session/number')); ?>
</span></td>
												<?php /* tag "td" from line 61 */; ?>
<td><?php /* tag "span" from line 61 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</span></td>
												<?php /* tag "td" from line 62 */; ?>
<td><?php /* tag "span" from line 62 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span></td>
												<?php /* tag "td" from line 63 */; ?>
<td><?php /* tag "span" from line 63 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getDomain/getName')); ?>
</span> / <?php /* tag "span" from line 63 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getName')); ?>
</span></td>
												<?php /* tag "td" from line 64 */; ?>
<td><?php /* tag "span" from line 64 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getNote')); ?>
</span></td>
												<?php /* tag "td" from line 65 */; ?>
<td align="right">
													<?php 
/* tag "span" from line 66 */ ;
if ($ctx->Session->getStatus()==2):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span><?php endif; ?>

												</td>
												<?php /* tag "td" from line 68 */; ?>
<td align="right">
													<?php 
/* tag "span" from line 69 */ ;
if ($ctx->Session->getStatus()==1):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span><?php endif; ?>

												</td>
											</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											<?php /* tag "tr" from line 72 */; ?>
<tr>
												<?php /* tag "td" from line 73 */; ?>
<td align="right" colspan="5"><?php /* tag "B" from line 73 */; ?>
<B>TỔNG CỘNG</B></td>
												<?php /* tag "td" from line 74 */; ?>
<td align="right"><?php /* tag "B" from line 74 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NVS2, 'formatCurrency')); ?>
</B> đ</td>
												<?php /* tag "td" from line 75 */; ?>
<td align="right"><?php /* tag "B" from line 75 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NVS1, 'formatCurrency')); ?>
</B> đ</td>
											</tr>
										</tbody>
									</table>
									<?php /* tag "H3" from line 79 */; ?>
<H3>TRẢ TIỀN</H3>
									<?php /* tag "table" from line 80 */; ?>
<table class="table table-bordered table-striped table-hover">
										<?php /* tag "thead" from line 81 */; ?>
<thead>
											<?php /* tag "tr" from line 82 */; ?>
<tr role="row">
												<?php /* tag "th" from line 83 */; ?>
<th width="32"><?php /* tag "div" from line 83 */; ?>
<div class="text-left">STT</div></th>
												<?php /* tag "th" from line 84 */; ?>
<th width="120"><?php /* tag "div" from line 84 */; ?>
<div class="text-left">THỜI ĐIỂM</div></th>
												<?php /* tag "th" from line 85 */; ?>
<th><?php /* tag "div" from line 85 */; ?>
<div class="text-left">GHI CHÚ</div></th>												
												<?php /* tag "th" from line 86 */; ?>
<th width="120"><?php /* tag "div" from line 86 */; ?>
<div class="text-right">TIỀN TRẢ</div></th>
											</tr>
										</thead>
										<?php /* tag "tbody" from line 89 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
											<?php 
/* tag "tr" from line 90 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Collect = new PHPTAL_RepeatController($ctx->CollectAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Collect as $ctx->Collect): ;
?>
<tr class="gradeA odd">
												<?php /* tag "td" from line 91 */; ?>
<td><?php /* tag "span" from line 91 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Collect/number')); ?>
</span></td>
												<?php /* tag "td" from line 92 */; ?>
<td><?php /* tag "span" from line 92 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getDatePrint')); ?>
</span></td>
												<?php /* tag "td" from line 93 */; ?>
<td><?php /* tag "span" from line 93 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getNote')); ?>
</span></td>
												<?php /* tag "td" from line 94 */; ?>
<td align="right"><?php /* tag "span" from line 94 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Collect, 'getValuePrint')); ?>
</span></td>
											</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											<?php /* tag "tr" from line 96 */; ?>
<tr>
												<?php /* tag "td" from line 97 */; ?>
<td align="right" colspan="3"><?php /* tag "B" from line 97 */; ?>
<B>TỔNG CỘNG</B></td>
												<?php /* tag "td" from line 98 */; ?>
<td align="right"><?php /* tag "B" from line 98 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NVC, 'formatCurrency')); ?>
</B> đ</td>
											</tr>
										</tbody>
									</table>									
																		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 110 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 111 */ ;
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ReportDetailCustomerDetail.html (edit that file instead) */; ?>