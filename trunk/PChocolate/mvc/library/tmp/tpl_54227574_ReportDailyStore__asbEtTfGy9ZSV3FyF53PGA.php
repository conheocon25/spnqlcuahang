<?php 
function tpl_54227574_ReportDailyStore__asbEtTfGy9ZSV3FyF53PGA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html style="overflow-y:hidden;" lang="en">
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
<div id="content">
			<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php /* tag "div" from line 13 */; ?>
<div class="container-fluid">							
				<?php /* tag "div" from line 14 */; ?>
<div class="row">
					<?php /* tag "div" from line 15 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 16 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 17 */; ?>
<div class="widget-content nopadding">								
								<?php /* tag "div" from line 18 */; ?>
<div role="grid" class="dataTables_wrapper">
									<?php /* tag "table" from line 19 */; ?>
<table class="table table-bordered table-striped table-hover">
										<?php /* tag "thead" from line 20 */; ?>
<thead>
											<?php /* tag "tr" from line 21 */; ?>
<tr role="row">
												<?php /* tag "th" from line 22 */; ?>
<th width="35">STT</th>											
												<?php /* tag "th" from line 23 */; ?>
<th><?php /* tag "div" from line 23 */; ?>
<div class="text-left">TÊN HÀNG</div></th>
												<?php /* tag "th" from line 24 */; ?>
<th width="120"><?php /* tag "div" from line 24 */; ?>
<div class="text-left">ĐƠN VỊ</div></th>	
												<?php /* tag "th" from line 25 */; ?>
<th width="80"><?php /* tag "div" from line 25 */; ?>
<div class="text-right">TỒN CŨ</div></th>
												<?php /* tag "th" from line 26 */; ?>
<th width="80"><?php /* tag "div" from line 26 */; ?>
<div class="text-right">NHẬP</div></th>
												<?php /* tag "th" from line 27 */; ?>
<th width="80"><?php /* tag "div" from line 27 */; ?>
<div class="text-right">XUẤT</div></th>
												<?php /* tag "th" from line 28 */; ?>
<th width="80"><?php /* tag "div" from line 28 */; ?>
<div class="text-right">GIÁ</div></th>
												<?php /* tag "th" from line 29 */; ?>
<th width="80"><?php /* tag "div" from line 29 */; ?>
<div class="text-right">TỒN MỚI</div></th>
												<?php /* tag "th" from line 30 */; ?>
<th width="90"><?php /* tag "div" from line 30 */; ?>
<div class="text-right">GIÁ TRỊ</div></th>
											</tr>
										</thead>
										<?php /* tag "tbody" from line 33 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
											<?php 
/* tag "tr" from line 34 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->TS = new PHPTAL_RepeatController($ctx->TSAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->TS as $ctx->TS): ;
?>
<tr class="gradeA odd">
												<?php /* tag "td" from line 35 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'TS/number')); ?>
</td>
												<?php /* tag "td" from line 36 */; ?>
<td><?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TS, 'getResource/getName')); ?>
</span></td>
												<?php /* tag "td" from line 37 */; ?>
<td><?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TS, 'getResource/getUnit')); ?>
</span></td>												
												<?php /* tag "td" from line 38 */; ?>
<td align="right"><?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TS, 'getCountOldPrint')); ?>
</span></td>
												<?php /* tag "td" from line 39 */; ?>
<td align="right"><?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TS, 'getCountImportPrint')); ?>
</span></td>
												<?php /* tag "td" from line 40 */; ?>
<td align="right"><?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TS, 'getCountExportPrint')); ?>
</span></td>
												<?php /* tag "td" from line 41 */; ?>
<td align="right"><?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TS, 'getPricePrint')); ?>
</span></td>
												<?php /* tag "td" from line 42 */; ?>
<td align="right"><?php /* tag "span" from line 42 */; ?>
<span><?php echo '0'; ?>
</span></td>
												<?php /* tag "td" from line 43 */; ?>
<td align="right"><?php /* tag "span" from line 43 */; ?>
<span><?php echo '0'; ?>
</span></td>
											</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

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
/* tag "div" from line 54 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 55 */ ;
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ReportDailyStore.html (edit that file instead) */; ?>