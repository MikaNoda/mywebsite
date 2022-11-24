<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="body-wrap">
        <header>
            <div class="header-left">
                <h1 class="header-title">My Website</h1>
            </div>
            <nav class="header-right">
                <ul>
                    <a href="#about">
                        <li>About</li>
                    </a>
                    <a href="#recommend">
                        <li>Recommend</li>
                    </a>
                    <a href="#contact">
                        <li>Contact</li>
                    </a>
                </ul>
            </nav>
        </header>
        <main>
            <section class="kv">
                <h2 class="main-title">Welcome to mywebsite</h2>
            </section>
            <div class="section-wrap">
                <section id="about" class="">
                    <h2 class="subtitle">About</h2>
                    <div class="profile-wrap">
                        <div class="profile-left">
                            <img class="profile-img" src="./img/profile.jpeg" alt="profile-img">
                        </div>
                        <div class="profile-right">
                            <h3 class="profile-title">Profile</h3>
                            <div class="profile-details">
                                <table class="detaile">
                                    <tr>
                                        <th>&loz;</small> Name</td>
                                        <td>野田 美佳（mika noda）</td>
                                    </tr>
                                    <tr>
                                        <th><small>&loz;</small> Birth place</th>
                                        <td>福岡県</td>
                                    </tr>
                                    <tr>
                                        <th><small>&loz;</small> Date of Birth</th>
                                        <td>1988/09/17</td>
                                    </tr>
                                    <tr>
                                        <th><small>&loz;</small> Interset</th>
                                        <td>・沖縄/宮古島・旅行・劇団四季を観に行く<br>・音楽を聴く(suchmos/Awich/Vaundyなど)・ダーツ</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="profile-text">
                        <p> ハイタイ！福岡出身のみかです。<br>20代はヨガスタジオの受付・事務をしながら、掛け持ちでダーツバーや飲食店で働いていました。<br>前職を辞めた後にコロナになってしまって、なかなか仕事が見つからず・・・<br>ずっと沖縄で生活してみたくて、これはいいタイミングなんじゃ？！と<br>思い切ってリゾートバイトで宮古島に１年間行ってきました。<br>田舎だったけど毎日楽しくて大好きな場所になりました！<br>少しだけど宮古島の紹介をしたいと思います〜！！
                        </p>
                    </div>
                </section>
                <section id="recommend">
                    <h2 class="subtitle">Recommend</h2>

                    <div id="miyakojima" class="">
                        <div class="rec-wrap">
                            <img src="./img/post_img_01.JPG" alt="">
                            <div class="rec-post">
                                <div class="rec-content">
                                    <p class="rec-date">2022/11/16</p>
                                    <p class="rec-title">
                                        I LOVE 宮古島
                                    </p>
                                </div>
                                <div class="readmore">
                                    <p>READ MORE</p>
                                </div>
                            </div>
                        </div>
                        <div class="rec-wrap">
                            <img src="./img/post_img_01.JPG" alt="">
                            <div class="rec-post">
                                <div class="rec-content">
                                    <p class="rec-date">2022/11/16</p>
                                    <p class="rec-title">
                                        I LOVE 宮古島
                                    </p>
                                </div>
                                <div class="readmore">
                                    <p>READ MORE</p>
                                </div>
                            </div>
                        </div>
                        <div class="rec-wrap">
                            <img src="./img/post_img_01.JPG" alt="">
                            <div class="rec-post">
                                <div class="rec-content">
                                    <p class="rec-date">2022/11/16</p>
                                    <p class="rec-title">
                                        I LOVE 宮古島
                                    </p>
                                </div>
                                <div class="readmore">
                                    <p>READ MORE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="contact" class="">
                    <h2 class="subtitle">Contact</h2>
                    <form>
                        <div>
                            <input type="text" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <textarea name="messege" placeholder="Messege" cols="30" rows="10"></textarea>
                            <button type="submit">送信</button>
                        </div>
                    </form>
                </section>
            </div>
        </main>
    </div>
    <footer>
        <span>Copyright<small>&copy;</small>M.Noda.ALL RIGHTS RESERVED.</span>
    </footer>

</body>

</html>