<?php 
function tpl_52ed58d2_SettingEmployee__RM_ZaBJXT1EcNE1Wm4A8KQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th width="120" class="left">CMND</th>
										<?php /* tag "th" from line 30 */; ?>
<th width="120" class="left">ĐIỆN THOẠI</th>
										<?php /* tag "th" from line 31 */; ?>
<th class="left">ĐỊA CHỈ</th>
										<?php /* tag "th" from line 32 */; ?>
<th width="40"><?php /* tag "i" from line 32 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 35 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 36 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Employee = new PHPTAL_RepeatController($ctx->EmployeeAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Employee as $ctx->Employee): ;
?>
<tr>
										<?php /* tag "td" from line 37 */; ?>
<td class="center"><?php 
/* tag "input" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_2 ?>
/></td>
										<?php /* tag "td" from line 38 */; ?>
<td><?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 39 */; ?>
<td><?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getCard')); ?>
</span></td>
										<?php /* tag "td" from line 40 */; ?>
<td><?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getPhone')); ?>
</span></td>
										<?php /* tag "td" from line 41 */; ?>
<td><?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getAddress')); ?>
</span></td>
										<?php /* tag "td" from line 42 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 43 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 44 */; ?>
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
/* tag "div" from line 52 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>


					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 55 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 56 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 57 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 58 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 59 */; ?>
<h3><?php /* tag "i" from line 59 */; ?>
<i class="glyphicons-user modal-icon"></i>THÊM MỚI NHÂN VIÊN</h3>
								</div>
								<?php /* tag "form" from line 61 */; ?>
<form id="FormEmployeeInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 62 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 63 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 64 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 65 */; ?>
<div class="controls">
												<?php /* tag "input" from line 66 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 69 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 70 */; ?>
<label class="control-label">Giới tính</label>
											<?php /* tag "div" from line 71 */; ?>
<div class="controls">
												<?php /* tag "select" from line 72 */; ?>
<select name="Gender1" id="Gender1" style="width:80%;">
													<?php /* tag "option" from line 73 */; ?>
<option value="0">Nam</option>
													<?php /* tag "option" from line 74 */; ?>
<option value="1">Nữ</option>
												</select>
											</div>
										</div>
										<?php /* tag "div" from line 78 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 79 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 80 */; ?>
<label class="control-label">Chức vụ</label>
												<?php /* tag "div" from line 81 */; ?>
<div class="controls">
													<?php /* tag "input" from line 82 */; ?>
<input id="Job1" name="Job1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>	
										<?php /* tag "div" from line 86 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 87 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 88 */; ?>
<label class="control-label">Điện thoại</label>
												<?php /* tag "div" from line 89 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 90 */; ?>
<input id="Phone1" name="Phone1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 94 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 95 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 96 */; ?>
<label class="control-label">Địa chỉ</label>
												<?php /* tag "div" from line 97 */; ?>
<div class="controls">
													<?php /* tag "input" from line 98 */; ?>
<input id="Address1" name="Address1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 102 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 103 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 104 */; ?>
<label class="control-label">Lương cơ bản</label>
												<?php /* tag "div" from line 105 */; ?>
<div class="controls">			
													<?php /* tag "input" from line 106 */; ?>
<input id="SalaryBase1" name="SalaryBase1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 110 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 111 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 112 */; ?>
<label class="control-label">CMND</label>
												<?php /* tag "div" from line 113 */; ?>
<div class="controls">
													<?php /* tag "input" from line 114 */; ?>
<input id="Card1" name="Card1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 119 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 120 */; ?>
<button class="btn btn-primary btn-small" id="URLInsButton"><?php /* tag "i" from line 120 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 121 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 121 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>								
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 130 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 131 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 132 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 133 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 134 */; ?>
<h3><?php /* tag "i" from line 134 */; ?>
<i class="glyphicons-user modal-icon"></i>CẬP NHẬT NHÂN VIÊN</h3>
								</div>
								<?php /* tag "form" from line 136 */; ?>
<form id="FormEmployeeUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 137 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 138 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 139 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 140 */; ?>
<label class="control-label">Tên</label>
												<?php /* tag "div" from line 141 */; ?>
<div class="controls">
													<?php /* tag "input" from line 142 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 145 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 146 */; ?>
<label class="control-label">Giới tính</label>
												<?php /* tag "div" from line 147 */; ?>
<div class="controls">
													<?php /* tag "select" from line 148 */; ?>
<select name="Gender2" id="Gender2" style="width:80%;">
														<?php /* tag "option" from line 149 */; ?>
<option value="0">Nam</option>
														<?php /* tag "option" from line 150 */; ?>
<option value="1">Nữ</option>
													</select>
												</div>
											</div>	
											<?php /* tag "div" from line 154 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 155 */; ?>
<label class="control-label">Chức vụ</label>
												<?php /* tag "div" from line 156 */; ?>
<div class="controls">
													<?php /* tag "input" from line 157 */; ?>
<input id="Job2" name="Job2" type="text" class="form-control input-small"/>
												</div>
											</div>										
											<?php /* tag "div" from line 160 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 161 */; ?>
<label class="control-label">Điện thoại</label>
												<?php /* tag "div" from line 162 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 163 */; ?>
<input id="Phone2" name="Phone2" type="text" class="form-control input-small"/>
												</div>
											</div>										
											<?php /* tag "div" from line 166 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 167 */; ?>
<label class="control-label">Địa chỉ</label>
												<?php /* tag "div" from line 168 */; ?>
<div class="controls">
													<?php /* tag "input" from line 169 */; ?>
<input id="Address2" name="Address2" type="text" class="form-control input-small"/>
												</div>
											</div>
											<?php /* tag "div" from line 172 */; ?>
<div class="form-group">
												<?php /* tag "div" from line 173 */; ?>
<div class="control-group">
													<?php /* tag "label" from line 174 */; ?>
<label class="control-label">Lương cơ bản</label>
													<?php /* tag "div" from line 175 */; ?>
<div class="controls">			
														<?php /* tag "input" from line 176 */; ?>
<input id="SalaryBase2" name="SalaryBase2" type="text" class="form-control input-small"/>
													</div>
												</div>
											</div>
											<?php /* tag "div" from line 180 */; ?>
<div class="form-group">
												<?php /* tag "div" from line 181 */; ?>
<div class="control-group">
													<?php /* tag "label" from line 182 */; ?>
<label class="control-label">CMND</label>
													<?php /* tag "div" from line 183 */; ?>
<div class="controls">
														<?php /* tag "input" from line 184 */; ?>
<input id="Card2" name="Card2" type="text" class="form-control input-small"/>
													</div>
												</div>
											</div>
										</div>
									</div>									
									<?php /* tag "div" from line 190 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 191 */; ?>
<button class="btn btn-primary btn-small" id="URLUpdButton"><?php /* tag "i" from line 191 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 192 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 192 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 199 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 200 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>
					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 204 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 205 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "script" from line 207 */; ?>
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
					Data[7] = $('#Card1').val();
															
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
			$("#DialogIns").on('show.bs.modal', function(event){
				window.setTimeout(
					function(){$(event.currentTarget).find('input#Name1').first().focus()},
					0500
				);
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
					$('#Card2').attr('value', data.Card);
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
					Data[7] = $('#Card2').val();
					
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\SettingEmployee.html (edit that file instead) */; ?>