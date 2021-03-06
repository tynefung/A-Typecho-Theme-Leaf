<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig(Typecho_Widget_Helper_Form $form) {
	
	//首页文字
	$IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, 'Leaf Hewro', _t('首页的英文字母'), _t('在这里输入字母，不要太长'));
	$form->addInput($IndexName);
	
	//首页图标

	$socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('输入GitHub链接'), _t('在这里输入GitHub链接,带http://'));
	$form->addInput($socialgithub);
	$socialbook = new Typecho_Widget_Helper_Form_Element_Text('socialbook', NULL,'http://diary.ihewro.com/', _t('输入另一个博客的地址'), _t('在这里输入另一个博客链接,带http://'));
	$form->addInput($socialbook);
	$socialmail = new Typecho_Widget_Helper_Form_Element_Text('socialmail', NULL, 'mailto:ihewro@163.com', _t('输入邮箱地址'), _t('在这里输邮箱地址,如mailto:ihewro@163.com'));
	$form->addInput($socialmail);
	//首页图片
	$indeximage = new Typecho_Widget_Helper_Form_Element_Text('indeximage', NULL, 'http://www.ihewro.com/pic/wall1.jpg', _t('输入图片地址'), _t('在这里输入首页大图地址，建议不超过1M'));
	$form->addInput($indeximage);
	
	
	//底部友链HTML代码
	$links = new Typecho_Widget_Helper_Form_Element_Textarea('links', NULL,'<a href="http://www.wecho.cc/" class="link" target="_blank">SNlone</a><i>/</i>
<a href="http://caisiduo.xyz/" class="link" target="_blank">CAISIDUO</a><i>/</i>
<a href="http://sqiu.me/" class="link" target="_blank">三秋</a><i>/</i>
<a href="https://hran.me/" class="link" target="_blank">hran</a>  <i>/</i>
<a href="http://techair.cc/" class="link" target="_blank">飞翔的技术宅</a><i>/</i>
<a href="http://fyzgxy.cn/" class="link" target="_blank">雷的窝</a><i>/</i>
<a href="https://www.dreamwings.cn/" class="link" target="_blank">千千</a><i>/</i>
<a href="http://czduban.com/" class="link" target="_blank">以歌</a><i>/</i>
<a href="http://yufanboke.top/" class="link" target="_blank">yufan</a><i>/</i>
<a href="https://quericy.me/" class="link" target="_blank">quericy</a><i>/</i>
<a href="https://mist.ink/" class="link" target="_blank">十四行詩</a><i>/</i>
<a href="http://ryli.pw/" class="link" target="_blank">RY</a><i>/</i>
<a href="https://blog.timelovelife.com/" class="link" target="_blank">Jackrabbit</a><i>/</i>
<a href="http://www.4zen.top/" class="link" target="_blank">1900</a>', _t('友链样式的HTML代码'), _t('填入你的HTML代码'));
	$form->addInput($links);
	
	//播放器音乐
	$musiclist = new Typecho_Widget_Helper_Form_Element_Textarea('musiclist', NULL,'{title:"晚安；）",artist:"性人盒",mp3:"http://7xlk7n.com1.z0.glb.clouddn.com/wanan.mp3",cover:"http://p4.music.126.net/nz1ZXXSYg85COLFURrJodw==/7975857349674458.jpg",},
{title:"远山",artist:"末小皮",mp3:"http://7xlk7n.com1.z0.glb.clouddn.com/%E8%BF%9C%E5%B1%B1.mp3",cover:"http://p3.music.126.net/BceFKRe6K1aMsnu1QTFBYw==/8978611952438381.jpg",},', _t('音乐播放器的音乐列表'), _t('根据已给的格式填入你的HTML代码'));
	$form->addInput($musiclist);

}




// pjax判断

function is_pjax(){   
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];   
}