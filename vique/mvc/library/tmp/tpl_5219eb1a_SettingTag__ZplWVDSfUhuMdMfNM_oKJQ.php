<?php 
function tpl_5219eb1a_SettingTag__ZplWVDSfUhuMdMfNM_oKJQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
						<?php 
/* tag "span" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Menu', $_thistpl) ;
$ctx->popSlots() ;
?>

					</div>
					<?php /* tag "div" from line 16 */; ?>
<div class="span9">												
						<?php /* tag "div" from line 17 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 18 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 19 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 20 */; ?>
<thead>
									<?php /* tag "tr" from line 21 */; ?>
<tr>
										<?php /* tag "th" from line 22 */; ?>
<th width="32">STT</th>
										<?php /* tag "th" from line 23 */; ?>
<th>THẺ</th>
										<?php /* tag "th" from line 24 */; ?>
<th width="120">SẢN PHẨM</th>
										<?php /* tag "th" from line 25 */; ?>
<th width="32">XÓA</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 28 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 29 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Tag = new PHPTAL_RepeatController($ctx->TagAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Tag as $ctx->Tag): ;
?>
<tr>
										<?php /* tag "td" from line 30 */; ?>
<td><?php /* tag "div" from line 30 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Tag/number')); ?>
</div></td>
										<?php /* tag "td" from line 31 */; ?>
<td>
											<?php 
/* tag "a" from line 32 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tag, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 33 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Tag, 'getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 36 */; ?>
<td>
											<?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tag, 'getURLResource')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
>
												<?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Tag, 'getR2TAll/count')); ?>
</span>
											</a>
										</td>
										<?php /* tag "td" from line 41 */; ?>
<td><?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tag, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 41 */; ?>
<span class="icon-remove"></span></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 44 */; ?>
<tfoot>
									<?php /* tag "tr" from line 45 */; ?>
<tr>
										<?php /* tag "td" from line 46 */; ?>
<td colspan="4" align="center">
											<?php /* tag "a" from line 47 */; ?>
<a class="btn" href="/setting/tag/ins/load">
												<?php /* tag "span" from line 48 */; ?>
<span class="icon-plus"></span>Thêm mới
											</a>
										</td>
									</tr>
								</tfoot>
							</table>							
							<?php 
/* tag "span" from line 54 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

						</div>						
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 59 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\SettingTag.html (edit that file instead) */; ?>