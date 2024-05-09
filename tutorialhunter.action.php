<?php
/*
 * THIS FILE HAS BEEN AUTOMATICALLY GENERATED. ANY CHANGES MADE DIRECTLY MAY BE OVERWRITTEN.
 *------
 * BGA framework: Gregory Isabelli & Emmanuel Colin & BoardGameArena
 * TutorialHunter implementation : © Hunter Durbin hunterdurbin000@gmail.com
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 */

class action_tutorialhunter extends APP_GameAction
{
	/** @var tutorialhunter $game */
	protected $game; // Enforces functions exist on Table class

	// Constructor: please do not modify
	public function __default()
	{
		if (self::isArg('notifwindow')) {
			$this->view = "common_notifwindow";
			$this->viewArgs['table'] = self::getArg("table", AT_posint, true);
		} else {
			$this->view = "tutorialhunter_tutorialhunter";
			self::trace("Complete reinitialization of board game");
		}
	}

	public function playCard()
	{
		self::setAjaxMode();

		/** @var int $card_id */
		$card_id = self::getArg('card_id', AT_int, true);

		$this->game->playCard( $card_id );
		self::ajaxResponse();
	}

	public function pass()
	{
		self::setAjaxMode();

		$this->game->pass(  );
		self::ajaxResponse();
	}
}