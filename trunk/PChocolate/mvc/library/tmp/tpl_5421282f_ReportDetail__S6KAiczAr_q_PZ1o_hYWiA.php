<?php 
function tpl_5421282f_ReportDetail__S6KAiczAr_q_PZ1o_hYWiA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th><?php /* tag "div" from line 32 */; ?>
<div class="text-left">NGÀY</div></th>											
											<?php /* tag "th" from line 33 */; ?>
<th width="90"><?php /* tag "div" from line 33 */; ?>
<div class="text-right">BÁN HÀNG</div></th>
											<?php /* tag "th" from line 34 */; ?>
<th width="90"><?php /* tag "div" from line 34 */; ?>
<div class="text-right">NHẬP HÀNG</div></th>
											<?php /* tag "th" from line 35 */; ?>
<th width="90"><?php /* tag "div" from line 35 */; ?>
<div class="text-right">KHO HÀNG</div></th>
											<?php /* tag "th" from line 36 */; ?>
<th width="90"><?php /* tag "div" from line 36 */; ?>
<div class="text-right">TIỀN CHI</div></th>
											<?php /* tag "th" from line 37 */; ?>
<th width="90"><?php /* tag "div" from line 37 */; ?>
<div class="text-right">TIỀN THU</div></th>
											<?php /* tag "th" from line 38 */; ?>
<th width="90"><?php /* tag "div" from line 38 */; ?>
<div class="text-right">QUỸ</div></th>											
											<?php /* tag "th" from line 39 */; ?>
<th width="90"><?php /* tag "div" from line 39 */; ?>
<div class="text-center">TK.MÓN</div></th>
											<?php /* tag "th" from line 40 */; ?>
<th width="90"><?php /* tag "div" from line 40 */; ?>
<div class="text-center">TK.KHÁCH</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 43 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 44 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->TD = new PHPTAL_RepeatController($ctx->path($ctx->Tracking, 'getDailyAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->TD as $ctx->TD): ;
?>
<tr>											
											<?php /* tag "td" from line 45 */; ?>
<td><?php 
/* tag "div" from line 45 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReport')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div class="TDExe"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->TD, 'getDatePrint')); ?>
</div></td>											
											<?php /* tag "td" from line 46 */; ?>
<td align="right"><?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 46 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getSellingPrint')); ?>
</span></a></td>											
											<?php /* tag "td" from line 47 */; ?>
<td align="right"><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 47 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getStorePrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 48 */; ?>
<td align="right"><?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 48 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getPaidPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 49 */; ?>
<td align="right"><?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportCollect')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 49 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getCollectPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 50 */; ?>
<td align="right"><?php /* tag "b" from line 50 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->TD, 'getValuePrint')); ?>
</b></td>
											<?php /* tag "td" from line 51 */; ?>
<td align="center"><?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportCourse')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Xem</a></td>
											<?php /* tag "td" from line 52 */; ?>
<td align="center"><?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Xem</a></td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 54 */; ?>
<tr>
											<?php /* tag "td" from line 55 */; ?>
<td align="right"><?php /* tag "B" from line 55 */; ?>
<B>TỔNG KẾT</B></td>
											<?php /* tag "td" from line 56 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="ViewSellingChart" href="#DialogSellingChart" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 57 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ValueSelling, 'formatCurrency')); ?>
</span></a>
											</td>											
											<?php /* tag "td" from line 59 */; ?>
<td align="right"><?php /* tag "B" from line 59 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->ValueStore, 'formatCurrency')); ?>
</B></td>
											<?php /* tag "td" from line 60 */; ?>
<td align="right">												
												<?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="ViewPaidChart" href="#DialogPaidChart" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 61 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ValuePaid, 'formatCurrency')); ?>
</span></a>
											</td>
											<?php /* tag "td" from line 63 */; ?>
<td align="right">												
												<?php 
/* tag "a" from line 64 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="ViewCollectChart" href="#DialogCollectChart" data-toggle="modal"<?php echo $_tmp_3 ?>
><?php /* tag "span" from line 64 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ValueCollect, 'formatCurrency')); ?>
</span></a>
											</td>
											<?php /* tag "td" from line 66 */; ?>
<td align="right">												
												<?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="ViewValueChart" href="#DialogValueChart" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 67 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ValueNew, 'formatCurrency')); ?>
</span></a>
											</td>
											<?php /* tag "td" from line 69 */; ?>
<td align="center"><?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLReportCourse')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Xem</a></td>
											<?php /* tag "td" from line 70 */; ?>
<td align="center"></td>											
										</tr>
									</tbody>
								</table><?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 80 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 81 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 82 */; ?>
<div id="DialogSellingChart" class="modal fade">
			<?php /* tag "div" from line 83 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 84 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 85 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 85 */; ?>
<h3><?php /* tag "i" from line 85 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ DOANH SỐ</h3></div>
					<?php /* tag "div" from line 86 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 87 */; ?>
