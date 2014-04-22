<?php 
function tpl_52cd00c9_Setting__pjlbTq4HEYpCeZwSGKXDiw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/MenuApp', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 10 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 13 */; ?>
<div class="row">
				<?php /* tag "div" from line 14 */; ?>
<div class="col-12">
					<?php /* tag "div" from line 15 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 16 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 17 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 18 */; ?>
<thead>
									<?php /* tag "tr" from line 19 */; ?>
<tr>
										<?php /* tag "th" from line 20 */; ?>
<th width="40"><?php /* tag "i" from line 20 */; ?>
<i class="glyphicons-cogwheels"></i></th>
										<?php /* tag "th" from line 21 */; ?>
<th><?php /* tag "div" from line 21 */; ?>
<div class="text-left">THIẾT LẬP</div></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 24 */; ?>
<tbody>
									<?php /* tag "tr" from line 25 */; ?>
<tr>
										<?php /* tag "td" from line 26 */; ?>
<td align="center"><?php /* tag "a" from line 26 */; ?>
<a href="/setting/store"><?php /* tag "i" from line 26 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
										<?php /* tag "td" from line 27 */; ?>
<td><?php 
/* tag "a" from line 27 */ ;
if (null !== ($_tmp_1 = ('/setting/store'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHO BÃI</a></td>
									</tr>
									<?php /* tag "tr" from line 29 */; ?>
<tr>
										<?php /* tag "td" from line 30 */; ?>
<td align="center"><?php /* tag "a" from line 30 */; ?>
<a href="/setting/supplier"><?php /* tag "i" from line 30 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
										<?php /* tag "td" from line 31 */; ?>
<td><?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_1 = ('/setting/supplier'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></td>
									</tr>
									<?php /* tag "tr" from line 33 */; ?>
<tr>
										<?php /* tag "td" from line 34 */; ?>
<td align="center"><?php /* tag "a" from line 34 */; ?>
<a href="/setting/customer"><?php /* tag "i" from line 34 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
										<?php /* tag "td" from line 35 */; ?>
<td><?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_1 = ('/setting/customer'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHÁCH HÀNG</a></td>
									</tr>
									<?php /* tag "tr" from line 37 */; ?>
<tr>
										<?php /* tag "td" from line 38 */; ?>
<td align="center"><?php /* tag "a" from line 38 */; ?>
<a href="/setting/user"><?php /* tag "i" from line 38 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
										<?php /* tag "td" from line 39 */; ?>
<td><?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_1 = ('/setting/user'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NGƯỜI DÙNG</a></td>
									</tr>
									<?php /* tag "tr" from line 41 */; ?>
<tr>
										<?php /* tag "td" from line 42 */; ?>
<td align="center"><?php /* tag "a" from line 42 */; ?>
<a href="/setting/unit"><?php /* tag "i" from line 42 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
										<?php /* tag "td" from line 43 */; ?>
<td><?php 
/* tag "a" from line 43 */ ;
if (null !== ($_tmp_1 = ('/setting/unit'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></td>
									</tr>
									<?php /* tag "tr" from line 45 */; ?>
<tr>
										<?php /* tag "td" from line 46 */; ?>
<td align="center"><?php /* tag "a" from line 46 */; ?>
<a href="/setting/employee"><?php /* tag "i" from line 46 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_1 = ('/setting/employee'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÂN VIÊN</a></td>
									</tr>
									<?php /* tag "tr" from line 49 */; ?>
<tr>
										<?php /* tag "td" from line 50 */; ?>
<td align="center"><?php /* tag "a" from line 50 */; ?>
<a href="/setting/termpaid"><?php /* tag "i" from line 50 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
										<?php /* tag "td" from line 51 */; ?>
<td><?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_1 = ('/setting/termpaid'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC THU</a></td>
									</tr>
									<?php /* tag "tr" from line 53 */; ?>
<tr>
										<?php /* tag "td" from line 54 */; ?>
<td align="center"><?php /* tag "a" from line 54 */; ?>
<a href="/setting/termcollect"><?php /* tag "i" from line 54 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
										<?php /* tag "td" from line 55 */; ?>
<td><?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_1 = ('/setting/termcollect'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC CHI</a></td>
									</tr>
									<?php /* tag "tr" from line 57 */; ?>
<tr>
										<?php /* tag "td" from line 58 */; ?>
<td align="center"><?php /* tag "a" from line 58 */; ?>
<a href="/setting/config"><?php /* tag "i" from line 58 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
										<?php /* tag "td" from line 59 */; ?>
<td><?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_1 = ('/setting/config'))):  ;
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
		<?php 
/* tag "div" from line 68 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 69 */ ;
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\Setting.html (edit that file instead) */; ?>