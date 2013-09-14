<?php 
function tpl_521b07b4_SettingSupplierResou__YgTBAVXmLuy0jOWxGYnNMQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript">
			/*<![CDATA[*/
			$(document).ready(function(){$("#Barcode").focus();});
			/*]]>*/
		</script>
	</head>
	<?php /* tag "body" from line 13 */; ?>
<body>
		<?php /* tag "div" from line 14 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 15 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 16 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 17 */; ?>
<div class="row-fluid">
					<?php /* tag "div" from line 18 */; ?>
<div class="span3">
						<?php /* tag "ul" from line 19 */; ?>
<ul class="nav nav-list">
							<?php /* tag "li" from line 20 */; ?>
<li>
								<?php 
/* tag "form" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getFindResourceByBarcode')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form method="post"<?php echo $_tmp_1 ?>
>
									<?php /* tag "div" from line 22 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 23 */; ?>
<label class="control-label" for="Barcode">Quét mã vạch</label>
										<?php /* tag "div" from line 24 */; ?>
<div class="controls">
											<?php /* tag "input" from line 25 */; ?>
<input id="Barcode" name="Barcode" type="text"/>
										</div>
									</div>
								</form>
							</li>								
						</ul>						
					</div>
					<?php /* tag "div" from line 32 */; ?>
<div class="span9">
						<?php /* tag "div" from line 33 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 34 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 35 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 36 */; ?>
<thead>
									<?php /* tag "tr" from line 37 */; ?>
<tr>
										<?php /* tag "th" from line 38 */; ?>
<th width="32">STT</th>
										<?php /* tag "th" from line 39 */; ?>
<th width="100">MÃ VẠCH</th>
										<?php /* tag "th" from line 40 */; ?>
<th>TÊN</th>
										<?php /* tag "th" from line 41 */; ?>
<th width="60">ĐƠN VỊ</th>
										<?php /* tag "th" from line 42 */; ?>
<th width="120">GIÁ NHẬP</th>
										<?php /* tag "th" from line 43 */; ?>
<th width="120">GIÁ BÁN</th>
										<?php /* tag "th" from line 44 */; ?>
<th width="32">TAG</th>
										<?php /* tag "th" from line 45 */; ?>
<th width="32">XÓA</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 48 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 49 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Resource = new PHPTAL_RepeatController($ctx->ResourceAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Resource as $ctx->Resource): ;
if (null !== ($_tmp_2 = ($ctx->Resource->getBarcode()?'':'error'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<tr<?php echo $_tmp_2 ?>
>
										<?php /* tag "td" from line 50 */; ?>
<td>
											<?php /* tag "div" from line 51 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Resource/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 53 */; ?>
<td>
											<?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Resource, 'getURLBarcodePrint')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_3 ?>
>
												<?php /* tag "div" from line 55 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getBarcode')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 58 */; ?>
<td>
											<?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Resource, 'getURLUpdLoad')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
												<?php /* tag "div" from line 60 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 63 */; ?>
<td><?php /* tag "div" from line 63 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getUnit')); ?>
</div></td>
										<?php /* tag "td" from line 64 */; ?>
<td><?php /* tag "div" from line 64 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getPriceImportPrint')); ?>
</div></td>
										<?php /* tag "td" from line 65 */; ?>
<td><?php /* tag "div" from line 65 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Resource, 'getPriceExportPrint')); ?>
</div></td>
										<?php /* tag "td" from line 66 */; ?>
<td><?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Resource, 'getURLTag')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_3 ?>
><?php /* tag "span" from line 66 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getTagAll/count')); ?>
</span></a></td>
										<?php /* tag "td" from line 67 */; ?>
<td><?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Resource, 'getURLDelLoad')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_3 ?>
><?php /* tag "span" from line 67 */; ?>
<span class="icon-remove"></span></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 70 */; ?>
<tfoot>
									<?php /* tag "tr" from line 71 */; ?>
<tr>
										<?php /* tag "td" from line 72 */; ?>
<td colspan="4" align="center">
											<?php 
/* tag "a" from line 73 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier, 'getURLResourceInsLoad')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_3 ?>
>
												<?php /* tag "span" from line 74 */; ?>
<span class="icon-plus"></span>Thêm mới
											</a>
										</td>
									</tr>
								</tfoot>
							</table>							
							<?php 
/* tag "span" from line 80 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

						</div>						
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 85 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\SettingSupplierResource.html (edit that file instead) */; ?>