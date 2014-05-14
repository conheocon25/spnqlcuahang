<?php 
function tpl_537060b2_FHome__oFJKwHBG193kWpTm_nnOEQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div id="slider-sequence" class="homeslider">
					<?php /* tag "div" from line 12 */; ?>
<div class="sequence-prev"></div>
					<?php /* tag "div" from line 13 */; ?>
<div class="sequence-next"></div>
					<?php /* tag "ul" from line 14 */; ?>
<ul class="sequence-canvas">						
						<?php 
/* tag "li" from line 15 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Slide = new PHPTAL_RepeatController($ctx->path($ctx->Presentation1, 'getSlideAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Slide as $ctx->Slide): ;
if (null !== ($_tmp_2 = ('sequence-slide' . $ctx->repeat->Slide->number))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
							<?php /* tag "div" from line 16 */; ?>
<div class="sequencebg">
								<?php 
/* tag "img" from line 17 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Slide, 'getURL')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ('sequence-slide-' . $ctx->repeat->Slide->number))):  ;
$_tmp_4 = ' alt="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img class="sequencebg-image"<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
/>
							</div>
							<?php /* tag "div" from line 19 */; ?>
<div class="sequence-container container"><?php echo phptal_tostring($ctx->path($ctx->Slide, 'getNote')); ?>
</div>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
					<?php /* tag "ul" from line 22 */; ?>
<ul class="sequence-pagination">
						<?php 
/* tag "li" from line 23 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Slide = new PHPTAL_RepeatController($ctx->path($ctx->Presentation1, 'getSlideAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Slide as $ctx->Slide): ;
?>
<li><?php echo phptal_escape('Frame ' . $ctx->repeat->Slide->number); ?>
</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
				<?php /* tag "div" from line 26 */; ?>
<div class="md-margin2x"></div><!-- Space -->
				<?php /* tag "div" from line 27 */; ?>
<div class="container">
					<?php /* tag "div" from line 28 */; ?>
<div class="row">
						<?php /* tag "div" from line 29 */; ?>
<div class="col-md-12">
							<?php /* tag "div" from line 30 */; ?>
<div class="row">
								<?php /* tag "div" from line 31 */; ?>
<div class="col-md-9 col-sm-8 col-xs-12 main-content">
									<?php /* tag "header" from line 32 */; ?>
<header class="content-title">
										<?php /* tag "h2" from line 33 */; ?>
<h2 class="title">KHUYẾN MÃI</h2>
										<?php /* tag "p" from line 34 */; ?>
<p class="title-desc"><?php echo phptal_escape($ctx->path($ctx->Save, 'getName')); ?>
</p>
									</header>
									<?php /* tag "div" from line 36 */; ?>
<div id="products-tabs-content" class="row tab-content">
										<?php /* tag "div" from line 37 */; ?>
<div class="tab-pane active" id="all">
											<?php 
/* tag "div" from line 38 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->SP = new PHPTAL_RepeatController($ctx->path($ctx->Save, 'getSPAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->SP as $ctx->SP): ;
?>
<div class="col-md-4 col-sm-6 col-xs-12">
												<?php 
/* tag "div" from line 39 */ ;
if ($ctx->path($ctx->SP, 'getInfo')):  ;
?>
<div class="item">
													<?php /* tag "div" from line 40 */; ?>
<div class="item-image-container">
														<?php /* tag "figure" from line 41 */; ?>
<figure>
															<?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->SP, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
																<?php 
/* tag "img" from line 43 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->SP, 'getInfo/getImage1')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img class="item-image"<?php echo $_tmp_1 ?>
/>
																<?php 
/* tag "img" from line 44 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->SP, 'getInfo/getImage2')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img class="item-image-hover"<?php echo $_tmp_3 ?>
/>
															</a>
														</figure>
														<?php /* tag "div" from line 47 */; ?>
<div class="item-price-container">
															<?php /* tag "span" from line 48 */; ?>
<span class="item-price"><?php echo phptal_escape($ctx->path($ctx->SP, 'getPrice2Print')); ?>
</span>
														</div>
														<?php /* tag "span" from line 50 */; ?>
<span class="new-rect">HOT</span>														
													</div><!-- End .item-image -->
													<?php /* tag "div" from line 52 */; ?>
<div class="item-meta-container">
														<?php /* tag "div" from line 53 */; ?>
<div class="ratings-container">
															<?php /* tag "div" from line 54 */; ?>
<div class="ratings">
																<?php /* tag "div" from line 55 */; ?>
<div class="ratings-result" data-result="90"></div>
															</div><!-- End .ratings -->
															<?php /* tag "span" from line 57 */; ?>
