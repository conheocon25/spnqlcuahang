<?php 
function tpl_5422c834_ReportDailyPaid__Yubcdkqm8rjERsdo8NcZpg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
								<?php /* tag "H3" from line 19 */; ?>
<H3>KHOẢN CHI KHÁC</H3>
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
$_tmp_1->Paid = new PHPTAL_RepeatController($ctx->PaidAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Paid as $ctx->Paid): ;
?>
<tr>
											<?php /* tag "td" from line 32 */; ?>
<td align="center"><?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 33 */; ?>
<td align="left"><?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</span></td>
											<?php /* tag "td" from line 34 */; ?>
<td align="left"><?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getTerm/getName')); ?>
</span></td>											
											<?php /* tag "td" from line 35 */; ?>
<td align="left"><?php /* tag "span" from line 35 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getNote')); ?>
</span></td>
											<?php /* tag "td" from line 36 */; ?>
<td align="right"><?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</span></td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 38 */; ?>
<tr>
											<?php /* tag "td" from line 39 */; ?>
<td align="right" colspan="4">TỔNG CỘNG</td>
											<?php /* tag "td" from line 40 */; ?>
<td align="right"><?php /* tag "B" from line 40 */; ?>
<B><?php echo phptal_escape($ctx->NTotal->formatCurrency() . ' đ'); ?>
</B></td>
										</tr>
									</tbody>
								</table>								
								<?php /* tag "H3" from line 44 */; ?>
<H3>KHOẢN CHI TRẢ NHÀ CUNG CẤP</H3>
								
								<?php /* tag "H3" from line 46 */; ?>
<H3>KHOẢN CHI ỨNG LƯƠNG</H3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 53 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 54 */ ;
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