<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package korat
 */

$home_url = esc_url(home_url());
//remove auto p, br
remove_filter('the_content', 'wpautop');
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if(is_page('top')): ?>
  <div class="mainvisual jq-loading jq-loading-circle jq-loading-white jq-loading-l">
    <h2 class="message">
      私たちコラット株式会社はシステム開発における<br>
      企画 / 設計 / 実装 / デザイン / <br class="inline-sm">運用 / コンサルティングに対し挑戦し続ける企業です。
    </h2>
    <h3 class="t copy">
      "Will" create Project teamimg
      <img src="<?php echo THEMEPATH; ?>/images/top/mainvisual_img02.png" alt="" class="jq-hide"><img src="<?php echo THEMEPATH; ?>/images/top/mainvisual_img02_sp.png" alt="" class="jq-hide">
    </h3>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/top/mainvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/top/mainvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="content">
    <div class="clearfix">
      <a href="<?php echo $home_url; ?>/services/" class="content01">
        <div class="title">
          <p class="en">Services</p>
          <h3 class="ja">業務紹介</h3>
        </div>
        <div class="button-wrap">
          <span class="button button-orange">詳しく見る</span>
        </div>
        <span class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        <div class="image"><img src="<?php echo THEMEPATH; ?>/images/top/img01.jpg" alt=""></div>
      </a>
      <a href="<?php echo $home_url; ?>/company/" class="content02">
        <div class="title">
          <p class="en">Company</p>
          <h3 class="ja">企業情報</h3>
        </div>
        <div class="button-wrap">
          <span class="button button-orange">詳しく見る</span>
        </div>
        <span class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        <div class="image"><img src="<?php echo THEMEPATH; ?>/images/top/img02.jpg" alt=""></div>
      </a>
      <a href="<?php echo $home_url; ?>/recruit/" class="content03 hide-sm">
        <div class="title">
          <p class="en">Recruit</p>
          <h3 class="ja">採用</h3>
        </div>
        <div class="button-wrap">
          <span class="button button-orange">詳しく見る</span>
        </div>
        <span class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        <div class="image"><img src="<?php echo THEMEPATH; ?>/images/top/img03.jpg" alt=""></div>
      </a>
      <a href="<?php echo $home_url; ?>/column/" class="content04">
        <div class="title">
          <p class="en">Column</p>
          <h3 class="ja">コラットライフ</h3>
        </div>
        <div class="button-wrap">
          <span class="button button-orange">詳しく見る</span>
        </div>
        <span class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        <div class="image"><img src="<?php echo THEMEPATH; ?>/images/top/img04.jpg" alt=""></div>
      </a>
      <a href="<?php echo $home_url; ?>/recruit/" class="content03 block-sm">
        <div class="title">
          <p class="en">Recruit</p>
          <h3 class="ja">採用</h3>
        </div>
        <div class="button-wrap">
          <span class="button button-orange">詳しく見る</span>
        </div>
        <span class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        <div class="image"><img src="<?php echo THEMEPATH; ?>/images/top/img03.jpg" alt=""></div>
      </a>
      <a href="<?php echo $home_url; ?>/products/" class="content05">
        <div class="title">
          <p class="en">Products</p>
          <h3 class="ja">製品</h3>
        </div>
        <div class="button-wrap">
          <span class="button button-orange">詳しく見る</span>
        </div>
        <span class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        <div class="image"><img src="<?php echo THEMEPATH; ?>/images/top/img05.jpg" alt=""></div>
      </a>
      <a href="<?php echo $home_url; ?>/contact/" class="content06">
        <div class="title">
          <p class="en">Contact us</p>
          <h3 class="ja">お問い合わせ</h3>
        </div>
        <div class="button-wrap">
          <span class="button button-orange">詳しく見る</span>
        </div>
        <span class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        <div class="image"><img src="<?php echo THEMEPATH; ?>/images/top/img06.jpg" alt=""></div>
      </a>
    </div>
  </div>


  <?php elseif(is_page('services')): ?>
  <div class="subvisual">
    <div class="en">Services</div>
    <h2 class="title font-noto">業務紹介</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/services/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/services/subvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="container container2">
    <div class="row">
      <div class="col-sm-6 service appear appear-o">
        <div class="content-title content-title-s">
          <div class="en">Database design</div>
          <h3 class="title">データーベース<br class="inline-xs">設計構築業務</h3>
        </div>
        <img src="<?php echo THEMEPATH; ?>/images/services/img01.jpg" alt=""><br>
        <h4 class="font16 line2">
          MySQL、ORACLE、SQL Server…様々なデータベースミドルウェアを駆使し、開発を進めています。弊社の作業現場では、金融、証券またECサイトなどの設計/実装/運用作業を繰り返し、サービスの向上を目指しています。<br>
          また、各スキル向上において、資格取得の受験料支援や社員によるワークショップも実施しています。
        </h4>
      </div>
      <div class="col-sm-6 service appear appear-o">
        <div class="content-title content-title-s">
          <div class="en">Web architecture / design</div>
          <h3 class="title">Web設計／デザイン業務</h3>
        </div>
        <img src="<?php echo THEMEPATH; ?>/images/services/img02.jpg" alt=""><br>
        <h4 class="font16 line2">
          多種に渡るスクリプト言語を利用し、トレンド感あるWebサイトを構築しています。新しいテクノロジーを随時取り入れていく必要もあり、社内勉強会や対象とされたサイト構造分析なども実施しています。
        </h4>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 service appear appear-o">
        <div class="content-title content-title-s">
          <div class="en">Infrastructure development</div>
          <h3 class="title">インフラシステム<br class="inline-xs">開発業務</h3>
        </div>
        <img src="<?php echo THEMEPATH; ?>/images/services/img03.jpg" alt=""><br>
        <h4 class="font16 line2">
          webサイトやアプリなどを支えるネットワークシステムの開発を展開しています。<br>
          現在、これまでの豊富な経験を活かしながら、流通システムの改善やクラウドシステムなどとの連携/連動を目的とした改善提案を進めています。
        </h4>
      </div>
      <div class="col-sm-6 service appear appear-o">
        <div class="content-title content-title-s">
          <div class="en">Smart device development</div>
          <h3 class="title">スマートデバイス<br class="inline-xs">開発業務</h3>
        </div>
        <img src="<?php echo THEMEPATH; ?>/images/services/img04.jpg" alt=""><br>
        <h4 class="font16 line2">
          スマートデバイスの繁栄に伴い、各種デバイスアプリやWebサイトの開発を進めています。<br>
          インターフェイス設計、機能設計、サーバサイド連携、コーディング、デザイン、機種別テスト、運用管理までニーズに合わせたサービス提供を行っています。<br>
          業務ツールとして、コンシューマーアプリとして、SNS連携サービスとして…様々なニーズに対応をし続けています。
        </h4>
      </div>
    </div>
  </div>


  <?php elseif(is_page('recruit')): ?>
  <div class="mb0 subvisual subvisual-l">
    <div class="en">Recruit</div>
    <h2 class="title font-noto">採用</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/recruit/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/recruit/subvisual_img01_sp.jpg" alt=""></div>
  </div>

  <?php
  /*
  <div class="content-message">
    <div class="container">
      <ul class="display-table">
        <li class="image hide-sm">
          <img src="<?php echo THEMEPATH; ?>/images/recruit/message_img01.jpg" alt="">
          <div class="profile">
            <span class="font-en job-en">Chief Executive officer</span>
            <span class="job-ja">代表取締役社長</span>
            <p class="name">深瀨 工</p>
          </div>
        </li>
        <li class="texts">
          <div class="content-title">
            <div class="en">Message</div>
            <h2 class="title">代表メッセージ</h2>
          </div>
          <div class="image block-sm">
            <img src="<?php echo THEMEPATH; ?>/images/company/message_img01_sp.jpg" alt="">
            <div class="profile">
              <span class="font-en job-en">Chief Executive officer</span>
              <span class="job-ja">代表取締役社長</span>
              <p class="name">深瀨 工</p>
            </div>
          </div>
          <h3 class="text font16 line2">
            <p>
              2010年、小さいながらも出発したこのコラットという会社は、
              現在のシステム社会また、コンシューマーニーズに貢献するべく設立されました。
            </p>
            <p>
              現在不可欠となったITサービスは、個人データ、企業情報データを有するようになってきました。
              そんな時代、専門的な知識で対応していかなければ、お客様とエンドユーザ様の信頼関係を作り出すことはできません。
            </p>
            <p>
              私たちは、システムという分野が不可欠である以上、エンジニアを育てていくという思いも強くあり、社員教育にも専念していきます。
            </p>
            <p>
              お客様の前に出る以上、我々がしっかりとしたポリシーを持っていなければいけません。
              お客様に喜んで頂きたいという一心で、従業員に感謝し、従業員が幸せになれる会社、でもチャレンジ精神を忘れない会社として今後益々会社を成長させていきたいと考えています。
            </p>
          </h3>
        </li>
      </ul>
    </div>
  </div>
  */
  ?>

  <?php
  $args = Array(
  'post_type' => 'interview',
  'posts_per_page' => -1
  );
  $the_query = new WP_Query($args);
  if($the_query -> have_posts()):?>
  <?php
    $members = array();
    while($the_query -> have_posts()): $the_query -> the_post();

    $post_meta = get_post_meta($post->ID);
    $name = _h($post_meta['wpcf-interview_last_name'][0]) . ' ' . _h($post_meta['wpcf-interview_first_name'][0]);
    $thumbnail = $post_meta['wpcf-interview_thumbnail'][0];
    $job_en = $post_meta['wpcf-interview_job_en'][0];
    $job_ja = $post_meta['wpcf-interview_job'][0];

    $image_id = get_attachment_id($thumbnail);
    $image = get_image_info($image_id, 'medium');
    if($image && $image['src']){
      $thumbnail = $image['src'];
    }

    $members[] = array(
      'name' => $name,
      'link' => get_the_permalink(),
      'thumbnail' => $thumbnail,
      'job_en' => $job_en,
      'job_ja' => $job_ja
    );
    endwhile;
    wp_reset_postdata();
  ?>

  <div class="content content-member">
    <div class="content-title">
      <div class="en">Member</div>
      <h2 class="title">コラットで活躍する<br class="inline-xs">社員たち</h2>
    </div>
    <?php if(count($members) >= 4): ?>
    <div class="swiper-container swiper-container-member">
      <div class="swiper-wrapper">
        <?php foreach($members as $a): ?>
        <div class="swiper-slide">
          <a href="<?php echo $a['link']; ?>" class="member">
            <img src="<?php echo $a['thumbnail']; ?>" alt=""><br>
            <div class="box">
              <p class="job">
                <span class="job-en"><?php echo $a['job_en']; ?></span>
                <span class="job-ja"><?php echo $a['job_ja']; ?></span>
              </p>
              <p class="name"><?php echo $a['name']; ?></p>
              <div class="button button-orange">
                <span>インタビューを見る</span>
              </div>
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php else: ?>
    <?php
      $i = 0;
      $l = count($members);
      $l_sm = ceil($l/2);
      while(count($members)%4){
        $members[] = array();
        $i++;
      }
      $l = count($members);
    ?>
    <div class="container">
      <div class="members">
        <div class="clearfix">
          <?php for($i = 0; $i < $l; $i++): ?>
          <?php
            $a = $members[$i];
            $class = 'member-wrap';
            if(!$a['name']){
              $class .= ' soon';
              $class .= ' ' . $i . ' ' . $l_sm*2;
              if($i >= $l_sm*2){
                $class .= ' hide-sm';
              }
              $a['thumbnail'] = THEMEPATH . '/images/interview/soon.png';
            }
          ?>

          <div class="<?php echo $class; ?>">
            <?php if($a['name']): ?>
            <a href="<?php echo $a['link']; ?>" class="member">
            <?php else: ?>
            <div class="member">
            <?php endif; ?>
              <img src="<?php echo $a['thumbnail']; ?>" alt=""><br>
              <div class="box">
                <?php if($a['name']): ?>
                <p class="job">
                  <span class="job-en"><?php echo $a['job_en']; ?></span>
                  <span class="job-ja"><?php echo $a['job_ja']; ?></span>
                </p>
                <p class="name"><?php echo $a['name']; ?></p>
                <div class="button button-orange">
                  <span>インタビュー<span class="hide-sm">を見る</span></span>
                </div>
                <?php endif; ?>
              </div>
            <?php if($a['name']): ?>
            </a>
            <?php else: ?>
            </div>
            <?php endif; ?>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
    <?php endif;?>
  </div>
  <?php endif;?>

  <div class="container">
    <div class="content content-flow appear appear-o">
      <div class="content-title">
        <div class="en">Flow</div>
        <h2 class="title">入社までの流れ</h2>
      </div>
      <div class="table-wrap hide-sm">
        <ul class="display-table-fixed">
          <li>
            <img src="<?php echo THEMEPATH; ?>/images/recruit/flow_img01.png" alt="エントリー">
            <p>
              <a href="/recruit/entry">こちら</a>のページから<br>エントリーして下さい。
            </p>
          </li>
          <li>
            <img src="<?php echo THEMEPATH; ?>/images/recruit/flow_img02.png" alt="書類選考">
            <p>
              エントリー内容にて選考の上、<br>面接に進んで頂く方に<br>電話にてご連絡させて頂きます。
            </p>
          </li>
          <li>
            <img src="<?php echo THEMEPATH; ?>/images/recruit/flow_img03.png" alt="面接">
            <p>
              1～2回の面接をさせて頂きます。
            </p>
          </li>
          <li class="flow04">
            <img src="<?php echo THEMEPATH; ?>/images/recruit/flow_img04.png" alt="内定">
            <p>
              面接の後、1週間程度で結果を<br>お知らせ致します。
            </p>
          </li>
        </ul>
      </div>
      <div class="block-sm">
        <ul class="display-table">
          <li class="image">
            <img src="<?php echo THEMEPATH; ?>/images/recruit/flow_img01_sp.png" alt="エントリー">
          </li>
          <li class="text">
            <p class="flow">エントリー</p>
            <p>
              <a href="/recruit/entry">こちら</a>のページから<br>エントリーして下さい。
            </p>
          </li>
        </ul>
        <ul class="display-table">
          <li class="image">
            <img src="<?php echo THEMEPATH; ?>/images/recruit/flow_img02_sp.png" alt="書類選考">
          </li>
          <li class="text">
            <p class="flow">書類選考</p>
            <p>
              エントリー内容にて選考の上、<br>面接に進んで頂く方に<br class="hide-sm">電話にてご連絡させて頂きます。
            </p>
          </li>
        </ul>
        <ul class="display-table">
          <li class="image">
            <img src="<?php echo THEMEPATH; ?>/images/recruit/flow_img03_sp.png" alt="面接">
          </li>
          <li class="text">
            <p class="flow">面接</p>
            <p>
              1～2回の面接をさせて頂きます。
            </p>
          </li>
        </ul>
        <ul class="display-table flow04">
          <li class="image">
            <img src="<?php echo THEMEPATH; ?>/images/recruit/flow_img04_sp.png" alt="内定">
          </li>
          <li class="text">
            <p class="flow">内定</p>
            <p>
              面接の後、１週間程度で結果を<br class="hide-sm">お知らせ致します。
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container container-s">
    <div class="content content-data">
      <div class="content-title">
        <div class="en">Recruitment information</div>
        <h2 class="title">募集要項</h2>
      </div>
      <div class="appear appear-o">
        <dl>
          <dt>職種</dt>
          <dd>
            <p>
              ITエンジニア・制作ディレクター・プロジェクトマネージャー・Web設計/デザイン業務
            </p>
          </dd>
        </dl>
        <dl>
          <dt>雇用形態</dt>
          <dd>
            <p>
              正社員（新卒採用、キャリア採用（個人事業主含む））
            </p>
          </dd>
        </dl>
        <dl>
          <dt>採用条件</dt>
          <dd>
            <p>
              新卒・第二新卒者及び転職希望者（※経験不問）<br>
              22歳～40歳前後（※学歴不問）
            </p>

            <p>
              ネットワーク・サーバ設計・構築経験（目安：2～3年以上）<br>
              ECサイトやスマートデバイスアプリなどの制作で、開発言語を使用した制作経験（目安：2～3年以上）<br>
              言語を使用したシステム開発経験（目安：2～3年以上）<br>
              Web設計/デザイン業務/プランナー経験（目安：2～3年以上） 
            </p>

            <p>
              <strong>あると望ましい経験・能力</strong><br>
              基本設計・詳細設計の経験（制作ディレクション、サイト設計/実装、データベース知識、サーバ知識、ドキュメント作成）がある方。
            </p>
          </dd>
        </dl>
        <dl>
          <dt>求める人物像</dt>
          <dd>
            <p>
              IT業界に興味があり、パワーと情熱を持った方。<br>
              高いコミュニケーション能力と柔軟性のある方。<br>
              組織、チームでの共同作業により、自身の向上を望む方。<br>
            </p>
          </dd>
        </dl>
        <dl>
          <dt>給与</dt>
          <dd>
            <p>
              月給　20万円～45万円　※経験および能力を考慮の上、決定致します。
            </p>
            <p>
              <strong>給与例（額面）</strong><br>
              27歳／年収350万円<br>
              29歳／年収400万円<br>
              32歳／年収450万円<br>
              40歳／年収500万円<br>
            </p>
          </dd>
        </dl>
        <dl>
          <dt>給与規定</dt>
          <dd>
            <ul>
              <li>昇給年1回（業績により変動）</li>
              <li>賞与年2回（業績により変動）</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>試用期間</dt>
          <dd>
            <p>
               6ヵ月（開発プロジェクトにより変動があります）
            </p>
          </dd>
        </dl>
        <dl>
          <dt>勤務地</dt>
          <dd>
            <p>
               案件により勤務地は異なります（都内近郊）<br>
              [東京本社] 東京都江東区青海2-7-4 the SOHO 831<br>
              【交通】ゆりかもめ「船の科学館駅」より徒歩5分
            </p>
          </dd>
        </dl>
        <dl>
          <dt>勤務時間</dt>
          <dd>
            <p>
               9：00～18：00（実働8時間）<br>
              ※ピーク時は残業があります。<br>
              ※プロジェクトにより異なる場合があります。
            </p>
          </dd>
        </dl>
        <dl>
          <dt>休日休暇</dt>
          <dd>
            <p class="bold">年間休日120日以上</p>
            <ul class="pt0">
              <li>完全週休2日制（土・日）</li>
              <li>祝日</li>
              <li>年次有給休暇</li>
              <li>夏季休暇</li>
              <li>年末年始休暇</li>
              <li>慶弔休暇</li>
            </ul>
          </dd>
        </dl>
        <dl class="last">
          <dt>待遇・福利厚生</dt>
          <dd>
            <ul>
              <li>健康保険、厚生年金保険、雇用保険、労災保険完備</li>
              <li>交通費上限3万円まで支給</li>
              <li>各種手当（家族手当、役職手当 など）</li>
              <li>資格取得支援制度（資格取得一時金、受験費会社負担 など）</li>
              <li>オリジナル社内制度（書籍購入費支援制度 など）</li>
              <li>スパ・フィットネス設備利用可</li>
              <li>ビリヤード設備利用可</li>
            </ul>
          </dd>
        </dl>
      </div>
      <div class="appear appear-o text-center btns">
        <a href="<?php echo $home_url; ?>/recruit/entry" class="button button-l">応募する</a>
      </div>
    </div>
  </div>


  <?php elseif(is_page('entry') && is_parent_slug('recruit')): ?>
  <div class="subvisual">
    <div class="en">Recruit</div>
    <h2 class="title font-noto">採用</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/recruit/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/recruit/subvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="container container-s">
    <div class="content-title content-title-l">
      <div class="en">Entry</div>
      <h3 class="title">採用エントリー</h3>
    </div>
    <div class="content-form">
      <p class="font16 line2 note appear appear-o">
        コラットの採用応募は以下のフォームより受け付けています。<br>
        必要事項をご記入の上、「内容を確認する」ボタンを押してください。
      </p>
      <?php
        the_content();
      ?>
    </div>
  </div>


  <?php elseif(is_page('confirm') && is_parent_slug('recruit')): ?>
  <div class="subvisual">
    <div class="en">Recruit</div>
    <h2 class="title font-noto">採用</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/recruit/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/recruit/subvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="container container-s">
    <div class="content-title content-title-l">
      <div class="en">Entry</div>
      <h3 class="title">採用エントリー</h3>
    </div>
    <div class="content-form">
      <p class="font16 line2 note">
        以下の内容を確認の上、よろしければ「送信する」ボタンを押してください。
      </p>
      <?php
        the_content();
      ?>
    </div>
  </div>


  <?php elseif(is_page('complete') && is_parent_slug('recruit')): ?>
  <div class="subvisual">
    <div class="en">Recruit</div>
    <h2 class="title font-noto">採用</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/recruit/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/recruit/subvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="container container-s">
    <div class="content-title content-title-l">
      <div class="en">Entry</div>
      <h3 class="title">採用エントリー</h3>
    </div>
    <div class="content-form appear appear-o">
      <p class="font16 line2 note">
        「エントリーありがとうございました。期間を頂き、弊社採用担当からご連絡差し上げます。」
      </p>
      <?php
        the_content();
      ?>
    </div>
  </div>


  <?php elseif(is_page('company')): ?>
  <div class="subvisual">
    <div class="en">Company</div>
    <h2 class="title font-noto">企業情報</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/company/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/company/subvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="container">
    <div class="content content-message">
      <div class="content-title content-title-l">
        <div class="en">Message</div>
        <h3 class="title">代表メッセージ</h3>
      </div>
      <div class="appear appear-o">
        <div class="row">
          <div class="col-md-7 pull-right message-wrap">
            <h4 class="message">
              共に未来を描き、発想やアイデア、<br>そして技術を提供して参ります。
            </h4>
          </div>
          <div class="col-sm-5 hide-sm">
            <img src="<?php echo THEMEPATH; ?>/images/company/message_img01.jpg" alt="コラット株式会社 代表取締役　深瀨 工"><br>
            <div class="name"><p><span>コラット株式会社 代表取締役</span>　<strong>深瀨 工</strong></p></div>
          </div>
          <div class="col-sm-7">
            <div class="block-sm profile-sm">
              <img src="<?php echo THEMEPATH; ?>/images/company/message_img01_sp.jpg" alt=""><br>
              <div class="name"><p><span>コラット株式会社 代表取締役</span>　<strong>深瀨 工</strong></p></div>
            </div>
            <h5 class="font16 line2 text">
              2010年、小さいながらも出発したこのコラットという会社は、現在のシステム社会また、コンシューマーニーズに貢献するべく設立されました。<br>
              現在不可欠となったITサービスは、個人データ、企業情報データを有するようになってきました。<br>
              そんな時代、専門的な知識で対応していかなければ、お客様とエンドユーザ様の信頼関係を作り出すことはできません。<br>
              私たちは、システムという分野が不可欠である以上、エンジニアを育てていくという思いも強くあり、社員教育にも専念していきます。<br>
              お客様の前に出る以上、我々がしっかりとしたポリシーを持っていなければいけません。<br>
              お客様に喜んで頂きたいという一心で、従業員に感謝し、従業員が幸せになれる会社、でもチャレンジ精神を忘れない会社として今後益々会社を成長させていきたいと考えています。
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="content content-profile">
      <div class="content-title">
        <div class="en">Company profile</div>
        <h3 class="title">会社概要</h3>
      </div>
      <div class="content-data content-data2">
        <div class="table-wrap">
          <ul class="display-table-fixed">
            <li class="appear appear-o">
              <dl>
                <dt>会社名</dt>
                <dd>
                  <p>
                    コラット株式会社
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>所在地</dt>
                <dd>
                  <p>
                    〒135-0064<br>
                    東京都江東区青海2-7-4 the SOHO 831<br>
                    TEL <a href="tel:03-6457-1127" class="inline-sm">03-6457-1127</a><span class="hide-sm">03-6457-1127</span>　FAX 03-6457-1137
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>設立</dt>
                <dd>
                  <p>
                    2010年5月21日
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>資本金</dt>
                <dd>
                  <p>
                    1,000万円
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>従業員数</dt>
                <dd>
                  <p>
                    20名(2016年9月現在)
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>取引先金融機関</dt>
                <dd>
                  <p>
                    三菱東京UFJ銀行
                  </p>
                </dd>
              </dl>
              <dl>
                <dt>許認可</dt>
                <dd>
                  <p>
                    特定派遣許可番号　特13-313264
                  </p>
                </dd>
              </dl>
            </li>
            <li class="appear appear-o">
              <dl class="line">
                <dt>事業内容</dt>
                <dd>
                  <div class="business-wrap">
                    <ol>
                      <li>一般労働者派遣事業及び特定労働者派遣事業</li>
                      <li>コンピュータシステム構築に関するコンサルティング業務</li>
                      <li>コンピュータシステム、通信システム、制御システムの機器・装置及び付属機器・周辺機器の設計、製造、販売、賃貸、運用管理、導入設置、保守メンテナンスの業務</li>
                      <li>コンピュータシステムの開発及び受託開発業務</li>
                      <li>コンピュータシステム開発に対する期間派遣業務</li>
                      <li>コンピュータシステムを利用した情報ネットワークによる情報処理並びに情報提供業務</li>
                      <li>情報処理システムの設計、開発、販売及びそれらのコンサルティング業務</li>
                      <li>コンピュータソフトウェアの立案・開発及び販売</li>
                      <li>コンピュータソフトウェアの企画、設計、開発、制作及び販売、運用、保守並びに顧客へのサポート業務</li>
                      <li>コンピュータ及び周辺機器に関するソフトウェア・ハードウェアの開発、制作、販売、賃貸、輸出入及び保守、管理業務</li>
                      <li>コンピュータ、コンピュータ周辺機器、コンピュータソフトウェア、マニュアルの販売業務</li>
                      <li>パッケージソフトウェアの利用技術、研究開発及び流通</li>
                      <li>データベースの企画、設計、開発、販売及び提供業務並びにデータベース構築のコンサルティング業務</li>
                      <li>ネットワーク管理システムの開発、保守及びコンサルティング業務</li>
                      <li>インターネットを利用した各種情報提供サービス及び各種情報の収集</li>
                      <li>インターネットのホームページ企画立案</li>
                      <li>インターネットを利用したコンテンツの制作</li>
                      <li>インターネットを利用する情報システム及び通信ネットワークの企画、設計、立案、運用に関する受託</li>
                      <li>各種コンパクトディスク、デジタルビデオディスクなどの映像・音声のソフトウェアの企画、開発制作及び販売</li>
                      <li>一般労働者派遣事業及パソコン、中古パソコン等事務用機械器具の販売、修理び特定労働者派遣事業</li>
                      <li>コンピュータ及び周辺機器、コンピュータソフトウェア、通信機器、事務機器の販売並びに仲介</li>
                      <li>コンピュータのソフトウェア・ハードウェア・その周辺機器及び情報通信機器、事務用機器、機械工具、家庭用電気製品、家庭用電気機械器具の販売、賃貸及び保守管理</li>
                      <li>コンピュータ及び周辺機器の製作、販売並びにコンピュータソフトウェアの開発、販売</li>
                      <li>コンピュータ及び関連機器の販売及び保守メンテナンス業務</li>
                      <li>情報通信システムに係る機器、及び装置類の販売・レンタル</li>
                      <li>放送設備機器及びモニターテレビ、監視カメラ、小型カメラなど映像機器の企画、開発、販売、設計施工及び保守メンテナンス業務</li>
                      <li>上記各号に附帯する一切の業務</li>
                    </ol>
                  </div>
                </dd>
              </dl>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="content content-access">
      <div class="content-title">
        <div class="en">Access</div>
        <h3 class="title">アクセス</h3>
      </div>
      <div class="map appear appear-o"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6486.78459936013!2d139.7707408686742!3d35.618054190943674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601889ffac21ca29%3A0x9a2bbabe0f145d9b!2z44CSMTM1LTAwNjQg5p2x5Lqs6YO95rGf5p2x5Yy66Z2S5rW377yS5LiB55uu77yX4oiS77yUIO-9lO-9iO-9he-8s--8r--8qO-8rw!5e0!3m2!1sja!2sjp!4v1474166217957" width="1000" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
      <div class="row">
        <div class="col-sm-6 appear appear-o">
          <div class="access">
            <span class="badge badge1 font-en">Address</span><br>
            〒135-0064<br>
            東京都江東区青海2-7-4 the SOHO 831
          </div>
          <div class="row">
            <div class="col-xs-6">
              <div class="access">
                <span class="badge font-en">Tel</span> <a href="tel:03-6457-1127" class="inline-sm">03-6457-1127</a><span class="hide-sm">03-6457-1127</span>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="access">
                <span class="badge font-en">Fax</span> 03-6457-1137
              </div>
            </div>
          </div>
          <div class="access">
            <span class="badge font-en">Mail</span> info@korat.co.jp
          </div>
        </div>
        <div class="col-sm-6 appear appear-o">
          <div class="access">
            <span class="badge badge1 font-en">Train</span><br>
            ゆりかもめ「船の科学館」駅より徒歩約5分<br>
            りんかい線「東京テレポート」駅より徒歩約15分
          </div>
          <div class="access">
            <span class="badge badge1 font-en">Bus</span><br>
            「品川駅港南口」より 都バス [波01出入] 「日本科学未来館前」下車<br>
            ※平日、土曜・祝日のみの運行（日曜は運休）運行本数少<br>
            <br>
            「門前仲町駅」より 都バス [海01] 「日本科学未来館前」下車<br>
            路線内の主な駅:門前仲町駅、豊洲駅<br>
            <br>
            「錦糸町駅」より 都バス [急行05] 「日本科学未来館前」下車(土日のみ運行)<br>
            路線内の主な駅:錦糸町駅、亀戸駅、西大島駅、新木場駅
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php elseif(is_page('products')): ?>
  <input type="hidden" name="capy_captchakey" value="<?php echo $_POST['capy_captchakey']; ?>" />
  <div class="subvisual">
    <div class="en">Products</div>
    <h2 class="title font-noto">製品</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/products/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/products/subvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="container container-s">
    <div class="product product1">
      <div class="content">
        <div class="content-title">
          <div class="en">Capy Security technology</div>
          <h3 class="title">Capy セキュリティ対策推進事業</h3>
        </div>
        <div class="appear appear-o">
          <img src="<?php echo THEMEPATH; ?>/images/products/product1_img01.jpg" alt="" class="hide-sm"><img src="<?php echo THEMEPATH; ?>/images/products/product1_img01_sp.jpg" alt="" class="inline-sm"><br>
          <div class="block-sm award">Capy Avator Captcha、Capy Risk baseを含めた受賞歴です</div>
          <h4 class="font16 line2">
            近年急増するパスワードリスト攻撃（他サイトなどから不正に取得したユーザIDとパスワードのリストを使って、不正ログインを自動で繰り返しトライする攻撃法）に完全対応。従来まで主流だった『文字入力認証』と比較して、10%以下の離脱率減少を達成。<br>
            人にやさしくボットに厳しい、最新認証テクノロジーをご提供致します。
          </h4>
        </div>
      </div>
      <div class="content appear appear-o">
        <h3 class="content-subtitle">導入効果</h3>
        <h4 class="content-lead">正常登録・ログインの効率向上 － bot/なりすまし等、不正の排除</h4>
        <div class="image">
          <img src="<?php echo THEMEPATH; ?>/images/products/product1_img02.png" alt="導入事例：大手ポイントサイト 登録者の割合" class="hide-sm"><img src="<?php echo THEMEPATH; ?>/images/products/product1_img02_sp.png" alt="" class="inline-sm">
        </div>
        <h5 class="font16 line2">
          某大手ポイントサイトでは、botによる会員登録やログインにて不正にポイントを取得する行為が頻繁にみられていました。しかしCapy導入で不正登録者によるログイン行為や新たなbot登録者を完全排除したことで、Capy導入前の登録ユーザーのうち９０％が不正であることが判明しました。
        </h5>
        <h5 class="font16 line2 pt10">
          また、結果的にbotによるサイトへのアクセスが大幅に減少し、正規ユーザーへの利便性やサービス品質の向上にも貢献しました。
        </h5>
      </div>
      <div class="content appear appear-o">
        <h4 class="content-lead">ユーザーにやさしい/離脱率が大幅減 － 従来のreCAPTCHA比</h4>
        <div class="image">
          <img src="<?php echo THEMEPATH; ?>/images/products/product1_img03.png" alt="従来のCAPTCHAとの離脱率の比較" class="hide-sm"><img src="<?php echo THEMEPATH; ?>/images/products/product1_img03_sp.png" alt="" class="inline-sm">
        </div>
        <h5 class="font16 line2">
          既存の不正ログイン対策ツールとして活用シーンが多いreCAPTCHAは、OCR解析やハッカーによる解析ツールが流通していることから脆弱性の問題は無視できません。<br>
          また、それに合わせて画像表示される文字情報が判読し辛いケースが多いため、操作性の問題から正常なユーザーでもログインや会員登録を諦めるケースが多く、その数は１３％になります（独自調査による）。<br>
          一方でCapy CAPTCHAは強固なセキュリティ・アルゴリズムに合わせて、非常に簡単なパズルを操作するだけなのでユーザーの操作性も高く、離脱率は２％と非常に低い数字になっています。
        </h5>
      </div>
      <div class="content content-client appear appear-o">
        <h3 class="content-subtitle">ご利用企業様</h3>
        <div class="clearfix">
          <div class="logo"><a href="http://www.dospara.co.jp/" target="_blank"><img src="<?php echo THEMEPATH; ?>/images/products/products_client01.png" alt="株式会社ドスパラ様"></a></div>
          <div class="text-title text">株式会社ドスパラ様</div>
          <p class="text comment">
            現在、株式会社ドスパラ様ではcapyパズルキャプチャーを通販サイトで利用されています。<br>
            ネット利用での通販はウィルス感染はもちろん、安全対策のためあらゆる施策を行います。<br>
            しかし、ガードが強すぎるため、購入に至るまでの煩わしいオペレーションが商機を逃すことにもなります。<br>
            このcapyパズルキャプチャー機能は、簡単な設置方法で製品購入までのステップを素早く、しかもセキュリティ強化に優れた機能を発揮します。<br>
            このような利点から株式会社ドスパラ様ではcapyパズルキャプチャーを採用されました。
          </p>
        </div>
      </div>

      <div class="content content-demo appear appear-o">
        <h3 class="content-subtitle">Capy パズルキャプチャ・デモ</h3>
        <div class="clearfix">
          <div class="text text1">
            <p class="font16 line2">
              Capyパズルキャプチャの稼働デモを左の画像でお試しいただけます。<br>
              サンプルのログイン画面（動作しません）内の簡単なパズルを完成させることにより、ログインや会員登録等のデータ送信時にbotや不正アクセスから守ります。
            </p>
          </div>
          <div class="captcha-wrap">
            <div class="captcha">
              <div class="id">
                <div class="form-inline">
                  ID <input type="text" value="demo" readonly class="form-control form-control-s">
                  &nbsp;&nbsp;
                  Password <input type="password" value="demo" readonly class="form-control form-control-s">
                  <p class="font11">デモにつきCapyパズルキャプチャのみ動作します</p>
                </div>
              </div>
              <div class="puzzle">
                <form class="img-absolute" method="POST" action="">
                  <script src="https://www.capy.me/puzzle/get_js/?k=PUZZLE_oZh1cuqbE6Yh4XswwuXKspofqAft3Z"></script>
                  <div id="EYyksQbzcapy" class="capy-captcha" style="position: relative;" onselectstart="return false">
                    <div id="EYyksQbzcaptcha" style="display: block; -moz-user-select: none;">
                      <input name="capy_captchakey" value="PUZZLE_oZh1cuqbE6Yh4XswwuXKspofqAft3Z" type="hidden">
                      <input name="capy_challengekey" id="EYyksQbzcapy_challengekey" value="UUZGx1vDK1eMDSIP6dREBk1C8aF7Sjpz" type="hidden">
                      <input name="capy_answer" id="EYyksQbzcapy_answer" value="null" type="hidden">
                      <img name="EYyksQbzimage" style="display: none; width: 473px; height: 196px;" src="https://jp.api.capy.me/puzzle/get_image/?captcha_key=PUZZLE_oZh1cuqbE6Yh4XswwuXKspofqAft3Z&amp;challenge_key=UUZGx1vDK1eMDSIP6dREBk1C8aF7Sjpz" height="196" width="473">
                      <img src="https://capy.storage.googleapis.com/static/img/loading.gif" style="position: absolute; top: 40%; left: 50%; margin-left: -21px; display: none;" id="EYyksQbzloading" height="11" width="43">
                    </div>
                  </div>
                </form>
                <!--<script src="https://jp.api.capy.me/puzzle/get_js/?k=PUZZLE_smqbYbmL5NjFgeRFN9g6MHscRNor9e"></script>-->
              </div>
              <div class="submit">
                <span class="button button-default">OK（デモにつき送信しません）</span>
              </div>
            </div>
          </div>
          <div class="text">
            <p class="font16 line2 pt10">
              パズル用の画像は好みの写真や画像ファイルをご指定いただけます。<br>
              画像サイズやその他、細かいカスタマイズも、専用管理ツールにてご指定いただけます。
            </p>
            <p class="font12 pt10">
              ※詳しい説明や資料のご要望は、<a href="<?php echo $home_url; ?>/contact/">お問い合わせ</a>からご連絡くださいますようお願い申し上げます。
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="product product2">
      <div class="content">
        <div class="content-title">
          <div class="en">Capy Realtime black list</div>
          <h3 class="title">Capy リアルタイムブラックリスト</h3>
        </div>
        <div class="appear appear-o">
          <img src="<?php echo THEMEPATH; ?>/images/products/product2_img01.png" alt="" class="hide-sm"><img src="<?php echo THEMEPATH; ?>/images/products/product2_img01_sp.png" alt="" class="inline-sm"><br>
          <h4 class="font16 line2">
            Web サイト上で不正行為を仕掛ける攻撃者情報をリアルタイムで取り込み、インターネット上で悪行を繰り返すいわゆる“ブラック IP リスト”をデータベースとして蓄積。<br>
            『Capy キャプチャ』および『Capy リスクベース認証』によって検知された不審な IPアドレスをデータベースに高頻度でアップデートすることで、攻撃者情報を最新の状態に保ち、不審な IP アドレスによるアクセスを検知します。
          </h4>
        </div>
      </div>
    </div>
  </div>


  <?php elseif(is_page('contact')): ?>
  <div class="subvisual">
    <div class="en">Contact us</div>
    <h2 class="title font-noto">お問い合わせ</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/contact/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/contact/subvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="container container-s">
    <div class="content-form">
      <p class="font16 line2 note">
        コラットのサービス、製品その他に関するお問い合わせは以下のフォームより受け付けています。<br>
        必要事項をご記入の上、「内容を確認する」ボタンを押してください。
      </p>
      <?php
        the_content();
      ?>
    </div>
  </div>


  <?php elseif(is_page('confirm') && is_parent_slug('contact')): ?>
  <div class="subvisual">
    <div class="en">Contact us</div>
    <h2 class="title font-noto">お問い合わせ</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/contact/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/contact/subvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="container container-s">
    <div class="content-form">
      <p class="font16 line2 note">
        以下の内容を確認の上、よろしければ「送信する」ボタンを押してください。
      </p>
      <?php
        the_content();
      ?>
    </div>
  </div>


  <?php elseif(is_page('complete') && is_parent_slug('contact')): ?>
  <div class="subvisual">
    <div class="en">Contact us</div>
    <h2 class="title font-noto">お問い合わせ</h2>
    <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/contact/subvisual_img01.jpg" alt=""></div>
    <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/contact/subvisual_img01_sp.jpg" alt=""></div>
  </div>
  <div class="container container-s">
    <div class="content-form appear appear-o">
      <p class="font16 line2 note">
        「お問い合わせを受け付けました。期間を頂き、弊社担当からご連絡差し上げます。」
      </p>
      <?php
        the_content();
      ?>
    </div>
  </div>

  <?php else: ?>
    <div class="container container-s container-page">
      <div class="content-title">
        <h3 class="title"><?php the_title(); ?></h3>
      </div>
      <div class="appear appear-o">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endif; ?>

</div><!-- #post-## -->
