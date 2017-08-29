<?php
ob_start();
ob_start('ob_gzhandler');
$_users = array (
  'admin' => 
  array (
    'password' => 'f1bb5460fc488412f6bf3a5370adce0e',
    'root' => true,
  ),
);
define('TITLE', 'Simply-Cms');
define('ROOT_DIR', 'content/');
define('META_DIR', '.meta/');
define('COMMENTS_DIR', 'comments/');
define('COMMENTS', '1');
define('ENTRY_PAGEBREAK', '<!-- pagebreak -->');
define('MAX_ENTRIES', '10');
define('LANG', '');
define('I18N_DIR', 'i18n/');
define('USE_PING', '');
define('META_DESCRIPTION', 'minb is a KISS principle based CMS.');
define('META_KEYWORDS', 'Content Management Software, Online Content Manager, Open Source Content Management, Content Management System, CMS');
define('LABEL_OLDER', '&laquo; ');
define('LABEL_NEWER', ' &raquo;');
define('LABEL_EDIT', '[&#43;]');
define('LABEL_DELETE', '<small>[&otimes;]</small>');
define('LABEL_MORE', '');
define('DATE_FORMAT', 'm/d/Y, h:ia');
define('EMAIL', 'CHANGE_ME@');
$_top_content = '<div style="position: absolute; top: 5px; left: 200px; font-size: 2.7em;"><a href="/">my min<span style="color: #59c;">b</span></a></div>';
$_bottom_content = 'Optimized for: <a href="https://www.mozilla.org/firefox" target="_blank">Firefox</a> and <a href="https://www.google.com/chrome" target="_blank">Google Chrome</a>!&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Powered by a custom CMS named "minb.0", the zero calories CMS!&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<small>HTML5 and CSS3 valid code as of the last check by W3C.</small>';
$_freelancer_content = '<h3>Links</h3>
<ul>
	<li>
		<a href="https://www.p51host.com"><img src="#" title="Design with <3" alt="design from xoda!" style="width: 120px;" /></a>
	</li>
	<li><br /><a href="#" target="_blank" title="alink thats cool :sweet links:"><em>alink</em></a></li>
</ul>';
$_style = 'body {
	font:			normal 1em georgia, times, serif;
	background:		#ddd;
	color:			#013;
}

img { border: solid #7d7d7d 1px; }

#top {
	position:		absolute;
	top:			0px;
	left:			0px;
	right:			0px;
	height:			65px;
	background:		#346;
}

#top a {
	font:			normal 1.6em georgia, times, serif;
	text-decoration:	none;
}

#top a, #mitems a {
	color:			#fff;
}

#status {
	position:		fixed;
	top:			0px;
	right:			195px;
	background:		#fea;
	text-align:		center;
	padding:		3px;
}

.highlight {
	display:		inline;
	font:			normal 8pt Helvetica,Arial;
	color:			#567;
}

.highlight .status_title {
	display:		inline;
	font:			bold 8pt Helvetica,Arial;
	color:			#234;
}

#mitems {
	position:		absolute;
	top:			45px;
	right:			195px;
	font:			normal 10pt verdana, geneva, sans-serif;
}

#mitems .ctab {
	display:		inline;
	border-bottom:		2px solid #abd;
	padding:		2px;
	text-decoration:	none;
}

#mitems .ctab:hover {
	border-bottom:		2px solid #e83;
}

#main {
	margin-top:		60px;
	margin-right:		195px;
	margin-left:		195px;
	background:		#fff;
	font-size:		0.9em;
	text-align:		left;
	padding:		10px;
	padding-bottom:		15px;
	font:			normal 0.8em georgia, times, serif;
}

#main .title a {
	text-decoration:	none;
}

#categories, #settings {
	position:		absolute;
	top:			65px;
	width:			180px;
	padding:		10px;
}

#categories {
	left:			0px;
}

#categories ul {
	list-style:		none;
	margin-left:		-20px;
}

#settings {
	right:			0px;
}

#editform {
	position:		absolute;
	top:			100px;
	left:			10px;
	right:			10px;
}

.nav a, #categories a {
	text-decoration:	none;
}

#freelancer {
	position:		absolute;
	top:			250px;
	text-align:		left;
	padding:		3px;
}

#freelancer ul {
	list-style:		none;
	margin-left:		-20px;
}

#bottom {
	position:		fixed;
	bottom:			0px;
	right:			0px;
	left:			0px;
	height:			10px;
	background:		#eee;
	font:			normal 8pt Helvetica,Arial;
	text-align:		center;
	padding-bottom:		5px;
	border-top:		1px solid #56a;
	z-index:		100;
}

.commentform {
	margin:			20px auto auto auto;
	width:			470px;
	text-align:		right;
	border:			1px solid #abc;
	padding:		5px;
	background:		#eee;
}

.commentform textarea {
	width:			460px;
	height:			100px;
}

.comments {
	text-align:		left;
	font:			normal 0.8em verdana, geneva, sans-serif;
	width:			500px;
	margin:			20px auto auto auto;
}

.comment {
	border:			1px solid #aabbcc;
	margin:			10px;
	padding:		5px;
	background:		#eee;
}

.comment a {
	text-decoration:	none;
}

.writing {
	margin-bottom:		20px;
	padding:		10px;
}

a {
	color:			#124;
	text-decoration:	underline;
}

a:hover {
	color:			#235;
	text-decoration:	none;
}

#login {
	position:		relative;
	margin:			150px auto;
	width:			450px;
	text-align:		right;
}

.edit {
	width:			98%;
	font:			normal 8pt Courier;
}

hr.line {
	border:			0;
	background:		#abc;
	color:			#abc;
	height:			1px;
}

#settingsblock {
	position:		relative;
	margin:			0px auto;
	width:			630px;
	background:		#ddd;
	text-align:		center;
	border:			1px solid #679;
	padding:		5px;
}

#settingstabs {
	position:		relative;
	margin:			5px auto;
	width:			630px;
	z-index:		6;
}

.tab, .stab {
	display:		inline;
	border:			1px solid #679;
	padding:		5px;
	background:		#eee;
}

.stab {
	border-bottom:		1px solid #ddd;
	background:		#ddd;
	padding-top:		7px;
}

.settingsrow {
	width:			100%;
	border-bottom:		1px solid #ccc;
	text-align:		right;
	cursor:			default;
}

.userstable th {
	background:		#ddd;
}

.userstable {
	margin:			10px;
	width:			510px;
	border:			1px solid #556677;
}

blockquote {
	font:			10pt Courier;
	padding-left:		15px;
	border-left:		3px solid #679;
	background:		#eee;
}';

/* Edit below only if you know what you are doing! */

session_start ();
error_reporting ('E_ALL');
ini_set ('display_errors', '1');

define ('PHPSELF', minb_basename ($_SERVER['PHP_SELF']));

if (file_exists (I18N_DIR . LANG . '.php')) { include (I18N_DIR . LANG . '.php'); }

if (dirname ($_SERVER['PHP_SELF']) != '/') { define ('REDIRECT', 'http://' . $_SERVER['HTTP_HOST'] . dirname ($_SERVER['PHP_SELF'])); }
else { define ('REDIRECT', 'http://' . $_SERVER['HTTP_HOST']); }

/* Functions begin here. */
function minb_init () {
	if (! file_exists (ROOT_DIR)) { minb_mkdirp (ROOT_DIR); }
	if (! file_exists ('.htaccess')) {
		$htaccess = 'RewriteEngine On' . "\n" . 'RewriteCond %{REQUEST_FILENAME} !-f' . "\n" . 'RewriteCond %{REQUEST_FILENAME} !-d' . "\n" . 'RewriteRule ^(.*)$ ' . PHPSELF . '?action=$1 [L,QSA]' . "\n" . 'php_value session.use_only_cookies 1' . "\n" . 'php_value session.use_trans_sid 0' . "\n";
		minb_file_put_content ('.htaccess', $htaccess);
	}
	if (! file_exists (ROOT_DIR . '.htaccess')) {
		$htaccess = 'AuthUserFile ' . dirname ($_SERVER['SCRIPT_FILENAME']) . '/' . ROOT_DIR . '.htpasswd' . "\nAuthGroupFile /dev/null\nAuthName \"Protected files\"\nAuthType Basic\n\n<Limit GET>\nrequire valid-user\n</Limit>\n";
		minb_file_put_content (ROOT_DIR . '.htaccess', $htaccess);
	}
	return true;
}

function minb_check_login () {
	if (! $_SESSION['login']) { minb_redirect (); }
	return true;
}

function minb_check_traverse ($path) {
	if (strstr ($path, '../')) { minb_redirect (minb_translate ('ERRORCOLON_Relative_paths_are_not_supported') . '!', $_SERVER['HTTP_REFERER']); }
	return true;
}

function minb_logout () {
	$_SESSION = array ('login' => 'false');
	if (isset ($_COOKIE[session_name()])) setcookie (session_name(), '', time()-42000, '/');
	session_unset ();
	session_destroy ();
	return true;
}

function minb_redirect ($message=false, $location=false) {
	if ($message) {	$_SESSION['message'] = $message; }
	else { unset ($_SESSION['message']); }
	if (! $location) { header ('Location:' . REDIRECT); }
	else { minb_check_traverse ($location); header ('Location:' . $location); }
	exit;
}

function minb_basename ($path) { minb_check_traverse ($path); return end (explode ('/', trim ($path, '/'))); }

function minb_derootify ($path) { minb_check_traverse ($path); return str_replace (ROOT_DIR, '', trim ($path, '/')); }

function minb_mkdirp ($path) {
	minb_check_traverse ($path);
	$path = trim ($path, '/');
	if (!file_exists ($path)) {
		minb_mkdirp (dirname ($path));
		if (!mkdir ($path, 0755)) return false;
	}
	return true;
}

function minb_get_comments () { return minb_get_dirs (META_DIR . COMMENTS_DIR . ROOT_DIR, array ()); }

function minb_commentsfile_of ($f) { minb_check_traverse ($f); return META_DIR . COMMENTS_DIR . ROOT_DIR . $f . '.php'; }

function minb_get_dirs ($dir, $alldirs = array (), $r = true) {
	minb_check_traverse ($dir);
	$dirs = glob ($dir . '/*', GLOB_ONLYDIR);
	if (count ($dirs) > 0) {
		$alldirs = array_merge ($alldirs, $dirs);
		if ($r) { foreach ($dirs as $d) { $alldirs = array_merge ($alldirs, minb_get_dirs ($d)); } }
	}
	sort ($alldirs);
	return $alldirs;
}

