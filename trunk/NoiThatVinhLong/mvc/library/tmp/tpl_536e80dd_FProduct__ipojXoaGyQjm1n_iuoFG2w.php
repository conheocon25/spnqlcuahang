<?php 
function tpl_536e80dd_FProduct__ipojXoaGyQjm1n_iuoFG2w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
							<?php /* tag "div" from line 15 */; ?>
<div class="row">
								<?php /* tag "div" from line 16 */; ?>
<div class="col-md-6 col-sm-12 col-xs-12 product-viewer clearfix">
									<?php /* tag "div" from line 17 */; ?>
<div id="product-image-carousel-container">
										<?php /* tag "ul" from line 18 */; ?>
<ul id="product-carousel" class="celastislide-list">
											<?php /* tag "li" from line 19 */; ?>
<li class="active-slide">
												<?php 
/* tag "a" from line 20 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getImageAll/current/getURL')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-rel="prettyPhoto"<?php echo $_tmp_1 ?>
>
													<?php 
/* tag "img" from line 21 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Product, 'getImageAll/current/getURL')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img alt="Phone photo 1"<?php echo $_tmp_2 ?>
/>
												</a>
											</li>
											<?php 
/* tag "li" from line 24 */ ;
if (($ctx->Product->getImageAll()->count() > 1) ? true:false):  ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Image = new PHPTAL_RepeatController($ctx->path($ctx->Product, 'getImageAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Image as $ctx->Image): ;
?>
<li>
												<?php 
/* tag "a" from line 25 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Image, 'getURL')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-rel="prettyPhoto"<?php echo $_tmp_1 ?>
>
													<?php 
/* tag "img" from line 26 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Image, 'getURL')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img<?php echo $_tmp_3 ?>
/>
												</a>
											</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
endif ;
?>

										</ul>
									</div>
									<?php /* tag "div" from line 31 */; ?>
<div id="product-image-container">
										<?php /* tag "figure" from line 32 */; ?>
<figure>
											<?php 
/* tag "img" from line 33 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Product, 'getImageAll/current/getURL')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getImageAll/current/getURL')))):  ;
$_tmp_1 = ' data-big="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img alt="Product Big image" id="product-image"<?php echo $_tmp_3 ?>
<?php echo $_tmp_1 ?>
/>
											<?php /* tag "figcaption" from line 34 */; ?>
<figcaption class="item-price-container">
												<?php /* tag "span" from line 35 */; ?>
<span class="item-price" style="font-size:80%"><?php echo phptal_escape($ctx->path($ctx->Product, 'getPrice2Print')); ?>
</span>
											</figcaption>
										</figure>
									</div><!-- product-image-container -->
								</div><!-- End .col-md-6 -->
								<?php /* tag "div" from line 40 */; ?>
<div class="col-md-6 col-sm-12 col-xs-12 product">
									<?php /* tag "div" from line 41 */; ?>
<div class="lg-margin visible-sm visible-xs"></div><!-- Space -->
									<?php /* tag "h1" from line 42 */; ?>
<h1 class="product-name"><?php echo phptal_escape($ctx->path($ctx->Product, 'getName')); ?>
</h1>
									<?php /* tag "div" from line 43 */; ?>
<div class="ratings-container">
										<?php /* tag "div" from line 44 */; ?>
<div class="ratings separator">
											<?php /* tag "div" from line 45 */; ?>
<div class="ratings-result" data-result="70"></div>
										</div><!-- End .ratings -->
										<?php /* tag "span" from line 47 */; ?>
<span class="ratings-amount separator">
											1 Đánh giá
										</span>
										<?php /* tag "span" from line 50 */; ?>
<span class="separator">|</span>
										<?php /* tag "a" from line 51 */; ?>
<a href="#review" class="rate-this">Thêm đánh giá</a>
									</div><!-- End .rating-container -->
									<?php /* tag "ul" from line 53 */; ?>
<ul class="product-list">										
										<?php /* tag "li" from line 54 */; ?>
<li><?php /* tag "span" from line 54 */; ?>
<span>Sổ Seri:</span><?php /* tag "span" from line 54 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Product, 'getCode')); ?>
</span></li>
										<?php /* tag "li" from line 55 */; ?>
<li>
											<?php /* tag "span" from line 56 */; ?>
<span>Nhà SX:</span>
											<?php 
/* tag "span" from line 57 */ ;
if ($ctx->path($ctx->Product, 'getManufacturer')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->Product, 'getManufacturer/getName')); ?>
</span><?php endif; ?>

											<?php 
/* tag "span" from line 58 */ ;
if (!($ctx->path($ctx->Product, 'getManufacturer'))):  ;
?>
<span><?php echo 'chưa xác định'; ?>
</span><?php endif; ?>

										</li>
										<?php 
/* tag "li" from line 60 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->PA = new PHPTAL_RepeatController($ctx->path($ctx->Product, 'getAttributeAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->PA as $ctx->PA): ;
?>
<li>
											<?php /* tag "span" from line 61 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PA, 'getAttribute/getName')); ?>
</span>:
											<?php /* tag "span" from line 62 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PA, 'getValue')); ?>
</span>
										</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									</ul>
									<?php /* tag "hr" from line 65 */; ?>
<hr/>																											
									<?php /* tag "div" from line 66 */; ?>
<div class="product-add clearfix">
										<?php /* tag "div" from line 67 */; ?>
<div class="custom-quantity-input">
											<?php /* tag "input" from line 68 */; ?>
<input type="text" name="quantity" value="1"/>
											<?php /* tag "a" from line 69 */; ?>
<a href="#" onclick="return false;" class="quantity-btn quantity-input-up"><?php /* tag "i" from line 69 */; ?>
<i class="fa fa-angle-up"></i></a>
											<?php /* tag "a" from line 70 */; ?>
<a href="#" onclick="return false;" class="quantity-btn quantity-input-down"><?php /* tag "i" from line 70 */; ?>
<i class="fa fa-angle-down"></i></a>
										</div>
										<?php 
/* tag "button" from line 78 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Product, 'getId')))):  ;
$_tmp_3 = ' id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getName')))):  ;
$_tmp_1 = ' name="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Product, 'getPrice2')))):  ;
$_tmp_2 = ' price="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Product, 'getInfo/getImage1')))):  ;
$_tmp_4 = ' image="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<button class="btn btn-custom-2 icon-cart-text"<?php echo $_tmp_3 ?>
<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
<?php echo $_tmp_4 ?>
>
											THÊM VÀO GIỎ
										</button>
									</div><!-- .product-add -->
									<?php /* tag "div" from line 82 */; ?>
<div class="md-margin"></div><!-- Space -->
									<?php /* tag "div" from line 83 */; ?>
<div class="product-extra clearfix">
										<?php /* tag "div" from line 84 */; ?>
<div class="product-extra-box-container clearfix">
											<?php /* tag "div" from line 85 */; ?>
<div class="item-action-inner">
												<?php /* tag "a" from line 86 */; ?>
<a href="#" class="icon-button icon-like">Ưu thích</a>
												<?php /* tag "a" from line 87 */; ?>
<a href="#" class="icon-button icon-compare">Thanh toán</a>
											</div><!-- End .item-action-inner -->
										</div>
										<?php /* tag "div" from line 90 */; ?>
<div class="md-margin visible-xs"></div>
										<?php /* tag "div" from line 91 */; ?>
<div class="share-button-group">																				
											<?php 
/* tag "div" from line 92 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Product, 'getURLViewFull')))):  ;
$_tmp_3 = ' data-href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div class="fb-share-button" data-type="button_count"<?php echo $_tmp_3 ?>
></div>
										</div>
									</div>
								</div><!-- End .col-md-6 -->
							</div><!-- End .row -->
							<?php /* tag "div" from line 97 */; ?>
<div class="lg-margin2x"></div><!-- End .space -->
							<?php /* tag "div" from line 98 */; ?>
<div class="row">
								<?php /* tag "div" from line 99 */; ?>
<div class="col-md-12 col-sm-12 col-xs-12">
									<?php /* tag "div" from line 100 */; ?>
<div class="tab-container left product-detail-tab clearfix">
										<?php /* tag "ul" from line 101 */; ?>
<ul class="nav-tabs">
											<?php /* tag "li" from line 102 */; ?>
<li class="active"><?php /* tag "a" from line 102 */; ?>
<a href="#overview" data-toggle="tab">Giới thiệu</a></li>
											<?php /* tag "li" from line 103 */; ?>
<li><?php /* tag "a" from line 103 */; ?>
<a href="#detail" data-toggle="tab">Chi tiết</a></li>
											<?php /* tag "li" from line 104 */; ?>
<li><?php /* tag "a" from line 104 */; ?>
<a href="#facebook" data-toggle="tab">Đánh giá</a></li>
										</ul>
										<?php /* tag "div" from line 106 */; ?>
<div class="tab-content clearfix">
											<?php /* tag "div" from line 107 */; ?>
<div class="tab-pane active" id="overview">
												<?php /* tag "p" from line 108 */; ?>
<p><?php echo phptal_tostring($ctx->path($ctx->Product, 'getInfo/getInfo')); ?>
</p>
											</div><!-- End .tab-pane -->
											<?php /* tag "div" from line 110 */; ?>
<div class="tab-pane" id="detail">
												<?php /* tag "p" from line 111 */; ?>
<p>Chi tiết thông số sản phẩm </p>
											</div><!-- End .tab-pane -->
											<?php /* tag "div" from line 113 */; ?>
<div class="tab-pane" id="facebook">
												<?php 
/* tag "div" from line 118 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getURLViewFull')))):  ;
$_tmp_1 = ' data-href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div class="fb-comments" data-width="780px" data-numposts="12" data-colorscheme="light"<?php echo $_tmp_1 ?>
>
												</div>
											</div><!-- End .tab-pane -->
										</div><!-- End .tab-content -->
									</div><!-- End .tab-container -->
									<?php /* tag "div" from line 123 */; ?>
<div class="lg-margin visible-xs"></div>
								</div><!-- End .col-md-9 -->
								<?php /* tag "div" from line 125 */; ?>
<div class="lg-margin2x visible-sm visible-xs"></div>
							</div>
							<?php /* tag "div" from line 127 */; ?>
<div class="lg-margin2x"></div>
							<?php /* tag "div" from line 128 */; ?>
<div class="purchased-items-container carousel-wrapper">
								<?php /* tag "header" from line 129 */; ?>
<header class="content-title">
									<?php /* tag "div" from line 130 */; ?>
<div class="title-bg"> <?php /* tag "h2" from line 130 */; ?>
<h2 class="title">Sản phẩm cùng hãng</h2></div>
								</header>
								<?php /* tag "div" from line 132 */; ?>
<div class="carousel-controls">
									<?php /* tag "div" from line 133 */; ?>
<div id="purchased-items-slider-prev" class="carousel-btn carousel-btn-prev"></div>
									<?php /* tag "div" from line 134 */; ?>
<div id="purchased-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
								</div><!-- End .carousel-controllers -->
								<?php /* tag "div" from line 136 */; ?>
<div class="purchased-items-slider owl-carousel">
									<?php 
/* tag "div" from line 137 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->P1 = new PHPTAL_RepeatController($ctx->path($ctx->Product, 'getTopSameManufacturer'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->P1 as $ctx->P1): ;
?>
<div class="item">
										<?php /* tag "div" from line 138 */; ?>
<div class="item-image-container">
											<?php /* tag "figure" from line 139 */; ?>
<figure>												
												<?php 
/* tag "a" from line 140 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->P1, 'getURLView')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
													<?php 
/* tag "img" from line 141 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->P1, 'getInfo/getImage1')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img class="item-image"<?php echo $_tmp_3 ?>
/>
													<?php 
/* tag "img" from line 142 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->P1, 'getInfo/getImage2')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img class="item-image-hover"<?php echo $_tmp_1 ?>
/>
												</a>
											</figure>
											<?php /* tag "div" from line 145 */; ?>
<div class="item-price-container">												
												<?php /* tag "span" from line 146 */; ?>
<span class="item-price"><?php echo phptal_escape($ctx->path($ctx->P1, 'getPrice2Print')); ?>
</span>
											</div>											
										</div><!-- End .item-image -->
										<?php /* tag "div" from line 149 */; ?>
<div class="item-meta-container">
											<?php /* tag "div" from line 150 */; ?>
<div class="ratings-container">
												<?php /* tag "div" from line 151 */; ?>
<div class="ratings">
													<?php /* tag "div" from line 152 */; ?>
<div class="ratings-result" data-result="95"></div>
												</div><!-- End .ratings -->
												<?php /* tag "span" from line 154 */; ?>
<span class="ratings-amount">
													1 đánh giá
												</span>
											</div>
											<?php /* tag "h3" from line 158 */; ?>
<h3 class="item-name"><?php /* tag "a" from line 158 */; ?>
<a href="product.html"><?php echo phptal_escape($ctx->path($ctx->P1, 'getName')); ?>
</a></h3>
											<?php /* tag "div" from line 159 */; ?>
<div class="item-action">
												<?php /* tag "a" from line 160 */; ?>
<a href="#" class="item-add-btn">
													<?php /* tag "span" from line 161 */; ?>
<span class="icon-cart-text">Thêm vào giỏ</span>
												</a>
												<?php /* tag "div" from line 163 */; ?>
<div class="item-action-inner">
													<?php /* tag "a" from line 164 */; ?>
<a href="#" class="icon-button icon-like">Favourite</a>
													<?php /* tag "a" from line 165 */; ?>
<a href="#" class="icon-button icon-compare">Checkout</a>
												</div>
											</div>
										</div>
									</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
																																			
								</div>
							</div>
							<?php /* tag "div" from line 172 */; ?>
<div class="lg-margin2x"></div>
							<?php /* tag "div" from line 173 */; ?>
<div class="purchased-items-container carousel-wrapper">
								<?php /* tag "header" from line 174 */; ?>
<header class="content-title">
									<?php /* tag "div" from line 175 */; ?>
<div class="title-bg"> <?php /* tag "h2" from line 175 */; ?>
<h2 class="title">Sản phẩm gần giá</h2></div>
								</header>
								<?php /* tag "div" from line 177 */; ?>
<div class="carousel-controls">
									<?php /* tag "div" from line 178 */; ?>
<div id="purchased-items-slider-prev" class="carousel-btn carousel-btn-prev"></div>
									<?php /* tag "div" from line 179 */; ?>
<div id="purchased-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
								</div><!-- End .carousel-controllers -->
								<?php /* tag "div" from line 181 */; ?>
<div class="purchased-items-slider owl-carousel">
									<?php 
/* tag "div" from line 182 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->P1 = new PHPTAL_RepeatController($ctx->path($ctx->Product, 'getSamePriceAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->P1 as $ctx->P1): ;
?>
<div class="item">
										<?php /* tag "div" from line 183 */; ?>
<div class="item-image-container">
											<?php /* tag "figure" from line 184 */; ?>
<figure>												
												<?php 
/* tag "a" from line 185 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->P1, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
													<?php 
/* tag "img" from line 186 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->P1, 'getInfo/getImage1')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img class="item-image"<?php echo $_tmp_4 ?>
/>
													<?php 
/* tag "img" from line 187 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->P1, 'getInfo/getImage2')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img class="item-image-hover"<?php echo $_tmp_2 ?>
/>
												</a>
											</figure>
											<?php /* tag "div" from line 190 */; ?>
<div class="item-price-container">												
												<?php /* tag "span" from line 191 */; ?>
<span class="item-price"><?php echo phptal_escape($ctx->path($ctx->P1, 'getPrice2Print')); ?>
</span>
											</div>											
										</div><!-- End .item-image -->
										<?php /* tag "div" from line 194 */; ?>
<div class="item-meta-container">
											<?php /* tag "div" from line 195 */; ?>
<div class="ratings-container">
												<?php /* tag "div" from line 196 */; ?>
<div class="ratings">
													<?php /* tag "div" from line 197 */; ?>
<div class="ratings-result" data-result="95"></div>
												</div><!-- End .ratings -->
												<?php /* tag "span" from line 199 */; ?>
<span class="ratings-amount">
													1 đánh giá
												</span>
											</div><!-- End .rating-container -->
											<?php /* tag "h3" from line 203 */; ?>
<h3 class="item-name"><?php /* tag "a" from line 203 */; ?>
<a href="product.html"><?php echo phptal_escape($ctx->path($ctx->P1, 'getName')); ?>
</a></h3>
											<?php /* tag "div" from line 204 */; ?>
<div class="item-action">
												<?php /* tag "a" from line 205 */; ?>
<a href="#" class="item-add-btn">
													<?php /* tag "span" from line 206 */; ?>
<span class="icon-cart-text">Thêm vào giỏ</span>
												</a>
												<?php /* tag "div" from line 208 */; ?>
<div class="item-action-inner">
													<?php /* tag "a" from line 209 */; ?>
<a href="#" class="icon-button icon-like">Favourite</a>
													<?php /* tag "a" from line 210 */; ?>
<a href="#" class="icon-button icon-compare">Checkout</a>
												</div><!-- End .item-action-inner -->
											</div><!-- End .item-action -->
										</div><!-- End .item-meta-container --> 
									</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
<!-- End .item -->
																		
																		
								</div><!--purchased-items-slider -->
							</div><!-- End .purchased-items-container -->
						</div><!-- End .col-md-12 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</section><!-- End #content -->
			<?php 
/* tag "div" from line 223 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div><!-- End #wrapper -->		
		<?php 
/* tag "div" from line 225 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 226 */; ?>
<script>
			$(function() {
				var carouselContainer = $('#product-carousel'),
					productImg =  $('#product-image');
				carouselContainer.elastislide({
					orientation : 'vertical',
					minItems : 4
				});
				productImg.mlens({
					imgSrc: $("#product-image").attr("data-big"),         
					lensShape: "square",
					lensSize: 150,
					borderSize: 4,
					borderColor: "#999",
					borderRadius: 0
				});
				var oldImg = productImg.attr('src');
				carouselContainer.find('li').on('mouseover', function() {
					var newImg = $(this).find('a').attr('href');
					productImg.attr({'src': newImg, 'data-big': newImg}).trigger('imagechanged');
				});
				productImg.on('imagechanged', function() {
					productImg.mlens("update", 0 ,{
						imgSrc: productImg.attr("data-big"),
						lensShape: "square",
						lensSize: 150,
						borderSize: 4,
						borderColor: "#999"
					});
				});
				
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

			});
		</script>
		<?php /* tag "script" from line 277 */; ?>
<script>/*<![CDATA[*/(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=525611617524479";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		/*]]>*/</script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\FProduct.html (edit that file instead) */; ?>