<?php 
function tpl_537307a2_FProductSearch__rAUczsqDjzQ_uqmW4nmg6w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
				<?php /* tag "div" from line 11 */; ?>
<div class="container">
					<?php /* tag "div" from line 12 */; ?>
<div class="row">
						<?php /* tag "div" from line 13 */; ?>
<div class="col-md-12">
							<?php /* tag "div" from line 14 */; ?>
<div class="row">
								<?php /* tag "div" from line 15 */; ?>
<div class="col-md-9 col-sm-8 col-xs-12 main-content">
									<?php /* tag "div" from line 16 */; ?>
<div class="md-margin"></div>
									<?php /* tag "div" from line 17 */; ?>
<div class="category-toolbar clearfix">										
										<?php /* tag "div" from line 18 */; ?>
<div class="toolbox-pagination clearfix">
											<?php /* tag "ul" from line 19 */; ?>
<ul class="pagination">
												<?php 
/* tag "li" from line 20 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->P = new PHPTAL_RepeatController($ctx->path($ctx->PN, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->P as $ctx->P): ;
if (null !== ($_tmp_2 = (($ctx->P->getId()==$ctx->Page)?'active':''))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
													<?php 
/* tag "a" from line 21 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->P, 'getURL')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->P, 'getName')); ?>
</a>
												</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</ul>											
										</div>
									</div>
									<?php /* tag "div" from line 26 */; ?>
<div class="md-margin"></div>
									<?php /* tag "div" from line 27 */; ?>
<div class="category-item-container">
										<?php /* tag "div" from line 28 */; ?>
<div class="row">
											<?php /* tag "h3" from line 29 */; ?>
<h3><?php echo phptal_escape('Từ khóa: ' . $ctx->Term . ' ( ' . $ctx->ProductAll1->count() . ' )'); ?>
</h3>
											<?php 
/* tag "div" from line 30 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Product = new PHPTAL_RepeatController($ctx->ProductAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Product as $ctx->Product): ;
?>
<div class="col-md-4 col-sm-6 col-xs-12">
												<?php /* tag "div" from line 31 */; ?>
<div class="item">
													<?php /* tag "div" from line 32 */; ?>
<div class="item-image-container">
														<?php /* tag "figure" from line 33 */; ?>
<figure>
															<?php 
/* tag "a" from line 34 */ ;
if ($ctx->path($ctx->Product, 'getInfo')):  ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Product, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
																<?php 
/* tag "img" from line 35 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getInfo/getImage1')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img class="item-image"<?php echo $_tmp_1 ?>
/>
																<?php 
/* tag "img" from line 36 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getInfo/getImage2')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img class="item-image-hover"<?php echo $_tmp_1 ?>
/>
															</a><?php endif; ?>

														</figure>
														<?php /* tag "div" from line 39 */; ?>
<div class="item-price-container">															
															<?php /* tag "span" from line 40 */; ?>
<span class="item-price"><?php echo phptal_escape($ctx->path($ctx->Product, 'getPrice2Print')); ?>
</span>
														</div>														
													</div><!-- End .item-image -->
													<?php /* tag "div" from line 43 */; ?>
<div class="item-meta-container">
														<?php /* tag "div" from line 44 */; ?>
<div class="ratings-container">
															<?php /* tag "div" from line 45 */; ?>
<div class="ratings">
																<?php /* tag "div" from line 46 */; ?>
<div class="ratings-result" data-result="90"></div>
															</div><!-- End .ratings -->
															<?php /* tag "span" from line 48 */; ?>
<span class="ratings-amount">
																1 đánh giá
															</span>
														</div><!-- End .rating-container -->
														<?php /* tag "h3" from line 52 */; ?>
<h3 class="item-name"><?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Product, 'getName')); ?>
</a></h3>
														<?php /* tag "div" from line 53 */; ?>
<div class="item-action">
															<?php /* tag "div" from line 54 */; ?>
<div class="item-add-btn" style="cursor:pointer">
																<?php 
