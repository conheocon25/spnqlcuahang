<?php 
function tpl_54252825_ReportDetail__S6KAiczAr_q_PZ1o_hYWiA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
			<?php /* tag "div" from line 11 */; ?>
<div id="sidebar">
				<?php /* tag "ul" from line 12 */; ?>
<ul style="display: block;">																				
					<?php /* tag "li" from line 13 */; ?>
<li><?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 13 */; ?>
<i class="icon-book"></i>KHÁCH HÀNG</a></li>
					<?php /* tag "li" from line 14 */; ?>
<li><?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 14 */; ?>
<i class="icon-book"></i>NHÀ CUNG CẤP</a></li>
					<?php /* tag "li" from line 15 */; ?>
<li><?php 
/* tag "a" from line 15 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 15 */; ?>
<i class="icon-book"></i>KHO HÀNG</a></li>
				</ul>
			</div>
		</div>
		<?php /* tag "div" from line 19 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 20 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 21 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 22 */; ?>
<div class="row">
				<?php /* tag "div" from line 23 */; ?>
<div class="container-fluid">
					<?php /* tag "div" from line 24 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 25 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 26 */; ?>
<div class="widget-content nopadding">								
								<?php 
/* tag "table" from line 27 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isAdmin()):  ;
?>
<table class="table table-bordered table-striped table-hover">
									<?php /* tag "thead" from line 28 */; ?>
<thead>
										<?php /* tag "tr" from line 29 */; ?>
<tr>																					
											<?php /* tag "th" from line 30 */; ?>
<th rowspan="2"><?php /* tag "div" from line 30 */; ?>
<div class="text-left">NGÀY</div></th>
											<?php /* tag "th" from line 31 */; ?>
<th colspan="2" width="90"><?php /* tag "div" from line 31 */; ?>
<div class="text-center">BÁN HÀNG</div></th>
											<?php /* tag "th" from line 32 */; ?>
<th colspan="2" width="90"><?php /* tag "div" from line 32 */; ?>
<div class="text-center">KHO HÀNG</div></th>
											<?php /* tag "th" from line 33 */; ?>
<th colspan="2" width="90"><?php /* tag "div" from line 33 */; ?>
<div class="text-center">TIỀN</div></th>
										</tr>
										<?php /* tag "tr" from line 35 */; ?>
<tr>																																
											<?php /* tag "th" from line 36 */; ?>
<th width="90"><?php /* tag "div" from line 36 */; ?>
<div class="text-right">C.NỢ</div></th>
											<?php /* tag "th" from line 37 */; ?>
<th width="90"><?php /* tag "div" from line 37 */; ?>
<div class="text-right">T.MẶT</div></th>
											<?php /* tag "th" from line 38 */; ?>
<th width="90"><?php /* tag "div" from line 38 */; ?>
<div class="text-right">NHẬP</div></th>
											<?php /* tag "th" from line 39 */; ?>
<th width="90"><?php /* tag "div" from line 39 */; ?>
<div class="text-right">XUẤT</div></th>
											<?php /* tag "th" from line 40 */; ?>
<th width="90"><?php /* tag "div" from line 40 */; ?>
<div class="text-right">K.CHI</div></th>
											<?php /* tag "th" from line 41 */; ?>
<th width="90"><?php /* tag "div" from line 41 */; ?>
<div class="text-right">K.THU</div></th>											
										</tr>
									</thead>
									<?php /* tag "tbody" from line 44 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 45 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->TD = new PHPTAL_RepeatController($ctx->path($ctx->Tracking, 'getDailyAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->TD as $ctx->TD): ;
?>
<tr>											
											<?php /* tag "td" from line 46 */; ?>
<td><?php 
/* tag "div" from line 46 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReport')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->TD, 'getDatePrint')); ?>
</div></td>
											<?php /* tag "td" from line 47 */; ?>
<td align="right"><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportSellingDebt')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 47 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getSellingDebtPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 48 */; ?>
<td align="right"><?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportSellingCash')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 48 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getSellingCashPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 49 */; ?>
<td align="right"><?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportImport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 49 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getImportPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 50 */; ?>
<td align="right"><?php 
/* tag "a" from line 50 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportExport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 50 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getExportPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 51 */; ?>
<td align="right"><?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 51 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getPaidPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 52 */; ?>
<td align="right"><?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportCollect')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 52 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getCollectPrint')); ?>
</span></a></td>											
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
										
									</tbody>
								</table><?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 62 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 63 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "script" from line 65 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			//-----------------------------------------------------------------------------------
			//EXE DAILY			
			//-----------------------------------------------------------------------------------						
						
		/*]]>*/
		</script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ReportDetail.html (edit that file instead) */; ?>