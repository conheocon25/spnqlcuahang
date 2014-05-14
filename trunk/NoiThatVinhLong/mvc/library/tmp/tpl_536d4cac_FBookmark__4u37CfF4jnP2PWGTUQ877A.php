<?php 
function tpl_536d4cac_FBookmark__4u37CfF4jnP2PWGTUQ877A(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<h1 class="title">CÁC SẢN PHẨM ĐÃ CHỌN</h1>
								<?php /* tag "p" from line 17 */; ?>
<p class="title-desc">Tìm ra sản phẩm bạn ưng ý</p>
							</header>
							<?php /* tag "div" from line 19 */; ?>
<div class="xs-margin"></div>
							<?php /* tag "div" from line 20 */; ?>
<div class="row">
								<?php /* tag "div" from line 21 */; ?>
<div class="col-md-12 table-responsive">
									<?php /* tag "table" from line 22 */; ?>
<table class="table table-striped compare-item-table">
										<?php /* tag "tr" from line 23 */; ?>
<tr>
											<?php /* tag "td" from line 24 */; ?>
<td class="table-title">Sản phẩm</td>
											<?php 
/* tag "td" from line 25 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Item = new PHPTAL_RepeatController($ctx->path($ctx->Cart, 'getItems'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Item as $ctx->Item): ;
?>
<td>
												<?php /* tag "figure" from line 26 */; ?>
<figure>
													<?php 
/* tag "img" from line 27 */ ;
if (null !== ($_tmp_2 = ($ctx->Item['Image']))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img width="180"<?php echo $_tmp_2 ?>
/>
												</figure>
												<?php /* tag "p" from line 29 */; ?>
<p class="item-name"><?php /* tag "a" from line 29 */; ?>
<a href="#"><?php echo phptal_escape($ctx->Item['Name']); ?>
</a></p>
											</td><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										</tr>
										<?php /* tag "tr" from line 32 */; ?>
<tr>
											<?php /* tag "td" from line 33 */; ?>
<td class="table-title">Giá</td>
											<?php 
/* tag "td" from line 34 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Item = new PHPTAL_RepeatController($ctx->path($ctx->Cart, 'getItems'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Item as $ctx->Item): ;
?>
<td>
												<?php /* tag "span" from line 35 */; ?>
<span class="item-price-special"><?php echo phptal_escape($ctx->Item['PriceP']); ?>
</span>
											</td><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										</tr>																			
										<?php /* tag "tr" from line 38 */; ?>
<tr>
											<?php /* tag "td" from line 39 */; ?>
<td class="table-title">Đánh giá</td>
											<?php 
/* tag "td" from line 40 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Item = new PHPTAL_RepeatController($ctx->path($ctx->Cart, 'getItems'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Item as $ctx->Item): ;
?>
<td>
												<?php /* tag "div" from line 41 */; ?>
<div class="ratings-container">
													<?php /* tag "div" from line 42 */; ?>
<div class="ratings">
														<?php /* tag "div" from line 43 */; ?>
<div class="ratings-result" data-result="90"></div>
													</div>
													<?php /* tag "span" from line 45 */; ?>
<span class="ratings-amount">
														1 đánh giá
													</span>
												</div>
											</td><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
											
										</tr>										
										<?php /* tag "tr" from line 51 */; ?>
<tr>
											<?php /* tag "td" from line 52 */; ?>
<td class="table-title"></td>
											<?php 
/* tag "td" from line 53 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Item = new PHPTAL_RepeatController($ctx->path($ctx->Cart, 'getItems'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Item as $ctx->Item): ;
?>
<td>
												<?php /* tag "a" from line 54 */; ?>
<a href="#" class="btn btn-custom-2">Mua ngay</a>
											</td><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
											
										</tr>
									</table>
									<?php /* tag "div" from line 58 */; ?>
<div class="xlg-margin"></div><!-- Space -->
								</div><!-- End .col-md-12 -->
							</div><!-- End .row -->
						</div><!-- End .col-md-12 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</section><!-- End #content -->
			<?php 
/* tag "div" from line 65 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div><!-- End #wrapper -->		
		<?php 
/* tag "div" from line 67 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\FBookmark.html (edit that file instead) */; ?>