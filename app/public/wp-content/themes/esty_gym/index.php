<?php get_header(); ?>

<section class="top-main">
    <h1 class="top-main__ttl">
        <?php
            $topmain_args = array(
                'post_type' => 'topmain',
                'posts_per_page' => 1,
            );
            $topmain_query = new WP_Query($topmain_args);
            if ($topmain_query->have_posts()) :
                while ($topmain_query->have_posts()) : $topmain_query->the_post();
        ?>
        <picture>
            <source media="(min-width:641px)" srcset="<?php the_field('top-main-pc'); ?>">
            <img src="<?php the_field('top-main-sp'); ?>" alt="<?php the_title(); ?>">
        </picture>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </h1>
    <div class="top-main__info" id="link01">
        <?php
            $topcam_args = array(
                'post_type' => 'topcam',
                'posts_per_page' => 1,
            );
            $topcam_query = new WP_Query($topcam_args);
            if ($topcam_query->have_posts()) :
                while ($topcam_query->have_posts()) : $topcam_query->the_post();
        ?>
        <picture>
            <source media="(min-width:641px)" srcset="<?php the_field('top-cam-pc'); ?>">
            <img src="<?php the_field('top-cam-sp'); ?>" alt="<?php the_title(); ?>">
        </picture>
        <?php the_content(); ?>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </div>
</section>

<a href="https://lin.ee/6SXgP7V" target="_blank" class="recruit-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/line_btn.svg" alt=""></a>

<section class="sec --news" id="link02">
    <h2 class="news-ttl">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/news_ttl.svg" alt="お知らせ">
        <p class="news-more"><a href="news/">過去の記事</a></p>
    </h2>
    <ul class="news-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><time datetime="<?php the_date('Y-m-d'); ?>"><?php echo get_post_time('Y.m.d'); ?></time><?php the_title(); ?></a></li>
        <?php endwhile; else : ?>
        <li>記事がありません。</li>
        <?php endif; ?>
    </ul>
</section>

<?php /*
<a href="https://lin.ee/6SXgP7V" target="_blank" class="line-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/line_bnr.svg" alt="8月中旬プレオープン予定!!"></a>
*/?>

<section class="yourself-sec" id="link03">
    <div class="yourself-sec__cont">
        <figure class="yourself-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/concept_main.png" alt=""></figure>
        <div class="yourself-sec__read">
            <h2 class="yourself-sec__ttl">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/concept_ttl.svg" alt="続けたくなる理由が、ここにはある。">
            </h2>
            <p class="yourself-sec__txt">
                esty gym＋24（エスティジム プラス24）は<br>
                本格的なマシンが豊富にそろう無人フィットネスジム<br>
                スマホ一つで誰でも簡単にすぐ運動ができます。<br>
                2,980円(税込3,278円)なので気軽に始められる、<br>
                長く続けられるフィットネスジムです。
            </p>
        </div>
    </div>
    <ul class="yourself-sec__list">
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo01.svg" alt="">
            </figure>
            <h3 class="ttl">トレーニング効果が<br>高いマシン</h3>
            <p class="txt">名だたるジムのメインマシンを導入</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo02.svg" alt="">
            </figure>
            <h3 class="ttl">充実の<br>フリーウエイトエリア</h3>
            <p class="txt">パワーラックやスミスマシン<br>を複数台ご用意</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo03.svg" alt="">
            </figure>
            <h3 class="ttl">初心者の方も<br>安心の簡単操作</h3>
            <p class="txt">マシンのウエイト設定は<br>簡単操作のスライド式</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo04.svg" alt="">
            </figure>
            <h3 class="ttl">マシンの使い方<br>動画有</h3>
            <p class="txt">各マシン備え付けQRから<br>動画で使い方を確認できます</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo05.svg" alt="">
            </figure>
            <h3 class="ttl">外ぐつで<br>利用OK</h3>
            <p class="txt">荷物も少なくてすみ、<br>即運動可能！</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo06.svg" alt="">
            </figure>
            <h3 class="ttl">24時間・安全・万全<br>のセキュリティ</h3>
            <p class="txt">テレコム警備とAI自動危険検知<br>システム（GYM DX）導入！</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo07.svg" alt="">
            </figure>
            <h3 class="ttl">男女別の<br>個室更衣室</h3>
            <p class="txt">男女別だから女性も<br>安心してご利用いただけます</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo08.svg" alt="">
            </figure>
            <h3 class="ttl">ストレッチ<br>エリア</h3>
            <p class="txt">運動の前後や<br>柔軟性向上に最適</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo09.svg" alt="">
            </figure>
            <h3 class="ttl">無料Wi-Fi<br>完備</h3>
            <p class="txt">館内は<br>無料Wi-Fiを完備</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo10.svg" alt="">
            </figure>
            <h3 class="ttl">好立地<br>駐車場完備</h3>
            <p class="txt">成岩駅徒歩3分。<br>駐車場：敷地内24台、敷地外7台</p>
        </li>
        <li class="grid__list">
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo11.svg" alt="">
            </figure>
            <h3 class="ttl">相互利用<br>可能※</h3>
            <p class="txt">エスティフィットネスクラブと相互利用が可能</p>
        </li>
    </ul>
    <?php /*
    <ul class="yourself-sec__slide">
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_slide01.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_slide02.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_slide03.jpg" alt=""></li>
    </ul>
    */?>
    <div class="viewer360" data-num="5" data-pass="<?php echo get_template_directory_uri(); ?>/assets/img/theta/estygym24-0">
		<div id="screen"></div>
    </div><!-- /.viewer360 -->
