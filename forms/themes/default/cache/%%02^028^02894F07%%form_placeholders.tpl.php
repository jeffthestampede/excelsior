<?php /* Smarty version 2.6.18, created on 2016-05-27 15:31:59
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/form_placeholders.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/forms/form_placeholders.tpl', 6, false),)), $this); ?>
          <div class="margin_top margin_bottom_large">
            <img src="<?php echo $this->_tpl_vars['images_url']; ?>
/placeholders.png" style="float: left; margin-right: 10px" />
            <?php echo $this->_tpl_vars['text_reference_tab_info']; ?>

          </div>

          <p class="subtitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_global_placeholders'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</p>

          <p>
            <?php echo $this->_tpl_vars['LANG']['text_global_placeholder_info']; ?>

          </p>

          <table cellpadding="1" cellspacing="1" class="list_table" width="100%">
          <tr>
            <td valign="top" class="blue" width="160"><?php echo '{$FORMNAME}'; ?>
</td>
            <td><?php echo $this->_tpl_vars['LANG']['text_name_of_form']; ?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue"><?php echo '{$LOGINURL}'; ?>
</td>
            <td><?php echo $this->_tpl_vars['LANG']['text_form_tools_login_url']; ?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue"><?php echo '{$FORMURL}'; ?>
</td>
            <td><?php echo $this->_tpl_vars['LANG']['text_form_tools_form_url']; ?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue"><?php echo '{$ADMINEMAIL}'; ?>
</td>
            <td><?php echo $this->_tpl_vars['LANG']['text_admin_email_placeholder_info']; ?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue"><?php echo '{$SUBMISSIONDATE}'; ?>
</td>
            <td><?php echo $this->_tpl_vars['LANG']['text_form_submission_date_placeholder']; ?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue"><?php echo '{$LASTMODIFIEDDATE}'; ?>
</td>
            <td>
              <?php echo $this->_tpl_vars['LANG']['text_last_modified_date_explanation_c']; ?>

              <?php echo '{$SUBMISSIONDATE}'; ?>

            </td>
          </tr>
          <tr>
            <td valign="top" class="blue"><?php echo '{$SUBMISSIONID}'; ?>
</td>
            <td><?php echo $this->_tpl_vars['LANG']['text_unique_submission_id']; ?>
</td>
          </tr>
          <tr>
            <td valign="top" class="blue"><?php echo '{$IPADDRESS}'; ?>
</td>
            <td><?php echo $this->_tpl_vars['LANG']['text_submission_ip_address']; ?>
</td>
          </tr>
          </table>
          <br />

          <p class="subtitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_form_placeholders'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</p>
          <p>
            <?php echo $this->_tpl_vars['LANG']['text_form_placeholder_info']; ?>

            <?php echo $this->_tpl_vars['file_field_text']; ?>

          </p>

          <table cellpadding="1" cellspacing="1" class="list_table" width="100%">
          <tr>
            <th><?php echo $this->_tpl_vars['LANG']['phrase_field_label']; ?>
</th>
            <th><?php echo $this->_tpl_vars['LANG']['phrase_form_field']; ?>
</th>
            <th><?php echo $this->_tpl_vars['LANG']['phrase_label_response_placeholders']; ?>
</th>
          </tr>
          <?php $_from = $this->_tpl_vars['form_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['row'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['row']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['row']['iteration']++;
?>
            <tr>
              <td><?php echo $this->_tpl_vars['field']['field_title']; ?>
</td>
              <td><?php echo $this->_tpl_vars['field']['field_name']; ?>
</td>
              <td>
                <table cellspacing="0" cellpadding="0">
                <tr>
                  <td nowrap class="margin_right_large">Field Label</td>
                  <td class="blue"><?php echo '{$QUESTION'; ?>
_<?php echo $this->_tpl_vars['field']['field_name']; ?>
<?php echo '}'; ?>
</td>
                </tr>
                <tr>
                  <td nowrap class="margin_right_large">Field Response</td>
                  <td class="blue">
                    <?php if ($this->_tpl_vars['field']['is_file_field'] == 'yes'): ?>
                      <?php echo '{$FILENAME'; ?>
_<?php echo $this->_tpl_vars['field']['field_name']; ?>
<?php echo '}'; ?>
, <?php echo '{$FILEURL'; ?>
_<?php echo $this->_tpl_vars['field']['field_name']; ?>
<?php echo '}'; ?>

                    <?php else: ?>
                      <?php echo '{$ANSWER'; ?>
_<?php echo $this->_tpl_vars['field']['field_name']; ?>
<?php echo '}'; ?>

                      <?php if ($this->_tpl_vars['field']['field_name'] == 'core__submission_id'): ?>
                        <?php echo '/ {$SUBMISSIONID}'; ?>

                      <?php elseif ($this->_tpl_vars['field']['field_name'] == 'core__submission_date'): ?>
                        <?php echo '/ {$SUBMISSIONDATE}'; ?>

                      <?php elseif ($this->_tpl_vars['field']['field_name'] == 'core__last_modified'): ?>
                        <?php echo '/ {$LASTMODIFIEDDATE}'; ?>

                      <?php elseif ($this->_tpl_vars['field']['field_name'] == 'core__ip_address'): ?>
                        <?php echo '/ {$IPADDRESS}'; ?>

                      <?php endif; ?>
                    <?php endif; ?>
                  </td>
                </tr>
                </table>
              </td>
            </tr>
          <?php endforeach; endif; unset($_from); ?>
          </table>

        </div>