<ul class="sidebar-menu">'
 <?php foreach ($menu as $itm): ?>
	<li class="treeview"><a href="<?= $itm->link ?>" <i class="<?= $itm->Icon ?>"></i><span>		<?=$itm->name ?></span>
	</a></li>
 <?php endforeach; ?>
 
</ul>