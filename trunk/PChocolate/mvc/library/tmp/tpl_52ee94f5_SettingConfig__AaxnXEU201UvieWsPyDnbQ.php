<?php 
function tpl_52ee94f5_SettingConfig__AaxnXEU201UvieWsPyDnbQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
					<?php /* tag "div" from line 16 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 17 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "div" from line 18 */; ?>
<div class="form-horizontal">
								<?php /* tag "div" from line 19 */; ?>
<div class="modal-body">
									<?php /* tag "div" from line 20 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 21 */; ?>
<label class="control-label">Tên quán</label>
										<?php /* tag "div" from line 22 */; ?>
<div class="controls">
											<?php 
/* tag "input" from line 23 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->ConfigName, 'getValue')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->ConfigName, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Name2" type="text" class="form-control input-small"<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
/>
										</div>
									</div>
									<?php /* tag "div" from line 26 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 27 */; ?>
<label class="control-label">Địa chỉ</label>
										<?php /* tag "div" from line 28 */; ?>
<div class="controls">
											<?php 
/* tag "input" from line 29 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->ConfigAddress, 'getValue')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->ConfigAddress, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Address2" type="text" class="form-control input-small"<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
/>
										</div>
									</div>
									<?php /* tag "div" from line 32 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 33 */; ?>
<label class="control-label">Điện thoại</label>
										<?php /* tag "div" from line 34 */; ?>
<div class="controls">
											<?php 
/* tag "input" from line 35 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->ConfigPhone, 'getValue')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->ConfigPhone, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Phone2" type="text" class="form-control input-small"<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
/>
										</div>
									</div>
									<?php /* tag "div" from line 38 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 39 */; ?>
<label class="control-label">Số dòng trên trang</label>
										<?php /* tag "div" from line 40 */; ?>
<div class="controls">
											<?php 
/* tag "input" from line 41 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->ConfigRowPerPage, 'getValue')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->ConfigRowPerPage, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="RowPerPage2" type="text" class="form-control input-small"<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
/>
										</div>
									</div>
									<?php /* tag "div" from line 44 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 45 */; ?>
<label class="control-label">Số lượt truy cập</label>
										<?php /* tag "div" from line 46 */; ?>
<div class="controls">
											<?php 
/* tag "input" from line 47 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->ConfigGuestVisit, 'getValue')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->ConfigGuestVisit, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="GuestVisit2" type="text" class="form-control input-small"<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
/>
										</div>
									</div>
									<?php /* tag "div" from line 50 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 51 */; ?>
<label class="control-label">Giảm giá (mặc định)</label>
										<?php /* tag "div" from line 52 */; ?>
<div class="controls">
											<?php 
/* tag "input" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->ConfigDiscount, 'getValue')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->ConfigDiscount, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Discount2" type="text" class="form-control input-small"<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
/>
										</div>
									</div>
									<?php /* tag "div" from line 56 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 57 */; ?>
<label class="control-label">Phạt trễ giờ</label>
										<?php /* tag "div" from line 58 */; ?>
<div class="controls">
											<?php 
/* tag "input" from line 59 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->ConfigEvery5Minutes, 'getValue')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->ConfigEvery5Minutes, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Every5Minutes2" type="text" class="form-control input-small"<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
/>
										</div>
									</div>
									<?php /* tag "div" from line 62 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 63 */; ?>
<label class="control-label">Danh mục tự chọn</label>
										<?php /* tag "div" from line 64 */; ?>
<div class="controls">											
											<?php 
/* tag "select" from line 65 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->ConfigCategoryAuto, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<select name="CategoryAuto2" id="CategoryAuto2" style="width:80%;"<?php echo $_tmp_1 ?>
>
												<?php 
/* tag "option" from line 66 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if ($ctx->ConfigCategoryAuto->getValue()==$ctx->Category->getId()?'selected':''):  ;
$_tmp_4 = ' selected="selected"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
>
													<?php /* tag "span" from line 67 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 72 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 73 */; ?>
<label class="control-label">Hiển thị gọi món</label>
										<?php /* tag "div" from line 74 */; ?>
<div class="controls">											
											<?php 
/* tag "select" from line 75 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->ConfigSwitchBoardCall, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<select name="SwitchBoardCall2" id="SwitchBoardCall2" style="width:80%;"<?php echo $_tmp_3 ?>
>
												<?php 
/* tag "option" from line 76 */ ;
if ($ctx->ConfigSwitchBoardCall->getValue()=='0'?'selected':''):  ;
$_tmp_4 = ' selected="selected"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option value="0"<?php echo $_tmp_4 ?>
>Tắt</option>
												<?php 
/* tag "option" from line 77 */ ;
if ($ctx->ConfigSwitchBoardCall->getValue()=='1'?'selected':''):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option value="1"<?php echo $_tmp_2 ?>
>Bật</option>
											</select>
										</div>
									</div>
									<?php /* tag "div" from line 81 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 82 */; ?>
<label class="control-label">Giả lặp phiếu 2 liên</label>
										<?php /* tag "div" from line 83 */; ?>
<div class="controls">											
											<?php 
/* tag "select" from line 84 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->ConfigReceiptVirtualDouble, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<select name="ReceiptVirtualDouble2" id="ReceiptVirtualDouble2" style="width:80%;"<?php echo $_tmp_1 ?>
>
												<?php 
/* tag "option" from line 85 */ ;
if ($ctx->ConfigReceiptVirtualDouble->getValue()=='0'?'selected':''):  ;
$_tmp_4 = ' selected="selected"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option value="0"<?php echo $_tmp_4 ?>
>Tắt</option>
												<?php 
