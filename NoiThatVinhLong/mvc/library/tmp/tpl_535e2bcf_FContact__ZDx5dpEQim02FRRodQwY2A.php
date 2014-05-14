<?php 
function tpl_535e2bcf_FContact__ZDx5dpEQim02FRRodQwY2A(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<body onunload="GUnload()">
		<!--
		<div metal:use-macro="mFront.xhtml/OptionPanel"/>
		!-->
		<?php /* tag "div" from line 11 */; ?>
<div id="wrapper">
			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "section" from line 13 */; ?>
<section id="content">
				<?php 
/* tag "div" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

				<?php /* tag "div" from line 15 */; ?>
<div class="container">
					<?php /* tag "div" from line 16 */; ?>
<div class="row">
						<?php /* tag "div" from line 17 */; ?>
<div class="col-md-12">
							<?php /* tag "header" from line 18 */; ?>
<header class="content-title">
							<?php /* tag "h1" from line 19 */; ?>
<h1 class="title">Liên lạc nhanh với chúng tôi</h1>
							<?php /* tag "p" from line 20 */; ?>
<p class="title-desc">sẽ được mức giá ưu đãi</p>
							</header>
							<?php /* tag "div" from line 22 */; ?>
<div class="xs-margin"></div><!-- space -->
							<?php /* tag "div" from line 23 */; ?>
<div class="row">
								<?php /* tag "div" from line 24 */; ?>
<div class="col-md-2">									
									<?php 
/* tag "button" from line 35 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Branch = new PHPTAL_RepeatController($ctx->BranchAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Branch as $ctx->Branch): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Branch, 'getName')))):  ;
$_tmp_2 = ' data-name="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Branch, 'getAddress')))):  ;
$_tmp_3 = ' data-address="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Branch, 'getX')))):  ;
$_tmp_4 = ' data-x="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Branch, 'getY')))):  ;
$_tmp_5 = ' data-y="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Branch, 'getPhone1')))):  ;
$_tmp_6 = ' data-phone1="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Branch, 'getPhone1')))):  ;
$_tmp_7 = ' data-phone2="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
if (null !== ($_tmp_8 = ($ctx->path($ctx->Branch, 'getEmail1')))):  ;
$_tmp_8 = ' data-email1="'.phptal_escape($_tmp_8).'"' ;
else:  ;
$_tmp_8 = '' ;
endif ;
if (null !== ($_tmp_9 = ($ctx->path($ctx->Branch, 'getEmail1')))):  ;
$_tmp_9 = ' data-email2="'.phptal_escape($_tmp_9).'"' ;
else:  ;
$_tmp_9 = '' ;
endif ;
?>
<button class="btn btn-custom btnBranch" style="width:100%;"<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
<?php echo $_tmp_7 ?>
<?php echo $_tmp_8 ?>
<?php echo $_tmp_9 ?>
>
										<?php 
/* tag "input" from line 36 */ ;
if (null !== ($_tmp_10 = ($ctx->path($ctx->Branch, 'getX')))):  ;
$_tmp_10 = ' value="'.phptal_escape($_tmp_10).'"' ;
else:  ;
$_tmp_10 = '' ;
endif ;
?>
<input id="X" type="hidden"<?php echo $_tmp_10 ?>
/>
										<?php 
/* tag "input" from line 37 */ ;
if (null !== ($_tmp_10 = ($ctx->path($ctx->Branch, 'getY')))):  ;
$_tmp_10 = ' value="'.phptal_escape($_tmp_10).'"' ;
else:  ;
$_tmp_10 = '' ;
endif ;
?>
<input id="Y" type="hidden"<?php echo $_tmp_10 ?>
/>
										<?php 
/* tag "input" from line 38 */ ;
if (null !== ($_tmp_10 = ($ctx->path($ctx->Branch, 'getName')))):  ;
$_tmp_10 = ' value="'.phptal_escape($_tmp_10).'"' ;
else:  ;
$_tmp_10 = '' ;
endif ;
?>
<input id="NameXY" type="hidden"<?php echo $_tmp_10 ?>
/>
										<?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Branch, 'getName')); ?>
</span>
									</button><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</div>
								<?php /* tag "div" from line 42 */; ?>
<div class="col-md-10">
									<?php /* tag "div" from line 43 */; ?>
<div id="map"></div>
								</div>
								<?php /* tag "div" from line 45 */; ?>
<div class="col-md-8 col-sm-8 col-xs-12">
									<?php /* tag "div" from line 46 */; ?>
<div class="testimonial-details-contact">
										<?php /* tag "header" from line 47 */; ?>
<header>Xin chào quý khách!</header>														
										<?php /* tag "span" from line 48 */; ?>
<span>Mọi thắc mắc, quý khách có thể liên lạc trực tiếp qua điện thoại hoặc qua tin nhắn</span>														
									</div>
									<?php /* tag "div" from line 50 */; ?>
<div class="row">
										<?php /* tag "form" from line 51 */; ?>
<form id="contact-form">
											<?php /* tag "div" from line 52 */; ?>
<div class="col-md-6 col-sm-12 col-xs-12">
												<?php /* tag "div" from line 53 */; ?>
<div class="input-group">
													<?php /* tag "span" from line 54 */; ?>
<span class="input-group-addon"><?php /* tag "span" from line 54 */; ?>
<span class="input-icon input-icon-user"></span><?php /* tag "span" from line 54 */; ?>
<span class="input-text">Tên&#42;</span></span>
													<?php /* tag "input" from line 55 */; ?>
<input type="text" name="contact-name" id="contact-name" required="" class="form-control input-lg"/>
												</div><!-- End .input-group -->
												<?php /* tag "div" from line 57 */; ?>
<div class="input-group">
													<?php /* tag "span" from line 58 */; ?>
