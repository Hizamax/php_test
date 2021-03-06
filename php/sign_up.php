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
		<div class="menu">
			<img src="../img/img-studium.jpg"  alt="studium" width="100%" height="500">
		</div>
		<div class="sign-whole">
			<h2>新規会員登録</h2>
			<form id="sign-form" action="sign_result.php" method="post">
				<table border="2" id="sign-table">
					<tr>
						<th><label for="userid">ユーザID (必須)</label></th>
						<td colspan="2"><input type="text" class="form-group-log" id="userid" name="userid" placeholder="メールアドレス推奨" required></td>
					</tr>
					<tr>
						<th><label for="password">パスワード (必須)</label></th>
						<td colspan="2"><input type="text" class="form-group-log" id="password" name="password" placeholder="8文字以上推奨" required></td>
					</tr>
					<tr>
						<th><label for="name">お名前 (必須)</label></th>
						<td colspan="2"><input type="text" class="form-group-log" id="name" name="name" placeholder="氏名" required></td>
					</tr>
					<tr>
						<th><label for="gender">性別</label></th>
						<td><input type="radio" name="gender" value="0" checked=checked>男</td>
						<td><input type="radio" name="gender" value="1">女</td>
					</tr>
					<tr>
						<th><label for="old">年齢 (必須)</label></th>
						<td colspan="2"><input type="text" class="form-group-log" id="old" name="old" placeholder="必ず記入お願いします" required></td>
					</tr>
					<tr>
						<th><label for="memo">メモ</label></th>
						<td colspan="2"><textarea name="memo" class="form-group-sign" rows="5" cols="40" maxlength="800"></textarea></td>
					</tr>
				</table>
				<input type="hidden" name="id" value="'.$id.'">
				<input type="submit" value="登録" class="touroku">
			</form>
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