<span class="ratings-amount">
																1 đánh giá
															</span>
														</div><!-- End .rating-container -->
														<?php /* tag "h3" from line 61 */; ?>
<h3 class="item-name"><?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->SP, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->SP, 'getName')); ?>
</a></h3>
														<?php /* tag "div" from line 62 */; ?>
<div class="item-action">
															<?php /* tag "div" from line 63 */; ?>
<div class="item-add-btn">
																<?php 
/* tag "span" from line 70 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->SP, 'getId')))):  ;
$_tmp_3 = ' id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->SP, 'getName')))):  ;
$_tmp_2 = ' name="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->SP, 'getPrice2')))):  ;
$_tmp_1 = ' price="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->SP, 'getInfo/getImage1')))):  ;
$_tmp_5 = ' image="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<span class="icon-cart-text" style="cursor:pointer"<?php echo $_tmp_3 ?>
<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
<?php echo $_tmp_5 ?>
>
																	Mua ngay
																</span>
															</div>
															<?php /* tag "div" from line 74 */; ?>
<div class="item-action-inner">
																<?php 
/* tag "span" from line 81 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->SP, 'getId')))):  ;
$_tmp_3 = ' id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->SP, 'getName')))):  ;
$_tmp_2 = ' name="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->SP, 'getPrice2')))):  ;
$_tmp_1 = ' price="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->SP, 'getInfo/getImage1')))):  ;
$_tmp_5 = ' image="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<span class="icon-button icon-like" style="cursor:pointer"<?php echo $_tmp_3 ?>
<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
<?php echo $_tmp_5 ?>
>
																	Ưa thích
																</span>
																<?php 
/* tag "span" from line 90 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->SP, 'getId')))):  ;
$_tmp_3 = ' id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->SP, 'getName')))):  ;
$_tmp_2 = ' name="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->SP, 'getPrice2')))):  ;
$_tmp_1 = ' price="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->SP, 'getInfo/getImage1')))):  ;
$_tmp_5 = ' image="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<span class="icon-button icon-compare" style="cursor:pointer"<?php echo $_tmp_3 ?>
<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
<?php echo $_tmp_5 ?>
>
																	Email
																</span>
															</div><!-- End .item-action-inner -->
														</div><!-- End .item-action -->
													</div><!-- End .item-meta-container -->	
												</div><?php endif; ?>
<!-- End .item -->
											</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										</div><!-- End .tab-pane -->
									</div><!-- End #products-tabs-content -->
									
									<?php /* tag "header" from line 101 */; ?>
<header class="content-title">
										<?php /* tag "div" from line 102 */; ?>
<div class="title-bg">
											<?php /* tag "h2" from line 103 */; ?>
<h2 class="title">HÀNG MỚI VỀ</h2>
										</div><!-- End .title-bg -->
									</header>
									<?php /* tag "div" from line 106 */; ?>
<div id="products-tabs-content" class="row tab-content">
										<?php /* tag "div" from line 107 */; ?>
<div class="tab-pane active" id="all">
											<?php 
/* tag "div" from line 108 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->OID = new PHPTAL_RepeatController($ctx->OIDAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->OID as $ctx->OID): ;
?>
<div class="col-md-4 col-sm-6 col-xs-12">
												<?php /* tag "div" from line 109 */; ?>
<div class="item">
													<?php /* tag "div" from line 110 */; ?>
<div class="item-image-container">
														<?php /* tag "figure" from line 111 */; ?>
<figure>
															<?php 
/* tag "a" from line 112 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OID, 'getProduct/getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>																																
																<?php 
/* tag "img" from line 113 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->OID, 'getProduct/getInfo/getImage1')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img class="item-image"<?php echo $_tmp_1 ?>
/>
																<?php 
/* tag "img" from line 114 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->OID, 'getProduct/getInfo/getImage2')))):  ;
$_tmp_5 = ' src="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<img class="item-image-hover"<?php echo $_tmp_5 ?>
/>
															</a>
														</figure>														
														<?php /* tag "div" from line 117 */; ?>
<div class="item-price-container">
															<?php /* tag "span" from line 118 */; ?>
<span class="item-price"><?php echo phptal_escape($ctx->path($ctx->OID, 'getProduct/getPrice2Print')); ?>
</span>
														</div>
														<?php /* tag "span" from line 120 */; ?>
<span class="new-rect">MỚI</span>														
													</div><!-- End .item-image -->
													<?php /* tag "div" from line 122 */; ?>
<div class="item-meta-container">
														<?php /* tag "div" from line 123 */; ?>
