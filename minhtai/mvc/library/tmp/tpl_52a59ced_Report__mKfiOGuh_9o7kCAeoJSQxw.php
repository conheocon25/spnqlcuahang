<?php 
function tpl_52a59ced_Report__mKfiOGuh_9o7kCAeoJSQxw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Report.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<!-- REPORT -->
	<?php /* tag "div" from line 10 */; ?>
<div id="report" data-role="page" class="type-interior">
		<?php /* tag "div" from line 11 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 12 */; ?>
<h1>MODULE BÁO CÁO</h1>
			<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="home" data-ajax="false"<?php echo $_tmp_1 ?>
>TRANG CHỦ</a>
			<?php /* tag "a" from line 14 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 16 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 17 */; ?>
<div class="content-primary">
				<?php /* tag "div" from line 18 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 19 */; ?>
<h3>LOẠI BÁO CÁO</h3>
					<?php /* tag "ul" from line 20 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 21 */; ?>
<li><?php 
/* tag "a" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG</a></li>
						<?php /* tag "li" from line 22 */; ?>
<li><?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 23 */; ?>
<li><?php 
/* tag "a" from line 23 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>3. TỔN KHO</a></li>
					</ul>
				</div>				
			</div>
			<?php /* tag "div" from line 27 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 28 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 29 */; ?>
<h3>MODULE</h3>
					<?php /* tag "ul" from line 30 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 31 */; ?>
<li><?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSelling1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁN HÀNG THUỐC</a></li>
						<?php /* tag "li" from line 32 */; ?>
<li><?php 
/* tag "a" from line 32 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSelling2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁN HÀNG  THỨC ĂN</a></li>
						<?php /* tag "li" from line 33 */; ?>
<li><?php 
/* tag "a" from line 33 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLImport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 34 */; ?>
<li><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>CHI TRẢ</a></li>
						<?php /* tag "li" from line 35 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁO CÁO</a></li>
						<?php /* tag "li" from line 36 */; ?>
<li><?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 41 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 41 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
		
	<!-- SELLING -->
	<?php /* tag "div" from line 45 */; ?>
<div id="selling" data-role="page" class="type-interior">
		<?php /* tag "div" from line 46 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 47 */; ?>
<h1>BÁO CÁO BÁN HÀNG</h1>
			<?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php /* tag "a" from line 49 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 51 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 52 */; ?>
<div class="content-primary">
				<?php /* tag "div" from line 53 */; ?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="b" data-content-theme="d">					
					<?php /* tag "h3" from line 54 */; ?>
<h3>CHỌN SẴN</h3>
					<?php /* tag "ul" from line 55 */; ?>
<ul data-inset="true" data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 56 */; ?>
<li><?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingToday')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>HÔM NAY</a></li>
						<?php /* tag "li" from line 57 */; ?>
<li><?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingYesterday')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>HÔM QUA</a></li>
						<?php /* tag "li" from line 58 */; ?>
<li><?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingThisWeek')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>TUẦN NÀY</a></li>
						<?php /* tag "li" from line 59 */; ?>
<li><?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingThisMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>THÁNG NÀY</a></li>
					</ul>					
				</div>
				<?php /* tag "div" from line 62 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 63 */; ?>
<h3>TÙY CHỈNH</h3>
					<?php 
/* tag "form" from line 64 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingCustom')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form data-ajax="false" method="post"<?php echo $_tmp_1 ?>
>
					<?php /* tag "ul" from line 65 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 66 */; ?>
<li data-role="fieldcontain">
							<?php /* tag "label" from line 67 */; ?>
<label for="DateStart_Selling">Bắt đầu:</label>
							<?php /* tag "input" from line 68 */; ?>
<input type="text" name="DateStart_Selling" id="DateStart_Selling" value=""/>
						</li>
						<?php /* tag "li" from line 70 */; ?>
<li data-role="fieldcontain">
							<?php /* tag "label" from line 71 */; ?>
<label for="DateEnd_Selling">Kết thúc:</label>
							<?php /* tag "input" from line 72 */; ?>
<input type="text" name="DateEnd_Selling" id="DateEnd_Selling" value=""/>
						</li>
						<?php /* tag "button" from line 74 */; ?>
