<?php 
function tpl_52cd00ca_SettingConfig__dCEhYK3X4eWVjmOdMA1pEQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/MenuSetting', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 11 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 14 */; ?>
<div class="row">
				<?php /* tag "div" from line 15 */; ?>
<div class="col-12">
					<?php /* tag "a" from line 16 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 17 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 19 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 20 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 22 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 23 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 24 */; ?>
<table class="table table-bordered table-striped table-hover with-check">								
								<?php /* tag "thead" from line 25 */; ?>
<thead>
									<?php /* tag "tr" from line 26 */; ?>
<tr>
										<?php /* tag "th" from line 27 */; ?>
<th width="40"><?php /* tag "input" from line 27 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 28 */; ?>
<th class="left">THAM SỐ</th>
										<?php /* tag "th" from line 29 */; ?>
<th width="120"><?php /* tag "div" from line 29 */; ?>
<div class="text-right">GIÁ TRỊ</div></th>
										<?php /* tag "th" from line 30 */; ?>
<th width="40"><?php /* tag "i" from line 30 */; ?>
<i class="glyphicons-edit"></i></th>
										<?php /* tag "th" from line 31 */; ?>
<th width="40"><?php /* tag "i" from line 31 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 34 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 35 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Config = new PHPTAL_RepeatController($ctx->ConfigAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Config as $ctx->Config): ;
?>
<tr>
										<?php /* tag "td" from line 36 */; ?>
<td class="center"><?php 
/* tag "input" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Config, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_2 ?>
/></td>
										<?php /* tag "td" from line 37 */; ?>
<td><?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Config, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="Config"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Config, 'getParam')); ?>
</a></td>
										<?php /* tag "td" from line 38 */; ?>
<td class="right"><?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Config, 'getValue')); ?>
</span></td>
										<?php /* tag "td" from line 39 */; ?>
<td class="center"><?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Config, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="Config"<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 39 */; ?>
<i class="glyphicon glyphicon-pencil"></i></a></td>
										<?php /* tag "td" from line 40 */; ?>
<td class="center"><?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Config, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 40 */; ?>
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
/* tag "div" from line 46 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					
					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 49 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 50 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 51 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 52 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 53 */; ?>
<h3><?php /* tag "i" from line 53 */; ?>
<i class="glyphicons-cogwheel modal-icon"></i>THÊM MỚI CẤU HÌNH</h3>
								</div>
								<?php /* tag "div" from line 55 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 56 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 57 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 58 */; ?>
<label class="control-label">Tham số</label>
											<?php /* tag "div" from line 59 */; ?>
<div class="controls">
												<?php /* tag "input" from line 60 */; ?>
<input id="Param1" name="Param1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 63 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 64 */; ?>
<label class="control-label">Giá trị</label>
											<?php /* tag "div" from line 65 */; ?>
<div class="controls">
												<?php /* tag "input" from line 66 */; ?>
<input id="Value1" name="Value1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 70 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 71 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 71 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 72 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 72 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 81 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 82 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 83 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 84 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 85 */; ?>
<h3><?php /* tag "i" from line 85 */; ?>
<i class="glyphicons-cogwheel modal-icon"></i>CẬP NHẬT CẤU HÌNH</h3>
								</div>
								<?php /* tag "div" from line 87 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 88 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 89 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 90 */; ?>
<label class="control-label">Tham số</label>
											<?php /* tag "div" from line 91 */; ?>
<div class="controls">
												<?php /* tag "input" from line 92 */; ?>
<input id="Param2" name="Param2" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 95 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 96 */; ?>
<label class="control-label">Giá trị</label>
											<?php /* tag "div" from line 97 */; ?>
<div class="controls">
												<?php /* tag "input" from line 98 */; ?>
<input id="Value2" name="Value2" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>									
									<?php /* tag "div" from line 102 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 103 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 103 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 104 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 104 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 111 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 112 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 117 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 118 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 119 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			//-----------------------------------------------------------------------------------
			//Delete 1 CONFIG			
			//-----------------------------------------------------------------------------------
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/Config/0";
				
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
			
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/Config/" + $(this).attr('alt');
				$.ajax({
					type: "POST",
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 CONFIG
			$('#URLInsButton').click(function(){
				var Data = [];
				Data[0] = 'null';
				Data[1] = $('#Param1').val();
				Data[2] = $('#Value1').val();
				
				var URL = "/object/ins/Config";
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
			//Load 1 CONFIG
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Config/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Param2').attr('value', data.Param);
					$('#Value2').attr('value', data.Value);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 UNIT
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(){
				var Data = [];
				Data[0] = $('#URLUpdButton').attr('alt');
				Data[1] = $('#Param2').val();
				Data[2] = $('#Value2').val();
				
				var URL = "/object/upd/Config";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\SettingConfig.html (edit that file instead) */; ?>