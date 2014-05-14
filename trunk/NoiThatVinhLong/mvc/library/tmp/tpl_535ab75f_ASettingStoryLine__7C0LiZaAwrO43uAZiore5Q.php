<?php 
function tpl_535ab75f_ASettingStoryLine__7C0LiZaAwrO43uAZiore5Q(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/MenuSettingPost', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 10 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 13 */; ?>
<div class="row">
				<?php /* tag "div" from line 14 */; ?>
<div class="col-12">
					<?php /* tag "a" from line 15 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 16 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 18 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 19 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 21 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 22 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 23 */; ?>
<table class="table table-bordered table-striped table-hover with-check">
								<?php /* tag "thead" from line 24 */; ?>
<thead>
									<?php /* tag "tr" from line 25 */; ?>
<tr>
										<?php /* tag "th" from line 26 */; ?>
<th width="40"><?php /* tag "input" from line 26 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 27 */; ?>
<th class="left">TÊN</th>										
										<?php /* tag "th" from line 28 */; ?>
<th width="40"><?php /* tag "i" from line 28 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 31 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 32 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->StoryLine = new PHPTAL_RepeatController($ctx->StoryLineAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->StoryLine as $ctx->StoryLine): ;
?>
<tr>
										<?php /* tag "td" from line 33 */; ?>
<td class="center"><?php 
/* tag "input" from line 33 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->StoryLine, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_2 ?>
/></td>
										<?php /* tag "td" from line 34 */; ?>
<td><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->StoryLine, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->StoryLine, 'getName')); ?>
</a></td>										
										<?php /* tag "td" from line 35 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->StoryLine, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 37 */; ?>
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
/* tag "div" from line 45 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>


					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 48 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 49 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 50 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 51 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 52 */; ?>
<h3><?php /* tag "i" from line 52 */; ?>
<i class="glyphicons-user modal-icon"></i>THÊM MỚI CÂU CHUYỆN</h3>
								</div>
								<?php /* tag "form" from line 54 */; ?>
<form id="FormStoryLineInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 55 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 56 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 57 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 58 */; ?>
<div class="controls">
												<?php /* tag "input" from line 59 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>																				
										<?php /* tag "div" from line 62 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 63 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 64 */; ?>
<label class="control-label">Ngày</label>
												<?php /* tag "div" from line 65 */; ?>
<div class="controls">
													<?php /* tag "input" from line 66 */; ?>
<input id="Date1" name="Date1" type="text" class="form-control input-small" data-date-format="yyyy-mm-dd"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 70 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 71 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 72 */; ?>
<label class="control-label">Hình ảnh</label>
												<?php /* tag "div" from line 73 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 74 */; ?>
<input id="Image1" name="Image1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 78 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 79 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 80 */; ?>
<label class="control-label">Tiêu đề</label>
												<?php /* tag "div" from line 81 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 82 */; ?>
<input id="Title1" name="Title1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 86 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 87 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 88 */; ?>
<label class="control-label">Ghi chú</label>
												<?php /* tag "div" from line 89 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 90 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>										
									</div>
									<?php /* tag "div" from line 95 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 96 */; ?>
<button class="btn btn-primary btn-small" id="URLInsButton"><?php /* tag "i" from line 96 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 97 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 97 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>								
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 106 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 107 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 108 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 109 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 110 */; ?>
<h3><?php /* tag "i" from line 110 */; ?>
<i class="glyphicons-user modal-icon"></i>CẬP NHẬT CÂU CHUYỆN</h3>
								</div>
								<?php /* tag "form" from line 112 */; ?>
<form id="FormStoryLineUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 113 */; ?>
<div class="modal-body">										
										<?php /* tag "div" from line 114 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 115 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 116 */; ?>
<div class="controls">
												<?php /* tag "input" from line 117 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
											</div>
										</div>																				
										<?php /* tag "div" from line 120 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 121 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 122 */; ?>
<label class="control-label">Ngày</label>
												<?php /* tag "div" from line 123 */; ?>
<div class="controls">
													<?php /* tag "input" from line 124 */; ?>
<input id="Date2" name="Date2" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 128 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 129 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 130 */; ?>
<label class="control-label">Hình ảnh</label>
												<?php /* tag "div" from line 131 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 132 */; ?>
<input id="Image2" name="Image2" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 136 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 137 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 138 */; ?>
<label class="control-label">Tiêu đề</label>
												<?php /* tag "div" from line 139 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 140 */; ?>
<input id="Title2" name="Title2" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>
										<?php /* tag "div" from line 144 */; ?>
<div class="form-group">
											<?php /* tag "div" from line 145 */; ?>
<div class="control-group">
												<?php /* tag "label" from line 146 */; ?>
<label class="control-label">Ghi chú</label>
												<?php /* tag "div" from line 147 */; ?>
<div class="controls">								
													<?php /* tag "input" from line 148 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
												</div>
											</div>
										</div>										
									</div>									
									<?php /* tag "div" from line 153 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 154 */; ?>
<button class="btn btn-primary btn-small" id="URLUpdButton"><?php /* tag "i" from line 154 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 155 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 155 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 162 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 163 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>
					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 167 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 168 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 169 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.js"></script>
		<?php /* tag "script" from line 170 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.vi.js"></script>
		<?php /* tag "script" from line 171 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#Date1').datepicker({language:'vi'});
			$('#Date2').datepicker({language:'vi'});
			
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/StoryLine/0";
				
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
			//Delete 1 StoryLineE			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/StoryLine/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 StoryLineE			
			$("#FormStoryLineInsert").validate({
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
					Data[1] = $('#Date1').val();
					Data[2] = $('#Name1').val();					
					Data[3] = $('#Image1').val();
					Data[4] = $('#Title1').val();					
					Data[5] = $('#Note1').val();
															
					var URL = "/object/ins/StoryLine";
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
			//Load 1 StoryLine
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/StoryLine/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$('#update-link').attr('action', $(this).attr('alt'));
				$.getJSON(url, function(data) {
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value'	, data.Name);
					$('#Date2').attr('value'	, data.Date);
					$('#Image2').attr('value'	, data.Image);
					$('#Title2').attr('value'	, data.Title);
					$('#Note2').attr('value'	, data.Note);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 StoryLineE
			//-----------------------------------------------------------------------------------
			$("#FormStoryLineUpdate").validate({
				rules:{
					Name2:{
						minlength: 2,
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
					Data[1] = $('#Date2').val();
					Data[2] = $('#Name2').val();					
					Data[3] = $('#Image2').val();
					Data[4] = $('#Title2').val();					
					Data[5] = $('#Note2').val();
					
					var URL = "/object/upd/StoryLine";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\ASettingStoryLine.html (edit that file instead) */; ?>