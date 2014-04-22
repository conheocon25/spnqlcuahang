<?php 
function tpl_52cd00ca_SettingStore__Msg6GgRuWzdhWdmUJjXMig(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$_tmp_1->Store = new PHPTAL_RepeatController($ctx->StoreAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Store as $ctx->Store): ;
?>
<tr>
										<?php /* tag "td" from line 36 */; ?>
<td class="center"><?php 
/* tag "input" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Store, 'getId')))):  ;
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
if (null !== ($_tmp_2 = ($ctx->path($ctx->Store, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 38 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Store, 'getId')))):  ;
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
if (null !== ($_tmp_2 = ($ctx->path($ctx->Store, 'getId')))):  ;
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
					<?php 
/* tag "div" from line 53 */ ;
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
<div class="modal-header"><?php /* tag "h3" from line 58 */; ?>
<h3><?php /* tag "i" from line 58 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>THÊM DANH MỤC MỚI</h3></div>
								<?php /* tag "form" from line 59 */; ?>
<form id="FormStoreInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 60 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 61 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 62 */; ?>
<div class="controls">
											<?php /* tag "input" from line 63 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 66 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 67 */; ?>
<label class="control-label">Địa chỉ</label>
										<?php /* tag "div" from line 68 */; ?>
<div class="controls">
											<?php /* tag "input" from line 69 */; ?>
<input id="Address1" name="Address1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 72 */; ?>
<div class="form-actions">
										<?php /* tag "button" from line 73 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 73 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 74 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 74 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>								
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 83 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 84 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 85 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 86 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 86 */; ?>
<h3><?php /* tag "i" from line 86 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT DANH MỤC</h3></div>
								<?php /* tag "form" from line 87 */; ?>
<form id="FormStoreUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 88 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 89 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 90 */; ?>
<div class="controls">
											<?php /* tag "input" from line 91 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 94 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 95 */; ?>
<label class="control-label">Địa chỉ</label>
										<?php /* tag "div" from line 96 */; ?>
<div class="controls">
											<?php /* tag "input" from line 97 */; ?>
<input id="Address2" name="Address2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 100 */; ?>
<div class="form-actions">
										<?php /* tag "button" from line 101 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 101 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 102 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 102 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 109 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 110 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 114 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 115 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 116 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/Store/0";
				
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
			//Delete 1 CATEGORY			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){
				var URL = "/object/del/Store/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 CATEGORY						
			$("#FormStoreInsert").validate({
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
					Data[2] = $('#Address1').val();

					var URL = "/object/ins/Store";
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
			//Load 1 CATEGORY
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Store/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
					$('#Address2').attr('value', data.Address);
				});
			});
			
			$("#FormStoreUpdate").validate({
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
					Data[2] = $('#Address2').val();												
					var URL = "/object/upd/Store";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\SettingStore.html (edit that file instead) */; ?>