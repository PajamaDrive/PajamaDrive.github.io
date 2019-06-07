<?php /* Smarty version 3.1.27, created on 2016-02-24 07:45:45
         compiled from "templates\intro_create_form.html" */ ?>
<?php
/*%%SmartyHeaderCode:847156cd5199ee66e2_97800174%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c15650b2efa051647ae8312cfee03d2948f521e3' => 
    array (
      0 => 'templates\\intro_create_form.html',
      1 => 1456296318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '847156cd5199ee66e2_97800174',
  'variables' => 
  array (
    'err_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cd519a0bf635_30444643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cd519a0bf635_30444643')) {
function content_56cd519a0bf635_30444643 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '847156cd5199ee66e2_97800174';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/css">
<style type = "text/css">
body{
	background-image:url("images/others/logo.png");
	background-size:250px;
}

.ans_table{
	text-align:left;
}

.main_form{
	background-color:rgba(255,75,255,1.0);
	border-color:#000000;
	border-collapse:collapse;
	width:400px;
}

#main{
	height:100%;
	margin:0 auto;
	padding:0;
	width:600px;
}

#button_center{
	margin-left:150px;
}


#right-side{
	background-color:rgba(255,75,255,1.0);
	height:100%;
	right:0;
	margin:0;
	padding:0;
	position:absolute;
	position:fixed;
	top:0;
	width:200px;
}

button.button1 {

/* 文字サイズを1.0emに指定 */
	font-size: 1.0em;

	/* 文字の太さをboldに指定 */
	font-weight: bold;

	/* 縦方向に10px、横方向に20pxの余白を指定 */
	padding: 10px 10px;

	/* 文字色を白色に指定 */
	color: #fff;

	/* ボーダーをなくす */
	 border-style: none;

	/* ボタンの影の指定
	 * 影の横幅を2px
	 * 縦長を2px
	 * ぼかしを3px
	 * 広がりを1px
	 * 色を#666（グレー）に指定 */

	box-shadow: 2px 2px 3px 1px #666;
	-moz-box-shadow: 2px 2px 3px 1px #666;
	-webkit-box-shadow: 2px 2px 3px 1px #666;

	/* テキストの影の指定
	 * 影の横幅を1px
	 * 縦長を1px
	 * ぼかしを2px
	 * 色を#000（黒）に指定 */

	text-shadow: 1px 1px 2px #000;

	/* グラデーションの指定 */

	background: -moz-linear-gradient(bottom, #36d, #248 50%, #36d);
	background: -webkit-gradient(linear, left bottom, left top, from(#36d), color-stop(0.5, #248), to(#36d));

	/* 角丸の指定 */

	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

button.button1:hover {
	/* 透明度を20%に指定 */
	opacity: 0.8;
}

span.title{
	font-size: 3.0em;
	font-weight: bold;
	padding: 10px 10px;
	background: linear-gradient(transparent 20%, #ff0070 90%);
	color: #fff;
	text-shadow: 3px 3px 4px #000;
}

a:link {
	 color: #0000ff; 
}

a:visited {
	 color: #000080; 
}

a:hover { 
	 color: #ff0000; 
}

a:active {
	 color: #ff8000; 
}

a{
	font-size: 1.5em;
}

/* ラジオボタンは非表示にする */

input[type=radio] {
	display: none; 
}

/* チェックされた時のスタイル */

input[type="radio"]:checked + label {
	background: #50D3F4;
	color: #FFF; 
}

/* マウスオーバーしたときのスタイル */
.label:hover {
	background-color: #E2EDF9; 
	color: #000; 
}

/* labelのスタイル */
.label {
	font-size: 1.5em;
	color: #fff;
	border: #ffd000 solid 2px;
	display: block;
	height: 45px;
	line-height: 45px
	padding-left: 20px;
	padding-right: 20px;
	cursor: pointer; 
}

span.main{
	font-size: 1.2em;
	color: #ffffff;
	background-color:rgba(230,130,0,1.0);
}

span.hint{
	font-size: 1.5em;
	font-weight: bold;
	color: #000000;
	background: linear-gradient(transparent 80%, #ff0000 90%);
}

span.head{
	font-size: 5.0em;
	font-weight: bold;
	padding: 10px 10px;
	background: linear-gradient(transparent 20%, #ff0000 90%);
	color: #ff00ff;
	text-shadow: 5px 5px 7px #000;
}

span.caution{
	font-size: 0.8em;
	color: #000000;
	background: linear-gradient(transparent 80%, #ff0000 90%);
}
</style>
<title>AKBQuiz</title>
</head>
<body>
<div id = "main">
<br/><span class = "title">曲当てクイズの作成</span></br></br></br></br></br>
<form action = "intro_create.php" method = "post" enctype = "multipart/form-data" autocomplete = "off">
	<span class = "main">画像：</span></br><input type = "file" name = "image" accept = "image/*"/></br>
	<?php if (isset($_smarty_tpl->tpl_vars['err_num']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['err_num']->value&1) {?><span class = "hint">画像を選択してください。</span><?php }?>
	<?php }?><br/></br></br></br>
	<span class = "main">音源：</span></br><input type = "file" name = "music" accept = "audio/*"/></br>
	<?php if (isset($_smarty_tpl->tpl_vars['err_num']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['err_num']->value&2) {?><span class = "hint">音源を選択してください。</span><?php }?>
	<?php }?><br/><br/></br></br>
	<span class = "main">曲名：</span><span class = "caution">※英数字・記号・スペースは半角</span><br/><input type = "text" name = "title" size = "50" value = ""/></br>
	<?php if (isset($_smarty_tpl->tpl_vars['err_num']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['err_num']->value&4) {?><span class = "hint">曲名を入力してください。</span><?php }?>
	<?php }?><br/><br/></br></br>
	<span class = "main">ヒント：</span></br><input type = "text" name = "hint" size = "50" value = ""/></br>
	<?php if (isset($_smarty_tpl->tpl_vars['err_num']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['err_num']->value&8) {?><span class = "hint">ヒントを入力してください。</span><?php }?>
	<?php }?><br/><br/></br></br>
	<span class = "main">グループ名：</span></br><select name = "group"></br>
				<option value = ""></option>
				<option value = "1">AKB48</option>
				<option value = "2">SKE48</option>
				<option value = "3">NMB48</option>
				<option value = "4">HKT48</option>
				<option value = "5">乃木坂46</option>
				<option value = "9">その他</option>
				</select></br>
				<?php if (isset($_smarty_tpl->tpl_vars['err_num']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['err_num']->value&16) {?><span class = "hint">グループ名を選択してください。</span><?php }?>
				<?php }?><br/></br></br><br/>
	<span class = "main">種類：</span></br><select name = "type"></br>
		  <option value = ""></option>
		  <option value = "1">シングル曲</option>
		  <option value = "2">カップリング曲</option>
		  <option value = "3">アルバム曲</option>
		  <option value = "4">公演曲</option>
		  <option value = "5">その他</option>
		  </select></br>
		  <?php if (isset($_smarty_tpl->tpl_vars['err_num']->value)) {?>
			  <?php if ($_smarty_tpl->tpl_vars['err_num']->value&32) {?><span class = "hint">種類を選択してください。</span><?php }?>
		  <?php }?><br/></br></br>
	<div id = "button_center">
	<button class = "button1" type = "submit">クイズを作成</button>
	</div>
</form></br>
<a href = "top.php">トップページへ戻る</a>
</div>
</body>
</html><?php }
}
?>