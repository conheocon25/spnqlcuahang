<?php 
function tpl_5208bb73_SettingPondSessionIn__X8qIpVEklynmbVLyLbFf8A(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingPondSessionInsLoad.js"></script>
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->Pond, 'getURLSessionInsExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form data-ajax="false" id="FormSettingPondSessionInsLoad" method="post" class="ui-body ui-body-b ui-corner-all"<?php echo $_tmp_1 ?>
>
					<?php /* tag "fieldset" from line 20 */; ?>
<fieldset>
						<?php /* tag "div" from line 21 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 22 */; ?>
<label for="Name" class="text">Chủ đầu tư:</label>
							<?php /* tag "input" from line 23 */; ?>
<input id="Name" name="Name" type="text" class="required"/>
						</div>
						<?php /* tag "div" from line 25 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 26 */; ?>
<label for="Type" class="text">Loại hình:</label>
							<?php /* tag "select" from line 27 */; ?>
<select name="Type" id="Type" data-native-menu="false">
								<?php /* tag "option" from line 28 */; ?>
<option value="1">THƯƠNG MẠI</option>
								<?php /* tag "option" from line 29 */; ?>
<option value="2">GIA CÔNG</option>
							</select>
						</div>
						<?php /* tag "div" from line 32 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 33 */; ?>
<label for="EmployeeName" class="text">Quản lý:</label>
							<?php /* tag "input" from line 34 */; ?>
<input id="EmployeeName" name="EmployeeName" type="text" class="required"/>
						</div>
						<?php /* tag "div" from line 36 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 37 */; ?>
<label for="EmployeePhone" class="text">Điện thoại:</label>
							<?php /* tag "input" from line 38 */; ?>
<input id="EmployeePhone" name="EmployeePhone" type="text" class="required"/>
						</div>
						<?php /* tag "div" from line 40 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 41 */; ?>
<label for="DateStart" class="text">Bắt đầu:</label>
							<?php /* tag "input" from line 42 */; ?>
<input id="DateStart" name="DateStart" type="text" class="required minlength:5"/>
						</div>
						<?php /* tag "div" from line 44 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 45 */; ?>
<label for="DateEnd" class="text">Kết thúc:</label>
							<?php /* tag "input" from line 46 */; ?>
<input id="DateEnd" name="DateEnd" type="text" class="required minlength:5"/>
						</div>
						<?php /* tag "div" from line 48 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 49 */; ?>
<label for="CountStart" class="text">Số lượng con giống:</label>
							<?php /* tag "input" from line 50 */; ?>
<input id="CountStart" name="CountStart" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 52 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 53 */; ?>
<label for="ValueStart" class="text">Tiền con giống:</label>
							<?php /* tag "input" from line 54 */; ?>
<input id="ValueStart" name="ValueStart" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 56 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 57 */; ?>
<label for="SampleStart" class="text">Mẫu ban đầu:</label>
							<?php /* tag "input" from line 58 */; ?>
<input id="SampleStart" name="SampleStart" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 60 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 61 */; ?>
<label for="ShipStart" class="text">Vận chuyển giống:</label>
							<?php /* tag "input" from line 62 */; ?>
<input id="ShipStart" name="ShipStart" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 64 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 65 */; ?>
<label for="CountExport" class="text">Số lượng xuất:</label>
							<?php /* tag "input" from line 66 */; ?>
<input id="CountExport" name="CountExport" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 68 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 69 */; ?>
<label for="PriceExport" class="text">Giá xuất:</label>
							<?php /* tag "input" from line 70 */; ?>
<input id="PriceExport" name="PriceExport" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 72 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 73 */; ?>
<label for="BankRate" class="text">Lãi suất ngân hàng:</label>
							<?php /* tag "input" from line 74 */; ?>
<input id="BankRate" name="BankRate" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 76 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 77 */; ?>
<label for="CountWaste" class="text">Số lượng cá ngộp:</label>
							<?php /* tag "input" from line 78 */; ?>
<input id="CountWaste" name="CountWaste" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 80 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 81 */; ?>
<label for="PriceWaste" class="text">Giá cá ngộp:</label>
							<?php /* tag "input" from line 82 */; ?>
<input id="PriceWaste" name="PriceWaste" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 84 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 85 */; ?>
<label for="CountRemain" class="text">Số lượng cá vét:</label>
							<?php /* tag "input" from line 86 */; ?>
<input id="CountRemain" name="CountRemain" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 88 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 89 */; ?>
<label for="PriceRemain" class="text">Giá cá vét:</label>
							<?php /* tag "input" from line 90 */; ?>
<input id="PriceRemain" name="PriceRemain" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 92 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 93 */; ?>
<label for="Net" class="text">Công Đoàn + Lưới:</label>
							<?php /* tag "input" from line 94 */; ?>
<input id="Net" name="Net" type="text" class="required" value="0"/>
						</div>
						<?php /* tag "div" from line 96 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 97 */; ?>
<label for="Tip" class="text">Tiền thưởng:</label>
							<?php /* tag "input" from line 98 */; ?>
<input id="Tip" name="Tip" type="text" class="required" value="0"/>
						</div>
					</fieldset>
					<?php /* tag "button" from line 101 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Lưu</button>
				</form>
			</div>
			<?php /* tag "div" from line 104 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 105 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 106 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 107 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 108 */; ?>
<li><?php 
/* tag "a" from line 108 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 109 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 109 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 110 */; ?>
<li><?php 
/* tag "a" from line 110 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 111 */; ?>
<li><?php 
/* tag "a" from line 111 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 112 */; ?>
<li><?php 
/* tag "a" from line 112 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 113 */; ?>
<li><?php 
/* tag "a" from line 113 */ ;
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
		<?php /* tag "div" from line 118 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 118 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/anhnguyetfarm/mvc/templates/SettingPondSessionInsLoad.html (edit that file instead) */; ?>