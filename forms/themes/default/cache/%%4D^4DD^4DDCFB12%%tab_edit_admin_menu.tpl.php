<?php /* Smarty version 2.6.18, created on 2016-05-27 17:24:59
         compiled from /var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/settings/tab_edit_admin_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/settings/tab_edit_admin_menu.tpl', 5, false),array('modifier', 'escape', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/settings/tab_edit_admin_menu.tpl', 54, false),array('modifier', 'count', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/settings/tab_edit_admin_menu.tpl', 90, false),array('function', 'ft_include', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/settings/tab_edit_admin_menu.tpl', 7, false),array('function', 'template_hook', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/settings/tab_edit_admin_menu.tpl', 13, false),array('function', 'pages_dropdown', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/settings/tab_edit_admin_menu.tpl', 50, false),array('function', 'forms_dropdown', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/settings/tab_edit_admin_menu.tpl', 64, false),array('function', 'clients_dropdown', '/var/www/vhosts/excelsiorschool.com/httpdocs/forms/themes/default/admin/settings/tab_edit_admin_menu.tpl', 67, false),)), $this); ?>
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

      <div class="sortable groupable edit_menu" id="<?php echo $this->_tpl_vars['sortable_id']; ?>
">
        <ul class="header_row">
          <li class="col1"><?php echo $this->_tpl_vars['LANG']['word_order']; ?>
</li>
          <li class="col2"><?php echo $this->_tpl_vars['LANG']['word_page']; ?>
</li>
          <li class="col3"><?php echo $this->_tpl_vars['LANG']['phrase_display_text']; ?>
</li>
          <li class="col4"><?php echo $this->_tpl_vars['LANG']['word_options']; ?>
</li>
          <li class="col5"><?php echo $this->_tpl_vars['LANG']['word_submenu']; ?>
</li>
          <li class="col6 colN del"></li>
        </ul>
        <div class="clear"></div>
        <ul class="rows check_areas" id="rows">
        <?php $this->assign('previous_item', ""); ?>
        <?php $_from = $this->_tpl_vars['menu']['menu_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['admin_menu_items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['admin_menu_items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
        $this->_foreach['admin_menu_items']['iteration']++;
?>
          <?php if ($this->_tpl_vars['i']['is_new_sort_group'] == 'yes'): ?>
            <?php if ($this->_tpl_vars['previous_item'] != ""): ?>
              </div>
              <div class="clear"></div>
            </li>
            <?php endif; ?>
            <li class="sortable_row">
            <?php $this->assign('next_item_is_new_sort_group', $this->_tpl_vars['menu']['menu_items'][$this->_foreach['admin_menu_items']['iteration']]['is_new_sort_group']); ?>
            <div class="row_content<?php if ($this->_tpl_vars['next_item_is_new_sort_group'] == 'no'): ?> grouped_row<?php endif; ?>">
          <?php endif; ?>

          <?php $this->assign('previous_item', $this->_tpl_vars['i']); ?>

            <div class="row_group<?php if (($this->_foreach['admin_menu_items']['iteration'] == $this->_foreach['admin_menu_items']['total'])): ?> rowN<?php endif; ?>">
              <input type="hidden" class="sr_order" value="<?php echo $this->_tpl_vars['i']['list_order']; ?>
" />
              <ul>
                <li class="col1 sort_col"><?php echo $this->_tpl_vars['i']['list_order']; ?>
</li>
                <li class="col2">
                  <?php echo smarty_function_pages_dropdown(array('menu_type' => 'admin','default' => $this->_tpl_vars['i']['page_identifier'],'name_id' => "page_identifier_".($this->_tpl_vars['i']['list_order']),'onchange' => "mm.change_page(".($this->_tpl_vars['i']['list_order']).", this.value)",'onkeyup' => "mm.change_page(".($this->_tpl_vars['i']['list_order']).", this.value)",'is_building_menu' => true,'class' => 'page_type'), $this);?>

                </li>
                <li class="col3"><input type="text" name="display_text_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" id="display_text_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['i']['display_text'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></li>
                <li class="col4" id="row_<?php echo $this->_tpl_vars['i']['list_order']; ?>
_options">
                  <?php if ($this->_tpl_vars['i']['page_identifier'] == 'custom_url'): ?>
                    URL:&nbsp;<input type="text" name="custom_options_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" id="custom_options_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['i']['custom_options'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="width:155px" />
                  <?php elseif ($this->_tpl_vars['i']['page_identifier'] == 'form_submissions' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_main' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_fields' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_views' || $this->_tpl_vars['i']['page_identifier'] == 'edit_form_emails'): ?>
                    <?php echo smarty_function_forms_dropdown(array('name_id' => "custom_options_".($this->_tpl_vars['i']['list_order']),'default' => $this->_tpl_vars['i']['custom_options'],'include_blank_option' => true,'blank_option_is_optgroup' => true), $this);?>

                  <?php elseif ($this->_tpl_vars['i']['page_identifier'] == 'edit_client'): ?>
                    <?php echo smarty_function_clients_dropdown(array('name_id' => "custom_options_".($this->_tpl_vars['i']['list_order']),'default' => $this->_tpl_vars['i']['custom_options'],'include_blank_option' => true,'blank_option_is_optgroup' => true), $this);?>

                  <?php else: ?>
                    <span class="medium_grey"><?php echo $this->_tpl_vars['LANG']['word_na']; ?>
</span>
                  <?php endif; ?>
                </li>
                <li class="col5 check_area"><input type="checkbox" name="submenu_<?php echo $this->_tpl_vars['i']['list_order']; ?>
" <?php if ($this->_tpl_vars['i']['is_submenu'] == 'yes'): ?>checked="checked"<?php endif; ?> /></li>
                <li class="col6 colN del"></li>
              </ul>
              <div class="clear"></div>
            </div>

          <?php if (($this->_foreach['admin_menu_items']['iteration'] == $this->_foreach['admin_menu_items']['total'])): ?>
            </div>
            <div class="clear"></div>
          </li>
          <?php endif; ?>

        <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>

      <script>
      mm.num_rows = <?php echo count($this->_tpl_vars['menu']['menu_items']); ?>
;
      </script>

      <p>
        <a href="#" onclick="return mm.add_menu_item_row()"><?php echo $this->_tpl_vars['LANG']['phrase_add_row']; ?>
</a>
      </p>

      <div id="menu_options" class="hidden">
        <?php echo smarty_function_pages_dropdown(array('menu_type' => 'admin','name_id' => "page_identifier_%%X%%",'is_building_menu' => true,'class' => 'page_type'), $this);?>

      </div>

      <div id="form_dropdown_template" class="hidden">
        <?php echo smarty_function_forms_dropdown(array('name_id' => "custom_options_%%X%%",'include_blank_option' => true,'blank_option_is_optgroup' => true), $this);?>

      </div>

      <div id="client_dropdown_template" class="hidden">
        <?php echo smarty_function_clients_dropdown(array('name_id' => "custom_options_%%X%%",'include_blank_option' => true,'blank_option_is_optgroup' => true), $this);?>

      </div>

      <p>
        <input type="submit" name="update_admin_menu" value="<?php echo $this->_tpl_vars['LANG']['word_update']; ?>
" />
      </p>
    </form>