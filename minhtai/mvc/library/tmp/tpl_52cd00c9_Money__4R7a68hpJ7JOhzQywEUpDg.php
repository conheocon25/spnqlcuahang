<?php 
function tpl_52cd00c9_Money__4R7a68hpJ7JOhzQywEUpDg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
					<?php /* tag "div" from line 17 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 18 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 19 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 20 */; ?>
<thead>
									<?php /* tag "tr" from line 21 */; ?>
<tr>
										<?php /* tag "th" from line 22 */; ?>
<th width="40"><?php /* tag "i" from line 22 */; ?>
<i class="glyphicons-usd"></i></th>
										<?php /* tag "th" from line 23 */; ?>
<th class="left">CÁC KHOẢN</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 26 */; ?>
<tbody>
									<?php /* tag "tr" from line 27 */; ?>
<tr>
										<?php /* tag "td" from line 28 */; ?>
<td class="center">1</td>
										<?php /* tag "td" from line 29 */; ?>
<td><?php 
/* tag "a" from line 29 */ ;
if (null !== ($_tmp_1 = ('/money/collect/general'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHOẢN THU / CHUNG</a></td>
									</tr>
									<?php /* tag "tr" from line 31 */; ?>
<tr>
										<?php /* tag "td" from line 32 */; ?>
<td class="center">2</td>
										<?php /* tag "td" from line 33 */; ?>
<td><?php 
/* tag "a" from line 33 */ ;
if (null !== ($_tmp_1 = ('/money/collect/customer'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHOẢN THU / KHÁCH HÀNG</a></td>
									</tr>
									<?php /* tag "tr" from line 35 */; ?>
<tr>
										<?php /* tag "td" from line 36 */; ?>
<td class="center">3</td>
										<?php /* tag "td" from line 37 */; ?>
<td><?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_1 = ('/money/paid/general'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHOẢN CHI / CHUNG</a></td>
									</tr>
									<?php /* tag "tr" from line 39 */; ?>
<tr>
										<?php /* tag "td" from line 40 */; ?>
<td class="center">4</td>
										<?php /* tag "td" from line 41 */; ?>
<td><?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_1 = ('/money/paid/customer'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHOẢN CHI / KHÁCH HÀNG</a></td>
									</tr>
									<?php /* tag "tr" from line 43 */; ?>
<tr>
										<?php /* tag "td" from line 44 */; ?>
<td class="center">5</td>
										<?php /* tag "td" from line 45 */; ?>
<td><?php 
/* tag "a" from line 45 */ ;
if (null !== ($_tmp_1 = ('/money/paid/supplier'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHOẢN CHI / NHÀ CUNG CẤP</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 54 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 55 */ ;
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\Money.html (edit that file instead) */; ?>