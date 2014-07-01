<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('../vendors/bootstrap/bootstrap-3.2.0/css/bootstrap.min');
		echo $this->Html->css('../vendors/bootstrap/bootstrap-3.2.0/css/bootstrap-theme.min');
		echo $this->Html->css('reset');

		echo $this->Html->script('../vendors/bootstrap/bootstrap-3.2.0/js/bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-xs-12">
				<h1><?php echo $this->Html->link(__d('project_music', 'Exploration sur les inventaires de musiques'), '/');?></h1>
			</div>
		</div>

		<div class="row" id="content">
			<div class="col-xs-12">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>

		<footer class="row">
			<div class="col-xs-12">
				<a href="http://cakephp.org/changelogs/<?php echo Configure::version(); ?>"><?php echo __d('project_music', 'CakePHP %s.', Configure::version()); ?></a>
			</div>
		</footer>
	</div>

	<?php echo $this->element('sql_dump'); ?>

	<?= $this->fetch('script') ?>
</body>
</html>
