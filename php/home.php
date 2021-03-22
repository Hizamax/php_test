<?php
	$userid = $_POST["userid"];
	$password = $_POST["password"];
	$db = mysqli_connect("localhost", "root", "admin", "user");
	$sql = "select * from userinfo where userid = '".$userid."' and password= '".$password."'";
	$result = mysqli_query($db, $sql);
	$sql2 = "select * from userinfo where userid = '".$userid."'";
	$result2 = mysqli_query($db, $sql2);
	$loginFlug = false;
	$name = "";
	while($data = mysqli_fetch_assoc($result)) {
		$name = $data['name'];
		$loginFlug = true;
	}
	mysqli_close($db);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>バルサチャンネル</title>
		<link href="../css/homepage.css" rel="stylesheet" type="text/css">
		<div class="headimg">
			<div class="theme">
				<img src="../img/バルサエンブレム.png"  alt="Barcelona" height="100" width="100">
				<h2 class="theme-h">FOR the CULE</h2> 
			</div>
		</div>
	</head>
	<body>
		<?php
			if ($loginFlug) {
				echo '<img src="../img/team.jpg" alt="team" height="500" width="100%">';
				while($data = mysqli_fetch_assoc($result2)) {
					echo '<ui class="nav">
						<li><a href="myhome.php?id='.$data["id"].'" class="home">HOME</a></li>
						<li><a href="match.php?id='.$data["id"].'" class="match">試合日程</a></li>
						<li><a href="contact.php?id='.$data["id"].'" class="contact">問い合わせ</a></li>
					</ui>';
					echo '<div class="infomation">';
						echo '<p class="comp">'.$name.'さん、ログインできました！</p>';
						echo '<h2 class="contact-h2">'.$name.'さんのユーザー情報</h2>';
						echo '<p class="contact-p">ユーザー情報の更新、削除できます。</p>';
						echo '<table border="1" id="user-table">';
							echo '<tr>';
								echo '<th>ユーザーID</th><th>名前</th><th>パスワード</th><th>性別</th><th>年齢</th><th>メモ</th>';
							echo '</tr>';
							echo '<tr>';	
								echo '<td>'.$data["userid"].'</td>';	
								echo '<td>'.$data["name"].'</td>';
								echo '<td>'.$data["password"].'</td>';
								if($data["gender"] == 0) {
									echo '<td>男</td>';
								} else {
									echo '<td>女</td>';
								}
								echo '<td>'.$data["old"].'歳</td>';
								echo '<td>'.$data["memo"].'</td>';
							echo '</tr>';
						echo '</table>';
						echo '<p class="comp">会員情報<a href="update.php?id='.$data["id"].'">更新はコチラ</a></p>';
						echo '<p class="comp">会員情報<a href="delate.php?id='.$data["id"].'">削除はコチラ</a></p>';	
					echo' </div>';
				}
			} else {
				echo '<p class="comp">ユーザIDまたはパスワードが正しくありません。</p>
				<form action="login.php" method="post" id="back">
					<input type="submit" class="btn_d" value="戻る" >
				</form>
				<img src="../img/loginfail.jpg" alt="fail" height="500" width="100%">';
			}
		?>
		<div class="footer">
			<div class="footer1">
				<h3>バルサ公式</h3>
				<p>
					<img src="../img/check.png" alt="official" height="15px" width="15px">
					公式サイトは<a href="https://www.fcbarcelona.jp/ja/">こちら</a>
				</p>
				<p>
					<img src="../img/インスタ.png" alt="insta" height="15px" width="15px">
					公式インスタグラムは<a href="https://www.instagram.com/fcbarcelona/?hl=ja">こちら</a>
				</p>
				<p>
					<img src="../img/twitter.png" alt="twi" height="15px" width="15px">
					公式ツイッターは<a href="https://twitter.com/fcbarcelona_jp?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">こちら</a>
				</p>
				<div class="footer2">
					<h3>ニュース</h3>
					<p>
						<img src="../img/チェックマーク.jpg" height="15px" width="15px">
						<a href="https://web.gekisaka.jp/news/detail/?322515-322515-fl" style="text-decoration:none;">
							公式戦一発レッドのメッシ。公式戦出場停止か。。。
						</a>
					</p>
					<p>
						<img src="../img/チェックマーク.jpg" height="15px" width="15px">
						<a href="https://www.soccerdigestweb.com/news/detail/id=85086" style="text-decoration:none;">
							バルサ決勝でビルバオに敗れる。。。
						</a>
					</p>
					<p>
						<img src="../img/チェックマーク.jpg" height="15px" width="15px">
						<a href="https://www.footballchannel.jp/2021/01/20/post406727/" style="text-decoration:none;">
							米国代表DFデスト、ケガで国王杯厳しいか。。。
						</a>
					</p>
				</div>
			</div>
			<div class="footer3">
				<img src="../img/footer_img.jpg" class="fot_img">
			</div>
		</div>
		<div class="bottom">
			<p>～UltimateProgram～</p>
		</div>
	</body>
</html>