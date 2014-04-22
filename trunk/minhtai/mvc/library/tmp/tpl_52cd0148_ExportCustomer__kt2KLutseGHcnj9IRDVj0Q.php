<?php 
function tpl_52cd0148_ExportCustomer__kt2KLutseGHcnj9IRDVj0Q(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
			
		</div>
		<?php /* tag "div" from line 14 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 15 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 16 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 17 */; ?>
<div class="row">
				<?php 
/* tag "div" from line 18 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdCustomer" class="col-12"<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 19 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 20 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 22 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 23 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 25 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 26 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 27 */; ?>
<table class="table table-bordered table-striped table-hover with-check">
								<?php /* tag "thead" from line 28 */; ?>
<thead>
									<?php /* tag "tr" from line 29 */; ?>
<tr>
										<?php /* tag "th" from line 30 */; ?>
<th width="40"><?php /* tag "input" from line 30 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 31 */; ?>
<th width="90" class="left">NGÀY</th>										
										<?php /* tag "th" from line 32 */; ?>
<th class="left">DIỄN GIẢI</th>
										<?php /* tag "th" from line 33 */; ?>
<th class="right" width="120">GIÁ TRỊ</th>
										<?php /* tag "th" from line 34 */; ?>
<th width="40"><?php /* tag "i" from line 34 */; ?>
<i class="glyphicons-print"></i></th>
										<?php /* tag "th" from line 35 */; ?>
<th width="40"><?php /* tag "i" from line 35 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 38 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 39 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Order = new PHPTAL_RepeatController($ctx->OrderAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Order as $ctx->Order): ;
?>
<tr>
										<?php /* tag "td" from line 40 */; ?>
<td class="center"><?php 
/* tag "input" from line 40 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_3 ?>
/></td>
										<?php /* tag "td" from line 41 */; ?>
<td><?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</a></td>
										<?php /* tag "td" from line 42 */; ?>
<td><?php /* tag "div" from line 42 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Order, 'getNote')); ?>
</div></td>
										<?php /* tag "td" from line 43 */; ?>
<td>
											<?php /* tag "div" from line 44 */; ?>
<div class="text-right">												
												<?php 
/* tag "a" from line 45 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Order, 'getURLDetail')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</a>
											</div>
										</td>
										<?php /* tag "td" from line 48 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Order, 'getURLPrint')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a title="In phiếu" data-toggle="modal" class="OrderPreview" href="#DialogPreview"<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 49 */; ?>
<i class="glyphicons-print"></i></a>
										</td>
										<?php /* tag "td" from line 51 */; ?>
<td class="center"><?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 51 */; ?>
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
/* tag "div" from line 57 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					
					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 60 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 61 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 62 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 63 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 64 */; ?>
<h3><?php /* tag "i" from line 64 */; ?>
<i class="glyphicons-show_big_thumbnails modal-icon"></i>THÊM MỚI ĐƠN HÀNG</h3>
								</div>
								<?php /* tag "div" from line 66 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 67 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 68 */; ?>
<label class="control-label">Kho</label>
										<?php /* tag "div" from line 69 */; ?>
<div class="controls">
											<?php /* tag "select" from line 70 */; ?>
<select name="IdStore1" id="IdStore1" style="width:80%;">
												<?php 
/* tag "option" from line 71 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Store = new PHPTAL_RepeatController($ctx->StoreAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Store as $ctx->Store): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Store, 'getId')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 72 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 77 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 78 */; ?>
<label class="control-label">Ngày</label>
										<?php /* tag "div" from line 79 */; ?>
<div class="controls">
											<?php /* tag "input" from line 80 */; ?>
<input id="Date1" name="Date1" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 83 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 84 */; ?>
<label class="control-label">Diễn giải</label>
										<?php /* tag "div" from line 85 */; ?>
<div class="controls">
											<?php /* tag "input" from line 86 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 89 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 90 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 90 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 91 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 91 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 100 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 101 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 102 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 103 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 104 */; ?>
<h3><?php /* tag "i" from line 104 */; ?>
<i class="glyphicons-show_big_thumbnails modal-icon"></i>CẬP NHẬT ĐƠN HÀNG</h3>
								</div>
								<?php /* tag "div" from line 106 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 107 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 108 */; ?>
<label class="control-label">Kho</label>
										<?php /* tag "div" from line 109 */; ?>
<div class="controls">
											<?php /* tag "select" from line 110 */; ?>
<select name="IdStore2" id="IdStore2" style="width:80%;">
												<?php 
/* tag "option" from line 111 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Store = new PHPTAL_RepeatController($ctx->StoreAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Store as $ctx->Store): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Store, 'getId')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
>
													<?php /* tag "span" from line 112 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 117 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 118 */; ?>
<label class="control-label">Ngày</label>
										<?php /* tag "div" from line 119 */; ?>
<div class="controls">
											<?php /* tag "input" from line 120 */; ?>
<input id="Date2" name="Date2" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 123 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 124 */; ?>
<label class="control-label">Diễn giải</label>
										<?php /* tag "div" from line 125 */; ?>
<div class="controls">
											<?php /* tag "input" from line 126 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 129 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 130 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 130 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 131 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 131 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 138 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 139 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>
			</div>
		</div>
		<!-- DIALOG PREVIEW	-->
		<?php /* tag "div" from line 144 */; ?>
<div id="DialogPreview" class="modal fade">
			<?php /* tag "div" from line 145 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 146 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 147 */; ?>
<div class="modal-header">
						<?php /* tag "h3" from line 148 */; ?>
<h3><?php /* tag "i" from line 148 */; ?>
<i class="glyphicons-star modal-icon"></i>XEM TRƯỚC KHI IN</h3>
					</div>								
					<?php /* tag "form" from line 150 */; ?>
<form class="form">
						<?php /* tag "div" from line 151 */; ?>
<div class="form-group">
							<?php /* tag "div" from line 152 */; ?>
<div id="DocPreview" width="640px" height="480px"></div>
						</div>
						<?php /* tag "div" from line 154 */; ?>
<div class="modal-footer">									
							<?php /* tag "button" from line 155 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 155 */; ?>
<i class="glyphicons-undo"></i> Đóng</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<?php 
/* tag "div" from line 162 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 163 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 164 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#Date1').datepicker({language:'vi'});
			$('#Date2').datepicker({language:'vi'});
			
			$(".OrderPreview").click(function(){
				URL = $(this).attr('alt');
				var mPDF = new PDFObject({ 		
					url: URL,				
					height: "500px",
					pdfOpenParams:{
						view: 'Fit', 
						toolbar: '1', 
						statusbar: '1', 
						messages: '1',
						navpanes: '1' 
					}				
				}).embed("DocPreview");												
				$("#DocPreview").show().printElement();	
			});
			
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/OrderExport/0";
				
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
			//Delete 1 ORDER IMPORT			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/OrderExport/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 ORDER
			$('#URLInsButton').click(function(){
				var Data = [];
				Data[0] = 'null';				
				Data[1] = $('#IdCustomer').attr('alt');
				Data[2] = $('#IdStore1').val();
				Data[3] = $('#Date1').val();
				Data[4] = $('#Note1').val();
							
				var URL = "/object/ins/OrderExport";
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
			//Load 1 ORDER
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/OrderExport/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt'	, data.Id);					
					$('#IdStore2').select2('val'	, data.IdStore);
					$('#Date2').attr('value'		, data.Date);
					$('#Note2').attr('value'	, data.Note);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 TABLE
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(){
				var Data = [];
				Data[0] = $('#URLUpdButton').attr('alt');				
				Data[1] = $('#IdCustomer').attr('alt');
				Data[2] = $('#IdStore2').val();
				Data[3] = $('#Date2').val();
				Data[4] = $('#Note2').val();
				
				var URL = "/object/upd/OrderExport";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\ExportCustomer.html (edit that file instead) */; ?>