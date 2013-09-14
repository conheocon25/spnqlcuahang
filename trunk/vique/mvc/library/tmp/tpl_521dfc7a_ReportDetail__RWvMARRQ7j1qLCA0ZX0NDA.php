<?php 
function tpl_521dfc7a_ReportDetail__RWvMARRQ7j1qLCA0ZX0NDA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<li class="nav-header">BÁO CÁO TỔNG HỢP</li>
								<?php 
/* tag "li" from line 17 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->TrackingAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
if (null !== ($_tmp_2 = ($ctx->Track->getId()==$ctx->Tracking->getId()?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
									<?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Track, 'getURLView')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
										<?php /* tag "span" from line 19 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getName')); ?>
</span>
									</a>
								</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</ul>
						</div>						
						<?php /* tag "div" from line 24 */; ?>
<div class="menu">
							<?php /* tag "ul" from line 25 */; ?>
<ul class="nav nav-list">								
								<?php /* tag "li" from line 26 */; ?>
<li class="nav-header">THỐNG KÊ</li>
								<?php /* tag "li" from line 27 */; ?>
<li>
									<?php 
/* tag "a" from line 28 */ ;
if (null !== ($_tmp_3 = ('#'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>HÀNG TỒN KHO</a>
								</li>
							</ul>
						</div>						
					</div>
					<?php /* tag "div" from line 33 */; ?>
<div class="span9">
						<?php /* tag "div" from line 34 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 35 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 36 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "caption" from line 37 */; ?>
<caption><?php /* tag "h4" from line 37 */; ?>
<h4>BÁO CÁO CHI TIẾT</h4></caption>
								<?php /* tag "thead" from line 38 */; ?>
<thead>
									<?php /* tag "tr" from line 39 */; ?>
<tr>										
										<?php /* tag "th" from line 40 */; ?>
<th>NGÀY</th>										
										<?php /* tag "th" from line 41 */; ?>
<th width="120">DOANH SỐ</th>
										<?php /* tag "th" from line 42 */; ?>
<th width="120">NHẬP HÀNG</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 45 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 46 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Day = new PHPTAL_RepeatController($ctx->path($ctx->Tracking, 'getURLDayAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Day as $ctx->Day): ;
?>
<tr>
										<?php /* tag "td" from line 47 */; ?>
<td><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_1 = ($ctx->Day[1]))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 47 */; ?>
<span><?php echo phptal_escape($ctx->Day[0]); ?>
</span></a></td>
										<?php /* tag "td" from line 48 */; ?>
<td width="32"><?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_3 = ($ctx->Day[1]))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="btn" target="blank"<?php echo $_tmp_3 ?>
><?php /* tag "span" from line 48 */; ?>
<span class="icon-print"></span></a></td>
										<?php /* tag "td" from line 49 */; ?>
<td width="32"><?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->Day[1]))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="btn" target="blank"<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 49 */; ?>
<span class="icon-print"></span></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 51 */; ?>
<tr>
										<?php /* tag "td" from line 52 */; ?>
<td><?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLSellingGeneral')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_3 ?>
>TỔNG HỢP</a></td>
										<?php /* tag "td" from line 53 */; ?>
<td width="32"><?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLSellingGeneral')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="btn btn-primary" target="blank"<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 53 */; ?>
<span class="icon-print"></span></a></td>
										<?php /* tag "td" from line 54 */; ?>
<td width="32"><?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLSellingGeneral')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn btn-primary" target="blank"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 54 */; ?>
<span class="icon-print"></span></a></td>
									</tr>
								</tbody>								
							</table>
						</div>
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 62 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\ReportDetail.html (edit that file instead) */; ?>