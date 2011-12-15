<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <div>

        <?php if ($form->renderGlobalErrors()): ?>
            <div class="byk">
                <?php echo $form->renderGlobalErrors() ?>
            </div>
        <?php endif; ?>


        <?php if ($form['username']->renderError()): ?>
            <div class="byk">
        <?php endif; ?>
        <label><?php echo __('Username', null, 'sf_guard') ?>: <?php echo $form['username'] ?></label>
        <?php if ($form['username']->renderError()): ?>
                <?php echo $form['username']->renderError() ?>
            </div>
        <?php endif; ?>


        <?php if ($form['password']->renderError()): ?>
            <div class="byk">
        <?php endif; ?>
        <label><?php echo __('Password', null, 'sf_guard') ?>: <?php echo $form['password'] ?></label>
        <?php if ($form['password']->renderError()): ?>
                <?php echo $form['password']->renderError() ?>
            </div>
        <?php endif; ?>


        <?php if ($form['remember']->renderError()): ?>
            <div class="byk">
        <?php endif; ?>
        <label><?php echo __('Remember', null, 'sf_guard') ?>: <?php echo $form['remember'] ?></label>
        <?php if ($form['remember']->renderError()): ?>
                <?php echo $form['rememberremember']->renderError() ?>
            </div>
        <?php endif; ?>

        <input type="submit" value="<?php echo __('Signin', null, 'sf_guard') ?>" />
        <?php echo $form->renderHiddenFields(false) ?>
    </div>
</form>

<p>
  <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
</p>


<p>
  <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
</p>