<span class="input-group-addon"><?php /* tag "span" from line 58 */; ?>
<span class="input-icon input-icon-email"></span><?php /* tag "span" from line 58 */; ?>
<span class="input-text">Email&#42;</span></span>
													<?php /* tag "input" from line 59 */; ?>
<input type="email" name="contact-email" id="contact-email" required="" class="form-control input-lg"/>
												</div><!-- End .input-group -->
												<?php /* tag "div" from line 61 */; ?>
<div class="input-group">
													<?php /* tag "span" from line 62 */; ?>
<span class="input-group-addon"><?php /* tag "span" from line 62 */; ?>
<span class="input-icon input-icon-subject"></span><?php /* tag "span" from line 62 */; ?>
<span class="input-text">Chủ đề&#42;</span></span>
													<?php /* tag "input" from line 63 */; ?>
<input type="text" name="contact-subject" id="contact-subject" required="" class="form-control input-lg"/>
												</div><!-- End .input-group -->
											</div><!-- End .col-md-6 -->
											<?php /* tag "div" from line 66 */; ?>
<div class="col-md-6 col-sm-12 col-xs-12">
												<?php /* tag "div" from line 67 */; ?>
<div class="input-group textarea-container">
													<?php /* tag "span" from line 68 */; ?>
<span class="input-group-addon"><?php /* tag "span" from line 68 */; ?>
<span class="input-icon input-icon-message"></span><?php /* tag "span" from line 68 */; ?>
<span class="input-text">Nội dung</span></span>
													<?php /* tag "textarea" from line 69 */; ?>
<textarea name="contact-message" id="contact-message" class="form-control" cols="30" rows="6"></textarea>
												</div><!-- End .input-group -->
												<?php /* tag "input" from line 71 */; ?>
<input id="BtnSend" type="submit" value="Gửi" class="btn btn-custom-2 md-margin"/>
											</div><!-- End .col-md-6 -->
										</form>
									</div><!-- End .row -->
								</div><!-- End .col-md-8 -->
								<?php /* tag "div" from line 76 */; ?>
<div class="col-md-4 col-sm-4 col-xs-12">
									<?php /* tag "h2" from line 77 */; ?>
<h2 class="sub-title">Thông tin liên hệ</h2>
									<?php /* tag "ul" from line 78 */; ?>
<ul class="contact-details-list">										
										<?php /* tag "li" from line 79 */; ?>
<li>
											<?php /* tag "span" from line 80 */; ?>
<span class="contact-icon contact-icon-mobile"></span>
											<?php /* tag "ul" from line 81 */; ?>
<ul>
												<?php /* tag "li" from line 82 */; ?>
<li id="IdName"></li>
												<?php /* tag "li" from line 83 */; ?>
<li id="IdAddress"></li>
											</ul>
										</li>
										<?php /* tag "li" from line 86 */; ?>
<li>
											<?php /* tag "span" from line 87 */; ?>
<span class="contact-icon contact-icon-phone"></span>
											<?php /* tag "ul" from line 88 */; ?>
<ul>
												<?php /* tag "li" from line 89 */; ?>
<li id="IdPhone1"></li>
												<?php /* tag "li" from line 90 */; ?>
<li id="IdPhone2"></li>
											</ul>
										</li>
										<?php /* tag "li" from line 93 */; ?>
<li>
											<?php /* tag "span" from line 94 */; ?>
<span class="contact-icon contact-icon-email"></span>
											<?php /* tag "ul" from line 95 */; ?>
<ul>
												<?php /* tag "li" from line 96 */; ?>
<li id="IdEmail1"></li>
												<?php /* tag "li" from line 97 */; ?>
<li id="IdEmail2"></li>
											</ul>
										</li>										
									</ul>
								</div><!-- End .col-md-4 -->
							</div><!-- End .row -->
						</div><!-- End .col-md-12 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</section><!-- End #content -->
			<?php 
/* tag "div" from line 107 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div><!-- End #wrapper -->		
		<?php 
/* tag "div" from line 109 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mFront.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 110 */; ?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=AIzaSyAL3E55skCbhZdaN7Jm3Tip7Np1X04f76w" type="text/javascript"></script>				
		<?php /* tag "script" from line 111 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/cms/js/gps.jquery.js"></script>
		<?php /* tag "script" from line 112 */; ?>
<script type="text/javascript">
			$(function() {											
				$("#map").googleMap().load();
			});
			
			$('.btnBranch').click(function(e){								
				$('#X').val($(this).attr('data-x'));
				$('#Y').val($(this).attr('data-y'));
				$('#NameXY').val($(this).attr('data-name'));
				
				$("#map").googleMap().reload();	
				
				$("#IdPhone1").html($(this).attr('data-phone1'));
				$("#IdPhone2").html($(this).attr('data-phone2'));
				
				$("#IdEmail1").html($(this).attr('data-email1'));
				$("#IdEmail2").html($(this).attr('data-email2'));
				
				$("#IdName").html($(this).attr('data-name'));
				$("#IdAddress").html($(this).attr('data-address'));
				
			});
			$('.btnBranch:first').click();
			
			$('#BtnSend').click(function(e){				
				var Data = [];
				Data[0] 	= $("#name").val();
				Data[1] 	= $("#email").val();
				Data[2] 	= $("#subject").val();				
				Data[3] 	= $("#content").val();					
				
				var URL = "/lien-he/email";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,						
						success: function(msg){								
							if (msg.result = "OK") { 
								$("#name").val('');
								$("#email").val('');
								$("#subject").val('');
								$("#content").val('');	
								alert ("Gui thanh cong!");
							} else {
								alert ("Gui that bai !Ban hay gui lai!");
							}
						}
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\FContact.html (edit that file instead) */; ?>