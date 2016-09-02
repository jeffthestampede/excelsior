<?php /* Smarty version 2.6.18, created on 2016-05-19 17:18:19
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/settings/tab_edit_admin_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/settings/tab_edit_admin_menu.tpl', 5, false),array('modifier', 'count', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/settings/tab_edit_admin_menu.tpl', 18, false),array('modifier', 'escape', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/settings/tab_edit_admin_menu.tpl', 34, false),array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/settings/tab_edit_admin_menu.tpl', 7, false),array('function', 'template_hook', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/settings/tab_edit_admin_menu.tpl', 13, false),array('function', 'pages_dropdown', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/settings/tab_edit_admin_menu.tpl', 33, false),array('function', 'forms_dropdown', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/settings/tab_edit_admin_menu.tpl', 45, false),array('function', 'clients_dropdown', '/var/www/vhosts/excelsiorschool.com/httpdocs/formtools/themes/default/admin/settings/tab_edit_admin_menu.tpl', 47, false),)), $this); ?>
    <div class="previous_page_icon">
      <a href="index.php?page=menus"><img src="<?php echo $this->_tpl_vars['images_url']; ?>
/up.jpg" title="<?php echo $this->_tpl_vars['LANG']['phrase_previous_page']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['phrase_previous_page']; ?>
" border="0" /></a>
    </div>

    <div class="subtitle underline margin_top_large"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['phrase_edit_admin_menu'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</div>

    <?php echo smarty_function_ft_include(array('file' => 'messages.tpl'), $this);?>


    <div class="pad_bottom_large">
      <?php echo $this->_tpl_vars['LANG']['text_edit_admin_menu_page']; ?>

    </div>

    <?php echo smarty_function_template_hook(array('location' => 'admin_settings_admin_menu_top'), $this);?>


    <form action="<?php echo $this->_tpl_vars['same_page']; ?>
" method="post" onsubmit="return mm.update_admin_menu_submit(this)">
      <input type="hidden" name="page" value="edit_admin_menu" />
      <input type="hidden" name="menu_id" value="<?php echo $this->_tpl_vars['menu']['menu_id']; ?>
" />
      <input type="hidden" name="num_rows" id="num_rows" value="<?php echo count($this->_tpl_vars['menu']['menu_items']); ?>
" />

      <table id="menu_table" class="list_table" cellspacing="1" cellpadding="1" width="100%">
      <tbody>
      <tr>
        <th width="40"><?php echo $this->_tpl_vars['LANG']['word_order']; ?>
</th>
        <th><?php echo $this->_tpl_vars['LANG']['word_page']; ?>
</th>
        <th width="130"><?php echo $this->_tpl_vars['LANG']['phrase_display_text']; ?>
</th>
        <th><?php echo $this->_tpl_vars['LANG']['word_options']; ?>
</th>
        <th width="75"><?php echo $this->_tpl_vars['LANG']['word_submenu']; ?>
</th>
        <th class="del" width="70"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_remove'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</th>
      </tr>
      <?php $_from = $this->_tpl_vars['menu']['menu_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
        <tr id="row_<?php echo $this->_tpl_vars['i']['list_order']; ?>
">
          <td align="center"><input type="text" style="width:30px" name="menu_row_<?php echo $this->_tpl_vars['i']['list_order']; ?>
_order" id="menu_row_<?php echo $this->_tpl_vars['i']['list_order']; ?>
_order" value="<?php echo $this->_tpl_vars['i']['list_order']; ?>
" /></td>
          <td width="120"><?php echo smarty_function_pages_dropdown(array('menu_type' => 'admin','default' => $this->_tpl_vars['i']['page_identifier'],'name_id' => "page_identifier_".($this->_tpl_vars['i']['list_order']),'onchange' => "mm.change_page(".($this->_tpl_vars['i']['list_order']).", this.value)",'is_building_menu' => true), $this);?>
</td>
          <td width="120"><input type="text" name="display_text_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" id="display_text_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['i']['display_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="width:120px" /></td>
          <td class="nowrap"><div id="row_<?php echo $this->_tpl_vars['i']['list_order']; ?>
_options" class="nowrap pad_left_small">
            <?php if ($this->_tpl_vars['i']['page_identifier'] == 'custom_url'): ?>
              URL:&nbsp;<input type="text" name="custom_options_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" id="custom_options_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['i']['custom_options'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="width:160px" />
            <?php elseif ($this->_tpl_vars['i']['page_identifier'] == 'form_submissions' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_main' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_fields' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_views' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_emails' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_database' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_add_fields'): ?>
              <?php echo $this->_tpl_vars['LANG']['word_form_c']; ?>
&nbsp;<?php echo smarty_function_forms_dropdown(array('name_id' => "custom_options_".($this->_tpl_vars['i']['list_order']),'style' => "width:155px",'default' => $this->_tpl_vars['i']['custom_options']), $this);?>

            <?php elseif ($this->_tpl_vars['i']['page_identifier'] == 'edit_client'): ?>
              <?php echo $this->_tpl_vars['LANG']['word_client_c']; ?>
&nbsp;<?php echo smarty_function_clients_dropdown(array('name_id' => "custom_options_".($this->_tpl_vars['i']['list_order']),'style' => "width:150px",'default' => $this->_tpl_vars['i']['custom_options']), $this);?>

            <?php else: ?>
              <span class="medium_grey"><?php echo $this->_tpl_vars['LANG']['word_na']; ?>
</span>
            <?php endif; ?>
            </div></td>
          <td align="center"><input type="checkbox" name="submenu_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" <?php if ($this->_tpl_vars['i']['is_submenu'] == 'yes'): ?>checked<?php endif; ?> /></td>
          <td align="center" class="del"><a href="#" onclick="return mm.remove_menu_item_row(<?php echo $this->_tpl_vars['i']['list_order']; ?>
)"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['word_remove'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</a></td>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
      </tbody></table>

      <script type="text/javascript">
      mm.num_rows = <?php echo count($this->_tpl_vars['menu']['menu_items']); ?>
;
      </script>

      <p>
        <a href="#" onclick="return mm.add_menu_item_row()"><?php echo $this->_tpl_vars['LANG']['phrase_add_row']; ?>
</a>
      </p>

      <div id="menu_options" style="display:none">
        <?php echo smarty_function_pages_dropdown(array('menu_type' => 'admin','name_id' => "page_identifier_%%X%%",'is_building_menu' => true), $this);?>

      </div>

      <div id="form_dropdown_template" style="display:none">
        <?php echo smarty_function_forms_dropdown(array('name_id' => "custom_options_%%X%%",'style' => "width:155px"), $this);?>

      </div>

      <div id="client_dropdown_template" style="display:none">
        <?php echo smarty_function_clients_dropdown(array('name_id' => "custom_options_%%X%%",'style' => "width:150px"), $this);?>

      </div>

      <p>
        <input type="submit" name="update_admin_menu" value="<?php echo $this->_tpl_vars['LANG']['word_update']; ?>
" />
      </p>
    </form>
