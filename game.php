<?php 

	class Game{
		public $setRounds = 3;
		public $winner = '';
		
		private function P($print){
			echo "<pre>";
			print_r($print);
		}
		
		public function play(){
			$data['rock'] = 0;
			$data['paper'] = 1;
			$data['scissors'] = 2;
			
			$setRounds = $this->setRounds;
			$rrr = [];
			for($i=0;$i<$setRounds;$i++){
				$result = '';
				$value = array_rand($data, 2);
				while($result == ''){
					if($value[0] == 'rock' AND $value[1] == 'rock'){
						continue;
					}elseif($value[0] == 'rock' AND $value[1] == 'paper'){
						$result = 'Round - '.$i.' The first player get '.$value[0].' and the second player get '.$value[1].' and the winner is <b>second player</b>';
					}elseif($value[0] == 'rock' AND $value[1] == 'scissors'){
						$result = 'Round - '.$i.' The first player get '.$value[0].' and the second player get '.$value[1].' and the winner is <b>first player</b>';
					}elseif($value[0] == 'scissors' AND $value[1] == 'rock'){
						$result = 'Round - '.$i.' The first player get '.$value[0].' and the second player get '.$value[1].' and the winner is <b>second player</b>';
					}elseif($value[0] == 'paper' AND $value[1] == 'rock'){
						$result = 'Round - '.$i.' The first player get '.$value[0].' and the second player get '.$value[1].' and the winner is <b>first player</b>';
					}elseif($value[0] == 'paper' AND $value[1] == 'paper'){
						continue;
					}elseif($value[0] == 'scissors' AND $value[1] == 'scissors'){
						continue;
					}elseif($value[0] == 'scissors' AND $value[1] == 'paper'){
						$result = 'Round - '.$i.' The first player get '.$value[0].' and the second player get '.$value[1].' and the winner is <b>first player</b>';
					}elseif($value[1] == 'scissors' AND $value[0] == 'paper'){
						$result = 'Round - '.$i.' The first player get '.$value[0].' and the second player get '.$value[1].' and the winner is <b>second player</b>';
					}
				}
				$rrr[] = $result;
			}
			$end_result = $this->winner = $rrr;
		}
		
		public function playRounds($setRounds){
			$this->setRounds = $setRounds;
		}
		
		public function getWinner(){
			P($this->winner);
		}
	}
	
	$game = new Game();
	$game->playRounds(3);
	$game->play();
	$game->getWinner();