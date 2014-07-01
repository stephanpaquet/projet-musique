<?php
class ArtistsController extends AppController {
	public $components = array('Lastfm');

	public function view() {

		//debug($this->request->params);
		$params = array(
			'artist' => (isset($this->request->params['pass'][0])) ? $this->request->params['pass'][0] : 'Rush',
			'format' => 'Json',

		);

		$this->set('artist', $this->Lastfm->get('artist.getinfo', $params));
	}
}
