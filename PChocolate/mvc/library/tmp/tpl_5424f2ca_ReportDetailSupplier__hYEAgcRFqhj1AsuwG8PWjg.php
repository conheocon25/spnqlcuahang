<?php 
function tpl_5424f2ca_ReportDetailSupplier__hYEAgcRFqhj1AsuwG8PWjg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
									<?php /* tag "table" from line 22 */; ?>
<table class="table table-bordered table-striped table-hover">
										<?php /* tag "thead" from line 23 */; ?>
<thead>
											<?php /* tag "tr" from line 24 */; ?>
<tr role="row">
												<?php /* tag "th" from line 25 */; ?>
<th width="64"><?php /* tag "div" from line 25 */; ?>
<div class="text-center">STT</div></th>
												<?php /* tag "th" from line 26 */; ?>
<th><?php /* tag "div" from line 26 */; ?>
<div class="text-left">NHÀ CUNG CẤP</div></th>
												<?php /* tag "th" from line 27 */; ?>
<th width="120"><?php /* tag "div" from line 27 */; ?>
<div class="text-right">CÒN NỢ</div></th>
											</tr>
										</thead>
										<?php /* tag "tbody" from line 30 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
											<?php 
/* tag "tr" from line 31 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->TS = new PHPTAL_RepeatController($ctx->TSAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->TS as $ctx->TS): ;
?>
<tr class="gradeA odd">
												<?php /* tag "td" from line 32 */; ?>
<td><?php /* tag "div" from line 32 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'TS/number')); ?>
</div></td>
												<?php /* tag "td" from line 33 */; ?>
<td><?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TS, 'getSupplier/getName')); ?>
</span></td>
												<?php /* tag "td" from line 34 */; ?>
<td><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TS, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "div" from line 34 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->TS, 'getValuePrint')); ?>
</div></a></td>
											</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											<?php /* tag "tr" from line 36 */; ?>
<tr>
												<?php /* tag "td" from line 37 */; ?>
<td colspan="2"><?php /* tag "B" from line 37 */; ?>
<B>TỔNG CỘNG</B></td>
												<?php /* tag "td" from line 38 */; ?>
<td><?php /* tag "div" from line 38 */; ?>
<div class="text-right"><?php /* tag "B" from line 38 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->SValue, 'formatCurrency')); ?>
</B></div></td>
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
/* tag "div" from line 49 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 50 */ ;
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ReportDetailSupplier.html (edit that file instead) */; ?>