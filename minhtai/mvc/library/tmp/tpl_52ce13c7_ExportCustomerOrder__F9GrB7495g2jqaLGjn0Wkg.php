<?php 
function tpl_52ce13c7_ExportCustomerOrder__F9GrB7495g2jqaLGjn0Wkg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div class="col-4">
					<?php /* tag "div" from line 17 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 18 */; ?>
<div class="controls">
							<?php /* tag "input" from line 19 */; ?>
<input id="SearchName" type="text" placeholder="Nhập tìm mặt hàng" style="width:85%;"/>
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
<div id="IdCustomer" class="col-8"<?php echo $_tmp_1 ?>
>
					<?php /* tag "div" from line 28 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 29 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 30 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 31 */; ?>
<thead>
									<?php /* tag "tr" from line 32 */; ?>
<tr>
										<?php /* tag "th" from line 33 */; ?>
<th width="40">STT</th>
										<?php /* tag "th" from line 34 */; ?>
<th class="left">TÊN</th>
										<?php /* tag "th" from line 35 */; ?>
<th class="right" width="80">SỐ LƯỢNG</th>
										<?php /* tag "th" from line 36 */; ?>
<th class="left" width="120">ĐƠN VỊ</th>
										<?php /* tag "th" from line 37 */; ?>
<th class="right" width="120">ĐƠN GIÁ</th>
										<?php /* tag "th" from line 38 */; ?>
<th class="right" width="120">T.TIỀN</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 41 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 42 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Detail as $ctx->Detail): ;
?>
<tr>
										<?php /* tag "td" from line 43 */; ?>
<td class="center"><?php /* tag "div" from line 43 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
										<?php /* tag "td" from line 44 */; ?>
<td><?php 
/* tag "a" from line 44 */ ;
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
										<?php /* tag "td" from line 45 */; ?>
<td><?php /* tag "div" from line 45 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
										<?php /* tag "td" from line 46 */; ?>
<td><?php /* tag "div" from line 46 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</div></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php /* tag "div" from line 47 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
										<?php /* tag "td" from line 48 */; ?>
<td><?php /* tag "div" from line 48 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 50 */; ?>
<tr>
										<?php /* tag "td" from line 51 */; ?>
<td colspan="5"><?php /* tag "div" from line 51 */; ?>
<div class="text-right"><?php echo 'TỔNG CỘNG'; ?>
</div></td>
										<?php /* tag "td" from line 52 */; ?>
<td><?php /* tag "div" from line 52 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</div></td>
									</tr>
								</tbody>																
							</table>
						</div>
					</div>
										
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 60 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 61 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 62 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 63 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 63 */; ?>
<h3><?php /* tag "i" from line 63 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT CHI TIẾT ĐƠN HÀNG</h3></div>
								<?php /* tag "form" from line 64 */; ?>
<form id="FormEdit" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 65 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 66 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 67 */; ?>
<div class="controls">
											<?php /* tag "input" from line 68 */; ?>
<input readonly="readonly" id="IdResource2" name="IdResource2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 71 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 72 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 73 */; ?>
<div class="controls">
											<?php /* tag "input" from line 74 */; ?>
<input readonly="readonly" id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 77 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 78 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 79 */; ?>
<div class="controls">
											<?php /* tag "input" from line 80 */; ?>
<input id="Count2" name="Count2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 83 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 84 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 85 */; ?>
<div class="controls">
											<?php /* tag "input" from line 86 */; ?>
<input id="Price2" name="Price2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 89 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 90 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 90 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 91 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 91 */; ?>
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
/* tag "div" from line 101 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="IdOrder"<?php echo $_tmp_3 ?>
></div>
		<?php 
/* tag "div" from line 102 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 103 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 104 */; ?>
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