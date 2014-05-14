<?php 
function tpl_535ab245_ASetting__wdqVSx883wXf5Ig6kSz5Zw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<body data-menu-position="closed">
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
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 15 */; ?>
<div class="container-fluid">
				<?php /* tag "div" from line 16 */; ?>
<div class="row">
					<?php /* tag "div" from line 17 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 18 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 19 */; ?>
<div class="widget-content nopadding">
								<?php /* tag "table" from line 20 */; ?>
<table class="table table-bordered table-striped table-hover">
									<?php /* tag "thead" from line 21 */; ?>
<thead>
										<?php /* tag "tr" from line 22 */; ?>
<tr>
											<?php /* tag "th" from line 23 */; ?>
<th width="40"><?php /* tag "i" from line 23 */; ?>
<i class="glyphicons-cogwheels"></i></th>
											<?php /* tag "th" from line 24 */; ?>
<th><?php /* tag "div" from line 24 */; ?>
<div class="text-left">THIẾT LẬP TIN TỨC</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 27 */; ?>
<tbody>
										<?php /* tag "tr" from line 28 */; ?>
<tr>
											<?php /* tag "td" from line 29 */; ?>
<td align="center"><?php /* tag "a" from line 29 */; ?>
<a href="/admin/setting/presentation"><?php /* tag "i" from line 29 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 30 */; ?>
<td><?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/presentation'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>TRÌNH BÀY</a></td>
										</tr>
										<?php /* tag "tr" from line 32 */; ?>
<tr>
											<?php /* tag "td" from line 33 */; ?>
<td align="center"><?php /* tag "a" from line 33 */; ?>
<a href="/admin/setting/tag"><?php /* tag "i" from line 33 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 34 */; ?>
<td><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/tag'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THẺ BÀI</a></td>
										</tr>
										<?php /* tag "tr" from line 36 */; ?>
<tr>
											<?php /* tag "td" from line 37 */; ?>
<td align="center"><?php /* tag "a" from line 37 */; ?>
<a href="/admin/setting/post"><?php /* tag "i" from line 37 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 38 */; ?>
<td><?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/post'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>BÀI VIẾT</a></td>
										</tr>
										<?php /* tag "tr" from line 40 */; ?>
<tr>
											<?php /* tag "td" from line 41 */; ?>
<td align="center"><?php /* tag "a" from line 41 */; ?>
<a href="/admin/setting/storyline"><?php /* tag "i" from line 41 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 42 */; ?>
<td><?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/storyline'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>CÂU CHUYỆN KHÁCH HÀNG</a></td>
										</tr>
									</tbody>
								</table>
								<?php /* tag "table" from line 46 */; ?>
<table class="table table-bordered table-striped table-hover">
									<?php /* tag "thead" from line 47 */; ?>
<thead>
										<?php /* tag "tr" from line 48 */; ?>
<tr>
											<?php /* tag "th" from line 49 */; ?>
<th width="40"><?php /* tag "i" from line 49 */; ?>
<i class="glyphicons-cogwheels"></i></th>
											<?php /* tag "th" from line 50 */; ?>
<th><?php /* tag "div" from line 50 */; ?>
<div class="text-left">THIẾT LẬP SẢN PHẨM</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 53 */; ?>
<tbody>										
										<?php /* tag "tr" from line 54 */; ?>
<tr>
											<?php /* tag "td" from line 55 */; ?>
<td align="center"><?php /* tag "a" from line 55 */; ?>
<a href="/admin/setting/manufacturer"><?php /* tag "i" from line 55 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 56 */; ?>
<td><?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/manufacturer'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ SẢN XUẤT</a></td>
										</tr>
										<?php /* tag "tr" from line 58 */; ?>
<tr>
											<?php /* tag "td" from line 59 */; ?>
<td align="center"><?php /* tag "a" from line 59 */; ?>
<a href="/admin/setting/supplier"><?php /* tag "i" from line 59 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 60 */; ?>
<td><?php 
/* tag "a" from line 60 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/supplier'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></td>
										</tr>
										<?php /* tag "tr" from line 62 */; ?>
<tr>
											<?php /* tag "td" from line 63 */; ?>
<td align="center"><?php /* tag "a" from line 63 */; ?>
<a href="/admin/setting/gattribute"><?php /* tag "i" from line 63 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 64 */; ?>
<td><?php 
/* tag "a" from line 64 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/gattribute'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>MÔ TẢ</a></td>
										</tr>
										<?php /* tag "tr" from line 66 */; ?>
<tr>
											<?php /* tag "td" from line 67 */; ?>
<td align="center"><?php /* tag "a" from line 67 */; ?>
<a href="/admin/setting/category"><?php /* tag "i" from line 67 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 68 */; ?>
<td><?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/category'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC</a></td>
										</tr>
									</tbody>
								</table>
								<?php /* tag "table" from line 72 */; ?>
<table class="table table-bordered table-striped table-hover">
									<?php /* tag "thead" from line 73 */; ?>
<thead>
										<?php /* tag "tr" from line 74 */; ?>
<tr>
											<?php /* tag "th" from line 75 */; ?>
<th width="40"><?php /* tag "i" from line 75 */; ?>
<i class="glyphicons-cogwheels"></i></th>
											<?php /* tag "th" from line 76 */; ?>
<th><?php /* tag "div" from line 76 */; ?>
<div class="text-left">THIẾT LẬP TỔNG QUÁT</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 79 */; ?>
<tbody>
										<?php /* tag "tr" from line 80 */; ?>
<tr>
											<?php /* tag "td" from line 81 */; ?>
<td align="center"><?php /* tag "a" from line 81 */; ?>
<a href="/admin/setting/branch"><?php /* tag "i" from line 81 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 82 */; ?>
<td><?php 
/* tag "a" from line 82 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/branch'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>CHI NHÁNH</a></td>
										</tr>
										<?php /* tag "tr" from line 84 */; ?>
<tr>
											<?php /* tag "td" from line 85 */; ?>
<td align="center"><?php /* tag "a" from line 85 */; ?>
<a href="/admin/setting/user"><?php /* tag "i" from line 85 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 86 */; ?>
<td><?php 
/* tag "a" from line 86 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/user'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NGƯỜI DÙNG</a></td>
										</tr>																			
										<?php /* tag "tr" from line 88 */; ?>
<tr>
											<?php /* tag "td" from line 89 */; ?>
<td align="center"><?php /* tag "a" from line 89 */; ?>
<a href="/admin/setting/employee"><?php /* tag "i" from line 89 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 90 */; ?>
<td><?php 
/* tag "a" from line 90 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/employee'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÂN VIÊN</a></td>
										</tr>										
										<?php /* tag "tr" from line 92 */; ?>
<tr>
											<?php /* tag "td" from line 93 */; ?>
<td align="center"><?php /* tag "a" from line 93 */; ?>
<a href="/admin/setting/config"><?php /* tag "i" from line 93 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 94 */; ?>
<td><?php 
/* tag "a" from line 94 */ ;
if (null !== ($_tmp_1 = ('/admin/setting/config'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>CẤU HÌNH</a></td>
										</tr>
									</tbody>
								</table>																
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 104 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 105 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\ASetting.html (edit that file instead) */; ?>