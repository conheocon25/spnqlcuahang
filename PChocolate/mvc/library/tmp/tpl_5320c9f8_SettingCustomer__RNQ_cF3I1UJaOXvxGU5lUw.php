<?php 
function tpl_5320c9f8_SettingCustomer__RNQ_cF3I1UJaOXvxGU5lUw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php /* tag "body" from line 7 */; ?>
<body>
		<?php 
/* tag "div" from line 8 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/StyleTools', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/MenuSetting', $_thistpl) ;
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
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 14 */; ?>
<div class="row">
				<?php /* tag "div" from line 15 */; ?>
<div class="col-12">
					<?php /* tag "a" from line 16 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 17 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 19 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 20 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 22 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 23 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 24 */; ?>
<table class="table table-bordered table-striped table-hover with-check">
								<?php /* tag "thead" from line 25 */; ?>
<thead>
									<?php /* tag "tr" from line 26 */; ?>
<tr>
										<?php /* tag "th" from line 27 */; ?>
<th width="40"><?php /* tag "input" from line 27 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 28 */; ?>
<th width="200" class="left">TÊN</th>
										<?php /* tag "th" from line 29 */; ?>
<th width="120" class="left">CMND</th>
										<?php /* tag "th" from line 30 */; ?>
<th width="120" class="left">ĐIỆN THOẠI</th>
										<?php /* tag "th" from line 31 */; ?>
<th width="120" class="left">GIẢM GIÁ</th>
										<?php /* tag "th" from line 32 */; ?>
<th class="left">ĐỊA CHỈ</th>
										<?php /* tag "th" from line 33 */; ?>
<th width="40"><?php /* tag "i" from line 33 */; ?>
<i class="glyphicons-edit"></i></th>
										<?php /* tag "th" from line 34 */; ?>
<th width="40"><?php /* tag "i" from line 34 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 37 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 38 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Customer = new PHPTAL_RepeatController($ctx->CustomerAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Customer as $ctx->Customer): ;
?>
<tr>
										<?php /* tag "td" from line 39 */; ?>
<td class="center"><?php 
/* tag "input" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_2 ?>
/></td>
										<?php /* tag "td" from line 40 */; ?>
<td><?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="Customer"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Customer, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 41 */; ?>
<td><?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getCard')); ?>
</span></td>
										<?php /* tag "td" from line 42 */; ?>
<td><?php /* tag "span" from line 42 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPhone')); ?>
</span></td>
										<?php /* tag "td" from line 43 */; ?>
<td><?php /* tag "span" from line 43 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getDiscount')); ?>
</span></td>
										<?php /* tag "td" from line 44 */; ?>
<td><?php /* tag "span" from line 44 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getAddress')); ?>
</span></td>
										<?php /* tag "td" from line 45 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="Customer"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 47 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 50 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 52 */; ?>
<i class="glyphicon glyphicon-remove"></i>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
							</table>							
						</div>
					</div>					
					<?php 
/* tag "div" from line 60 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>


					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 63 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 64 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 65 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 66 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 66 */; ?>
<h3><?php /* tag "i" from line 66 */; ?>
<i class="glyphicons-user modal-icon"></i>THÊM MỚI KHÁCH HÀNG</h3></div>								
								<?php /* tag "form" from line 67 */; ?>
<form id="FormCustomerInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 68 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 69 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 70 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 71 */; ?>
<label class="control-label">Tên</label>
												<?php /* tag "div" from line 72 */; ?>
<div class="controls">
													<?php /* tag "input" from line 73 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
												</div>
											</div>																															
											<?php /* tag "div" from line 76 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 77 */; ?>
<label class="control-label">Điện thoại</label>
												<?php /* tag "div" from line 78 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 79 */; ?>
<input id="Phone1" name="Phone1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 82 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 83 */; ?>
<label class="control-label">Loại</label>
												<?php /* tag "div" from line 84 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 85 */; ?>
<input id="Type1" name="Type1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 88 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 89 */; ?>
<label class="control-label">CMND</label>
												<?php /* tag "div" from line 90 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 91 */; ?>
<input id="Card1" name="Card1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 94 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 95 */; ?>
<label class="control-label">Ghi chú</label>
												<?php /* tag "div" from line 96 */; ?>
<div class="controls">
													<?php /* tag "input" from line 97 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 100 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 101 */; ?>
<label class="control-label">Địa chỉ</label>
												<?php /* tag "div" from line 102 */; ?>
<div class="controls">
													<?php /* tag "input" from line 103 */; ?>
<input id="Address1" name="Address1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 106 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 107 */; ?>
<label class="control-label">Giảm giá</label>
												<?php /* tag "div" from line 108 */; ?>
<div class="controls">
													<?php /* tag "input" from line 109 */; ?>
