<?php 
function tpl_5423196d_ReportDailySellingCa__twTUgy61UKZ5VvYt2oAuSQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
								<?php /* tag "h3" from line 18 */; ?>
<h3>CHI TIẾT</h3>
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
<th width="11%"><?php /* tag "div" from line 23 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 24 */; ?>
<th width="8%"><?php /* tag "div" from line 24 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>											
											<?php /* tag "th" from line 25 */; ?>
<th width="15%"><?php /* tag "div" from line 25 */; ?>
<div class="text-left">KHÁCH</div></th>
											<?php /* tag "th" from line 26 */; ?>
<th width="15%"><?php /* tag "div" from line 26 */; ?>
<div class="text-right">GIÁ TRỊ</div></th>											
										</tr>
									</thead>
									<?php /* tag "tbody" from line 29 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 30 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Session = new PHPTAL_RepeatController($ctx->SessionAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Session as $ctx->Session): ;
?>
<tr>
											<?php /* tag "td" from line 31 */; ?>
<td align="center"><?php /* tag "span" from line 31 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 32 */; ?>
<td align="left"><?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</span></td>
											<?php /* tag "td" from line 33 */; ?>
<td align="left"><?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span></td>											
											<?php /* tag "td" from line 34 */; ?>
<td align="left"><?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getCustomer/getName')); ?>
</span></td>											
											<?php /* tag "td" from line 35 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span>
												</a>	
											</td>											
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 41 */; ?>
<tr>
											<?php /* tag "td" from line 42 */; ?>
<td align="left" colspan="4">TỔNG CỘNG CÓ <?php /* tag "B" from line 42 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->SessionAll, 'count')); ?>
</B> PHIẾU </td>
											<?php /* tag "td" from line 43 */; ?>
<td align="right"><?php /* tag "B" from line 43 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NTotal, 'formatCurrency')); ?>
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
/* tag "div" from line 53 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 54 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>
	
		<?php /* tag "script" from line 55 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$(".Ticket").click(function(){
				var url = $(this).attr('alt');
				var thePopup = window.open( url, "In Phiếu", "menubar=yes,location=yes,height=700,width=700" );
				thePopup.print();				
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ReportDailySellingCash.html (edit that file instead) */; ?>