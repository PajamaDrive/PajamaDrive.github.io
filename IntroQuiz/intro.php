<?php
	require_once 'smarty/Smarty.class.php';

	$smarty = new Smarty();
	$smarty->template_dir = 'templates/';
	$smarty->compile_dir = 'templates_c/';
	
	try{
		$pdo = new PDO('mysql:dbname=phpdb;host=127.0.0.1','root','13eas17ohs',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$pdo->query("SET NAMES utf8");

		/*音楽選択処理*/
		$stmt = $pdo->query('select count(*) from musics');
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		$max = $data['count(*)'];

		$id = rand(1,$max);

		if(isset($_POST['send_answer']))
			$id = $_POST['send_id'];

		/*音楽変更処理*/
		if(isset($_POST['change_button']))
			do{
				$id = rand(1, $max);
				if($_POST['change'] != $id)
					break;
			}while(isset($_POST['change_button']));
		$stmt = $pdo->prepare('select * from musics where id = :id');
		$stmt->bindvalue(':id', $id ,PDO::PARAM_INT);
		$stmt->execute();

		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		$smarty->assign('intro',$data);

		/*答え合わせ*/
		if(isset($_POST['send_radio1'])){
			switch($_POST['send_radio1']){
				/*かんたん*/
				case 1:
					if(isset($_POST['title_id'])){
						if($_POST['title_id'] == $data['id'])
							$judge = 0;
						else if($_POST['title_id'] == 0)
							$judge = 1;
						else
							$judge = 2;
					}
					break;
				/*ふつう*/
				case 2:
					if(isset($_POST['title'])){
						if(strcmp($_POST['title'], $data['title']) == 0)
							$judge = 0;
						else if($_POST['title'] == "")
							$judge = 1;
						else
							$judge = 2;
					}
					break;
				/*むずかしい*/
				case 3:
					if(isset($_POST['title']) and isset($_POST['group_name']) and isset($_POST['type'])){
						if(!$_POST['title'] == ''){
							if(!$_POST['group_name'] == 0 and !$_POST['type'] == 0){
								if(strcmp($_POST['title'], $data['title']) == 0){
									if($_POST['group_name'] == $data['group_name']){
										if($_POST['type'] == $data['type'])
											$judge = 0;
										else
											$judge = 2;
									}
									else
										$judge = 2;
								}
								else
									$judge = 2;
							}
							else
								$judge = 1;
						}
						else
							$judge = 1;
					}
					else
						$judge = 1;
					break;
			}
			$smarty->assign('judge',$judge);
		}


		/*かんたん用の選択肢作成*/
		$count = 1;
		$choose_title = array();
		$choose_id = array();
		$already = array();
		do{
			$num = rand(0,3);
			if(!isset($choose_id[$num])){
				if($count == 1){
					$choose_title[$num] = $data['title'];
					$choose_id[$num] = $data['id'];
					$easy_answer = $data['id'];
					$already[$count - 1] = $data['id'];
					$count++;
				}
				else{
					do{
						$num_rand = rand(1,$max);
						$flag = 0;
						for($i = 0; $i < $count - 1; $i++){
							if($num_rand == $already[$i]){
								$flag++;
							}
						}
					}while($flag);
					$stmt = $pdo->prepare('select * from musics where id = :id');
					$stmt->bindvalue(':id', $num_rand, PDO::PARAM_INT);
					$stmt->execute();
					$data = $stmt->fetch(PDO::FETCH_ASSOC);
					$choose_title[$num] = $data['title'];
					$choose_id[$num] = $data['id'];
					$already[$count - 1] = $data['id'];
					$count++;
				}
			}
		}while($count < 5);

		$smarty->assign('choose_title',$choose_title);
		$smarty->assign('choose_id',$choose_id);

		/*ラジオボタンの保持*/
		$radio_id = 2;
		if(isset($_POST['send_radio1']))
			$radio_id = $_POST['send_radio1'];
		if(isset($_POST['send_radio2']))
			$radio_id = $_POST['send_radio2'];
		$smarty->assign('radio_check',$radio_id);

		/*ヒントの保持*/
		$hint_id = 0;
		if(isset($_POST['hint_id']))
			$hint_id = $_POST['hint_id'];
		$smarty->assign('hint_check',$hint_id);

	}catch(PDOException $e){
		exit($e->getMessage());
	}

	$pdo = null;
	$smarty->display("intro.html");
?>