<input id="Discount1" name="Discount1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 114 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 115 */; ?>
<button class="btn btn-primary btn-small" id="URLInsButton"><?php /* tag "i" from line 115 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 116 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 116 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>								
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 125 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 126 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 127 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 128 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 128 */; ?>
<h3><?php /* tag "i" from line 128 */; ?>
<i class="glyphicons-user modal-icon"></i>CẬP NHẬT KHÁCH HÀNG</h3></div>								
								<?php /* tag "form" from line 129 */; ?>
<form id="FormCustomerUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 130 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 131 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 132 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 133 */; ?>
<label class="control-label">Tên</label>
												<?php /* tag "div" from line 134 */; ?>
<div class="controls">
													<?php /* tag "input" from line 135 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
												</div>
											</div>																															
											<?php /* tag "div" from line 138 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 139 */; ?>
<label class="control-label">Điện thoại</label>
												<?php /* tag "div" from line 140 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 141 */; ?>
<input id="Phone2" name="Phone2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 144 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 145 */; ?>
<label class="control-label">Loại</label>
												<?php /* tag "div" from line 146 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 147 */; ?>
<input id="Type2" name="Type2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 150 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 151 */; ?>
<label class="control-label">CMND</label>
												<?php /* tag "div" from line 152 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 153 */; ?>
<input id="Card2" name="Card2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 156 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 157 */; ?>
<label class="control-label">Ghi chú</label>
												<?php /* tag "div" from line 158 */; ?>
<div class="controls">
													<?php /* tag "input" from line 159 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 162 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 163 */; ?>
<label class="control-label">Địa chỉ</label>
												<?php /* tag "div" from line 164 */; ?>
<div class="controls">
													<?php /* tag "input" from line 165 */; ?>
<input id="Address2" name="Address2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 168 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 169 */; ?>
<label class="control-label">Giảm giá</label>
												<?php /* tag "div" from line 170 */; ?>
<div class="controls">
													<?php /* tag "input" from line 171 */; ?>
<input id="Discount2" name="Discount2" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
									</div>									
									<?php /* tag "div" from line 176 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 177 */; ?>
<button class="btn btn-primary btn-small" id="URLUpdButton"><?php /* tag "i" from line 177 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 178 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 178 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 185 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 186 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>
					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 190 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 191 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "script" from line 193 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/Customer/0";
				
				$(".CheckedDel").each(function( i, obj){
					if ( $(this).is(':checked')==true ){
						count += 1;
						Data[count] = $(this).attr('data-id');
					}
				});
				
				$.ajax({
					type: "POST",
					data: {ListId:Data},
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			//-----------------------------------------------------------------------------------
			//Delete 1 EMPLOYEEE			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/Customer/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 CUSTOMER			
			$("#FormCustomerInsert").validate({
				rules:{
					Name1:{
						minlength: 2,
						required:true
					},
					Discount1:{
						number: true,
						required:true,
						min:0
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
					Data[0] = 'null';				
					Data[1] = $('#Name1').val();
					Data[2] = $('#Type1').val();
					Data[3] = $('#Card1').val();
					Data[4] = $('#Phone1').val();
					Data[5] = $('#Address1').val();
					Data[6] = $('#Note1').val();
					Data[7] = $('#Discount1').val();
															
					var URL = "/object/ins/Customer";
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
			$("#DialogIns").on('show.bs.modal', function(event){
				window.setTimeout(
					function(){$(event.currentTarget).find('input#Name1').first().focus()},
					0500
				);
			});
			
			//-----------------------------------------------------------------------------------
			//Load 1 Customer
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Customer/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$('#update-link').attr('action', $(this).attr('alt'));
				$.getJSON(url, function(data) {
					$('#URLUpdButton').attr('alt', 	data.Id);
					$('#Name2').attr('value', 		data.Name);										
					$('#Type2').attr('value', 		data.Type);
					$('#Card2').attr('value', 		data.Card);
					$('#Phone2').attr('value', 		data.Phone);
					$('#Address2').attr('value', 	data.Address);
					$('#Note2').attr('value', 		data.Note);
					$('#Discount2').attr('value', 	data.Discount);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 EMPLOYEEE
			//-----------------------------------------------------------------------------------
			$("#FormCustomerUpdate").validate({
				rules:{
					Name2:{
						minlength: 2,
						required:true
					},
					Discount2:{
						number: true,
						required:true,
						min:0
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
					Data[1] = $('#Name2').val();
					Data[2] = $('#Type2').val();
					Data[3] = $('#Card2').val();
					Data[4] = $('#Phone2').val();
					Data[5] = $('#Address2').val();
					Data[6] = $('#Note2').val();
					Data[7] = $('#Discount2').val();
															
					var URL = "/object/upd/Customer";
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
			$("#DialogEdit").on('show.bs.modal', function(event){
				window.setTimeout(
					function(){$(event.currentTarget).find('input#Name2').first().focus()},
					0500
				);
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\SettingCustomer.html (edit that file instead) */; ?>