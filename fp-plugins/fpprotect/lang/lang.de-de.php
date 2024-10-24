<?php
$lang ['admin'] ['config'] ['submenu'] ['fpprotect'] = 'FlatPress Protect';

$lang ['admin'] ['config'] ['fpprotect'] = array(
	'head' => 'FlatPress Protect Einstellungen',
	'desc1' => 'Hier kannst du sicherheitsrelevante Optionen deines FlatPress-Blogs ändern.',

	// Part for unsafe inline scripts
	'allow_unsafe_inline' => 'Unsichere Java-Scripte zulassen (Nicht empfohlen)',

	'allowUnsafeInlineDsc' => '<p>Erlaubt das Laden von unsicherem Inline-JavaScript-Code.</p>' . //
		'<p><br>Hinweis an Plugin-Entwickler: Bitte statte dein Java-Skript mit einer Nonce aus.</p>' . //
		'Ein Beispiel für PHP:
		<pre>$random_hex = RANDOM_HEX;
' . //
		'... script nonce="\' . $random_hex . \'" src=" ...' . //
		'</pre>' . //
		'Ein Beispiel für das Smarty-Template:
		<pre>' . //
		'... script nonce="{$smarty.const.RANDOM_HEX}" ...' . //
		'</pre>' . //
		'<p>So wird sichergestellt, dass der Browser des Besuchers nur Java-Skripte ausführt, welche von deinem FlatPress-Blog stammen.</p>',

	// Part for the PrettyURLs .htaccess edit-field
	'allow_htaccess_edit' => 'Erlaube das Erstellen und Editieren der .htaccess Datei.',
	'allowPrettyURLEditDsc' => 'Erlaubt den Zugriff auf das .htaccess Bearbeitungsfeld des PrettyURLs-Plugins, um die .htaccess-Datei zu erstellen oder zu ändern.',

	'submit' => 'Einstellungen speichern',
		'msgs' => array(
		1 => 'Einstellungen erfolgreich gespeichert.',
		-1 => 'Fehler beim Speichern der Einstellungen.'
	)
);
?>
