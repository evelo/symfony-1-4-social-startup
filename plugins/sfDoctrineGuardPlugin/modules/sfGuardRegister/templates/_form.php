<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_register') ?>" method="post">
    <div>
        <?php if ($form->renderGlobalErrors()): ?>
            <div class="byk">
                <?php echo $form->renderGlobalErrors() ?>
            </div>
        <?php endif; ?>


        <?php if ($form['first_name']->renderError()): ?>
            <div class="byk">
        <?php endif; ?>
        <label><?php echo __('First name', null, 'sf_guard') ?>: <?php echo $form['first_name'] ?></label>
        <?php if ($form['first_name']->renderError()): ?>
                <?php echo $form['first_name']->renderError() ?>
            </div>
        <?php endif; ?>


        <?php if ($form['last_name']->renderError()): ?>
            <div class="byk">
        <?php endif; ?>
        <label><?php echo __('Last name', null, 'sf_guard') ?>: <?php echo $form['last_name'] ?></label>
        <?php if ($form['last_name']->renderError()): ?>
                <?php echo $form['last_name']->renderError() ?>
            </div>
        <?php endif; ?>


        <?php if ($form['email_address']->renderError()): ?>
            <div class="byk">
        <?php endif; ?>
        <label><?php echo __('Email', null, 'sf_guard') ?>: <?php echo $form['email_address'] ?></label>
        <?php if ($form['email_address']->renderError()): ?>
                <?php echo $form['email_address']->renderError() ?>
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


        <?php if ($form['password_again']->renderError()): ?>
            <div class="byk">
        <?php endif; ?>
        <label><?php echo __('Password again', null, 'sf_guard') ?>: <?php echo $form['password_again'] ?></label>
        <?php if ($form['password_again']->renderError()): ?>
                <?php echo $form['password_again']->renderError() ?>
            </div>
        <?php endif; ?>

        <input type="submit" value="<?php echo __('Register', null, 'sf_guard') ?>" />
        <?php echo $form->renderHiddenFields(false) ?>
    </div>
</form>
