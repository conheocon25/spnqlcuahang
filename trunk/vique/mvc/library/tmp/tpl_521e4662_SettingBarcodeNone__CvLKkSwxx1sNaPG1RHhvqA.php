<?php 
function tpl_521e4662_SettingBarcodeNone__CvLKkSwxx1sNaPG1RHhvqA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
						<?php /* tag "ul" from line 14 */; ?>
<ul class="nav nav-list">
							<?php /* tag "li" from line 15 */; ?>
<li>
								
							</li>								
						</ul>						
					</div>
					<?php /* tag "div" from line 20 */; ?>
<div class="span9">
						<?php /* tag "div" from line 21 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 22 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 23 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 24 */; ?>
<thead>
									<?php /* tag "tr" from line 25 */; ?>
<tr>
										<?php /* tag "th" from line 26 */; ?>
<th width="32">STT</th>
										<?php /* tag "th" from line 27 */; ?>
<th width="100">MÃ VẠCH</th>
										<?php /* tag "th" from line 28 */; ?>
<th>TÊN</th>
										<?php /* tag "th" from line 29 */; ?>
<th width="60">ĐƠN VỊ</th>
										<?php /* tag "th" from line 30 */; ?>
<th width="120">GIÁ NHẬP</th>
										<?php /* tag "th" from line 31 */; ?>
<th width="120">GIÁ BÁN</th>
										<?php /* tag "th" from line 32 */; ?>
<th width="32">TAG</th>
										<?php /* tag "th" from line 33 */; ?>
<th width="32">XÓA</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 36 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 37 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Resource = new PHPTAL_RepeatController($ctx->ResourceAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Resource as $ctx->Resource): ;
?>
<tr>
										<?php /* tag "td" from line 38 */; ?>
<td>
											<?php /* tag "div" from line 39 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Resource/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 41 */; ?>
<td>
											<?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Resource, 'getURLBarcodePrint')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 43 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getBarcode')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 46 */; ?>
<td>
											<?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Resource, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 48 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 51 */; ?>
<td><?php /* tag "div" from line 51 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getUnit')); ?>
</div></td>
										<?php /* tag "td" from line 52 */; ?>
<td><?php /* tag "div" from line 52 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getPriceImportPrint')); ?>
</div></td>
										<?php /* tag "td" from line 53 */; ?>
<td><?php /* tag "div" from line 53 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getPriceExportPrint')); ?>
</div></td>
										<?php /* tag "td" from line 54 */; ?>
<td><?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Resource, 'getURLTag')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 54 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getTagAll/count')); ?>
</span></a></td>
										<?php /* tag "td" from line 55 */; ?>
<td><?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Resource, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 55 */; ?>
<span class="icon-remove"></span></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
							</table>							
						</div>						
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 63 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\SettingBarcodeNone.html (edit that file instead) */; ?>