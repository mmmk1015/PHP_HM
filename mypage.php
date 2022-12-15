<?php
date_default_timezone_set('Asia/Tokyo');

if (date("H") >= 6 and date("H") <= 11) {
  //echo "<p>おはようございます。</p>\n";
  //echo "<p>今日も一日頑張りましょう。</p>\n";
} elseif (date("H") >= 12 and date("H") <= 17) {
  //echo "<p>こんにちは。</p>\n";
  //echo "<p>今日は良い天気です。</p>\n";
} else{
  //echo "<p>こんばんは。</p>\n";
  //echo "<p>今日もお疲れさまでした。</p>\n";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greeting</title>
</head>
<body>
    
</body>
</html></head>
<body>

<?php if (date("H") >= 6 and date("H") <= 11) : ?>
  <!--6時～11時のメッセージ-->
  <p>おはようございます。</p>
  <p>昨晩はよく眠れましたか？？今日も一日頑張りましょう！</p>
<?php elseif (date("H") >= 12 and date("H") <= 17) : ?>
  <!--12時～17時のメッセージ-->
  <p>こんにちは。</p>
  <p>今日の調子はいかがですか？疲れたら外の空気を吸ってリフレッシュしましょう〜</p>
<?php else: ?>
  <!--それ以外（18時～5時）のメッセージ-->
  <p>こんばんは。</p>
  <p>今日も一日お疲れさまでした。</p>
<?php endif; ?>

</body>
</html>