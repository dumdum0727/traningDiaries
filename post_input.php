<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>筋トレ日記</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
<body>
    <header>
        <h1>きんとれにっき</h1>
        <p>～トレーニーの匿名掲示板～</p>
    </header>
    <div class="contents_area">
        <div class="right_side">
    
        </div>
        <div class="main">
            <form action="post.php" class="post_form">
                <div class="post_contents">
                    <label>
                        <p>投稿内容</p>
                        <textarea name="text" cols="30" rows="10" required></textarea>
                    </label>
                </div>
                <div class="post_image">
                    <label>
                        <p>画像選択</p>
                        <input type="file" name="image">
                    </label>
                </div>
                <input type="submit" value="投稿する" class="post_button">
            </form>
        </div>
        <div class="left_side">
    
        </div>
    </div>

</body>
</html>