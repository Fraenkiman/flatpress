<?php
$lang ['admin'] ['panel'] ['maintain'] = 'Verwaltung';

$lang ['admin'] ['maintain'] ['default'] = array(
	'head' => 'FlatPress-Wartung',
	'descr' => 'Dieses Menü bietet verschiedene Möglichkeiten für das FlatPress-Blog, um einige Dinge zu korrigieren oder einfach nur nach Updates zu suchen.',
	'opt0' => '&laquo; Zurück zur Wartung',
	'opt1' => 'Den FlatPress-Index neu erstellen',
	'opt2' => 'Den Theme- und Template-Cache leeren',
	'opt3' => 'Berechtigungen für den produktiven Betrieb wiederherstellen',
	'opt4' => 'Zeige PHP-Informationen des Webservers',
	'opt5' => 'Prüfe auf neue Versionen',

	'chmod_info' => 'Wenn die Berechtigungen <strong>nicht</strong> zurückgesetzt werden konnten, ist wahrscheinlich der Eigentümer der Datei/ des Verzeichnisses nicht derselbe wie der des Webservers.<br>' . //
		'
		<table>
			<thead>
				<tr>
					<th>Berechtigungen</th>
					<th>' . FP_CONTENT . '</th>
					<th>Kern</th>
					<th>alle anderen</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Dateien</td>
					<td>' . decoct(FILE_PERMISSIONS) . '</td>
					<td>' . decoct(CORE_FILE_PERMISSIONS) . '</td>
					<td>' . decoct(RESTRICTED_FILE_PERMISSIONS) . '</td>
				</tr>
				<tr>
					<td>Verzeichnisse</td>
					<td>' . decoct(DIR_PERMISSIONS) . '</td>
					<td>' . decoct(CORE_DIR_PERMISSIONS) . '</td>
					<td>' . decoct(RESTRICTED_DIR_PERMISSIONS) . '</td>
				</tr>
			</tbody>
		</table>
		',

	'opt3_success' => 'Alle Berechtigungen wurden erfolgreich aktualisiert.',
	'opt3_error' => 'Fehler beim Setzen der Berechtigungen:'
);

$lang ['admin'] ['maintain'] ['default'] ['msgs'] = array(
	1 => 'Aktion ausgeführt.',
	-1 => 'Aktion fehlgeschlagen.'
);

$lang ['admin'] ['maintain'] ['updates'] = array(
	'head' => 'Updates',
	'list' => '<ul>
		<li>Du hast die FlatPress-Version <big>%s</big></li>
		<li>Die letzte stabile FlatPress-Version ist <big><a href="%s">%s</a></big></li>
		<li>Letzte Entwicklungsversion von FlatPress ist <big><a href="%s">%s</a></big></li>
		</ul>',
	'notice' => 'Hinweis:'
);

$lang ['admin'] ['maintain'] ['updates'] ['msgs'] = array(
	1 => 'Es sind Updates verfügbar!',
	2 => 'Du benutzt bereits die aktuelle Version',
	-1 => 'Fehler: Es konnten keine Update-Informationen abgerufen werden'
);

?>