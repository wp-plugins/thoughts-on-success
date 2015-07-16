<?php
/*
Plugin Name: Thoughts on Success
Description: 10 Great Thoughts on Success. When activated you will randomly see one of them in the upper right of your admin screen on every page.
Author: Stanislav Levitskiy
Version: 1.0
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
		
function sta_lev_echo_quote() {
	$quotes = array(
		array("Winston Churchill", "Success is going from failure to failure without losing enthusiasm."),
		array("Deepak Chopra", "Success in life could be defined as the continued expansion of happiness and the progressive realization of worthy goals."),
		array("Jim Rohn", "Success is doing ordinary things extraordinarily well."),
		array("Anita Roddick", "I want to define success by redefining it. For me it isn’t that solely mythical definition – glamour, allure, power of wealth, and the privilege from care. Any definition of success should be personal because it’s so transitory. It’s about shaping my own destiny."),
		array("Richard Branson", "It is the satisfaction of doing it for yourself and motivating others to work with you in bringing it about. It is about the fun, innovation, creativity with the rewards being far greater than purely financial."),
		array("Orison Swett Marden", "When a man feels throbbing within him the power to do what he undertakes as well as it can possibly be done, this is happiness, this is success."),
		array("Zig Ziglar", "Success means doing the best we can with what we have. Success is the doing, not the getting; in the trying, not the triumph. Success is a personal standard, reaching for the highest that is in us, becoming all that we can be."),
		array("George Sheehan", "Success means having the courage, the determination, and the will to become the person you believe you were meant to be."),
		array("Ralph Waldo Emerson", "Success:  To laugh often and much, to win the respect of intelligent people and the affection of children, to earn the appreciation of honest critics and endure the betrayal of false friends, to appreciate beauty, to find the best in others, to leave the world a bit better, whether by a healthy child, a garden patch, or a redeemed social condition; to know even one life has breathed easier because you have lived.  This is to have succeeded!"),
		array("Wilfred Peterson", "Success is focusing the full power of all you are on what you have a burning desire to achieve."),
	);
		
	$a_rand = array_rand($quotes);
	$autor = $quotes[$a_rand][0];
	$quote = wptexturize('"'.$quotes[$a_rand][1].'"');
		
	echo "<div id='tos_main'>".$quote."<br /><span id='tos_autor'>".$autor."</span></div>";
}

add_action( 'admin_notices', 'sta_lev_echo_quote' );	

function sta_lev_quote_css() {
	echo "
	<style type='text/css'>
	#tos_main {
		width: 85%;
		padding-top: 15px;
		text-align: left;
		font-size: 20px;
		font-weight: bold;
		line-height: 1.5;		
	}
	#tos_autor {	
		font-size: 16px;
		font-weight: normal;	
	}
	</style>
	";
}

add_action( 'admin_head', 'sta_lev_quote_css' );