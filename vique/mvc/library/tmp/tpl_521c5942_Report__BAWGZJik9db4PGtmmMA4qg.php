<?php 
function tpl_521c5942_Report__BAWGZJik9db4PGtmmMA4qg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

	</head>
	<?php /* tag "body" from line 8 */; ?>
<body>
		<?php /* tag "div" from line 9 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 11 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 12 */; ?>
<div class="row-fluid">
					<?php /* tag "div" from line 13 */; ?>
<div class="span3">
						<?php /* tag "div" from line 14 */; ?>
<div class="menu">
							<?php /* tag "ul" from line 15 */; ?>
<ul class="nav nav-list">
								<?php /* tag "li" from line 16 */; ?>
<li class="nav-header">BÁO CÁO NHANH</li>
								<?php /* tag "li" from line 17 */; ?>
<li><?php 
/* tag "a" from line 17 */ ;
if (null !== ($_tmp_1 = ('/report/selling/today/detail'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>DOANH SỐ HÔM NAY</a></li>
								<?php /* tag "li" from line 18 */; ?>
<li><?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_1 = ('/report/selling/yesterday/detail'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>DOANH SỐ HÔM QUA</a></li>
								<?php /* tag "li" from line 19 */; ?>
<li><?php 
/* tag "a" from line 19 */ ;
if (null !== ($_tmp_1 = ('/report/selling/thisweek/detail'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>DOANH SỐ TUẦN NÀY</a></li>
								<?php /* tag "li" from line 20 */; ?>
<li><?php 
/* tag "a" from line 20 */ ;
if (null !== ($_tmp_1 = ('/report/selling/lastweek/detail'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>DOANH SỐ TUẦN TRƯỚC</a></li>								
							</ul>
						</div>
					</div>
					<?php /* tag "div" from line 24 */; ?>
<div class="span9">
						<?php /* tag "div" from line 25 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 26 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 27 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 28 */; ?>
<thead>
									<?php /* tag "tr" from line 29 */; ?>
<tr>
										<?php /* tag "th" from line 30 */; ?>
<th width="32px">STT</th>
										<?php /* tag "th" from line 31 */; ?>
<th>THÁNG </th>										
										<?php /* tag "th" from line 32 */; ?>
<th width="120">
											DOANH SỐ
										</th>
										<?php /* tag "th" from line 35 */; ?>
<th width="32">XÓA</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 38 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 39 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->Tracks)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
										<?php /* tag "td" from line 40 */; ?>
<td><?php /* tag "div" from line 40 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</div></td>
										<?php /* tag "td" from line 41 */; ?>
<td>
											<?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Track, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 42 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getName')); ?>
</span></a>
										</td>
										<?php /* tag "td" from line 44 */; ?>
<td>Xem</td>
										<?php /* tag "td" from line 45 */; ?>
<td>
											<?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Track, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
>
												<?php /* tag "span" from line 47 */; ?>
<span class="icon-remove"></span>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
							</table>
							<?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_2 = ('/report/ins/load'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
>
								<?php /* tag "span" from line 54 */; ?>
<span class="icon-plus"></span>Thêm mới
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 60 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\Report.html (edit that file instead) */; ?>