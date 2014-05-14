<?php 
function tpl_536a2702_FDealer__xCQUqGSaPae6jrLpKFj3zw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
$_tmp_1->Slide = new PHPTAL_RepeatController($ctx->path($ctx->Presentation, 'getSlideAll'))
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
$_tmp_3->Slide = new PHPTAL_RepeatController($ctx->path($ctx->Presentation, 'getSlideAll'))
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
									<?php /* tag "div" from line 32 */; ?>
<div class="category-toolbar clearfix">										
										<?php /* tag "div" from line 33 */; ?>
<div class="toolbox-pagination clearfix">
											<!--
											<ul class="pagination">
												<li tal:repeat="P PN/getPages" tal:attributes="class php: (P->getId()==Page)?'active':''">
													<a tal:attributes="href P/getURL" tal:content="P/getName" />
												</li>
											</ul>
											!-->											
										</div><!-- End .toolbox-pagination -->
									</div><!-- End .category-toolbar -->
									<?php /* tag "div" from line 43 */; ?>
<div class="md-margin"></div><!-- .space -->
									<?php /* tag "div" from line 44 */; ?>
<div class="category-item-container">
										<?php /* tag "div" from line 45 */; ?>
<div class="row">
											<?php 
/* tag "div" from line 46 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Product = new PHPTAL_RepeatController($ctx->PSAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Product as $ctx->Product): ;
?>
<div class="col-md-4 col-sm-6 col-xs-12">
												<?php /* tag "div" from line 47 */; ?>
<div class="item">
													<?php /* tag "div" from line 48 */; ?>
<div class="item-image-container">
														<?php /* tag "figure" from line 49 */; ?>
<figure>
															<?php 
/* tag "a" from line 50 */ ;
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
/* tag "img" from line 51 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getInfo/getImage1')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img class="item-image"<?php echo $_tmp_1 ?>
/>
																<?php 
/* tag "img" from line 52 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Product, 'getInfo/getImage2')))):  ;
$_tmp_3 = ' src="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<img class="item-image-hover"<?php echo $_tmp_3 ?>
/>
															</a><?php endif; ?>

														</figure>
														<?php /* tag "div" from line 55 */; ?>
<div class="item-price-container">															
															<?php /* tag "span" from line 56 */; ?>
<span class="item-price"><?php echo phptal_escape($ctx->path($ctx->Product, 'getPrice1Print')); ?>
</span>
														</div>
													</div><!-- End .item-image -->
													<?php /* tag "div" from line 59 */; ?>
<div class="item-meta-container">
														<?php /* tag "div" from line 60 */; ?>
<div class="ratings-container">
															<?php /* tag "div" from line 61 */; ?>
<div class="ratings">
																<?php /* tag "div" from line 62 */; ?>
<div class="ratings-result" data-result="90"></div>
															</div><!-- End .ratings -->
															<?php /* tag "span" from line 64 */; ?>
<span class="ratings-amount">
																1 đánh giá
															</span>
														</div><!-- End .rating-container -->
														<?php /* tag "h3" from line 68 */; ?>
<h3 class="item-name"><?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Product, 'getName')); ?>
</a></h3>
														<?php /* tag "div" from line 69 */; ?>
<div class="item-action">
															<?php /* tag "a" from line 70 */; ?>
<a href="#" class="item-add-btn">
																<?php /* tag "span" from line 71 */; ?>
<span class="icon-cart-text">Mua ngay</span>
															</a>
															<?php /* tag "div" from line 73 */; ?>
<div class="item-action-inner">
																<?php /* tag "a" from line 74 */; ?>
<a href="#" class="icon-button icon-like">Favourite</a>
																<?php /* tag "a" from line 75 */; ?>
<a href="#" class="icon-button icon-compare">Checkout</a>
															</div><!-- End .item-action-inner -->
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
								<?php /* tag "aside" from line 84 */; ?>
<aside class="col-md-3 col-sm-4 col-xs-12 sidebar">
									<?php /* tag "div" from line 85 */; ?>
<div class="widget">
										<?php /* tag "div" from line 86 */; ?>
<div class="panel-group custom-accordion sm-accordion" id="category-filter">
											<?php /* tag "div" from line 87 */; ?>
<div class="panel">
												<?php /* tag "div" from line 88 */; ?>
<div class="accordion-header">
													<?php /* tag "div" from line 89 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 89 */; ?>
<span>Danh mục</span></div><!-- End .accordion-title -->
													<?php /* tag "a" from line 90 */; ?>
<a class="accordion-btn opened" data-toggle="collapse" data-target="#category-list-1"></a>
												</div><!-- End .accordion-header -->
												<?php /* tag "div" from line 92 */; ?>
<div id="category-list-1" class="collapse in">
													<?php /* tag "div" from line 93 */; ?>
<div class="panel-body">
														<?php /* tag "ul" from line 94 */; ?>
<ul class="category-filter-list jscrollpane">
															<?php 
/* tag "li" from line 95 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->SC = new PHPTAL_RepeatController($ctx->path($ctx->Save, 'getSCAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->SC as $ctx->SC): ;
?>
<li>
																<?php 
/* tag "a" from line 96 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->SC, 'getCategory/getURLViewSave')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 96 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->SC, 'getCategory/getName')); ?>
</span> 
																	(<?php /* tag "span" from line 97 */; ?>
<span><?php echo phptal_escape($ctx->Save->getSPCAll( $ctx->SC->getIdCategory() )->count()); ?>
</span>)
																</a>
															</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

														</ul>
													</div><!-- End .panel-body -->
												</div><!-- #collapse -->
											</div><!-- End .panel -->
											<?php /* tag "div" from line 104 */; ?>
<div class="panel">
												<?php /* tag "div" from line 105 */; ?>
<div class="accordion-header">
													<?php /* tag "div" from line 106 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 106 */; ?>
<span>Thương hiệu</span></div><!-- End .accordion-title -->
													<?php /* tag "a" from line 107 */; ?>
<a class="accordion-btn opened" data-toggle="collapse" data-target="#category-list-2"></a>
												</div><!-- End .accordion-header -->
												<?php /* tag "div" from line 109 */; ?>
<div id="category-list-2" class="collapse in">
													<?php /* tag "div" from line 110 */; ?>
<div class="panel-body">
														<?php /* tag "ul" from line 111 */; ?>
<ul class="category-filter-list jscrollpane">
															<?php 
/* tag "li" from line 112 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PM = new PHPTAL_RepeatController($ctx->PMAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PM as $ctx->PM): ;
?>
<li>
																<?php 
/* tag "a" from line 113 */ ;
if (null !== ($_tmp_4 = ($ctx->Save->getURLViewManufacturer( $ctx->PM->getIdManufacturer() )))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
>
																	<?php /* tag "span" from line 114 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PM, 'getManufacturer/getName')); ?>
</span> (<?php /* tag "span" from line 114 */; ?>
<span><?php echo phptal_escape($ctx->Save->getSPMAll( $ctx->PM->getIdManufacturer() )->count()); ?>
</span>)
																</a>
															</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

														</ul>
													</div><!-- End .panel-body -->
												</div><!-- #collapse -->
											</div><!-- End .panel -->											
										</div><!-- .panel-group -->
									</div><!-- End .widget -->																		
								</aside><!-- End .col-md-3 -->
							</div><!-- End .row -->
						</div><!-- End .col-md-12 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</section><!-- End #content -->
			<?php 
/* tag "div" from line 129 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div><!-- End #wrapper -->		
		<?php 
/* tag "div" from line 131 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 132 */; ?>
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
			});
		</script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\FDealer.html (edit that file instead) */; ?>