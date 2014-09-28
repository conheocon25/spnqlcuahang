<?php 
function tpl_52e92b06_MoneyCollectCustomer__DUk1agPAHNnHeFHqmTLhIQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$_tmp_1->Customer1 = new PHPTAL_RepeatController($ctx->CustomerAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Customer1 as $ctx->Customer1): ;
if (null !== ($_tmp_2 = ($ctx->Customer1->getId()==$ctx->Customer->getId()?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Customer1, 'getURLCollect')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "i" from line 14 */; ?>
<i class="glyphicons-user"></i> <?php /* tag "span" from line 14 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer1, 'getName')); ?>
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
if (null !== ($_tmp_3 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div Id="IdCustomer" class="row"<?php echo $_tmp_3 ?>
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
<th width="70" class="left">NGÀY</th>
										<?php /* tag "th" from line 37 */; ?>
<th class="left">DIỄN GIẢI</th>
										<?php /* tag "th" from line 38 */; ?>
<th width="120" class="right">GIÁ TRỊ</th>
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
$_tmp_2->Collect = new PHPTAL_RepeatController($ctx->CollectAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Collect as $ctx->Collect): ;
?>
<tr>
										<?php /* tag "td" from line 45 */; ?>
<td class="center"><?php 
/* tag "input" from line 45 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Collect, 'getId')))):  ;
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->Collect, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="CollectCustomer"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Collect, 'getDatePrint')); ?>
</a></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php /* tag "div" from line 47 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Collect, 'getNote')); ?>
</div></td>
										<?php /* tag "td" from line 48 */; ?>
<td><?php /* tag "div" from line 48 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Collect, 'getValuePrint')); ?>
</div></td>
										<?php /* tag "td" from line 49 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 50 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Collect, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="CollectCustomer"<?php echo $_tmp_1 ?>
>
												<?php /* tag "i" from line 51 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 54 */; ?>
<td class="center"><?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Collect, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 54 */; ?>
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
/* tag "div" from line 60 */ ;
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
<i class="glyphicons-disk_save modal-icon"></i>THÊM KHOẢN THU</h3></div>
								<?php /* tag "form" from line 67 */; ?>
<form id="FormInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 68 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 69 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 70 */; ?>
<label class="control-label">Ngày</label>
											<?php /* tag "div" from line 71 */; ?>
<div class="controls">
												<?php /* tag "input" from line 72 */; ?>
<input id="Date1" name="Date1" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 75 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 76 */; ?>
<label class="control-label">Giá trị</label>
											<?php /* tag "div" from line 77 */; ?>
<div class="controls">
												<?php /* tag "input" from line 78 */; ?>
<input id="Value1" name="Value1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 81 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 82 */; ?>
<label class="control-label">Diễn giải</label>
											<?php /* tag "div" from line 83 */; ?>
<div class="controls">
												<?php /* tag "input" from line 84 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 88 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 89 */; ?>
<button id="URLInsButton" type="submit" class="btn btn-primary btn-small"><?php /* tag "i" from line 89 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 90 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 90 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 99 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 100 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 101 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 102 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 103 */; ?>
<h3><?php /* tag "i" from line 103 */; ?>
<i class="glyphicons-disk_save modal-icon"></i>CẬP NHẬT KHOẢN THU</h3>
								</div>
								<?php /* tag "form" from line 105 */; ?>
<form id="FormUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 106 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 107 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 108 */; ?>
<label class="control-label">Ngày</label>
											<?php /* tag "div" from line 109 */; ?>
<div class="controls">
												<?php /* tag "input" from line 110 */; ?>
<input id="Date2" name="Date2" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 113 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 114 */; ?>
<label class="control-label">Giá trị</label>
											<?php /* tag "div" from line 115 */; ?>
<div class="controls">
												<?php /* tag "input" from line 116 */; ?>
<input id="Value2" name="Value2" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 119 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 120 */; ?>
<label class="control-label">Diễn giải</label>
											<?php /* tag "div" from line 121 */; ?>
<div class="controls">
												<?php /* tag "input" from line 122 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 126 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 127 */; ?>
<button id="URLUpdButton" type="submit" class="btn btn-primary btn-small"><?php /* tag "i" from line 127 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 128 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 128 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 135 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 136 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 141 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 142 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 143 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.js"></script>
		<?php /* tag "script" from line 144 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.vi.js"></script>
		<?php /* tag "script" from line 145 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#Date1').datepicker({language:'vi'});
			$('#Date1').datepicker('setDate', new Date());
			$('#Date2').datepicker({language:'vi'});
			
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/CollectCustomer/0";
				
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
				var URL = "/object/del/CollectCustomer/" + $(this).attr('alt');
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
					Data[1] = $('#IdCustomer').attr('alt');
					Data[2] = $('#Date1').val();
					Data[3] = $('#Value1').val();
					Data[4] = $('#Note1').val();
																			
					var URL = "/object/ins/CollectCustomer";
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
				var url = "/object/load/CollectCustomer/" + $(this).attr('data-id');
				
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
					Data[1] = $('#IdCustomer').attr('alt');
					Data[2] = $('#Date2').val();
					Data[3] = $('#Value2').val();
					Data[4] = $('#Note2').val();
					
					var URL = "/object/upd/CollectCustomer";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\MoneyCollectCustomer.html (edit that file instead) */; ?>