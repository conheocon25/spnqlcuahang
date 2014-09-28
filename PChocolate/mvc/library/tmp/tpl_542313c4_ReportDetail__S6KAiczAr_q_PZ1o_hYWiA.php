<?php 
function tpl_542313c4_ReportDetail__S6KAiczAr_q_PZ1o_hYWiA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div class="text-right">TIỀN</div></th>											
											<?php /* tag "th" from line 36 */; ?>
<th width="90"><?php /* tag "div" from line 36 */; ?>
<div class="text-right">SỐ DƯ</div></th>											
											<?php /* tag "th" from line 37 */; ?>
<th width="90"><?php /* tag "div" from line 37 */; ?>
<div class="text-center">TK.MÓN</div></th>
											<?php /* tag "th" from line 38 */; ?>
<th width="90"><?php /* tag "div" from line 38 */; ?>
<div class="text-center">TK.KHÁCH</div></th>
										</tr>
										<?php /* tag "tr" from line 40 */; ?>
<tr>																																
											<?php /* tag "th" from line 41 */; ?>
<th width="90"><?php /* tag "div" from line 41 */; ?>
<div class="text-right">C.NỢ</div></th>
											<?php /* tag "th" from line 42 */; ?>
<th width="90"><?php /* tag "div" from line 42 */; ?>
<div class="text-right">T.MẶT</div></th>											
											<?php /* tag "th" from line 43 */; ?>
<th width="90"><?php /* tag "div" from line 43 */; ?>
<div class="text-right">K.CHI</div></th>
											<?php /* tag "th" from line 44 */; ?>
<th width="90"><?php /* tag "div" from line 44 */; ?>
<div class="text-right">K.THU</div></th>
											<?php /* tag "th" from line 45 */; ?>
<th width="90"><?php /* tag "div" from line 45 */; ?>
<div class="text-right">SỐ DƯ</div></th>											
											<?php /* tag "th" from line 46 */; ?>
<th width="90"><?php /* tag "div" from line 46 */; ?>
<div class="text-center">TK.MÓN</div></th>
											<?php /* tag "th" from line 47 */; ?>
<th width="90"><?php /* tag "div" from line 47 */; ?>
<div class="text-center">TK.KHÁCH</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 50 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 51 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->TD = new PHPTAL_RepeatController($ctx->path($ctx->Tracking, 'getDailyAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->TD as $ctx->TD): ;
?>
<tr>											
											<?php /* tag "td" from line 52 */; ?>
<td><?php 
/* tag "div" from line 52 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReport')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div class="TDExe"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->TD, 'getDatePrint')); ?>
</div></td>
											<?php /* tag "td" from line 53 */; ?>
<td align="right"><?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 53 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getSellingPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 54 */; ?>
<td align="right"><?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportSelling')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 54 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getSellingPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 55 */; ?>
<td align="right"><?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 55 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getStorePrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 56 */; ?>
<td align="right"><?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 56 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getPaidPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 57 */; ?>
<td align="right"><?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportCollect')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 57 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TD, 'getCollectPrint')); ?>
</span></a></td>
											<?php /* tag "td" from line 58 */; ?>
<td align="right"><?php /* tag "b" from line 58 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->TD, 'getValuePrint')); ?>
</b></td>
											<?php /* tag "td" from line 59 */; ?>
<td align="center"><?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportCourse')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>Xem</a></td>
											<?php /* tag "td" from line 60 */; ?>
<td align="center"><?php 
/* tag "a" from line 60 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Xem</a></td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 62 */; ?>
<tr>
											<?php /* tag "td" from line 63 */; ?>
<td align="right"><?php /* tag "B" from line 63 */; ?>
<B>TỔNG KẾT</B></td>
											<?php /* tag "td" from line 64 */; ?>
<td align="right"><?php 
/* tag "a" from line 64 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="ViewSellingChart" href="#DialogSellingChart" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 64 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ValueSelling, 'formatCurrency')); ?>
</span></a></td>
											<?php /* tag "td" from line 65 */; ?>
<td align="right"><?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="ViewSellingChart" href="#DialogSellingChart" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 65 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ValueSelling, 'formatCurrency')); ?>
</span></a></td>
											<?php /* tag "td" from line 66 */; ?>
