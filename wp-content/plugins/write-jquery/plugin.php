<?php
/*
Plugin Name: Write jQuery
Plugin URI: https://wp.me/p8JiII-o2
Description: WordPressにて「自由にjQueryを書けるプラグイン」です。jQueryは、テーマの編集より、ファイル中に書く事もできますが、テーマのアップデートが来ると、上書き保存されてしまいます。このプラグインを使えば、アップデートが来ても上書き保存されることはありません。
Author: tsutomu fujii
Version: 1.0
Author URI: https://testtesttest21.sakura.ne.jp/wp
*/

if(file_exists( wp_upload_dir()['basedir'] . '/write_jQuery/js/function.js' )){
	wp_enqueue_script('write_jQuery',wp_upload_dir()['baseurl'] . '/write_jQuery/js/function.js',array('jquery'));
}




class write_jQuery{
	
	function __construct(){
		add_action('admin_menu', array($this, 'add_pages'));
		
		if (function_exists('register_activation_hook'))
		{
			register_activation_hook(__FILE__, array(&$this, 'Write_jQuery_activation'));
		}
		if (function_exists('register_deactivation_hook'))
		{
			register_deactivation_hook(__FILE__, array(&$this, 'Write_jQuery_deactivation'));
		}
		if (function_exists('register_uninstall_hook'))
		{
			register_uninstall_hook(__FILE__, 'Write_jQuery_PluginDeveloper_Uninstall');
		}
	}
	
	function add_pages() {
		add_menu_page('Write jQuery','Write jQuery',  'level_8', __FILE__, array($this,'Write_jQuery_option_page'), plugin_dir_url( __FILE__ ) . 'img/icon.ico', 61);
	}
	
	function Write_jQuery_option_page() {
		
		if ( isset($_POST['write_jQuery_options'])) {
			check_admin_referer('shoptions');
			
			$jscode = $_POST['write_jQuery_options'];
			
			$jscode = stripslashes($jscode);
			
			$handle = fopen(wp_upload_dir()['basedir'] . '/write_jQuery/js/function.js', 'w+');
			fwrite($handle, $jscode);
			fclose ( $handle );
			
			
			?><div class="updated fade"><p><strong><?php _e('Options saved.'); ?></strong></p></div><?php
		}
		
		$jscode = file_get_contents ( wp_upload_dir()['basedir'] . '/write_jQuery/js/function.js' );
		
		?>
		<!-- html部分 -->
		<form action="" method="post">
			<?php 
			wp_nonce_field('shoptions'); 
			?>
			<div class="wrap">
				<h2>Write jQuery</h2>
				<table class="form-table">
				<tr>
					<th>ご自由にお書きください。</th>
					<td><textarea name="write_jQuery_options" type="text" id="inputtext" class="large-text code" rows="18"><?php  echo $jscode; ?></textarea></td>
				</tr>
				</table>
				<p class="submit"><input type="submit" name="Submit" class="button-primary" value="変更を保存" /></p>
			</div>
		</form>
		<?php
	}

	
	function Write_jQuery_activation() {

		$directory_path = wp_upload_dir()['basedir'] . "/write_jQuery/js";

		if(!file_exists($directory_path)){

			mkdir($directory_path, 0777,TRUE);

			copy(plugin_dir_path( __FILE__ ) . 'js/function.js', $directory_path . '/function.js');

		}
	}
	function Write_jQuery_deactivation() {
	}
}

function Write_jQuery_PluginDeveloper_Uninstall() {
	unlink(wp_upload_dir()['basedir'] . '/write_jQuery/js/function.js');
	
	rmdir(wp_upload_dir()['basedir'] . '/write_jQuery/js/');
	rmdir(wp_upload_dir()['basedir'] . '/write_jQuery/');
}

$write_jQuery = new write_jQuery;
