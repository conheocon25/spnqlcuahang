<?php 
function tpl_537060b2_FCart__tId4o1Yb7PFA97ygUaEpBw(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html>
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "div" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>	
	<?php /* tag "body" from line 7 */; ?>
<body>
		<?php /* tag "div" from line 8 */; ?>
<div id="wrapper">
			<?php 
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "section" from line 10 */; ?>
<section id="content">				
				<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>
				
				<?php /* tag "div" from line 12 */; ?>
<div class="container">
					<?php /* tag "div" from line 13 */; ?>
<div class="row">
						<?php /* tag "div" from line 14 */; ?>
<div class="col-md-12">
							<?php /* tag "header" from line 15 */; ?>
<header class="content-title">
								<?php /* tag "h1" from line 16 */; ?>
<h1 class="title">GIỎ HÀNG CỦA BẠN</h1>
								<?php /* tag "p" from line 17 */; ?>
<p class="title-desc">
									Chỉ trong tuần bạn có thể nhận ngay sản phẩm.
								</p>
							</header>
							<?php /* tag "div" from line 21 */; ?>
<div class="xs-margin"></div><!-- space -->
							<?php /* tag "div" from line 22 */; ?>
<div class="row">
								<?php /* tag "div" from line 23 */; ?>
<div class="col-md-12 table-responsive">									
									<?php /* tag "table" from line 24 */; ?>
<table class="table cart-table">
										<?php /* tag "thead" from line 25 */; ?>
<thead>
											<?php /* tag "tr" from line 26 */; ?>
<tr>
												<?php /* tag "th" from line 27 */; ?>
<th class="table-title">TÊN SẢN PHẨM</th>
												<?php /* tag "th" from line 28 */; ?>
<th class="table-title" style="text-align:right;">GIÁ</th>
												<?php /* tag "th" from line 29 */; ?>
<th class="table-title">SỐ LƯỢNG</th>
												<?php /* tag "th" from line 30 */; ?>
<th class="table-title" style="text-align:right;">T.TIỀN</th>
												<?php /* tag "th" from line 31 */; ?>
<th class="table-title" width="30"></th>
											</tr>
										</thead>
										<?php 
/* tag "tbody" from line 34 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Item = new PHPTAL_RepeatController($ctx->path($ctx->Cart, 'getItems'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Item as $ctx->Item): ;
?>
<tbody>
											<?php /* tag "tr" from line 35 */; ?>
<tr>
												<?php /* tag "td" from line 36 */; ?>
<td class="item-name-col">
													<?php /* tag "figure" from line 37 */; ?>
<figure>
														<?php 
/* tag "img" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->Item['Image']))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="50%"<?php echo $_tmp_2 ?>
/>
													</figure>
													<?php /* tag "header" from line 40 */; ?>
<header class="item-name">
														<?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->Item['Name']); ?>
</span>
													</header>													
												</td>
												<?php /* tag "td" from line 44 */; ?>
<td class="item-price-col" style="text-align:right;">
													<?php /* tag "span" from line 45 */; ?>
<span class="item-price-special"><?php echo phptal_escape($ctx->Item['PriceP']); ?>
</span>
												</td>
												<?php /* tag "td" from line 47 */; ?>
<td>
													<?php /* tag "div" from line 48 */; ?>
<div class="custom-quantity-input">
														<?php 
