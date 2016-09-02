<?php /* Smarty version 2.6.18, created on 2016-05-18 23:51:45
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/error.tpl', 1, false),array('modifier', 'nl2br', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/error.tpl', 11, false),)), $this); ?>
<?php echo smarty_function_ft_include(array('file' => "header.tpl"), $this);?>


  <?php if ($this->_tpl_vars['error_type'] == 'error'): ?>
    <div class="error" style="padding: 8px">
      <span class="bold"><?php echo $this->_tpl_vars['LANG']['word_error_c']; ?>
</span>
  <?php else: ?>
    <div class="notify" style="padding:8px">
  <?php endif; ?>

    <div style="padding-top: 10px">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['last_error'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

    </div>

    <?php if ($this->_tpl_vars['g_debug']): ?>
      <?php if ($this->_tpl_vars['error_debug'] == ""): ?>
        <?php $this->assign('error_debug', "No further help available."); ?>
      <?php endif; ?>

      <p>Debug:</p>
      <p><?php echo $this->_tpl_vars['error_debug']; ?>
</p>
    <?php endif; ?>

  </div>

  <noscript>
    <br />
    <div class="error" style="padding:8px;">
      Note: in order to login and use Form Tools, you must have javascript enabled in your browser. Please enable it now, then refresh this page.
    </div>
  </noscript>

<?php echo smarty_function_ft_include(array('file' => "footer.tpl"), $this);?>

