<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>

<?php 

  $pic = @$user_profile['user_picture']['#markup'];

  $user_profile = (array) $user_profile['field_profile_name']['#object'];

  switch (@$user_profile['field_profile_position']['und'][0]['tid']) {
    case 82:
      $position = "Administrator";
      break;
    
    case 80:
      $position = "Director";
      break;

    case 81:
      $position = "Researcher";
      break;
  }

  $title = @$user_profile['position']['und'][0]['value'];
  $institution = @$user_profile['institution']['und'][0]['value'];
  $firstname = @$user_profile['field_profile_name']['und'][0]['value'];
  $lastname = @$user_profile['field_profile_last_name']['und'][0]['value'];
  $bio = @$user_profile['field_profile_biography']['und'][0]['value'];
  $qual = @$user_profile['field_profile_qualifications']['und'][0]['value'];
  $web = @$user_profile['field_profile_personal_websites']['und'];
  
  drupal_set_title($firstname . ' ' . $lastname);
?>

<div id="user-profile">
  <h1 class="title" id="page-title">
    <?php
      if (isset($position) && isset($title)) {
        echo $firstname .' '. $lastname . ' (' . $title . ', '.$position.')';
      }elseif(isset($position)){
        echo $firstname .' '. $lastname . ' ('.$position.')';
      }else{
        echo $firstname . ' ' . $lastname;
      }
    ?>
  </h1>
  <h4 style="margin:-15px 0 20px 0">
        <?php echo @$qual; ?>
  </h4>
    <div id="user-picture">
      <?php echo @$pic; ?>
    </div>
  <div id="field_bio">
    <?php echo @$bio; ?>
  </div>

  <div id="field_more_information">
    <?php
      if (isset($web)) {
        echo '<div id="field_more_information_header">More information:' . '</div>';
        echo '<ul>';
        foreach ($web as $link){
          echo '<li>' . l($link['title'], $link['url'], array('attributes'=>array('target'=>'blank'))) . '</li>';
        }
        echo '</ul>';
      }
    ?>
  </div>
</div>