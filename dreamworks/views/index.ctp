<!--Quick Actions-->
<div id="quick_actions">
	<a href="<?php echo "<?php echo \$this->Html->url(array('action' => 'add'));?>";?>" class="button_big"><span class="iconsweet">+</span><?php echo "<?php echo __('New " . $singularHumanName . "', true); ?>";?></a>
</div>
<!--Notification Message-->
<?php echo "<?php echo \$this->Session->flash(); ?>"; ?>
<div class="one_wrap <?php echo $pluralVar; ?>">
	<div class="widget">
		<div class="widget_title"><span class="iconsweet">f</span>
			<h5><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h5>
		</div>
		<div class="widget_body">
			<!--Activity Table-->
			<table width="100%" cellspacing="0" cellpadding="8" border="0" class="activity_datatable">
				<tbody>
				<tr>
				<?php  foreach ($fields as $field): ?>
					<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
				<?php endforeach; ?>
				<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
				</tr>

				<?php
					echo "<?php
					foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
					echo "\t<tr>\n";
						foreach ($fields as $field) {
							$isKey = false;
							if (!empty($associations['belongsTo'])) {
								foreach ($associations['belongsTo'] as $alias => $details) {
									if ($field === $details['foreignKey']) {
										$isKey = true;
										echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
										break;
									}
								}
							}
							if ($isKey !== true) {
								echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
							}
						}
						echo "\t\t<td class=\"data_actions iconsweet\">\n";
						echo "<span class=\"data_actions iconsweet\">";
						/*echo "\t\t\t<?php echo \$this->Html->link(__('View'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'],array(''))); ?>\n";*/
						echo "\t\t\t<?php echo \$this->Html->link('C', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('original-tile'=>__('Edit',true), 'class'=>'tip_north')); ?>\n";
						echo "\t\t\t<?php echo \$this->Form->postLink('X', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('original-tile'=>__('Delete', true), 'class'=>'tip_north')); ?>\n";
						echo "</span>";
						echo "\t\t</td>\n";
					echo "\t</tr>\n";

					echo "<?php endforeach; ?>\n";
					?>
			</tbody>
			</table>
			<?php /*echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>"; */?>
		</div>
	</div>
	<div class="widget">
		<div class="widget_title"><span class="iconsweet">j</span><h5>Pagination</h5></div>
		<div class="widget_body">
			<div class="content_pad text_center">
				<ul class="pagination">
					<?php
		//echo "<?php\n";
		//echo "\t\techo \$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));\n";
		//echo "\t\techo \$this->Paginator->numbers(array('separator' => ''));\n";
		//echo "\t\techo \$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));\n";
		//echo "\t?>
					<li class="first"><?php echo "<?php \techo \$this->Paginator->first('<<', array(), null, array('class' => ''));?>"; ?></li>
					<?php echo "<?php if(\$this->Paginator->hasPrev()): ?>" ?>
					<li class="prev"><?php echo "<?php \techo \$this->Paginator->prev('<', array(), null, array('class' => ''));?>"; ?></li>
					<?php echo "<?php endif; ?>"; ?>
					<!--<li><a href="#">1</a></li>--><!--
					<li><a href="#" class="active">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li>...</li>
					<li><a href="#">30</a></li>-->
					<?php echo "<?php\t\techo \$this->Paginator->numbers(array('separator'=>'', 'tag' => 'li'));?>"; ?>
					<?php echo "<?php if(\$this->Paginator->hasNext()): ?>" ?>
					<li class="next"><?php echo "<?php \techo \$this->Paginator->next('>', array(), null, array('class' => ''));?>"; ?></li>
					<?php echo "<?php endif; ?>"; ?>
					<li class="last"><?php echo "<?php \techo \$this->Paginator->last('>>', array(), null, array('class' => ''));?>"; ?></li>
					<p><?php echo "<?php echo \$this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total.')));?>"; ?></p>
			   </ul>
			</div>
		</div>
	</div>
</div>

	<!--
	<?php
	echo "<?php
	foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t<?php echo \$this->Html->link(__('View'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
	 	echo "\t\t\t<?php echo \$this->Html->link(__('Edit'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
	 	echo "\t\t\t<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</table>
	<p>
	<?php echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>"; ?>
	</p>

	<div class="paging">
	<?php
		echo "<?php\n";
		echo "\t\techo \$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));\n";
		echo "\t\techo \$this->Paginator->numbers(array('separator' => ''));\n";
		echo "\t\techo \$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));\n";
		echo "\t?>\n";
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
	<ul>
		<li><?php echo "<?php echo \$this->Html->link(__('New " . $singularHumanName . "'), array('action' => 'add')); ?>"; ?></li>
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
-->