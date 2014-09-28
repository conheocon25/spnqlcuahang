<?php 
function tpl_52e9130c_SettingDomainTable__oEUUEl8XPGdl9RcKL6vgog(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "div" from line 11 */; ?>
<div id="sidebar">
			<?php /* tag "ul" from line 12 */; ?>
<ul style="display: block;">
				<?php 
/* tag "li" from line 13 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Domain1 = new PHPTAL_RepeatController($ctx->DomainAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Domain1 as $ctx->Domain1): ;
if (null !== ($_tmp_2 = ($ctx->Domain1->getId()==$ctx->Domain->getId()?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Domain1, 'getURLTable')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "i" from line 15 */; ?>
<i class="glyphicons-show_big_thumbnails"></i><?php /* tag "span" from line 15 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Domain1, 'getName')); ?>
</span>							
					</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</ul>			
		</div>
		<?php /* tag "div" from line 20 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 21 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 22 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 23 */; ?>
<div class="row">
				<?php 
/* tag "div" from line 24 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="IdDomain" class="col-12"<?php echo $_tmp_3 ?>
>
					<?php /* tag "a" from line 25 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 26 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 28 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 29 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 31 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 32 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 33 */; ?>
<table class="table table-bordered table-striped table-hover with-check">
								<?php /* tag "thead" from line 34 */; ?>
<thead>
									<?php /* tag "tr" from line 35 */; ?>
<tr>
										<?php /* tag "th" from line 36 */; ?>
<th width="40"><?php /* tag "input" from line 36 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 37 */; ?>
<th class="left">TÊN</th>
										<?php /* tag "th" from line 38 */; ?>
<th class="left" width="90">LOẠI</th>
										<?php /* tag "th" from line 39 */; ?>
<th width="40"><?php /* tag "i" from line 39 */; ?>
<i class="glyphicons-edit"></i></th>
										<?php /* tag "th" from line 40 */; ?>
<th width="40"><?php /* tag "i" from line 40 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 43 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 44 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Table = new PHPTAL_RepeatController($ctx->TableAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Table as $ctx->Table): ;
?>
<tr>
										<?php /* tag "td" from line 45 */; ?>
<td class="center"><?php 
/* tag "input" from line 45 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_1 ?>
/></td>
										<?php /* tag "td" from line 46 */; ?>
<td><?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php /* tag "span" from line 47 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getTypePrint')); ?>
</span></td>
										<?php /* tag "td" from line 48 */; ?>
<td class="center"><?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="Table"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 48 */; ?>
<i class="glyphicon glyphicon-pencil"></i></a></td>
										<?php /* tag "td" from line 49 */; ?>
<td class="center"><?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 49 */; ?>
<i class="glyphicon glyphicon-remove"></i></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>																
							</table>
						</div>
					</div>
					<?php 
/* tag "div" from line 55 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					
					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 58 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 59 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 60 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 61 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 61 */; ?>
<h3><?php /* tag "i" from line 61 */; ?>
<i class="glyphicons-show_big_thumbnails modal-icon"></i>THÊM MỚI BÀN</h3></div>
								<?php /* tag "form" from line 62 */; ?>
<form id="FormTableInsert" action="#" class="form-horizontal" novalidate="novalidate">
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
<label class="control-label">Loại</label>
										<?php /* tag "div" from line 71 */; ?>
<div class="controls">
											<?php /* tag "select" from line 72 */; ?>
<select name="Type1" id="Type1" style="width:80%;">
												<?php /* tag "option" from line 73 */; ?>
<option value="0">Thường</option>
												<?php /* tag "option" from line 74 */; ?>
<option value="1">VIP</option>
											</select>
										</div>
									</div>
									<?php /* tag "div" from line 78 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 79 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 79 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 80 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 80 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
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
<i class="glyphicons-show_big_thumbnails modal-icon"></i>CẬP NHẬT BÀN</h3></div>
								<?php /* tag "form" from line 93 */; ?>
<form id="FormTableUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 94 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 95 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 96 */; ?>
<div class="controls">
											<?php /* tag "input" from line 97 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 100 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 101 */; ?>
<label class="control-label">Loại</label>
										<?php /* tag "div" from line 102 */; ?>
<div class="controls">
											<?php /* tag "select" from line 103 */; ?>
<select name="Type2" id="Type2" style="width:80%;">
												<?php /* tag "option" from line 104 */; ?>
<option value="0">Thường</option>
												<?php /* tag "option" from line 105 */; ?>
<option value="1">VIP</option>
											</select>
										</div>
									</div>
									<?php /* tag "div" from line 109 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 110 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 110 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 111 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 111 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 118 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 119 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 123 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 124 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 125 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/Table/0";
				
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
			//Delete 1 TABLE			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/Table/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 TABLE						
			$("#FormTableInsert").validate({
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
					Data[1] = $('#IdDomain').attr('alt');
					Data[2] = $('#Name1').val();
					Data[3] = '1';
					Data[4] = $('#Type1').val();
								
					var URL = "/object/ins/Table";
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
			//Load 1 TABLE
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Table/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
					$('#Type2').select2('val', data.Type);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 TABLE
			//-----------------------------------------------------------------------------------
			$("#FormTableUpdate").validate({
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
					Data[1] = $('#IdDomain').attr('alt');
					Data[2] = $('#Name2').val();
					Data[3] = '1';
					Data[4] = $('#Type2').val();
					
					var URL = "/object/upd/Table";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\SettingDomainTable.html (edit that file instead) */; ?>