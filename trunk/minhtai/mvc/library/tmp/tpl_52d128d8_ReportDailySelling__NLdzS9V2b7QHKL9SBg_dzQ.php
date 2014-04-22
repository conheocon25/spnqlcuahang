<?php 
function tpl_52d128d8_ReportDailySelling__NLdzS9V2b7QHKL9SBg_dzQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		
		<?php /* tag "div" from line 11 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 14 */; ?>
<div class="row">
				<?php /* tag "div" from line 15 */; ?>
<div class="container-fluid">
					<?php /* tag "div" from line 16 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 17 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 18 */; ?>
<div class="widget-content nopadding">								
								<?php /* tag "table" from line 19 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 20 */; ?>
<thead>
										<?php /* tag "tr" from line 21 */; ?>
<tr>										
											<?php /* tag "th" from line 22 */; ?>
<th width="5%"><?php /* tag "B" from line 22 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 23 */; ?>
<th width="15%"><?php /* tag "div" from line 23 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 24 */; ?>
<th width="20%"><?php /* tag "div" from line 24 */; ?>
<div class="text-left">KHÁCH HÀNG</div></th>
											<?php /* tag "th" from line 25 */; ?>
<th width="35%"><?php /* tag "div" from line 25 */; ?>
<div class="text-left">DIỄN GIẢI</div></th>
											<?php /* tag "th" from line 26 */; ?>
<th width="25%"><?php /* tag "div" from line 26 */; ?>
<div class="text-right">GIÁ TRỊ</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 29 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 30 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Order = new PHPTAL_RepeatController($ctx->OrderAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Order as $ctx->Order): ;
?>
<tr>
											<?php /* tag "td" from line 31 */; ?>
<td align="center"><?php /* tag "span" from line 31 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 32 */; ?>
<td align="left"><?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</span></td>
											<?php /* tag "td" from line 33 */; ?>
<td align="left"><?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getCustomer/getName')); ?>
</span></td>
											<?php /* tag "td" from line 34 */; ?>
<td align="left"><?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getNote')); ?>
</span></td>
											<?php /* tag "td" from line 35 */; ?>
<td align="right">																								
												<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Order, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="In phiếu" data-toggle="modal" class="OrderPreview" href="#DialogPreview"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</span></a>
											</td>											
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 39 */; ?>
<tr>
											<?php /* tag "td" from line 40 */; ?>
<td align="right" colspan="4">TỔNG CỘNG</td>
											<?php /* tag "td" from line 41 */; ?>
<td align="right"><?php /* tag "B" from line 41 */; ?>
<B><?php echo phptal_escape($ctx->NTotal->formatCurrency() . ' đ'); ?>
</B></td>
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
/* tag "div" from line 51 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 52 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<!-- DIALOG PREVIEW	-->
		<?php /* tag "div" from line 54 */; ?>
<div id="DialogPreview" class="modal fade">
			<?php /* tag "div" from line 55 */; ?>
<div class="modal-dialog full-screen">
				<?php /* tag "div" from line 56 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 57 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 57 */; ?>
<h3><?php /* tag "i" from line 57 */; ?>
<i class="glyphicons-star modal-icon"></i>XEM TRƯỚC KHI IN</h3></div>
					<?php /* tag "form" from line 58 */; ?>
<form class="form">
						<?php /* tag "div" from line 59 */; ?>
<div class="form-group"><?php /* tag "div" from line 59 */; ?>
<div id="DocPreview"></div></div>
						<?php /* tag "div" from line 60 */; ?>
<div class="modal-footer">									
							<?php /* tag "button" from line 61 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 61 */; ?>
<i class="glyphicons-undo"></i> Đóng</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php /* tag "script" from line 67 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$(".OrderPreview").click(function(){
				URL = $(this).attr('alt');
				var mPDF = new PDFObject({ 		
					url: URL,				
					height: "500px",
					pdfOpenParams:{
						view: 'Fit', 
						toolbar: '1', 
						statusbar: '1', 
						messages: '1',
						navpanes: '1' 
					}				
				}).embed("DocPreview");												
				$("#DocPreview").show().printElement();	
			});
		/*]]>*/
		</script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\ReportDailySelling.html (edit that file instead) */; ?>