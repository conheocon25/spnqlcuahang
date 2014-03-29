<?php 
function tpl_5208fa8c_Home__jJUlzXDkdsmZdjGcmP9qVg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Home.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div data-role="page" class="type-interior" id="PageHome">
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 11 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_1 = ('/signin/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="star"<?php echo $_tmp_1 ?>
>Đăng nhập</a>
		</div>
		<?php /* tag "div" from line 14 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 15 */; ?>
<div class="content-primary">				
				<?php 
/* tag "div" from line 16 */ ;
if ($ctx->Feedback !== 'error'):  ;
?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="a" data-content-theme="d">
					<?php /* tag "h3" from line 17 */; ?>
<h3>GIỚI THIỆU</h3>
					<?php /* tag "ul" from line 18 */; ?>
<ul data-role="listview" data-inset="true" data-theme="d" data-dividertheme="b">
						<?php /* tag "li" from line 19 */; ?>
<li data-role="list-divider">Là một hệ thống quản lý<?php /* tag "span" from line 19 */; ?>
<span class="ui-li-count">1</span></li>
						<?php /* tag "li" from line 20 */; ?>
<li>Hỗ trợ giúp điều hành các hoạt động quản lý một đại lý bán hàng.</li>
						<?php /* tag "li" from line 21 */; ?>
<li data-role="list-divider">Thiết kế trên nền tảng Web<?php /* tag "span" from line 21 */; ?>
<span class="ui-li-count">2</span></li>
						<?php /* tag "li" from line 22 */; ?>
<li>Nhanh, gọn, nhẹ, chạy tốt trên nền tảng di động như Android, IOS.</li>
						<?php /* tag "li" from line 23 */; ?>
<li data-role="list-divider">Giao diện thân thiện và thuần Việt<?php /* tag "span" from line 23 */; ?>
<span class="ui-li-count">3</span></li>
						<?php /* tag "li" from line 24 */; ?>
<li>Hệ thống nút bấm, menu, nội dung sao cho dễ dùng và tiện lợi cho người sử dụng.</li>
						<?php /* tag "li" from line 25 */; ?>
<li data-role="list-divider">Sử dụng mọi lúc mọi nơi<?php /* tag "span" from line 25 */; ?>
<span class="ui-li-count">4</span></li>
						<?php /* tag "li" from line 26 */; ?>
<li>Dù ở đâu và bất kì chỗ nào Doanh Nghiệp vần có thể theo dõi và điều hành được quán/chuỗi quán của mình.</li>
					</ul>
				</div><?php endif; ?>
				
				<?php 
/* tag "div" from line 29 */ ;
if ($ctx->Feedback == 'error'):  ;
?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="e" data-content-theme="d">
					<?php /* tag "h3" from line 30 */; ?>
<h3>CẢNH BÁO</h3>
					<?php /* tag "ul" from line 31 */; ?>
<ul data-role="listview" data-inset="true" data-theme="d" data-dividertheme="e">
						<?php /* tag "li" from line 32 */; ?>
<li>Email hoặc mật khẩu gõ sai. Vui lòng xác định lại cho đúng trước khi đăng nhập !</li>
						<?php 
/* tag "a" from line 33 */ ;
if (null !== ($_tmp_1 = ('/signin/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="star"<?php echo $_tmp_1 ?>
>Đăng nhập</a>
					</ul>
				</div><?php endif; ?>

				<?php 
/* tag "div" from line 36 */ ;
if ($ctx->Feedback == 'error_update'):  ;
?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="e" data-content-theme="d">
					<?php /* tag "h3" from line 37 */; ?>
<h3>CẢNH BÁO</h3>
					<?php /* tag "ul" from line 38 */; ?>
<ul data-role="listview" data-inset="true" data-theme="d" data-dividertheme="e">
						<?php /* tag "li" from line 39 */; ?>
<li>Kiểm tra lại đường truyền Internet !</li>
						<?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_1 = ('/signin/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="star"<?php echo $_tmp_1 ?>
>Đăng nhập</a>
					</ul>
				</div><?php endif; ?>

			</div><!--/content-primary -->
			<?php /* tag "div" from line 44 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 45 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 46 */; ?>
<h3>SẢN PHẨM</h3>
					<?php /* tag "ul" from line 47 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 48 */; ?>
<li><?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_1 = ('http://cafe.123app.net'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>CAFE WIFI</a></li>
						<?php /* tag "li" from line 49 */; ?>
<li><?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ('http://kaof.123app.net'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KARAOKE GIA ĐÌNH</a></li>
						<?php /* tag "li" from line 50 */; ?>
<li><?php 
/* tag "a" from line 50 */ ;
if (null !== ($_tmp_1 = ('http://resf.123app.net'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>QUÁN ĂN GIA ĐÌNH</a></li>
						<?php /* tag "li" from line 51 */; ?>
<li><?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_1 = ('http://hotel.123app.net'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHÁCH SẠN</a></li>
						<?php /* tag "li" from line 52 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_1 = ('http://vendaf.123app.net'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐẠI LÝ BÁN HÀNG</a></li>
						<?php /* tag "li" from line 53 */; ?>
<li><?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ('http://fipoma.123app.net'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>QUẢN LÝ AO CÁ</a></li>
					</ul>
				</div>
			</div>
		</div><!-- /content -->
		<?php /* tag "div" from line 58 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 58 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\minhtai\mvc\templates\Home.html (edit that file instead) */; ?>