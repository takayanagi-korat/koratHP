<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package korat
 */
get_header();
?>

<div class="subvisual subvisual-l">
  <div class="en">Interview</div>
  <h2 class="title font-noto">社員インタビュー</h2>
  <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/interview/subvisual_img01.jpg" alt=""></div>
  <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/interview/subvisual_img01_sp.jpg" alt=""></div>
</div>

<div class="container">
  <div class="content">
    <?php while ( have_posts() ) : ?>
    <?php
      the_post();
      $post_meta = get_post_meta($post->ID);
      $job_en = $post_meta['wpcf-interview_job_en'][0];
      $job_ja = $post_meta['wpcf-interview_job'][0];
      $name = _h($post_meta['wpcf-interview_last_name'][0]) . ' ' . _h($post_meta['wpcf-interview_first_name'][0]);
      $dept = nl2br(_h($post_meta['wpcf-interview_dept'][0]));
      $major = nl2br(_h($post_meta['wpcf-interview_major'][0]));
      $profile = nl2br(_h($post_meta['wpcf-interview_profile'][0]));
      $url = get_the_permalink();
      $thumbnail = $post_meta['wpcf-interview_thumbnail'][0];;
    ?>

    <div class="content-profile">
      <div>
        <img src="<?php echo $post_meta['wpcf-interview_main'][0]; ?>" alt="">
        <ul class="display-table">
          <li>
            <?php if($job_en): ?>
            <p class="job">
              <span class="font-en job-en"><?php echo $job_en; ?></span>
              <span class="job-ja"><?php echo $job_ja; ?></span>
            </p>
            <?php endif; ?>
            <?php if($name): ?>
            <p class="name"><?php echo $name; ?></p>
            <?php endif; ?>
            <div class="hide-xs">
              <?php if($dept || $major): ?>
              <div class="dept">
                <p>
                  <?php if($dept): ?>
                  <?php echo $dept; ?><br>
                  <?php endif; ?>
                  <?php if($major): ?>
                  <?php echo $major; ?><br>
                  <?php endif; ?>
                </p>
              </div>
            <?php endif; ?>
            </div>
            <?php if($profile): ?>
            <p class="line2 profile hide-sm"><?php echo $profile; ?></p>
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <div class="block-sm">
        <?php if($dept || $major): ?>
        <div class="dept">
          <p>
            <?php if($dept): ?>
            <?php echo $dept; ?><br>
            <?php endif; ?>
            <?php if($major): ?>
            <?php echo $major; ?><br>
            <?php endif; ?>
          </p>
        </div>
        <?php endif; ?>
      </div>
      <?php if($profile): ?>
      <p class="line2 profile block-sm"><?php echo $profile; ?></p>
      <?php endif; ?>
    </div>

    <div class="content-interview">
      <?php
        $i = 0;
        while($post_meta['wpcf-interview_q'][$i]): ?>

        <?php
          $img = $post_meta['wpcf-interview_image'][$i];
          $img_class = '';
          if($img){
            $img_class = ' image-left';
            if($i%2){
              $img_class = ' image-right';
            }
          }
        ?>
        <div class="interview">
          <h3 class="interview-title">
            <span class="font-en q">Q<?php echo ($i + 1);?></span>
            <span class="q-text"><?php echo _h($post_meta['wpcf-interview_q'][$i]);?></span>
          </h3>
          <div class="interview-body">
            <div class="clearfix<?php echo $img_class; ?>">
              <?php if($img): ?>
              <div class="image">
                <img src="<?php echo $img; ?>" alt="">
              </div>
              <?php endif; ?>
              <h4 class="text font16 line2">
                <?php echo nl2br(_h($post_meta['wpcf-interview_a'][$i])); ?>
              </h4>
            </div>
          </div>
        </div>

        <?php $i++; ?>
        <?php endwhile;?>

      <?php
        $img = '';
        if (has_post_thumbnail()) {
          $thumbnail_id = get_post_thumbnail_id();
          $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' );
          $img = $eye_img[0];
        }
        $categories = get_the_category();
        $category = '';
        if($categories && count($categories)){
          foreach($categories as $a){
            if($a->slug != 'column' && $a->slug != 'pickup'){
              $category .= '<span class="badge">' . $a->name . '</span>' . "\n";
            }
          }
        }
      ?>

    </div>

    <?php
    $i = 0;
    $schedule = false;
    while($post_meta['wpcf-interview_schedule_time'][$i]){
      $i++;
      $schedule = true;
    }
    ?>
    <?php if($schedule): ?>
    <div class="content-schedule">
      <div class="title">
        <p>
          <span class="font-en title-en">Schedule</span>
          <span class="title-ja">1日のスケジュール</span>
        </p>
      </div>
      <div class="schedules">
        <?php
          $i = 0;
          while($post_meta['wpcf-interview_schedule_time'][$i]): ?>

          <div class="schedule">
            <div class="font-en time"><?php echo _h($post_meta['wpcf-interview_schedule_time'][$i]); ?></div>
            <div class="texts">
              <ul class="display-table">
                <?php if($post_meta['wpcf-interview_schedule_image'][$i]): ?>
                <li class="image"><img src="<?php echo _h($post_meta['wpcf-interview_schedule_image'][$i]); ?>" alt=""></li>
                <li class="text">
                  <?php echo nl2br(_h($post_meta['wpcf-interview_schedule_text'][$i])); ?>
                </li>
                <?php else: ?>
                <li class="text text-only"><?php echo nl2br(_h($post_meta['wpcf-interview_schedule_text'][$i])); ?></li>
                <?php endif;?>
              </ul>
            </div>
          </div>
          <?php $i++; ?>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

    <div class="content-member">
      <div class="title">
        <p>
          <span class="font-en title-en"><?php echo $job_en; ?></span>
          <span class="title-ja"><?php echo $job_ja; ?>チーム</span>
        </p>
      </div>
      <div class="members-wrap">
        <div class="members">
          <div class="clearfix">
          <?php
            $args = Array(
            'post_type' => 'interview',
            'posts_per_page' => -1,
            'meta_key' => 'wpcf-interview_job',
            'meta_value' => $job_ja
            );
            $the_query = new WP_Query($args);
            if($the_query -> have_posts()):?>

          <?php
            $members = array();
            while($the_query -> have_posts()): $the_query -> the_post();

            $post_meta = get_post_meta($post->ID);
            $name = _h($post_meta['wpcf-interview_last_name'][0]) . ' ' . _h($post_meta['wpcf-interview_first_name'][0]);
            $thumbnail = $post_meta['wpcf-interview_thumbnail'][0];

            $image_id = get_attachment_id($thumbnail);
            $image = get_image_info($image_id, 'medium');
            if($image && $image['src']){
              $thumbnail = $image['src'];
            }

            $members[] = array(
              'name' => $name,
              'link' => get_the_permalink(),
              'thumbnail' => $thumbnail
            );
            endwhile;
            endif;
            wp_reset_postdata();

            if(is_preview()){
              $members[] = array(
                'name' => $name,
                'link' => $url,
                'thumbnail' => $thumbnail
              );
            }
            $i = 0;
            $l = count($members);
            $l_sm = ceil($l/4);
            $l_s = ceil($l/3);
            while(count($members)%5){
              $members[] = array();
              $i++;
            }
            $l = count($members);
            for($i = 0; $i < $l; $i++){
              if($members[$i]['name']){
                echo '<div class="member-wrap"><a class="member" href="' . $members[$i]['link'] . '"><div class="thumb"><img src="' . $members[$i]['thumbnail'] . '"></div><div class="name"><p><span>' . $members[$i]['name'] . '</span></p></div></a></div>';
              }
              else{
                $class = 'member-wrap soon';
                $class .= ' ' . $i . ' ' . $l_sm*4;
                if($i >= $l_sm*4){
                  $class .= ' hide-sm';
                }
                if($i >= $l_s*3){
                  $class .= ' hide-s';
                }
                echo '<div class="' . $class . '"><div class="member"><div class="thumb"><img src="' . THEMEPATH . '/images/interview/soon.png"></div><div class="name"><p><span>&nbsp;</span></p></div></div></div>';
              }
            }
          ?>
          </div>
        </div>
      </div>
    </div>

    <?php endwhile; ?>
  </div>
</div>


<?php
get_footer();
