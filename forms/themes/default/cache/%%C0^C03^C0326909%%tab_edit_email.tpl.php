<?php /* Smarty version 2.6.18, created on 2016-05-27 14:58:46
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/tab_edit_email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/tab_edit_email.tpl', 6, false),array('modifier', 'count', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/tab_edit_email.tpl', 15, false),array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/tab_edit_email.tpl', 9, false),)), $this); ?>
    <div class="previous_page_icon">
      <a href="edit.php?page=emails&form_id=<?php echo $this->_tpl_vars['form_id']; ?>
"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/up.jpg" title="<?php echo $this->_tpl_vars['LANG']['phrase_previous_page']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['phrase_previous_page']; ?>
" border="0" /></a>
    </div>

    <div class="underline margin_top_large">
      <span class="subtitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_edit_email_template'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</span>
    </div>

    <?php echo smarty_function_ft_include(array('file' => 'messages.tpl'), $this);?>


    <form method="post" id="edit_email_template_form" action="<?php echo $this->_tpl_vars['same_page']; ?>
?page=edit_email">
            <input type="hidden" name="form_id" id="form_id" value="<?php echo $this->_tpl_vars['form_id']; ?>
" />
      <input type="hidden" name="email_id" id="email_id" value="<?php echo $this->_tpl_vars['email_id']; ?>
" />
      <input type="hidden" name="num_recipients" id="num_recipients" value="<?php echo count($this->_tpl_vars['template_info']['recipients']); ?>
" />

      <div class="inner_tabset" id="edit_email_template">
        <div class="tab_row fourCols">
          <div class="inner_tab1<?php if ($this->_tpl_vars['edit_email_tab'] == 1): ?> selected<?php endif; ?>"><?php echo $this->_tpl_vars['LANG']['word_configuration']; ?>
</div>
          <div class="inner_tab2<?php if ($this->_tpl_vars['edit_email_tab'] == 2): ?> selected<?php endif; ?>"><?php echo $this->_tpl_vars['LANG']['word_recipient_sp']; ?>
</div>
          <div class="inner_tab3<?php if ($this->_tpl_vars['edit_email_tab'] == 3): ?> selected<?php endif; ?>"><?php echo $this->_tpl_vars['LANG']['word_content']; ?>
</div>
          <div class="inner_tab4<?php if ($this->_tpl_vars['edit_email_tab'] == 4): ?> selected<?php endif; ?>"><?php echo $this->_tpl_vars['LANG']['word_test']; ?>
</div>
        </div>
        <div class="inner_tab_content">
          <div class="inner_tab_content1" <?php if ($this->_tpl_vars['edit_email_tab'] != 1): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_ft_include(array('file' => "admin/forms/tab_edit_email_tab1.tpl"), $this);?>

          </div>
          <div class="inner_tab_content2" <?php if ($this->_tpl_vars['edit_email_tab'] != 2): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_ft_include(array('file' => "admin/forms/tab_edit_email_tab2.tpl"), $this);?>

          </div>
          <div class="inner_tab_content3" <?php if ($this->_tpl_vars['edit_email_tab'] != 3): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_ft_include(array('file' => "admin/forms/tab_edit_email_tab3.tpl"), $this);?>

          </div>
          <div class="inner_tab_content4" <?php if ($this->_tpl_vars['edit_email_tab'] != 4): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_ft_include(array('file' => "admin/forms/tab_edit_email_tab4.tpl"), $this);?>

          </div>
        </div>
      </div>

      <p>
        <input type="submit" name="update_email_template" value="<?php echo $this->_tpl_vars['LANG']['phrase_update_email_template']; ?>
" />
      </p>

    </form>