<?php 
function tpl_52cd03e9_ReportDailySelling__NLdzS9V2b7QHKL9SBg_dzQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 13 */; ?>
<div class="row">
				<?php /* tag "div" from line 14 */; ?>
<div class="container-fluid">
					<?php /* tag "div" from line 15 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 16 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 17 */; ?>
<div class="widget-content nopadding">
								<?php /* tag "h1" from line 18 */; ?>
<h1><?php echo phptal_escape('TỔNG CỘNG ( ' . $ctx->NTotal->formatCurrency() . ' / ' . $ctx->NTotal_1->formatCurrency() . ' / ' . $ctx->NTotal_2->formatCurrency() . ')'); ?>
</h1>
								<?php /* tag "h3" from line 19 */; ?>
<h3>CA 1 <?php /* tag "span" from line 19 */; ?>
<span><?php echo phptal_escape('TỔNG CỘNG ( ' . $ctx->NTotal1->formatCurrency() . ' / ' . $ctx->NTotal11->formatCurrency() . ' / ' . $ctx->NTotal12->formatCurrency() . ')'); ?>
</span></h3>
								<?php /* tag "table" from line 20 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 21 */; ?>
<thead>
										<?php /* tag "tr" from line 22 */; ?>
<tr>
											<?php /* tag "th" from line 23 */; ?>
<th width="5%"><?php /* tag "B" from line 23 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 24 */; ?>
<th width="15%"><?php /* tag "div" from line 24 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 25 */; ?>
<th width="11%"><?php /* tag "div" from line 25 */; ?>
<div class="text-left">THU NGÂN</div></th>
											<?php /* tag "th" from line 26 */; ?>
<th width="14%"><?php /* tag "div" from line 26 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>
											<?php /* tag "th" from line 27 */; ?>
<th width="33%"><?php /* tag "div" from line 27 */; ?>
<div class="text-left">BÀN</div></th>											
											<?php /* tag "th" from line 28 */; ?>
<th width="11%"><?php /* tag "div" from line 28 */; ?>
<div class="text-right">CHƯA TÍNH</div></th>
											<?php /* tag "th" from line 29 */; ?>
<th width="11%"><?php /* tag "div" from line 29 */; ?>
<div class="text-right">ĐÃ TÍNH</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 32 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 33 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Session = new PHPTAL_RepeatController($ctx->Session1All)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Session as $ctx->Session): ;
?>
<tr>
											<?php /* tag "td" from line 34 */; ?>
<td align="center"><?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 35 */; ?>
<td align="left"><?php /* tag "span" from line 35 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTimeRangePrint')); ?>
</span></td>
											<?php /* tag "td" from line 36 */; ?>
<td align="left"><?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span></td>
											<?php /* tag "td" from line 37 */; ?>
<td align="left"><?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getEmployee/getName')); ?>
</span></td>
											<?php /* tag "td" from line 38 */; ?>
<td align="left"><?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getDomain/getName')); ?>
</span> / <?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getName')); ?>
</span></td>
											<?php /* tag "td" from line 39 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 40 */ ;
if ($ctx->Session->getStatus()==0):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-toggle="modal" class="SessionPreview" href="#DialogPreview"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</a><?php endif; ?>

											</td>
											<?php /* tag "td" from line 42 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 43 */ ;
if ($ctx->Session->getStatus()==1):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-toggle="modal" class="SessionPreview" href="#DialogPreview"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</a><?php endif; ?>

											</td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									</tbody>
								</table>								
								<?php /* tag "h3" from line 48 */; ?>
<h3>CA 2 <?php /* tag "span" from line 48 */; ?>
<span><?php echo phptal_escape('TỔNG CỘNG ( ' . $ctx->NTotal2->formatCurrency() . ' / ' . $ctx->NTotal21->formatCurrency() . ' / ' . $ctx->NTotal22->formatCurrency() . ')'); ?>
</span></h3>
								<?php /* tag "table" from line 49 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 50 */; ?>
<thead>
										<?php /* tag "tr" from line 51 */; ?>
<tr>
											<?php /* tag "th" from line 52 */; ?>
<th width="5%"><?php /* tag "B" from line 52 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 53 */; ?>
<th width="15%"><?php /* tag "div" from line 53 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 54 */; ?>
<th width="11%"><?php /* tag "div" from line 54 */; ?>
<div class="text-left">THU NGÂN</div></th>
											<?php /* tag "th" from line 55 */; ?>
<th width="14%"><?php /* tag "div" from line 55 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>
											<?php /* tag "th" from line 56 */; ?>
<th width="33%"><?php /* tag "div" from line 56 */; ?>
<div class="text-left">BÀN</div></th>											
											<?php /* tag "th" from line 57 */; ?>
<th width="11%"><?php /* tag "div" from line 57 */; ?>
<div class="text-right">CHƯA TÍNH</div></th>
											<?php /* tag "th" from line 58 */; ?>
<th width="11%"><?php /* tag "div" from line 58 */; ?>
<div class="text-right">ĐÃ TÍNH</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 61 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 62 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Session = new PHPTAL_RepeatController($ctx->Session2All)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Session as $ctx->Session): ;
?>
<tr>
											<?php /* tag "td" from line 63 */; ?>