</section>

<section class="facilities-area" id="link04">
    <div class="facilities-area__grid">
        <h3 class="facilities-area__ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facilities_ttl.svg" alt=""></h3>
        <p class="facilities-area__txt">
            esty gyｍ＋24（エスティジム プラス24）は<br>
            オリンピック選手など、トップレベル競技者用の<br>
            トレーニング施設、国立ナショナルトレーニングセンター<br>
            にも導入されている世界的に有名なトレーニングマシンを導入！
        </p>
    </div>
    <ul class="facilities-area__ul" data-simplebar data-simplebar-auto-hide="false">
        <li>
            <p class="facilities-area__ul__point">POINT.01</p>
            <h4 class="facilities-area__ul__ttl">世界的に有名な<br>トレーニングマシン導入</h4>
            <figure class="facilities-area__ul__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facilities_img01.png" alt=""></figure>
            <p class="facilities-area__ul__txt">生体力学的に最大限の効果を生み出すために追及された可動域でトレーニングの効果抜群！最高級ブランドのマシンをラインナップしました。</p>
        </li>
        <li>
            <p class="facilities-area__ul__point">POINT.02</p>
            <h4 class="facilities-area__ul__ttl">初心者の方も<br>安心のマシン</h4>
            <figure class="facilities-area__ul__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facilities_img02.png" alt=""></figure>
            <p class="facilities-area__ul__txt">初心者でも安心設計、ウエイトはスライド式で使いやすさ抜群！QRから使い方の動画が確認できます。</p>
        </li>
        <li>
            <p class="facilities-area__ul__point">POINT.03</p>
            <h4 class="facilities-area__ul__ttl">充実！<br>フリーウエイト</h4>
            <figure class="facilities-area__ul__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facilities_img03.png" alt=""></figure>
            <p class="facilities-area__ul__txt">パワーラック3台、スミスマシン1台、ダンベルはIVANKOを採用最大50㎏までをご用意！</p>
        </li>
        <li>
            <p class="facilities-area__ul__point">POINT.04</p>
            <h4 class="facilities-area__ul__ttl">トレッドミルは<br>スタートラック</h4>
            <figure class="facilities-area__ul__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facilities_img04.png" alt=""></figure>
            <p class="facilities-area__ul__txt">有酸素運動は、業界最高峰の安全性を誇るスタートラック社製のマシンを導入。トレッドミル（ランニングマシン）8台、クロストレーナー2台、アップライトバイク2台。</p>
        </li>
    </ul>
</section>

