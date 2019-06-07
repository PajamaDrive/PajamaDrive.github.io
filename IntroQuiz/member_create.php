<?php
	function set_Image($name){
		if(isset($_FILES['image'])){
			if(!$_FILES['image']['error']){		
				// 画像を保存する関数
				function saveImage($img = null, $file = null, $ext = null) {
					if (!$img || !$file || !$ext) return false;
					switch ($ext) {
						case "jpg" :
							$result = imageJPEG($img, $file);
							break;
						case "gif" :
							$result = imageGIF($img, $file);
							break;
						case "png" :
							$result = imagePNG($img, $file);
							break;
						default : return false; break;
					}
					chmod($file, 0644); // パーミッション変更
					return $result;
				}

				// 画像サイズを変更する関数
				function get_ImageSize($img = null, $maxsize = 300) {
					if (!$img) return false;
					$w0 = $w1 = imageSx($img); // 画像リソースの幅
					$h0 = $h1 = imageSy($img); // 画像リソースの高さ
					if ($w0 > $maxsize) { // $maxsize以下の大きさに変更する
						$w1 = $maxsize;
						$h1 = (int) $h0 * ($maxsize / $w0);
					}
					if ($h1 > $maxsize) {
						$w1 = (int) $w1 * ($maxsize / $h1);
						$h1 = $maxsize;
					}

					return array(
						'w0'=>$w0, // 元画像の幅
						'h0'=>$h0, // 元画像の高さ
						'w1'=>$w1, // 保存画像の幅
						'h1'=>$h1, // 保存画像の高さ
					);
				}
	
				$file = $_FILES['image'];
				$tmp_name = $file['tmp_name'];
				$tmp_size = getimagesize($tmp_name);
				$img = $extension = null;
				switch ($tmp_size[2]) { // 画像の種類を判別
					case 1 : // GIF
						$img = imageCreateFromGIF($tmp_name);
						$extension = 'png';
						break;
					case 2 : // JPEG
						$img = imageCreateFromJPEG($tmp_name);
						$extension = 'png';
						break;
					case 3 : // PNG
						$img = imageCreateFromPNG($tmp_name);
						$extension = 'png';
						break;
					default : break;
				}
				
				//保存時のファイル名を作成する
				$save_dir = '/free_work/images/members/';
				$save_filename = $name;
				$save_basename = $save_filename. '.' . $extension;
				$save_path = $_SERVER["DOCUMENT_ROOT"]. $save_dir. $save_basename;
				/*
				while (file_exists($save_path)) { // 同名ファイルがあればファイル名を変更する
					$save_filename .= mt_rand(0, 9);
					$save_basename = $save_filename. '.' . $extension;
					$save_path = $_SERVER["DOCUMENT_ROOT"]. $save_dir. $save_basename;
				}
				*/

				//画像データ作成
				$size = 300;
				$img_size = get_ImageSize($img, $size); // 最大200pxの画像サイズ
				$out = imageCreateTrueColor($img_size['w1'], $img_size['h1']); // 新しい画像データ
 			
				// 背景色を設定する
				$color_white = imageColorAllocate($out, 255, 255, 255); // 色データを作成
				imageFill($out, 0, 0, $color_white);
 
				// $imgの画像情報を$outにコピーする
				imageCopyResampled(
					$out, // コピー先
					$img, // コピー元
					0, 0, 0, 0, // 座標（コピー先:x, コピー先:y, コピー元:x, コピー元:y）
					$img_size['w1'], $img_size['h1'], $img_size['w0'], $img_size['h0'] // サイズ（コピー先:幅, コピー先:高さ, コピー元:幅, コピー元:高さ）
				);

				saveImage($out, $save_path, $extension);
			}
		}
	}

	require_once 'smarty/Smarty.class.php';

	$smarty = new Smarty();
	$smarty->template_dir = 'templates/';
	$smarty->compile_dir = 'templates_c/';
	
	if($_FILES['image']['error'] or $_POST['kanji_name'] == '' or $_POST['kana_name'] == '' or $_POST['hint'] == '' or $_POST['group1'] =='' or $_POST['group2'] ==''){
		$err_num = 0;
		if($_FILES['image']['error'])
			$err_num++;
		if($_POST['kanji_name'] == "")
			$err_num += 2;
		if($_POST['kana_name'] == "")
			$err_num += 4;
		if($_POST['hint'] == "")
			$err_num += 8;
		if($_POST['group1'] == "")
			$err_num += 16;
		if($_POST['group2'] == "")
			$err_num += 32;
		$smarty->assign('err_num', $err_num);
		$smarty->display('member_create_form.html');
		exit;
	}

	$count = 1;
	try{
		$pdo = new PDO('mysql:dbname=phpdb;host=127.0.0.1','root','13eas17ohs',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$pdo->query("SET NAMES utf8");

		$stmt = $pdo->query('select * from members');
		while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
			if($data['id'] != $count)
				break;
			$count++;
		}

		$stmt = $pdo->prepare('insert into members(id, kanji_name, kana_name, hint, group1, group2) values (:id, :kanji_name, :kana_name, :hint, :group1, :group2)');
		$stmt->bindvalue(':id', $count ,PDO::PARAM_INT);
		$stmt->bindvalue(':kanji_name', $_POST['kanji_name']);
		$stmt->bindvalue(':kana_name', $_POST['kana_name']);
		$stmt->bindvalue(':hint', $_POST['hint']);
		$stmt->bindvalue(':group1', $_POST['group1'] ,PDO::PARAM_INT);
		if($_POST['group2'] == 0)
			$stmt->bindvalue(':group2', null ,PDO::PARAM_NULL);
		else
			$stmt->bindvalue(':group2', $_POST['group2'] ,PDO::PARAM_INT);
		$stmt->execute();

	}catch(PDOException $e){
		exit($e->getMessage());
	}

	$pdo = null;
	set_Image($count);
	$smarty->display("complete.html");

