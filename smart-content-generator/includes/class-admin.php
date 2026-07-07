<?php
/**
 * Admin Area Class
 *
 * @package SmartContentGenerator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin class.
 */
class SCG_Admin {

	/**
	 * Start admin hooks.
	 *
	 * @return void
	 */
	public function init() {

		add_action(
			'admin_menu',
			array( $this, 'register_menu' )
		);

	}


	/**
	 * Register admin menu.
	 *
	 * @return void
	 */
	public function register_menu() {

		add_menu_page(
			__( 'Smart Content Generator', 'smart-content-generator' ),
			__( 'Content Generator', 'smart-content-generator' ),
			'manage_options',
			'scg-generator',
			array( $this, 'render_page' ),
			'dashicons-edit-page',
			30
		);

	}


	/**
	 * Render admin page.
	 *
	 * @return void
	 */
	public function render_page() {

		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		?>

		<div class="wrap">

			<h1>
				Smart Content Generator
			</h1>

			<hr>

			<h2>
				Plugin Installed Successfully ✅
			</h2>

			<p>
				SEO Ready Content Generator Dashboard.
			</p>


			<div style="background:#fff;padding:20px;border:1px solid #ddd;max-width:800px;">

				<h3>Coming Features:</h3>

				<ul>
					<li>✅ Quote Parser</li>
					<li>✅ Shuffle Engine</li>
					<li>✅ Duplicate Checker</li>
					<li>✅ SEO Templates</li>
					<li>✅ FAQ Generator</li>
					<li>✅ Schema Generator</li>
					<li>✅ Gutenberg Post Creator</li>
				</ul>

			</div>

		</div>

		<?php
	}

}