<section class="sec --facility" id="link05">
    <h2 class="sec__ttl4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_ttl.svg" alt=""></h2>
    <h3 class="sec__ttl">
        <span class="main en red">WEIGHT STACK</span>
        <span class="sub jp">[ ウェイトスタック ]</span>
    </h3>
    <div class="lineup-slider --01">
        <div class="swiper-container">
            <div class="swiper-wrapper lineup-list">
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">シーテッドレッグプレス</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_1.png" alt=""></figure>
                    <p class="lineup-txt">腰や背中に負担をかけず、足を鍛えることができます。女性は脚のラインの引き締め効果を期待できます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大腿四頭筋・腓腹筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">シーテッドレッグカール</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_2.png" alt=""></figure>
                    <p class="lineup-txt">太ももの裏を鍛えることができます。女性は、お尻と太ももの境目を作ることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>ハムストリング</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">レッグエクステンション</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_3.png" alt=""></figure>
                    <p class="lineup-txt">太ももの前側を鍛えることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大腿四頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">アブダクター</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_19.png" alt=""></figure>
                    <p class="lineup-txt">お尻の上側や、外腿を鍛えます。ヒップアップには最適なマシンです。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大腿筋膜張筋・大殿筋・中殿筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">アダクター</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_20.png" alt=""></figure>
                    <p class="lineup-txt">内腿を鍛えることができます。綺麗な脚のラインを作るのには内腿を鍛えることも大切です。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>内転筋群</dd>
                    </dl>
                </div>


                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">アブドミナル</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_5.png" alt=""></figure>
                    <p class="lineup-txt">腹筋を鍛えます。６パック、美しいお腹周りをつくります。座った状態でできますので、腰の負担も減らすことができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>腹筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">ラットプルダウン</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_6.png" alt=""></figure>
                    <p class="lineup-txt">背中を鍛えるマシンです。背中を引き締めることで美しいボディラインを手にすることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>広背筋・大円筋・菱形筋・上腕二頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">バーチカルロウ</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_7.png" alt=""></figure>
                    <p class="lineup-txt">背中のラインを美しく整えます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>背中・力こぶ</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">ローバック</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_9.png" alt=""></figure>
                    <p class="lineup-txt">座って前かがみの姿勢から起こす運動です。背中の下の方の筋肉を鍛えることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脊柱起立筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">デルトイドフライ</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_10.png" alt=""></figure>
                    <p class="lineup-txt">胸／背中　2種類のトレーニングができます。胸はチェストプレスとは違った刺激が入ります。背中は猫背解消に効果的です。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大胸筋・僧帽筋・菱形筋・三角筋後部</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">チェストプレス</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_11.png" alt=""></figure>
                    <p class="lineup-txt">胸を鍛えるマシンです。男性は厚い胸板、女性はバストアップが期待できます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大胸筋・三角筋前部・上腕三頭筋</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <h3 class="sec__ttl">
        <span class="main en red">FREE WEIGHT</span>
        <span class="sub jp">[ フリーウェイト ]</span>
    </h3>
    <div class="lineup-slider --03">
        <div class="swiper-container">
            <div class="swiper-wrapper lineup-list">
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">スミスマシン</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_2.png" alt=""></figure>
                    <p class="lineup-txt">垂直に挙げる、主に下半身に効果的なマシン。</p>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">パワーケージ</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_3.png" alt=""></figure>
                    <p class="lineup-txt">1台でベンチプレス、スクワットなど複数のバーベル種目を行うことが可能です。</p>
                    <dl class="lineup-num">
                        <dt>数量</dt>
                        <dd>3</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">デュアルアジャスタブルプーリー</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_4.png" alt=""></figure>
                    <p class="lineup-txt">ケーブルを用いて、様々な筋肉を鍛えられます。</p>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">シーテッドプリチャーカール</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_6.png" alt=""></figure>
                    <p class="lineup-txt">上腕を固定した状態でバーベルやダンベルを使って上腕二頭筋のトレーニングができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>上腕二頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">アジャスタブルアブドミナルベンチ</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_7.png" alt=""></figure>
                    <p class="lineup-txt">腹筋のトレーニングで使用します。傾斜が変更でき負荷の調節が可能です。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>腹筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">アジャスタブルバックエクステンション</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_8.png" alt=""></figure>
                    <p class="lineup-txt">背筋を鍛えることができます。シンプルな使い方なので初心者でも安心してトレーニングできます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脊柱起立筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">アジャスタブルベンチ</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_10.png" alt=""></figure>
                    <p class="lineup-txt">背もたれが動くベンチ。ダンベルなどのトレーニングで使用します。</p>
                    <dl class="lineup-num">
                        <dt>数量</dt>
                        <dd>7</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">ダンベル</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_11.png" alt=""></figure>
                    <p class="lineup-txt">1㎏～50㎏までご用意してあります。初心者から上級者まですべての方に対応できます。</p>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <h3 class="sec__ttl">
        <span class="main en red">CARDIO</span>
        <span class="sub jp">[ カーディオ ]</span>
    </h3>
    <div class="lineup-slider --04">
        <div class="swiper-container">
            <div class="swiper-wrapper lineup-list">
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">トレッドミル</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_1.png" alt=""></figure>
                    <p class="lineup-txt">ランニングマシン。傾斜やスピードを簡単に変えながらトレーニングできます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脂肪燃焼・体力アップ</dd>
                    </dl>
                    <dl class="lineup-num">
                        <dt>数量</dt>
                        <dd>8</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">クロストレーナー</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_2.png" alt=""></figure>
                    <p class="lineup-txt">ペダル式のウォーキング運動！大きな動作の全身運動。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脂肪燃焼・全身運動</dd>
                    </dl>
                    <dl class="lineup-num">
                        <dt>数量</dt>
                        <dd>2</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <h5 class="lineup-ttl">アップライトバイク</h5>
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_3.png" alt=""></figure>
                    <p class="lineup-txt">自転車を漕ぐように下半身の筋肉を使う有酸素マシンです。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脂肪燃焼・下半身引き締め</dd>
                    </dl>
                    <dl class="lineup-num">
                        <dt>数量</dt>
                        <dd>2</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<section class="sec --other" id="">
    <h2 class="sec__ttl4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl.svg" alt=""></h2>
    <div class="other-area">
        <figure class="other-area__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img01.png" alt=""></figure>
        <div class="other-area__read">
            <h3>ストレッチエリア</h3>
            <p>運動の前後など、怪我予防、<br>パフォーマンスや柔軟性向上にご利用ください。</p>
        </div>
    </div>
    <div class="other-area">
        <figure class="other-area__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img02.png" alt=""></figure>
        <div class="other-area__read">
            <h3>男女別更衣室</h3>
            <p>男女別の個室更衣室をご用意。<br>女性の方も安心してご利用いただけます。</p>
        </div>
    </div>
