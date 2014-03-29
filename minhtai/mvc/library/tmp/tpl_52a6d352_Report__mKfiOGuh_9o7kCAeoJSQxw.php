<?php 
function tpl_52a6d352_Report__mKfiOGuh_9o7kCAeoJSQxw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<h1>THỐNG KÊ BÁO CÁO</h1>
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG THUỐC</a></li>
						<?php /* tag "li" from line 22 */; ?>
<li><?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. BÁN HÀNG THỨC ĂN</a></li>
						<?php /* tag "li" from line 23 */; ?>
<li><?php 
/* tag "a" from line 23 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>3. NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 24 */; ?>
<li><?php 
/* tag "a" from line 24 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>4. TỔN KHO</a></li>
					</ul>
				</div>				
			</div>
			<?php /* tag "div" from line 28 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 29 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 30 */; ?>
<h3>MODULE</h3>
					<?php /* tag "ul" from line 31 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 32 */; ?>
<li><?php 
/* tag "a" from line 32 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSelling1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁN HÀNG THUỐC</a></li>
						<?php /* tag "li" from line 33 */; ?>
<li><?php 
/* tag "a" from line 33 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSelling2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁN HÀNG THỨC ĂN</a></li>
						<?php /* tag "li" from line 34 */; ?>
<li><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLImport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 35 */; ?>
<li><?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>CHI TRẢ</a></li>
						<?php /* tag "li" from line 36 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁO CÁO ĐƠN HÀNG THUỐC</a></li>
						<?php /* tag "li" from line 37 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁO CÁO ĐƠN HÀNG THỨC ĂN</a></li>
						<?php /* tag "li" from line 38 */; ?>
<li><?php 
/* tag "a" from line 38 */ ;
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
		<?php /* tag "div" from line 43 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 43 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
		
	<!-- SELLING -->
	<?php /* tag "div" from line 47 */; ?>
<div id="selling" data-role="page" class="type-interior">
		<?php /* tag "div" from line 48 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 49 */; ?>
<h1>BÁO CÁO BÁN HÀNG</h1>
			<?php 
/* tag "a" from line 50 */ ;
if ($ctx->IdFillter==1?true:false):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a><?php endif; ?>

			<?php 
/* tag "a" from line 51 */ ;
if ($ctx->IdFillter==2?true:false):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a><?php endif; ?>

			<?php /* tag "a" from line 52 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 54 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 55 */; ?>
<div class="content-primary">
				<?php /* tag "div" from line 56 */; ?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="b" data-content-theme="d">					
					<?php /* tag "h3" from line 57 */; ?>
<h3>CHỌN SẴN</h3>
					<?php 
/* tag "ul" from line 58 */ ;
if ($ctx->IdFillter==1?true:false):  ;
?>
<ul data-inset="true" data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 59 */; ?>
<li><?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingToday1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>HÔM NAY</a></li>
						<?php /* tag "li" from line 60 */; ?>
<li><?php 
/* tag "a" from line 60 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingYesterday1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>HÔM QUA</a></li>
						<?php /* tag "li" from line 61 */; ?>
<li><?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingThisWeek1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>TUẦN NÀY</a></li>
						<?php /* tag "li" from line 62 */; ?>
<li><?php 
/* tag "a" from line 62 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingThisMonth1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>THÁNG NÀY</a></li>
					</ul><?php endif; ?>

					
					<?php 
/* tag "ul" from line 65 */ ;
if ($ctx->IdFillter==2?true:false):  ;
?>
<ul data-inset="true" data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 66 */; ?>
<li><?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingToday2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>HÔM NAY</a></li>
						<?php /* tag "li" from line 67 */; ?>
<li><?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingYesterday2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>HÔM QUA</a></li>
						<?php /* tag "li" from line 68 */; ?>
<li><?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingThisWeek2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>TUẦN NÀY</a></li>
						<?php /* tag "li" from line 69 */; ?>
