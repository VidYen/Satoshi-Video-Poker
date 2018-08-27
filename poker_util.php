<?php 
/*
utility functions, mostly to set javascript variables based on the settings

*/
//relies on session! don't forget tto do session_start(); in the main page! 

include_once('cm_settings.php');


function js_settings_out()
{
	global $maximum_bet; //so, between 1 and $maximum_bet
	global $minimum_initial_bonus; //not exposed for now
	global $maximum_initial_bonus; //not exposed for now
	global $bonus_wins_before_withdraw;
	global $maximum_deposit;
	global $minimum_deposit;
	global $balance_page_leave_confirm;
	$rand_bg_id = rand(1,9);
	echo("
	<script>
	var maximum_bet = $maximum_bet;
	var bonus_wins_before_withdraw = $bonus_wins_before_withdraw;
	var maximum_deposit = $maximum_deposit;
	var minimum_deposit = $minimum_deposit;
	var balance_page_leave_confirm = $balance_page_leave_confirm;
	var rand_bg_id = $rand_bg_id;
	</script>
	");
}//js_settings_out



