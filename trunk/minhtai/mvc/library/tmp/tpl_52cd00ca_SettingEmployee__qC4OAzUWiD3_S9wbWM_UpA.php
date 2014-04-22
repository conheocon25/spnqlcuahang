<?php 
function tpl_52cd00ca_SettingEmployee__qC4OAzUWiD3_S9wbWM_UpA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th class="left">TÊN</th>
										<?php /* tag "th" from line 29 */; ?>
<th width="120" class="left">ĐIỆN THOẠI</th>
										<?php /* tag "th" from line 30 */; ?>
<th class="left">ĐỊA CHỈ</th>
										<?php /* tag "th" from line 31 */; ?>
<th width="40"><?php /* tag "i" from line 31 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 34 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 35 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Employee = new PHPTAL_RepeatController($ctx->EmployeeAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Employee as $ctx->Employee): ;
?>
<tr>
										<?php /* tag "td" from line 36 */; ?>
<td class="center"><?php 
/* tag "input" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_2 ?>
/></td>
										<?php /* tag "td" from line 37 */; ?>
<td><?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 38 */; ?>
<td><?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getPhone')); ?>
</span></td>
										<?php /* tag "td" from line 39 */; ?>
<td><?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getAddress')); ?>
</span></td>
										<?php /* tag "td" from line 40 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 42 */; ?>
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
/* tag "div" from line 50 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>


					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 53 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 54 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 55 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 56 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 57 */; ?>
<h3><?php /* tag "i" from line 57 */; ?>
<i class="glyphicons-user modal-icon"></i>THÊM MỚI NHÂN VIÊN</h3>
								</div>
								<?php /* tag "form" from line 59 */; ?>
<form id="FormEmployeeInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 60 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 61 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 62 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 63 */; ?>
<div class="controls">
												<?php /* tag "input" from line 64 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 67 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 68 */; ?>
<label class="control-label">Giới tính</label>
											<?php /* tag "div" from line 69 */; ?>
<div class="controls">
												<?php /* tag "select" from line 70 */; ?>
<select name="Gender1" id="Gender1" style="width:80%;">
													<?php /* tag "option" from line 71 */; ?>
<option value="0">Nam</option>
													<?php /* tag "option" from line 72 */; ?>
<option value="1">Nữ</option>
												</select>
											</div>
										</div>
										<?php /* tag "div" from line 76 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 77 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 78 */; ?>
<label class="control-label">Chức vụ</label>
												<?php /* tag "div" from line 79 */; ?>
<div class="controls">
													<?php /* tag "input" from line 80 */; ?>
<input id="Job1" name="Job1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>	
										<?php /* tag "div" from line 84 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 85 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 86 */; ?>
<label class="control-label">Điện thoại</label>
												<?php /* tag "div" from line 87 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 88 */; ?>
<input id="Phone1" name="Phone1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 92 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 93 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 94 */; ?>
<label class="control-label">Địa chỉ</label>
												<?php /* tag "div" from line 95 */; ?>
<div class="controls">
													<?php /* tag "input" from line 96 */; ?>
<input id="Address1" name="Address1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 100 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 101 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 102 */; ?>
<label class="control-label">Lương cơ bản</label>
												<?php /* tag "div" from line 103 */; ?>
<div class="controls">			
													<?php /* tag "input" from line 104 */; ?>
<input id="SalaryBase1" name="SalaryBase1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 109 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 110 */; ?>
<button class="btn btn-primary btn-small" id="URLInsButton"><?php /* tag "i" from line 110 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 111 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 111 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>								
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 120 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 121 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 122 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 123 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 124 */; ?>
<h3><?php /* tag "i" from line 124 */; ?>
<i class="glyphicons-user modal-icon"></i>CẬP NHẬT NHÂN VIÊN</h3>
								</div>
								<?php /* tag "form" from line 126 */; ?>
<form id="FormEmployeeUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 127 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 128 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 129 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 130 */; ?>
<label class="control-label">Tên</label>
												<?php /* tag "div" from line 131 */; ?>
<div class="controls">
													<?php /* tag "input" from line 132 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 135 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 136 */; ?>
<label class="control-label">Giới tính</label>
												<?php /* tag "div" from line 137 */; ?>
<div class="controls">
													<?php /* tag "select" from line 138 */; ?>
<select name="Gender2" id="Gender2" style="width:80%;">
														<?php /* tag "option" from line 139 */; ?>
<option value="0">Nam</option>
														<?php /* tag "option" from line 140 */; ?>
<option value="1">Nữ</option>
													</select>
												</div>
											</div>	
											<?php /* tag "div" from line 144 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 145 */; ?>
<label class="control-label">Chức vụ</label>
												<?php /* tag "div" from line 146 */; ?>
<div class="controls">
													<?php /* tag "input" from line 147 */; ?>
<input id="Job2" name="Job2" type="text" class="form-control input-small"/>
												</div>
											</div>										
											<?php /* tag "div" from line 150 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 151 */; ?>
<label class="control-label">Điện thoại</label>
												<?php /* tag "div" from line 152 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 153 */; ?>
<input id="Phone2" name="Phone2" type="text" class="form-control input-small"/>
												</div>
											</div>										
											<?php /* tag "div" from line 156 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 157 */; ?>
<label class="control-label">Địa chỉ</label>
												<?php /* tag "div" from line 158 */; ?>
<div class="controls">
													<?php /* tag "input" from line 159 */; ?>
<input id="Address2" name="Address2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 162 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 163 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 164 */; ?>
<label class="control-label">Lương cơ bản</label>
												<?php /* tag "div" from line 165 */; ?>
<div class="controls">			
													<?php /* tag "input" from line 166 */; ?>
<input id="SalaryBase2" name="SalaryBase2" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										</div>
									</div>									
									<?php /* tag "div" from line 172 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 173 */; ?>
<button class="btn btn-primary btn-small" id="URLUpdButton"><?php /* tag "i" from line 173 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 174 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 174 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 181 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 182 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>
					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 186 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 187 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "script" from line 189 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/Employee/0";
				
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
				var URL = "/object/del/Employee/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 EMPLOYEEE			
			$("#FormEmployeeInsert").validate({
				rules:{
					Name1:{
						minlength: 2,
						required:true
					},
					SalaryBase1:{						
						required:true,
						number:true,
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
					Data[2] = $('#Gender1').val();
					Data[3] = $('#Job1').val();
					Data[4] = $('#Phone1').val();
					Data[5] = $('#Address1').val();
					Data[6] = $('#SalaryBase1').val();
															
					var URL = "/object/ins/Employee";
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
			//Load 1 Employee
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Employee/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$('#update-link').attr('action', $(this).attr('alt'));
				$.getJSON(url, function(data) {
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);										
					$('#Gender2').select2('val', data.Gender);
					$('#Job2').attr('value', data.Job);
					$('#Phone2').attr('value', data.Phone);
					$('#Address2').attr('value', data.Address);
					$('#SalaryBase2').attr('value', data.SalaryBase);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 EMPLOYEEE
			//-----------------------------------------------------------------------------------
			$("#FormEmployeeUpdate").validate({
				rules:{
					Name2:{
						minlength: 2,
						required:true
					},
					SalaryBase2:{						
						required:true,
						number:true,
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
					Data[2] = $('#Gender2').val();
					Data[3] = $('#Job2').val();
					Data[4] = $('#Phone2').val();
					Data[5] = $('#Address2').val();				
					Data[6] = $('#SalaryBase2').val();
															
					var URL = "/object/upd/Employee";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\SettingEmployee.html (edit that file instead) */; ?>