/* tag "span" from line 61 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Product, 'getId')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getName')))):  ;
$_tmp_1 = ' name="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Product, 'getPrice2')))):  ;
$_tmp_4 = ' price="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Product, 'getInfo/getImage1')))):  ;
$_tmp_5 = ' image="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<span class="icon-cart-text"<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
> Mua ngay</span>																
															</div>
															<?php /* tag "div" from line 63 */; ?>
<div class="item-action-inner">
																<?php 
/* tag "span" from line 70 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Product, 'getId')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getName')))):  ;
$_tmp_1 = ' name="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Product, 'getPrice2')))):  ;
$_tmp_4 = ' price="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Product, 'getInfo/getImage1')))):  ;
$_tmp_5 = ' image="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<span class="icon-button icon-like" style="cursor:pointer"<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
>
																	Ưa thích
																</span>
																<?php 
/* tag "span" from line 79 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Product, 'getId')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getName')))):  ;
$_tmp_1 = ' name="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Product, 'getPrice2')))):  ;
$_tmp_4 = ' price="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Product, 'getInfo/getImage1')))):  ;
$_tmp_5 = ' image="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<span class="icon-button icon-compare" style="cursor:pointer"<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
>
																	Email
																</span>
															</div>
														</div><!-- End .item-action -->
													</div><!-- End .item-meta-container -->	
												</div><!-- End .col-md-4 -->
											</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
<!-- End .row -->
										</div><!-- End .category-item-container -->
									</div>
								</div>
								<?php /* tag "aside" from line 90 */; ?>
<aside class="col-md-3 col-sm-4 col-xs-12 sidebar">
									<?php /* tag "div" from line 91 */; ?>
<div class="md-margin"></div>
									<?php /* tag "div" from line 92 */; ?>
<div class="widget subscribe">
										<?php /* tag "h3" from line 93 */; ?>
<h3>TÌM SẢN PHẨM</h3>
										<?php /* tag "form" from line 94 */; ?>
<form action="/tim-san-pham" id="subscribe-form" method="post">
											<?php /* tag "div" from line 95 */; ?>
<div class="form-group">
												<?php /* tag "input" from line 96 */; ?>
<input type="text" class="form-control" name="Product" placeholder="Gõ tên sản phẩm bạn cần tìm"/>
											</div>
											<?php /* tag "div" from line 98 */; ?>
<div class="form-group" style="text-align:left;">
												Giá từ
												<?php /* tag "input" from line 100 */; ?>
<input type="text" class="form-control" name="FFrom"/>
												Đến
												<?php /* tag "input" from line 102 */; ?>
<input type="text" class="form-control" name="FTo"/>
											</div>
											<?php /* tag "input" from line 104 */; ?>
<input type="submit" value="Tìm kiếm" class="btn btn-custom"/>
										</form>
									</div>
								</aside><!-- End .col-md-3 -->
							</div><!-- End .row -->
						</div><!-- End .col-md-12 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</section><!-- End #content -->
			<?php 
/* tag "div" from line 113 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div><!-- End #wrapper -->		
		<?php 
/* tag "div" from line 115 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 116 */; ?>
<script>
			$(function() {								
				$(".icon-cart-text").click(function(){
					var Data 	= [];
					Data[0]		= $(this).attr('id');
					Data[1]		= $(this).attr('name');
					Data[2]		= $(this).attr('price');
					Data[3]		= $(this).attr('image');
					
					var URL = "/gio-hang/them";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){
							location.reload();
						}
					});				
				});
				
				$(".icon-like").click(function(){
					var Data 	= [];
					Data[0]		= $(this).attr('id');
					Data[1]		= $(this).attr('name');
					Data[2]		= $(this).attr('price');
					Data[3]		= $(this).attr('image');
					
					var URL = "/danh-dau/them";
					$.ajax({
						type: "POST",
						data: {Data:Data},
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\FProductSearch.html (edit that file instead) */; ?>