/* tag "option" from line 86 */ ;
if ($ctx->ConfigReceiptVirtualDouble->getValue()=='1'?'selected':''):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option value="1"<?php echo $_tmp_2 ?>
>Bật</option>
											</select>
										</div>
									</div>
									<?php /* tag "div" from line 90 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 91 */; ?>
<label class="control-label">Thời gian lưu Log</label>
										<?php /* tag "div" from line 92 */; ?>
<div class="controls">											
											<?php 
/* tag "select" from line 93 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->ConfignMonthLog, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<select name="nMonthLog2" id="nMonthLog2" style="width:80%;"<?php echo $_tmp_3 ?>
>
												<?php 
/* tag "option" from line 94 */ ;
if ($ctx->ConfigReceiptVirtualDouble->getValue()=='1'?'selected':''):  ;
$_tmp_4 = ' selected="selected"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option value="1"<?php echo $_tmp_4 ?>
>1 tháng</option>
												<?php 
/* tag "option" from line 95 */ ;
if ($ctx->ConfigReceiptVirtualDouble->getValue()=='2'?'selected':''):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option value="2"<?php echo $_tmp_2 ?>
>2 tháng</option>
												<?php 
/* tag "option" from line 96 */ ;
if ($ctx->ConfigReceiptVirtualDouble->getValue()=='3'?'selected':''):  ;
$_tmp_1 = ' selected="selected"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<option value="3"<?php echo $_tmp_1 ?>
>3 tháng</option>
											</select>
										</div>
									</div>
								</div>
								<?php /* tag "div" from line 101 */; ?>
<div class="modal-footer">
									<?php /* tag "button" from line 102 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 102 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 110 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 111 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 112 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/									
			//-----------------------------------------------------------------------------------
			//Update 1 UNIT
			//-----------------------------------------------------------------------------------															
			$('#URLUpdButton').click(function(){
				var Data1 = [];
				var Data2 = [];
				var Data3 = [];
				var Data4 = [];
				var Data5 = [];
				var Data6 = [];
				var Data7 = [];
				var Data8 = [];
				var Data9 = [];
				var Data10 = [];
				
				Data1[0] = $('#RowPerPage2').attr('data-id');
				Data1[1] = "ROW_PER_PAGE";
				Data1[2] = $('#RowPerPage2').val();
				
				var URL = "/object/upd/Config";
				$.ajax({
					type: "POST",
					data: {Data:Data1},
					url: URL,
					success: function(msg){}
				});
				
				Data2[0] = $('#GuestVisit2').attr('data-id');
				Data2[1] = "GUEST_VISIT";
				Data2[2] = $('#GuestVisit2').val();			
				$.ajax({
					type: "POST",
					data: {Data:Data2},
					url: URL,
					success: function(msg){}
				});
				
				Data3[0] = $('#Discount2').attr('data-id');
				Data3[1] = "DISCOUNT";
				Data3[2] = $('#Discount2').val();								
				$.ajax({
					type: "POST",
					data: {Data:Data3},
					url: URL,
					success: function(msg){}
				});
				
				Data4[0] = $('#Every5Minutes2').attr('data-id');
				Data4[1] = "EVERY_5_MINUTES";
				Data4[2] = $('#Every5Minutes2').val();
				$.ajax({
					type: "POST",
					data: {Data:Data4},
					url: URL,
					success: function(msg){}
				});
				
				Data5[0] = $('#CategoryAuto2').attr('data-id');
				Data5[1] = "CATEGORY_AUTO";
				Data5[2] = $('#CategoryAuto2').val();
				$.ajax({
					type: "POST",
					data: {Data:Data5},
					url: URL,
					success: function(msg){}
				});
				
				//Cập nhật bật/tắt board gọi món
				Data6[0] = $('#SwitchBoardCall2').attr('data-id');
				Data6[1] = "SWITCH_BOARD_CALL";
				Data6[2] = $('#SwitchBoardCall2').val();
				$.ajax({
					type: "POST",
					data: {Data:Data6},
					url: URL,
					success: function(msg){}
				});
				
				//Cập nhật bật/tắt in 2 liên
				Data7[0] = $('#ReceiptVirtualDouble2').attr('data-id');
				Data7[1] = "RECEIPT_VIRTUAL_DOUBLE";
				Data7[2] = $('#ReceiptVirtualDouble2').val();				
				$.ajax({
					type: "POST",
					data: {Data:Data7},
					url: URL,
					success: function(msg){}
				});
				
				//Cập nhật tên quán
				Data8[0] = $('#Name2').attr('data-id');
				Data8[1] = "NAME";
				Data8[2] = $('#Name2').val();
				$.ajax({
					type: "POST",
					data: {Data:Data8},
					url: URL,
					success: function(msg){}
				});
				
				//Cập nhật địa chỉ
				Data9[0] = $('#Address2').attr('data-id');
				Data9[1] = "ADDRESS";
				Data9[2] = $('#Address2').val();
				$.ajax({
					type: "POST",
					data: {Data:Data9},
					url: URL,
					success: function(msg){}
				});
				
				//Cập nhật điện thoại
				Data10[0] = $('#Phone2').attr('data-id');
				Data10[1] = "PHONE";
				Data10[2] = $('#Phone2').val();
				$.ajax({
					type: "POST",
					data: {Data:Data10},
					url: URL,
					success: function(msg){}
				});
				
				//hiển thị thông báo
				$.gritter.add({
					title		:'Thông báo',
					class_name	: 'gritter-green',
					text		:'Đã cập nhật xong',
					time		:5000,
					sticky		: false
				});
			});
		/*]]>*/</script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\SettingConfig.html (edit that file instead) */; ?>