<?php
/**
 * Game
 * 
 * @package	modern-art
 * @author	James Zhu
 * @version	1.0
 */
class Game {

	// 回合数
	private $round;

	// 玩家
	private $player_index;

	// 竞价类型
	private $auction_type;
	const AUCTION_TYPE_OPEN = 1; // 公开竞价
	const AUCTION_TYPE_ROUND = 2; // 优先承购式竞价
	const AUCTION_TYPE_SEALED = 3; // 暗标
	const AUCTION_TYPE_FIXED = 4; // 一口价
	const AUCTION_TYPE_DOUBLE = 5; // 联合拍卖

	// 出牌
	public function play() {
		// code
	}
}
