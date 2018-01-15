<?php
class Home extends Controller {
  public function index() {
    $membres = DB::update( 'UPDATE membre SET mail = ?', ['infoprog@gmail.com'] );

    $this->view( 'home/index', [ 'membres' => $membres ] );
  }
}
