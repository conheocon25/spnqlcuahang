<?php 
function tpl_52ce153f_ExportCustomerOrder__F9GrB7495g2jqaLGjn0Wkg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
									</tr>
								</thead>
								<?php /* tag "tbody" from line 42 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 43 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Detail as $ctx->Detail): ;
?>
<tr>
										<?php /* tag "td" from line 44 */; ?>
<td class="center"><?php /* tag "div" from line 44 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
										<?php /* tag "td" from line 45 */; ?>
<td><?php 
/* tag "a" from line 45 */ ;
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
										<?php /* tag "td" from line 46 */; ?>
<td><?php /* tag "div" from line 46 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php /* tag "div" from line 47 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</div></td>
										<?php /* tag "td" from line 48 */; ?>
<td><?php /* tag "div" from line 48 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
										<?php /* tag "td" from line 49 */; ?>
<td><?php /* tag "div" from line 49 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 51 */; ?>
<tr>
										<?php /* tag "td" from line 52 */; ?>
<td colspan="5"><?php /* tag "div" from line 52 */; ?>
<div class="text-right"><?php echo 'TỔNG CỘNG'; ?>
</div></td>
										<?php /* tag "td" from line 53 */; ?>
<td><?php /* tag "div" from line 53 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValue1Print')); ?>
</div></td>
									</tr>
								</tbody>
							</table>
							<?php /* tag "h5" from line 57 */; ?>
<h5>KHUYẾN MÃI</h5>
							<?php /* tag "table" from line 58 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 59 */; ?>
<thead>
									<?php /* tag "tr" from line 60 */; ?>
<tr>
										<?php /* tag "th" from line 61 */; ?>
<th width="40">STT</th>
										<?php /* tag "th" from line 62 */; ?>
<th class="left">TÊN</th>
										<?php /* tag "th" from line 63 */; ?>
<th class="right" width="80">SỐ LƯỢNG</th>
										<?php /* tag "th" from line 64 */; ?>
<th class="left" width="120">ĐƠN VỊ</th>
										<?php /* tag "th" from line 65 */; ?>
<th class="right" width="120">ĐƠN GIÁ</th>
										<?php /* tag "th" from line 66 */; ?>
<th class="right" width="120">T.TIỀN</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 69 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 70 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAllExtra'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Detail as $ctx->Detail): ;
?>
<tr>
										<?php /* tag "td" from line 71 */; ?>
<td class="center"><?php /* tag "div" from line 71 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
										<?php /* tag "td" from line 72 */; ?>
<td><?php 
/* tag "a" from line 72 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_4 = ' data-id="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Detail, 'getResource/getName')))):  ;
$_tmp_5 = ' data-name="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Detail, 'getResource/getId')))):  ;
$_tmp_6 = ' data-idresource="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Detail, 'getCount')))):  ;
$_tmp_7 = ' data-count="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getPrice')))):  ;
$_tmp_2 = ' data-price="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
<?php echo $_tmp_7 ?>
<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</a></td>
										<?php /* tag "td" from line 73 */; ?>
<td><?php /* tag "div" from line 73 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
										<?php /* tag "td" from line 74 */; ?>
<td><?php /* tag "div" from line 74 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</div></td>
										<?php /* tag "td" from line 75 */; ?>
<td><?php /* tag "div" from line 75 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
										<?php /* tag "td" from line 76 */; ?>
<td><?php /* tag "div" from line 76 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 78 */; ?>
<tr>
										<?php /* tag "td" from line 79 */; ?>
<td colspan="5"><?php /* tag "div" from line 79 */; ?>
<div class="text-right"><?php echo 'TỔNG CỘNG'; ?>
</div></td>
										<?php /* tag "td" from line 80 */; ?>
<td><?php /* tag "div" from line 80 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValue2Print')); ?>
</div></td>
									</tr>
								</tbody>
							</table>
							<?php /* tag "h5" from line 84 */; ?>
<h5>TẶNG PHẨM</h5>
						</div>
					</div>
										
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 89 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 90 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 91 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 92 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 92 */; ?>
<h3><?php /* tag "i" from line 92 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT CHI TIẾT ĐƠN HÀNG</h3></div>
								<?php /* tag "form" from line 93 */; ?>
<form id="FormEdit" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 94 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 95 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 96 */; ?>
<div class="controls">
											<?php /* tag "input" from line 97 */; ?>
<input readonly="readonly" id="IdResource2" name="IdResource2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 100 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 101 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 102 */; ?>
<div class="controls">
											<?php /* tag "input" from line 103 */; ?>
<input readonly="readonly" id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 106 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 107 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 108 */; ?>
<div class="controls">
											<?php /* tag "input" from line 109 */; ?>
<input id="Count2" name="Count2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 112 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 113 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 114 */; ?>
<div class="controls">
											<?php /* tag "input" from line 115 */; ?>
<input id="Price2" name="Price2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 118 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 119 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 119 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 120 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 120 */; ?>
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
/* tag "div" from line 130 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_4 = ' alt="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<div id="IdOrder"<?php echo $_tmp_4 ?>
></div>
		<?php 
/* tag "div" from line 131 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 132 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 133 */; ?>
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
			//Load 1 ORDER
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
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
					Data[0] = $('#IdCustomer').attr('alt');
					Data[1] = $('#IdOrder').attr('alt');
					Data[2] = $('#IdResource2').val();
					Data[3] = $('#Count2').val();
					Data[4] = $('#Price2').val();
					
					var URL = "/export/"+Data[0]+"/"+Data[1]+"/"+Data[2]+"/"+Data[3]+"/"+Data[4];
					$.ajax({
						type: "POST",					
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