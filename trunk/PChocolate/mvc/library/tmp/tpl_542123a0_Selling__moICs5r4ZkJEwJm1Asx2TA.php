<?php 
function tpl_542123a0_Selling__moICs5r4ZkJEwJm1Asx2TA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "link" from line 5 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/icheck/flat/blue.css"/>
		<?php /* tag "link" from line 6 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/select2.css"/>
		<?php /* tag "link" from line 7 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/bootstrap.min.css"/>
		<?php /* tag "link" from line 8 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/bootstrap-glyphicons.css"/>
		<?php /* tag "link" from line 9 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/glyphicons-regular.css"/>
		<?php /* tag "link" from line 10 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/unicorn.main.css"/>		
		<?php /* tag "link" from line 11 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/custom.css"/>
		<?php /* tag "link" from line 12 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/grid-menu.css"/>		
		<?php /* tag "link" from line 13 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/gritter.css"/>
		<?php 
/* tag "link" from line 14 */ ;
if (null !== ($_tmp_1 = ('/mvc/templates/theme/cms/css/unicorn.' . \MVC\Base\SessionRegistry::instance()->getCurrentTheme() . '.css'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<link rel="stylesheet" class="skin-color"<?php echo $_tmp_1 ?>
/>
	</head>
	<?php /* tag "body" from line 16 */; ?>
<body>
		<?php 
/* tag "div" from line 17 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php /* tag "div" from line 18 */; ?>
<div id="sidebar">
			<?php /* tag "ul" from line 19 */; ?>
<ul>
				<?php /* tag "li" from line 20 */; ?>
<li>
					<?php 
/* tag "a" from line 21 */ ;
if ($ctx->path($ctx->TD, 'isOne')):  ;
?>
<a href="#DialogTime" data-toggle="modal">
						ĐANG Ở CA 1
					</a><?php endif; ?>

					<?php 
/* tag "a" from line 24 */ ;
if (!($ctx->path($ctx->TD, 'isOne'))):  ;
?>
<a>
						ĐANG Ở CA 2
					</a><?php endif; ?>

				</li>
				<?php 
/* tag "li" from line 28 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Domain = new PHPTAL_RepeatController($ctx->DomainAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Domain as $ctx->Domain): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li class="Domain"<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 29 */; ?>
<a><?php /* tag "i" from line 29 */; ?>
<i class="glyphicons-show_big_thumbnails"></i><?php /* tag "span" from line 29 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Domain, 'getName')); ?>
</span></a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
				
			</ul>
		</div>
		<?php /* tag "div" from line 33 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 34 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 35 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 36 */; ?>
<div class="row">
				<?php /* tag "div" from line 37 */; ?>
<div class="col-4">
					<?php /* tag "div" from line 38 */; ?>
<div id="TableAll"></div>
					<?php /* tag "div" from line 39 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 40 */; ?>
<div class="controls">
							<?php /* tag "input" from line 41 */; ?>
<input id="SearchName" type="text" placeholder="Nhập tìm món ăn" style="width:75%;"/>							
							<?php /* tag "a" from line 42 */; ?>
<a class="btn RemoveCourseSearch">
								<?php /* tag "i" from line 43 */; ?>
<i class="glyphicons-circle_remove"></i>
							</a>							
						</div>
					</div>
					<?php /* tag "div" from line 47 */; ?>
<div id="CourseF"></div>
				</div>
				
				<!-- BẬT / TẮT MÀN HÌNH GỌI MÓN !-->
				<?php 
/* tag "div" from line 51 */ ;
if (!($ctx->path($ctx->ConfigSwitchBoardCall, 'getValue'))):  ;
?>
<div class="col-8"><?php /* tag "div" from line 51 */; ?>
<div id="Session"></div></div><?php endif; ?>

				<?php 
/* tag "div" from line 52 */ ;
if ($ctx->path($ctx->ConfigSwitchBoardCall, 'getValue')):  ;
?>
<div class="col-5"><?php /* tag "div" from line 52 */; ?>
<div id="Session"></div></div><?php endif; ?>

				
				<?php 
/* tag "div" from line 54 */ ;
if ($ctx->path($ctx->ConfigSwitchBoardCall, 'getValue')):  ;
?>
<div class="col-3">
					<?php /* tag "div" from line 55 */; ?>
<div class="accordion widget-box" id="collapse-group">						
						<?php /* tag "div" from line 56 */; ?>
<div class="accordion-group widget-box">
							<?php /* tag "div" from line 57 */; ?>
<div class="accordion-heading">
								<?php /* tag "div" from line 58 */; ?>
<div class="widget-title">
									<?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_2 = ('#Top10'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-parent="#collapse-group" data-toggle="collapse"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 60 */; ?>
<span class="icon"><?php /* tag "i" from line 60 */; ?>
<i class="glyphicons-fast_food"></i></span><?php /* tag "h5" from line 60 */; ?>
<h5><?php echo 'Top10'; ?>
</h5>
									</a>
								</div>
							</div>							
							<?php /* tag "div" from line 64 */; ?>
<div class="collapse in accordion-body" id="Top10">
								<?php /* tag "div" from line 65 */; ?>
<div class="widget-content nopadding size-12">
									<?php /* tag "ul" from line 66 */; ?>
<ul class="activity-list">
										<?php 
/* tag "li" from line 67 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->T = new PHPTAL_RepeatController($ctx->Top10)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->T as $ctx->T): ;
?>
<li>											
											<?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_2 = ($ctx->T->getCourse()->getName() . ' ' . $ctx->T->getCourse()->getPrice1Print()))):  ;
$_tmp_2 = ' data-original-title="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="course-item tip-left"<?php echo $_tmp_2 ?>
>
												<?php 
/* tag "strong" from line 69 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->T, 'getCourse/getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ('plus'))):  ;
$_tmp_4 = ' data-delta="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<strong class="Course"<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
><?php echo phptal_escape($ctx->path($ctx->T, 'getCourse/getShortName')); ?>
</strong>
											</a>
										</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									</ul>
								</div>
							</div>
						</div>
						<?php 
/* tag "div" from line 76 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Category = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Category as $ctx->Category): ;
?>
<div class="accordion-group widget-box">
							<?php /* tag "div" from line 77 */; ?>
<div class="accordion-heading">
								<?php /* tag "div" from line 78 */; ?>
<div class="widget-title">
									<?php 
/* tag "a" from line 79 */ ;
if (null !== ($_tmp_4 = ('#'.$ctx->Category->getIdString()))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-parent="#collapse-group" data-toggle="collapse"<?php echo $_tmp_4 ?>
>
										<?php /* tag "span" from line 80 */; ?>
<span class="icon"><?php /* tag "i" from line 80 */; ?>
<i class="glyphicons-fast_food"></i></span><?php /* tag "h5" from line 80 */; ?>
<h5><?php echo phptal_escape($ctx->path($ctx->Category, 'getNameReduce')); ?>
</h5>
									</a>
								</div>
							</div>
							<?php 
/* tag "div" from line 84 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getIdString')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div class="collapse accordion-body"<?php echo $_tmp_2 ?>
>
								<?php /* tag "div" from line 85 */; ?>
<div class="widget-content nopadding size-12">
									<?php /* tag "ul" from line 86 */; ?>
<ul class="activity-list">
										<?php 
/* tag "li" from line 87 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Course = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getCourseAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Course as $ctx->Course): ;
?>
<li>
											<?php 
/* tag "a" from line 88 */ ;
if (null !== ($_tmp_4 = ($ctx->Course->getName() . ' ' . $ctx->Course->getPrice1Print()))):  ;
$_tmp_4 = ' data-original-title="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a class="course-item tip-left"<?php echo $_tmp_4 ?>
>
												<?php 
/* tag "strong" from line 89 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_5 = ' alt="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ('plus'))):  ;
$_tmp_6 = ' data-delta="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<strong class="Course"<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
><?php echo phptal_escape($ctx->path($ctx->Course, 'getShortName')); ?>
</strong>
											</a>
										</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									</ul>
								</div>
							</div>
						</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</div>
				</div><?php endif; ?>

			</div>			
		</div>
		<?php /* tag "div" from line 100 */; ?>
<div id="TableActive"></div>
		<?php 
/* tag "div" from line 101 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_5 = ' alt="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<div id="DomainActive"<?php echo $_tmp_5 ?>
></div>
		
		<!-- TIME DIALOG  -->
		<?php /* tag "div" from line 104 */; ?>
<div id="DialogTime" class="modal fade">
			<?php /* tag "div" from line 105 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 106 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 107 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 107 */; ?>
<h3><?php /* tag "i" from line 107 */; ?>
<i class="glyphicons-bell modal-icon"></i>KẾT THÚC CA</h3></div>
					<?php /* tag "div" from line 108 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 109 */; ?>
<div class="modal-body">
							<?php /* tag "p" from line 110 */; ?>
<p>Bạn có muốn kết thúc CA ?</p>
						</div>
						<?php /* tag "div" from line 112 */; ?>
<div class="modal-footer">
							<?php /* tag "button" from line 113 */; ?>
<button id="TimeButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 113 */; ?>
<i class="glyphicons-download_alt"></i> Kết thúc</button>
							<?php /* tag "button" from line 114 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 114 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
						</div>
					</div>
				</div>
			</div>
		</div>
										
		<!-- END INSERT DIALOG  -->
		<?php 
/* tag "div" from line 122 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php /* tag "script" from line 123 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.min.js"></script>
		<?php /* tag "script" from line 124 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery-ui.custom.js"></script>
		<?php /* tag "script" from line 125 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap.min.js"></script>
		<?php /* tag "script" from line 126 */; ?>
<script src="/mvc/templates/theme/cms/js/unicorn.js"></script>
		<?php /* tag "script" from line 127 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.jpanelmenu.min.js"></script>
		<?php /* tag "script" from line 128 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.icheck.min.js"></script>
		<?php /* tag "script" from line 129 */; ?>
<script src="/mvc/templates/theme/cms/js/select2.min.js"></script>		
        <?php /* tag "script" from line 130 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.masonry.min.js"></script>
		<?php /* tag "script" from line 131 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.validate.js"></script>
						
        <?php /* tag "script" from line 133 */; ?>
<script>						
			//NẠP DANH SÁCH CÁC BÀN
			$('.Domain').click(function(){
				var IdDomain = $(this).attr('alt');
				$("#TableAll").load("/selling/load/domain/"+IdDomain);
				$(this).toggleClass('active').siblings().removeClass('active');
				$("#SearchName").focus();
			});
			$('.Domain:first').click();
									
			//-----------------------------------------------------------------------------------
			//KẾT THÚC CA
			$('#TimeButton').click(function(){				
				var URL = "/selling/end/case/one";
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});				
			});
			
			//---------------------------------------------------------------------------
			//Xử lí search tên			
			$('#SearchName').keyup(function(e){
				var Name 		= $(this).val();										
				$("#CourseF").load("/selling/search/course", { Name: Name });
			});
			
			//-----------------------------------------------------------------------------------
			//CALL COURSE
			$(".RemoveCourseSearch").click(function(){
				$("#CourseF").html("");
			});
									
			//Mặc định vào ô tìm kiếm
			$("#SearchName").focus();
			
        </script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\Selling.html (edit that file instead) */; ?>