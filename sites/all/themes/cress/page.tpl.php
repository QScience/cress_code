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
               <?php if ($main_menu): ?>
                <div id="menu" class="navigation">
                  <?php print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                      'id' => 'main-menu-links',
                      'class' => array('links', 'clearfix'),
                    ),
                    'heading' => array(
                      'text' => t('Main menu'),
                      'level' => 'h2',
                      'class' => array('element-invisible'),
                    ),
                  )); ?>
                </div> <!-- /#main-menu -->
              <?php endif; ?>

            <!--
            <ul id="nav" >
              <li><a href="#">Home</a></li>
              <li><a href="#">People</a></li>
              <li><a href="#">Projects</a>
                
              </li>
              <li><a href="#">Publications</a>
              <ul class="sub_menu">
                  <li  class="first"><a href="#" class="none">Paper</a></li>
                  <li><a href="#">Book</a></li>
                  <li class="last none"><a href="#" >Presentation</a></li>
                </ul>
              </li>
              <li><a href="#">Links</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#"> About us</a></li>
            </ul>
            -->




          <div id="login_sec"> 
            <?php print render($page['login']); ?>
          </div>

        </div>



        <?php print render($page['header']); ?>

      </div>
    </div>
  </div>
  <div class="wrapper">
    <div id="body_container">

      <div class="top_container <?php if(!$home){ echo 'mar'; } ?>">
        <div class="left_sec">
        
          <div class="common_box">
            <?php print render($page['content']); ?>
          </div>


          <?php print render($page['left_footer']); ?>

       
         
        </div>
        <div class="right_sec">
            <?php print render($page['sidebar_first']); ?>
        </div>
      </div>
      <div id="footer">
            <?php print render($page['main_footer']); ?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery("#outer_header, #innarpage_header").backstretch("/CRESS/sites/all/themes/cress/images/header_bg.png");
  });
</script>
