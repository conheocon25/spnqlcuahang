<?php 
function tpl_52e90693_SettingTermPaid__d3mIuz6tL2V65B5Yg8zoCw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th width="40"><?php /* tag "i" from line 29 */; ?>
<i class="glyphicons-edit"></i></th>
										<?php /* tag "th" from line 30 */; ?>
<th width="40"><?php /* tag "i" from line 30 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 33 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 34 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Term = new PHPTAL_RepeatController($ctx->TermPaidAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Term as $ctx->Term): ;
?>
<tr>
										<?php /* tag "td" from line 35 */; ?>
<td class="center"><?php 
/* tag "input" from line 35 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Term, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_2 ?>
/></td>
										<?php /* tag "td" from line 36 */; ?>
<td><?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Term, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Term, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 37 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Term, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 39 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 42 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 43 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Term, 'getId')))):  ;
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
					<?php /* tag "div" from line 54 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 55 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 56 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 57 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 58 */; ?>
<h3><?php /* tag "i" from line 58 */; ?>
<i class="glyphicons-disk_open modal-icon"></i>THÊM MỚI KHOẢN CHI</h3>
								</div>								
								<?php /* tag "form" from line 60 */; ?>
<form id="FormTermPaidInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 61 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 62 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 63 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 64 */; ?>
<div class="controls">
												<?php /* tag "input" from line 65 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 69 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 70 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 70 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 71 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 71 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 80 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 81 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 82 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 83 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 84 */; ?>
<h3><?php /* tag "i" from line 84 */; ?>
<i class="glyphicons-disk_open modal-icon"></i>CẬP NHẬT KHOẢN CHI</h3>
								</div>
								<?php /* tag "form" from line 86 */; ?>
<form id="FormTermPaidUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 87 */; ?>
<div class="modal-body">
										<?php /* tag "label" from line 88 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 89 */; ?>
<div class="controls">
											<?php /* tag "input" from line 90 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 93 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 94 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 94 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 95 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 95 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 102 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 103 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>
					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 107 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 108 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 109 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/					
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/TermPaid/0";
				
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
			//Delete 1 TERMPAID			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){
				var URL = "/object/del/TermPaid/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 TERM PAID			
			$("#FormTermPaidInsert").validate({
				rules:{
					Name1:{
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
					Data[0] = 'null';
					Data[1] = $('#Name1').val();
																			
					var URL = "/object/ins/TermPaid";
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
			//Load 1 UNIT
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/TermPaid/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 TERM PAID
			//-----------------------------------------------------------------------------------
			$("#FormTermPaidUpdate").validate({
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
					Data[1] = $('#Name2').val();
																		
					var URL = "/object/upd/TermPaid";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\SettingTermPaid.html (edit that file instead) */; ?>