<button type="submit" data-theme="c">XEM</button>
					</ul>
					</form>
				</div>				
			</div>
			<?php /* tag "div" from line 79 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 80 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
				<?php /* tag "h3" from line 81 */; ?>
<h3>BÁO CÁO</h3>
				<?php /* tag "ul" from line 82 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
					<?php /* tag "li" from line 83 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 83 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG</a></li>
					<?php /* tag "li" from line 84 */; ?>
<li><?php 
/* tag "a" from line 84 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. NHẬP HÀNG</a></li>
					<?php /* tag "li" from line 85 */; ?>
<li><?php 
/* tag "a" from line 85 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>3. TỒN KHO</a></li>
				</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 90 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 90 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- SUPPLIER -->
	<?php /* tag "div" from line 94 */; ?>
<div id="supplier" data-role="page" class="type-interior">
		<?php /* tag "div" from line 95 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 96 */; ?>
<h1>BÁO CÁO NHẬP HÀNG</h1>
			<?php 
/* tag "a" from line 97 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php /* tag "a" from line 98 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 100 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 101 */; ?>
<div class="content-primary">				
				<?php /* tag "div" from line 102 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 103 */; ?>
<h3>CHỌN SẴN</h3>
					<?php /* tag "ul" from line 104 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">						
						<?php /* tag "li" from line 105 */; ?>
<li><?php 
/* tag "a" from line 105 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplierThisMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>THÁNG NÀY</a></li>
					</ul>
				</div>
				<?php /* tag "div" from line 108 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 109 */; ?>
<h3>TÙY CHỈNH</h3>
					<?php 
/* tag "form" from line 110 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplierCustom')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form data-ajax="false" method="post"<?php echo $_tmp_1 ?>
>
						<?php /* tag "ul" from line 111 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
							<?php /* tag "li" from line 112 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 113 */; ?>
<label for="DateStart_Supplier">Bắt đầu:</label>
								<?php /* tag "input" from line 114 */; ?>
<input type="text" name="DateStart_Supplier" id="DateStart_Supplier" value=""/>
							</li>
							<?php /* tag "li" from line 116 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 117 */; ?>
<label for="DateEnd_Supplier">Kết thúc:</label>
								<?php /* tag "input" from line 118 */; ?>
<input type="text" name="DateEnd_Supplier" id="DateEnd_Supplier" value=""/>
							</li>
							<?php /* tag "button" from line 120 */; ?>
<button type="submit" data-theme="c">XEM</button>
						</ul>
					</form>
				</div>				
			</div>
			<?php /* tag "div" from line 125 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 126 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
				<?php /* tag "h3" from line 127 */; ?>
<h3>BÁO CÁO</h3>
				<?php /* tag "ul" from line 128 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
					<?php /* tag "li" from line 129 */; ?>
<li><?php 
/* tag "a" from line 129 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG</a></li>
					<?php /* tag "li" from line 130 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 130 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. NHẬP HÀNG</a></li>
					<?php /* tag "li" from line 131 */; ?>
<li><?php 
/* tag "a" from line 131 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>3. TỒN KHO</a></li>
				</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 136 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 136 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- STORE -->
	<?php /* tag "div" from line 140 */; ?>
<div id="store" data-role="page" class="type-interior">
		<?php /* tag "div" from line 141 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 142 */; ?>
<h1>BÁO CÁO TỒN KHO</h1>
			<?php 
/* tag "a" from line 143 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php /* tag "a" from line 144 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 146 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 147 */; ?>
<div class="content-primary">				
				<?php 
/* tag "a" from line 148 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportStoreDetail')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button"<?php echo $_tmp_1 ?>
>XEM CHI TIẾT</a>
			</div>
			<?php /* tag "div" from line 150 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 151 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
				<?php /* tag "h3" from line 152 */; ?>
<h3>BÁO CÁO</h3>
				<?php /* tag "ul" from line 153 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
					<?php /* tag "li" from line 154 */; ?>
<li><?php 
/* tag "a" from line 154 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG</a></li>
					<?php /* tag "li" from line 155 */; ?>
<li><?php 
/* tag "a" from line 155 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. NHẬP HÀNG</a></li>
					<?php /* tag "li" from line 156 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 156 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>3. TỒN KHO</a></li>
				</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 161 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 161 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\SPN_MinhTai\mvc\templates\Report.html (edit that file instead) */; ?>