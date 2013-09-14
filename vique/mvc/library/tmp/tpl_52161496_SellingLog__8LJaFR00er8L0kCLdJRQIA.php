<?php 
function tpl_52161496_SellingLog__8LJaFR00er8L0kCLdJRQIA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th width="30">STT</th>
										<?php /* tag "th" from line 23 */; ?>
<th width="120">THỜI GIAN</th>
										<?php /* tag "th" from line 24 */; ?>
<th width="120">NHÂN VIÊN</th>
										<?php /* tag "th" from line 25 */; ?>
<th>DIỄN GIẢI</th>
										<?php /* tag "th" from line 26 */; ?>
<th width="120"><?php /* tag "div" from line 26 */; ?>
<div class="text-right">THÀNH TIỀN</div></th>
										<?php /* tag "th" from line 27 */; ?>
<th width="120">TRẠNG THÁI</th>										
										<?php /* tag "th" from line 28 */; ?>
<th width="30"></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 31 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 32 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Order = new PHPTAL_RepeatController($ctx->OrderAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Order as $ctx->Order): ;
?>
<tr>
										<?php /* tag "td" from line 33 */; ?>
<td><?php /* tag "div" from line 33 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Order/number')); ?>
</div></td>
										<?php /* tag "td" from line 34 */; ?>
<td>
											<?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Order, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 36 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 39 */; ?>
<td><?php /* tag "div" from line 39 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Order, 'getUser/getName')); ?>
</div></td>
										<?php /* tag "td" from line 40 */; ?>
<td><?php /* tag "div" from line 40 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Order, 'getDescription')); ?>
</div></td>
										<?php /* tag "td" from line 41 */; ?>
<td>
											<?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Order, 'getURLPrint')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 43 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 46 */; ?>
<td><?php /* tag "div" from line 46 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Order, 'getStatePrint')); ?>
</div></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Order, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 47 */; ?>
<span class="icon-remove"></span></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>								
							</table>							
							<?php 
/* tag "span" from line 51 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

						</div>						
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 56 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\SellingLog.html (edit that file instead) */; ?>