<?php
	$WHERE = '';
	if (RANKING_HIDE_BOTS) {
		$WHERE .= ' AND isbot = 0';
	}
	if (RANKING_HIDE_HIDDEN_PLAYERS) {
		$WHERE .= ' AND hidden = 0';
	}

	$query = "SELECT id, rank, country, name, score, time, (score/(time/60)) as spm, (kills/deaths) as kdr FROM player WHERE 1=1 $WHERE ORDER BY score DESC LIMIT ". LEADERBOARD_COUNT .";";
?>
