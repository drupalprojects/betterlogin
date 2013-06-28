<div id="auth_box">
  <div id="header">
    <h1 id="logo"><?php print l($site_name, '<front>'); ?></h1>
  </div>

  <div id="main" role="main">
    <h2><?php print $title; ?></h2>
    <?php print $messages; ?>
    <?php print render($page['content']); ?>
  </div>

  <div id="footer">
    <div><?php print l(t('Login'), 'user/login'); ?></div>
    <div><?php print l(t('Forgot your password?'), 'user/password'); ?></div>
    
    <p></p>
    <div><a href="<?php print url('<front>'); ?>">&larr; Back to the home page</a></div>
  </div>
</div>
