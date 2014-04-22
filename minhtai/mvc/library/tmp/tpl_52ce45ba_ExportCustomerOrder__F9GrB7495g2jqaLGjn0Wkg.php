<?php 
function tpl_52ce45ba_ExportCustomerOrder__F9GrB7495g2jqaLGjn0Wkg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<body>
		<?php 
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/StyleTools', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "div" from line 12 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 15 */; ?>
<div class="row">
				<?php /* tag "div" from line 16 */; ?>
<div class="col-3">
					<?php /* tag "div" from line 17 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 18 */; ?>
<div class="controls">
							<?php /* tag "input" from line 19 */; ?>
<input id="SearchName" type="text" placeholder="Nhập tìm mặt hàng" style="width:80%;"/>
							<?php /* tag "a" from line 20 */; ?>
<a class="btn RemoveCourseSearch">
								<?php /* tag "i" from line 21 */; ?>
<i class="glyphicons-circle_remove"></i>
							</a>							
						</div>
					</div>
					<?php /* tag "div" from line 25 */; ?>
<div id="ResourceF"></div>
				</div>
				<?php 
/* tag "div" from line 27 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdCustomer" class="col-9"<?php echo $_tmp_1 ?>
>
					<?php /* tag "div" from line 28 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 29 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "h5" from line 30 */; ?>
<h5>ĐƠN HÀNG</h5>
							<?php /* tag "table" from line 31 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 32 */; ?>
<thead>
									<?php /* tag "tr" from line 33 */; ?>
<tr>
										<?php /* tag "th" from line 34 */; ?>
<th width="40">STT</th>
										<?php /* tag "th" from line 35 */; ?>
<th class="left">TÊN</th>
										<?php /* tag "th" from line 36 */; ?>
<th class="right" width="80">SỐ LƯỢNG</th>
										<?php /* tag "th" from line 37 */; ?>
<th class="left" width="120">ĐƠN VỊ</th>
										<?php /* tag "th" from line 38 */; ?>
<th class="right" width="120">ĐƠN GIÁ</th>
										<?php /* tag "th" from line 39 */; ?>
<th class="right" width="120">T.TIỀN</th>
										<?php /* tag "th" from line 40 */; ?>
<th width="40"></th><?php /* tag "th" from line 40 */; ?>
<th width="40"></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 43 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 44 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Detail as $ctx->Detail): ;
?>
<tr>
										<?php /* tag "td" from line 45 */; ?>
<td class="center"><?php /* tag "div" from line 45 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
										<?php /* tag "td" from line 46 */; ?>
<td><?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getResource/getName')))):  ;
$_tmp_4 = ' data-name="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Detail, 'getResource/getId')))):  ;
$_tmp_5 = ' data-idresource="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Detail, 'getCount')))):  ;
$_tmp_6 = ' data-count="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Detail, 'getPrice')))):  ;
$_tmp_7 = ' data-price="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
<?php echo $_tmp_7 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</a></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php /* tag "div" from line 47 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
										<?php /* tag "td" from line 48 */; ?>
<td><?php /* tag "div" from line 48 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</div></td>
										<?php /* tag "td" from line 49 */; ?>
<td><?php /* tag "div" from line 49 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
										<?php /* tag "td" from line 50 */; ?>
<td><?php /* tag "div" from line 50 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
										<?php /* tag "td" from line 51 */; ?>
<td><?php 
/* tag "span" from line 51 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getResource/getId')))):  ;
$_tmp_3 = ' data-idresource="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getCount')))):  ;
$_tmp_4 = ' data-count="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<span class="discount 	glyphicons-download_alt"<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
></span></td>
										<?php /* tag "td" from line 52 */; ?>
<td><?php 
/* tag "span" from line 52 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_5 = ' data-id="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<span class="extra glyphicons-circle_plus"<?php echo $_tmp_5 ?>
></span></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 54 */; ?>
<tr>
										<?php /* tag "td" from line 55 */; ?>
<td colspan="5"><?php /* tag "div" from line 55 */; ?>
<div class="text-right"><?php echo 'TỔNG CỘNG'; ?>
</div></td>
										<?php /* tag "td" from line 56 */; ?>
<td><?php /* tag "div" from line 56 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValue1Print')); ?>
</div></td>
										<?php /* tag "td" from line 57 */; ?>
<td></td>
										<?php /* tag "td" from line 58 */; ?>
<td></td>
									</tr>
								</tbody>
							</table>
							<?php /* tag "h5" from line 62 */; ?>
<h5>KHUYẾN MÃI</h5>
							<?php /* tag "table" from line 63 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 64 */; ?>
<thead>
									<?php /* tag "tr" from line 65 */; ?>
<tr>
										<?php /* tag "th" from line 66 */; ?>
<th width="40">STT</th>
										<?php /* tag "th" from line 67 */; ?>
<th class="left">TÊN</th>
										<?php /* tag "th" from line 68 */; ?>
<th class="right" width="80">SỐ LƯỢNG</th>
										<?php /* tag "th" from line 69 */; ?>
<th class="left" width="120">ĐƠN VỊ</th>
										<?php /* tag "th" from line 70 */; ?>
<th class="right" width="120">ĐƠN GIÁ</th>
										<?php /* tag "th" from line 71 */; ?>
<th class="right" width="120">T.TIỀN</th>
										<?php /* tag "th" from line 72 */; ?>
<th width="40"></th>										
									</tr>
								</thead>
								<?php /* tag "tbody" from line 75 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 76 */ ;
