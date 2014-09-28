<?php 
function tpl_534d629a_ReportDailySelling__UTjqUmuEjCpTfTTn2TQHog(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
							<?php 
/* tag "div" from line 17 */ ;
if ($ctx->path($ctx->TD, 'isOne')):  ;
?>
<div class="widget-content nopadding">
								<?php /* tag "h3" from line 18 */; ?>
<h3>CHI TIẾT GIAO DỊCH BÁN HÀNG TRONG NGÀY</h3>
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
<th width="13%"><?php /* tag "div" from line 25 */; ?>
<div class="text-left">BÀN</div></th>
											<?php /* tag "th" from line 26 */; ?>
<th width="15%"><?php /* tag "div" from line 26 */; ?>
<div class="text-left">KHÁCH</div></th>
											<?php /* tag "th" from line 27 */; ?>
<th width="15%"><?php /* tag "div" from line 27 */; ?>
<div class="text-right">TT.ĐỦ</div></th>
											<?php /* tag "th" from line 28 */; ?>
<th width="3%"><?php /* tag "div" from line 28 */; ?>
<div class="text-right"></div></th>
											<?php /* tag "th" from line 29 */; ?>
<th width="30%"><?php /* tag "div" from line 29 */; ?>
<div class="text-right">NỢ PHIẾU</div></th>											
										</tr>
									</thead>
									<?php /* tag "tbody" from line 32 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 33 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Session = new PHPTAL_RepeatController($ctx->SessionAll)
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
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</span></td>
											<?php /* tag "td" from line 36 */; ?>
<td align="left"><?php /* tag "span" from line 36 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span></td>
											<?php /* tag "td" from line 37 */; ?>
<td align="left"><?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getName')); ?>
</span></td>
											<?php /* tag "td" from line 38 */; ?>
<td align="left"><?php /* tag "span" from line 38 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getCustomer/getName')); ?>
</span></td>											
											<?php /* tag "td" from line 39 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 40 */ ;
if ($ctx->Session->getStatus()==1):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span>
												</a><?php endif; ?>
	
											</td>
											<?php /* tag "td" from line 44 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 45 */ ;
if ($ctx->path($ctx->Session, 'checkDel')):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint1')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_2 ?>
>
													Xem
												</a><?php endif; ?>

											</td>
											<?php /* tag "td" from line 49 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 50 */ ;
if ($ctx->Session->getStatus()==2):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 51 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span>
												</a><?php endif; ?>

											</td>											
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 55 */; ?>
<tr>
											<?php /* tag "td" from line 56 */; ?>
<td align="left" colspan="5">TỔNG CỘNG CÓ <?php /* tag "B" from line 56 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->SessionAll, 'count')); ?>
</B> PHIẾU </td>
											<?php /* tag "td" from line 57 */; ?>
<td align="right"><?php /* tag "B" from line 57 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NTotal1, 'formatCurrency')); ?>
</B></td>
											<?php /* tag "td" from line 58 */; ?>
<td></td>
											<?php /* tag "td" from line 59 */; ?>
<td align="right"><?php /* tag "B" from line 59 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NTotal2, 'formatCurrency')); ?>
</B></td>
										</tr>
									</tbody>
								</table>								
							</div><?php endif; ?>

							
							<?php 
/* tag "div" from line 65 */ ;
if (!($ctx->path($ctx->TD, 'isOne'))):  ;
?>
<div class="widget-content nopadding">
								<?php /* tag "h3" from line 66 */; ?>
<h3>CA1</h3>
								<?php /* tag "table" from line 67 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 68 */; ?>
<thead>
										<?php /* tag "tr" from line 69 */; ?>
<tr>										
											<?php /* tag "th" from line 70 */; ?>
<th width="5%"><?php /* tag "B" from line 70 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 71 */; ?>
<th width="11%"><?php /* tag "div" from line 71 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 72 */; ?>
<th width="8%"><?php /* tag "div" from line 72 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>
											<?php /* tag "th" from line 73 */; ?>
<th width="13%"><?php /* tag "div" from line 73 */; ?>
<div class="text-left">BÀN</div></th>
											<?php /* tag "th" from line 74 */; ?>
<th width="15%"><?php /* tag "div" from line 74 */; ?>
<div class="text-left">KHÁCH</div></th>
											<?php /* tag "th" from line 75 */; ?>
<th width="15%"><?php /* tag "div" from line 75 */; ?>
<div class="text-right">TT.ĐỦ</div></th>
											<?php /* tag "th" from line 76 */; ?>
<th width="3%"><?php /* tag "div" from line 76 */; ?>
<div class="text-right"></div></th>
											<?php /* tag "th" from line 77 */; ?>
<th width="30%"><?php /* tag "div" from line 77 */; ?>
<div class="text-right">NỢ PHIẾU</div></th>											
										</tr>
									</thead>
									<?php /* tag "tbody" from line 80 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 81 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Session = new PHPTAL_RepeatController($ctx->SessionAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Session as $ctx->Session): ;
?>
<tr>
											<?php /* tag "td" from line 82 */; ?>
<td align="center"><?php /* tag "span" from line 82 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 83 */; ?>
<td align="left"><?php /* tag "span" from line 83 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</span></td>
											<?php /* tag "td" from line 84 */; ?>
<td align="left"><?php /* tag "span" from line 84 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span></td>
											<?php /* tag "td" from line 85 */; ?>
<td align="left"><?php /* tag "span" from line 85 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getName')); ?>
</span></td>
											<?php /* tag "td" from line 86 */; ?>
<td align="left"><?php /* tag "span" from line 86 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getCustomer/getName')); ?>
</span></td>											
											<?php /* tag "td" from line 87 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 88 */ ;
if ($ctx->Session->getStatus()==1):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_1 ?>
>
													<?php /* tag "span" from line 89 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span>
												</a><?php endif; ?>
	
											</td>
											<?php /* tag "td" from line 92 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 93 */ ;
if ($ctx->path($ctx->Session, 'checkDel')):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getURLPrint1')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_1 ?>
>
													Xem
												</a><?php endif; ?>

											</td>
											<?php /* tag "td" from line 97 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 98 */ ;
if ($ctx->Session->getStatus()==2):  ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_1 ?>
>
													<?php /* tag "span" from line 99 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span>
												</a><?php endif; ?>

											</td>											
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 103 */; ?>
<tr>
											<?php /* tag "td" from line 104 */; ?>
<td align="left" colspan="5">TỔNG CỘNG CÓ <?php /* tag "B" from line 104 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->SessionAll1, 'count')); ?>
</B> PHIẾU </td>
											<?php /* tag "td" from line 105 */; ?>
<td align="right"><?php /* tag "B" from line 105 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NTotal11, 'formatCurrency')); ?>
</B></td>
											<?php /* tag "td" from line 106 */; ?>
<td></td>
											<?php /* tag "td" from line 107 */; ?>
<td align="right"><?php /* tag "B" from line 107 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NTotal12, 'formatCurrency')); ?>
</B></td>
										</tr>
									</tbody>
								</table>
								<?php /* tag "h3" from line 111 */; ?>
<h3>CA2</h3>
								<?php /* tag "table" from line 112 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 113 */; ?>
<thead>
										<?php /* tag "tr" from line 114 */; ?>
<tr>										
											<?php /* tag "th" from line 115 */; ?>
<th width="5%"><?php /* tag "B" from line 115 */; ?>
<B>#ID</B></th>
											<?php /* tag "th" from line 116 */; ?>
<th width="11%"><?php /* tag "div" from line 116 */; ?>
<div class="text-left">THỜI GIAN</div></th>
											<?php /* tag "th" from line 117 */; ?>
<th width="8%"><?php /* tag "div" from line 117 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>
											<?php /* tag "th" from line 118 */; ?>
<th width="13%"><?php /* tag "div" from line 118 */; ?>
<div class="text-left">BÀN</div></th>
											<?php /* tag "th" from line 119 */; ?>
<th width="15%"><?php /* tag "div" from line 119 */; ?>
<div class="text-left">KHÁCH</div></th>
											<?php /* tag "th" from line 120 */; ?>
<th width="15%"><?php /* tag "div" from line 120 */; ?>
<div class="text-right">TT.ĐỦ</div></th>
											<?php /* tag "th" from line 121 */; ?>
<th width="3%"><?php /* tag "div" from line 121 */; ?>
<div class="text-right"></div></th>
											<?php /* tag "th" from line 122 */; ?>
<th width="30%"><?php /* tag "div" from line 122 */; ?>
<div class="text-right">NỢ PHIẾU</div></th>											
										</tr>
									</thead>
									<?php /* tag "tbody" from line 125 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 126 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Session = new PHPTAL_RepeatController($ctx->SessionAll2)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Session as $ctx->Session): ;
?>
<tr>
											<?php /* tag "td" from line 127 */; ?>
<td align="center"><?php /* tag "span" from line 127 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getId')); ?>
</span></td>
											<?php /* tag "td" from line 128 */; ?>
<td align="left"><?php /* tag "span" from line 128 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</span></td>
											<?php /* tag "td" from line 129 */; ?>
<td align="left"><?php /* tag "span" from line 129 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span></td>
											<?php /* tag "td" from line 130 */; ?>
<td align="left"><?php /* tag "span" from line 130 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getName')); ?>
</span></td>
											<?php /* tag "td" from line 131 */; ?>
<td align="left"><?php /* tag "span" from line 131 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getCustomer/getName')); ?>
</span></td>											
											<?php /* tag "td" from line 132 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 133 */ ;
if ($ctx->Session->getStatus()==1):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="Ticket" href="#"<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 134 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span>
												</a><?php endif; ?>
	
											</td>
											<?php /* tag "td" from line 137 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 138 */ ;
if ($ctx->path($ctx->Session, 'checkDel')):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint1')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_2 ?>
>
													Xem
												</a><?php endif; ?>

											</td>
											<?php /* tag "td" from line 142 */; ?>
<td align="right">
												<?php 
/* tag "a" from line 143 */ ;
if ($ctx->Session->getStatus()==2):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 144 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span>
												</a><?php endif; ?>

											</td>											
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 148 */; ?>
<tr>
											<?php /* tag "td" from line 149 */; ?>
<td align="left" colspan="5">TỔNG CỘNG CÓ <?php /* tag "B" from line 149 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->SessionAll2, 'count')); ?>
</B> PHIẾU </td>
											<?php /* tag "td" from line 150 */; ?>
<td align="right"><?php /* tag "B" from line 150 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NTotal21, 'formatCurrency')); ?>
</B></td>
											<?php /* tag "td" from line 151 */; ?>
<td></td>
											<?php /* tag "td" from line 152 */; ?>
<td align="right"><?php /* tag "B" from line 152 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->NTotal22, 'formatCurrency')); ?>
</B></td>
										</tr>
									</tbody>
								</table>
							</div><?php endif; ?>

						</div>
						<?php /* tag "div" from line 158 */; ?>
<div class="widget-box">
							<?php 
/* tag "a" from line 159 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->TD, 'getURLReportSellingByCategory')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_2 ?>
>
								<?php /* tag "h3" from line 160 */; ?>
<h3>XEM TỔNG KẾT DOANH SỐ THEO DANH MỤC MÓN</h3>
							</a>
							<?php 
/* tag "a" from line 162 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->TD, 'getURLReportSellingByDomain')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="Ticket"<?php echo $_tmp_1 ?>
>
								<?php /* tag "h3" from line 163 */; ?>
<h3>XEM TỔNG KẾT DOANH SỐ THEO KHU VỰC</h3>
							</a>							
						</div>
					</div>
				</div>
			</div>
		</div>		
		<?php 
/* tag "div" from line 170 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 171 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>
	
		<?php /* tag "script" from line 172 */; ?>
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\ReportDailySelling.html (edit that file instead) */; ?>