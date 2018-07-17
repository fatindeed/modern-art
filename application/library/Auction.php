<?php
/**
 * Auction
 * 
 * @package	modern-art
 * @author	James Zhu
 * @version	1.0
 */
class Auction {

	private $type;

	private $seller;

	private $bids;

	// open ascending price auction
	const AUCTION_TYPE_OPEN = 1; // 公开竞价
	const AUCTION_TYPE_ROUND = 2; // 优先承购式竞价
	// first-price sealed-bid auction
	const AUCTION_TYPE_SEALED = 3; // 暗标
	// Buyout price
	const AUCTION_TYPE_FIXED = 4; // 一口价
	// Combinatorial auction
	const AUCTION_TYPE_DOUBLE = 5; // 联合拍卖

	// 出牌
	public function play() {
		// code
	}
}