</section>

<section class="sec --security" id="">
    <h2 class="sec__ttl4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/security_ttl.svg" alt=""></h2>
    <p class="sec__txt">
        esty gyｍ＋24（エスティジム プラス24）は<br>
        お客様に安心して快適にご利用いただくために、<br>
        安心面、衛生面に配慮した店舗運営を行っております。
    </p>
    <div class="security-grid">
        <div class="security-grid__area">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/security_img02.png" alt=""></figure>
            <h3 class="sec__ttl">
                <span class="main">安心のセキュリティシステム</span>
                <span class="sub en red">SECURITY</span>
            </h3>
            <p>
                テレコム警備とAI自動危険検知システム（GYM DX）導入で24時間安心・万全。<br>
                <span class="color_red">
                    ・防犯カメラによる遠隔監視<br>
                    ・AIによる検知（倒れている方、動かない方、不正入館など）<br>
                </span>
                女性も深夜早朝でも安心。
            </p>
        </div>
        <div class="security-grid__area">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/security_img01.png" alt=""></figure>
            <h3 class="sec__ttl">
                <span class="main">店舗の衛生対策</span>
                <span class="sub en red">HYGIENE MEASURES</span>
            </h3>
            <p>会員のみなさま快適にご利用いただけるよう、店内の定期的な清掃を行っております。</p>
        </div>
    </div>
