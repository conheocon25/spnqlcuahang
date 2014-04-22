<?php 
function tpl_52cd00ca_SettingSupplier__OuU2M_KyNU48kM34ZvAaAg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th width="120" class="left">ĐIỆN THOẠI</th>
										<?php /* tag "th" from line 31 */; ?>
<th class="left">ĐỊA CHỈ</th>
										<?php /* tag "th" from line 32 */; ?>
<th class="right" width="100">MÓN</th>
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
$_tmp_1->Supplier = new PHPTAL_RepeatController($ctx->SupplierAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier as $ctx->Supplier): ;
?>
<tr>
										<?php /* tag "td" from line 39 */; ?>
<td class="center"><?php 
/* tag "input" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getId')))):  ;
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
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 41 */; ?>
<td><?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getPhone')); ?>
</span></td>
										<?php /* tag "td" from line 42 */; ?>
<td><?php /* tag "span" from line 42 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getAddress')); ?>
</span></td>
										<?php /* tag "td" from line 43 */; ?>
<td class="right">											
											<?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLResource')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
> <?php /* tag "span" from line 44 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getResourceAll/count')); ?>
</span> món</a>
										</td>
										<?php /* tag "td" from line 46 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 48 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 51 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 53 */; ?>
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
/* tag "div" from line 61 */ ;
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
<i class="glyphicons-truck modal-icon"></i>THÊM NHÀ CUNG CẤP</h3></div>								
								<?php /* tag "form" from line 67 */; ?>
<form id="FormSupplierInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 68 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 69 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 70 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 71 */; ?>
<div class="controls">
												<?php /* tag "input" from line 72 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 75 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 76 */; ?>
<label class="control-label">Điện thoại</label>
											<?php /* tag "div" from line 77 */; ?>
<div class="controls">
												<?php /* tag "input" from line 78 */; ?>
<input id="Phone1" name="Phone1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 81 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 82 */; ?>
<label class="control-label">Địa chỉ</label>
											<?php /* tag "div" from line 83 */; ?>
<div class="controls">
												<?php /* tag "input" from line 84 */; ?>
<input id="Address1" name="Address1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 87 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 88 */; ?>
<label class="control-label">Ghi chú</label>
											<?php /* tag "div" from line 89 */; ?>
<div class="controls">
												<?php /* tag "input" from line 90 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 93 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 94 */; ?>
<label class="control-label">Nợ đầu kì</label>
											<?php /* tag "div" from line 95 */; ?>
<div class="controls">
												<?php /* tag "input" from line 96 */; ?>
<input id="Debt1" name="Debt1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 100 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 101 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 101 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 102 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 102 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 111 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 112 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 113 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 114 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 114 */; ?>
<h3><?php /* tag "i" from line 114 */; ?>
<i class="glyphicons-truck modal-icon"></i>CẬP NHẬT NHÀ CUNG CẤP</h3></div>
								<?php /* tag "form" from line 115 */; ?>
<form id="FormSupplierUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 116 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 117 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 118 */; ?>
<div class="controls">
											<?php /* tag "input" from line 119 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 122 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 123 */; ?>
<label class="control-label">Điện thoại</label>
										<?php /* tag "div" from line 124 */; ?>
<div class="controls">
											<?php /* tag "input" from line 125 */; ?>
<input id="Phone2" name="Phone2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 128 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 129 */; ?>
<label class="control-label">Địa chỉ</label>
										<?php /* tag "div" from line 130 */; ?>
<div class="controls">
											<?php /* tag "input" from line 131 */; ?>
<input id="Address2" name="Address2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 134 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 135 */; ?>
<label class="control-label">Ghi chú</label>
										<?php /* tag "div" from line 136 */; ?>
<div class="controls">
											<?php /* tag "input" from line 137 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 140 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 141 */; ?>
<label class="control-label">Nợ đầu kì</label>
										<?php /* tag "div" from line 142 */; ?>
<div class="controls">
											<?php /* tag "input" from line 143 */; ?>
<input id="Debt2" name="Debt2" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 146 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 147 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 147 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 148 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 148 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 155 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 156 */ ;
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
				var URL = "/object/del/Supplier/0";
				
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
				var URL = "/object/del/Supplier/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 SUPPLIER
			$("#FormSupplierInsert").validate({
				rules:{
					Name1:{
						minlength: 4,
						required:true
					},
					Debt1:{						
						required:true,
						number:true
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
					Data[2] = $('#Phone1').val();
					Data[3] = $('#Address1').val();
					Data[4] = $('#Note1').val();
					Data[5] = $('#Debt1').val();
					
					var URL = "/object/ins/Supplier";
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
				var url = "/object/load/Supplier/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
					$('#Phone2').attr('value', data.Phone);
					$('#Address2').attr('value', data.Address);
					$('#Note2').attr('value', data.Note);
					$('#Debt2').attr('value', data.Debt);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 CATEGORY
			//-----------------------------------------------------------------------------------
			$("#FormSupplierUpdate").validate({
				rules:{
					Name2:{
						minlength: 4,
						required:true
					},
					Debt2:{
						required:true,
						number:true
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
					Data[2] = $('#Phone2').val();
					Data[3] = $('#Address2').val();
					Data[4] = $('#Note2').val();
					Data[5] = $('#Debt2').val();
					
					var URL = "/object/upd/Supplier";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\SettingSupplier.html (edit that file instead) */; ?>