function minb_rmrf ($path) {
	minb_check_traverse ($path);
	system ('rm -rf ' . ROOT_DIR . $path . ' 2>&1', $r);
	if ($r != 0) { return false; }
	return true;
}

function minb_extension_of ($filename) { return strtolower (substr (strrchr ($filename, '.'), 1)); }

function minb_get_categories ($basenames = false) {
	$all_categories = glob (ROOT_DIR . '*', GLOB_ONLYDIR);
	if (count ($all_categories)) {
		foreach ($all_categories as $single_category) {
			if ($basenames) { $_categories[] = minb_basename ($single_category); }
			else { $_categories[] = $single_category; }
		}
		return $_categories;
	}
	return false;
}

function minb_get_entries () {
	$files = array ();
	$categories = minb_get_categories ();
	if ($categories) { foreach ($categories as $category) { $files = array_merge ($files, glob ($category . '/*.html')); } }
	return $files;
}

function minb_get_entry ($filename, $what) {
	minb_check_traverse ($filename);
	$_author = false;
	exec ('tail -n 1 ' . $filename, $author);
	global $_users;
	if (@array_key_exists ($author[0], $_users)) {
		if ($what == 'author') { return $author[0]; }
		$_author = true;
	} else { if ($what == 'author') { return $_users[0]; } }
	$content = file_get_contents ($filename);
	$ca = explode ("\n", $content);
	if ($what == 'title') { return $ca[0]; }
	if ($what == 'content') {
		unset ($ca[0]);
		if ($_author) { unset ($ca[count ($ca)]); }
		return minb_unhtmlentities (implode ("\n", $ca));
	}
	if ($what == 'permissions') { return substr (decoct (fileperms ($filename)), 3); }
	return false;
}

function minb_display_check ($file, $edit=false, $perms=false) {
	minb_check_traverse ($file);
	if (isset ($_SESSION['root']) && $_SESSION['root']) { return true; }
	if ($file == '%new_article%' || $file == '%new_entry%') {
		$permissions = $perms;
		$author = $_SESSION['username'];
	} else {
		if (! $perms) { $permissions = minb_get_entry ($file, 'permissions'); }
		else { $permissions = $perms; }
		$author = minb_get_entry ($file, 'author');
	}
	if ($edit) {
		if (isset ($_SESSION['login']) && $_SESSION['login']) {
			if ($author != $_SESSION['username'] && $permissions[1] != 6) { return false; }
		} else { return false; }
	} else {
		if (isset ($_SESSION['login']) && $_SESSION['login']) {
			if ($author != $_SESSION['username'] && $permissions[1] < 4) { return false; }
		} else if ($permissions[2] != 4) { return false; }
	}
	return true;
}

