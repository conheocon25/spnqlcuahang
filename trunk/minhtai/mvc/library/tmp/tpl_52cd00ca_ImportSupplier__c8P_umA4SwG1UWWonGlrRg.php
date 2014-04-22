<?php 
function tpl_52cd00ca_ImportSupplier__c8P_umA4SwG1UWWonGlrRg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier1, 'getURLImport')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "i" from line 15 */; ?>
<i class="glyphicons-show_big_thumbnails"></i><?php /* tag "span" from line 15 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
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
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="IdSupplier" class="col-12"<?php echo $_tmp_3 ?>
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
<th width="90" class="left">NGÀY</th>										
										<?php /* tag "th" from line 38 */; ?>
<th class="left">DIỄN GIẢI</th>
										<?php /* tag "th" from line 39 */; ?>
<th class="right" width="120">GIÁ TRỊ</th>
										<?php /* tag "th" from line 40 */; ?>
<th width="40"><?php /* tag "i" from line 40 */; ?>
<i class="glyphicons-print"></i></th>
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
$_tmp_2->Order = new PHPTAL_RepeatController($ctx->OrderAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Order as $ctx->Order): ;
?>
<tr>
										<?php /* tag "td" from line 46 */; ?>
<td class="center"><?php 
/* tag "input" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getId')))):  ;
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</a></td>
										<?php /* tag "td" from line 48 */; ?>
<td><?php /* tag "div" from line 48 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Order, 'getNote')); ?>
</div></td>
										<?php /* tag "td" from line 49 */; ?>
<td>
											<?php /* tag "div" from line 50 */; ?>
<div class="text-right">												
												<?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getURLDetail')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</a>
											</div>
										</td>
										<?php /* tag "td" from line 54 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getURLPrint')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In phiếu" data-toggle="modal" class="OrderPreview" href="#DialogPreview"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 55 */; ?>
<i class="glyphicons-print"></i></a>
										</td>
										<?php /* tag "td" from line 57 */; ?>
<td class="center"><?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 57 */; ?>
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
/* tag "div" from line 63 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					
					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 66 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 67 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 68 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 69 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 70 */; ?>
<h3><?php /* tag "i" from line 70 */; ?>
<i class="glyphicons-show_big_thumbnails modal-icon"></i>THÊM MỚI ĐƠN HÀNG</h3>
								</div>
								<?php /* tag "div" from line 72 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 73 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 74 */; ?>
<label class="control-label">Kho</label>
										<?php /* tag "div" from line 75 */; ?>
<div class="controls">
											<?php /* tag "select" from line 76 */; ?>
<select name="IdStore1" id="IdStore1" style="width:80%;">
												<?php 
/* tag "option" from line 77 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Store = new PHPTAL_RepeatController($ctx->StoreAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Store as $ctx->Store): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Store, 'getId')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 78 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 83 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 84 */; ?>
<label class="control-label">Ngày</label>
										<?php /* tag "div" from line 85 */; ?>
<div class="controls">
											<?php /* tag "input" from line 86 */; ?>
<input id="Date1" name="Date1" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 89 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 90 */; ?>
<label class="control-label">Diễn giải</label>
										<?php /* tag "div" from line 91 */; ?>
<div class="controls">
											<?php /* tag "input" from line 92 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 95 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 96 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 96 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 97 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 97 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
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
<i class="glyphicons-show_big_thumbnails modal-icon"></i>CẬP NHẬT ĐƠN HÀNG</h3>
								</div>
								<?php /* tag "div" from line 112 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 113 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 114 */; ?>
<label class="control-label">Kho</label>
										<?php /* tag "div" from line 115 */; ?>
<div class="controls">
											<?php /* tag "select" from line 116 */; ?>
<select name="IdStore2" id="IdStore2" style="width:80%;">
												<?php 
/* tag "option" from line 117 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Store = new PHPTAL_RepeatController($ctx->StoreAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Store as $ctx->Store): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Store, 'getId')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<option<?php echo $_tmp_1 ?>
>
													<?php /* tag "span" from line 118 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 123 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 124 */; ?>
<label class="control-label">Ngày</label>
										<?php /* tag "div" from line 125 */; ?>
<div class="controls">
											<?php /* tag "input" from line 126 */; ?>
<input id="Date2" name="Date2" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 129 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 130 */; ?>
<label class="control-label">Diễn giải</label>
										<?php /* tag "div" from line 131 */; ?>
<div class="controls">
											<?php /* tag "input" from line 132 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 135 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 136 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 136 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 137 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 137 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 144 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 145 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>
			</div>
		</div>
		<!-- DIALOG PREVIEW	-->
		<?php /* tag "div" from line 150 */; ?>
<div id="DialogPreview" class="modal fade">
			<?php /* tag "div" from line 151 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 152 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 153 */; ?>
<div class="modal-header">
						<?php /* tag "h3" from line 154 */; ?>
<h3><?php /* tag "i" from line 154 */; ?>
<i class="glyphicons-star modal-icon"></i>XEM TRƯỚC KHI IN</h3>
					</div>								
					<?php /* tag "form" from line 156 */; ?>
<form class="form">
						<?php /* tag "div" from line 157 */; ?>
<div class="form-group">
							<?php /* tag "div" from line 158 */; ?>
<div id="DocPreview" width="640px" height="480px"></div>
						</div>
						<?php /* tag "div" from line 160 */; ?>
<div class="modal-footer">									
							<?php /* tag "button" from line 161 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 161 */; ?>
<i class="glyphicons-undo"></i> Đóng</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<?php 
/* tag "div" from line 168 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 169 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 170 */; ?>
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
				var URL = "/object/del/OrderImport/0";
				
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
				var URL = "/object/del/OrderImport/" + $(this).attr('alt');
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
				Data[1] = $('#IdSupplier').attr('alt');
				Data[2] = $('#IdStore1').val();
				Data[3] = $('#Date1').val();
				Data[4] = $('#Note1').val();
							
				var URL = "/object/ins/OrderImport";
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
				var url = "/object/load/OrderImport/" + $(this).attr('data-id');
				
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
				Data[1] = $('#IdSupplier').attr('alt');
				Data[2] = $('#IdStore2').val();
				Data[3] = $('#Date2').val();
				Data[4] = $('#Note2').val();
				
				var URL = "/object/upd/OrderImport";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\ImportSupplier.html (edit that file instead) */; ?>