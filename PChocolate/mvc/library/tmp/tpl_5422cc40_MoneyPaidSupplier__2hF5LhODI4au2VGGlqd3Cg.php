<?php 
function tpl_5422cc40_MoneyPaidSupplier__2hF5LhODI4au2VGGlqd3Cg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		
		<?php /* tag "div" from line 9 */; ?>
<div id="sidebar">
			<?php /* tag "ul" from line 10 */; ?>
<ul style="display: block;">
				<?php 
/* tag "li" from line 11 */ ;
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
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier1, 'getURLPaid')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "i" from line 13 */; ?>
<i class="glyphicons-truck"></i> <?php /* tag "span" from line 13 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
</span>
					</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</ul>
		</div>
		<?php /* tag "div" from line 18 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 19 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 20 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 21 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div Id="IdSupplier" class="row"<?php echo $_tmp_3 ?>
>
				<?php /* tag "div" from line 22 */; ?>
<div class="col-12">
					<?php /* tag "a" from line 23 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 24 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 26 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 27 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 29 */; ?>
<div class="widget-box">						
						<?php /* tag "div" from line 30 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 31 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 32 */; ?>
<thead>
									<?php /* tag "tr" from line 33 */; ?>
<tr>
										<?php /* tag "th" from line 34 */; ?>
<th width="40"><?php /* tag "input" from line 34 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 35 */; ?>
<th width="70" class="left">NGÀY</th>
										<?php /* tag "th" from line 36 */; ?>
<th class="left">DIỄN GIẢI</th>
										<?php /* tag "th" from line 37 */; ?>
<th width="120" class="right">GIÁ TRỊ</th>
										<?php /* tag "th" from line 38 */; ?>
<th width="40"><?php /* tag "i" from line 38 */; ?>
<i class="glyphicons-edit"></i></th>
										<?php /* tag "th" from line 39 */; ?>
<th width="40"><?php /* tag "i" from line 39 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 42 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 43 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Paid = new PHPTAL_RepeatController($ctx->PaidAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Paid as $ctx->Paid): ;
?>
<tr>
										<?php /* tag "td" from line 44 */; ?>
<td class="center"><?php 
/* tag "input" from line 44 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Paid, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_1 ?>
/></td>
										<?php /* tag "td" from line 45 */; ?>
<td><?php 
/* tag "a" from line 45 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Paid, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</a></td>
										<?php /* tag "td" from line 46 */; ?>
<td><?php /* tag "div" from line 46 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Paid, 'getNote')); ?>
</div></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php /* tag "div" from line 47 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</div></td>
										<?php /* tag "td" from line 48 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Paid, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_1 ?>
>
												<?php /* tag "i" from line 50 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 53 */; ?>
<td class="center"><?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Paid, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 53 */; ?>
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
/* tag "div" from line 59 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					
					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 62 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 63 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 64 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 65 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 65 */; ?>
<h3><?php /* tag "i" from line 65 */; ?>
<i class="glyphicons-disk_save modal-icon"></i>THÊM KHOẢN CHI</h3></div>
								<?php /* tag "form" from line 66 */; ?>
<form id="FormInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 67 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 68 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 69 */; ?>
<label class="control-label">Ngày</label>
											<?php /* tag "div" from line 70 */; ?>
<div class="controls">
												<?php /* tag "input" from line 71 */; ?>
<input id="Date1" name="Date1" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 74 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 75 */; ?>
<label class="control-label">Giá trị</label>
											<?php /* tag "div" from line 76 */; ?>
<div class="controls">
												<?php /* tag "input" from line 77 */; ?>
<input id="Value1" name="Value1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 80 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 81 */; ?>
<label class="control-label">Diễn giải</label>
											<?php /* tag "div" from line 82 */; ?>
<div class="controls">
												<?php /* tag "input" from line 83 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 87 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 88 */; ?>
<button id="URLInsButton" type="submit" class="btn btn-primary btn-small"><?php /* tag "i" from line 88 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 89 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 89 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 98 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 99 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 100 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 101 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 102 */; ?>
<h3><?php /* tag "i" from line 102 */; ?>
<i class="glyphicons-disk_save modal-icon"></i>CẬP NHẬT KHOẢN CHI</h3>
								</div>
								<?php /* tag "form" from line 104 */; ?>
<form id="FormUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 105 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 106 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 107 */; ?>
<label class="control-label">Ngày</label>
											<?php /* tag "div" from line 108 */; ?>
<div class="controls">
												<?php /* tag "input" from line 109 */; ?>
<input id="Date2" name="Date2" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 112 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 113 */; ?>
<label class="control-label">Giá trị</label>
											<?php /* tag "div" from line 114 */; ?>
<div class="controls">
												<?php /* tag "input" from line 115 */; ?>
<input id="Value2" name="Value2" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 118 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 119 */; ?>
<label class="control-label">Diễn giải</label>
											<?php /* tag "div" from line 120 */; ?>
<div class="controls">
												<?php /* tag "input" from line 121 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 125 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 126 */; ?>
<button id="URLUpdButton" type="submit" class="btn btn-primary btn-small"><?php /* tag "i" from line 126 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 127 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 127 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 134 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 135 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 140 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 141 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 142 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.js"></script>
		<?php /* tag "script" from line 143 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.vi.js"></script>
		<?php /* tag "script" from line 144 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#Date1').datepicker({language:'vi'});
			$('#Date1').datepicker('setDate', new Date());
			$('#Date2').datepicker({language:'vi'});
			
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/PaidSupplier/0";
				
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
			//Delete 1 COLLECT GENERAL			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/PaidSupplier/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 COLLECT GENERAL			
			$("#FormInsert").validate({
				rules:{					
					Value1:{
						min: 1000,
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
					Data[1] = $('#IdSupplier').attr('alt');
					Data[2] = $('#Date1').val();
					Data[3] = $('#Value1').val();
					Data[4] = $('#Note1').val();
																			
					var URL = "/object/ins/PaidSupplier";
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
					function(){$(event.currentTarget).find('input#Value1').first().focus()},
					0500
				);
			});
			
			//-----------------------------------------------------------------------------------
			//Load 1 COLLECT GENERAL
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/PaidSupplier/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Date2').attr('value', data.Date);
					$('#Value2').attr('value', data.Value);
					$('#Note2').attr('value', data.Note);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 COLLECT GENERAL
			//-----------------------------------------------------------------------------------			
			$("#FormUpdate").validate({
				rules:{					
					Value2:{
						min: 1000,
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
					Data[1] = $('#IdSupplier').attr('alt');
					Data[2] = $('#Date2').val();
					Data[3] = $('#Value2').val();
					Data[4] = $('#Note2').val();
					
					var URL = "/object/upd/PaidSupplier";
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
					function(){$(event.currentTarget).find('input#Value2').first().focus()},
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\MoneyPaidSupplier.html (edit that file instead) */; ?>