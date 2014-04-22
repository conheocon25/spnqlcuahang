<?php 
function tpl_52cd0148_MoneyPaidCustomer__AAMJ8PAWqJtu0GA4fXCAtA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Customer1, 'getURLCollect')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "i" from line 15 */; ?>
<i class="glyphicons-tag"></i> <?php /* tag "span" from line 15 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer1, 'getName')); ?>
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

			<?php 
/* tag "div" from line 23 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="IdCustomer" class="row"<?php echo $_tmp_3 ?>
>
				<?php /* tag "div" from line 24 */; ?>
<div class="col-12">
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
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 34 */; ?>
<thead>
									<?php /* tag "tr" from line 35 */; ?>
<tr>
										<?php /* tag "th" from line 36 */; ?>
<th width="40"><?php /* tag "input" from line 36 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 37 */; ?>
<th width="70" class="left">NGÀY</th>										
										<?php /* tag "th" from line 38 */; ?>
<th class="left">DIỄN GIẢI</th>
										<?php /* tag "th" from line 39 */; ?>
<th width="120" class="right">GIÁ TRỊ</th>
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
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="CollectGeneral"<?php echo $_tmp_1 ?>
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
<td class="center"><?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Collect, 'getId')))):  ;
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
<i class="glyphicons-usd modal-icon"></i>THÊM KHOẢN THU</h3></div>
								<?php /* tag "div" from line 62 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 63 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 64 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 65 */; ?>
<label class="control-label">Ngày</label>
											<?php /* tag "div" from line 66 */; ?>
<div class="controls">
												<?php /* tag "input" from line 67 */; ?>
<input id="Date1" name="Date1" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>										
										<?php /* tag "div" from line 70 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 71 */; ?>
<label class="control-label">Giá trị</label>
											<?php /* tag "div" from line 72 */; ?>
<div class="controls">
												<?php /* tag "input" from line 73 */; ?>
<input id="Value1" name="Value1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 76 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 77 */; ?>
<label class="control-label">Diễn giải</label>
											<?php /* tag "div" from line 78 */; ?>
<div class="controls">
												<?php /* tag "input" from line 79 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 83 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 84 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 84 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 85 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 85 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 94 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 95 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 96 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 97 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 98 */; ?>
<h3><?php /* tag "i" from line 98 */; ?>
<i class="glyphicons-usd modal-icon"></i>CẬP NHẬT KHOẢN THU</h3>
								</div>
								<?php /* tag "div" from line 100 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 101 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 102 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 103 */; ?>
<label class="control-label">Ngày</label>
											<?php /* tag "div" from line 104 */; ?>
<div class="controls">
												<?php /* tag "input" from line 105 */; ?>
<input id="Date2" name="Date2" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>										
										<?php /* tag "div" from line 108 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 109 */; ?>
<label class="control-label">Giá trị</label>
											<?php /* tag "div" from line 110 */; ?>
<div class="controls">
												<?php /* tag "input" from line 111 */; ?>
<input id="Value2" name="Value2" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 114 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 115 */; ?>
<label class="control-label">Diễn giải</label>
											<?php /* tag "div" from line 116 */; ?>
<div class="controls">
												<?php /* tag "input" from line 117 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 121 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 122 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 122 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 123 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 123 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->					
					<?php 
/* tag "div" from line 130 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 131 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>
					
				</div>
			</div>
		</div>		
		<?php 
/* tag "div" from line 135 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="CustomerCurrent"<?php echo $_tmp_1 ?>
></div>
		
		<?php 
/* tag "div" from line 137 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 138 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 139 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.js"></script>
		<?php /* tag "script" from line 140 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.vi.js"></script>
		<?php /* tag "script" from line 141 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#Date1').datepicker({language:'vi'});
			$('#Date2').datepicker({language:'vi'});
			
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/PaidCustomer/0";
				
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
			//Delete 1 PAID GENERAL			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/PaidCustomer/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 PAID GENERAL
			$('#URLInsButton').click(function(){
				var Data = [];
				Data[0] = 'null';				
				Data[1] = $('#CustomerCurrent').attr('alt');
				Data[2] = $('#Date1').val();				
				Data[3] = $('#Value1').val();
				Data[4] = $('#Note1').val();
													
				var URL = "/object/ins/PaidCustomer";
				$.ajax({
					type: "POST",
					data: {Data:Data},
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Load 1 PAID GENERAL
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/PaidCustomer/" + $(this).attr('data-id');
				
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
			$('#URLUpdButton').click(function(){
				var Data = [];
				Data[0] = $('#URLUpdButton').attr('alt');				
				Data[1] = $('#CustomerCurrent').attr('alt');
				Data[2] = $('#Date2').val();
				Data[3] = $('#Value2').val();
				Data[4] = $('#Note2').val();
				
				var URL = "/object/upd/PaidCustomer";
				$.ajax({
					type: "POST",
					data: {Data:Data},
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\MoneyPaidCustomer.html (edit that file instead) */; ?>