<div class="ratings-container">
															<?php /* tag "div" from line 124 */; ?>
<div class="ratings">
																<?php /* tag "div" from line 125 */; ?>
<div class="ratings-result" data-result="90"></div>
															</div><!-- End .ratings -->
															<?php /* tag "span" from line 127 */; ?>
<span class="ratings-amount">
																1 đánh giá
															</span>
														</div><!-- End .rating-container -->
														<?php /* tag "h3" from line 131 */; ?>
<h3 class="item-name"><?php 
/* tag "a" from line 131 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->OID, 'getProduct/getURLView')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
><?php echo phptal_escape($ctx->path($ctx->OID, 'getProduct/getName')); ?>
</a></h3>
														<?php /* tag "div" from line 132 */; ?>
<div class="item-action">															
															<?php /* tag "div" from line 133 */; ?>
<div class="item-add-btn">
																<?php 
/* tag "span" from line 140 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->OID, 'getProduct/getId')))):  ;
$_tmp_1 = ' id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->OID, 'getProduct/getName')))):  ;
$_tmp_5 = ' name="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OID, 'getProduct/getPrice2')))):  ;
$_tmp_2 = ' price="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->OID, 'getProduct/getInfo/getImage1')))):  ;
$_tmp_4 = ' image="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<span class="icon-cart-text" style="cursor:pointer"<?php echo $_tmp_1 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_2 ?>
<?php echo $_tmp_4 ?>
>
																	Mua ngay
																</span>
															</div>															
															<?php /* tag "div" from line 144 */; ?>
<div class="item-action-inner">
																<?php 
/* tag "span" from line 151 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->OID, 'getProduct/getId')))):  ;
$_tmp_1 = ' id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->OID, 'getProduct/getName')))):  ;
$_tmp_5 = ' name="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OID, 'getProduct/getPrice2')))):  ;
$_tmp_2 = ' price="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->OID, 'getProduct/getInfo/getImage1')))):  ;
$_tmp_4 = ' image="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<span class="icon-button icon-like" style="cursor:pointer"<?php echo $_tmp_1 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_2 ?>
<?php echo $_tmp_4 ?>
>
																	Ưa thích
																</span>
																<?php 
/* tag "span" from line 160 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->OID, 'getProduct/getId')))):  ;
$_tmp_1 = ' id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->OID, 'getProduct/getName')))):  ;
$_tmp_5 = ' name="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OID, 'getProduct/getPrice2')))):  ;
$_tmp_2 = ' price="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->OID, 'getProduct/getInfo/getImage1')))):  ;
$_tmp_4 = ' image="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<span class="icon-button icon-compare" style="cursor:pointer"<?php echo $_tmp_1 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_2 ?>
<?php echo $_tmp_4 ?>
>
																	Email
																</span>
															</div>
														</div><!-- End .item-action -->
													</div><!-- End .item-meta-container -->	
												</div><!-- End .item -->
											</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										</div><!-- End .tab-pane -->
									</div><!-- End #products-tabs-content -->
									
									<?php /* tag "header" from line 171 */; ?>
<header class="content-title">
										<?php /* tag "div" from line 172 */; ?>
<div class="title-bg">
											<?php /* tag "h2" from line 173 */; ?>
<h2 class="title">BÁN CHẠY NHẤT</h2>
										</div><!-- End .title-bg -->
									</header>
									<?php /* tag "div" from line 176 */; ?>
<div id="products-tabs-content" class="row tab-content">
										<?php /* tag "div" from line 177 */; ?>
<div class="tab-pane active" id="all">
											<?php 
/* tag "div" from line 178 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->OED = new PHPTAL_RepeatController($ctx->OEDAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->OED as $ctx->OED): ;
?>
<div class="col-md-4 col-sm-6 col-xs-12">
												<?php 
/* tag "div" from line 179 */ ;
if ($ctx->path($ctx->OED, 'getProduct/getInfo')):  ;
?>
<div class="item">
													<?php /* tag "div" from line 180 */; ?>
<div class="item-image-container">
														<?php /* tag "figure" from line 181 */; ?>
<figure>
															<?php 
/* tag "a" from line 182 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->OED, 'getProduct/getURLView')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a<?php echo $_tmp_5 ?>
>																																
																<?php 
/* tag "img" from line 183 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OED, 'getProduct/getInfo/getImage1')))):  ;
$_tmp_2 = ' src="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<img class="item-image"<?php echo $_tmp_2 ?>
/>
																<?php 
/* tag "img" from line 184 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->OED, 'getProduct/getInfo/getImage2')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img class="item-image-hover"<?php echo $_tmp_4 ?>
/>
															</a>
														</figure>
														<?php /* tag "div" from line 187 */; ?>
