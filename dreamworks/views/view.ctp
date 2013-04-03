<!--Quick Actions-->
<div id="quick_actions">
	<a href="<?php echo "<?php echo \$this->Html->url(array('action' => 'add'));?>";?>" class="button_big"><span class="iconsweet">+</span><?php echo "<?php echo __('New " . $singularHumanName . "', true); ?>";?></a>
	<a href="<?php echo "<?php echo \$this->Html->url(array('action' => 'index'));?>";?>" class="button_big"><span class="iconsweet">}</span><?php echo "<?php echo __('List " . $singularHumanName . "', true); ?>";?></a>
</div>
<!--Notification Message-->
<?php echo "<?php echo \$this->Session->flash(); ?>"; ?>
<div class="one_wrap">
	<div class="widget">
		<div class="widget_title"><span class="iconsweet">r</span><h5><?php echo "<?php  echo __('{$singularHumanName}'); ?>"; ?></h5></div>
		<div class="widget_body">
			<!--Form fields-->
			<ul class="form_fields_container">
				<?php
					foreach ($fields as $field) {
						$isKey = false;
						if (!empty($associations['belongsTo'])) {
							foreach ($associations['belongsTo'] as $alias => $details) {
								if ($field === $details['foreignKey']) {
									$isKey = true;
									echo "\t\t<li>\n";
									echo "\t\t\t<label><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></label>";
									echo "\t\t\t<div class=\"form_input\"><?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</div>\n";
									echo "\t\t</li>\n";
									break;
								}
							}
						}
						if ($isKey !== true) {
							echo "\t\t<li>\n";
							echo "\t\t\t<label><?php echo __('" . Inflector::humanize($field) . "'); ?></label>\n";
							echo "\t\t\t<div class=\"form_input\"><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</div>\n";
							echo "\t\t</li>\n";
						}
					}
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
			</ul>
		</div>
	</div>
</div>

<?php /*
<div class="<?php echo $pluralVar; ?> view">
<h2><?php echo "<?php  echo __('{$singularHumanName}'); ?>"; ?></h2>
	<dl>
<?php
foreach ($fields as $field) {
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $alias => $details) {
			if ($field === $details['foreignKey']) {
				$isKey = true;
				echo "\t\t<dt><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></dt>\n";
				echo "\t\t<dd>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
				break;
			}
		}
	}
	if ($isKey !== true) {
		echo "\t\t<dt><?php echo __('" . Inflector::humanize($field) . "'); ?></dt>\n";
		echo "\t\t<dd>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
	}
}
?>
	</dl>
</div>
<div class="actions">
	<h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
	<ul>
<?php
	echo "\t\t<li><?php echo \$this->Html->link(__('Edit " . $singularHumanName ."'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
	echo "\t\t<li><?php echo \$this->Form->postLink(__('Delete " . $singularHumanName . "'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
	echo "\t\t<li><?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?> </li>\n";
	echo "\t\t<li><?php echo \$this->Html->link(__('New " . $singularHumanName . "'), array('action' => 'add')); ?> </li>\n";

	$done = array();
	foreach ($associations as $type => $data) {
		foreach ($data as $alias => $details) {
			if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
				echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
				echo "\t\t<li><?php echo \$this->Html->link(__('New " .  Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
				$done[] = $details['controller'];
			}
		}
	}
?>
	</ul>
</div>
<?php
if (!empty($associations['hasOne'])) :
	foreach ($associations['hasOne'] as $alias => $details): ?>
	<div class="related">
		<h3><?php echo "<?php echo __('Related " . Inflector::humanize($details['controller']) . "'); ?>"; ?></h3>
	<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
		<dl>
	<?php
			foreach ($details['fields'] as $field) {
				echo "\t\t<dt><?php echo __('" . Inflector::humanize($field) . "'); ?></dt>\n";
				echo "\t\t<dd>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}']; ?>\n&nbsp;</dd>\n";
			}
	?>
		</dl>
	<?php echo "<?php endif; ?>\n"; ?>
		<div class="actions">
			<ul>
				<li><?php echo "<?php echo \$this->Html->link(__('Edit " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></li>\n"; ?>
			</ul>
		</div>
	</div>
	<?php
	endforeach;
endif;
if (empty($associations['hasMany'])) {
	$associations['hasMany'] = array();
}
if (empty($associations['hasAndBelongsToMany'])) {
	$associations['hasAndBelongsToMany'] = array();
}
$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
$i = 0;
foreach ($relations as $alias => $details):
	$otherSingularVar = Inflector::variable($alias);
	$otherPluralHumanName = Inflector::humanize($details['controller']);
	?>
<div class="related">
	<h3><?php echo "<?php echo __('Related " . $otherPluralHumanName . "'); ?>"; ?></h3>
	<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
<?php
			foreach ($details['fields'] as $field) {
				echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
			}
?>
		<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
	</tr>
<?php
echo "\t<?php
		\$i = 0;
		foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}): ?>\n";
		echo "\t\t<tr>\n";
			foreach ($details['fields'] as $field) {
				echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}']; ?></td>\n";
			}

			echo "\t\t\t<td class=\"actions\">\n";
			echo "\t\t\t\t<?php echo \$this->Html->link(__('View'), array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
			echo "\t\t\t\t<?php echo \$this->Html->link(__('Edit'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
			echo "\t\t\t\t<?php echo \$this->Form->postLink(__('Delete'), array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), null, __('Are you sure you want to delete # %s?', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
			echo "\t\t\t</td>\n";
		echo "\t\t</tr>\n";

echo "\t<?php endforeach; ?>\n";
?>
	</table>
<?php echo "<?php endif; ?>\n\n"; ?>
	<div class="actions">
		<ul>
			<li><?php echo "<?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?>"; ?> </li>
		</ul>
	</div>
</div>
<?php endforeach; ?>
*/?>