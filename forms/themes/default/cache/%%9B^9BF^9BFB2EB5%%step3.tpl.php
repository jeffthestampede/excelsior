<?php /* Smarty version 2.6.18, created on 2016-05-30 21:44:42
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step3.tpl', 1, false),array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/add/step3.tpl', 27, false),)), $this); ?>
<?php echo smarty_function_ft_include(array('file' => 'header.tpl'), $this);?>


  <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="../"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/icon_forms.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../"><?php echo $this->_tpl_vars['LANG']['word_forms']; ?>
</a> <span class="joiner">&raquo;</span>
      <a href="./"><?php echo $this->_tpl_vars['LANG']['phrase_add_form']; ?>
</a> <span class="joiner">&raquo;</span>
      <?php echo $this->_tpl_vars['LANG']['phrase_external_form']; ?>

    </td>
  </tr>
  </table>

  <table cellpadding="0" cellspacing="0" width="100%" class="add_form_nav">
  <tr>
    <td class="selected"><a href="step1.php"><?php echo $this->_tpl_vars['LANG']['word_start']; ?>
</a></td>
    <td class="selected"><a href="step2.php"><?php echo $this->_tpl_vars['LANG']['phrase_form_info']; ?>
</a></td>
    <td class="selected"><?php echo $this->_tpl_vars['LANG']['phrase_test_submission']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_database_setup']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_field_types']; ?>
</td>
    <td class="unselected"><?php echo $this->_tpl_vars['LANG']['phrase_finalize_form']; ?>
</td>
  </tr>
  </table>

  <br />

  <div class="subtitle underline"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_test_submission_3'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</div>

  <?php echo smarty_function_ft_include(array('file' => 'messages.tpl'), $this);?>


  <div class="pad_bottom">
    <?php echo $this->_tpl_vars['LANG']['text_add_form_step_3_text_1']; ?>

  </div>

  <?php if ($this->_tpl_vars['form_info']['submission_type'] == 'direct'): ?>

    <p>
      <b>1</b>. <?php echo $this->_tpl_vars['LANG']['text_add_form_step_2_para_2']; ?>

      <br />
      <textarea style="color: #336699; width: 100%; height: 65px"><?php echo $this->_tpl_vars['form_tag']; ?>

<?php echo $this->_tpl_vars['hidden_fields']; ?>
</textarea>
    </p>

    <p>
      <b>2</b>. <?php echo $this->_tpl_vars['direct_form_para_2']; ?>

    </p>

    <?php if ($this->_tpl_vars['form_info']['is_initialized'] == 'no'): ?>
      <div class="incomplete">
        <div style="padding-bottom: 5px;"><?php echo $this->_tpl_vars['LANG']['phrase_awaiting_form_submission']; ?>
</div>
        <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">
          <input type="hidden" name="submission_type" value="direct" />
          <input type="hidden" name="form_id" value="<?php echo $this->_tpl_vars['form_id']; ?>
"/>
          <input type="submit" name="refresh" value="<?php echo $this->_tpl_vars['LANG']['phrase_refresh_page']; ?>
" />
        </form>
      </div>
    <?php elseif ($this->_tpl_vars['form_info']['is_initialized'] == 'yes'): ?>
      <p>
        <input type="button" value="<?php echo $this->_tpl_vars['LANG']['phrase_resend_test_submission']; ?>
"
          onclick="window.location='<?php echo $this->_tpl_vars['same_page']; ?>
?uninitialize=1'" />
      </p>
      <p>
        <input type="button" name="submit" class="next_step" value="<?php echo $this->_tpl_vars['LANG']['word_next_step_rightarrow']; ?>
"
          onclick="window.location='step4.php?form_id=<?php echo $this->_tpl_vars['form_id']; ?>
'"/>
      </p>
    <?php endif; ?>

  <?php else: ?>

    <p>
      <?php echo $this->_tpl_vars['LANG']['text_add_form_step_3_text_4']; ?>

    </p>

    <ul>
      <li><a href="http://docs.formtools.org/tutorials/api_single_page_form/" target="_blank"><?php echo $this->_tpl_vars['LANG']['phrase_adding_single_page_form']; ?>
</a></li>
      <li><a href="http://docs.formtools.org/tutorials/api_multi_page_form/" target="_blank"><?php echo $this->_tpl_vars['LANG']['phrase_adding_multi_page_form']; ?>
</a></li>
    </ul>

    <p>
      <?php echo $this->_tpl_vars['LANG']['text_add_form_step_3_text_5']; ?>

    </p>

    <code><pre class="green">
    $fields = ft_api_init_form_page(<?php echo $this->_tpl_vars['form_id']; ?>
, "initialize");</pre></code>

    <p>
      <?php echo $this->_tpl_vars['LANG']['text_add_form_step_3_text_7']; ?>

    </p>

    <code><pre class="green">
    "finalize" => true</pre></code>

    <p>
      <?php echo $this->_tpl_vars['LANG']['text_add_form_step_3_text_6']; ?>

    </p>

    <?php if ($this->_tpl_vars['form_info']['is_initialized'] == 'no'): ?>
      <div class="incomplete">
        <div style="padding-bottom: 5px;"><?php echo $this->_tpl_vars['LANG']['phrase_awaiting_form_submission']; ?>
</div>
        <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post">
          <input type="hidden" name="submission_type" value="code" />
          <input type="hidden" name="form_id" value="<?php echo $this->_tpl_vars['form_id']; ?>
" />
          <input type="submit" name="refresh" value="<?php echo $this->_tpl_vars['LANG']['phrase_refresh_page']; ?>
" />
        </form>
      </div>
    <?php elseif ($this->_tpl_vars['form_info']['is_initialized'] == 'yes'): ?>
      <p>
        <input type="button" value="<?php echo $this->_tpl_vars['LANG']['phrase_resend_test_submission']; ?>
"
          onclick="window.location='<?php echo $this->_tpl_vars['same_page']; ?>
?uninitialize=1'" />
      </p>
      <p>
        <input type="button" name="submit" class="next_step" value="<?php echo $this->_tpl_vars['LANG']['word_next_step_rightarrow']; ?>
"
          onclick="window.location='step4.php?form_id=<?php echo $this->_tpl_vars['form_id']; ?>
'"/>
      </p>
    <?php endif; ?>

  <?php endif; ?>

<?php echo smarty_function_ft_include(array('file' => 'footer.tpl'), $this);?>