<td align="center"><?php /* tag "span" from line 63 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 64 */; ?>
<td align="left"><?php /* tag "span" from line 64 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTimeRangePrint')); ?>
</span></td>
											<?php /* tag "td" from line 65 */; ?>
<td align="left"><?php /* tag "span" from line 65 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span></td>
											<?php /* tag "td" from line 66 */; ?>
<td align="left"><?php /* tag "span" from line 66 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getEmployee/getName')); ?>
</span></td>
											<?php /* tag "td" from line 67 */; ?>
<td align="left"><?php /* tag "span" from line 67 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getDomain/getName')); ?>
</span> / <?php /* tag "span" from line 67 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getName')); ?>
</span></td>
											<?php /* tag "td" from line 68 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 69 */ ;
if ($ctx->Session->getStatus()==0):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-toggle="modal" class="SessionPreview" href="#DialogPreview"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</a><?php endif; ?>

											</td>
											<?php /* tag "td" from line 71 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 72 */ ;
if ($ctx->Session->getStatus()==1):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-toggle="modal" class="SessionPreview" href="#DialogPreview"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</a><?php endif; ?>

											</td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									</tbody>
								</table>
								
								<?php /* tag "h3" from line 78 */; ?>
<h3>CA 3 <?php /* tag "span" from line 78 */; ?>
<span><?php echo phptal_escape('TỔNG CỘNG ( ' . $ctx->NTotal3->formatCurrency() . ' / ' . $ctx->NTotal31->formatCurrency() . ' / ' . $ctx->NTotal32->formatCurrency() . ')'); ?>
</span></h3>
								<?php /* tag "table" from line 79 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 80 */; ?>
<thead>
										<?php /* tag "tr" from line 81 */; ?>
<tr>
											<?php /* tag "th" from line 82 */; ?>
<th width="5%"><?php /* tag "B" from line 82 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 83 */; ?>
<th width="15%"><?php /* tag "div" from line 83 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 84 */; ?>
<th width="11%"><?php /* tag "div" from line 84 */; ?>
<div class="text-left">THU NGÂN</div></th>
											<?php /* tag "th" from line 85 */; ?>
<th width="14%"><?php /* tag "div" from line 85 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>
											<?php /* tag "th" from line 86 */; ?>
<th width="33%"><?php /* tag "div" from line 86 */; ?>
<div class="text-left">BÀN</div></th>											
											<?php /* tag "th" from line 87 */; ?>
<th width="11%"><?php /* tag "div" from line 87 */; ?>
<div class="text-right">CHƯA TÍNH</div></th>
											<?php /* tag "th" from line 88 */; ?>
<th width="11%"><?php /* tag "div" from line 88 */; ?>
<div class="text-right">ĐÃ TÍNH</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 91 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 92 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Session = new PHPTAL_RepeatController($ctx->Session3All)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Session as $ctx->Session): ;
?>
<tr>
											<?php /* tag "td" from line 93 */; ?>
<td align="center"><?php /* tag "span" from line 93 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 94 */; ?>
<td align="left"><?php /* tag "span" from line 94 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTimeRangePrint')); ?>
</span></td>
											<?php /* tag "td" from line 95 */; ?>
<td align="left"><?php /* tag "span" from line 95 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span></td>
											<?php /* tag "td" from line 96 */; ?>
<td align="left"><?php /* tag "span" from line 96 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getEmployee/getName')); ?>
</span></td>
											<?php /* tag "td" from line 97 */; ?>
<td align="left"><?php /* tag "span" from line 97 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getDomain/getName')); ?>
</span> / <?php /* tag "span" from line 97 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getName')); ?>
</span></td>
											<?php /* tag "td" from line 98 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 99 */ ;
if ($ctx->Session->getStatus()==0):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-toggle="modal" class="SessionPreview" href="#DialogPreview"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</a><?php endif; ?>

											</td>
											<?php /* tag "td" from line 101 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 102 */ ;
if ($ctx->Session->getStatus()==1):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-toggle="modal" class="SessionPreview" href="#DialogPreview"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</a><?php endif; ?>

											</td>
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
			</div>
		</div>
		<!-- DIALOG PREVIEW	-->
		<?php /* tag "div" from line 114 */; ?>
<div id="DialogPreview" class="modal fade">
			<?php /* tag "div" from line 115 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 116 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 117 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 117 */; ?>
<h3><?php /* tag "i" from line 117 */; ?>
<i class="glyphicons-print modal-icon"></i>XEM LẠI PHIẾU</h3></div>
					<?php /* tag "div" from line 118 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 119 */; ?>
<div class="form-group">
							<?php /* tag "div" from line 120 */; ?>
<div id="DocPreview"></div>
						</div>
						<?php /* tag "div" from line 122 */; ?>
<div class="modal-footer">
							<?php /* tag "button" from line 123 */; ?>
<button id="ButtonDocPreview" data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 123 */; ?>
<i class="glyphicons-undo"></i> Đóng lại</button>
						</div>									
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 129 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 130 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 131 */; ?>
<script>
			$(".SessionPreview").click(function(){
				var URL = $(this).attr('alt');
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
				
			});
		</script>						
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\ReportDailySelling.html (edit that file instead) */; ?>