<td align="right"><?php /* tag "B" from line 66 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->ValueStore, 'formatCurrency')); ?>
</B></td>
											<?php /* tag "td" from line 67 */; ?>
<td align="right"><?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="ViewPaidChart" href="#DialogPaidChart" data-toggle="modal"<?php echo $_tmp_3 ?>
><?php /* tag "span" from line 67 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ValuePaid, 'formatCurrency')); ?>
</span></a></td>
											<?php /* tag "td" from line 68 */; ?>
<td align="right"><?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="ViewCollectChart" href="#DialogCollectChart" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 68 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ValueCollect, 'formatCurrency')); ?>
</span></a></td>
											<?php /* tag "td" from line 69 */; ?>
<td align="right"><?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="ViewValueChart" href="#DialogValueChart" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 69 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ValueNew, 'formatCurrency')); ?>
</span></a></td>
											<?php /* tag "td" from line 70 */; ?>
<td align="center"><?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLReportCourse')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>Xem</a></td>
											<?php /* tag "td" from line 71 */; ?>
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
/* tag "div" from line 81 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 82 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 83 */; ?>
<div id="DialogSellingChart" class="modal fade">
			<?php /* tag "div" from line 84 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 85 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 86 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 86 */; ?>
<h3><?php /* tag "i" from line 86 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ DOANH SỐ</h3></div>
					<?php /* tag "div" from line 87 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 88 */; ?>
<div class="modal-body"><?php /* tag "div" from line 88 */; ?>
<div class="SellingChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 89 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 89 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 89 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 94 */; ?>
<div id="DialogPaidChart" class="modal fade">
			<?php /* tag "div" from line 95 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 96 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 97 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 97 */; ?>
<h3><?php /* tag "i" from line 97 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ KHOẢN CHI</h3></div>
					<?php /* tag "div" from line 98 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 99 */; ?>
<div class="modal-body"><?php /* tag "div" from line 99 */; ?>
<div class="PaidChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 100 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 100 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 100 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 105 */; ?>
<div id="DialogCollectChart" class="modal fade">
			<?php /* tag "div" from line 106 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 107 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 108 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 108 */; ?>
<h3><?php /* tag "i" from line 108 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ KHOẢN THU</h3></div>
					<?php /* tag "div" from line 109 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 110 */; ?>
<div class="modal-body"><?php /* tag "div" from line 110 */; ?>
<div class="CollectChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 111 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 111 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 111 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 116 */; ?>
<div id="DialogImportChart" class="modal fade">
			<?php /* tag "div" from line 117 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 118 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 119 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 119 */; ?>
<h3><?php /* tag "i" from line 119 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ NHẬP HÀNG</h3></div>
					<?php /* tag "div" from line 120 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 121 */; ?>
<div class="modal-body"><?php /* tag "div" from line 121 */; ?>
<div class="ImportChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 122 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 122 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 122 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 127 */; ?>
<div id="DialogValueChart" class="modal fade">
			<?php /* tag "div" from line 128 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 129 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 130 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 130 */; ?>
<h3><?php /* tag "i" from line 130 */; ?>
<i class="glyphicons-charts modal-icon"></i>BIỂU ĐỒ QUỸ TIỀN</h3></div>
					<?php /* tag "div" from line 131 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 132 */; ?>
<div class="modal-body"><?php /* tag "div" from line 132 */; ?>
<div class="ValueChart" style="width:100%;height:400px;"></div></div>
						<?php /* tag "div" from line 133 */; ?>
<div class="modal-footer"><?php /* tag "button" from line 133 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 133 */; ?>
<i class="glyphicons-undo"></i> Thu nhỏ lại</button></div>
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "script" from line 138 */; ?>
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