<?php 
function tpl_52e913ac_SettingSupplierResou__moXxhSrqn5pLDpGtTVhGkg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "div" from line 10 */; ?>
<div id="sidebar">
			<?php /* tag "ul" from line 11 */; ?>
<ul style="display: block;">
				<?php 
/* tag "li" from line 12 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier1 = new PHPTAL_RepeatController($ctx->SupplierAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier1 as $ctx->Supplier1): ;
if (null !== ($_tmp_2 = ($ctx->Supplier1->getId()==$ctx->Supplier->getId()?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier1, 'getURLResource')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "i" from line 14 */; ?>
<i class="glyphicons-truck"></i><?php /* tag "span" from line 14 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
</span>
					</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</ul>
		</div>
		<?php /* tag "div" from line 19 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 20 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 21 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 22 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="IdSupplier" class="row"<?php echo $_tmp_3 ?>
>
				<?php /* tag "div" from line 23 */; ?>
<div class="col-12">
					<?php /* tag "a" from line 24 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 25 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 27 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 28 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 30 */; ?>
<div class="widget-box">						
						<?php /* tag "div" from line 31 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 32 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 33 */; ?>
<thead>
									<?php /* tag "tr" from line 34 */; ?>
<tr>
										<?php /* tag "th" from line 35 */; ?>
<th width="40"><?php /* tag "input" from line 35 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 36 */; ?>
<th width="200" class="left">TÊN</th>
										<?php /* tag "th" from line 37 */; ?>
<th class="right" width="120">GIÁ</th>
										<?php /* tag "th" from line 38 */; ?>
<th class="left" width="100">ĐƠN VỊ</th>
										<?php /* tag "th" from line 39 */; ?>
<th class="left">GHI CHÚ</th>
										<?php /* tag "th" from line 40 */; ?>
<th width="40"><?php /* tag "i" from line 40 */; ?>
<i class="glyphicons-edit"></i></th>
										<?php /* tag "th" from line 41 */; ?>
<th width="40"><?php /* tag "i" from line 41 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 44 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 45 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Resource = new PHPTAL_RepeatController($ctx->ResourceAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Resource as $ctx->Resource): ;
?>
<tr>
										<?php /* tag "td" from line 46 */; ?>
<td class="center"><?php 
/* tag "input" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Resource, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_1 ?>
/></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Resource, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Resource, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 48 */; ?>
<td class="right"><?php echo phptal_escape($ctx->path($ctx->Resource, 'getPricePrint')); ?>
</td>
										<?php /* tag "td" from line 49 */; ?>
<td class="left"><?php echo phptal_escape($ctx->path($ctx->Resource, 'getUnit')); ?>
</td>
										<?php /* tag "td" from line 50 */; ?>
<td class="left"><?php echo phptal_escape($ctx->path($ctx->Resource, 'getDescription')); ?>
</td>
										<?php /* tag "td" from line 51 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Resource, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_1 ?>
>
												<?php /* tag "i" from line 53 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 56 */; ?>
<td class="center"><?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Resource, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 56 */; ?>
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
/* tag "div" from line 62 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 64 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 65 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 66 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 67 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 67 */; ?>
<h3><?php /* tag "i" from line 67 */; ?>
<i class="glyphicons-truck modal-icon"></i>THÊM NGUYÊN LIỆU</h3></div>								
								<?php /* tag "form" from line 68 */; ?>
<form id="FormResourceInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 69 */; ?>
<div class="modal-body">													
										<?php /* tag "div" from line 70 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 71 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 72 */; ?>
<div class="controls">
												<?php /* tag "input" from line 73 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 76 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 77 */; ?>
<label class="control-label">Giá</label>
											<?php /* tag "div" from line 78 */; ?>
<div class="controls">
												<?php /* tag "input" from line 79 */; ?>
