<?php 
function tpl_54252899_ReportDailyPaid__Yubcdkqm8rjERsdo8NcZpg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php /* tag "body" from line 7 */; ?>
<body data-menu-position="closed">
		<?php 
/* tag "div" from line 8 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php /* tag "div" from line 9 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 12 */; ?>
<div class="row">
				<?php /* tag "div" from line 13 */; ?>
<div class="container-fluid">
					<?php /* tag "div" from line 14 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 15 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 16 */; ?>
<div class="widget-content nopadding">								
								<?php /* tag "H3" from line 17 */; ?>
<H3>KHOẢN CHI TRẢ KHÁC</H3>
								<?php /* tag "table" from line 18 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 19 */; ?>
<thead>
										<?php /* tag "tr" from line 20 */; ?>
<tr>										
											<?php /* tag "th" from line 21 */; ?>
<th width="5%"><?php /* tag "B" from line 21 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 22 */; ?>
<th width="18%"><?php /* tag "div" from line 22 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 23 */; ?>
<th width="15%"><?php /* tag "div" from line 23 */; ?>
<div class="text-left">LOẠI CHI</div></th>
											<?php /* tag "th" from line 24 */; ?>
<th width="40%"><?php /* tag "div" from line 24 */; ?>
<div class="text-left">DIỄN GIẢI</div></th>
											<?php /* tag "th" from line 25 */; ?>
<th width="22%"><?php /* tag "div" from line 25 */; ?>
<div class="text-right">GIÁ TRỊ</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 28 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 29 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Paid = new PHPTAL_RepeatController($ctx->PaidGeneralAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Paid as $ctx->Paid): ;
?>
<tr>
											<?php /* tag "td" from line 30 */; ?>
<td align="center"><?php /* tag "span" from line 30 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 31 */; ?>
<td align="left"><?php /* tag "span" from line 31 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</span></td>
											<?php /* tag "td" from line 32 */; ?>
<td align="left"><?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getTerm/getName')); ?>
</span></td>											
											<?php /* tag "td" from line 33 */; ?>
<td align="left"><?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getNote')); ?>
</span></td>
											<?php /* tag "td" from line 34 */; ?>
<td align="right"><?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</span></td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 36 */; ?>
<tr>
											<?php /* tag "td" from line 37 */; ?>
<td align="right" colspan="4"><?php /* tag "B" from line 37 */; ?>
<B>(1) = </B></td>
											<?php /* tag "td" from line 38 */; ?>
<td align="right"><?php /* tag "B" from line 38 */; ?>
<B><?php echo phptal_escape($ctx->NTotal1->formatCurrency() . ' đ'); ?>
</B></td>
										</tr>
									</tbody>
								</table>
								<?php /* tag "H3" from line 42 */; ?>
<H3>KHOẢN CHI TRẢ NHÂN VIÊN</H3>
								<?php /* tag "table" from line 43 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 44 */; ?>
<thead>
										<?php /* tag "tr" from line 45 */; ?>
<tr>										
											<?php /* tag "th" from line 46 */; ?>
<th width="5%"><?php /* tag "B" from line 46 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 47 */; ?>
<th width="18%"><?php /* tag "div" from line 47 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 48 */; ?>
<th width="15%"><?php /* tag "div" from line 48 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>
											<?php /* tag "th" from line 49 */; ?>
<th width="40%"><?php /* tag "div" from line 49 */; ?>
<div class="text-left">DIỄN GIẢI</div></th>
											<?php /* tag "th" from line 50 */; ?>
<th width="22%"><?php /* tag "div" from line 50 */; ?>
<div class="text-right">GIÁ TRỊ</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 53 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 54 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Paid = new PHPTAL_RepeatController($ctx->PaidEmployeeAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Paid as $ctx->Paid): ;
?>
<tr>
											<?php /* tag "td" from line 55 */; ?>
<td align="center"><?php /* tag "span" from line 55 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 56 */; ?>
<td align="left"><?php /* tag "span" from line 56 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</span></td>
											<?php /* tag "td" from line 57 */; ?>
<td align="left"><?php /* tag "span" from line 57 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getEmployee/getName')); ?>
</span></td>
											<?php /* tag "td" from line 58 */; ?>
<td align="left"><?php /* tag "span" from line 58 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getNote')); ?>
</span></td>
											<?php /* tag "td" from line 59 */; ?>
<td align="right"><?php /* tag "span" from line 59 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</span></td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 61 */; ?>
<tr>
											<?php /* tag "td" from line 62 */; ?>
<td align="right" colspan="4"><?php /* tag "B" from line 62 */; ?>
<B>(3) = </B></td>
											<?php /* tag "td" from line 63 */; ?>
<td align="right"><?php /* tag "B" from line 63 */; ?>
<B><?php echo phptal_escape($ctx->NTotal3->formatCurrency() . ' đ'); ?>
</B></td>
										</tr>
										<?php /* tag "tr" from line 65 */; ?>
<tr>
											<?php /* tag "td" from line 66 */; ?>
<td align="right" colspan="4"><?php /* tag "B" from line 66 */; ?>
<B>TỔNG CỘNG = (1) + (2) + (3)</B></td>
											<?php /* tag "td" from line 67 */; ?>
<td align="right"><?php /* tag "B" from line 67 */; ?>
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
/* tag "div" from line 77 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 78 */ ;
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ReportDailyPaid.html (edit that file instead) */; ?>