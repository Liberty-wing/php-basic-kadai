<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP kadai_005</title>
 </head>
 
 <body>
     <p>
      <?php
      //生徒10人の点数を入れる変数を代入する
      $score_1 = 80;
      $score_2 = 60;
      $score_3 = 55;
      $score_4 = 40;
      $score_5 = 100;
      $score_6 = 25;
      $score_7 = 80;
      $score_8 = 95;
      $score_9 = 30;
      $score_10 = 60;

      //生徒10人分の点数の合計点
      echo $score_1 + $score_2 + $score_3 +$score_4 +$score_5 + $score_6 + $score_7 + $score_8 + $score_9 + $score_10;        

      //改行する
      echo '<br>';

      //生徒10人分の点数の平均点
      echo ($score_1 + $score_2 + $score_3 +$score_4 +$score_5 + $score_6 + $score_7 + $score_8 + $score_9 + $score_10)/10;   
      ?>
     </p>
 </body>
 
 </html>