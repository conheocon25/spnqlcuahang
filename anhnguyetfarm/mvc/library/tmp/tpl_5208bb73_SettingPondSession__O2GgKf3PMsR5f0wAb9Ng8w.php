<?php 
function tpl_5208bb73_SettingPondSession__O2GgKf3PMsR5f0wAb9Ng8w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingPondSession.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="main" data-role="page" class="type-interior"></div>
	<?php 
/* tag "div" from line 10 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Pond = new PHPTAL_RepeatController($ctx->Ponds)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Pond as $ctx->Pond): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Pond, 'getIdPrint')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div data-role="page" class="session type-interior"<?php echo $_tmp_2 ?>
>
		<?php /* tag "div" from line 11 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 12 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_3 ?>
>
					<?php /* tag "img" from line 14 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 18 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 19 */; ?>
<div class="content-primary">
				<?php /* tag "ul" from line 20 */; ?>
<ul data-role="listview" data-inset="true">
					<?php 
/* tag "li" from line 21 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Session = new PHPTAL_RepeatController($ctx->path($ctx->Pond, 'getSessions'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Session as $ctx->Session): ;
?>
<li>
						<?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Session, 'getURLUpdLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_4 ?>
>							
							Bắt đầu <?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateStartPrint')); ?>
</span>
							kết thúc <?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateEndPrint')); ?>
</span> <?php /* tag "br" from line 24 */; ?>
<br/>
							loại hình nuôi <?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTypePrint')); ?>
</span> <?php /* tag "br" from line 25 */; ?>
<br/>
							số lượng thả <?php /* tag "span" from line 26 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getCountStartPrint')); ?>
</span>
						</a>
						<?php 
/* tag "a" from line 28 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Session, 'getURLDelLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_4 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				<?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Pond, 'getURLSessionInsLoad')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_4 ?>
>THÊM LƯỢT NUÔI</a>
			</div><!--/content-primary -->
			<?php /* tag "div" from line 33 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 34 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 35 */; ?>
<h3>CÁC AO NUÔI</h3>
					<?php /* tag "ul" from line 36 */; ?>
<ul data-role="listview" data-theme="c">
						<?php 
/* tag "li" from line 37 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Pond1 = new PHPTAL_RepeatController($ctx->Ponds1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Pond1 as $ctx->Pond1): ;
if (null !== ($_tmp_4 = ($ctx->Pond1->getId()==$ctx->Pond->getId() ? 'a' : 'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_5 = ('#'.$ctx->Pond1->getIdPrint()))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_5 ?>
>
								<?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Pond1/number')); ?>
</span>. <?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Pond1, 'getName')); ?>
</span>
							</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
					<?php 
/* tag "a" from line 43 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Pond, 'getURLUpdLoad')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="gear" data-theme="b"<?php echo $_tmp_5 ?>
>CẬP NHẬT</a>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 47 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 47 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/anhnguyetfarm/mvc/templates/SettingPondSession.html (edit that file instead) */; ?>