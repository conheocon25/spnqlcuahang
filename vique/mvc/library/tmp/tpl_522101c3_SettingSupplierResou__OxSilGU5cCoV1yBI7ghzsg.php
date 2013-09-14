<?php 
function tpl_522101c3_SettingSupplierResou__OxSilGU5cCoV1yBI7ghzsg(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 6 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript">
			/*<![CDATA[*/
			$(document).ready(function () {
				$('#Barcode').keyup(function (){
					var str = $('#Barcode').val();
					var Result = false;
					var Name = "";
					
					if (str.length <1){
						$('#BarcodeMessage').html("Ít nhất 1 kí tự");						
					}else{
						URL = "/barcode/"+str;
						$.ajax({
							type: "POST",
							async: false,
							url: URL,
							dataType: 'json',			
								success: function(data){
									Result = data.Result;
									Name = data.Name;
								}
						});
						if (Result == "false")
							$('#BarcodeMessage').html("Mã vạch trùng với " + Name + ", vui lòng chọn lại mã khác");
						else
							$('#BarcodeMessage').html("Mã vạch đạt tiêu chuẩn, có thể dùng được");
					}
				});
			});
			/*]]>*/
		</script>
	</head>	
	<?php /* tag "body" from line 39 */; ?>
<body>
		<?php /* tag "div" from line 40 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 41 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 42 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 43 */; ?>
<div class="span3"></div>
				<?php /* tag "div" from line 44 */; ?>
<div class="span9 main">
					<?php 
/* tag "span" from line 45 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "form" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Resource, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-horizontal" method="post"<?php echo $_tmp_1 ?>
>
						<?php /* tag "div" from line 47 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 48 */; ?>
<label class="control-label" for="IdSupplier">Nhà cung cấp</label>
							<?php /* tag "div" from line 49 */; ?>
<div class="controls">
								<?php /* tag "select" from line 50 */; ?>
<select name="IdSupplier" id="IdSupplier">
									<?php 
/* tag "option" from line 51 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Supplier1 = new PHPTAL_RepeatController($ctx->SupplierAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Supplier1 as $ctx->Supplier1): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier1, 'getId')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if ($ctx->Supplier->getId()==$ctx->Supplier1->getId()):  ;
$_tmp_4 = ' selected="selected"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
>
										<?php /* tag "span" from line 52 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
</span>
									</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</select>	
							</div>
						</div>
						<?php /* tag "div" from line 57 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 58 */; ?>
<label class="control-label" for="Name">Tên</label>
							<?php /* tag "div" from line 59 */; ?>
<div class="controls">
								<?php 
/* tag "input" from line 60 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Resource, 'getName')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<input id="Name" name="Name" type="text"<?php echo $_tmp_3 ?>
/>
							</div>
						</div>
						<?php /* tag "div" from line 63 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 64 */; ?>
<label class="control-label" for="NameShort">Tên ngắn gọn</label>
							<?php /* tag "div" from line 65 */; ?>
<div class="controls">
								<?php 
/* tag "input" from line 66 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Resource, 'getNameShort')))):  ;
$_tmp_4 = ' value="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<input id="NameShort" name="NameShort" type="text"<?php echo $_tmp_4 ?>
/>
							</div>
						</div>
						<?php /* tag "div" from line 69 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 70 */; ?>
<label class="control-label" for="Unit">Đơn vị</label>
							<?php /* tag "div" from line 71 */; ?>
<div class="controls">
								<?php /* tag "select" from line 72 */; ?>
<select name="Unit" id="Unit">
									<?php 
/* tag "option" from line 73 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Unit = new PHPTAL_RepeatController($ctx->UnitAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Unit as $ctx->Unit): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Unit, 'getName')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if ($ctx->Resource->getUnit()==$ctx->Unit->getName()):  ;
$_tmp_4 = ' selected="selected"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
>
										<?php /* tag "span" from line 74 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
									</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</select>	
							</div>
						</div>
						<?php /* tag "div" from line 79 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 80 */; ?>
<label class="control-label" for="PriceImport">Giá nhập</label>
							<?php /* tag "div" from line 81 */; ?>
<div class="controls">
								<?php 
/* tag "input" from line 82 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Resource, 'getPriceImport')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<input id="PriceImport" name="PriceImport" type="text"<?php echo $_tmp_3 ?>
/>
							</div>
						</div>
						<?php /* tag "div" from line 85 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 86 */; ?>
<label class="control-label" for="PriceExport">Giá bán</label>
							<?php /* tag "div" from line 87 */; ?>
<div class="controls">
								<?php 
/* tag "input" from line 88 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Resource, 'getPriceExport')))):  ;
$_tmp_4 = ' value="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<input id="PriceExport" name="PriceExport" type="text"<?php echo $_tmp_4 ?>
/>
							</div>
						</div>
						<?php /* tag "div" from line 91 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 92 */; ?>
<label class="control-label" for="Description">Diễn giải</label>
							<?php /* tag "div" from line 93 */; ?>
<div class="controls">
								<?php 
/* tag "input" from line 94 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Resource, 'getDescription')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Description" name="Description" type="text"<?php echo $_tmp_2 ?>
/>	
							</div>
						</div>
						<?php /* tag "div" from line 97 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 98 */; ?>
<label class="control-label" for="Barcode">Mã vạch</label>
							<?php /* tag "div" from line 99 */; ?>
<div class="controls">
								<?php 
/* tag "input" from line 100 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Resource, 'getBarcode')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<input id="Barcode" name="Barcode" type="text"<?php echo $_tmp_3 ?>
/>
								<?php /* tag "span" from line 101 */; ?>
<span id="BarcodeMessage" class="help-inline"></span>
							</div>							
						</div>							
						<?php /* tag "div" from line 104 */; ?>
<div class="control-group">
							<?php /* tag "div" from line 105 */; ?>
<div class="controls">
								<?php /* tag "button" from line 106 */; ?>
<button type="submit" class="btn" value="submit-value">Cập nhật</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php 
/* tag "span" from line 112 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\SettingSupplierResourceUpdLoad.html (edit that file instead) */; ?>