<?php
/**
* Plugin Name: Parallax Scroll by Adamrob.co.uk
* Plugin URI: http://www.adamrob.co.uk/parallax-scroll
* Description: Easily create a page header or even a post with a parallax scrolling background image, with just a shortcode! Visit adamrob.co.uk for more information and support.
* Version: 0.4
* Author: adamrob
* Author URI: http://www.adamrob.co.uk
* License: A "Slug" license name e.g. GPL12
*/

/*  Copyright 2014 adamrob (www.adamrob.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
	INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
	PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
	HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION 
	OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
	SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/


/********************************
** adamrob.co.uk - 2OCT2014
** Parallax Scroll Wordpress Plugin
** Uses Parallax.js (https://github.com/pixelcog/parallax.js)
**
** For Help and Support please visit www.adamrob.co.uk
**
** V0.3 - 14OCT20124 - Fixed ZIndex bug present when plugin
**                      used on certain themes.
**                  - Enclosed external script calls.
**
** V0.4 - 11NOV2014 - Added mobile disable options
**                  - Added full width Option
**                  - Fixed shortcode in content not working
**
** Main Plugin Call
********************************/


//Define Variables
define('PARALLAX_PATH', dirname(__FILE__) . "/");
define('PARALLAX_MINHEIGHT', 100);
define('PARALLAX_DEFVPOS', "middle");
define('PARALLAX_DEFHPOS', "center");
define('PARALLAX_POSTTYPE', "parallax_scroll");
define('PARALLAX_SHORTCODE', "parallax-scroll");


//Include external Scripts
function adamrob_parallax_scroll_scripts(){
    wp_register_style( 'parallax-CSS', plugins_url( '/css/parallax.css', __FILE__ ) );
    wp_register_script( 'parallax-script', plugins_url( '/includes/parallax/parallax.js', __FILE__ ), array('jquery') );
    wp_register_script( 'parallax-script-fullwidth', plugins_url( '/includes/js/fullwidth.js', __FILE__ ), array('jquery') );
}
add_action('wp_enqueue_scripts', 'adamrob_parallax_scroll_scripts');

//Include external files
require(PARALLAX_PATH . 'includes/adamrob-parralax-post-ops.php');
require(PARALLAX_PATH . 'includes/adamrob-parralax-post-type.php');
require(PARALLAX_PATH . 'includes/adamrob-parralax-shortcode.php');



?>