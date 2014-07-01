<h2>Home</h2>

<p>
Ce projet est un petit laboration permettant d'explorer ce que nous pouvons faire des différentes sources d'inventaire de musique comme last.fm, MusicBrainz, .... 
</p>

<p>
	<ul>
		<li><label>MusicBrainz</label> MusicBrainz is a community-maintained open source encyclopedia of music information. <a href="http://musicbrainz.org/">musicbrainz.org</a></li>
		<li><label>Last.fm</label> Last.fm is a music recommendation service. <a href="http://www.last.fm/home">www.last.fm/home</a></li>

	</ul>
</p>

<p>Examples
	<ul>
		<li><?php echo $this->Html->link('Rush', array('controller' => 'artists', 'action' => 'view', 'rush'));?></li>
		<li><?php echo $this->Html->link('Local Natives', array('controller' => 'artists', 'action' => 'view', 'Local Natives'));?></li>
		<li><?php echo $this->Html->link('Marillion', array('controller' => 'artists', 'action' => 'view', 'Marillion'));?></li>

	</ul>
</p>


