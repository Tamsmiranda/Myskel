<!--Quick Actions-->
<div id="quick_actions">
	<a href="<?php echo "<?php echo \$this->Html->url(array('action' => 'index'));?>";?>" class="button_big"><span class="iconsweet">}</span><?php echo "<?php echo __('List " . $singularHumanName . "', true); ?>";?></a>
</div>
<!--Notification Message-->
<?php echo "<?php echo \$this->Session->flash(); ?>"; ?>
<div class="one_wrap">
	<div class="widget">
		<div class="widget_title"><span class="iconsweet">r</span><h5><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h5></div>
		<div class="widget_body">
			<!--Form fields-->
			<?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
			<ul class="form_fields_container">
				<?php
					//echo "\t<?php\n";
					foreach ($fields as $field) {
						if (strpos($action, 'add') !== false && $field == $primaryKey) {
							continue;
						} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
							echo "\t\t<li>\n";
							echo "\t\t\t<label><?php echo __('" . Inflector::humanize($field) . "'); ?></label>\n";
							echo "<div class=\"form_input\"><?php \t\techo \$this->Form->input('{$field}',array('div'=>false, 'label'=> false)); ?></div>\n";
							echo "\t\t</li>\n";
						}
					}
					if (!empty($associations['hasAndBelongsToMany'])) {
						foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
							echo "\t\t<li>\n";
							echo "\t\t\t<label><?php echo __('" . Inflector::humanize($assocName) . "'); ?></label>\n";
							echo "<div class=\"form_input\"><?php \t\techo \$this->Form->input('{$assocName}',array('div'=>false, 'label'=> false)); ?></div>\n";
							echo "\t\t</li>\n";
							/*echo "<?php \t\techo \$this->Form->input('{$assocName}'); ?>\n";*/
						}
					}
					/*echo "\t?>\n";*/
				?>
				<!--
				<li><label>Text Input</label> <div class="form_input"><input type="text" name=""></div></li>
				<li><label>Password Input</label> <div class="form_input"><input type="password" name=""></div></li>
				<li><label>Readonly Input</label> <div class="form_input"><input type="text" readonly="readonly" value="Read only"></div></li>
				<li><label>Disabled Input</label> <div class="form_input"><input type="text" disabled="disabled" value="Disabled"></div></li>
				<li><label>Input with Value</label> <div class="form_input"><input type="text" value="This is the value"></div></li>
				<li><label>Input with Tooltip</label> <div class="form_input"><input type="text" value="" class="tip_east" original-title="Tip"></div></li>
				<li><label>Input Processing</label> <div class="form_input"><input type="text" value="" class="in_processing"></div></li>
				<li><label>Input Submitted</label> <div class="form_input"><input type="text" value="" class="in_submitted"></div></li>
				<li><label>Input Warning</label> <div class="form_input"><input type="text" value="" class="in_warning"></div></li>
				<li><label>Input Error</label> <div class="form_input"><input type="text" value="" class="in_error"></div></li>
				<li><label>Regular Textarea</label> <div class="form_input"><textarea rows="6" cols="" name=""></textarea></div></li>
				<li><label>Autogrowing Textarea</label> <div class="form_input"><textarea rows="6" cols="20" name="growingTextarea" id="txtInput" class="auto" style="width: 6px; height: auto; overflow: hidden;"></textarea></div></li>                    
				-->
				<!--<li><div class="form_input"><button type="submit" class="button_small bluishBtn fl_right"><span class="iconsweet">=</span><?php echo "<?php echo __('Save');?>";?></button></div></li>-->
			</ul>
			<div class="action_bar">
				<button type="submit" class="button_small bluishBtn fl_right"><span class="iconsweet">=</span><?php echo "<?php echo __('Save');?>";?></button>
				<a class="button_small redishBtn fl_right" href="javascript:history.back()"><span class="iconsweet">l</span><?php echo "<?php echo __('Cancel');?>";?></a>
				<br class="clear" />
				<?php /*
				<a class="button_small whitishBtn" href="#"><span class="iconsweet">l</span>Export</a>
				<a class="button_small whitishBtn" href="#"><span class="iconsweet">v</span>Print</a>
				*/?>
			</div>
			<?php echo "<?php echo \$this->Form->end(); ?>\n"; ?>
		</div>
	</div>
</div>

<?php /*
<div class="<?php echo $pluralVar; ?> form">
<?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
	<fieldset>
		<legend><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></legend>
<?php
		echo "\t<?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\techo \$this->Form->input('{$field}');\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\techo \$this->Form->input('{$assocName}');\n";
			}
		}
		echo "\t?>\n";
?>
	</fieldset>
<?php
	echo "<?php echo \$this->Form->end(__('Submit')); ?>\n";
?>
</div>
<div class="actions">
	<h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
	<ul>

<?php if (strpos($action, 'add') === false): ?>
		<li><?php echo "<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), null, __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>"; ?></li>
<?php endif; ?>
		<li><?php echo "<?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?>"; ?></li>
<?php
		$done = array();
		foreach ($associations as $type => $data) {
			foreach ($data as $alias => $details) {
				if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
					echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
					echo "\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
					$done[] = $details['controller'];
				}
			}
		}
?>
	</ul>
</div>
*/?>