</section>

<div class="sns-area">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sns_img.png?2508" alt="SNS投稿を応援!!">
</div>

<a href="https://lin.ee/6SXgP7V" target="_blank" class="recruit-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/line_btn.svg" alt=""></a>

<section class="sec --price" id="link06">
    <h2 class="sec__ttl5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/price_ttl.svg" alt=""></h2>
    <dl class="price-dl">
        <dt>入会金</dt>
        <dd>
            <span class="md">¥</span><span class="en">10,000</span><br><span class="xs">（税込<span class="en">11,000</span>円）</span>
        </dd>
    </dl>
    <dl class="price-dl">
        <dt>月会費</dt>
        <dd>
            <span class="member">マスター会員<br class="sp-show">(24時間利用可能)</span>
            <span class="md">¥</span><span class="en">2,980</span><span class="sm">/月</span><br><span class="xs">（税込<span class="en">3,278</span>円）</span>
        </dd>
    </dl>
    <dl class="price-dl --wt">
        <dt>【入会資格】</dt>
        <dd>
            <span class="xs">
                ・満16歳以上の方<br>
                ・施設をご利用する上で、ご自身の安全性を確保できる方<br>
                ・会員規約ほか、マナーを守れる方
            </span>
        </dd>
    </dl>
</section>

<section class="top-main">
    <div class="top-main__info">
        <?php
            $topcam_args = array(
                'post_type' => 'topcam',
                'posts_per_page' => 1,
            );
            $topcam_query = new WP_Query($topcam_args);
            if ($topcam_query->have_posts()) :
                while ($topcam_query->have_posts()) : $topcam_query->the_post();
        ?>
        <picture>
            <source media="(min-width:641px)" srcset="<?php the_field('top-cam-pc'); ?>">
            <img src="<?php the_field('top-cam-sp'); ?>" alt="<?php the_title(); ?>">
        </picture>
        <?php the_content(); ?>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </div>
</section>

<section class="sec --flow">
    <h2 class="sec__ttl5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_ttl.svg" alt=""></h2>
    <p class="sec__read">まずは公式LINE公式アカウントに登録！</p>
    <a href="https://lin.ee/6SXgP7V" target="_blank" class="flow-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_btn.svg" alt=""></a>
    <p class="sec__read">ご用意いただくもの<span>3</span>つ</p>
    <ul class="flow-check">
        <li>スマートフォン</li>
        <li>メールアドレス</li>
        <li>クレジットカード</li>
    </ul>
    <p class="flow-note">※お支払い方法はクレジットカード払いのみとなります。</p>
    <ol class="flow-ol">
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_phone01.png" alt=""></figure>
            <div class="area">
                <p class="num">01</p>
                <p class="txt">
                    LINE公式アカウントの<br>
                    トーク画面から<br>
                    <span>「WEB入会」</span>をタップ！
                </p>
            </div>
        </li>
        <li>
            <div class="area">
                <p class="num">02</p>
                <p class="txt">
                    会員情報を登録
                </p>
            </div>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_phone02.png" alt=""></figure>
        </li>
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_phone03.png" alt=""></figure>
            <div class="area">
                <p class="num">03</p>
                <p class="txt">
                    マイページよりログインし、<br>QRコードを表示
                </p>
            </div>
        </li>
        <li>
            <div class="area">
                <p class="num">04</p>
                <p class="txt">
                    ご来店頂き<br>QRコードで入退館
                </p>
            </div>
        </li>
    </ol>
</section>

<a href="https://lin.ee/6SXgP7V" target="_blank" class="recruit-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/line_btn.svg" alt=""></a>

