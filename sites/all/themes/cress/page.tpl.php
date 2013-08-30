<?php if(!$page['header']){$home=false;}else{$home=true;} ?>
<div id="main">
  <div id="<?php if(!$home){echo 'innarpage_header'; }else{echo 'outer_header';} ?>">
    <div class="wrapper">

      <div id="header">

        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <div class="right_side">
            <?php print render($page['main_menu']); ?>
        </div>

        <?php print render($page['header']); ?>
        
      </div>
    </div>
  </div>

  <div class="wrapper">

    <div id="body_container">
     
      <div class="top_container <?php if(!$home){ echo 'mar'; } ?>" <?php if($user->uid AND ($_SERVER['REQUEST_URI'] !== '/')){echo 'style="margin-top:-430px;"';} ?>>
        <div class="left_sec">
          <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>

          <?php print render($page['content_header']); ?>
          
          <div class="common_box <?php if(!render($page['sidebar_first'])) echo 'wide'; ?>">
            <?php print render($page['content']); ?>
          </div>

          <?php print render($page['left_footer']); ?>
        </div>

        <?php if(render($page['sidebar_first'])){ ?>
          <div class="right_sec">
              <?php print render($page['sidebar_first']); ?>
          </div>
        <?php } ?>

      </div>
      <div id="footer">
          <?php print render($page['main_footer']); ?>

          <div id="login_sec"> 
            <?php print render($page['login']); ?>
          </div>
      </div>
    </div>
  </div>
</div>
