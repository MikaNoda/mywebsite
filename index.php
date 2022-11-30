<!-- headerの読み込み -->
<?php get_header(); ?>
<main>
    <section class="kv">
        <h2 class="main-title">Welcome to mywebsite</h2>
    </section>
    <div class="section-wrap">
        <section id="about" class="">
            <h2 class="subtitle">About</h2>
            <div class="profile-wrap">
                <div class="profile-left">
                    <img class="profile-img" src="<?php echo get_template_directory_uri();?>/img/profile.jpeg" alt="profile-img">
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
                <p> ハイタイ！福岡出身のみかといいます。<br>20代はヨガスタジオの受付・事務をしながら、掛け持ちでダーツバーや飲食店で働いていました。<br>前職を辞めた後にコロナが流行してしまい、なかなか仕事が見つからず・・・<br>これはいいタイミングなんじゃ？！と大好きな沖縄での生活に踏み切ることにしました<br>好きな場所で、年齢問わずたくさんの人と出会えたことで、国内外問わず色んな場所に行ってみたい！と思うようになりました<br>
                </p>
            </div>
        </section>
        <section id="recommend">
            <h2 class="subtitle">Recommend</h2>

            <div id="miyakojima" class="">
                 <!-- メインループの記載 繰り返し　コロン構文-->
                <?php
                 if(have_posts()):
                 while(have_posts()):
                  the_post();
                ?>  
                <div class="rec-wrap">
                    <div>
                        <img src="<?php the_post_thumbnail_url('medium');?>" alt="">
                    </div>
                    <div class="rec-post">
                        <div class="rec-content">
                            <p class="rec-date"><?php echo get_the_date(); ?></p>
                            <p class="rec-title"><?php the_title(); ?></p>
                        </div>
                        <div class="readmore">
                            <p>READ MORE</p>
                        </div>
                    </div>
                </div>
                <?php
                  endwhile; 
                  else:
                 ?>
                <div class="rec-wrap">
                    <div class="rec-title">表示する記事がありません</div>      
                </div>
                <?php endif; ?>
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

<!-- footerの読み込み -->
<?php get_footer(); ?>