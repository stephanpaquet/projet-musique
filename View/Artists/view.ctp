<?php if (isset($artist['error'])): ?>
	<h1>Error</h1>
	<h2><?= $artist['message']?> (<?= $artist['error']?>)</h2>
<?php else: ?>
	<h2><a href="<?= $artist['artist']['url'] ?>"><?= $artist['artist']['name'] ?></a></h2>

	<?php if (isset($artist['artist']['bandmembers'])): ?>
		<h3>Members</h3>
		<div class="bandmembers-container">
			<ul>
				<?php foreach ($artist['artist']['bandmembers']['member'] as $member): ?>
					<li><?= $member['name'] ?> (<?= $member['yearfrom'] ?><?php if (isset($member['yearto'])): ?> - <?= $member['yearto'] ?><?php endif; ?>)</li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
<?php endif; ?>

<?php
debug($artist);
?>