<input id="Price1" name="Price1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 82 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 83 */; ?>
<label class="control-label">Đơn vị</label>
											<?php /* tag "div" from line 84 */; ?>
<div class="controls">
												<?php /* tag "select" from line 85 */; ?>
<select name="Unit1" id="Unit1" style="width:80%;">
													<?php 
/* tag "option" from line 86 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Unit = new PHPTAL_RepeatController($ctx->UnitAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Unit as $ctx->Unit): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Unit, 'getName')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_2 ?>
>
														<?php /* tag "span" from line 87 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
													</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

												</select>
											</div>
										</div>
										<?php /* tag "div" from line 92 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 93 */; ?>
<label class="control-label">Mô tả</label>
											<?php /* tag "div" from line 94 */; ?>
<div class="controls">
												<?php /* tag "input" from line 95 */; ?>
<input id="Description1" name="Description1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 99 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 100 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 100 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 101 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 101 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 110 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 111 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 112 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 113 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 114 */; ?>
<h3><?php /* tag "i" from line 114 */; ?>
<i class="glyphicons-truck modal-icon"></i>CHỈNH SỬA NGUYÊN LIỆU</h3>
								</div>
								<?php /* tag "form" from line 116 */; ?>
<form id="FormResourceUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 117 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 118 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 119 */; ?>
<div class="controls">
											<?php /* tag "input" from line 120 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 123 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 124 */; ?>
<label class="control-label">Giá</label>
										<?php /* tag "div" from line 125 */; ?>
<div class="controls">
											<?php /* tag "input" from line 126 */; ?>
<input id="Price2" name="Price2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 129 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 130 */; ?>
<label class="control-label">Đơn vị</label>
										<?php /* tag "div" from line 131 */; ?>
<div class="controls">
											<?php /* tag "select" from line 132 */; ?>
<select name="Unit2" id="Unit2" style="width:80%;">
												<?php 
/* tag "option" from line 133 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Unit = new PHPTAL_RepeatController($ctx->UnitAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Unit as $ctx->Unit): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Unit, 'getName')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<option<?php echo $_tmp_1 ?>
>
													<?php /* tag "span" from line 134 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 139 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 140 */; ?>
<label class="control-label">Mô tả</label>
										<?php /* tag "div" from line 141 */; ?>
<div class="controls">
											<?php /* tag "input" from line 142 */; ?>
<input id="Description2" name="Description2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 145 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 146 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 146 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 147 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 147 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 154 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 155 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 160 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 161 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 162 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/Resource/0";
				
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
			//Delete 1 COURSE			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/Resource/" + $(this).attr('alt');
				$.ajax({
					type: "POST",
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 RESOURCE			
			$("#FormResourceInsert").validate({
				rules:{
					Name1:{
						minlength: 2,
						required:true
					},
					Price1:{						
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
					Data[1] = $('#IdSupplier').attr('alt');
					Data[2] = $('#Name1').val();
					Data[3] = $('#Price1').val();
					Data[4] = $('#Unit1').val();
					Data[5] = $('#Description1').val();
					var URL = "/object/ins/Resource";
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
			//Load 1 COURSE
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Resource/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
					$('#Unit2').select2('val', data.Unit);
					$('#Price2').attr('value', data.Price);					
					$('#Description2').attr('value', data.Description);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 RESOURCE
			//-----------------------------------------------------------------------------------
			$("#FormResourceUpdate").validate({
				rules:{
					Name2:{
						minlength: 2,
						required:true
					},
					Price2:{						
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
					Data[1] = $('#IdSupplier').attr('alt');				
					Data[2] = $('#Name2').val();
					Data[3] = $('#Price2').val();
					Data[4] = $('#Unit2').val();
					Data[5] = $('#Description2').val();
									
					var URL = "/object/upd/Resource";
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
		<?php 
/* tag "div" from line 325 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdSupplier"<?php echo $_tmp_1 ?>
></div>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\SettingSupplierResource.html (edit that file instead) */; ?>