/* tag "input" from line 49 */ ;
if (null !== ($_tmp_2 = ($ctx->Item['Quantity']))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input type="text" name="Quantity"<?php echo $_tmp_2 ?>
/>
														<?php 
/* tag "div" from line 50 */ ;
if (null !== ($_tmp_2 = ($ctx->Item['URLPlusUpd']))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div class="quantity-btn quantity-input-up"<?php echo $_tmp_2 ?>
>	<?php /* tag "i" from line 50 */; ?>
<i class="fa fa-angle-up"></i></div>
														<?php 
/* tag "div" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->Item['URLMinusUpd']))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div class="quantity-btn quantity-input-down"<?php echo $_tmp_2 ?>
>	<?php /* tag "i" from line 51 */; ?>
<i class="fa fa-angle-down"></i></div>
													</div>
												</td>
												<?php /* tag "td" from line 54 */; ?>
<td class="item-total-col" style="text-align:right;">
													<?php /* tag "span" from line 55 */; ?>
<span class="item-price-special"><?php echo phptal_escape($ctx->Item['ValueP']); ?>
</span>
												</td>
												<?php /* tag "td" from line 57 */; ?>
<td class="item-total-col">
													<?php 
/* tag "div" from line 58 */ ;
if (null !== ($_tmp_2 = ($ctx->Item['URLDel']))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div class="close-button" style="cursor:pointer;"<?php echo $_tmp_2 ?>
></div>
												</td>
											</tr>											
										</tbody><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tfoot" from line 62 */; ?>
<tfoot>
											<?php /* tag "tr" from line 63 */; ?>
<tr>
												<?php /* tag "td" from line 64 */; ?>
<td colspan="3"><?php /* tag "B" from line 64 */; ?>
<B>TỔNG CỘNG</B></td>
												<?php /* tag "td" from line 65 */; ?>
<td style="text-align:right;">													
													<?php /* tag "span" from line 66 */; ?>
<span class="item-price-special"><?php echo phptal_escape($ctx->path($ctx->Cart, 'getValuePrint')); ?>
</span>
												</td>
												<?php /* tag "td" from line 68 */; ?>
<td></td>
											</tr>
										</tfoot>	
									</table>									
								</div>
							</div>
							<?php /* tag "div" from line 74 */; ?>
<div class="xs-margin"></div><!-- space -->
							<?php /* tag "header" from line 75 */; ?>
<header class="content-title">
								<?php /* tag "h1" from line 76 */; ?>
<h1 class="title">THÔNG TIN CỦA BẠN</h1>
								<?php /* tag "p" from line 77 */; ?>
<p class="title-desc">
									Để chúng tôi có thể liên lạc xác nhận thông tin
								</p>
							</header>
							<?php /* tag "div" from line 81 */; ?>
<div class="xs-margin"></div><!-- space -->
							<?php /* tag "div" from line 82 */; ?>
<div class="row">
								<?php /* tag "div" from line 83 */; ?>
<div class="col-md-12 table-responsive">																		
									<?php /* tag "div" from line 84 */; ?>
<div class="col-md-6 col-sm-6 col-xs-12">								   										   		
								   		<?php /* tag "div" from line 85 */; ?>
<div class="xs-margin"></div>								   		
										<?php /* tag "div" from line 86 */; ?>
<div class="input-group">
											<?php /* tag "span" from line 87 */; ?>
<span class="input-group-addon"><?php /* tag "span" from line 87 */; ?>
<span class="input-icon input-icon-email"></span><?php /* tag "span" from line 87 */; ?>
<span class="input-text">Email&#42;</span></span>
											<?php /* tag "input" from line 88 */; ?>
<input type="text" class="form-control input-lg" placeholder="Email của bạn"/>
										</div>
										<?php /* tag "div" from line 90 */; ?>
<div class="input-group">
											<?php /* tag "span" from line 91 */; ?>
<span class="input-group-addon"><?php /* tag "span" from line 91 */; ?>
<span class="input-icon input-icon-phone"></span><?php /* tag "span" from line 91 */; ?>
<span class="input-text">Điện thoại&#42;</span></span>
											<?php /* tag "input" from line 92 */; ?>
<input type="text" class="form-control input-lg" placeholder="Điện thoại của bạn"/>
										</div>								   		
								   	</div>
									<?php /* tag "div" from line 95 */; ?>
<div>
										<?php /* tag "div" from line 96 */; ?>
<div class="lg-margin"></div>
										<?php /* tag "div" from line 97 */; ?>
<div class="text-right">
											<?php /* tag "input" from line 98 */; ?>
<input type="submit" class="btn btn-custom-2" value="Xác nhận"/>
										</div>
									</div>
								</div>								
							</div>
							
						</div><!-- End .col-md-12 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</section><!-- End #content -->
			<?php 
/* tag "div" from line 108 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div><!-- End #wrapper -->		
		<?php 
/* tag "div" from line 110 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 111 */; ?>
<script>
			$(function() {				
				$(".close-button").click(function(){										
					var URL = $(this).attr('alt');
					$.ajax({
						type: "POST",						
						url: URL,
						success: function(msg){
							location.reload();
						}
					});				
				});
				
				$(".quantity-btn").click(function(){
					var URL = $(this).attr('alt');										
					$.ajax({
						type: "POST",						
						url: URL,
						success: function(msg){
							location.reload();
						}
					});				
				});
				
			});
		</script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\FCart.html (edit that file instead) */; ?>