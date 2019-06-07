<?php /* Smarty version 3.1.27, created on 2016-02-24 08:19:05
         compiled from "templates\member.html" */ ?>
<?php
/*%%SmartyHeaderCode:3094656cd59690755f6_68480946%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea6e81001edd34d3be88a0402b61836bb200fc1' => 
    array (
      0 => 'templates\\member.html',
      1 => 1456298342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3094656cd59690755f6_68480946',
  'variables' => 
  array (
    'choose_id' => 0,
    'choose_name' => 0,
    'radio_check' => 0,
    'hint_check' => 0,
    'member' => 0,
    'judge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cd59692d2e01_97350631',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cd59692d2e01_97350631')) {
function content_56cd59692d2e01_97350631 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3094656cd59690755f6_68480946';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/css">
<style type = "text/css">
#hint1{
	visibility:hidden;
}

#hint2{
	visibility:hidden;
}

#answer{
	display:none;
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

#disp_center{
	margin-left: auto;
	margin-right: auto;
}

#image_center{
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
	function name_disp(name){
		var new_name = [];
		var len = name.length;
		var num = Math.floor(len * 2 /3);
		for(var i =0; i < len; i++){
			new_name[i] = name[i];
		}
		var count = 0;
		while(count != num){
			var rand = Math.floor(Math.random() * len);
			if(new_name[rand] != "○"){
				count++
				new_name[rand] = "○";
			}
		};
		var return_name = "";
		for(var i = 0; i < len; i++){
			return_name += new_name[i];
		}
		document.write(return_name);
	}

	function answer(num){
		var element1 = document.getElementById("show_answer");
		var element2 = document.getElementById("send_answer");
		var element3 = document.getElementById("ans_form");
		var element4 = document.getElementById("hint_button");

		document.getElementById("answer").style.display = "block";
		element1.parentNode.removeChild(element1);
		element2.parentNode.removeChild(element2);
		element3.parentNode.removeChild(element3);
		element4.parentNode.removeChild(element4);

		if(num == 0)
			document.getElementById("judge").style.visibility = "hidden";
	}

	function hint(num){
		switch(num){
			case 1:
				document.getElementById("hint_id").value = 1;
				document.getElementById("hint1").style.visibility = "visible";
				document.getElementById("hint_button").value = "ヒント2";
				document.getElementById("hint_button").onclick = new Function("hint(2)");
			break;
			case 2:
				var element = document.getElementById("hint_button");
				document.getElementById("hint_id").value = 2;
				document.getElementById("hint2").style.visibility = "visible";
				element.parentNode.removeChild(element);
			break;
		}
	}

	function change_level(){
		if(document.forms.option.radio1.checked){
			document.forms.option.radio1.checked = true;
			document.getElementById("send_radio1").value = 1;
			document.getElementById("send_radio2").value = 1;
			document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
									+"<div id = 'ans_form1'><span class = 'main'> 名前(漢字):</span></div><br/><div id = 'ans_form2'><select id = 'name_id' name = 'name_id' >"
									+"<option value = '0'></option>"
									+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[0];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_name']->value[0];?>
</option>"
									+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[1];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_name']->value[1];?>
</option>"
									+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[2];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_name']->value[2];?>
</option>"
									+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[3];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_name']->value[3];?>
</option>"
									+"</select></div><br/>"
									+"<br/><br/></span>";
		}
		if(document.forms.option.radio2.checked){
			document.forms.option.radio2.checked = true;
			document.getElementById("send_radio1").value = 2;
			document.getElementById("send_radio2").value = 2;
			document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
									+"<div id = 'ans_form1'><span class = 'main'>名前(漢字orかな)：</span></div><br/>"
									+"<div id = 'ans_form2'><input type = 'text' id = 'name' name = 'name' size = '30' value = ''/></div>"
									+"<br/><br/></span>";
		}
		if(document.forms.option.radio3.checked){
			document.forms.option.radio3.checked = true;
			document.getElementById("send_radio1").value = 3;
			document.getElementById("send_radio2").value = 3;
			document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
									+"<div id = 'ans_form1'><span class = 'main'>名前(漢字)：</span></div><br/><div id = 'ans_form2'><input type = 'text' id = 'kanji_name' name = 'kanji_name' size = '30' value = ''/></div><br/><br/>"
									+"<div id = 'ans_form1'><span class = 'main'>名前(かな)：</span></div><br/><div id = 'ans_form2'><input type = 'text' id = 'kana_name' name = 'kana_name' size = '30' value = ''/></div><br/>"
									+"<br/><table width = '420px'><td><div id = 'ans_form1'><span class = 'main'>本籍：<span></div><br/><div id = 'ans_form2'><select name = 'group1' >"
									+"<option value = '0'></option>"
									+"<option value = '1'>AKB48</option>"
									+"<option value = '2'>SKE48</option>"
									+"<option value = '3'>NMB48</option>"
									+"<option value = '4'>HKT48</option>"
									+"<option value = '5'>NGT48</option>"
									+"<option value = '6'>SNH48</option>"
									+"<option value = '7'>JKT48</option>"
									+"<option value = '10'>乃木坂46</option>"
									+"<option value = '8'>卒業</option>"
									+"<option value = '9'>その他</option>"
									+"</select></div></td>"
									+"<td><div id = 'ans_form1'><span class = 'main'>兼任：</span><span class = 'caution'>※卒業者は兼任なしを選択</span><br/></div><br/><div id = 'ans_form2'><select name = 'group2' >"
									+"<option value = '0'></option>"
									+"<option value = '11'>兼任なし</option>"
									+"<option value = '1'>AKB48</option>"
									+"<option value = '2'>SKE48</option>"
									+"<option value = '3'>NMB48</option>"
									+"<option value = '4'>HKT48</option>"
									+"<option value = '5'>NGT48</option>"
									+"<option value = '6'>SNH48</option>"
									+"<option value = '7'>JKT48</option>"
									+"<option value = '10'>乃木坂46</option>"
									+"<option value = '9'>その他</option>"
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
										+"<div id = 'ans_form1'><span class = 'main'> 名前(漢字):</span></div><br/><div id = 'ans_form2'><select id = 'name_id' name = 'name_id' >"
										+"<option value = '0'></option>"
										+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[0];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_name']->value[0];?>
</option>"
										+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[1];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_name']->value[1];?>
</option>"
										+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[2];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_name']->value[2];?>
</option>"
										+"<option value = \"<?php echo $_smarty_tpl->tpl_vars['choose_id']->value[3];?>
\"><?php echo $_smarty_tpl->tpl_vars['choose_name']->value[3];?>
</option>"
										+"</select></div><br/>"
										+"<br/><br/></span>";
				break;
			case 2:
				document.forms.option.radio2.checked = true;
				document.getElementById("send_radio1").value = 2;
				document.getElementById("send_radio2").value = 2;
				document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
										+"<div id = 'ans_form1'><span class = 'main'>名前(漢字orかな)：</span></div><br/>"
										+"<div id = 'ans_form2'><input type = 'text' id = 'name' name = 'name' size = '30' value = ''/></div>"
										+"<br/><br/></span>";
				break;
			case 3:
				document.forms.option.radio3.checked = true;
				document.getElementById("send_radio1").value = 3;
				document.getElementById("send_radio2").value = 3;
				document.getElementById("ans_form").innerHTML = "<span id = 'ans_form'>"
										+"<div id = 'ans_form1'><span class = 'main'>名前(漢字)：</span></div><br/><div id = 'ans_form2'><input type = 'text' id = 'kanji_name' name = 'kanji_name' size = '30' value = ''/></div><br/><br/>"
										+"<div id = 'ans_form1'><span class = 'main'>名前(かな)：</span></div><br/><div id = 'ans_form2'><input type = 'text' id = 'kana_name' name = 'kana_name' size = '30' value = ''/></div><br/>"
										+"<br/><table width = '420px'><td><div id = 'ans_form1'><span class = 'main'>本籍：<span></div><br/><div id = 'ans_form2'><select name = 'group1' >"
										+"<option value = '0'></option>"
										+"<option value = '1'>AKB48</option>"
										+"<option value = '2'>SKE48</option>"
										+"<option value = '3'>NMB48</option>"
										+"<option value = '4'>HKT48</option>"
										+"<option value = '5'>NGT48</option>"
										+"<option value = '6'>SNH48</option>"
										+"<option value = '7'>JKT48</option>"
										+"<option value = '10'>乃木坂46</option>"
										+"<option value = '8'>卒業</option>"
										+"<option value = '9'>その他</option>"
										+"</select></div></td>"
										+"<td><div id = 'ans_form1'><span class = 'main'>兼任：</span><span class = 'caution'>※卒業者は兼任なしを選択</span><br/></div><br/><div id = 'ans_form2'><select name = 'group2' >"
										+"<option value = '0'></option>"
										+"<option value = '11'>兼任なし</option>"
										+"<option value = '1'>AKB48</option>"
										+"<option value = '2'>SKE48</option>"
										+"<option value = '3'>NMB48</option>"
										+"<option value = '4'>HKT48</option>"
										+"<option value = '5'>NGT48</option>"
										+"<option value = '6'>SNH48</option>"
										+"<option value = '7'>JKT48</option>"
										+"<option value = '10'>乃木坂46</option>"
										+"<option value = '9'>その他</option>"
										+"</select></div></td></table>"
										+"<br/></span>";
				break;
		}

		switch(hint){
			case 0:
				break;
			case 1:
				document.getElementById("hint_id").value = 1;
				document.getElementById("hint1").style.visibility = "visible";
				document.getElementById("hint_button").value = "ヒント2";
				document.getElementById("hint_button").onclick = new Function("hint(2)");
			break;
			case 2:
				var element = document.getElementById("hint_button");
				document.getElementById("hint_id").value = 2;
				document.getElementById("hint1").style.visibility = "visible";
				document.getElementById("hint2").style.visibility = "visible";
				element.parentNode.removeChild(element);
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
				group_name = "NGT48";
				break;
			case 6:
				group_name = "SNH48";
				break;
			case 7:
				group_name = "JKT48";
				break;
			case 8:
				group_name = "卒業";
				break;
			case 9:
				group_name = "その他";
				break;
			case 10:
				group_name = "乃木坂46";
				break;
			default:
				group_name = "hoge";
				break;
		}
		document.write(group_name);
	}
// --><?php echo '</script'; ?>
>
</head>
<body onLoad = "choose_form(<?php echo $_smarty_tpl->tpl_vars['radio_check']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['hint_check']->value;?>
)">
<div id = "main">
<br/><span class = "title">メンバークイズ</span></br></br></br></br></br>
<div id = "image_center">
<img src = "images/members/<?php echo $_smarty_tpl->tpl_vars['member']->value['id'];?>
.png"><br/><br/>
</div>
<form name = "form_main" action = "member.php" method = "post" autocomplete = "off">
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
		<td width = "120px">
			<span class = "main">名前：</span>
		</td>
		<td>
			<span class = "hint"><?php echo $_smarty_tpl->tpl_vars['member']->value['kanji_name'];?>
</span>
		</td></tr>
		<tr>
		<td width = "120px"></td>
		<td>
			<span class = "hint">(<?php echo $_smarty_tpl->tpl_vars['member']->value['kana_name'];?>
)</span>
		</td></tr>
		<tr>
		<td width = "120px">
			<span class = "main">本籍：</span>
		</td>
		<td>
			<span class = "hint"><?php echo '<script'; ?>
 language = "javascript" type = "text/javascript"><!--
				change_group_name(<?php echo $_smarty_tpl->tpl_vars['member']->value['group1'];?>
);
			// --><?php echo '</script'; ?>
></span>
		</td></tr>
		<tr>
		<td width = "120px">
			<span class = "main">兼任：</span>
		</td>
		<td>
			<span class = "hint"><?php if (is_null($_smarty_tpl->tpl_vars['member']->value['group2'])) {?>
				兼任なし
			<?php } else { ?>
				<?php echo '<script'; ?>
 language = "javascript" type = "text/javascript"><!--
					change_group_name(<?php echo $_smarty_tpl->tpl_vars['member']->value['group2'];?>
);
				// --><?php echo '</script'; ?>
>
			<?php }?></span>
		</td></tr>
		</table>
		</span><br/>
		<span id = "ans_form">
		</span>
	</td></tr>
	<td>
		<input type = "hidden" name = "send_id" value = "<?php echo $_smarty_tpl->tpl_vars['member']->value['id'];?>
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
			<button class = "button1" type = "button" id = "hint_button" onClick = "hint(1)">ヒント</button>
			</center>
			<input type = "hidden" id = "hint_id" name = "hint_id" value = "0">
		</td></tr>
		</form>
		<form name = "form_sub" action = "member.php" method = "post" autocomplete = "off">
		<tr><td>
			<center>
			<button class = "button1" type = "submit" id = "change_button" name = "change_button">メンバーを変更</button>
			</center>
		</td>
		<input type = "hidden" id = "send_radio2" name = "send_radio2" value = "2">
		<input type = "hidden" name = "change" value = "<?php echo $_smarty_tpl->tpl_vars['member']->value['id'];?>
">
		<td>
			<center>
			<button class = "button1" type = "button" id = "show_answer" onClick = "answer(0)">正解を見る</button>
			</center>
		</td></tr>
		</table>
		</form>
	</td></tr>
	<tr><td>
		<table height = "300px">
		<tr><td>
			<div id = "hint1"><div id = "ans_form1"><span class = "main">ヒント1：</span></div><br/><br/><div id = "ans_form2"><span class = "hint"><?php echo $_smarty_tpl->tpl_vars['member']->value['hint'];?>
</span></div></div>
		</td></tr>
		<tr><td>
			<div id = "hint2"><div id = "ans_form1"><span class = "main">ヒント2：</span></div><br/><br/><div id = "ans_form2"><span class = "hint">
			<?php echo '<script'; ?>
 language = "javascript" type = "text/javascript"><!--
				name_disp("<?php echo $_smarty_tpl->tpl_vars['member']->value['kana_name'];?>
");
			// --><?php echo '</script'; ?>
></span></div></div><br/>
		</td></tr>
		</table>
	</td>
	</tr></table>
<br/>


<a href = "top.php">トップページへ戻る</a>
	<?php if (isset($_smarty_tpl->tpl_vars['judge']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['judge']->value == 0) {?>
			<?php echo '<script'; ?>
 language = "javascript" type = "text/javascript"><!--
				answer(1);
			// --><?php echo '</script'; ?>
>
		<?php }?>
	<?php }?>
</div>
<div id = "right-side">
<form name = "option" action = "member.php" method = "post">
	<input type = "hidden" name = "send_id" value = "<?php echo $_smarty_tpl->tpl_vars['member']->value['id'];?>
">
	</br><span class = "title">難易度</span></br></br></br></br></br>
	<input type = "radio" id = "radio1" name = "level" value = "easy">
	<label class = "label" for = "radio1">かんたん</label></br>
	<input type = "radio" id = "radio2" name = "level" value = "normal">
	<label class = "label" for = "radio2">ふつう</label></br>
	<input type = "radio" id = "radio3" name = "level" value = "difficult">
	<label class = "label" for = "radio3">むずかしい</label></br></br>
	<center>
	<button class = "button1" type = "button" onClick = "change_level()">難易度を変更</button>
	</center>
</form>
</div>
</body>
</html><?php }
}
?>