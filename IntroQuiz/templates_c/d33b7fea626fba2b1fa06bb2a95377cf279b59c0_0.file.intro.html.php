<?php /* Smarty version 3.1.27, created on 2016-02-24 07:58:46
         compiled from "templates\intro.html" */ ?>
<?php
/*%%SmartyHeaderCode:2870456cd54a687f539_15992780%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd33b7fea626fba2b1fa06bb2a95377cf279b59c0' => 
    array (
      0 => 'templates\\intro.html',
      1 => 1456297124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2870456cd54a687f539_15992780',
  'variables' => 
  array (
    'intro' => 0,
    'choose_id' => 0,
    'choose_title' => 0,
    'radio_check' => 0,
    'hint_check' => 0,
    'judge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cd54a6a84e96_22891094',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cd54a6a84e96_22891094')) {
function content_56cd54a6a84e96_22891094 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2870456cd54a687f539_15992780';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/css">
<style type = "text/css">
#hint{
	visibility:hidden;
}

#answer{
	display:none;
}

#ans_form{
	margin-left:20px;
}

#ans_form1{
	margin-left:50px;
}

#ans_form2{
	margin-left:70px;
}

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
	width:450px;
}

#main{
	height:100%;
	margin:0 auto;
	padding:0;
	width:600px;
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

	width: 150px;
	height: 40px;

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
	text-align: center;
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

#image_center{
	margin-left: 75px;
}

#audio{
	margin-left: 75px;
}

span.caution{
	font-size: 0.8em;
	color: #000000;
	background: linear-gradient(transparent 80%, #ff0000 90%);
}

</style>
<title>AKBQuiz</title>
<?php echo '<script'; ?>
 language = "javascript" type = "text/javascript"><!--
	function answer(){
		var element1 = document.getElementById("show_answer");
		var element2 = document.getElementById("send_answer");
		var element3 = document.getElementById("ans_form");
		var element4 = document.getElementById("hint_button");

		document.getElementById("answer").style.display = "block";
		document.getElementById("image").src = "images/intro/<?php echo $_smarty_tpl->tpl_vars['intro']->value['id'];?>
.png";
		element1.parentNode.removeChild(element1);
		element2.parentNode.removeChild(element2);
		element3.parentNode.removeChild(element3);
		element4.parentNode.removeChild(element4);

		document.getElementById("judge").style.visibility = "hidden";
	}

	function answer2(){
		var element1 = document.getElementById("show_answer");
		var element2 = document.getElementById("send_answer");
		var element3 = document.getElementById("ans_form");
		var element4 = document.getElementById("hint_button");

		document.getElementById("answer").style.display = "block";
		document.getElementById("image").src = "images/intro/<?php echo $_smarty_tpl->tpl_vars['intro']->value['id'];?>
.png";
		element1.parentNode.removeChild(element1);
		element2.parentNode.removeChild(element2);
		element3.parentNode.removeChild(element3);
		element4.parentNode.removeChild(element4);
	}

	function hint(num){
		switch(num){
			case 1:
				document.getElementById("hint_id").value = 1;
				document.getElementById("hint").style.visibility = "visible";
				document.getElementById("hint_button").onclick = new Function("hint(2)");
			break;
			case 2:
				var element = document.getElementById("hint_button");
				document.getElementById("hint_id").value = 2;
				element.parentNode.removeChild(element);
				document.getElementById("image").src = "images/intro/<?php echo $_smarty_tpl->tpl_vars['intro']->value['id'];?>
.png";
			break;
		}
	}

	function change_level(){
		if(document.forms.option.radio1.checked){
			document.forms.option.radio1.checked = true;
			document.getElementById("send_radio1").value = 1;
			document.getElementById("send_radio2").value = 1;
			document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
									+"<div id = 'ans_form1'><span class = 'main'>曲名：</span></div><br/><div id = 'ans_form2'><select id = 'title_id' name = 'title_id' >"
									+"<option value = '0'></option>"
									+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[0];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_title']->value[0];?>
</option>"
									+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[1];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_title']->value[1];?>
</option>"
									+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[2];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_title']->value[2];?>
</option>"
									+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[3];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_title']->value[3];?>
</option>"
									+"</select></div><br/>"
									+"<br/><br/></span>";
		}
		if(document.forms.option.radio2.checked){
			document.forms.option.radio2.checked = true;
			document.getElementById("send_radio1").value = 2;
			document.getElementById("send_radio2").value = 2;
			document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
									+"<div id = 'ans_form1'><span class = 'main'>曲名：</span><span class = 'caution'>※英数字・記号・スペースは半角</span><br/><br/></div><br/>"
									+"<div id = 'ans_form2'><input type = 'text' id = 'title' name = 'title' size = '30' value = ''/></div>"
									+"<br/><br/></span>";
		}
		if(document.forms.option.radio3.checked){
			document.forms.option.radio3.checked = true;
			document.getElementById("send_radio1").value = 3;
			document.getElementById("send_radio2").value = 3;
			document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
									+"<div id = 'ans_form1'><span class = 'main'>曲名：</span><span class = 'caution'>※英数字・記号・スペースは半角</span><br/><br/></div><br/><div id = 'ans_form2'><input type = 'text' id = 'title' name = 'title' size = '30' value = ''/></div><br/><br/>"
									+"<br/><table width = '370px'><td><div id = 'ans_form1'><span class = 'main'>グループ名：</span></div><br/><div id = 'ans_form2'><select name = 'group_name' >"
									+"<option value = '0'></option>"
									+"<option value = '1'>AKB48</option>"
									+"<option value = '2'>SKE48</option>"
									+"<option value = '3'>NMB48</option>"
									+"<option value = '4'>HKT48</option>"
									+"<option value = '5'>乃木坂46</option>"
									+"<option value = '9'>その他</option>"
									+"</select></div></td>"
									+"<td><div id = 'ans_form1'><span class = 'main'>種類：</span></div><br/><div id = 'ans_form2'><select name = 'type' >"
									+"<option value = '0'></option>"
									+"<option value = '1'>シングル曲</option>"
									+"<option value = '2'>カップリング曲</option>"
									+"<option value = '3'>アルバム曲</option>"
									+"<option value = '4'>公演曲</option>"
									+"<option value = '5'>その他</option>"
									+"</select></div></td></table>"
									+"<br/></span>";
		}
	}

	function choose_form(radio,hint){
		switch(radio){
			case 1:
				document.forms.option.radio1.checked = true;
				document.getElementById("send_radio1").value = 1;
				document.getElementById("send_radio2").value = 1;
				document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
										+"<div id = 'ans_form1'><span class = 'main'>曲名：</span></div><br/><div id = 'ans_form2'><select id = 'title_id' name = 'title_id' >"
										+"<option value = '0'></option>"
										+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[0];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_title']->value[0];?>
</option>"
										+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[1];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_title']->value[1];?>
</option>"
										+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[2];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_title']->value[2];?>
</option>"
										+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[3];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_title']->value[3];?>
</option>"
										+"</select></div><br/>"
										+"<br/><br/></span>";
				break;
			case 2:
				document.forms.option.radio2.checked = true;
				document.getElementById("send_radio1").value = 2;
				document.getElementById("send_radio2").value = 2;
				document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
										+"<div id = 'ans_form1'><span class = 'main'>曲名：</span><span class = 'caution'>※英数字・記号・スペースは半角</span><br/><br/></div><br/>"
										+"<div id = 'ans_form2'><input type = 'text' id = 'title' name = 'title' size = '30' value = ''/></div>"
										+"<br/><br/></span>";
				break;
			case 3:
				document.forms.option.radio3.checked = true;
				document.getElementById("send_radio1").value = 3;
				document.getElementById("send_radio2").value = 3;
				document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
										+"<div id = 'ans_form1'><span class = 'main'>曲名：</span><span class = 'caution'>※英数字・記号・スペースは半角</span><br/><br/></div><br/><div id = 'ans_form2'><input type = 'text' id = 'title' name = 'title' size = '30' value = ''/></div><br/><br/>"
										+"<br/><table width = '370px'><td><div id = 'ans_form1'><span class = 'main'>グループ名：</span></div><br/><div id = 'ans_form2'><select name = 'group_name' >"
										+"<option value = '0'></option>"
										+"<option value = '1'>AKB48</option>"
										+"<option value = '2'>SKE48</option>"
										+"<option value = '3'>NMB48</option>"
										+"<option value = '4'>HKT48</option>"
										+"<option value = '5'>乃木坂46</option>"
										+"<option value = '9'>その他</option>"
										+"</select></div></td>"
										+"<td><div id = 'ans_form1'><span class = 'main'>種類：</span></div><br/><div id = 'ans_form2'><select name = 'type' >"
										+"<option value = '0'></option>"
										+"<option value = '1'>シングル曲</option>"
										+"<option value = '2'>カップリング曲</option>"
										+"<option value = '3'>アルバム曲</option>"
										+"<option value = '4'>公演曲</option>"
										+"<option value = '5'>その他</option>"
										+"</select></div></td></table>"
										+"<br/></span>";
				break;
		}

		switch(hint){
			case 0:
				break;
			case 1:
				document.getElementById("hint_id").value = 1;
				document.getElementById("hint").style.visibility = "visible";
				document.getElementById("hint_button").value = "画像を表示";
				document.getElementById("hint_button").onclick = new Function("hint(2)");
				break;
			case 2:
				var element = document.getElementById("hint_button");
				document.getElementById("hint_id").value = 2;
				element.parentNode.removeChild(element);
				document.getElementById("hint").style.visibility = "visible";
				document.getElementById("image").src = "images/intro/<?php echo $_smarty_tpl->tpl_vars['intro']->value['id'];?>
.png";
				break;
			default:
				break;
		}
	}

	function change_group_name(num){
		var group_name;
		switch(num){
			case 1:
				group_name = "AKB48";
				break;
			case 2:
				group_name = "SKE48";
				break;
			case 3:
				group_name = "NMB48";
				break;
			case 4:
				group_name = "HKT48";
				break;
			case 5:
				group_name = "乃木坂46";
				break;
			case 9:
				group_name = "その他";
				break;
			default:
				group_name = "hoge";
				break;
		}
		document.write(group_name);
	}

	function change_type_name(num){
		var type_name;
		switch(num){
			case 1:
				type_name = "シングル曲";
				break;
			case 2:
				type_name = "カップリング曲";
				break;
			case 3:
				type_name = "アルバム曲";
				break;
			case 4:
				type_name = "公演曲";
				break;
			case 5:
				type_name = "その他";
				break;
			default:
				type_name = "hoge";
				break;
		}
		document.write(type_name);
	}
// --><?php echo '</script'; ?>
>
</head>
<body onLoad = "choose_form(<?php echo $_smarty_tpl->tpl_vars['radio_check']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['hint_check']->value;?>
)">
<div id = "main">
</br><span class = "title">曲当てクイズ</span></br></br></br></br></br>
<table><tr>
<td>
	<div id = "image_center">
	<img src = "images/intro/no_image.png" id = "image">
	</div>
</td>
</tr>
<tr>
<td>
	<div id = "audio">
	<audio controls preload = "auto" autoplay>
		<source src = "musics/<?php echo $_smarty_tpl->tpl_vars['intro']->value['id'];?>
.mp3" type = "audio/mp3">
		<EMBED src = "musics/<?php echo $_smarty_tpl->tpl_vars['intro']->value['id'];?>
.mp3" width = "300" height = "50" controls = "console" repeat = "false"><br/>
	</audio>
	</div>
</td>
</tr>
</table>
<br/>
<form action = "intro.php" method = "post" autocomplete = "off">
	<table class = "main_form" border = 1><tr>
	<td height = "50px">
		<center>
		<?php if (isset($_smarty_tpl->tpl_vars['judge']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['judge']->value == 2) {?>
				<span id = "judge" class = "hint">不正解！</span>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['judge']->value == 1) {?>
				<span id = "judge" class = "hint">入力・選択していない項目があります。</span>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['judge']->value == 0) {?>
				<span id = "judge" class = "hint">正解！</span>
			<?php }?>
		<?php }?>
		</center>
		</td></tr>
		<tr valine = "top">
		<td height = "200px">
		<span id = "answer">
		<table class = "ans_table" width = "450px" height = "200px"><tr>
		<th width = "120px">
			<span class = "main">曲名：</span>
		</th>
		<th>
			<span class = "hint"><?php echo $_smarty_tpl->tpl_vars['intro']->value['title'];?>
</span>
		</th></tr>
		<tr>
		<th width = "120px">
			<span class = "main">グループ名：</span>
		</th>
		<th>
			<span class = "hint"><?php echo '<script'; ?>
 language = "javascript" type = "text/javascript"><!--
				change_group_name(<?php echo $_smarty_tpl->tpl_vars['intro']->value['group_name'];?>
);
			// --><?php echo '</script'; ?>
></span>
		</th></tr>
		<tr>
		<th width = "120px">
			<span class = "main">種類：</span>
		</th>
		<th>
			<span class = "hint"><?php echo '<script'; ?>
 language = "javascript" type = "text/javascript"><!--
				change_type_name(<?php echo $_smarty_tpl->tpl_vars['intro']->value['type'];?>
);
			// --><?php echo '</script'; ?>
></span>
		</th></tr>
		</table>
		</span><br/>
		<span id = "ans_form">
		</span>
		</td></tr>
		<tr><td>
		<input type = "hidden" name = "send_id" value = "<?php echo $_smarty_tpl->tpl_vars['intro']->value['id'];?>
">
		<input type = "hidden" id = "send_radio1" name = "send_radio1" value = "2">
		<table width = "450px" height = "150px">
		<tr><td>
			<center>
			<button class = "button1" type = "submit" id = "send_answer" name = "send_answer">解答を送信</button>
			</center>
		</td>
		<td>
			<center>
			<button class = "button1" type = "button" id = "hint_button" onClick = "hint(1)" >ヒント</button>
			</center>
			<input type = "hidden" id = "hint_id" name = "hint_id" value = "0">
		</td></tr>
		</form>
		<form name = "form_sub" action = "intro.php" method = "post" autocomplete = "off">
		<tr><td>
			<center>
			<button class = "button1" type = "submit" id = "change_button" name = "change_button">曲を変更</button>
			</center>
		</td>
		<input type = "hidden" id = "send_radio2" name = "send_radio2" value = "2">
		<input type = "hidden" name = "change" value = "<?php echo $_smarty_tpl->tpl_vars['intro']->value['id'];?>
">
		<td>
			<center>
			<button class = "button1" type = "button" id = "show_answer" onClick = "answer()">正解を見る</button>
			</center>
		</td></tr>
		</table>
		</form>

		
		

	</td></tr>
	<tr><td height = "200px">
		<div id = "hint"><div id = "ans_form1"><span class = "main">ヒント：</span></div><br/><br/><div id = "ans_form2"><span class = "hint"><?php echo $_smarty_tpl->tpl_vars['intro']->value['hint'];?>
</span></div></div>
	</td>
	</tr>
	</table>
<br/>
		<?php if (isset($_smarty_tpl->tpl_vars['judge']->value)) {?>

			<?php if ($_smarty_tpl->tpl_vars['judge']->value == 0) {?>
				<?php echo '<script'; ?>
 language = "javascript" type = "text/javascript"><!--
					answer2();
				// --><?php echo '</script'; ?>
>
			<?php }?>
		<?php }?>

<a href = "top.php">トップページへ戻る</a>

</div>
<div id = "right-side">
<form name = "option" action = "intro.php" method = "post">
	<input type = "hidden" name = "send_id" value = "<?php echo $_smarty_tpl->tpl_vars['intro']->value['id'];?>
">
	</br><span class = "title">難易度</span></br></br></br></br></br>
	<input type = "radio" id = "radio1" name = "level" value = "easy">
	<label class = "label" for = "radio1">かんたん</label></br>
	<input type = "radio" id = "radio2" name = "level" value = "normal">
	<label class = "label" for = "radio2">ふつう</label></br>
	<input type = "radio" id = "radio3" name = "level" value = "difficult">
	<label class = "label" for = "radio3">むずかしい</label></br></br>
	<center>
	<button class = "button1" type = "button" onClick = "change_level()"> 難易度を変更</button>
	</center>
</form>
</div>
</body>
</html><?php }
}
?>