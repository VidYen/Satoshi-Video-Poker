<?php

/*settings for Cryptoo.me transfers */

// api key, aka faucet key. Get it at cryptoo.me
// looks like '8f8759603582392fe13bb09df70d09332e79a4b5'
// go to https://cryptoo.me, register, create Faucet (app), and use it here.
//KEEP SECRET !!!
$api_key = ''; //MUST BE CONFIGURED!!!


/* game settings */

//maximum bet (or they can win more than we can pay), 
$maximum_bet = 100; //so, between 1 and $maximum_bet

//new players will be awarded with this amount of satoshi
$minimum_initial_bonus = 3; 
$maximum_initial_bonus = 11;

//if there was no deposits (playing on bonus), player can withdraw after number of wins
$bonus_wins_before_withdraw = 3; //should not be bigger than 9999

//maximum deposit to accept (so will be no idiots depositing a million and losing in when session expires)
$maximum_deposit = 10000; //let it be

//minimum deposit to accept, so noone deposits 1 to grab the bonus
$minimum_deposit = 5; //let it be

//minimum balance causing page leave confirmation
$balance_page_leave_confirm = 10;
 