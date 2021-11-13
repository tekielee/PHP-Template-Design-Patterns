<?php
class Game {
	function __construct() {}
	
	public function initialize(): void {}
	
	public function startPlay(): void {}
	
	public function endPlay(): void {}
	
	public function play(): void {
		$this->initialize();
		$this->startPlay();
		$this->endPlay();
	}
}

class Cricket extends Game {
	function __construct() {
		parent::__construct();
	}
	
	public function endPlay(): void {
		echo 'Cricket Game Finished!<br/>';
	}
	
	public function initialize(): void {
		echo 'Cricket Game Initialized!<br/>';
	}
	
	public function startPlay(): void {
		echo 'Cricket Game Started. Enjoy the game!<br/>';
	}
	
	public function play(): void {
		parent::play();
	}
}

class Football extends Game {
	function __construct(): void {
		parent::__construct();
	}
	
	public function endPlay(): void {
		echo 'Football Game Finished!<br/>';
	}
	
	public function initialize(): void {
		echo 'Football Game Initialized!<br/>';
	}
	
	public function startPlay(): void {
		echo 'Football Game Started. Enjoy the game!<br/>';
	}
	
	public function play(): void {
		parent::play();
	}
}

$cricket_game = new Cricket();
$cricket_game->play();
echo '<br/>';
$football_game = new Football();
$football_game->play();
?>