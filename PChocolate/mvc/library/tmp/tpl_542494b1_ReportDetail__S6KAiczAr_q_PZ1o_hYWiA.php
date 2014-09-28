<?php 
function tpl_542494b1_ReportDetail__S6KAiczAr_q_PZ1o_hYWiA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
					<?php 
/* tag "li" from line 13 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Tracking1 = new PHPTAL_RepeatController($ctx->TrackingAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Tracking1 as $ctx->Tracking1): ;
if (null !== ($_tmp_2 = ($ctx->Tracking1->getId()==$ctx->Tracking->getId()?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
						<?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking1, 'getURLView')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
							<?php /* tag "i" from line 15 */; ?>
<i class="icon-book"></i><?php /* tag "span" from line 15 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Tracking1, 'getName')); ?>
</span>							
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
			</div>
		</div>
		<?php /* tag "div" from line 21 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 22 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 23 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 24 */; ?>
<div class="row">
				<?php /* tag "div" from line 25 */; ?>
<div class="container-fluid">
					<?php /* tag "div" from line 26 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 27 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 28 */; ?>
<div class="widget-content nopadding">								
								<?php 
/* tag "table" from line 29 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isAdmin()):  ;
?>
<table class="table table-bordered table-striped table-hover">
									<?php /* tag "thead" from line 30 */; ?>
<thead>
										<?php /* tag "tr" from line 31 */; ?>
<tr>																					
											<?php /* tag "th" from line 32 */; ?>
<th rowspan="2"><?php /* tag "div" from line 32 */; ?>
<div class="text-left">NGÀY</div></th>
											<?php /* tag "th" from line 33 */; ?>
<th colspan="2" width="90"><?php /* tag "div" from line 33 */; ?>
<div class="text-center">BÁN HÀNG</div></th>
											<?php /* tag "th" from line 34 */; ?>
<th rowspan="2" width="90"><?php /* tag "div" from line 34 */; ?>
<div class="text-right">KHO HÀNG</div></th>
											<?php /* tag "th" from line 35 */; ?>
<th colspan="2" width="90"><?php /* tag "div" from line 35 */; ?>
<div class="text-center">TIỀN</div></th>
											<?php /* tag "th" from line 36 */; ?>
<th colspan="2" width="90"><?php /* tag "div" from line 36 */; ?>
<div class="text-center">SỐ DƯ</div></th>											
										</tr>
										<?php /* tag "tr" from line 38 */; ?>
<tr>																																
											<?php /* tag "th" from line 39 */; ?>
<th width="90"><?php /* tag "div" from line 39 */; ?>
<div class="text-right">C.NỢ</div></th>
											<?php /* tag "th" from line 40 */; ?>
<th width="90"><?php /* tag "div" from line 40 */; ?>
<div class="text-right">T.MẶT</div></th>											
											<?php /* tag "th" from line 41 */; ?>
<th width="90"><?php /* tag "div" from line 41 */; ?>
<div class="text-right">K.CHI</div></th>
											<?php /* tag "th" from line 42 */; ?>
<th width="90"><?php /* tag "div" from line 42 */; ?>
<div class="text-right">K.THU</div></th>											
										</tr>
									</thead>
									<?php /* tag "tbody" from line 45 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 46 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->TD = new PHPTAL_RepeatController($ctx->path($ctx->Tracking, 'getDailyAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->TD as $ctx->TD): ;
?>
<tr>											
											<?php /* tag "td" from line 47 */; ?>
<td><?php 
/* tag "div" from line 47 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReport')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div class="TDExe"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->TD, 'getDatePrint')); ?>
</div></td>
											<?php /* tag "td" from line 48 */; ?>
<td align="right"><?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportSellingDebt')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 48 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getSellingDebtPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 49 */; ?>
<td align="right"><?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportSellingCash')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 49 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getSellingCashPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 50 */; ?>
<td align="right"><?php 
/* tag "a" from line 50 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 50 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getStorePrint')); ?>
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportCollect')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 52 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getCollectPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 53 */; ?>
<td align="right"><?php /* tag "b" from line 53 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->TD, 'getValueCashPrint')); ?>
</b></td>
											<?php /* tag "td" from line 54 */; ?>
<td align="right"><?php /* tag "b" from line 54 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->TD, 'getValueDebtPrint')); ?>
</b></td>											
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
/* tag "div" from line 64 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 65 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "script" from line 67 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			//-----------------------------------------------------------------------------------
			//EXE DAILY			
			//-----------------------------------------------------------------------------------						
			$('.TDExe').click(function(){
				var URL = $(this).attr('alt');				
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						$.gritter.add({
							title		:'Thông tin',
							class_name	:'gritter-green',
							text		:'Đã cập nhật xong BÁO CÁO TRONG NGÀY',
							time		:5000,
							sticky		: false
						});
					}
				});
				location.reload();
			});
			
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