$_tmp_6 = $ctx->repeat ;
$_tmp_6->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAllExtra'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_6->Detail as $ctx->Detail): ;
?>
<tr>
										<?php /* tag "td" from line 77 */; ?>
<td class="center"><?php /* tag "div" from line 77 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
										<?php /* tag "td" from line 78 */; ?>
<td><?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_7 = ' data-id="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getResource/getName')))):  ;
$_tmp_3 = ' data-name="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getResource/getId')))):  ;
$_tmp_4 = ' data-idresource="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Detail, 'getCount')))):  ;
$_tmp_5 = ' data-count="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getPrice')))):  ;
$_tmp_2 = ' data-price="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_7 ?>
<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</a></td>
										<?php /* tag "td" from line 79 */; ?>
<td><?php /* tag "div" from line 79 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
										<?php /* tag "td" from line 80 */; ?>
<td><?php /* tag "div" from line 80 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</div></td>
										<?php /* tag "td" from line 81 */; ?>
<td><?php /* tag "div" from line 81 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
										<?php /* tag "td" from line 82 */; ?>
<td><?php /* tag "div" from line 82 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
										<?php /* tag "td" from line 83 */; ?>
<td><?php 
/* tag "span" from line 83 */ ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_7 = ' data-id="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
?>
<span class="discount glyphicons-remove_2"<?php echo $_tmp_7 ?>
></span></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 85 */; ?>
<tr>
										<?php /* tag "td" from line 86 */; ?>
<td colspan="5"><?php /* tag "div" from line 86 */; ?>
<div class="text-right"><?php echo 'TỔNG CỘNG'; ?>
</div></td>
										<?php /* tag "td" from line 87 */; ?>
<td><?php /* tag "div" from line 87 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValue2Print')); ?>
</div></td>
										<?php /* tag "td" from line 88 */; ?>
<td></td>
									</tr>
								</tbody>
							</table>							
						</div>
					</div>
										
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 96 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 97 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 98 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 99 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 99 */; ?>
<h3><?php /* tag "i" from line 99 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT CHI TIẾT ĐƠN HÀNG</h3></div>
								<?php /* tag "form" from line 100 */; ?>
<form id="FormEdit" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 101 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 102 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 103 */; ?>
<div class="controls">
											<?php /* tag "input" from line 104 */; ?>
<input readonly="readonly" id="IdResource2" name="IdResource2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 107 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 108 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 109 */; ?>
<div class="controls">
											<?php /* tag "input" from line 110 */; ?>
<input readonly="readonly" id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 113 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 114 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 115 */; ?>
<div class="controls">
											<?php /* tag "input" from line 116 */; ?>
<input id="Count2" name="Count2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 119 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 120 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 121 */; ?>
<div class="controls">
											<?php /* tag "input" from line 122 */; ?>
<input id="Price2" name="Price2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 125 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 126 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 126 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 127 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 127 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 137 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="IdOrder"<?php echo $_tmp_3 ?>
></div>
		<?php 
/* tag "div" from line 138 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 139 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 140 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			//---------------------------------------------------------------------------
			//Xử lí search tên			
			$('#SearchName').keyup(function(e){
				var Name 		= $(this).val();										
				$("#ResourceF").load("/search/resource", { Name: Name });
			});
			//-----------------------------------------------------------------------------------
			//CALL COURSE
			$(".RemoveCourseSearch").click(function(){
				$("#ResourceF").html("");
			});
			
			//-----------------------------------------------------------------------------------
			//Exe DISCOUNT
			//-----------------------------------------------------------------------------------
			$('.discount').click(function(){
				var Data = [];
				Data[0] = $('#IdCustomer').attr('alt');
				Data[1] = $('#IdOrder').attr('alt');
				Data[2] = $(this).attr('data-idresource');
				Data[3] = $(this).attr('data-count');
				
				var URL = "/export/"+Data[0]+"/"+Data[1]+"/"+Data[2]+"/"+Data[3]+"/discount";
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			
			
			//-----------------------------------------------------------------------------------
			//Exe DISCOUNT
			//-----------------------------------------------------------------------------------
			$('.extra').click(function(){								
				var URL = "/export/detail/"+$(this).attr('data-id')+"/clone";
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Load 1 ORDER
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				$('#URLUpdButton').attr('alt', $(this).attr('data-id'));
				$('#IdResource2').attr('value', $(this).attr('data-idresource'));
				$('#Name2').attr('value', $(this).attr('data-name'));
				$('#Count2').attr('value', $(this).attr('data-count'));
				$('#Price2').attr('value', $(this).attr('data-price'));
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 TABLE
			//-----------------------------------------------------------------------------------
			$("#FormEdit").validate({
				rules:{
					Price2:{
						number:true,
						min:0,
						required:true
					},
					Count2:{						
						number:true,
						min:0,
						required:true
					}
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.form-group').addClass('has-error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.form-group').removeClass('has-error');
					$(element).parents('.form-group').addClass('has-success');
				},
				submitHandler: function (form) {					
					var Data = [];					
					Data[0] = $('#URLUpdButton').attr('alt');
					Data[1] = $('#IdCustomer').attr('alt');
					Data[2] = $('#IdOrder').attr('alt');
					Data[3] = $('#IdResource2').val();
					Data[4] = $('#Count2').val();
					Data[5] = $('#Price2').val();
										
					var URL = "/object/upd/OrderExportDetail";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){
							location.reload();
						}
					});
					
					return false;
				}
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\ExportCustomerOrder.html (edit that file instead) */; ?>