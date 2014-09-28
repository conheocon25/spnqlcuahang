<?php 
function tpl_5421235b_ExportSupplierOrder__iK39XqsKDAXJH8fiwnEyEQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
				<?php 
/* tag "div" from line 16 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdSupplier" class="col-12"<?php echo $_tmp_1 ?>
>					
					<?php /* tag "div" from line 17 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 18 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 19 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 20 */; ?>
<thead>
									<?php /* tag "tr" from line 21 */; ?>
<tr>
										<?php /* tag "th" from line 22 */; ?>
<th width="40">STT</th>
										<?php /* tag "th" from line 23 */; ?>
<th class="left">TÊN</th>
										<?php /* tag "th" from line 24 */; ?>
<th class="right" width="80">SỐ LƯỢNG</th>
										<?php /* tag "th" from line 25 */; ?>
<th class="left" width="80">ĐƠN VỊ</th>
										<?php /* tag "th" from line 26 */; ?>
<th class="right" width="120">ĐƠN GIÁ</th>
										<?php /* tag "th" from line 27 */; ?>
<th class="right" width="120">T.TIỀN</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 30 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 31 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Detail as $ctx->Detail): ;
?>
<tr>
										<?php /* tag "td" from line 32 */; ?>
<td class="center"><?php /* tag "div" from line 32 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
										<?php /* tag "td" from line 33 */; ?>
<td><?php 
/* tag "a" from line 33 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getResource/getName')))):  ;
$_tmp_4 = ' data-name="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Detail, 'getResource/getId')))):  ;
$_tmp_5 = ' data-idresource="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Detail, 'getCount')))):  ;
$_tmp_6 = ' data-count="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Detail, 'getPrice')))):  ;
$_tmp_7 = ' data-price="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
<?php echo $_tmp_7 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</a></td>
										<?php /* tag "td" from line 34 */; ?>
<td><?php /* tag "div" from line 34 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
										<?php /* tag "td" from line 35 */; ?>
<td><?php /* tag "div" from line 35 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit')); ?>
</div></td>
										<?php /* tag "td" from line 36 */; ?>
<td><?php /* tag "div" from line 36 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
										<?php /* tag "td" from line 37 */; ?>
<td><?php /* tag "div" from line 37 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 39 */; ?>
<tr>
										<?php /* tag "td" from line 40 */; ?>
<td colspan="5"><?php /* tag "div" from line 40 */; ?>
<div class="text-right"><?php echo 'TỔNG CỘNG'; ?>
</div></td>
										<?php /* tag "td" from line 41 */; ?>
<td><?php /* tag "div" from line 41 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</div></td>
									</tr>
								</tbody>																
							</table>
						</div>
					</div>
										
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 49 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 50 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 51 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 52 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 53 */; ?>
<h3><?php /* tag "i" from line 53 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT ĐƠN HÀNG</h3>
								</div>
								<?php /* tag "div" from line 55 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 56 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 57 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 58 */; ?>
<div class="controls">
											<?php /* tag "input" from line 59 */; ?>
<input readonly="readonly" id="IdResource2" name="IdResource2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 62 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 63 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 64 */; ?>
<div class="controls">
											<?php /* tag "input" from line 65 */; ?>
<input readonly="readonly" id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 68 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 69 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 70 */; ?>
<div class="controls">
											<?php /* tag "input" from line 71 */; ?>
<input id="Count2" name="Count2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 74 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 75 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 76 */; ?>
<div class="controls">
											<?php /* tag "input" from line 77 */; ?>
<input id="Price2" name="Price2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 80 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 81 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 81 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 82 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 82 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 92 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="IdOrder"<?php echo $_tmp_3 ?>
></div>
		<?php 
/* tag "div" from line 93 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 94 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 95 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
						
			//-----------------------------------------------------------------------------------
			//Load 1 ORDER
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				var count = $(this).attr('data-count');
				$('#IdResource2').attr('value', $(this).attr('data-idresource'));
				$('#Name2').attr('value', $(this).attr('data-name'));
				if (count==null){
					$('#Count2').attr('value', '1');
				}else{
					$('#Count2').attr('value', count);
				}
					
				$('#Price2').attr('value', $(this).attr('data-price'));
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 TABLE
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(){
				var Data = [];
				Data[0] = $('#IdSupplier').attr('alt');
				Data[1] = $('#IdOrder').attr('alt');
				Data[2] = $('#IdResource2').val();									
				Data[3] = $('#Count2').val();
				Data[4] = $('#Price2').val();
				
				var URL = "/export/"+Data[0]+"/"+Data[1]+"/"+Data[2]+"/"+Data[3]+"/"+Data[4];
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			$("#DialogEdit").on('show.bs.modal', function(event){
				window.setTimeout(
					function(){$(event.currentTarget).find('input#Count2').first().focus()},
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ExportSupplierOrder.html (edit that file instead) */; ?>