function minb_display ($path) {
	minb_check_traverse ($path);
	$path = trim ($path, '/');
	$path_array = explode ('/', $path);
	$r = '';
	if ($path_array[0] == 'posting' || $path_array[0] == 'article') {
		$bl = '<hr class="line" />';
		if ($path_array[0] == 'article') { $file = preg_replace ('/^article\//', '', $path) . '.html'; }
		else { $file = preg_replace ('/^posting\//', '', $path) . '.html'; }
		if (file_exists (ROOT_DIR . $file) && minb_display_check (ROOT_DIR . $file)) {
			$single = false;
			if ($path_array[0] == 'article') {
				$file = preg_replace ('/^article\//', '', $path) . '.html';
				if (($author = minb_get_entry (ROOT_DIR . $file, 'author')) != false) { $bl .=  '<em>' . minb_translate ('Written_by') . $author . '</em>.'; }
				$single = true;
			} else {
				$file = preg_replace ('/^posting\//', '', $path) . '.html';
				$category = minb_basename (dirname ($path));
				$when = date (DATE_FORMAT, filemtime (ROOT_DIR . $file));
				if (($author = minb_get_entry (ROOT_DIR . $file, 'author')) != false) { $_author = ' ' . $author; } else { $_author = ' '; }
				$bl .= '<em>' . minb_translate ('Written_by') . $_author . ' ' . minb_translate ('on') . ' ' . $when . ' ' . minb_translate ('in') . '"' . minb_beautify ($category) . '"</em>.';
				if ($_SERVER['QUERY_STRING'] == 'action=' . $path) { $single = true; }
			}
			$T = minb_get_entry (ROOT_DIR . $file, 'title');
			$title = $T;
			if (! $single) { $title = '<a href="' . REDIRECT . '/' . $path . '" title="' . minb_translate ('Permanent_Link_to') . '\'' . minb_htmlentities ($T) . '\'.">' . $T . '</a>'; }
			$r .= '<div class="writing">';
			$r .= '<h2 style="display: inline;">' . $title . '</h2>';
			if ((isset ($_SESSION['root']) && $_SESSION['root']) || minb_display_check (ROOT_DIR . $file, true)) {
				$r .= '<span class="nav">';
				$r .= ' (<a href="' . REDIRECT . '?edit=' . $file . '" title="' . minb_translate ('Edit_this_entry') . '.">' . LABEL_EDIT . '</a>';
				$r .= ' <a href="' . REDIRECT . '?delete=' . $file . '" onclick="return checkDelete(\' ' . minb_translate ('article') . ' \\\'' . $T . '\'\\\');" title="' . minb_translate ('Delete_this_entry') . '.">' . LABEL_DELETE . '</a>)';
				$r .= '</span>';
			}
			$content = minb_get_entry (ROOT_DIR . $file, 'content');
			if (! $single) {
				$_content = explode (ENTRY_PAGEBREAK, $content);
				$content = $_content[0];
				if (count ($_content) == 2) { $content .= '<br /><a href="' . REDIRECT . '/' . $path . '" title="' . minb_translate ('Continue_reading') . ' \'' . minb_htmlentities ($T) . '\'">' . minb_translate ('Continue_reading') . '</a>'; }
			}
			$r .= '<div><br /></div>' . $content;
			$r .= $bl;
			if ($single) { $r .= '&nbsp;<g:plusone size="small" count="false"></g:plusone>'; }
			$commentsfile = minb_commentsfile_of ($file);
			$cn = 0; $_comments = array (); $_closed = false;
			if (file_exists ($commentsfile)) { include ($commentsfile); $cn = count ($_comments); }
			if (! COMMENTS) { $_closed = true; }
			if ($_closed) { $cn = 'off'; }
			if (! $single) { $r .= '&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;' . minb_translate ('Comments') . ': ' . $cn; }
			else {
				$r .= '<div class="comments">';
				$cc = 0;
				foreach ($_comments as $comment) {
					if (isset ($comment['website']) && strlen ($comment['website'])) {
						if (preg_match ('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $comment['website'])) { $url = $comment['website']; }
						else { $url = 'http://' . $comment['website']; }
						$a = '<a href="' . $url . '" target="_blank">' . $comment['name'] . '</a>&nbsp;';
					} else { $a = $comment['name'] . '&nbsp;'; }
						$r .= '<div class="comment">';
						$r .= ' <a name="comment-' . ($cc+1) . '"></a><a href="#comment-' . ($cc+1) . '" title="' . minb_translate ('Link_to_this_comment') . '">' . ($cc+1) . '</a>&nbsp;|&nbsp;' . $a;
						if (isset ($_SESSION['root']) && $_SESSION['root']) { $r .= '(<a href="#" onclick="load(\'' . PHPSELF . '?edit_commentfor=' . $file . '&nr=' . $cc . '\', \'comment-' . ($cc+1) . '\'); return false;" title="' . minb_translate ('Edit_this_comment') . '.">' . LABEL_EDIT . '</a>&nbsp;<a href="' . PHPSELF . '?rm_commentfor=' . $file . '&nr=' . $cc . '" title="' . minb_translate ('Delete_this_comment') . '." onclick="return checkDelete(\'' . minb_translate ('this_comment') . '\');">' . LABEL_DELETE . '</a>)&nbsp;'; }
						$r .= '<small>(' . date (DATE_FORMAT, $comment['time']) . ')</small>';
						$r .= '<p>' . $comment['body'] . '</p>';
						$r .= '</div>';
						$r .= '<div id="comment-' . ($cc+1) . '"></div>';
						++$cc;
					}
					$r .= '</div>';
					if (! $_closed) {
						$first = rand(0, 9);
						$second = rand(0, 9);
						if ($first > $second) { $o = rand(0, 2); }
						else { $o = rand(0, 1); }
						$operation = array (' and ', ' times ', ' minus ');
						if ($o == 0) { $result = $first+$second; }
						else if ($o == 1) { $result = $first*$second; }
						else if ($o == 2) { $result = $first-$second; }
						$question = $first . $operation[$o] . $second . ' ' . minb_translate ('is') . ' ';
						$r .= '<form method="post" class="commentform" action="' . PHPSELF . '?commented=' . $file . '">';
						$r .= '<h3>' . minb_translate ('Post_a_Comment') . '</h3>';
						if (! isset ($_SESSION['login']) || ! $_SESSION['login']) { $r .= '<p>' . minb_translate ('Name') . ' <small>(' . minb_translate ('required_field') . '!)</small>:&nbsp;<input type="text" name="name" /></p>'; } else { $r .= '<p>' . minb_translate ('Name') . ':&nbsp; ' . $_SESSION['username'] . '</p>'; }
						if (! isset ($_SESSION['login']) || ! $_SESSION['login']) {
							$r .= '<p class="settingsrow">' . minb_translate ('Are_you_a_humanQMARK_Please_answer_the followingCOLON') . $question . '<input style="width: 20px;" type="text" name="human_result" /></p><input type="hidden" name="md5result" value="' . md5 ($result) . '" />';
							$r .= '<small>(' . minb_translate ('Your_email_address_will_OEMneverCEM_be_published_nor_shared') . '.)</small>';
							$r .= '<p>' . minb_translate ('Email') . ' <small>(' . minb_translate ('required_field') . '!)</small>:&nbsp;<input type="text" name="email" /></p>';
							$r .= '<p>' . minb_translate ('Website') . ':&nbsp;<input type="text" name="website" /></p>';
						}
						$r .= '<textarea name="comment_content"></textarea>';
						if (! isset ($_SESSION['login']) || ! $_SESSION['login']) { $r .= '<br><small>HTML is not allowed!</small><br>'; } else { $r .= '<br><small>HTML is allowed!</small><br>'; }
						$r .= '<input type="submit" name="submit" value="' . minb_translate ('Post') . '" />';
						$r .= '</form>';
					}
				}
			$r .= '</div>';
			return $r;
		}
	} else if ($path_array[0] == 'page') {
		if ($path_array[1] != '1') {
			$_files = minb_get_entries ();
			usort ($_files, 'minb_cmp');
			$p = $path_array[1]-1;
			$prev_page = $p;
			$next_page = 0;
			for ($i=0; $i < MAX_ENTRIES*$p; $i++) { unset ($_files[$i]); }
			if (count ($_files)) {
				$j = 0;
				foreach ($_files as $_file) {
					if ($j < MAX_ENTRIES) { $files[] = $_file; }
					++$j;
				}
				if (count ($_files) > MAX_ENTRIES*$p) { $next_page = $path_array[1] + 1; }
				foreach ($files as $entry) {
					if (minb_display_check ($entry)) { $r .= minb_display ('posting/' . minb_derootify (preg_replace ('/.html$/', '', $entry))); }
				}
				if ($next_page) {
					$r .= '<a href="' . REDIRECT . '/page/' . $next_page . '">' . LABEL_OLDER . '</a>';
					if ($prev_page) { $r .= '&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;'; }
				}
				if ($prev_page > 1) {
					$r .= '<a href="' . REDIRECT . '/page/' . $prev_page . '">' . LABEL_NEWER . '</a>';
				} else { $r .= '<a href="' . REDIRECT . '">' . LABEL_NEWER . '</a>'; }
			}
		}
		return $r;
	} else if ($path_array[0] == 'category') {
		$category = str_replace ('category/', '', $path);
		$files = glob (ROOT_DIR . $category . '/*.html');
		if (count ($files)) {
			usort ($files, 'minb_cmp');
			foreach ($files as $entry) {
				if (minb_display_check ($entry)) { $r .= minb_display ('posting/' . minb_derootify (preg_replace ('/.html$/', '', $entry)), true); }
			}
		} else { $r .= '<h3>' . minb_translate ('No_files_found_in') . ' "' . minb_beautify (minb_basename ($path)) . '"!</h3>'; }
		return $r;
	} else if ($path_array[0] == 'rss') {
		global $_top_content;
		$xml = new SimpleXMLElement ('<?xml version="1.0" encoding="UTF-8" ?>' . "\n" . '<rss version="2.0">' . "\n" . '<channel>' . "\n\t" . '<title>' . TITLE . '</title>' . "\n\t" . '<description><![CDATA[' . "\n\t\t" . $_top_content . "\n\t" . ']]></description>' . "\n\t" . '<link>' . REDIRECT . '</link>' . "\n" . '</channel>' . "\n" . '</rss>');

		$files = minb_get_entries ();
		if (count ($files)) {
			usort ($files, 'minb_cmp');
			$nf = count ($files);
			foreach ($files as $file) { if (minb_display_check ($file)) { $_files[] = $file; } }
			$files = $_files;
			$n = 0;
			while (count ($files) > $n && $n <= MAX_ENTRIES && minb_display_check ($files[$n])) {
				$xml->channel->item[$n]->title = minb_get_entry ($files[$n], 'title');
				$content = explode (ENTRY_PAGEBREAK, minb_get_entry ($files[$n], 'content'));
				$xml->channel->item[$n]->description = (string) "<![CDATA[\n" . $content[0] . "\n]]>";
				$xml->channel->item[$n]->link = REDIRECT . '/posting/' . minb_derootify (preg_replace ('/.html$/', '', $files[$n]));
				$xml->channel->item[$n]->pubDate = date (DATE_FORMAT, filemtime ($files[$n]));
				++$n;
			}
		}
		header ('Content-type: application/rss+xml');
		echo html_entity_decode ($xml->asXML());
		exit;
	}
}

function minb_file_put_content ($filename, $content) {
	minb_check_traverse ($filename);
	if (!file_exists (dirname ($filename))) { minb_mkdirp (dirname ($filename)); }
	if (!file_exists ($filename)) { if (!$fp = fopen ($filename, 'x')) { minb_redirect (minb_translate ('ERRORCOLON_Cannot_create_file') . ' "' . $filename . '"', $_SERVER['HTTP_REFERER']); } }
	if (is_writable ($filename)) {
		if (!$fp = fopen ($filename, 'w')) { minb_redirect (minb_translate ('ERRORCOLON_Cannot_open_file') . ' "' . $filename . '"', $_SERVER['HTTP_REFERER']); }
		if (fwrite ($fp, $content) == FALSE) { minb_redirect (minb_translate ('ERRORCOLON_Cannot_write_to_file') . ' "' . $filename . '"', $_SERVER['HTTP_REFERER']); }
		fclose ($fp);
	} else { minb_redirect (minb_translate ('ERRORCOLON_Cannot_write_to_file') . ' "' . $filename . '"', $_SERVER['HTTP_REFERER']); }
	return true;
}

function minb_beautify ($name, $inverse=false) {
	$_fstr = array ('_');
	$_tstr = array (' ');
	if ($inverse) { return strtolower (str_replace ($_tstr, $_fstr, $name)); }
	return ucwords (str_replace ($_fstr, $_tstr, $name));
}

function minb_clean ($str) {
	$bminb_chars = array ('"', '\'', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '{', '}', '+', '=', '\\', '/', '|', '~', '`', '\xc2', '\x80', '\x98', '\x99', '\x8c', '\x9d');
	return str_replace ($bminb_chars, '', strip_tags (trim ($str)));
}

function minb_htmlentities ($var) { return str_replace (array ('>', '<', '"', '&'), array ('&gt;', '&lt;', '&quot;', '&amp;'), $var); }

function minb_unhtmlentities ($var) { return str_replace (array ('&gt;', '&lt;', '&quot;', '&amp;', "\\'", '\"'), array('>', '<', '"', '&', "'", '"'), $var); }

function minb_mail ($from, $to, $subject, $msg) {
	$mime_boundary = TITLE . '-comments' . md5(time());
	$headers = 'From: ' . $from . "\n";
	$headers .= 'Reply-To: ' . $from . "\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";

	$message = "--$mime_boundary\n";
	$message .= "Content-Type: text/plain; charset=UTF-8\n";
	$message .= "Content-Transfer-Encoding: 8bit\n\n";
	$message .= "$msg\n\n";
	$message .= "--$mime_boundary--\n\n";
	if (@mail( $to, $subject, $message, $headers)) { return true; }
	return false;
}

function minb_change_settings ($what, $post_array) {
	global $_users, $_top_content, $_freelancer_content, $_bottom_content, $_style;
	$minb_title = str_replace ('\"', '"', str_replace ("'", "\'", TITLE));
	$minb_max_entries = MAX_ENTRIES;
	$minb_lang = LANG;
	$minb_meta_description = META_DESCRIPTION;
	$minb_meta_keywords = META_KEYWORDS;
	$minb_top_content = str_replace ('\"', '"', str_replace ("'", "\'", $_top_content));
	$minb_bottom_content = str_replace ('\"', '"', str_replace ("'", "\'", $_bottom_content));
	$minb_freelancer_content = str_replace ('\"', '"', $_freelancer_content);
	$minb_comments = COMMENTS;
	$minb_email = EMAIL;
	$minb_style = $_style;

	$file_string = file_get_contents (minb_basename (PHPSELF));
	$string_to_parse = strstr ($file_string, '/* Edit below only if you know what you are doing! */');

	if ($what == 'pass') { $_users[$_SESSION['username']]['password'] = md5 ($post_array['new_password1']); }
	else if ($what == 'users') {
		foreach ($_users as $name => $user) {
			if ($name != $_SESSION['username']) {
				if ($_REQUEST[$name.'_root'] == 'on') { $_users[$name]['root'] = true; }
				else { $_users[$name]['root'] = false; }
			}
		}
		if (strlen ($_REQUEST['new_username'])) {
			if ($_REQUEST['new_username_root'] == 'on') { $nur = true; }
			else { $nur = false; }
			$_users[$_REQUEST['new_username']] = array ('password' => md5 ($_REQUEST['new_username_password1']), 'root' => $nur);
		}
		$minb_email = $post_array['edit_email'];
	} else if ($what == 'userdel') {
		unset ($_users[$post_array['todel']]);
	} else if ($what == 'seo') {
		if ($post_array['edit_use_ping'] == 'on') { $minb_use_ping = true; }
		else { $minb_use_ping = false; }
		$minb_meta_description = str_replace ('\"', '"', str_replace ("'", "\'", $post_array['edit_meta_description']));
		$minb_meta_keywords = str_replace ('\"', '"', str_replace ("'", "\'", $post_array['edit_meta_keywords']));
	} else if ($what == 'prefs') {
		$minb_title = str_replace ('\"', '"', str_replace ("'", "\'", $post_array['edit_title']));
		$minb_top_content = str_replace ('\"', '"', str_replace ("'", "\'", $post_array['edit_top_content']));
		$minb_bottom_content = str_replace ('\"', '"', str_replace ("'", "\'", $post_array['edit_bottom_content']));
		$minb_max_entries = $post_array['edit_max_entries'];
		$minb_lang = $post_array['edit_i18n'];
		if ($post_array['toggle_freelancer'] == 'on') { $minb_freelancer_content = str_replace ('\"', '"', str_replace ("'", "\'", $post_array['edit_freelancer_content'])); }
		else { $minb_freelancer_content = ''; }
		if ($post_array['edit_comments'] == 'on') { $minb_comments = true; }
		else { $minb_comments = false; }
	} else if ($what == 'style') { $minb_style = $post_array['edit_style']; }

	$content_parse = '<?php
ob_start();
ob_start(\'ob_gzhandler\');
$_users = ' . var_export ($_users, true) . ';
define(\'TITLE\', \'' . $minb_title . '\');
define(\'ROOT_DIR\', \'' . ROOT_DIR . '\');
define(\'META_DIR\', \'' . META_DIR . '\');
define(\'COMMENTS_DIR\', \'' . COMMENTS_DIR . '\');
define(\'COMMENTS\', \'' . $minb_comments . '\');
define(\'ENTRY_PAGEBREAK\', \'' . ENTRY_PAGEBREAK . '\');
define(\'MAX_ENTRIES\', \'' . $minb_max_entries . '\');
define(\'LANG\', \'' . $minb_lang . '\');
define(\'I18N_DIR\', \'' . I18N_DIR . '\');
define(\'USE_PING\', \'' . $minb_use_ping . '\');
define(\'META_DESCRIPTION\', \'' . $minb_meta_description . '\');
define(\'META_KEYWORDS\', \'' . $minb_meta_keywords . '\');
define(\'LABEL_OLDER\', \'' . LABEL_OLDER . '\');
define(\'LABEL_NEWER\', \'' . LABEL_NEWER . '\');
define(\'LABEL_EDIT\', \'' . LABEL_EDIT . '\');
define(\'LABEL_DELETE\', \'' . LABEL_DELETE . '\');
define(\'LABEL_MORE\', \'' . LABEL_MORE . '\');
define(\'DATE_FORMAT\', \'' . DATE_FORMAT . '\');
define(\'EMAIL\', \'' . $minb_email . '\');
$_top_content = \'' . $minb_top_content . '\';
$_bottom_content = \'' . $minb_bottom_content . '\';
$_freelancer_content = \'' . $minb_freelancer_content . '\';
$_style = \'' . $minb_style . '\';
' . "\n" . $string_to_parse;
	return $content_parse;
}

function minb_cmp ($a, $b) { return filemtime ($a) < filemtime ($b) ? 1 : -1; }

function minb_translate ($msg) {
	if (LANG != 'en' && isset ($_SESSION['i18n'][LANG][$msg])) { return $_SESSION['i18n'][LANG][$msg]; }
	$encoded = array ('SQUOTE', 'DQUOTE', 'EMARK', 'QMARK', 'COMMA', 'DOT', 'COLON', 'LBRACKET', 'RBRACKET', 'HASH', 'OEM', 'CEM', '_');
	$decoded = array ('\'', '"', '!', '?', ',', '.', ':', '(', ')', '#', '<em>', '</em>', ' ');
	return str_replace ($encoded, $decoded, $msg);
}

function pingomatic ($title, $url) {		/* Shamelessly stolen from http://www.barattalo.it/2010/02/24/ping-pingomatic-com-services-with-php/. Thank you for providing this function! :) */
	$content='<?xml version="1.0"?>'.
		'<methodCall>'.
		' <methodName>weblogUpdates.ping</methodName>'.
		'  <params>'.
		'   <param>'.
		'    <value>' . $title . '</value>'.
		'   </param>'.
		'  <param>'.
		'   <value>' . $url . '</value>'.
		'  </param>'.
		' </params>'.
		'</methodCall>';

	$headers="POST / HTTP/1.0\r\n".
	"User-Agent: minb-zer0 (Linux)\r\n".
	"Host: rpc.pingomatic.com\r\n".
	"Content-Type: text/xml\r\n".
	'Content-length: ' . strlen ($content);

	$request = $headers . "\r\n\r\n" . $content;
	$response = '';
	$fs=fsockopen ('rpc.pingomatic.com', 80, $errno, $errstr);
	if ($fs) {
		fwrite ($fs, $request);
		while (!feof ($fs)) $response .= fgets ($fs);
		fclose ($fs);
		preg_match_all ("/<(name|value|boolean|string)>(.*)<\/(name|value|boolean|string)>/U", $response, $ar, PREG_PATTERN_ORDER);
		for ($i=0; $i < count ($ar[2]); $i++) { $ar[2][$i]= strip_tags ($ar[2][$i]); }
		return array ('status' => ($ar[2][1]==1 ? 'ko' : 'ok'), 'msg' => $ar[2][3]);
	} else {
		return array ('status' => 'ko', 'msg' => $errstr . ' (' . $errno . ')');
	}
}
/* Functions end here. */

if (preg_match('/MSIE/i',$_SERVER['HTTP_USER_AGENT'])) {
	echo '<h2>This website should be viewed using a browser. Please come back when you get one! Thank you!</h2><div>Optimized for: <a href="http://getfirefox.com" target="_blank">Firefox</a> and <a href="http://www.google.com/chrome" target="_blank">Google Chrome</a>!</div>';
	exit;
}

if (isset ($_GET['action'])) {
	if ($_REQUEST['action'] == 'rss') { minb_display ('rss'); }
	else if ($_REQUEST['action'] == 'page/1') { minb_redirect (); }
}

if (isset ($_GET['log_in'])) {
	foreach ($_users as $name => $user) {
		if ($_REQUEST['username'] == $name && md5 ($_REQUEST['password']) == $user['password']) {
			$_SESSION['login'] = true;
			$_SESSION['username'] = $name;
			$_SESSION['password'] = $_REQUEST['password'];
			$_SESSION['root'] = $user['root'];
			if ($_SESSION['root']) { $_SESSION['settings_tabs'] = "'seo_tab','passw_tab','users_tab','prefs_tab','style_tab','comments_tab'"; }
			else { $_SESSION['settings_tabs'] = "'passw_tab'"; }
			minb_redirect (minb_translate ('Successfully_logged_inEMARK_WelcomeCOMMA') . ' ' . $name . '!');
		}
	}
	$_SESSION['login'] = $_SESSION['root'] = false;
	minb_redirect (minb_translate ('ERROR: Login failed') . '!', $_SERVER['HTTP_REFERER']);
} else if (isset ($_GET['logout'])) {
	session_start();
	$_SESSION['root'] = $_SESSION['login'] = false;
	minb_redirect ('', $_SERVER['HTTP_REFERER']);
} else if (isset ($_GET['new_category']) && minb_check_login () && $_SESSION['root']) { ?>
	<div id="settingsblock">
		<form method="post" action="<?php echo PHPSELF; ?>?add_new_category">
			<h3 style="display: inline;"><?php echo minb_translate ('New_category'); ?>:</h3>&nbsp;<input type="text" name="edit_new_category" />&nbsp;<input type="submit" name="submit" value="<?php echo minb_translate ('Add'); ?>" />
		</form>
	</div>
	<?php exit;
} else if (isset ($_GET['add_new_category']) && minb_check_login () && $_SESSION['root']) {
	$nc = trim (minb_beautify (minb_clean ($_REQUEST['edit_new_category']), true));
	minb_check_traverse ($nc);
	$bnc = minb_beautify ($nc);
	if (strlen ($nc) && minb_mkdirp (ROOT_DIR . $nc)) { minb_redirect (minb_translate ('Successfully created the category') . ' "' . $bnc . '"!'); }
	minb_redirect (minb_translate ('ERRORCOLON_creating_category') . ' "' . $bnc . '"!');
} else if (isset ($_GET['delete']) && minb_check_login () && $_SESSION['root']) {
	minb_check_traverse ($_REQUEST['delete']);
	if (minb_rmrf ($_REQUEST['delete'])) {
		$commentsfile = minb_commentsfile_of ($_REQUEST['delete']);
		if (file_exists ($commentsfile)) { minb_rmrf ($commentsfile); }
		minb_redirect (minb_translate ('Successfully_removed_this_item') . '!');
	}
	minb_redirect (minb_translate ('ERRORCOLON_deleting') . ' "' . $_REQUEST['delete'] . '"!', $_SERVER['HTTP_REFERER']);
} else if (isset ($_GET['edited']) && minb_display_check ($_REQUEST['edited'], true, $_REQUEST['permissions'])) {
	minb_check_traverse ($_REQUEST['edited']);
	minb_check_traverse ($_REQUEST['url_edit']);
	if (isset ($_REQUEST['edit_category'])) { $c = $_REQUEST['edit_category'] . '/'; $article = false; } else { $c = ''; $article = true; }
	$basename = minb_clean ($_REQUEST['url_edit']);
	$filename = ROOT_DIR . $c . $basename . '.html';
	$save = $rdrct = REDIRECT . '/posting/' . $c . $basename;
	$save_and_continue = REDIRECT . '?edit=' . $c . $basename . '.html';
	if ($_REQUEST['edited'] == '%new_article%' || $_REQUEST['edited'] == '%new_entry%') { $rdrct = ''; }
	if ($article) { $save_and_continue = REDIRECT . '?edit=' . $basename . '.html'; $save = REDIRECT . '/article/' . $basename; }
	if (strtolower ($_REQUEST['submit']) == strtolower (minb_translate ('Cancel'))) { minb_redirect (minb_translate ('Nothing_was_changed') . '!', $rdrct); }

	$title = trim ($_REQUEST['entrytitle']);
	if (! strlen ($title)) { minb_redirect (minb_translate ('ERRORCOLON_a_title_is_a_requirement') . '!', $save); }
	if (! strlen ($basename)) { minb_redirect (minb_translate ('ERRORCOLON_a_valid_URL_is_a_requirement') . '!', $save); }
	$content = trim ($_REQUEST['entrycontent']);
	$author = trim ($_REQUEST['entryauthor']);
	$new_content = $title . "\n" . $content . "\n" . $author;
	$chmod = '06' . $_REQUEST['visible'][0] + $_REQUEST['editable'] . $_REQUEST['visible'][1];
	$_ping = false;
	if (! file_exists ($filename) && USE_PING) { $_ping = true; }
	if (minb_file_put_content ($filename, minb_unhtmlentities ($new_content))) {
		unset ($_comments);
		$commentsfile = minb_commentsfile_of ($_REQUEST['edited']);
		if (file_exists ($commentsfile)) { include ($commentsfile); }
		if ($_REQUEST['edit_allow_comments'] != 'on') {
			minb_file_put_content ($commentsfile, "<?php\n\$_comments = " . var_export ($_comments, true) . ";\n\$_closed = true;\n?>");
		} else if (isset ($_comments)) {
			minb_file_put_content ($commentsfile, "<?php\n\$_comments = " . var_export ($_comments, true) . ";\n?>");
		}
		$new_mtime = strtotime ($_REQUEST['entryday'] . " " . $_REQUEST['entrymonth'] . " " . $_REQUEST['entryyear']);
		chmod ($filename, octdec ($chmod));
		touch ($filename, $new_mtime);
		if ($_REQUEST['submit'] == minb_translate ('Save_and_Continue_Editing')) { minb_redirect (minb_translate ('Changes_saved') . '.', $save_and_continue); }
		else {
			if ($_ping) {
				$ping = pingomatic ($title, $save);
				$pr = minb_translate ('The_entry_was_successfully_created') . '. Ping response: status="' . $ping['status'] . '", message="' . $ping['msg'] . '"';
			} else { $pr = minb_translate ('The_entry_was_successfully_edited') . '.'; }
			minb_redirect ($pr, $save);
		}
	} else { minb_redirect (minb_translate ('ERRORCOLON_The_entry_could_not_be_edited') . '.', $save); }
} else if (isset ($_GET['commented'])) {
	minb_check_traverse ($_REQUEST['commented']);
	if (! $_SESSION['login']) {
		if (md5 ($_REQUEST['human_result']) != $_REQUEST['md5result']) { minb_redirect (minb_translate ('ERRORCOLON_you_are_either_extremely_bad_in_maths_or_you_are_not_a_humanEMARK_No_commenting_allowed_in_such_cases') . '!'); }
	}
	$filename = $_REQUEST['commented'];
	$commentsfile = minb_commentsfile_of ($filename);
	$cn = 0;
	if (file_exists ($commentsfile)) { include ($commentsfile); $cn = count ($_comments); }
	if (! $_SESSION['login']) {
		$_comments[$cn]['name'] = minb_clean ($_REQUEST['name']);
		$_comments[$cn]['website'] = strip_tags ($_REQUEST['website']);
		$email = htmlspecialchars (stripslashes (strip_tags ($_REQUEST['email'])));
		if (eregi ('[a-z||0-9]@[a-z||0-9].[a-z]', $email)) { $_comments[$cn]['email'] = $email; }
		else { minb_redirect (minb_translate ('ERRORCOLON_email_address_was_not_valid') . '!', $_SERVER['HTTP_REFERER']); }
		$_comments[$cn]['body'] = htmlentities ($_REQUEST['comment_content']);
	} else {
		$_comments[$cn]['name'] = $_SESSION['username'];
		$_comments[$cn]['website'] = REDIRECT;
		$_comments[$cn]['body'] = $_REQUEST['comment_content'];
	}
	$_comments[$cn]['time'] = time();
	$_comments[$cn]['remote_address'] = $_SERVER['REMOTE_ADDR'];
	if (minb_file_put_content ($commentsfile, "<?php\n\$_comments = " . var_export ($_comments, true) . ";\n?>")) {
		$msg = minb_translate ('New_comment_was_just_posted_for') . ' "' . preg_replace ('/.html$/', '', $filename) . '" ' . minb_translate ('on') . ' ' . date (DATE_FORMAT, $_comments[$cn]['time']) . ' ' . minb_translate ('from') . $_comments[$cn]['name'] . ' (' . $_REQUEST['email'] . ', ' . $_REQUEST['website'] . ', ' . $_SERVER['REMOTE_ADDR'] . ").\n";
		$msg .= minb_translate ('View_the_posting_and_the_comments') . ': ' . 'http://' . $_SERVER['HTTP_HOST'] . dirname ($_SERVER['PHP_SELF']) . 'posting/' . minb_derootify (preg_replace ('/.html$/', '', $filename)) . ".\n\n";
		$msg .= minb_translate ('Comment') . ': ' . $_REQUEST['comment_content'] . "\n";
		$msg .= minb_translate ('Edit_this_comment') . ': ' . 'http://' . $_SERVER['HTTP_HOST'] . dirname ($_SERVER['PHP_SELF']) . '?edit_commentfor=' . $filename . '&nr=' . $cn . "!\n";
		$msg .= minb_translate ('Delete_this_comment') . ': ' . 'http://' . $_SERVER['HTTP_HOST'] . dirname ($_SERVER['PHP_SELF']) . '?rm_commentfor=' . $filename . '&nr=' . $cn . "!\n";
		minb_mail ('minb@' . REDIRECT, EMAIL, '[' . TITLE . '], ' . minb_translate ('New_comment_on') . ' "' . preg_replace ('/.html$/', '', $filename) . '"', $msg);
		minb_redirect (minb_translate ('Thank_you_for_your_comment') . '!', $_SERVER['HTTP_REFERER']);
	} else { minb_redirect (minb_translate ('ERRORCOLON_submitting_a_comment') . '!', $_SERVER['HTTP_REFERER']); }
} else if (isset ($_GET['edit_commentfor']) && minb_check_login () && $_SESSION['root']) {
	minb_check_traverse ($_REQUEST['edit_commentfor']);
	$commentsfile = minb_commentsfile_of ($_REQUEST['edit_commentfor']);
	$nr = $_REQUEST['nr'];
	include ($commentsfile);
	$name = $_comments[$nr]['name'];
	$website = $_comments[$nr]['website'];
	$body = $_comments[$nr]['body'];
	$time = $_comments[$nr]['time']; ?>
	<form method="post" name="cform" class="commentform" action="<?php echo PHPSELF; ?>?edit_commented=<?php echo $_REQUEST['edit_commentfor']; ?>&nr=<?php echo $_REQUEST['nr']; ?>">
	<h3><?php echo minb_translate ('Edit_this_comment'); ?>:</h3>
	<p><?php echo minb_translate ('Name'); ?>:&nbsp;<input type="text" name="name" value="<?php echo $name; ?>"/></p>
	<p><?php echo minb_translate ('Website'); ?>:&nbsp;<input type="text" name="website" value="<?php echo $website; ?>"/></p>
	<textarea name="comment_content"><?php echo $body; ?></textarea>
	<input type="hidden" name="time" value="<?php echo $time; ?>" />
	<input type="submit" name="submit" value="<?php echo minb_translate ('Send'); ?>" /> <a href="#" onclick="document.getElementById('comment-<?php echo $nr+1; ?>').innerHTML=''; return false; "><?php echo minb_translate ('Cancel'); ?></a>
	</form>
	<?php exit;
} else if (isset ($_GET['edit_commented']) && minb_check_login () && $_SESSION['root']) {
	minb_check_traverse ($_REQUEST['edit_commented']);
	$filename = $_REQUEST['edit_commented'];
	$commentsfile = minb_commentsfile_of ($filename);
	$cn = $_REQUEST['nr'];
	include ($commentsfile);
	$_comments[$cn]['name'] = minb_clean ($_REQUEST['name']);
	$_comments[$cn]['website'] = $_REQUEST['website'];
	$_comments[$cn]['time'] = $_REQUEST['time'];
	$_comments[$cn]['body'] = $_REQUEST['comment_content'];
	if ($_SESSION['root'] && minb_file_put_content ($commentsfile, "<?php\n\$_comments = " . var_export ($_comments, true) . ";\n?>")) { minb_redirect (minb_translate ('The_comment_was_edited_successfully') . '.', $_SERVER['HTTP_REFERER']); }
	else { minb_redirect (minb_translate ('ERRORCOLON_editing_a_comment') . '.', $_SERVER['HTTP_REFERER']); }
} else if (isset ($_GET['rm_commentfor']) && minb_check_login () && $_SESSION['root']) {
	minb_check_traverse ($_REQUEST['rm_commentfor']);
	$commentsfile = minb_commentsfile_of ($_REQUEST['rm_commentfor']);
	include ($commentsfile);
	unset ($_comments[$_REQUEST['nr']]);
	$_tc = array ();
	foreach ($_comments as $comment) { $_tc[] = $comment; }
	if (! count ($_tc)) { minb_rmrf ($commentsfile); }
	if (minb_file_put_content ($commentsfile, "<?php\n\$_comments = " . var_export ($_tc, true) . ";\n?>")) { minb_redirect (minb_translate ('The_comment_was_deleted_successfully') . '.', $_SERVER['HTTP_REFERER']); }
	else { minb_redirect (minb_translate ('ERRORCOLON_deleting_a_comment') . '.', $_SERVER['HTTP_REFERER']); }
} else if (isset ($_GET['settings']) && minb_check_login ()) {
	if (! strlen ($_GET['settings'])) { ?>
		<br />
		<div id="settingstabs">
		<?php if ($_SESSION['root']) { ?>
			<div class="tab" id="prefs_tab" style="cursor: pointer;" onclick="stab('prefs_tab'); load('<?php echo PHPSELF; ?>?settings=preferences', 'settingsblock'); return false;"><?php echo minb_translate ('Preferences'); ?></div>
			<div class="tab" id="seo_tab" style="cursor: pointer;" onclick="stab('seo_tab'); load('<?php echo PHPSELF; ?>?settings=seo', 'settingsblock'); return false;"><?php echo minb_translate ('SEO'); ?></div>
			<div class="tab" id="style_tab" style="cursor: pointer;" onclick="stab('style_tab'); load('<?php echo PHPSELF; ?>?settings=style', 'settingsblock'); return false;"><?php echo minb_translate ('Style'); ?></div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="tab" id="comments_tab" style="cursor: pointer;" onclick="stab('comments_tab'); load('<?= PHPSELF; ?>?settings=comments', 'settingsblock'); return false;"><?php echo minb_translate ('Comments'); ?></div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="tab" id="users_tab" style="cursor: pointer;" onclick="stab('users_tab'); load('<?php echo PHPSELF; ?>?settings=users', 'settingsblock'); return false;"><?php echo minb_translate ('Users'); ?></div>
		<?php } ?>
		<div class="tab" id="passw_tab" style="cursor: pointer;" onclick="stab('passw_tab'); load('<?php echo PHPSELF; ?>?settings=password', 'settingsblock'); return false;"><?php echo minb_translate ('Password'); ?></div>
		</div>
		<div id="settingsblock"><h4><?php echo minb_translate ('Please_click_on_the_tab_above_to_display_a_form_for_the_desired_properties'); ?>.</h4></div>
		<?php exit;
	} else if ($_GET['settings'] == 'password') { ?>
		<form method="post" action="<?php echo PHPSELF; ?>?change=pass">
			<h4><?php echo minb_translate ('Username'); ?>: <?php echo $_SESSION['username']; ?></h4>
			<div class="settingsrow"><strong><?php echo minb_translate ('Old_password'); ?></strong>: <input type="password" name="old_password" /></div>
			<div class="settingsrow"><strong><?php echo minb_translate ('New_password'); ?></strong>: <input type="password" name="new_password1" /></div>
			<div class="settingsrow"><strong><?php echo minb_translate ('New_password_LBRACKETretypeRBRACKETEMARK'); ?></strong>: <input type="password" name="new_password2" /></div>
			<p><input type="submit" name="submit" value="<?php echo minb_translate ('Change'); ?>" /></p>
		</form>
		<?php exit;
	} else if ($_GET['settings'] == "users" && $_SESSION['root']) { ?>
		<form method="post" action="<?php echo PHPSELF; ?>?change=users">
			<?php global $_users; ?>
			<table class="userstable">
				<thead><tr><th><?php echo minb_translate ('Username'); ?>:</th><th><?php echo minb_translate ('Root'); ?>:</th><th><?php echo minb_translate ('Delete'); ?>:</th></tr></thead>
				<tbody>
				<?php foreach ($_users as $name => $user) {
					if (! strlen ($user['root'])) { $user['root'] = '0'; } ?>
					<tr class="row">
						<td><?php if ($name == $_SESSION['username']) { ?> <strong><?php echo $name; ?></strong> <?php } else { echo $name; } ?></td>
						<td><input type="checkbox" name="<?php echo $name; ?>_root"<?php if ($user['root']) { ?> checked="checked" <?php } if ($name == $_SESSION['username']) { ?> disabled="disabled" /> <?php } else { ?> /> <?php } ?></td>
						<?php if ($name != $_SESSION['username']) { ?> <td><a href="<?php echo PHPSELF; ?>?change=userdel&amp;name=<?php echo $name; ?>" onclick="return checkDelete('<?php echo minb_translate ('user'); ?> \'<?php echo $name; ?>\'');" title="<?php echo minb_translate ('Delete_the_user'); ?> '<?php echo $name; ?>'."><?php echo LABEL_DELETE; ?></a></td> <?php } else { ?> <td>&nbsp;</td> <?php } ?>
					</tr>
				<?php } ?>
				</tbody>
				<tfoot><tr><td colspan="3" id="ubottom"><hr class="line" /><?php echo minb_translate ('Number_of_users'); ?>: <?php echo count ($_users); ?></td></tr></tfoot>
			</table>

			<hr class="line" />
			<div class="settingsrow"><?php echo minb_translate ('Email_address_for_notifications_about_new_comments'); ?>: <input type="text" name="edit_email" value="<?=EMAIL; ?>" /></div>
			<h4><a href="#" onclick="toggle('add_new_user'); return false;"><?php echo minb_translate ('Add_new_user'); ?></a></h4>
			<div id="add_new_user" style="display: none;">
				<div class="settingsrow"><?php echo minb_translate ('Username'); ?>: <input type="text" name="new_username" /></div>
				<div class="settingsrow"><?php echo minb_translate ('Password'); ?>: <input type="password" name="new_username_password1" /></div>
				<div class="settingsrow"><?php echo minb_translate ('New_password_LBRACKETretypeRBRACKETEMARK'); ?>: <input type="password" name="new_username_password2" /></div>
				<div class="settingsrow" style="border: none;"><?php echo minb_translate ('Root_privileges'); ?>: <input type="checkbox" name="new_username_root" /></div>
			</div>
			<hr class="line" />

			<p><input type="submit" name="submit" value="<?php echo minb_translate ('Submit'); ?>" /></p>
		</form>
		<?php exit;
	} else if ($_GET['settings'] == 'preferences' && $_SESSION['root']) { global $_freelancer_content, $_bottom_content; ?>
		<form method="post" action="<?php echo PHPSELF; ?>?change=prefs">
			<div class="settingsrow"><acronym title="<?php echo minb_translate ('Set_the_title_to_be_displayed'); ?>."><?php echo minb_translate ('Title'); ?></acronym>: <input type="text" name="edit_title" value="<?php echo TITLE; ?>" /></div>
			<div class="settingsrow"><acronym title="<?php echo minb_translate ('Set_the_maximum_number_of_entries_per_page'); ?>."><?php echo minb_translate ('Maximum_entries'); ?></acronym>: <input type="text" name="edit_max_entries" value="<?php echo MAX_ENTRIES; ?>" /></div>
			<div class="settingsrow"><acronym title="<?php minb_translate ('Allow_visitors_and_registered_users_to_comment_the_postings'); ?>."><?php echo minb_translate ('Enable_comments'); ?></acronym>: <input type="checkbox" name="edit_comments"<?php if (COMMENTS) { echo ' checked="checked"'; } ?> /></div>
			<?php if (file_exists (I18N_DIR)) {
				$langs = glob (I18N_DIR . '*');
				if (count ($langs)) {
					$langs[] = 'en'; ?>
					<div class="settingsrow"><acronym title="<?php minb_translate ('Set_the_language_for_the_interface'); ?>."><?php echo minb_translate ('Interface_language'); ?></acronym>:&nbsp;
					<select name="edit_i18n" style="display: inline;">
					<? foreach ($langs as $_lang) { 
						$lang = str_replace ('.php', '', minb_basename ($_lang)); ?>
						<option value="<?php echo $lang; ?>"<?php if ($lang == LANG) { ?> selected="selected"<? } ?> ><?php if ($lang != 'en') { include (I18N_DIR . $lang . '.php'); echo $_SESSION['i18n'][$lang]['LANGUAGE']; } else { echo 'English'; } ?></option>
					<?php } ?>
					</select>
					</div>
				<?php } ?>
			<?php } ?>
			<div style="text-align: left; cursor: default;">&nbsp;<acronym title="<?php echo minb_translate ('Set_the_content_of_the_DQUOTEtopDQUOTE_layer'); ?>."><?php echo minb_translate ('Top_layer'); ?></acronym>:</div><textarea class="edit" name="edit_top_content"><?php echo htmlentities ($_top_content); ?></textarea>
			<hr class="line" />
			<div style="text-align: left; cursor: default;">&nbsp;<acronym title="<?php echo minb_translate ('Set_the_content_of_the_DQUOTEbottomDQUOTE_layer'); ?>."><?php echo minb_translate ('Bottom_layer'); ?></acronym>:</div><textarea class="edit" name="edit_bottom_content" style="height: 50px;"><?php echo htmlentities ($_bottom_content); ?></textarea></div>
			<hr class="line" />
			<div style="text-align: left; cursor: default;">&nbsp;<acronym title="<?php echo minb_translate ('Add_a_new_DQUOTEfreetextDQUOTE_layer_and_define_its_appearance_in_the_style_LBRACKETHASHfreelancerRBRACKETDOT_This_would_be_the_place_to_add_linksCOMMA_blogroll_etc'); ?>"><?php echo minb_translate ('Add_new_layer'); ?></acronym>:
				<input type="checkbox" name="toggle_freelancer" onclick="document.getElementById('freelancer_content').style.display = this.checked ? 'block' : 'none';"<?php if (strlen ($_freelancer_content)) { echo ' checked="checked"'; } ?> /></div>
				<div id="freelancer_content" style="display: <?php if (! strlen ($_freelancer_content)) { echo "none"; } else { echo "block"; } ?>;"><textarea class="edit" name="edit_freelancer_content" style="height: 100px;"><?php echo htmlentities ($_freelancer_content); ?></textarea>
			</div>
			<hr class="line" />
			<p><input type="submit" name="submit" value="<?php echo minb_translate ('Change'); ?>" /></p>
		</form>
		<?php exit;
	} else if ($_GET['settings'] == 'seo' && $_SESSION['root']) { ?>
		<form method="post" action="<?php echo PHPSELF; ?>?change=seo">
			<div class="settingsrow"><acronym title="<?php echo minb_translate ('Check_this_to_notify_search_engines_about_new_postings'); ?>."><?php echo minb_translate ('Use_the_pingomatic_service'); ?></acronym>: <input type="checkbox" name="edit_use_ping"<?php if (USE_PING) { echo ' checked="checked"'; } ?> /></div>
			<div style="text-align: left; cursor: default;">&nbsp;<acronym title="<?php echo minb_translate ('Set_a_META_tag_description'); ?>."><?php echo minb_translate ('META_description'); ?></acronym>:</div><textarea class="edit" name="edit_meta_description" style="height: 50px;"><?php echo htmlentities (META_DESCRIPTION); ?></textarea>
			<hr class="line" />
			<div style="text-align: left; cursor: default;">&nbsp;<acronym title="<?php echo minb_translate ('Set_META_keywords'); ?>."><?php echo minb_translate ('META_keywords_LBRACKETSeparate_by_commaEMARKRBRACKET'); ?></acronym>:</div><textarea class="edit" name="edit_meta_keywords" style="height: 50px;"><?php echo htmlentities (META_KEYWORDS); ?></textarea></div>
			<hr class="line" />
			<p><input type="submit" name="submit" value="<?php echo minb_translate ('Change'); ?>" /></p>
		</form>
		<?php exit;
	} else if ($_GET['settings'] == 'comments') { ?>
		<div style="text-align: left;">
		<h3><?php echo minb_translate ('Comments'); ?></h3>
		<hr class="line" />
		<?php foreach (minb_get_comments () as $commented_entry) { ?>
			<h4><?php echo minb_translate ('Category'); ?> "<?php echo minb_beautify (minb_basename ($commented_entry)); ?>":</h4>
			<ul>
			<?php foreach (glob ($commented_entry . '/*') as $_commented) {
				$commented = preg_replace ('/.html.php$/', '', trim (str_replace (META_DIR . COMMENTS_DIR . ROOT_DIR, '', $_commented), '/')); ?>
				<li><a href="<?php echo REDIRECT . '/posting/' . $commented; ?>" class="pix"><?php echo minb_beautify (minb_basename ($commented)); ?></a></li>
			<?php } ?>
			</ul>
		<?php } ?>
		</div>
	<?php exit;
	} else if ($_GET['settings'] == 'style' && $_SESSION['root']) { ?>
		<form method="post" action="<?php echo PHPSELF; ?>?change=style">
			<textarea name="edit_style" style="width: 100%; height: 200px; font: normal 8pt Courier;" class="edit"><?php
			if (file_exists ('style.css')) { echo file_get_contents ('style.css'); }
			else { echo $_style; }
			?></textarea>
			<p><input type="submit" name="submit" value="change" /></p>
		</form>
		<?php exit;
	}
} else if (isset ($_GET['change']) && minb_check_login ()) {
	if ($_GET['change'] == 'pass') {
		global $_users;
		if (md5 ($_POST['old_password']) != $_users[$_SESSION['username']]['password']) { minb_redirect (minb_translate ('ERRORCOLON_Wrong_passwordEMARK_Please_identify_yourself_with_the_old_password') . '!'); }
		else if ($_POST['new_password1'] != $_POST['new_password2']) { minb_redirect (minb_translate ('ERRORCOLON_New_password_incorrectly_retyped') . '!'); }
		$htpassf = ROOT_DIR . '.htpasswd';
		$userpass = explode ("\n", file_get_contents ($htpassf));
		$htpwd = array ();
		foreach ($userpass as $up) {
			if (strlen (trim ($up))) {
				$uparr = explode (':', $up);
				if ($uparr[0] != $_SESSION['username']) { $htpwd[] = $up; }
			}
		}
		$htpwd[] = $_SESSION['username'] . ':' . crypt ($_REQUEST['new_password1']);
		minb_file_put_content ($htpassf, implode ("\n", $htpwd));
	} else if ($_GET['change'] == 'users' && strlen ($_REQUEST['new_username']) && $_SESSION['root']) {
		if (strlen ($_REQUEST['new_username_password1'])) {
			global $_users;
			foreach ($_users as $name => $user) { if ($_REQUEST['new_username'] == $name) { minb_redirect (minb_translate ('ERRORCOLON_A_user_with_this_name_already_exists') . '!'); } }
			if ($_REQUEST['new_username_password1'] != $_REQUEST['new_username_password2']) { minb_redirect (minb_translate ('ERRORCOLON_New_password_incorrectly_retyped') . '!'); }
			$htpassf = ROOT_DIR . '.htpasswd';
			$userpass = explode ("\n", file_get_contents ($htpassf));
			$htpwd = array ();
			foreach ($userpass as $up) { if (strlen (trim ($up))) { $htpwd[] = $up; } }
			$htpwd[] = $_REQUEST['new_username'] . ':' . crypt ($_REQUEST['new_username_password1']);
			minb_file_put_content ($htpassf, implode ("\n", $htpwd));
		} else { minb_redirect (minb_translate ('ERRORCOLON_The_new_user_needs_a_password') . '!'); }
	} else if ($_GET['change'] == 'userdel' && $_SESSION['root']) {
		$post['todel'] = $_GET['name'];
		if (minb_file_put_content (PHPSELF, minb_change_settings ($_GET['change'], $post))) { $message = minb_translate ('Successfully_deleted_the_user') . '.'; }
		else { $message = minb_translate ('ERRORCOLON_Deleting_a_user') . '!'; }
		$htpassf = ROOT_DIR . '.htpasswd';
		$userpass = explode ("\n", file_get_contents ($htpassf));
		$htpwd = array ();
		foreach ($userpass as $up) {
			if (strlen (trim ($up))) { $uparr = explode (':', $up); }
			if ($uparr[0] != $_GET['name']) { $htpwd[] = $up; }
		}
		minb_file_put_content ($htpassf, implode ("\n", $htpwd));
		minb_redirect ($message);
	} else if ($_GET['change'] == 'style' && $_SESSION['root']) {
		if (file_exists ('style.css')) {
			if (minb_file_put_content ('style.css', $_POST['edit_style'])) { minb_redirect (minb_translate ('Successfully_edited_the_settings') . '.'); }
			else { minb_redirect (minb_translate ('ERRORCOLON_Editing_the_settings') . '!'); }
		}
	}
	if (minb_file_put_content (PHPSELF, minb_change_settings ($_GET['change'], $_POST))) { minb_redirect (minb_translate ('Successfully_edited_the_settings') . '.', $_SERVER['HTTP_REFERER']); }
	else { minb_redirect (minb_translate ('ERRORCOLON_Editing_the_settings') . '!', $_SERVER['HTTP_REFERER']); }
}

minb_init ();
$_SESSION['title'] = TITLE;

if (isset ($_GET['login'])) {
	$op = '<div id="login">';
	$op .= '<form method="post" action="PHPSELF?log_in">';
	$op .= '<p>' . minb_translate ('Username') . ':&nbsp;<input type="text" name="username" /></p>';
	$op .= '<p>' . minb_translate ('Password') . ':&nbsp;<input type="password" name="password" /></p>';
	$op .= '<p><input type="submit" name="submit" value="' . minb_translate ('Login') . '" /></p>';
	$op .= '</form>';
	$op .= '</div>';
} else if (isset ($_GET['edit']) && minb_check_login ()) {
	$op = '<div id="editform">';
	if ($_REQUEST['edit'] == '%new_article%') { $pre = '/article/';
		$op .= '<h2>' . minb_translate ('New_article') . ':</h2>';
	} else if ($_REQUEST['edit'] == '%new_entry%') { $pre = '/posting/'; if (! minb_get_categories ()) { minb_redirect (minb_translate ('ERRORCOLON_a_new_entry_would_require_at_least_one_category_set') . '!'); }
		$op .= '<h2>' . minb_translate ('New_posting') . ':</h2>';
	} else {
		minb_check_traverse ($_REQUEST['edit']);
		if (count (explode ('/', trim ($_REQUEST['edit'], '/'))) < 2) { $pre = '/article/';
			$op .= '<h2>' . minb_translate ('Edit_article') . ' "' . minb_get_entry (ROOT_DIR . $_REQUEST['edit'], 'title') . '":</h2>';
		} else { $pre = '/posting/';
			$op .= '<h2>' . minb_translate ('Edit_entry') . ' "' . minb_get_entry (ROOT_DIR . $_REQUEST['edit'], 'title') . '":</h2>';
		}
	}
	$op .= '<form method="post" action="' . PHPSELF . '?edited=' . $_REQUEST['edit'] . '">';
	if ($_REQUEST['edit'] == '%new_article%' || $_REQUEST['edit'] == '%new_entry%') {
		$filename = '';
		$entrytitle = '';
		$entryauthor = $_SESSION['username'];
		$entrymonth = date ('F', time ());
		$entryday = date ('d', time ());
		$entryyear = date ('Y', time ());
		$entrycontent = '';
		if ($_REQUEST['edit'] == '%new_entry%') { $entrycategory = ''; }
		else { unset ($entrycategory); }
		$url = '';
		$permissions = '664';
		$commentsfile = false;
	} else {
		$filename = $_REQUEST['edit'];
		$entrytitle = minb_get_entry (ROOT_DIR . $filename, 'title');
		$entryauthor = minb_get_entry (ROOT_DIR . $filename, 'author');
		$entrymonth = date ('F', filemtime (ROOT_DIR . $filename));
		$entryday = date ('d', filemtime (ROOT_DIR . $filename));
		$entryyear = date ('Y', filemtime (ROOT_DIR . $filename));
		if (dirname ($filename) != '.') { $entrycategory = minb_basename (dirname (ROOT_DIR . $filename)) . '/'; }
		else { unset ($entrycategory); }
		$entrycontent = minb_get_entry (ROOT_DIR . $filename, 'content');
		$url = preg_replace ('/.html$/', '', minb_basename ($filename));
		$permissions = minb_get_entry (ROOT_DIR . $filename, 'permissions');
		$commentsfile = minb_commentsfile_of ($filename);
		if (file_exists ($commentsfile)) { include ($commentsfile); } else { $commentsfile = false; }
	}
	if (! minb_display_check (ROOT_DIR . $filename, true, $permissions)) { minb_redirect (minb_translate ('ERRORCOLON_You_are_not_allowed_to_edit_this_entry') . '!'); }
	if (isset ($entrycategory) && ! strlen ($entrycategory)) {
		$categories = minb_get_categories (true);
		$entrycategory = $categories[0] . '/';
	}

	if ($entryauthor == '') { $entryauthor = $_SESSION['username']; }
	$days = range (1, 31);
	$months = array (1 => minb_translate ('January'), minb_translate ('February'), minb_translate ('March'), minb_translate ('April'), minb_translate ('May'), minb_translate ('June'), minb_translate ('July'), minb_translate ('August'), minb_translate ('September'), minb_translate ('October'), minb_translate ('November'), minb_translate ('December'));
	$years = range (2005, date ('Y', time()));

	$op .= '<input type="hidden" name="entryauthor" value="' . $entryauthor . '" />';
	$op .= '<input type="hidden" name="permissions" value="' . $permissions . '" />';
	$op .= '<h4 style="display: inline;">' . minb_translate ('Title') . ':</h4>&nbsp;';
	$op .= '<input type="text" style="width: 400px;" name="entrytitle" onchange="document.getElementById(\'URLtitle\').value=cleaned(this.value);" value="' . minb_htmlentities ($entrytitle) . '" />';
	$op .= '<p><h4 style="display: inline;">URL: </h4> ' . REDIRECT . $pre;
	$op .= '<span id="_entrycategory">' . $entrycategory . '</span>';
	$op .= '<input type="text" style="width: 300px;" name="url_edit" id="URLtitle" onchange="this.value=cleaned(this.value);" value="' . $url . '" /></p>';
	$op .= '<hr class="line" />';
	$op .= '<h4 style="display: inline;">' . minb_translate ('Release_time') . ':</h4>&nbsp;&nbsp;&nbsp;';
	$op .= minb_translate ('Day') . ':&nbsp;<select name="entryday" style="display: inline;">';
	foreach ($days as $day) {
		$op .= '<option value="' . $day . '"';
		if ($day == $entryday) { $op .= ' selected="selected"'; } 
		$op .= '>' . $day . '</option>';
	}
	$op .= '</select>';
	$op .= minb_translate ('Month') . ':&nbsp;<select name="entrymonth" style="display: inline;">';
	foreach ($months as $month) {
		$op .= '<option value="' . $month . '"';
		if ($month == $entrymonth) { $op .= ' selected="selected"'; }
		$op .= '>' . $month . '</option>';
	}
	$op .= '</select>';
	$op .= minb_translate ('Year') . ':&nbsp;<select name="entryyear" style="display: inline;">';
	foreach ($years as $year) {
		$op .= '<option value="' . $year . '"';
		if ($year == $entryyear) { $op .= ' selected="selected"'; }
		$op .= '>' . $year . '</option>';
	}
	$op .= '</select>';
	$op .= '<hr class="line" />';
	$op .= '<h4 style="display: inline;">' . minb_translate ('Visible_to') . ':</h4>&nbsp;<select name="visible" style="display: inline;">';
	$op .= '<option value="00"';
	if ($permissions[1] == 0) { $op .= ' selected="selected"'; }
	$op .= '>' . minb_translate ('me_only') . '</option>';
	$op .= '<option value="40"';
	if ($permissions[1] >= 4) { $op .= ' selected="selected"'; }
	$op .= '>' . minb_translate ('all_logged_users') . '</option>';
	$op .= '<option value="44"';
	if ($permissions[2] == 4) { $op .= ' selected="selected"'; }
	$op .= '>' . minb_translate ('everyone_LBRACKETpublishedEMARKRBRACKET') . '</option>';
	$op .= '</select>';
	$op .= '&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;';
	$op .= '<h4 style="display: inline;">' . minb_translate ('Editable by') . ':</h4>&nbsp;<select name="editable" style="display: inline;">';
	$op .= '<option value="0"';
	if ($permissions[1] < 4) { $op .= ' selected="selected"'; }
	$op .= '>' . minb_translate ('me_only') . '</option>';
	$op .= '<option value="2"';
	if ($permissions[1] > 4) { $op .= ' selected="selected"'; }
	$op .= '>' . minb_translate ('all_logged_users') . '</option>';
	$op .= '</select>';
	if (isset ($entrycategory)) {
		$op .= '<hr class="line" />';
		$op .= '<h4 style="display: inline;">' . minb_translate ('Category') . ':</h4>';
		$op .= '<select name="edit_category" style="display: inline;" onchange="document.getElementById(\'_entrycategory\').innerHTML = this.value+\'/\';">';
		foreach (minb_get_categories (true) as $category) {
			$op .= '<option value="' . $category . '"';
			if ($entrycategory == $category . '/') { $op .= ' selected="selected"'; }
			$op .= '>' . minb_beautify ($category) . '</option>';
		}
		$op .= '</select>';
	}
	$op .= '&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;';

	if ($commentsfile && $_closed) { $allow_comments = ''; } else { $allow_comments = 'checked="checked" '; }
	$op .= '<h4 style="display: inline;">' . minb_translate ('Allow_comments') . ':</h4>&nbsp;<input type="checkbox" name="edit_allow_comments" style="display: inline;" ' . $allow_comments . '/>';
	$op .= '<hr class="line" />';
	$op .= '<textarea name="entrycontent" id="editor" style="height: 200px;">' . $entrycontent . '</textarea>';
	$op .= '<hr class="line" />';
	$op .= '<input type="submit" name="submit" value="' . minb_translate ('Save_and_Done') . '" />&nbsp;';
	$op .= '<input type="submit" name="submit" value="' . minb_translate ('Save_and_Continue_Editing') . '" />&nbsp;';
	$op .= '<input type="submit" name="submit" value="' . minb_translate ('Cancel') . '" />';
	$op .= '</form>';
	$op .= '</div>';
} else {
	$op = '';
	if (isset ($_GET['action'])) {
		$path = trim ($_REQUEST['action'], '/');
		minb_check_traverse ($path);
		$path = trim ($path, '/');
		$path_array = explode ('/', $path);
		if ($path_array[0] == 'posting' || $path_array[0] == 'article') {
			if ($path_array[0] == 'article') { $file = preg_replace ('/^article\//', '', $path) . '.html'; }
			else { $file = preg_replace ('/^posting\//', '', $path) . '.html'; }
			$_SESSION['title'] = TITLE . ': ' . minb_get_entry (ROOT_DIR . $file, 'title');
		} else if ($path_array[0] == 'category') { $_SESSION['title'] = TITLE . ': ' . minb_beautify ($path_array[1]); }
		$op .= minb_display ($path);
	} else {
		global $files;
		if (! isset ($files)) { $_files = minb_get_entries (); }
		else { $_files = $files; }
		$fn = count ($_files);
		if ($fn) {
			usort ($_files, 'minb_cmp');
			$j = 0;
			foreach ($_files as $_file) {
				if ($j < MAX_ENTRIES) { $files[] = $_file; }
				++$j;
			}
			foreach ($files as $entry) {
				if (minb_display_check ($entry)) { $op .= minb_display ('posting/' . minb_derootify (preg_replace ('/.html$/', '', $entry))); }
			}
			if ($fn > MAX_ENTRIES) { $op .= '<a href="' . REDIRECT . '/page/2' . '">' . LABEL_OLDER . '</a>'; }
		} else { $op .= '<h3>' . minb_translate ('No_entries_found') . '!</h3>'; }
	}
}

/* Start the HTML at last! :) */
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['title']; ?></title>
	<meta name="description" content="<?php echo META_DESCRIPTION; ?>" />
	<meta name="keywords" content="<?php echo META_KEYWORDS; ?>" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="alternate" type="application/rss+xml" title="Latest '<?php echo TITLE; ?>' Posts (RSS 2.0)" href="<?php echo REDIRECT . '/rss'; ?>" />
	<?php if (isset ($_SESSION['login']) && $_SESSION['login']) { ?>
	<script language="javascript" type="text/javascript">
		//<![CDATA[
		function checkDelete(v){var _1=confirm("<?php echo minb_translate ('Do_you_really_want_to_delete_the'); ?> "+v+"?");if(_1==true){return true;}else{return false;}}function toggle(id){var _3=document.getElementById(id).style;if(_3.display=="none"){_3.display="block";}else{_3.display="none";}}function xdivhide(id){var sl=document.getElementById(id).style;sl.display="none";}function ahah(_8,_9){document.getElementById(_9).innerHTML='...';if(window.XMLHttpRequest){req=new XMLHttpRequest();}else{if(window.ActiveXObject){req=new ActiveXObject("Microsoft.XMLHTTP");}}if(req!=undefined){req.onreadystatechange=function(){ahahDone(_8,_9);};req.open("GET",_8,true);req.send("");}}function ahahDone(_a,_b){if(req.readyState==4){if(req.status==200){document.getElementById(_b).innerHTML=req.responseText;}else{document.getElementById(_b).innerHTML=" Error:\n"+req.status+"\n"+req.statusText;}}}function load(_c,_d){ahah(_c,_d);return false;}function stab(id){var _10=new Array(<?php echo $_SESSION['settings_tabs']; ?>);for(i=0;i<_10.length;i++){document.getElementById(_10[i]).className="tab";}document.getElementById(id).className="stab";}function cleaned(str) {var cs='';var valid="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZабвгдежзийклмнопрстуфхцчшщъьюяАБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЬЮЯ-_";for (var i=0; i<str.length; i++) {if (valid.indexOf(str.charAt(i)) != -1) { cs += str.charAt(i); }}var o = cs.replace (/ /g,'-');return o.toLowerCase();}
		//]]>
	</script>
	<?php }
	if (isset ($_SESSION['message']) && !strstr ($_SESSION['message'], minb_translate ('ERROR'))) { ?> <script language="JavaScript" type="text/javascript">setTimeout("xdivhide('status');", 10000);</script> <?php }
	if (file_exists ('style.css')) { ?> <link rel="stylesheet" href="style.css" type="text/css" /> <?php }
	else { ?><style type="text/css"><?php echo str_replace (array ("\n", "\t"), '', $_style); ?></style><?php } ?>

</head>

<body>
<div id="top">
	<?php echo $_top_content; ?>
	<?php if (isset ($_SESSION['message'])) { ?><div id="status" style="display: block;" class="highlight"><div class="status_title"><?php echo minb_translate ('Status_message'); ?>: </div><?php echo $_SESSION['message']; ?></div> <?php } ?>
</div>

<div id="mitems">
	<?php $articles = glob (ROOT_DIR . '*.html');
	usort ($articles, 'minb_cmp');
	foreach ($articles as $article) {
		if (minb_display_check ($article)) {
			$p = minb_basename ($article); $P = minb_get_entry ($article, 'title'); ?>
			<a href="<?php echo REDIRECT . '/article/' . preg_replace ('/.html$/', '', $p); ?>" title="<?php echo minb_translate ('Read'); ?> '<?php echo minb_htmlentities ($P); ?>'" class="ctab"><?php echo $P; ?></a>&nbsp;
		<?php }
	} ?>
</div>

<?php if (! isset ($_GET['edit'])) { ?>
<div id="categories">
	<h4><?php echo minb_translate ('Categories'); ?></h4>
	<ul>
	<?php foreach (minb_get_categories () as $category) {
		$c = minb_basename ($category); $C = minb_beautify ($c); ?>
		<li>
			<a href="<?php echo REDIRECT . '/category/' . $c; ?>" title="<?php echo minb_translate ('Show_articles_in_category'); ?> '<?php echo $C; ?>'"><?php echo $C; ?></a>&nbsp;
			<?php if (isset ($_SESSION['login']) && $_SESSION['login']) { ?>
				<?php if (count (glob (ROOT_DIR . $c . '/*')) == 0) { ?>
					<small><a href="<?php echo PHPSELF; ?>?delete=<?php echo $c; ?>" onclick="return checkDelete('<?php echo minb_translate ('category'); ?> \'<?php echo $C; ?>\'');" title="<?php echo minb_translate ('Delete_empty_category'); ?> '<?php echo $C; ?>'."><?php echo LABEL_DELETE; ?></a></small>
				<?php } ?>
			<?php } ?>
		</li>
	<?php } ?>
	</ul>
	<hr class="line" />
	<small><a href="<?php echo REDIRECT . '/rss'; ?>">RSS 2.0 Feed</a></small>
</div>
<?php if (strlen ($_freelancer_content)) { ?><div id="freelancer"><?php echo $_freelancer_content; ?></div><?php } ?>
<div id="main">
<?php } ?>
	<?php echo $op; ?>
<?php if (! isset ($_GET['edit'])) { ?>
</div>
<?php if (strlen ($_bottom_content)) { ?><div id="bottom"><?php echo $_bottom_content; ?></div><?php } ?>
<div id="settings">
	<?php if (isset ($_SESSION['login']) && $_SESSION['login']) { ?>
		<?php echo minb_translate ('Logged_in_as'); ?> <em><?php echo $_SESSION['username']; ?></em> (<a href="<?php echo PHPSELF; ?>?logout" title="<?php echo minb_translate ('Logout'); ?>"><?php echo minb_translate ('Logout'); ?></a>)<br />
		<hr class="line" />
		<?php if (minb_get_categories ()) { ?><a href="<?php echo PHPSELF; ?>?edit=%new_entry%"><?php echo minb_translate ('New_posting'); ?></a><br /><?php } ?>
		<a href="<?php echo PHPSELF; ?>?edit=%new_article%"><?php echo minb_translate ('New_article'); ?></a>
		<p><a href="#" onclick="load('<?php echo PHPSELF; ?>?new_category', 'main'); return false;"><?php echo minb_translate ('New_category'); ?></a></p>
		<p><a href="#" onclick="load('<?php echo PHPSELF; ?>?settings', 'main'); return false;"><?php echo minb_translate ('Settings'); ?></a></p>
	<?php } ?>
</div>
<?php } ?>

</body>
</html>
<?php unset ($_SESSION['title'], $_SESSION['message'], $_style, $_top_content, $_bottom_content, $_freelancer_content); exit; ?>