<div class="item-price-container">
															<?php /* tag "span" from line 188 */; ?>
<span class="item-price"><?php echo phptal_escape($ctx->path($ctx->OED, 'getPricePrint')); ?>
</span>
														</div>
														<?php /* tag "span" from line 190 */; ?>
<span class="new-rect">HOT</span>
													</div><!-- End .item-image -->
													<?php /* tag "div" from line 192 */; ?>
<div class="item-meta-container">
														<?php /* tag "div" from line 193 */; ?>
<div class="ratings-container">
															<?php /* tag "div" from line 194 */; ?>
<div class="ratings">
																<?php /* tag "div" from line 195 */; ?>
<div class="ratings-result" data-result="90"></div>
															</div><!-- End .ratings -->
															<?php /* tag "span" from line 197 */; ?>
<span class="ratings-amount">
																1 đánh giá
															</span>
														</div><!-- End .rating-container -->
														<?php /* tag "h3" from line 201 */; ?>
<h3 class="item-name"><?php 
/* tag "a" from line 201 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->OED, 'getProduct/getURLView')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->OED, 'getProduct/getName')); ?>
</a></h3>
														<?php /* tag "div" from line 202 */; ?>
<div class="item-action">															
															<?php /* tag "div" from line 203 */; ?>
<div class="item-add-btn">
																<?php 
/* tag "span" from line 210 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OED, 'getProduct/getId')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->OED, 'getProduct/getName')))):  ;
$_tmp_4 = ' name="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->OED, 'getProduct/getPrice2')))):  ;
$_tmp_5 = ' price="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->OED, 'getProduct/getInfo/getImage1')))):  ;
$_tmp_3 = ' image="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<span class="icon-cart-text" style="cursor:pointer"<?php echo $_tmp_2 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_3 ?>
>
																	Mua ngay
																</span>
															</div>
															<?php /* tag "div" from line 214 */; ?>
<div class="item-action-inner">
																<?php 
/* tag "span" from line 221 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OED, 'getProduct/getId')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->OED, 'getProduct/getName')))):  ;
$_tmp_4 = ' name="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->OED, 'getProduct/getPrice2')))):  ;
$_tmp_5 = ' price="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->OED, 'getProduct/getInfo/getImage1')))):  ;
$_tmp_3 = ' image="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<span class="icon-button icon-like" style="cursor:pointer"<?php echo $_tmp_2 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_3 ?>
>
																	Ưa thích
																</span>
																<?php 
/* tag "span" from line 230 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->OED, 'getProduct/getId')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->OED, 'getProduct/getName')))):  ;
$_tmp_4 = ' name="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->OED, 'getProduct/getPrice2')))):  ;
$_tmp_5 = ' price="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->OED, 'getProduct/getInfo/getImage1')))):  ;
$_tmp_3 = ' image="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<span class="icon-button icon-compare" style="cursor:pointer"<?php echo $_tmp_2 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_3 ?>
>
																	Email
																</span>
															</div>
														</div><!-- End .item-action -->
													</div><!-- End .item-meta-container -->	
												</div><?php endif; ?>
<!-- End .item -->
											</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										</div><!-- End .tab-pane -->
									</div><!-- End #products-tabs-content -->
								</div><!-- End .col-md-9 -->

								<?php /* tag "div" from line 242 */; ?>
<div class="col-md-3 col-sm-4 col-xs-12 sidebar">
									<?php /* tag "div" from line 243 */; ?>
<div class="widget subscribe">
										<?php /* tag "p" from line 244 */; ?>
<p>Nhận thông tin và các chương trình khuyến mãi hấp dẫn</p>
										<?php /* tag "form" from line 245 */; ?>
<form action="/nhan-thong-tin" id="subscribe-form" method="post">
											<?php /* tag "div" from line 246 */; ?>
<div class="form-group">
												<?php /* tag "input" from line 247 */; ?>
<input type="email" class="form-control" id="Email" name="Email" placeholder="Email của bạn là gì?"/>
											</div>
											<?php /* tag "input" from line 249 */; ?>
<input type="submit" value="ĐĂNG KÝ" class="btn btn-custom"/>
										</form>
									</div>

									<?php /* tag "div" from line 253 */; ?>
<div class="widget testimonials">
										<?php /* tag "h3" from line 254 */; ?>
<h3>Đánh giá</h3>
										<?php /* tag "div" from line 255 */; ?>
<div class="testimonials-slider flexslider sidebarslider">
											<?php /* tag "ul" from line 256 */; ?>
