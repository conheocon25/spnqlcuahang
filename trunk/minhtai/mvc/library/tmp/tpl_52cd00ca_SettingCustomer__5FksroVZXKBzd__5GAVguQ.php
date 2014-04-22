<?php 
function tpl_52cd00ca_SettingCustomer__5FksroVZXKBzd__5GAVguQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th class="left">ĐỊA CHỈ</th>
										<?php /* tag "th" from line 32 */; ?>
<th width="40"><?php /* tag "i" from line 32 */; ?>
<i class="glyphicons-edit"></i></th>
										<?php /* tag "th" from line 33 */; ?>
<th width="40"><?php /* tag "i" from line 33 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 36 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 37 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Customer = new PHPTAL_RepeatController($ctx->CustomerAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Customer as $ctx->Customer): ;
?>
<tr>
										<?php /* tag "td" from line 38 */; ?>
<td class="center"><?php 
/* tag "input" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_2 ?>
/></td>
										<?php /* tag "td" from line 39 */; ?>
<td><?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="Customer"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Customer, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 40 */; ?>
<td><?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getIdCard')); ?>
</span></td>
										<?php /* tag "td" from line 41 */; ?>
<td><?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPhone')); ?>
</span></td>										
										<?php /* tag "td" from line 42 */; ?>
<td><?php /* tag "span" from line 42 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getAddress')); ?>
</span></td>
										<?php /* tag "td" from line 43 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="Customer"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 45 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 48 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 50 */; ?>
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
/* tag "div" from line 58 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>


					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 61 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 62 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 63 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 64 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 64 */; ?>
<h3><?php /* tag "i" from line 64 */; ?>
<i class="glyphicons-user modal-icon"></i>THÊM MỚI KHÁCH HÀNG</h3></div>								
								<?php /* tag "form" from line 65 */; ?>
<form id="FormCustomerInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 66 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 67 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 68 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 69 */; ?>
<label class="control-label">Danh xưng</label>
												<?php /* tag "div" from line 70 */; ?>
<div class="controls">
													<?php /* tag "input" from line 71 */; ?>
<input id="Prefix1" name="Prefix1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 74 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 75 */; ?>
<label class="control-label">Tên</label>
												<?php /* tag "div" from line 76 */; ?>
<div class="controls">
													<?php /* tag "input" from line 77 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 80 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 81 */; ?>
<label class="control-label">Bí danh</label>
												<?php /* tag "div" from line 82 */; ?>
<div class="controls">
													<?php /* tag "input" from line 83 */; ?>
<input id="Alias1" name="Alias1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 86 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 87 */; ?>
<label class="control-label">Điện thoại</label>
												<?php /* tag "div" from line 88 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 89 */; ?>
<input id="Phone1" name="Phone1" type="text" class="form-control input-small"/>
												</div>
											</div>											
											<?php /* tag "div" from line 92 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 93 */; ?>
<label class="control-label">CMND</label>
												<?php /* tag "div" from line 94 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 95 */; ?>
<input id="IdCard1" name="IdCard1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 98 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 99 */; ?>
<label class="control-label">Ghi chú</label>
												<?php /* tag "div" from line 100 */; ?>
<div class="controls">
													<?php /* tag "input" from line 101 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 104 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 105 */; ?>
<label class="control-label">Địa chỉ</label>
												<?php /* tag "div" from line 106 */; ?>
<div class="controls">
													<?php /* tag "input" from line 107 */; ?>
<input id="Address1" name="Address1" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 110 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 111 */; ?>
<label class="control-label">Nợ đầu kì</label>
												<?php /* tag "div" from line 112 */; ?>
<div class="controls">
													<?php /* tag "input" from line 113 */; ?>
<input id="Debt1" name="Debt1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 118 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 119 */; ?>
<button class="btn btn-primary btn-small" id="URLInsButton"><?php /* tag "i" from line 119 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 120 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 120 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>								
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 129 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 130 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 131 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 132 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 132 */; ?>
<h3><?php /* tag "i" from line 132 */; ?>
<i class="glyphicons-user modal-icon"></i>CẬP NHẬT KHÁCH HÀNG</h3></div>								
								<?php /* tag "form" from line 133 */; ?>
<form id="FormCustomerUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 134 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 135 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 136 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 137 */; ?>
<label class="control-label">Danh xưng</label>
												<?php /* tag "div" from line 138 */; ?>
<div class="controls">
													<?php /* tag "input" from line 139 */; ?>
<input id="Prefix2" name="Prefix2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 142 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 143 */; ?>
<label class="control-label">Tên</label>
												<?php /* tag "div" from line 144 */; ?>
<div class="controls">
													<?php /* tag "input" from line 145 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 148 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 149 */; ?>
<label class="control-label">Bí danh</label>
												<?php /* tag "div" from line 150 */; ?>
<div class="controls">
													<?php /* tag "input" from line 151 */; ?>
<input id="Alias2" name="Alias2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 154 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 155 */; ?>
<label class="control-label">Điện thoại</label>
												<?php /* tag "div" from line 156 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 157 */; ?>
<input id="Phone2" name="Phone2" type="text" class="form-control input-small"/>
												</div>
											</div>											
											<?php /* tag "div" from line 160 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 161 */; ?>
<label class="control-label">CMND</label>
												<?php /* tag "div" from line 162 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 163 */; ?>
<input id="IdCard2" name="IdCard2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 166 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 167 */; ?>
<label class="control-label">Ghi chú</label>
												<?php /* tag "div" from line 168 */; ?>
<div class="controls">
													<?php /* tag "input" from line 169 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 172 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 173 */; ?>
<label class="control-label">Địa chỉ</label>
												<?php /* tag "div" from line 174 */; ?>
<div class="controls">
													<?php /* tag "input" from line 175 */; ?>
<input id="Address2" name="Address2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 178 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 179 */; ?>
<label class="control-label">Nợ đầu kì</label>
												<?php /* tag "div" from line 180 */; ?>
<div class="controls">
													<?php /* tag "input" from line 181 */; ?>
<input id="Debt2" name="Debt2" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
									</div>									
									<?php /* tag "div" from line 186 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 187 */; ?>
<button class="btn btn-primary btn-small" id="URLUpdButton"><?php /* tag "i" from line 187 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 188 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 188 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 195 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 196 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>
					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 200 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 201 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "script" from line 203 */; ?>
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
					Data[1] = $('#IdCard1').val();
					Data[2] = $('#Prefix1').val();
					Data[3] = $('#Name1').val();
					Data[4] = $('#Alias1').val();					
					Data[5] = $('#Address1').val();					
					Data[6] = $('#Phone1').val();					
					Data[7] = $('#Note1').val();					
					Data[8] = $('#Debt1').val();
											
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
					$('#IdCard2').attr('value', 	data.IdCard);
					$('#Prefix2').attr('value', 	data.Prefix);
					$('#Name2').attr('value', 		data.Name);
					$('#Alias2').attr('value', 		data.Alias);
					$('#Address2').attr('value', 	data.Address);
					$('#Phone2').attr('value', 		data.Phone);
					$('#Note2').attr('value', 		data.Note);
					$('#Debt2').attr('value', 		data.Debt);
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
					Data[1] = $('#IdCard2').val();
					Data[2] = $('#Prefix2').val();
					Data[3] = $('#Name2').val();
					Data[4] = $('#Alias2').val();					
					Data[5] = $('#Address2').val();					
					Data[6] = $('#Phone2').val();					
					Data[7] = $('#Note2').val();					
					Data[8] = $('#Debt2').val();
															
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
		/*]]>*/</script>		
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\SettingCustomer.html (edit that file instead) */; ?>