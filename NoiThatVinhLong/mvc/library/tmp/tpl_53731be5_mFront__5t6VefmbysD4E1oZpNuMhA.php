<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_AdsService(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="widget banner-slider-container">
		<?php /* tag "div" from line 540 */; ?>
<div class="banner-slider flexslider">
			<?php /* tag "ul" from line 541 */; ?>
<ul class="banner-slider-list clearfix">
				<?php 
/* tag "li" from line 542 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Slide = new PHPTAL_RepeatController($ctx->path($ctx->Presentation2, 'getSlideAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Slide as $ctx->Slide): ;
?>
<li>
					<?php 
/* tag "a" from line 543 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Slide, 'getURL')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "span" from line 544 */; ?>
<span><?php echo phptal_tostring($ctx->path($ctx->Slide, 'getNote')); ?>
</span>
					</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_OptionPanel(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="option-panel">
		<?php /* tag "div" from line 311 */; ?>
<div id="option-panel-wrapper">
			<?php /* tag "div" from line 312 */; ?>
<div id="option-panel-btn"></div><!-- End #option-panel-btn -->
			<?php /* tag "div" from line 313 */; ?>
<div id="option-panel-container">
				<?php /* tag "ul" from line 314 */; ?>
<ul id="option-panel-tabs-container" class="clearfix">
					<?php /* tag "li" from line 315 */; ?>
<li class="active"><?php /* tag "a" from line 315 */; ?>
<a href="#panel-layout" data-toggle="tab" data-panel-title="Layout"></a></li>
					<?php /* tag "li" from line 316 */; ?>
<li><?php /* tag "a" from line 316 */; ?>
<a href="#panel-home" data-toggle="tab" data-panel-title="Background Settings"></a></li>
					<?php /* tag "li" from line 317 */; ?>
<li><?php /* tag "a" from line 317 */; ?>
<a href="#panel-color" data-toggle="tab" data-panel-title="Color Settings"></a></li>
					<?php /* tag "li" from line 318 */; ?>
<li><?php /* tag "a" from line 318 */; ?>
<a href="#panel-font" data-toggle="tab" data-panel-title="Font Settings"></a></li>
					<?php /* tag "li" from line 319 */; ?>
<li><?php /* tag "a" from line 319 */; ?>
<a id="option-close" href="#"></a></li>
				</ul>
				<?php /* tag "div" from line 321 */; ?>
<div id="option-panel-title" class="clearfix">
					<?php /* tag "span" from line 322 */; ?>
<span>Layout</span>
					<?php /* tag "a" from line 323 */; ?>
<a href="#" id="option-panel-reset">Reset</a>
				</div>
				<?php /* tag "div" from line 325 */; ?>
<div id="option-panel-content" class="tab-content">
					<?php /* tag "div" from line 326 */; ?>
<div class="tab-pane fade in active" id="panel-layout">
						<?php /* tag "div" from line 327 */; ?>
<div id="panel-option-layout" class="panel-group custom-accordion sm-accordion">
							<?php /* tag "div" from line 328 */; ?>
<div class="panel">
								<?php /* tag "div" from line 329 */; ?>
<div class="accordion-header">
									<?php /* tag "div" from line 330 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 330 */; ?>
<span>Layout</span></div><!-- End .accordion-title -->
									<?php /* tag "a" from line 331 */; ?>
<a class="accordion-btn opened" data-toggle="collapse" data-target="#document-layout" data-parent="#panel-option-layout"></a>
								</div><!-- End .accordion-header -->

								<?php /* tag "div" from line 334 */; ?>
<div id="document-layout" class="collapse in">
									<?php /* tag "div" from line 335 */; ?>
<div class="panel-body">
										<?php /* tag "ul" from line 336 */; ?>
<ul class="layout-style-list clearfix">
											<?php /* tag "li" from line 337 */; ?>
<li data-layout="fullwidth">
												<?php /* tag "img" from line 338 */; ?>
<img src="/mvc/templates/front/images/panel/fullwidth.png" alt="Fullwidth"/>
												<?php /* tag "p" from line 339 */; ?>
<p>Fullwidth</p>
											</li>
											<?php /* tag "li" from line 341 */; ?>
<li data-layout="boxed">
												<?php /* tag "img" from line 342 */; ?>
<img src="/mvc/templates/front/images/panel/boxed.png" alt="Boxed"/>
												<?php /* tag "p" from line 343 */; ?>
<p>Boxed</p>
											</li>
										</ul>
									</div><!-- End .panel-body -->
								</div><!-- #collapse -->
							</div><!-- End .panel -->
						</div><!-- .panel-group -->
					</div><!-- End .tab-pane -->
					<?php /* tag "div" from line 351 */; ?>
<div class="tab-pane fade" id="panel-home">
						<?php /* tag "div" from line 352 */; ?>
<div id="panel-home-accordion" class="panel-group custom-accordion sm-accordion">
							<?php /* tag "div" from line 353 */; ?>
<div class="panel">
								<?php /* tag "div" from line 354 */; ?>
<div class="accordion-header">
									<?php /* tag "div" from line 355 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 355 */; ?>
<span>Basic Color</span></div><!-- End .accordion-title -->
									<?php /* tag "a" from line 356 */; ?>
<a class="accordion-btn opened" data-toggle="collapse" data-target="#body-background-color" data-parent="#panel-home-accordion"></a>
								</div><!-- End .accordion-header -->

								<?php /* tag "div" from line 359 */; ?>
<div id="body-background-color" class="collapse in">
									<?php /* tag "div" from line 360 */; ?>
<div class="panel-body">
										<?php /* tag "div" from line 361 */; ?>
<div id="panel-color-picker">
										</div><!-- End #panel-color-picker -->
									</div><!-- End .panel-body -->
								</div><!-- #collapse -->
							</div><!-- End .panel -->
							<?php /* tag "div" from line 366 */; ?>
<div class="panel">
								<?php /* tag "div" from line 367 */; ?>
<div class="accordion-header">
									<?php /* tag "div" from line 368 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 368 */; ?>
<span>Patterns</span></div><!-- End .accordion-title -->
									<?php /* tag "a" from line 369 */; ?>
<a class="accordion-btn" data-toggle="collapse" data-target="#body-background-pattern" data-parent="#panel-home-accordion"></a>
								</div><!-- End .accordion-header -->
								<?php /* tag "div" from line 371 */; ?>
<div id="body-background-pattern" class="collapse">
									<?php /* tag "div" from line 372 */; ?>
<div class="panel-body">
										<?php /* tag "ul" from line 373 */; ?>
<ul class="clearfix pattern-box-list">
											<?php /* tag "li" from line 374 */; ?>
<li><?php /* tag "img" from line 374 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern1.png" src="/mvc/templates/front/images/patterns/pattern1.png" alt="pattern 1"/></li>
											<?php /* tag "li" from line 375 */; ?>
<li><?php /* tag "img" from line 375 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern2.png" src="/mvc/templates/front/images/patterns/pattern2.png" alt="pattern 2"/></li>
											<?php /* tag "li" from line 376 */; ?>
<li><?php /* tag "img" from line 376 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern3.png" src="/mvc/templates/front/images/patterns/pattern3.png" alt="pattern 3"/></li>
											<?php /* tag "li" from line 377 */; ?>
<li><?php /* tag "img" from line 377 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern4.png" src="/mvc/templates/front/images/patterns/pattern4.png" alt="pattern 4"/></li>
											<?php /* tag "li" from line 378 */; ?>
<li><?php /* tag "img" from line 378 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern5.png" src="/mvc/templates/front/images/patterns/pattern5.png" alt="pattern 5"/></li>
											<?php /* tag "li" from line 379 */; ?>
<li><?php /* tag "img" from line 379 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern6.png" src="/mvc/templates/front/images/patterns/pattern6.png" alt="pattern 6"/></li>
											<?php /* tag "li" from line 380 */; ?>
<li><?php /* tag "img" from line 380 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern7.png" src="/mvc/templates/front/images/patterns/pattern7.png" alt="pattern 7"/></li>
											<?php /* tag "li" from line 381 */; ?>
<li><?php /* tag "img" from line 381 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern8.png" src="/mvc/templates/front/images/patterns/pattern8.png" alt="pattern 8"/></li>
											<?php /* tag "li" from line 382 */; ?>
<li><?php /* tag "img" from line 382 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern9.png" src="/mvc/templates/front/images/patterns/pattern9.png" alt="pattern 9"/></li>
											<?php /* tag "li" from line 383 */; ?>
<li><?php /* tag "img" from line 383 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern10.png" src="/mvc/templates/front/images/patterns/pattern10.png" alt="pattern 10"/></li>
											<?php /* tag "li" from line 384 */; ?>
<li><?php /* tag "img" from line 384 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern11.png" src="/mvc/templates/front/images/patterns/pattern11.png" alt="pattern 11"/></li>
											<?php /* tag "li" from line 385 */; ?>
<li><?php /* tag "img" from line 385 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern12.png" src="/mvc/templates/front/images/patterns/pattern12.png" alt="pattern 12"/></li>
											<?php /* tag "li" from line 386 */; ?>
<li><?php /* tag "img" from line 386 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern13.png" src="/mvc/templates/front/images/patterns/pattern13.png" alt="pattern 13"/></li>
											<?php /* tag "li" from line 387 */; ?>
<li><?php /* tag "img" from line 387 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern14.png" src="/mvc/templates/front/images/patterns/pattern14.png" alt="pattern 14"/></li>
											<?php /* tag "li" from line 388 */; ?>
<li><?php /* tag "img" from line 388 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern15.png" src="/mvc/templates/front/images/patterns/pattern15.png" alt="pattern 15"/></li>
											<?php /* tag "li" from line 389 */; ?>
<li><?php /* tag "img" from line 389 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern16.png" src="/mvc/templates/front/images/patterns/pattern16.png" alt="pattern 16"/></li>
											<?php /* tag "li" from line 390 */; ?>
<li><?php /* tag "img" from line 390 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern17.png" src="/mvc/templates/front/images/patterns/pattern17.png" alt="pattern 17"/></li>
											<?php /* tag "li" from line 391 */; ?>
<li><?php /* tag "img" from line 391 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern18.png" src="/mvc/templates/front/images/patterns/pattern18.png" alt="pattern 18"/></li>
											<?php /* tag "li" from line 392 */; ?>
<li><?php /* tag "img" from line 392 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern19.png" src="/mvc/templates/front/images/patterns/pattern19.png" alt="pattern 19"/></li>
											<?php /* tag "li" from line 393 */; ?>
<li><?php /* tag "img" from line 393 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern20.png" src="/mvc/templates/front/images/patterns/pattern20.png" alt="pattern 20"/></li>
											<?php /* tag "li" from line 394 */; ?>
<li><?php /* tag "img" from line 394 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern21.png" src="/mvc/templates/front/images/patterns/pattern21.png" alt="pattern 21"/></li>
											<?php /* tag "li" from line 395 */; ?>
<li><?php /* tag "img" from line 395 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern22.png" src="/mvc/templates/front/images/patterns/pattern22.png" alt="pattern 22"/></li>
											<?php /* tag "li" from line 396 */; ?>
<li><?php /* tag "img" from line 396 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern23.png" src="/mvc/templates/front/images/patterns/pattern23.png" alt="pattern 23"/></li>
											<?php /* tag "li" from line 397 */; ?>
<li><?php /* tag "img" from line 397 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern24.png" src="/mvc/templates/front/images/patterns/pattern24.png" alt="pattern 24"/></li>
											<?php /* tag "li" from line 398 */; ?>
<li><?php /* tag "img" from line 398 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern25.png" src="/mvc/templates/front/images/patterns/pattern25.png" alt="pattern 25"/></li>
											<?php /* tag "li" from line 399 */; ?>
<li><?php /* tag "img" from line 399 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern26.png" src="/mvc/templates/front/images/patterns/pattern26.png" alt="pattern 26"/></li>
											<?php /* tag "li" from line 400 */; ?>
<li><?php /* tag "img" from line 400 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern27.png" src="/mvc/templates/front/images/patterns/pattern27.png" alt="pattern 27"/></li>
											<?php /* tag "li" from line 401 */; ?>
<li><?php /* tag "img" from line 401 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern28.png" src="/mvc/templates/front/images/patterns/pattern28.png" alt="pattern 28"/></li>
											<?php /* tag "li" from line 402 */; ?>
<li><?php /* tag "img" from line 402 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern29.png" src="/mvc/templates/front/images/patterns/pattern29.png" alt="pattern 29"/></li>
											<?php /* tag "li" from line 403 */; ?>
<li><?php /* tag "img" from line 403 */; ?>
<img data-src="/mvc/templates/front/images/patterns/pattern30.png" src="/mvc/templates/front/images/patterns/pattern30.png" alt="pattern 30"/></li>
										</ul>
									</div><!-- End .panel-body -->
								</div><!-- #collapse -->
							</div><!-- End .panel -->
						</div><!-- .panel-group -->
					</div><!-- End .tab-pane -->
					<?php /* tag "div" from line 410 */; ?>
<div class="tab-pane fade" id="panel-color">
						<?php /* tag "div" from line 411 */; ?>
<div id="panel-color-accordion" class="panel-group custom-accordion sm-accordion">
							<?php /* tag "div" from line 412 */; ?>
<div class="panel">
								<?php /* tag "div" from line 413 */; ?>
<div class="accordion-header">
									<?php /* tag "div" from line 414 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 414 */; ?>
<span>Green Mode</span></div><!-- End .accordion-title -->
									<?php /* tag "a" from line 415 */; ?>
<a class="accordion-btn opened" data-toggle="collapse" data-target="#color-mode" data-parent="#panel-color-accordion"></a>
								</div><!-- End .accordion-header -->
								<?php /* tag "ul" from line 417 */; ?>
<ul class="colorbox-list clearfix collapse in" id="color-mode">
									<?php /* tag "li" from line 418 */; ?>
<li>
										<?php /* tag "div" from line 419 */; ?>
<div class="color-box first-color">
											<?php /* tag "span" from line 420 */; ?>
<span></span>
										</div>
										<?php /* tag "p" from line 422 */; ?>
<p>First Color</p>
									</li>
									<?php /* tag "li" from line 424 */; ?>
<li>
										<?php /* tag "div" from line 425 */; ?>
<div class="color-box second-color">
											<?php /* tag "span" from line 426 */; ?>
<span></span>
										</div>
										<?php /* tag "p" from line 428 */; ?>
<p>Second Color</p>
									</li>
									<?php /* tag "li" from line 430 */; ?>
<li>
										<?php /* tag "div" from line 431 */; ?>
<div class="color-box third-color">
											<?php /* tag "span" from line 432 */; ?>
<span></span>
										</div>
										<?php /* tag "p" from line 434 */; ?>
<p>Third Color</p>
									</li>
									<?php /* tag "li" from line 436 */; ?>
<li>
										<?php /* tag "div" from line 437 */; ?>
<div class="color-box fourth-color">
											<?php /* tag "span" from line 438 */; ?>
<span></span>
										</div>
										<?php /* tag "p" from line 440 */; ?>
<p>Fourth Color</p>
									</li>
								</ul>
							</div><!-- .panel -->
						</div><!-- #panel-color-accordion -->
					</div><!-- End .tab-pane -->
					<?php /* tag "div" from line 446 */; ?>
<div class="tab-pane fade" id="panel-font">
						<?php /* tag "div" from line 447 */; ?>
<div id="panel-font-accordion" class="panel-group custom-accordion sm-accordion">
							<?php /* tag "div" from line 448 */; ?>
<div class="panel">
								<?php /* tag "div" from line 449 */; ?>
<div class="accordion-header">
									<?php /* tag "div" from line 450 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 450 */; ?>
<span>First Font</span></div><!-- End .accordion-title -->
									<?php /* tag "a" from line 451 */; ?>
<a class="accordion-btn opened" data-toggle="collapse" data-target="#first-font-container" data-parent="#panel-font-accordion"></a>
								</div><!-- End .accordion-header -->
								<?php /* tag "div" from line 453 */; ?>
<div class="collapse in" id="first-font-container">
									<?php /* tag "select" from line 454 */; ?>
<select class="form-control" name="first-font" id="first-font">
										<?php /* tag "option" from line 455 */; ?>
<option value="Arial">Arial</option>
										<?php /* tag "option" from line 456 */; ?>
<option value="Open Sans">Open Sans</option>
										<?php /* tag "option" from line 457 */; ?>
<option value="PT Sans">PT Sans</option>
										<?php /* tag "option" from line 458 */; ?>
<option value="Lato">Lato</option>
										<?php /* tag "option" from line 459 */; ?>
<option value="Roboto">Roboto</option>
										<?php /* tag "option" from line 460 */; ?>
<option value="Droid Sans">Droid Sans</option>
										<?php /* tag "option" from line 461 */; ?>
<option value="Ubuntu">Ubuntu</option>
										<?php /* tag "option" from line 462 */; ?>
<option value="Arvo">Arvo</option>
										<?php /* tag "option" from line 463 */; ?>
<option value="Droid Serif">Ubuntu</option>
										<?php /* tag "option" from line 464 */; ?>
<option value="Nunito">Nunito</option>
									</select>
								</div><!-- End #first-font-container -->
							</div><!-- .panel -->
							<?php /* tag "div" from line 468 */; ?>
<div class="panel">
								<?php /* tag "div" from line 469 */; ?>
<div class="accordion-header">
									<?php /* tag "div" from line 470 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 470 */; ?>
<span>Second Font</span></div><!-- End .accordion-title -->
									<?php /* tag "a" from line 471 */; ?>
<a class="accordion-btn" data-toggle="collapse" data-target="#second-font-container" data-parent="#panel-font-accordion"></a>
								</div><!-- End .accordion-header -->
								<?php /* tag "div" from line 473 */; ?>
<div class="collapse" id="second-font-container">
									<?php /* tag "select" from line 474 */; ?>
<select class="form-control" name="second-font" id="second-font">
										<?php /* tag "option" from line 475 */; ?>
<option value="Oswald">Oswald</option>
										<?php /* tag "option" from line 476 */; ?>
<option value="Gudea">Gudea</option>
										<?php /* tag "option" from line 477 */; ?>
<option value="Open Sans">Open Sans</option>
										<?php /* tag "option" from line 478 */; ?>
<option value="PT Sans">PT Sans</option>
										<?php /* tag "option" from line 479 */; ?>
<option value="Lato">Lato</option>
										<?php /* tag "option" from line 480 */; ?>
<option value="Roboto">Roboto</option>
										<?php /* tag "option" from line 481 */; ?>
<option value="Droid Sans">Droid Sans</option>
										<?php /* tag "option" from line 482 */; ?>
<option value="Ubuntu">Ubuntu</option>
										<?php /* tag "option" from line 483 */; ?>
<option value="Arvo">Arvo</option>
										<?php /* tag "option" from line 484 */; ?>
<option value="Droid Serif">Droid Serif</option>
										<?php /* tag "option" from line 485 */; ?>
<option value="Nunito">Nunito</option>
									</select>
								</div><!-- End #second-font-container -->
							</div><!-- .panel -->
							<?php /* tag "div" from line 489 */; ?>
<div class="panel">
								<?php /* tag "div" from line 490 */; ?>
<div class="accordion-header">
									<?php /* tag "div" from line 491 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 491 */; ?>
<span>Third Font</span></div><!-- End .accordion-title -->
									<?php /* tag "a" from line 492 */; ?>
<a class="accordion-btn" data-toggle="collapse" data-target="#third-font-container" data-parent="#panel-font-accordion"></a>
								</div><!-- End .accordion-header -->
								<?php /* tag "div" from line 494 */; ?>
<div class="collapse" id="third-font-container">
									<?php /* tag "select" from line 495 */; ?>
<select class="form-control" name="third-font" id="third-font">
										<?php /* tag "option" from line 496 */; ?>
<option value="PT Sans">PT Sans</option>
										<?php /* tag "option" from line 497 */; ?>
<option value="Gudea">Gudea</option>
										<?php /* tag "option" from line 498 */; ?>
<option value="Open Sans">Open Sans</option>
										<?php /* tag "option" from line 499 */; ?>
<option value="Lato">Lato</option>
										<?php /* tag "option" from line 500 */; ?>
<option value="Roboto">Roboto</option>
										<?php /* tag "option" from line 501 */; ?>
<option value="Droid Sans">Droid Sans</option>
										<?php /* tag "option" from line 502 */; ?>
<option value="Ubuntu">Ubuntu</option>
										<?php /* tag "option" from line 503 */; ?>
<option value="Arvo">Arvo</option>
										<?php /* tag "option" from line 504 */; ?>
<option value="Droid Serif">Droid Serif</option>
										<?php /* tag "option" from line 505 */; ?>
<option value="Nunito">Nunito</option>
									</select>
								</div><!-- End #third-font-container -->
							</div><!-- .panel -->
							<?php /* tag "div" from line 509 */; ?>
<div class="panel">
								<?php /* tag "div" from line 510 */; ?>
<div class="accordion-header">
									<?php /* tag "div" from line 511 */; ?>
<div class="accordion-title"><?php /* tag "span" from line 511 */; ?>
<span>Fourth Font</span></div><!-- End .accordion-title -->
									<?php /* tag "a" from line 512 */; ?>
<a class="accordion-btn" data-toggle="collapse" data-target="#fourth-font-container" data-parent="#panel-font-accordion"></a>
								</div><!-- End .accordion-header -->
								<?php /* tag "div" from line 514 */; ?>
<div class="collapse" id="fourth-font-container">
									<?php /* tag "select" from line 515 */; ?>
<select class="form-control" name="fourth-font" id="fourth-font">
										<?php /* tag "option" from line 516 */; ?>
<option value="Gudea">Gudea</option>
										<?php /* tag "option" from line 517 */; ?>
<option value="Open Sans">Open Sans</option>
										<?php /* tag "option" from line 518 */; ?>
<option value="PT Sans">PT Sans</option>
										<?php /* tag "option" from line 519 */; ?>
<option value="Lato">Lato</option>
										<?php /* tag "option" from line 520 */; ?>
<option value="Roboto">Roboto</option>
										<?php /* tag "option" from line 521 */; ?>
<option value="Droid Sans">Droid Sans</option>
										<?php /* tag "option" from line 522 */; ?>
<option value="Ubuntu">Ubuntu</option>
										<?php /* tag "option" from line 523 */; ?>
<option value="Arvo">Arvo</option>
										<?php /* tag "option" from line 524 */; ?>
<option value="Droid Serif">Droid Serif</option>
										<?php /* tag "option" from line 525 */; ?>
<option value="Nunito">Nunito</option>
									</select>
								</div><!-- End #fourth-font-container -->
							</div><!-- .panel -->
						</div><!-- End .panel-font-accordion -->
					</div><!-- End .tab-pane -->
				</div><!-- End .tab-content -->
			</div><!-- End #option-panel-container -->
		</div><!-- End #option-panel-wrapper -->
	</div><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<footer id="footer">
		<?php /* tag "div" from line 258 */; ?>
<div id="inner-footer">
			<?php /* tag "div" from line 259 */; ?>
<div class="container">
				<?php /* tag "div" from line 260 */; ?>
<div class="row">
					<?php /* tag "div" from line 261 */; ?>
<div class="col-md-4 col-sm-4 col-xs-12 widget">
						<?php /* tag "h3" from line 262 */; ?>
<h3>Trụ sở chính</h3>
						<?php /* tag "ul" from line 263 */; ?>
<ul class="contact-list">
							<?php /* tag "li" from line 264 */; ?>
<li><?php /* tag "strong" from line 264 */; ?>
<strong>Trung tâm Nội Thất Vĩnh Long</strong></li>
							<?php /* tag "li" from line 265 */; ?>
<li>33/5 Phạm Thái Bường F4 TP.Vĩnh Long</li>							
							<?php /* tag "li" from line 266 */; ?>
<li>Làm việc tất cả các ngày trong tuần</li>
							<?php /* tag "li" from line 267 */; ?>
<li>Giờ mở cửa: 8.00AM - 21.00PM</li>
						</ul>
					</div>
					<?php /* tag "div" from line 270 */; ?>
<div class="col-md-5 col-sm-4 col-xs-12 widget">
						<?php /* tag "h3" from line 271 */; ?>
<h3>Hệ thống siêu thị</h3>
						<?php /* tag "ul" from line 272 */; ?>
<ul class="links">
							<?php 
/* tag "li" from line 273 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Branch = new PHPTAL_RepeatController($ctx->BranchAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Branch as $ctx->Branch): ;
?>
<li>
								<?php /* tag "span" from line 274 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Branch, 'getName')); ?>
</span>: <?php /* tag "span" from line 274 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Branch, 'getAddress')); ?>
</span>
							</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</ul>
					</div>					
					<?php /* tag "div" from line 278 */; ?>
<div class="col-md-3 col-sm-12 col-xs-12 widget">
						<?php /* tag "h3" from line 279 */; ?>
<h3>FACEBOOK</h3>
						<?php /* tag "div" from line 280 */; ?>
<div class="facebook-likebox">
							<?php /* tag "iframe" from line 281 */; ?>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fdienmayminhhoang&amp;width&amp;height=258&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:258px;" allowTransparency="true"></iframe>
						</div>
					</div><!-- End .widget -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div><!-- End #inner-footer -->
		<?php /* tag "div" from line 287 */; ?>
<div id="footer-bottom">
			<?php /* tag "div" from line 288 */; ?>
<div class="container">
				<?php /* tag "div" from line 289 */; ?>
<div class="row">
					<?php /* tag "div" from line 290 */; ?>
<div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
						<?php /* tag "ul" from line 291 */; ?>
<ul class="social-links clearfix">
							<?php /* tag "li" from line 292 */; ?>
<li><?php /* tag "a" from line 292 */; ?>
<a href="https://facebook.com/dienmayminhhoang" class="social-icon icon-facebook"></a></li>
							<?php /* tag "li" from line 293 */; ?>
<li><?php /* tag "a" from line 293 */; ?>
<a href="#" class="social-icon icon-rss"></a></li>							
							<?php /* tag "li" from line 294 */; ?>
<li><?php /* tag "a" from line 294 */; ?>
<a href="#" class="social-icon icon-skype"></a></li>
							<?php /* tag "li" from line 295 */; ?>
<li><?php /* tag "a" from line 295 */; ?>
<a href="/lien-he" class="social-icon icon-email"></a></li>
						</ul>
					</div><!-- End .col-md-7 -->
					<?php /* tag "div" from line 298 */; ?>
<div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
						<?php /* tag "p" from line 299 */; ?>
<p>&copy; 2014, SPN Soft&trade;</p>
					</div><!-- End .col-md-5 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div><!-- End #footer-bottom -->
		<?php /* tag "a" from line 304 */; ?>
<a href="#" id="scroll-top" title="Scroll to Top"><?php /* tag "i" from line 304 */; ?>
<i class="fa fa-angle-up"></i></a>
	</footer><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_LocationBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="breadcrumb-container">
		<?php /* tag "div" from line 243 */; ?>
<div class="container">
			<?php /* tag "ul" from line 244 */; ?>
<ul class="breadcrumb">
				<?php /* tag "li" from line 245 */; ?>
<li><?php /* tag "a" from line 245 */; ?>
<a href="/">TRANG CHỦ</a></li>
				<?php 
/* tag "li" from line 246 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Item = new PHPTAL_RepeatController($ctx->Navigation)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Item as $ctx->Item): ;
?>
<li> 
					<?php 
/* tag "a" from line 247 */ ;
if (null !== ($_tmp_1 = ($ctx->Item[1]))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->Item[0]); ?>
</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				<?php /* tag "li" from line 249 */; ?>
<li class="active"><?php echo phptal_escape($ctx->Title); ?>
</li>
			</ul>
		</div>		
	</div><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_Menu(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row-fluid">
		<?php /* tag "div" from line 208 */; ?>
<div class="span12 nav-menus">
			<?php /* tag "ul" from line 209 */; ?>
<ul class="nav nav-pills">
				<?php 
/* tag "li" from line 210 */ ;
if (null !== ($_tmp_3 = ($ctx->Active=='Home'?'active':''))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
					<?php /* tag "a" from line 211 */; ?>
<a href="/trang-chu">Trang chủ</a>
				</li>
				<?php 
/* tag "li" from line 213 */ ;
if (null !== ($_tmp_1 = ($ctx->Active=='Introduction'?'active':''))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 214 */; ?>
<a href="/gioi-thieu">Giới thiệu</a>
				</li>
				<?php /* tag "li" from line 216 */; ?>
<li class="dropdown">
					<?php /* tag "a" from line 217 */; ?>
<a href="#" data-toggle="dropdown" class="dropdown-toggle"> Tin tức <?php /* tag "b" from line 217 */; ?>
<b class="caret"></b></a>					
					<?php /* tag "ul" from line 218 */; ?>
<ul class="dropdown-menu">							
						<?php 
/* tag "li" from line 219 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Tag = new PHPTAL_RepeatController($ctx->TagAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Tag as $ctx->Tag): ;
?>
<li>
							<?php 
/* tag "a" from line 220 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tag, 'getURLView')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->Tag, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>					
				</li>
				<?php 
/* tag "li" from line 224 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<li class="dropdown">
					<?php /* tag "a" from line 225 */; ?>
<a href="#" data-toggle="dropdown" class="dropdown-toggle"> <?php /* tag "span" from line 225 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</span> <?php /* tag "b" from line 225 */; ?>
<b class="caret"></b></a>
					<?php /* tag "ul" from line 226 */; ?>
<ul class="dropdown-menu">							
						<?php 
/* tag "li" from line 227 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Category1 = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getCategoryAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Category1 as $ctx->Category1): ;
?>
<li>
							<?php 
/* tag "a" from line 228 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category1, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Category1, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				<?php 
/* tag "li" from line 232 */ ;
if (null !== ($_tmp_2 = ($ctx->Active=='Contact'?'active':''))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 233 */; ?>
<a href="/lien-he">Liên hệ</a>
				</li>
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_PageTitle(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row-fluid">
		<?php /* tag "div" from line 189 */; ?>
<div class="span12 logo">
			<?php /* tag "div" from line 190 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 191 */; ?>
<div class="span3">
					<?php /* tag "img" from line 192 */; ?>
<img src="/mvc/templates/front/img/logo_guest.png" width="100%"/>
				</div>
				<?php /* tag "div" from line 194 */; ?>
<div class="span9">
					<?php /* tag "div" from line 195 */; ?>
<div style="margin-left:-10px;">
						<?php /* tag "h1" from line 196 */; ?>
<h1><?php /* tag "a" from line 196 */; ?>
<a href="/trang-chu"><?php echo phptal_escape($ctx->path($ctx->ConfigName, 'getValue')); ?>
</a></h1>
						<?php /* tag "p" from line 197 */; ?>
<p><?php echo phptal_escape($ctx->path($ctx->ConfigSlogan, 'getValue')); ?>
</p>
					</div>
				</div>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<header id="header">
		<?php /* tag "div" from line 65 */; ?>
<div id="header-top">
			<?php /* tag "div" from line 66 */; ?>
<div class="container">
				<?php /* tag "div" from line 67 */; ?>
<div class="row">
					<?php /* tag "div" from line 68 */; ?>
<div class="col-md-12">
						<?php /* tag "div" from line 69 */; ?>
<div class="header-top-left">
							<?php /* tag "ul" from line 70 */; ?>
<ul id="top-links" class="clearfix">
								<?php /* tag "li" from line 71 */; ?>
<li><?php /* tag "a" from line 71 */; ?>
<a href="/danh-dau" title="Đánh dấu"><?php /* tag "span" from line 71 */; ?>
<span class="top-icon top-icon-pencil"></span><?php /* tag "span" from line 71 */; ?>
<span class="hide-for-xs">Đánh dấu</span></a></li>								
								<?php /* tag "li" from line 72 */; ?>
<li><?php /* tag "a" from line 72 */; ?>
<a href="/gio-hang" title="Giỏ hàng"><?php /* tag "span" from line 72 */; ?>
<span class="top-icon top-icon-cart"></span><?php /* tag "span" from line 72 */; ?>
<span class="hide-for-xs">Giỏ hàng</span></a></li>
							</ul>
						</div><!-- End .header-top-left -->
						<?php /* tag "div" from line 75 */; ?>
<div class="header-top-right">
							<?php /* tag "div" from line 76 */; ?>
<div class="header-top-dropdowns pull-right">
								<?php /* tag "div" from line 77 */; ?>
<div class="btn-group dropdown-money">
									<?php /* tag "button" from line 78 */; ?>
<button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
										<?php /* tag "span" from line 79 */; ?>
<span class="hide-for-xs">Tài khoản</span><?php /* tag "span" from line 79 */; ?>
<span class="hide-for-lg">TK</span>
									</button>
									<?php /* tag "ul" from line 81 */; ?>
<ul class="dropdown-menu pull-right" role="menu">
										<?php /* tag "li" from line 82 */; ?>
<li><?php /* tag "a" from line 82 */; ?>
<a href="/dang-nhap"><?php /* tag "span" from line 82 */; ?>
<span class="hide-for-xs">Đăng nhập</span><?php /* tag "span" from line 82 */; ?>
<span class="hide-for-lg">Đăng nhập</span></a></li>										
									</ul>
								</div><!-- End .btn-group -->
							</div><!-- End .header-top-dropdowns -->
							<?php /* tag "div" from line 86 */; ?>
<div class="header-text-container pull-right">
								<?php /* tag "p" from line 87 */; ?>
<p class="header-text">
									Trung tâm Nội Thất Vĩnh Long xin kính chào quý khách! Với các mặt hàng chất lượng chính hãng, phong phú, đa dạng đến từ đầy đủ các ngành hàng như Vi tính, Giải trí số, Điện tử, Điện lạnh, Gia dụng cùng phong cách phục vụ chuyên nghiệp, chu đáo, Nội Thất Vĩnh Long hứa hẹn sẽ là điểm đến tham quan, mua sắm lý tưởng cho mọi gia đình
								</p>
							</div><!-- End .pull-right -->
						</div><!-- End .header-top-right -->
					</div><!-- End .col-md-12 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div><!-- End #header-top -->
		<?php /* tag "div" from line 96 */; ?>
<div id="inner-header">
			<?php /* tag "div" from line 97 */; ?>
<div class="container">
				<?php /* tag "div" from line 98 */; ?>
<div class="row">
					<?php /* tag "div" from line 99 */; ?>
<div class="col-md-5 col-sm-5 col-xs-12 logo-container">
						<?php /* tag "h1" from line 100 */; ?>
<h1 class="logo clearfix">
							<?php /* tag "span" from line 101 */; ?>
<span>Nội Thất Vĩnh Long</span>
							<?php /* tag "a" from line 102 */; ?>
<a href="/" title="Nội Thất Vĩnh Long"><?php /* tag "img" from line 102 */; ?>
<img src="/mvc/templates/front/images/logo.png" alt="Nội Thất Vĩnh Long" width="238" height="76"/></a>
						</h1>
					</div><!-- End .col-md-5 -->
					<?php /* tag "div" from line 105 */; ?>
<div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">
						<?php /* tag "div" from line 106 */; ?>
<div class="header-box contact-infos pull-right">
							<?php /* tag "ul" from line 107 */; ?>
<ul>
								<?php /* tag "li" from line 108 */; ?>
<li><?php /* tag "span" from line 108 */; ?>
<span class="header-box-icon header-box-icon-skype"></span><?php /* tag "h4" from line 108 */; ?>
<h4><?php echo phptal_escape($ctx->path($ctx->ConfigSkype, 'getValue')); ?>
</h4></li>
								<?php /* tag "li" from line 109 */; ?>
<li><?php /* tag "span" from line 109 */; ?>
<span class="header-box-icon header-box-icon-email"></span><?php /* tag "h4" from line 109 */; ?>
<h4><?php echo phptal_escape($ctx->path($ctx->ConfigYahooMessenger, 'getValue')); ?>
</h4></li>
							</ul>
						</div><!-- End .contact-infos -->
						<?php /* tag "div" from line 112 */; ?>
<div class="header-box contact-phones pull-right clearfix">
							<?php /* tag "span" from line 113 */; ?>
<span class="header-box-icon header-box-icon-earphones"></span>
							<?php /* tag "ul" from line 114 */; ?>
<ul class="pull-left">
								<?php /* tag "li" from line 115 */; ?>
<li><?php /* tag "h4" from line 115 */; ?>
<h4><?php echo phptal_escape($ctx->path($ctx->ConfigPhone1, 'getValue')); ?>
</h4></li>
								<?php /* tag "li" from line 116 */; ?>
<li><?php /* tag "h4" from line 116 */; ?>
<h4><?php echo phptal_escape($ctx->path($ctx->ConfigPhone2, 'getValue')); ?>
</h4></li>
							</ul>
						</div><!-- End .contact-phones -->
					</div><!-- End .col-md-7 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
			<?php /* tag "div" from line 122 */; ?>
<div id="main-nav-container">
				<?php /* tag "div" from line 123 */; ?>
<div class="container">
					<?php /* tag "div" from line 124 */; ?>
<div class="row">
						<?php /* tag "div" from line 125 */; ?>
<div class="col-md-12 clearfix">
							<?php /* tag "nav" from line 126 */; ?>
<nav id="main-nav">
								<?php /* tag "div" from line 127 */; ?>
<div id="responsive-nav">
									<?php /* tag "div" from line 128 */; ?>
<div id="responsive-nav-button">
										Menu <?php /* tag "span" from line 129 */; ?>
<span id="responsive-nav-button-icon"></span>
									</div><!-- responsive-nav-button -->
								</div>
								<?php /* tag "ul" from line 132 */; ?>
<ul class="menu clearfix">
									<?php /* tag "li" from line 133 */; ?>
<li><?php /* tag "a" from line 133 */; ?>
<a class="active" href="/trang-chu">TRANG CHỦ</a></li>
									<?php /* tag "li" from line 134 */; ?>
<li><?php /* tag "a" from line 134 */; ?>
<a href="JavaScript:;">TIN TỨC</a>
										<?php /* tag "ul" from line 135 */; ?>
<ul>
											<?php 
/* tag "li" from line 136 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Tag = new PHPTAL_RepeatController($ctx->TagAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Tag as $ctx->Tag): ;
?>
<li>
												<?php 
/* tag "a" from line 137 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tag, 'getURLView')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 138 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Tag, 'getName')); ?>
</span>
												</a>
											</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										</ul>
									</li>
									<?php /* tag "li" from line 143 */; ?>
<li class="mega-menu-container"><?php /* tag "a" from line 143 */; ?>
<a href="JavaScript:;">SẢN PHẨM</a>
										<?php /* tag "div" from line 144 */; ?>
<div class="mega-menu clearfix">
											<?php 
/* tag "div" from line 145 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
?>
<div class="col-5">
												<?php /* tag "a" from line 146 */; ?>
<a href="JavaScript:;" class="mega-menu-title"><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</a>
												<?php /* tag "ul" from line 147 */; ?>
<ul class="mega-menu-list clearfix">
													<?php 
/* tag "li" from line 148 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category1 = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getCategoryAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category1 as $ctx->Category1): ;
?>
<li>
														<?php 
/* tag "a" from line 149 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category1, 'getURLView')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
															<?php /* tag "span" from line 150 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getName')); ?>
</span> (<?php /* tag "span" from line 150 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getProductAll/count')); ?>
</span>)
														</a>
													</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

												</ul>
											</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										</div><!-- End .mega-menu -->
									</li>
									<?php /* tag "li" from line 157 */; ?>
<li><?php /* tag "a" from line 157 */; ?>
<a href="/khuyen-mai">KHUYẾN MÃI</a></li>
									<?php /* tag "li" from line 158 */; ?>
<li><?php /* tag "a" from line 158 */; ?>
<a href="/lien-he">LIÊN HỆ</a></li>
								</ul>
							</nav>
							<?php /* tag "div" from line 161 */; ?>
<div id="quick-access">
								<?php /* tag "div" from line 162 */; ?>
<div class="dropdown-cart-menu-container pull-right">
									<?php /* tag "div" from line 163 */; ?>
<div class="btn-group dropdown-cart">
										<?php /* tag "a" from line 164 */; ?>
<a href="/gio-hang" class="btn btn-custom dropdown-toggle">
											<?php /* tag "span" from line 165 */; ?>
<span class="cart-menu-icon"></span>
											<?php /* tag "span" from line 166 */; ?>
<span><?php echo phptal_escape(\MVC\Base\SessionRegistry::instance()->getCart()->countItem()); ?>
</span>
											sản phẩm <?php /* tag "span" from line 167 */; ?>
<span class="drop-price"> được chọn</span>
										</a>									
									</div>
								</div>
								<?php /* tag "form" from line 171 */; ?>
<form class="form-inline quick-search-form" role="form" action="/tim-kiem" method="POST">
									<?php /* tag "div" from line 172 */; ?>
<div class="form-group">
										<?php /* tag "input" from line 173 */; ?>
<input type="text" class="form-control" id="Term" name="Term" placeholder="Bạn cần mua gì ?"/>
									</div>
									<?php /* tag "button" from line 175 */; ?>
<button type="submit" id="quick-search" class="btn btn-custom"></button>
								</form>
							</div>
						</div>
					</div>
				</div><!-- End .container -->
			</div><!-- End #nav -->
		</div><!-- End #inner-header -->
	</header><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>						
		<?php /* tag "script" from line 40 */; ?>
<script src="/mvc/templates/front/js/jquery-1.11.0.min.js"></script>
		<?php /* tag "script" from line 41 */; ?>
<script src="/mvc/templates/front/js/bootstrap.min.js"></script>
		<?php /* tag "script" from line 42 */; ?>
<script src="/mvc/templates/front/js/smoothscroll.js"></script>
		<?php /* tag "script" from line 43 */; ?>
<script src="/mvc/templates/front/js/retina-1.1.0.min.js"></script>
		<?php /* tag "script" from line 44 */; ?>
<script src="/mvc/templates/front/js/jquery.placeholder.js"></script>
		<?php /* tag "script" from line 45 */; ?>
<script src="/mvc/templates/front/js/jquery.hoverIntent.min.js"></script>
		<?php /* tag "script" from line 46 */; ?>
<script src="/mvc/templates/front/js/twitter/jquery.tweet.min.js"></script>
		<?php /* tag "script" from line 47 */; ?>
<script src="/mvc/templates/front/js/jquery.flexslider-min.js"></script>
		<?php /* tag "script" from line 48 */; ?>
<script src="/mvc/templates/front/js/owl.carousel.min.js"></script>
		<?php /* tag "script" from line 49 */; ?>
<script src="/mvc/templates/front/js/jflickrfeed.min.js"></script>
		<?php /* tag "script" from line 50 */; ?>
<script src="/mvc/templates/front/js/jquery.prettyPhoto.js"></script>
		<?php /* tag "script" from line 51 */; ?>
<script src="/mvc/templates/front/js/jquery.sequence-min.js"></script>
		<?php /* tag "script" from line 52 */; ?>
<script src="/mvc/templates/front/js/colpick.js"></script>
		<?php /* tag "script" from line 53 */; ?>
<script src="/mvc/templates/front/js/main.js"></script>
		<?php /* tag "script" from line 54 */; ?>
<script src="/mvc/templates/front/js/modernizr.custom.js"></script>
		<?php /* tag "script" from line 55 */; ?>
<script src="/mvc/templates/front/js/jquery.isotope.min.js"></script>
		<?php /* tag "script" from line 56 */; ?>
<script src="/mvc/templates/front/js/jquery.fitvids.js"></script>
		<?php /* tag "script" from line 57 */; ?>
<script src="/mvc/templates/front/js/jquery.elastislide.js"></script>
		<?php /* tag "script" from line 58 */; ?>
<script src="/mvc/templates/front/js/jquery.mlens-1.3.min.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>	
		<?php /* tag "link" from line 26 */; ?>
<link rel="stylesheet" href="/mvc/templates/front/css/bootstrap.min.css"/>
		<?php /* tag "link" from line 27 */; ?>
<link rel="stylesheet" href="/mvc/templates/front/css/font-awesome.min.css"/>
		<?php /* tag "link" from line 28 */; ?>
<link rel="stylesheet" href="/mvc/templates/front/css/prettyPhoto.css"/>
		<?php /* tag "link" from line 29 */; ?>
<link rel="stylesheet" href="/mvc/templates/front/css/colpick.css"/>
		<?php /* tag "link" from line 30 */; ?>
<link rel="stylesheet" href="/mvc/templates/front/css/sequence-slider.css"/>
		<?php /* tag "link" from line 31 */; ?>
<link rel="stylesheet" href="/mvc/templates/front/css/owl.carousel.css"/>
		<?php /* tag "link" from line 32 */; ?>
<link rel="stylesheet" href="/mvc/templates/front/css/style.css"/>
		<?php /* tag "link" from line 33 */; ?>
<link rel="stylesheet" href="/mvc/templates/front/css/responsive.css"/>
	</span><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 7 */; ?>
<title><?php echo 'Website Điện Máy Minh Hoàng'; ?>
</title>
		<?php /* tag "base" from line 8 */; ?>
<base href="http://noithatvinhlong.quanly-cuahang.com"/>
		<?php /* tag "meta" from line 9 */; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<?php /* tag "meta" from line 10 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<?php /* tag "meta" from line 11 */; ?>
<meta http-equiv="Pragma" content="no-cache"/>
		<?php /* tag "meta" from line 12 */; ?>
<meta http-equiv="Expires" content="-1"/>
		<?php /* tag "meta" from line 13 */; ?>
<meta http-equiv="Cache-Control" content="no-cache"/>
		<?php /* tag "meta" from line 14 */; ?>
<meta name="keywords" content="Website Nội Thất Vĩnh Long"/>
		<?php /* tag "meta" from line 15 */; ?>
<meta name="description" content="Website Nội Thất Vĩnh Long"/>
		<?php /* tag "meta" from line 16 */; ?>
<meta name="page-topic" content="Website Nội Thất Vĩnh Long"/>
		<?php /* tag "meta" from line 17 */; ?>
<meta name="Abstract" content="Website Nội Thất Vĩnh Long"/>
		<?php /* tag "meta" from line 18 */; ?>
<meta name="classification" content="Website Nội Thất Vĩnh Long"/>
		<?php /* tag "link" from line 19 */; ?>
<link rel="shortcut icon" type="image/png" href="/data/images/icon.ico"/>
	</span><?php 
}

 ?>
<?php 
function tpl_53731be5_mFront__5t6VefmbysD4E1oZpNuMhA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html lang="en" xml:lang="en">
<?php /* tag "body" from line 2 */; ?>
<body>
	<!-- ======================================================================== -->
	<!-- META TAG INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 6 */; ?>

	
	<!-- ======================================================================== -->
	<!-- CASCADING STYLE SHEETS INCLUDE											  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 25 */; ?>

	
	<!-- ======================================================================== -->
	<!-- JAVASCRIPT INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 39 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HEADER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "header" from line 64 */; ?>
<!-- End #header -->
	
	<!-- ======================================================================== -->
	<!-- PAGE TITLE																  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 188 */; ?>

	
	<!-- ======================================================================== -->
	<!-- MENU																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 207 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LOCATION BAR															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 242 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "footer" from line 257 */; ?>
<!-- End #footer -->
			
	<!-- ======================================================================== -->
	<!-- OPTION PANEL															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 310 */; ?>
<!-- End #option panel -->
	
	<!-- ======================================================================== 	-->
	<!-- ADS SERVICE															  			-->
	<!-- ======================================================================== 	-->
	<?php /* tag "div" from line 539 */; ?>

</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\NoiThatVinhLong\mvc\templates\mFront.xhtml (edit that file instead) */; ?>