<ul class="testimonials-list clearfix">
												<?php 
/* tag "li" from line 257 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->StoryLine = new PHPTAL_RepeatController($ctx->StoryLineAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->StoryLine as $ctx->StoryLine): ;
?>
<li>
													<?php /* tag "div" from line 258 */; ?>
<div class="testimonial-details">
														<?php /* tag "header" from line 259 */; ?>
<header><?php echo phptal_escape($ctx->path($ctx->StoryLine, 'getTitle')); ?>
</header>														
														<?php /* tag "span" from line 260 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->StoryLine, 'getNote')); ?>
</span>														
													</div><!-- End .testimonial-details -->
													<?php /* tag "figure" from line 262 */; ?>
<figure class="clearfix">
														<?php 
/* tag "img" from line 263 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->StoryLine, 'getImage')))):  ;
$_tmp_4 = ' src="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img<?php echo $_tmp_4 ?>
/>
														<?php /* tag "figcaption" from line 264 */; ?>
<figcaption>
															<?php /* tag "a" from line 265 */; ?>
<a href="#"><?php /* tag "span" from line 265 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->StoryLine, 'getName')); ?>
</span></a>
															<?php /* tag "span" from line 266 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->StoryLine, 'getDatePrint')); ?>
</span>
														</figcaption>
													</figure>
												</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
												
											</ul>
										</div><!-- End .testimonials-slider -->
									</div><!-- End .widget -->
									
									<?php /* tag "div" from line 274 */; ?>
<div class="widget latest-posts">
										<?php /* tag "h3" from line 275 */; ?>
<h3>Tin tức</h3>
										<?php /* tag "div" from line 276 */; ?>
<div class="latest-posts-slider flexslider sidebarslider">
											<?php /* tag "ul" from line 277 */; ?>
<ul class="latest-posts-list clearfix">
												<?php 
/* tag "li" from line 278 */ ;
$_tmp_5 = $ctx->repeat ;
$_tmp_5->PT = new PHPTAL_RepeatController($ctx->path($ctx->Tag, 'getPostTop4'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_5->PT as $ctx->PT): ;
?>
<li>
													<?php 
/* tag "a" from line 279 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->PT, 'getURLRead')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
														<?php /* tag "figure" from line 280 */; ?>
<figure class="latest-posts-media-container">
															<?php 
/* tag "img" from line 281 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PT, 'getPost/getImage')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->PT, 'getPost/getTitle')))):  ;
$_tmp_4 = ' alt="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<img<?php echo $_tmp_1 ?>
<?php echo $_tmp_4 ?>
/>
														</figure>
													</a>
													<?php /* tag "h4" from line 284 */; ?>
<h4><?php 
/* tag "a" from line 284 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PT, 'getURLRead')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PT, 'getPost/getTitle')); ?>
</a></h4>
													<?php /* tag "p" from line 285 */; ?>
<p><?php echo phptal_tostring($ctx->path($ctx->PT, 'getPost/getContentReduce')); ?>
</p>
													
													<?php /* tag "div" from line 287 */; ?>
<div class="latest-posts-meta-container clearfix">
														<?php /* tag "div" from line 288 */; ?>
<div class="pull-left">
															<?php 
/* tag "a" from line 289 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PT, 'getURLRead')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>Chi tiết...</a>
														</div><!-- End .pull-left -->
														<?php /* tag "div" from line 291 */; ?>
<div class="pull-right">
															<?php /* tag "span" from line 292 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PT, 'getPost/getTimePrint')); ?>
</span>
														</div><!-- End .pull-right -->
													</div><!-- End .latest-posts-meta-container -->
												</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</ul>
										</div><!-- End .latest-posts-slider -->
									</div><!-- End .widget -->																		
									<?php 
/* tag "div" from line 299 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/AdsService', $_thistpl) ;
$ctx->popSlots() ;
?>

								</div><!-- End .col-md-3 -->
							</div><!-- End .row -->
						</div><!-- End .col-md-12 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</section><!-- End #content -->
			<?php 
/* tag "div" from line 306 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div><!-- End #wrapper -->		
		<?php 
/* tag "div" from line 308 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 309 */; ?>
<script>
			$(function() {
				// Sequence.js Slider Plugin
				var options = {
					nextButton: true,
					prevButton: true,
					pagination:true,
					autoPlay: true,
					autoPlayDelay: 8500,
					pauseOnHover: true,
					preloader: true,
					theme: 'slide',
					speed: 700,
					animateStartingFrameIn: true
				},
				homeSlider = $('#slider-sequence').sequence(options).data("sequence");
				
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\FHome.html (edit that file instead) */; ?>