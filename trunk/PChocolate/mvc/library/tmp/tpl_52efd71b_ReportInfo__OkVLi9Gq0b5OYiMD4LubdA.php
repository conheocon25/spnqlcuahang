<?php 
function tpl_52efd71b_ReportInfo__OkVLi9Gq0b5OYiMD4LubdA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
								<?php /* tag "tbody" from line 20 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
									<?php /* tag "tr" from line 21 */; ?>
<tr>
										<?php /* tag "td" from line 22 */; ?>
<td class="right" width="50%">KHU VỰC / BÀN</td>
										<?php /* tag "td" from line 23 */; ?>
<td class="right">
											<?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->DomainAll, 'count')); ?>
</span> / <?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->TableAll, 'count')); ?>
</span>
										</td>
									</tr>
									<?php /* tag "tr" from line 27 */; ?>
<tr>
										<?php /* tag "td" from line 28 */; ?>
<td class="right" width="50%">DANH MỤC / MÓN</td>
										<?php /* tag "td" from line 29 */; ?>
<td class="right">
											<?php /* tag "span" from line 30 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->CategoryAll, 'count')); ?>
</span> / <?php /* tag "span" from line 30 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->CourseAll, 'count')); ?>
</span>
										</td>
									</tr>
									<?php /* tag "tr" from line 33 */; ?>
<tr>
										<?php /* tag "td" from line 34 */; ?>
<td class="right" width="50%">GIAO DỊCH / CHI TIẾT</td>
										<?php /* tag "td" from line 35 */; ?>
<td class="right">
											<?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->SessionAll, 'count')); ?>
</span> / <?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->SDAll, 'count')); ?>
</span>
										</td>
									</tr>
									<?php /* tag "tr" from line 39 */; ?>
<tr>
										<?php /* tag "td" from line 40 */; ?>
<td class="right" width="50%">NHÀ CUNG CẤP / NGUYÊN LIỆU</td>
										<?php /* tag "td" from line 41 */; ?>
<td class="right">
											<?php /* tag "span" from line 42 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->SupplierAll, 'count')); ?>
</span> / <?php /* tag "span" from line 42 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ResourceAll, 'count')); ?>
</span>
										</td>
									</tr>
									<?php /* tag "tr" from line 45 */; ?>
<tr>
										<?php /* tag "td" from line 46 */; ?>
<td class="right" width="50%">ĐƠN HÀNG NHẬP / CHI TIẾT NHẬP</td>
										<?php /* tag "td" from line 47 */; ?>
<td class="right">
											<?php /* tag "span" from line 48 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OrderAll, 'count')); ?>
</span> / <?php /* tag "span" from line 48 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ODAll, 'count')); ?>
</span>
										</td>
									</tr>
									<?php /* tag "tr" from line 51 */; ?>
<tr>
										<?php /* tag "td" from line 52 */; ?>
<td class="right" width="50%">LOG NHẬT KÍ</td>
										<?php /* tag "td" from line 53 */; ?>
<td class="right">
											<?php /* tag "span" from line 54 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->LogAll, 'count')); ?>
</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>									
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 64 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 65 */ ;
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ReportInfo.html (edit that file instead) */; ?>