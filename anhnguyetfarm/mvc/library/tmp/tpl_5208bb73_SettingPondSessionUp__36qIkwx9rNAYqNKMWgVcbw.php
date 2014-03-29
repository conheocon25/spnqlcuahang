<?php 
function tpl_5208bb73_SettingPondSessionUp__36qIkwx9rNAYqNKMWgVcbw(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>
 
<?php /* tag "html" from line 2 */; ?>
<html>
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingPondSessionUpdLoad.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>						
	<?php /* tag "div" from line 9 */; ?>
<div id="info" data-role="page" class="type-interior">
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 11 */; ?>
<div align="center">
				<?php /* tag "a" from line 12 */; ?>
<a href="#" data-icon="back" data-rel="back">
					<?php /* tag "img" from line 13 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 17 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 18 */; ?>
<div class="content-primary">
				<?php 
/* tag "form" from line 19 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PondSession, 'getURLUpdExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSettingPondSessionUpdLoad" method="post" data-ajax="false" class="ui-body ui-body-b ui-corner-all"<?php echo $_tmp_1 ?>
>
					<?php /* tag "fieldset" from line 20 */; ?>
<fieldset>
						<?php /* tag "div" from line 21 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 22 */; ?>
<label for="Name" class="text">Chủ đầu tư:</label>
							<?php 
/* tag "input" from line 23 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getName')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Name" name="Name" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 25 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 26 */; ?>
<label for="Type" class="text">Loại hình:</label>
							<?php /* tag "select" from line 27 */; ?>
<select name="Type" id="Type" data-native-menu="false">
								<?php 
/* tag "option" from line 28 */ ;
if ($ctx->PondSession->getType()==1):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option value="1"<?php echo $_tmp_2 ?>
>
									THƯƠNG MẠI
								</option>
								<?php 
/* tag "option" from line 31 */ ;
if ($ctx->PondSession->getType()==2):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option value="2"<?php echo $_tmp_2 ?>
>
									GIA CÔNG
								</option>
							</select>
						</div>
						<?php /* tag "div" from line 36 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 37 */; ?>
<label for="EmployeeName" class="text">Quản lý:</label>
							<?php 
/* tag "input" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getEmployeeName')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="EmployeeName" name="EmployeeName" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 40 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 41 */; ?>
<label for="EmployeePhone" class="text">Điện thoại:</label>
							<?php 
/* tag "input" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getEmployeePhone')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="EmployeePhone" name="EmployeePhone" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 44 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 45 */; ?>
<label for="DateStart" class="text">Bắt đầu:</label>
							<?php 
/* tag "input" from line 46 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getDateStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="DateStart" name="DateStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 48 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 49 */; ?>
<label for="DateEnd" class="text">Kết thúc:</label>
							<?php 
/* tag "input" from line 50 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getDateEnd')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="DateEnd" name="DateEnd" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 52 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 53 */; ?>
<label for="CountStart" class="text">Số lượng con giống:</label>
							<?php 
/* tag "input" from line 54 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getCountStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="CountStart" name="CountStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 56 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 57 */; ?>
<label for="ValueStart" class="text">Tiền con giống:</label>
							<?php 
/* tag "input" from line 58 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getValueStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="ValueStart" name="ValueStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 60 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 61 */; ?>
<label for="SampleStart" class="text">Mẫu ban đầu:</label>
							<?php 
/* tag "input" from line 62 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getSampleStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="SampleStart" name="SampleStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 64 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 65 */; ?>
<label for="ShipStart" class="text">Vận chuyển giống:</label>
							<?php 
/* tag "input" from line 66 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getShipStart')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="ShipStart" name="ShipStart" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 68 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 69 */; ?>
<label for="CountExport" class="text">Số lượng xuất:</label>
							<?php 
/* tag "input" from line 70 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getCountExport')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="CountExport" name="CountExport" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 72 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 73 */; ?>
<label for="PriceExport" class="text">Giá xuất:</label>
							<?php 
/* tag "input" from line 74 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getPriceExport')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="PriceExport" name="PriceExport" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 76 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 77 */; ?>
<label for="BankRate" class="text">Lãi suất ngân hàng:</label>
							<?php 
/* tag "input" from line 78 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getBankRate')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="BankRate" name="BankRate" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 80 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 81 */; ?>
<label for="CountWaste" class="text">Số lượng cá ngộp:</label>
							<?php 
/* tag "input" from line 82 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getCountWaste')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="CountWaste" name="CountWaste" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 84 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 85 */; ?>
<label for="PriceWaste" class="text">Giá cá ngộp:</label>
							<?php 
/* tag "input" from line 86 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getPriceWaste')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="PriceWaste" name="PriceWaste" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 88 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 89 */; ?>
<label for="CountRemain" class="text">Số lượng cá vét:</label>
							<?php 
/* tag "input" from line 90 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getCountRemain')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="CountRemain" name="CountRemain" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 92 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 93 */; ?>
<label for="PriceRemain" class="text">Giá cá vét:</label>
							<?php 
/* tag "input" from line 94 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getPriceRemain')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="PriceRemain" name="PriceRemain" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 96 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 97 */; ?>
<label for="Net" class="text">Công Đoàn + Lưới:</label>
							<?php 
/* tag "input" from line 98 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getNet')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Net" name="Net" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
						<?php /* tag "div" from line 100 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 101 */; ?>
<label for="Tip" class="text">Tiền thưởng:</label>
							<?php 
/* tag "input" from line 102 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PondSession, 'getTip')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input id="Tip" name="Tip" type="text" class="required"<?php echo $_tmp_2 ?>
/>
						</div>
					</fieldset>
					<?php /* tag "button" from line 105 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Lưu</button>
				</form>
			</div>
			<?php /* tag "div" from line 108 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 109 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 110 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 111 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 112 */; ?>
<li><?php 
/* tag "a" from line 112 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 113 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 113 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 114 */; ?>
<li><?php 
/* tag "a" from line 114 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 115 */; ?>
<li><?php 
/* tag "a" from line 115 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 116 */; ?>
<li><?php 
/* tag "a" from line 116 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 117 */; ?>
<li><?php 
/* tag "a" from line 117 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 122 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 122 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/anhnguyetfarm/mvc/templates/SettingPondSessionUpdLoad.html (edit that file instead) */; ?>