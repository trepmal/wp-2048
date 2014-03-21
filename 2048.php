<?php
/*
 * Plugin Name: 2048
 * Plugin URI: https://github.com/trepmal/wp-2048/
 * Description:
 * Version: 0.2
 * Author: Kailey Lampert
 * Author URI: kaileylampert.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * TextDomain: 2048
 * DomainPath:
 * Network:
 */


add_action( 'wp_footer', '_2048_wp_footer' );
function _2048_wp_footer() {
	?>

    <div class="game-container-wrapper">
    <div class="game-container-wrapper-2">

      <div class="scores-container">
        <div class="score-container">0</div>
        <div class="best-container">0</div>
      </div>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Keep going</a>
          <a class="retry-button">Try again</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
    </div>
    <p class="credit">
    Created by <a href="http://gabrielecirulli.com" target="_blank">Gabriele Cirulli.</a> Based on <a href="https://itunes.apple.com/us/app/1024!/id823499224" target="_blank">1024 by Veewo Studio</a> and conceptually similar to <a href="http://asherv.com/threes/" target="_blank">Threes by Asher Vollmer.</a>
    </p>
    </div>
    </div>
	<?php

}

add_action( 'wp_enqueue_scripts', '_2048_wp_enqueue_scripts' );
function _2048_wp_enqueue_scripts() {
	wp_enqueue_script( '2048', plugins_url( 'js/2048.js', __FILE__ ), array('jquery'), 1, true );
	wp_enqueue_style( '2048', plugins_url( 'css/2048.css', __FILE__ ) );
}