<li><?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingThisMonth2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>THÁNG NÀY</a></li>
					</ul><?php endif; ?>
					
				</div>
				<?php /* tag "div" from line 72 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 73 */; ?>
<h3>TÙY CHỈNH</h3>
					<?php 
/* tag "form" from line 74 */ ;
if ($ctx->IdFillter==1?true:false):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingCustom1')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form data-ajax="false" method="post"<?php echo $_tmp_1 ?>
>
						<?php /* tag "ul" from line 75 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
							<?php /* tag "li" from line 76 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 77 */; ?>
<label for="DateStart_Selling">Bắt đầu:</label>
								<?php /* tag "input" from line 78 */; ?>
<input type="text" name="DateStart_Selling" id="DateStart_Selling" value=""/>
							</li>
							<?php /* tag "li" from line 80 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 81 */; ?>
<label for="DateEnd_Selling">Kết thúc:</label>
								<?php /* tag "input" from line 82 */; ?>
<input type="text" name="DateEnd_Selling" id="DateEnd_Selling" value=""/>
							</li>
							<?php /* tag "button" from line 84 */; ?>
<button type="submit" data-theme="c">XEM</button>
						</ul>
					</form><?php endif; ?>

					
					<?php 
/* tag "form" from line 88 */ ;
if ($ctx->IdFillter==2?true:false):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSellingCustom2')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form data-ajax="false" method="post"<?php echo $_tmp_1 ?>
>
						<?php /* tag "ul" from line 89 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
							<?php /* tag "li" from line 90 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 91 */; ?>
<label for="DateStart_Selling">Bắt đầu:</label>
								<?php /* tag "input" from line 92 */; ?>
<input type="text" name="DateStart_Selling" id="DateStart_Selling" value=""/>
							</li>
							<?php /* tag "li" from line 94 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 95 */; ?>
<label for="DateEnd_Selling">Kết thúc:</label>
								<?php /* tag "input" from line 96 */; ?>
<input type="text" name="DateEnd_Selling" id="DateEnd_Selling" value=""/>
							</li>
							<?php /* tag "button" from line 98 */; ?>
<button type="submit" data-theme="c">XEM</button>
						</ul>
					</form><?php endif; ?>

				</div>				
			</div>
			<?php /* tag "div" from line 103 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 104 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
				<?php /* tag "h3" from line 105 */; ?>
<h3>BÁO CÁO</h3>
				<?php /* tag "ul" from line 106 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
					<?php 
/* tag "li" from line 107 */ ;
if ($ctx->IdFillter==1?true:false):  ;
?>
<li data-theme="a"><?php 
/* tag "a" from line 107 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG - THUỐC</a></li><?php endif; ?>

					<?php 
/* tag "li" from line 108 */ ;
if ($ctx->IdFillter==2?true:false):  ;
?>
<li data-theme="a"><?php 
/* tag "a" from line 108 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG - THỨC ĂN</a></li><?php endif; ?>

					<?php /* tag "li" from line 109 */; ?>
<li><?php 
/* tag "a" from line 109 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. NHẬP HÀNG</a></li>
					<?php /* tag "li" from line 110 */; ?>
<li><?php 
/* tag "a" from line 110 */ ;
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
		<?php /* tag "div" from line 115 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 115 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- SUPPLIER -->
	<?php /* tag "div" from line 119 */; ?>
<div id="supplier" data-role="page" class="type-interior">
		<?php /* tag "div" from line 120 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 121 */; ?>
<h1>BÁO CÁO NHẬP HÀNG</h1>
			<?php 
/* tag "a" from line 122 */ ;
if ($ctx->IdFillter==1?true:false):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a><?php endif; ?>

			<?php 
/* tag "a" from line 123 */ ;
if ($ctx->IdFillter==2?true:false):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a><?php endif; ?>

			<?php /* tag "a" from line 124 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 126 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 127 */; ?>
<div class="content-primary">				
				<?php /* tag "div" from line 128 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 129 */; ?>
