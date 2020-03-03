<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>muti-yuu</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="responsive.css">
  </head>
  <body>
    <header>
      <div class="heading">
        <img src="wood.png" class="Lv-icon_L">
        <div class="header-logo">冒険の書</div>
        <img src="shield.jpeg" class="Lv-icon_R">
        <div style="clear:both;"></div>
      </div>
      <div class="menu">
        <ul>
          <li><a href="test_2.html">ホーム</a></li>
          <li><a href="intro.html">自己紹介</a></li>
          <li><a href="career.html">経歴</a></li>
          <li><a href="sent.php">問合せ</a></li>
        </ul>
      </div>
    </header>
    <div class="main">
       <div class="contact-form">
         <div class="form-title">お問い合わせ</div>
         <form method="post" action="sent.php">
           <div class="form-item">名前</div>
           <input type="text" name="name">

           <div class="form-item">年齢</div>
           <select name="age">
             <option value="未選択">選択してください</option>

             <?php
               for($i=6;$i<=100;$i++){
                 echo "<option value='{$i}'>{$i}</option>";
               }
             ?>
           </select>

           <div class="form-item">お問い合わせの種類</div>
           <?php
             $types = array('Progateに関するお問い合わせ', 'Progateに対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
            ?>
           <!-- この下にselectタグを書いていきましょう -->
           <select name="category">
             <option value="未選択">選択してください</option>
             <?php
               foreach($types as $type){
                 echo "<option value='{$type}'>{$type}</option>";
               }
             ?>
           </select>

           <div class="form-item">内容</div>
           <textarea name="body"></textarea>

           <input type="submit" value="送信">
         </form>
       </div>
     </div>
   </body>
</html>
