<?php 
function tpl_52cd0456_Report__Aq6LVvNOXu4q_dWFQ178ZA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/MenuApp', $_thistpl) ;
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
<i class="glyphicon glyphicon-plus"></i> Thêm mới
					</a>
					<?php /* tag "div" from line 20 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 21 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 22 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 23 */; ?>
<thead>
									<?php /* tag "tr" from line 24 */; ?>
<tr>
										<?php /* tag "th" from line 25 */; ?>
<th width="40"><?php /* tag "i" from line 25 */; ?>
<i class="glyphicons-fax"></i></th>
										<?php /* tag "th" from line 26 */; ?>
<th><?php /* tag "div" from line 26 */; ?>
<div class="text-left">THÁNG</div></th>																								
										<?php /* tag "th" from line 27 */; ?>
<th width="40"><?php /* tag "i" from line 27 */; ?>
<i class="glyphicons-edit"></i></th>
										<?php /* tag "th" from line 28 */; ?>
<th width="40"><?php /* tag "i" from line 28 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 31 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
									<?php 
/* tag "tr" from line 32 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->Tracks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
										<?php /* tag "td" from line 33 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</td>
										<?php /* tag "td" from line 34 */; ?>
<td><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Track, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Track, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 35 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Track, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 37 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 40 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Track, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 42 */; ?>
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
					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 51 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 52 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 53 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 54 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 55 */; ?>
<h3><?php /* tag "i" from line 55 */; ?>
<i class="glyphicons-fax modal-icon"></i>THÊM BÁO CÁO</h3>
								</div>
								<?php /* tag "div" from line 57 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 58 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 59 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 60 */; ?>
<label class="control-label" for="DateStart1">Bắt đầu</label>
											<?php /* tag "div" from line 61 */; ?>
<div class="controls">
												<?php /* tag "input" from line 62 */; ?>
<input id="DateStart1" name="DateStart1" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 65 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 66 */; ?>
<label class="control-label" for="DateEnd">Kết thúc</label>
											<?php /* tag "div" from line 67 */; ?>
<div class="controls">
												<?php /* tag "input" from line 68 */; ?>
<input id="DateEnd1" name="DateEnd1" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 72 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 73 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 73 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 74 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 74 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- DELETE DIALOG  -->
					<?php /* tag "div" from line 83 */; ?>
<div id="DialogDel" class="modal fade">
						<?php /* tag "div" from line 84 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 85 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 86 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 87 */; ?>
<h3>XÓA BÁO CÁO</h3>
								</div>
								<?php /* tag "div" from line 89 */; ?>
<div class="modal-body">
									<?php /* tag "p" from line 90 */; ?>
<p>Bạn có chắc muốn xóa mục này ?</p>
								</div>
								<?php /* tag "div" from line 92 */; ?>
<div class="modal-footer">
									<?php /* tag "button" from line 93 */; ?>
<button id="URLDelButton" class="btn btn-primary btn-small">Xóa</button>
									<?php /* tag "button" from line 94 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small">Không</button>
								</div>
							</div>
						</div>
					</div>
					<!-- END DELETE DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 102 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 103 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 104 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 105 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 106 */; ?>
<h3><?php /* tag "i" from line 106 */; ?>
<i class="glyphicons-fax modal-icon"></i>CẬP NHẬT BÁO CÁO</h3>
								</div>
								<?php /* tag "div" from line 108 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 109 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 110 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 111 */; ?>
<label class="control-label">Bắt đầu</label>
											<?php /* tag "div" from line 112 */; ?>
<div class="controls">
												<?php /* tag "input" from line 113 */; ?>
<input id="DateStart2" name="DateStart2" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 116 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 117 */; ?>
<label class="control-label">Kết thúc</label>
											<?php /* tag "div" from line 118 */; ?>
<div class="controls">
												<?php /* tag "input" from line 119 */; ?>
<input id="DateEnd2" name="DateEnd2" type="text" data-date-format="yyyy-mm-dd" class="form-control input-small"/>
											</div>
										</div>
									</div>									
									<?php /* tag "div" from line 123 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 124 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 124 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 125 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 125 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->

					<!-- DELETE DIALOG  -->
					<?php /* tag "div" from line 134 */; ?>
<div id="DialogDel" class="modal fade">
						<?php /* tag "div" from line 135 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 136 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 137 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 137 */; ?>
<h3>XÓA BÁO CÁO</h3></div>
								<?php /* tag "div" from line 138 */; ?>
<div class="modal-body">
									<?php /* tag "p" from line 139 */; ?>
<p>Bạn có chắc muốn xóa mục này ?</p>
								</div>
								<?php /* tag "div" from line 141 */; ?>
<div class="modal-footer">
									<?php /* tag "button" from line 142 */; ?>
<button id="URLDelButton" class="btn btn-primary btn-small">Xóa</button>
									<?php /* tag "button" from line 143 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small">Không</button>
								</div>
							</div>
						</div>
					</div>
					<!-- END DELETE DIALOG  -->
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 152 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 153 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 154 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.js"></script>
		<?php /* tag "script" from line 155 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.vi.js"></script>
		<?php /* tag "script" from line 156 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#DateStart1').datepicker({language: 'vi'});
			$('#DateEnd1').datepicker({language: 'vi'});
			
			$('#DateStart2').datepicker({language: 'vi'});
			$('#DateEnd2').datepicker({language: 'vi'});
									
			//-----------------------------------------------------------------------------------
			//Delete 1 REPORT			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/Tracking/" + $(this).attr('alt');
				$.ajax({
					type: "POST",
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 REPORT
			$('#URLInsButton').click(function(){
				var Data = [];
				Data[0] = 'null';
				Data[1] = $('#DateStart1').val();
				Data[2] = $('#DateEnd1').val();								
				var URL = "/object/ins/Tracking";
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
			//Load 1 REPORT
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Tracking/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#DateStart2').attr('value', data.DateStart);
					$('#DateEnd2').attr('value', data.DateEnd);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 REPORT
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(){
				var Data = [];
				Data[0] = $('#URLUpdButton').attr('alt');
				Data[1] = $('#DateStart2').val();
				Data[2] = $('#DateEnd2').val();
				
				var URL = "/object/upd/Tracking";
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\Report.html (edit that file instead) */; ?>