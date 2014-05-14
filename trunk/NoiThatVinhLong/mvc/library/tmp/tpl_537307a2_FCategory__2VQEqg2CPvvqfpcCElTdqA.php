<?php 
function tpl_537307a2_FCategory__2VQEqg2CPvvqfpcCElTdqA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div id="category-header">
					<?php /* tag "div" from line 12 */; ?>
<div class="row">
						<?php /* tag "div" from line 13 */; ?>
<div class="container"><?php echo phptal_tostring($ctx->path($ctx->Category2, 'getInfo')); ?>
</div>
					</div><!-- End .row -->
				</div><!-- End #category-header -->
				<?php /* tag "div" from line 16 */; ?>
<div id="category-breadcrumb">
					<?php /* tag "div" from line 17 */; ?>
<div class="container">
						<?php /* tag "ul" from line 18 */; ?>
<ul class="breadcrumb">
							<?php /* tag "li" from line 19 */; ?>
<li><?php /* tag "a" from line 19 */; ?>
<a href="index-2.html">Trang chủ</a></li>
							<?php /* tag "li" from line 20 */; ?>
<li><?php /* tag "a" from line 20 */; ?>
<a href="#">Electronics</a></li>
							<?php /* tag "li" from line 21 */; ?>
<li class="active">Mobile</li>
						</ul>
					</div>
				</div>
				<?php /* tag "div" from line 25 */; ?>
<div class="container">
					<?php /* tag "div" from line 26 */; ?>
<div class="row">
						<?php /* tag "div" from line 27 */; ?>
<div class="col-md-12">
							<?php /* tag "div" from line 28 */; ?>
<div class="row">
								<?php /* tag "div" from line 29 */; ?>
<div class="col-md-9 col-sm-8 col-xs-12 main-content">
									<?php /* tag "div" from line 30 */; ?>
<div class="category-toolbar clearfix">										
										<?php /* tag "div" from line 31 */; ?>
<div class="toolbox-pagination clearfix">
											<?php /* tag "ul" from line 32 */; ?>
<ul class="pagination">
												<?php 
/* tag "li" from line 33 */ ;
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
/* tag "a" from line 34 */ ;
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
										</div><!-- End .toolbox-pagination -->
									</div><!-- End .category-toolbar -->
									<?php /* tag "div" from line 39 */; ?>
<div class="md-margin"></div><!-- .space -->
									<?php /* tag "div" from line 40 */; ?>
<div class="category-item-container">
										<?php /* tag "div" from line 41 */; ?>
<div class="row">
											<?php 
/* tag "div" from line 42 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Product = new PHPTAL_RepeatController($ctx->ProductAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Product as $ctx->Product): ;
?>
<div class="col-md-4 col-sm-6 col-xs-12">
												<?php /* tag "div" from line 43 */; ?>
<div class="item">
													<?php /* tag "div" from line 44 */; ?>
<div class="item-image-container">
														<?php /* tag "figure" from line 45 */; ?>
<figure>
															<?php 
/* tag "a" from line 46 */ ;
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
/* tag "img" from line 47 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getInfo/getImage1')))):  ;
$_tmp_1 = ' src="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<img class="item-image"<?php echo $_tmp_1 ?>
/>
																<?php 
/* tag "img" from line 48 */ ;
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
														<?php /* tag "div" from line 51 */; ?>
<div class="item-price-container">															
															<?php /* tag "span" from line 52 */; ?>
<span class="item-price"><?php echo phptal_escape($ctx->path($ctx->Product, 'getPrice2Print')); ?>
</span>
														</div>														
													</div><!-- End .item-image -->
													<?php /* tag "div" from line 55 */; ?>
<div class="item-meta-container">
														<?php /* tag "div" from line 56 */; ?>
<div class="ratings-container">
															<?php /* tag "div" from line 57 */; ?>
<div class="ratings">
																<?php /* tag "div" from line 58 */; ?>
<div class="ratings-result" data-result="90"></div>
															</div><!-- End .ratings -->
															<?php /* tag "span" from line 60 */; ?>