<?php /*
<section class="sec --column">
    <h2 class="sec__ttl5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/column_ttl.svg" alt=""></h2>
    <ul class="column-list">
        <?php
            $column_args = array(
                'post_type' => 'column',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 3,
            );
            $column_query = new WP_Query($column_args);
            if ($column_query->have_posts()) :
                while ($column_query->have_posts()) : $column_query->the_post();
        ?>
        <li><a href="<?php the_permalink(); ?>">
            <figure class="column-list__img">
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
                <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/column_img.png" alt="">
                <?php endif; ?>
            </figure>
            <time datetime="<?php the_time('Y-m-d'); ?>" class="column-list__time"><?php the_time('Y/m/d'); ?></time>
            <h3 class="column-list__ttl"><?php the_title(); ?></h3>
            <p class="column-list__txt"><?php the_excerpt(); ?></p>
        </a></li>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </ul>
    <a href="column/" class="btn btn--red btn--590">記事一覧はこちら</a>
</section>
*/?>

<section class="sec --insta">
    <h2 class="sec__ttl5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/insta_ttl.svg" alt=""></h2>
    <figure class="insta-list">
<!-- SnapWidget -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/1102410" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; " title="Posts from Instagram"></iframe>
    </figure>
</section>

<section class="sec --faq">
    <h2 class="sec__ttl5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/faq_ttl.svg" alt=""></h2>
    <?php
        $faq_args = array(
            'post_type' => 'faq',
            'posts_per_page' => 100,
        );
        $faq_query = new WP_Query($faq_args);
        if ($faq_query->have_posts()) :
            while ($faq_query->have_posts()) : $faq_query->the_post();
    ?>
    <details class="faq-list aco-cont">
        <summary class="faq-list__head aco-cont__head"><?php the_title(); ?></summary>
        <p class="faq-list__body aco-cont__body"><?php the_field('faq-anser'); ?></p>
    </details>
    <?php endwhile; endif;
        wp_reset_postdata();
    ?>
</section>

<section class="info-area">
    <h2 class="info-area__main">
        <picture>
            <source media="(min-width:641px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_main.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_main_sp.png" alt="">
        </picture>
    </h2>
    <div class="info-area__bdy">
        <h3 class="info-area__ttl">エスティフィットネスのご案内</h3>
        <p class="info-area__txt">
            半田市最大級のesty fitness clubは担当者制度でちゃんとサポートするフィットネスクラブです。<br>
            90台以上のマシン、女性専用ジム完備、地域唯一のマシンピラティス専門スタジオ、週60本以上のスタジオレッスン、<br class="pc-show">
            準天然温泉+サウナの充実した温浴設備で皆様の健康をサポートします。
        </p>
        <ul class="info-area__list">
            <li>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_img01.png" alt="">
                    <figcaption>プール</figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_img02.png" alt="">
                    <figcaption>スタジオ</figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_img03.png" alt="">
                    <figcaption>ジム</figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_img04.png" alt="">
                    <figcaption>お風呂</figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_img05.png" alt="">
                    <figcaption>サウナ</figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_img06.png" alt="">
                    <figcaption>女性専用エリア</figcaption>
                </figure>
            </li>
        </ul>
        <figure class="info-area__bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_bnr.png" alt=""></figure>
        <a href="https://estyfitness.com/" target="_blank" class="info-area__btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/info_btn.svg" alt=""></a>
    </div>
</section>

<section class="sec --access" id="link07">
    <h2 class="sec__ttl5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/access_ttl.svg" alt=""></h2>
    <dl class="access-dl">
        <dt>店舗名</dt>
        <dd>esty gyｍ＋24</dd>
    </dl>
    <dl class="access-dl">
        <dt>住所</dt>
        <dd>〒475-0922<br>愛知県半田市昭和町3-16</dd>
    </dl>
    <dl class="access-dl">
        <dt>営業時間</dt>
        <dd>
            24時間営業
        </dd>
    </dl>
    <dl class="access-dl">
        <dt>アクセス</dt>
        <dd>半田市昭和町/成岩駅徒歩3分/国道247号線沿い</dd>
    </dl>
</section>

<div class="map-cont">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.7971607942045!2d136.9209138!3d34.886439499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004856b7085bf0f%3A0x2b43a66990f07912!2zZXN0eWd5beKBujI0!5e0!3m2!1sja!2sjp!4v1752456587533!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>