<div class="modal-body"><?php /* tag "div" from line 87 */; ?>
<div class="SellingChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 88 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 88 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 88 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 93 */; ?>
<div id="DialogPaidChart" class="modal fade">
			<?php /* tag "div" from line 94 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 95 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 96 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 96 */; ?>
<h3><?php /* tag "i" from line 96 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ KHOẢN CHI</h3></div>
					<?php /* tag "div" from line 97 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 98 */; ?>
<div class="modal-body"><?php /* tag "div" from line 98 */; ?>
<div class="PaidChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 99 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 99 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 99 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 104 */; ?>
<div id="DialogCollectChart" class="modal fade">
			<?php /* tag "div" from line 105 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 106 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 107 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 107 */; ?>
<h3><?php /* tag "i" from line 107 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ KHOẢN THU</h3></div>
					<?php /* tag "div" from line 108 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 109 */; ?>
<div class="modal-body"><?php /* tag "div" from line 109 */; ?>
<div class="CollectChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 110 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 110 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 110 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 115 */; ?>
<div id="DialogImportChart" class="modal fade">
			<?php /* tag "div" from line 116 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 117 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 118 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 118 */; ?>
<h3><?php /* tag "i" from line 118 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ NHẬP HÀNG</h3></div>
					<?php /* tag "div" from line 119 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 120 */; ?>
<div class="modal-body"><?php /* tag "div" from line 120 */; ?>
<div class="ImportChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 121 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 121 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 121 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 126 */; ?>
<div id="DialogValueChart" class="modal fade">
			<?php /* tag "div" from line 127 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 128 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 129 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 129 */; ?>
<h3><?php /* tag "i" from line 129 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ QUỸ TIỀN</h3></div>
					<?php /* tag "div" from line 130 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 131 */; ?>
<div class="modal-body"><?php /* tag "div" from line 131 */; ?>
<div class="ValueChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 132 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 132 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 132 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "script" from line 137 */; ?>
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
				//location.reload();
			});
			
			$(".ViewSellingChart").click(function(){
				var id = $(this).attr("data-id");
				
				var URL = "/report/"+id+"/chart/selling";
				var data = [];
				
				$("#DialogSellingChart").modal('hide');
				$.ajax({
					type: "POST",					
					url: URL,
					async:false,
					dataType: "json",
					success: function(D){
						data = D.data;						
					}	
				});								
				$.plot(".SellingChart", [ data ], {
					series: {bars: {show: true, barWidth: 0.2, align: "center"}},
					xaxis: {mode: "categories", tickLength: 0}
				});				
			});
			
			$(".ViewPaidChart").click(function(){
				var id = $(this).attr("data-id");
				
				var URL = "/report/"+id+"/chart/paid";
				var data = [];
				
				$("#DialogPaidChart").modal('hide');
				$.ajax({
					type: "POST",					
					url: URL,
					async:false,
					dataType: "json",
					success: function(D){
						data = D.data;						
					}	
				});								
				$.plot(".PaidChart", [ data ], {
					series: {bars: {show: true,barWidth: 0.2,align: "center"}},
					xaxis: {mode: "categories",tickLength: 0}
				});				
			});
			
			$(".ViewCollectChart").click(function(){
				var id = $(this).attr("data-id");
				
				var URL = "/report/"+id+"/chart/collect";
				var data = [];
				
				$("#DialogCollectChart").modal('hide');
				$.ajax({
					type: "POST",					
					url: URL,
					async:false,
					dataType: "json",
					success: function(D){
						data = D.data;						
					}	
				});								
				$.plot(".CollectChart", [ data ], {
					series: {bars: {show: true,barWidth: 0.2,align: "center"}},
					xaxis: {mode: "categories",tickLength: 0}
				});				
			});
			
			$(".ViewImportChart").click(function(){
				var id = $(this).attr("data-id");
				
				var URL = "/report/"+id+"/chart/import";
				var data = [];
				
				$("#DialogImportChart").modal('hide');
				$.ajax({
					type: "POST",					
					url: URL,
					async:false,
					dataType: "json",
					success: function(D){
						data = D.data;						
					}	
				});								
				$.plot(".ImportChart", [ data ], {
					series: {bars: {show: true,barWidth: 0.2,align: "center"}},
					xaxis: {mode: "categories",tickLength: 0}
				});				
			});
			
			$(".ViewValueChart").click(function(){
				var id = $(this).attr("data-id");
				
				var URL = "/report/"+id+"/chart/value";
				var data = [];
				
				$("#DialogValueChart").modal('hide');
				$.ajax({
					type: "POST",					
					url: URL,
					async:false,
					dataType: "json",
					success: function(D){
						data = D.data;						
					}	
				});								
				$.plot(".ValueChart", [ data ], {
					series: {bars: {show: true,barWidth: 0.2,align: "center"}},
					xaxis: {mode: "categories",tickLength: 0}
				});				
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