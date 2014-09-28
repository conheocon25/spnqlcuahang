<?php 
function tpl_52e9082a_SettingUser__P63V9Np3aTTMdrEaOOIEEQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/MenuSetting', $_thistpl) ;
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
<div class="col-12">
					<?php /* tag "a" from line 17 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 18 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 20 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 21 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 23 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 24 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 25 */; ?>
<table class="table table-bordered table-striped table-hover with-check">
								<?php /* tag "thead" from line 26 */; ?>
<thead>
									<?php /* tag "tr" from line 27 */; ?>
<tr>
										<?php /* tag "th" from line 28 */; ?>
<th width="40"><?php /* tag "input" from line 28 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 29 */; ?>
<th class="left">TÊN</th>										
										<?php /* tag "th" from line 30 */; ?>
<th width="40"><?php /* tag "i" from line 30 */; ?>
<i class="glyphicons-edit"></i></th>
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
$_tmp_1->User = new PHPTAL_RepeatController($ctx->UserAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->User as $ctx->User): ;
?>
<tr>
										<?php /* tag "td" from line 36 */; ?>
<td class="center"><?php 
/* tag "input" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getId')))):  ;
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
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->User, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 38 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 40 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 43 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 45 */; ?>
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
<i class="glyphicons-user modal-icon"></i>THÊM MỚI NGƯỜI DÙNG</h3>
								</div>
								<?php /* tag "form" from line 61 */; ?>
<form id="FormUserInsert" action="#" class="form-horizontal" novalidate="novalidate">
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
<label class="control-label">Email</label>
											<?php /* tag "div" from line 71 */; ?>
<div class="controls">
												<?php /* tag "input" from line 72 */; ?>
<input id="Email1" name="Email1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 75 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 76 */; ?>
<label class="control-label">Mật khẩu</label>
											<?php /* tag "div" from line 77 */; ?>
<div class="controls">
												<?php /* tag "input" from line 78 */; ?>
<input id="Pass1" name="Pass1" type="password" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 81 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 82 */; ?>
<label class="control-label">Giới tính</label>
											<?php /* tag "div" from line 83 */; ?>
<div class="controls">
												<?php /* tag "select" from line 84 */; ?>
<select name="Gender1" id="Gender1" style="width:80%;">
													<?php /* tag "option" from line 85 */; ?>
<option value="0">Nam</option>
													<?php /* tag "option" from line 86 */; ?>
<option value="1">Nữ</option>
												</select>
											</div>
										</div>
										<?php /* tag "div" from line 90 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 91 */; ?>
<label class="control-label">Quyền</label>
											<?php /* tag "div" from line 92 */; ?>
<div class="controls">
												<?php /* tag "select" from line 93 */; ?>
<select name="Type1" id="Type1" style="width:80%;">
													<?php /* tag "option" from line 94 */; ?>
<option value="1">Bán hàng</option>
													<?php /* tag "option" from line 95 */; ?>
<option value="2">Quản lý</option>
													<?php /* tag "option" from line 96 */; ?>
<option value="3">Quan sát</option>
													<?php /* tag "option" from line 97 */; ?>
<option value="4">Quản trị</option>
												</select>
											</div>
										</div>
										<?php /* tag "div" from line 101 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 102 */; ?>
<label class="control-label">Mã vạch</label>
											<?php /* tag "div" from line 103 */; ?>
<div class="controls">
												<?php /* tag "input" from line 104 */; ?>
<input id="Code1" name="Code1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 108 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 109 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 109 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 110 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 110 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 119 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 120 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 121 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 122 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 123 */; ?>
<h3><?php /* tag "i" from line 123 */; ?>
<i class="glyphicons-user modal-icon"></i>CẬP NHẬT NGƯỜI DÙNG</h3>
								</div>
								<?php /* tag "form" from line 125 */; ?>
<form id="FormUserUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 126 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 127 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 128 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 129 */; ?>
<div class="controls">
												<?php /* tag "input" from line 130 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 133 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 134 */; ?>
<label class="control-label">Email</label>
											<?php /* tag "div" from line 135 */; ?>
<div class="controls">
												<?php /* tag "input" from line 136 */; ?>
<input id="Email2" name="Email2" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 139 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 140 */; ?>
<label class="control-label">Mật khẩu</label>
											<?php /* tag "div" from line 141 */; ?>
<div class="controls">
												<?php /* tag "input" from line 142 */; ?>
<input id="Pass2" name="Pass2" type="password" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 145 */; ?>
<div class="form-group">
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
<div class="form-group">
											<?php /* tag "label" from line 155 */; ?>
<label class="control-label">Quyền</label>
											<?php /* tag "div" from line 156 */; ?>
<div class="controls">
												<?php /* tag "select" from line 157 */; ?>
<select name="Type2" id="Type2" style="width:80%;">
													<?php /* tag "option" from line 158 */; ?>
<option value="1">Bán hàng</option>
													<?php /* tag "option" from line 159 */; ?>
<option value="2">Quản lý</option>
													<?php /* tag "option" from line 160 */; ?>
<option value="3">Quan sát</option>
													<?php /* tag "option" from line 161 */; ?>
<option value="4">Quản trị</option>
												</select>
											</div>
										</div>
										<?php /* tag "div" from line 165 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 166 */; ?>
<label class="control-label">Mã vạch</label>
											<?php /* tag "div" from line 167 */; ?>
<div class="controls">
												<?php /* tag "input" from line 168 */; ?>
<input id="Code2" name="Code2" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>	
									<?php /* tag "div" from line 172 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 173 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 173 */; ?>
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

		<?php /* tag "script" from line 188 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/User/0";
				
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
			//Delete 1 USER			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/User/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 USER
			$("#FormUserInsert").validate({
				rules:{
					Name1:{
						minlength: 2,
						required:true
					},
					Email1:{
						email: true,
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
					Data[0] = 'null';
					Data[1] = $('#Name1').val();
					Data[2] = $('#Email1').val();				
					Data[3] = $('#Pass1').val();
					Data[4] = $('#Gender1').val();
					Data[5] = $('#Note1').val();
					Data[6] = 'null';
					Data[7] = 'null';				
					Data[8] = 'null';
					Data[9] = $('#Type1').val();
					Data[10] = $('#Code1').val();
								
					var URL = "/object/ins/User";
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
			//Load 1 USER
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/User/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
					$('#Email2').attr('value', data.Email);
					$('#Pass2').attr('value', data.Pass);
					$('#Gender2').select2('val',data.Gender);
					$('#Note2').attr('value', data.Note);
					$('#Type2').select2('val', data.Type);
					$('#Code2').attr('value', data.Code);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 USER
			//-----------------------------------------------------------------------------------			
			$("#FormUserUpdate").validate({
				rules:{
					Name2:{
						minlength: 2,
						required:true
					},
					Email2:{
						email: true,
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
					Data[1] = $('#Name2').val();
					Data[2] = $('#Email2').val();				
					Data[3] = $('#Pass2').val();
					Data[4] = $('#Gender2').val();
					Data[5] = $('#Note2').val();
					Data[6] = 'null';
					Data[7] = 'null';				
					Data[8] = 'null';
					Data[9] = $('#Type2').val();
					Data[10] = $('#Code2').val();
									
					var URL = "/object/upd/User";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\SettingUser.html (edit that file instead) */; ?>