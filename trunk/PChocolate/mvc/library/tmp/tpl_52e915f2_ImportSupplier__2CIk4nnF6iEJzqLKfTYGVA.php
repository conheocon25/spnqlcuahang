<?php 
function tpl_52e915f2_ImportSupplier__2CIk4nnF6iEJzqLKfTYGVA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Order, 'getDescription')); ?>
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
<td class="center"><?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getURLPrint')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 54 */; ?>
<i class="glyphicon glyphicon-print"></i></a></td>
										<?php /* tag "td" from line 55 */; ?>
<td class="center"><?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 55 */; ?>
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
/* tag "div" from line 61 */ ;
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
<div class="modal-header">
									<?php /* tag "h3" from line 68 */; ?>
<h3><?php /* tag "i" from line 68 */; ?>
<i class="glyphicons-show_big_thumbnails modal-icon"></i>THÊM MỚI ĐƠN HÀNG</h3>
								</div>
								<?php /* tag "div" from line 70 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 71 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 72 */; ?>
<label class="control-label">Ngày</label>
										<?php /* tag "div" from line 73 */; ?>
<div class="controls">
											<?php /* tag "input" from line 74 */; ?>
<input id="Date1" name="Date1" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 77 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 78 */; ?>
<label class="control-label">Diễn giải</label>
										<?php /* tag "div" from line 79 */; ?>
<div class="controls">
											<?php /* tag "input" from line 80 */; ?>
<input id="Description1" name="Description1" type="text" class="form-control input-small"/>
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
					
					<!-- UPDATE DIALOG  -->
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
<i class="glyphicons-show_big_thumbnails modal-icon"></i>CẬP NHẬT ĐƠN HÀNG</h3>
								</div>
								<?php /* tag "div" from line 100 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 101 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 102 */; ?>
<label class="control-label">Ngày</label>
										<?php /* tag "div" from line 103 */; ?>
<div class="controls">
											<?php /* tag "input" from line 104 */; ?>
<input id="Date2" name="Date2" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 107 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 108 */; ?>
<label class="control-label">Diễn giải</label>
										<?php /* tag "div" from line 109 */; ?>
<div class="controls">
											<?php /* tag "input" from line 110 */; ?>
<input id="Description2" name="Description2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 113 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 114 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 114 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 115 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 115 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 122 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 123 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 127 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 128 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 129 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#Date1').datepicker({language:'vi'});
			$('#Date2').datepicker({language:'vi'});
			
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
				Data[2] = $('#Date1').val();				
				Data[3] = $('#Description1').val();
							
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
			$("#DialogIns").on('show.bs.modal', function(event){
				window.setTimeout(
					function(){$(event.currentTarget).find('input#Date1').first().focus()},
					0500
				);
			});
			
			//-----------------------------------------------------------------------------------
			//Load 1 ORDER
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/OrderImport/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Date2').attr('value', data.Date);
					$('#Description2').attr('value', data.Description);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 TABLE
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(){
				var Data = [];
				Data[0] = $('#URLUpdButton').attr('alt');				
				Data[1] = $('#IdSupplier').attr('alt');
				Data[2] = $('#Date2').val();				
				Data[3] = $('#Description2').val();
				
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
			$("#DialogEdit").on('show.bs.modal', function(event){
				window.setTimeout(
					function(){$(event.currentTarget).find('input#Date2').first().focus()},
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ImportSupplier.html (edit that file instead) */; ?>