<h3>CHỌN SẴN</h3>
					<?php /* tag "ul" from line 130 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">						
						<?php /* tag "li" from line 131 */; ?>
<li><?php 
/* tag "a" from line 131 */ ;
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
				<?php /* tag "div" from line 134 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 135 */; ?>
<h3>TÙY CHỈNH</h3>
					<?php 
/* tag "form" from line 136 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplierCustom')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form data-ajax="false" method="post"<?php echo $_tmp_1 ?>
>
						<?php /* tag "ul" from line 137 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
							<?php /* tag "li" from line 138 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 139 */; ?>
<label for="DateStart_Supplier">Bắt đầu:</label>
								<?php /* tag "input" from line 140 */; ?>
<input type="text" name="DateStart_Supplier" id="DateStart_Supplier" value=""/>
							</li>
							<?php /* tag "li" from line 142 */; ?>
<li data-role="fieldcontain">
								<?php /* tag "label" from line 143 */; ?>
<label for="DateEnd_Supplier">Kết thúc:</label>
								<?php /* tag "input" from line 144 */; ?>
<input type="text" name="DateEnd_Supplier" id="DateEnd_Supplier" value=""/>
							</li>
							<?php /* tag "button" from line 146 */; ?>
<button type="submit" data-theme="c">XEM</button>
						</ul>
					</form>
				</div>				
			</div>
			<?php /* tag "div" from line 151 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 152 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
				<?php /* tag "h3" from line 153 */; ?>
<h3>BÁO CÁO</h3>
				<?php /* tag "ul" from line 154 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
					<?php 
/* tag "li" from line 155 */ ;
if ($ctx->IdFillter==1?true:false):  ;
?>
<li><?php 
/* tag "a" from line 155 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG - THUỐC</a></li><?php endif; ?>

					<?php 
/* tag "li" from line 156 */ ;
if ($ctx->IdFillter==2?true:false):  ;
?>
<li><?php 
/* tag "a" from line 156 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG - THỨC ĂN</a></li><?php endif; ?>

					<?php /* tag "li" from line 157 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 157 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. NHẬP HÀNG</a></li>
					<?php /* tag "li" from line 158 */; ?>
<li><?php 
/* tag "a" from line 158 */ ;
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
		<?php /* tag "div" from line 163 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 163 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- STORE -->
	<?php /* tag "div" from line 167 */; ?>
<div id="store" data-role="page" class="type-interior">
		<?php /* tag "div" from line 168 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 169 */; ?>
<h1>BÁO CÁO TỒN KHO</h1>
			<?php 
/* tag "a" from line 170 */ ;
if ($ctx->IdFillter==1?true:false):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a><?php endif; ?>

			<?php 
/* tag "a" from line 171 */ ;
if ($ctx->IdFillter==2?true:false):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a><?php endif; ?>

			<?php /* tag "a" from line 172 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 174 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 175 */; ?>
<div class="content-primary">				
				<?php 
/* tag "a" from line 176 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportStoreDetail')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button"<?php echo $_tmp_1 ?>
>XEM CHI TIẾT</a>
			</div>
			<?php /* tag "div" from line 178 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 179 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
				<?php /* tag "h3" from line 180 */; ?>
<h3>BÁO CÁO</h3>
				<?php /* tag "ul" from line 181 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
					<?php 
/* tag "li" from line 182 */ ;
if ($ctx->IdFillter==1?true:false):  ;
?>
<li><?php 
/* tag "a" from line 182 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG - THUỐC</a></li><?php endif; ?>

					<?php 
/* tag "li" from line 183 */ ;
if ($ctx->IdFillter==2?true:false):  ;
?>
<li><?php 
/* tag "a" from line 183 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. BÁN HÀNG - THỨC ĂN</a></li><?php endif; ?>

					<?php /* tag "li" from line 184 */; ?>
<li><?php 
/* tag "a" from line 184 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. NHẬP HÀNG</a></li>
					<?php /* tag "li" from line 185 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 185 */ ;
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
		<?php /* tag "div" from line 190 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 190 */; ?>
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