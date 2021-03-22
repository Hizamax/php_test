<?php
	$id = $_GET["id"];
	$sql = "select * from recentmatch";
	$db = mysqli_connect("localhost", "root", "admin", "user");
	$result = mysqli_query($db,$sql);
	$sql2 = "select * from userinfo where id = ".$id;
	$result2 = mysqli_query($db, $sql2);
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
			<div class="headlogin">
				<a href="sign_up.php" class="signup">新規会員</a>
	 			<a href="index.php" class="logout">ログアウト</a>
			</div>
		</div>
	</head>
	<body>
		<div class="menu">
			<img src="../img/img-studium.jpg"  alt="studium" width="100%" height="500">
			<?php
				while($data = mysqli_fetch_assoc($result2)) {
					echo '<ui class="nav">
						<li><a href="myhome.php?id='.$data["id"].'" class="home">HOME</a></li>
						<li><a href="match.php?id='.$data["id"].'" class="match">試合日程</a></li>
						<li><a href="contact.php?id='.$data["id"].'" class="contact">問い合わせ</a></li>
					</ui>';
					echo '<div class="member">
						<p>会員情報<a href="update.php?id='.$data["id"].'">更新はコチラ</a></p>
						<p>会員情報<a href="delate.php?id='.$data["id"].'">削除はコチラ</a></p>
					</div>';
				}
			?>
		</div>
		<div id="recent">
			<h2 id="recentmatch">直近5試合</h2>
			<table border="1" id="recent-table" >
				<tr>
					<th>ホーム</th><th>アウェイ</th><th>スコア</th>
				</tr>
				<?php
					while($data = mysqli_fetch_assoc($result)) {
						echo '<tr>';
							echo '<td>'.$data["home"].'</td>';
							echo '<td>'.$data["away"].'</td>';
							if ($data["win"]=="バルセロナ") {
								echo '<td style="background-color:#FF99FF">'.$data["result"].'</td>';
							} else {
								echo '<td>'.$data["result"].'</td>';
							}
						echo '</tr>';
					}
				?>
			</table>
		</div>
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