<span class="ratings-amount">
																1 đánh giá
															</span>
														</div><!-- End .rating-container -->
														<?php /* tag "h3" from line 64 */; ?>
<h3 class="item-name"><?php 
/* tag "a" from line 64 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Product, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Product, 'getName')); ?>
</a></h3>
														<?php /* tag "div" from line 65 */; ?>
<div class="item-action">
															<?php /* tag "div" from line 66 */; ?>
<div class="item-add-btn" style="cursor:pointer">
																<?php 
/* tag "span" from line 73 */ ;
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
															<?php /* tag "div" from line 75 */; ?>
<div class="item-action-inner">
																<?php 
/* tag "span" from line 82 */ ;
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
/* tag "span" from line 91 */ ;
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
								<?php /* tag "aside" from line 102 */; ?>
<aside class="col-md-3 col-sm-4 col-xs-12 sidebar">
									<?php /* tag "div" from line 103 */; ?>
<div class="widget">
										<?php /* tag "div" from line 104 */; ?>
<div class="panel-group custom-accordion sm-accordion" id="category-filter">
											<?php /* tag "div" from line 105 */; ?>
<div class="panel">
												<?php /* tag "div" from line 106 */; ?>
<div class="accordion-header">
													<?php /* tag "div" from line 107 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 107 */; ?>
<span>Danh mục</span></div><!-- End .accordion-title -->
													<?php /* tag "a" from line 108 */; ?>
<a class="accordion-btn opened" data-toggle="collapse" data-target="#category-list-1"></a>
												</div><!-- End .accordion-header -->
												<?php /* tag "div" from line 110 */; ?>
<div id="category-list-1" class="collapse in">
													<?php /* tag "div" from line 111 */; ?>
<div class="panel-body">
														<?php /* tag "ul" from line 112 */; ?>
<ul class="category-filter-list jscrollpane">
															<?php 
/* tag "li" from line 113 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category2 = new PHPTAL_RepeatController($ctx->path($ctx->Category1, 'getCategoryAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category2 as $ctx->Category2): ;
?>
<li>
																<?php 
/* tag "a" from line 114 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Category2, 'getURLView')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 114 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category2, 'getName')); ?>
</span> (<?php /* tag "span" from line 114 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category2, 'getProductAll/count')); ?>
</span>)</a>
															</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

														</ul>
													</div><!-- End .panel-body -->
												</div><!-- #collapse -->
											</div><!-- End .panel -->
											<?php /* tag "div" from line 120 */; ?>
<div class="panel">
												<?php /* tag "div" from line 121 */; ?>
<div class="accordion-header">
													<?php /* tag "div" from line 122 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 122 */; ?>
<span>Thương hiệu</span></div><!-- End .accordion-title -->
													<?php /* tag "a" from line 123 */; ?>
<a class="accordion-btn opened" data-toggle="collapse" data-target="#category-list-2"></a>
												</div><!-- End .accordion-header -->
												<?php /* tag "div" from line 125 */; ?>
<div id="category-list-2" class="collapse in">
													<?php /* tag "div" from line 126 */; ?>
<div class="panel-body">
														<?php /* tag "ul" from line 127 */; ?>
<ul class="category-filter-list jscrollpane">
															<?php 
/* tag "li" from line 128 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->PM = new PHPTAL_RepeatController($ctx->PMAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->PM as $ctx->PM): ;
?>
<li>
																<?php 
/* tag "a" from line 129 */ ;
if (null !== ($_tmp_5 = ($ctx->Category2->getURLViewManufacturer( $ctx->PM->getIdManufacturer() )))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a<?php echo $_tmp_5 ?>
>
																	<?php /* tag "span" from line 130 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PM, 'getManufacturer/getName')); ?>
</span>
																	(<?php /* tag "span" from line 131 */; ?>
<span><?php echo phptal_escape($ctx->Category2->getProductManufacturerAll( $ctx->PM->getIdManufacturer() )->count()); ?>
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
/* tag "div" from line 147 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div><!-- End #wrapper -->		
		<?php 
/* tag "div" from line 149 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 150 */; ?>
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\FCategory.html (edit that file instead) */; ?>