<?php
$lang ['admin'] ['config'] ['submenu'] ['fpprotect'] = 'FlatPress Protect';

$lang ['admin'] ['config'] ['fpprotect'] = array(
	'head' => 'FlatPress Instellingen Beschermen',
	'desc1' => 'Hier kun je de beveiligingsopties voor je FlatPress-blog wijzigen. ' . //
		'De beste bescherming voor je bezoekers en je FlatPress blog is wanneer alle opties zijn uitgeschakeld.',

	// Part for unsafe inline scripts
	'allow_unsafe_inline' => 'Sta onveilige Java-scripts toe (Niet aanbevolen)',

	'allowUnsafeInlineDsc' => '<p>Staat het laden van onveilige inline JavaScript-code toe.</p>' . //
		'<p><br>Opmerking voor plugin-ontwikkelaars: Voeg een nonce toe aan uw Java-script.</p>' . //
		'Een voorbeeld voor PHP:
		<pre>$random_hex = RANDOM_HEX;
' . //
		'... script nonce="\' . $random_hex . \'" src=" ...' . //
		'</pre>' . //
		'Een voorbeeld voor het Smarty-sjabloon:
		<pre>' . //
		'... script nonce="{$smarty.const.RANDOM_HEX}" ...' . //
		'</pre>' . //
		'<p>Dit zorgt ervoor dat de browser van de bezoeker alleen Java scripts uitvoert die afkomstig zijn van je FlatPress blog.</p>',

	// Part for the PrettyURLs .htaccess edit-field
	'allow_htaccess_edit' => 'Laat het aanmaken en bewerken van het .htaccess bestand toe.',
	'allowPrettyURLEditDsc' => 'Geeft toegang tot het .htaccess bewerkingsveld van de PrettyURLs plugin om het .htaccess bestand aan te maken of te wijzigen.',

	// Part for metadate in images after upload
	'allow_image_metadate' => 'Behoud metadata en originele afbeeldingskwaliteit in geüploade afbeeldingen.',
	'allowImageMetadataDsc' => 'Nadat afbeeldingen zijn geüpload met de uploader, worden de metagegevens bewaard. Dit omvat bijvoorbeeld camera-informatie en geocoördinaten.',

	// Part for the visitor-ip in FlatPress
	'allow_visitor_ip' => 'FlatPress toestaan het niet-geanonimiseerde IP-adres van de bezoeker te gebruiken.',
	'allowVisitorIpDsc' => 'FlatPress slaat het niet-geanonimiseerde IP-adres dan onder andere op in opmerkingen. ' . //
		'Als u de antispamdienst Akismet gebruikt, zal Akismet ook het niet-geanonimiseerde IP-adres ontvangen.',

	'submit' => 'Instellingen opslaan',
		'msgs' => array(
		1 => 'Instellingen succesvol opgeslagen.',
		-1 => 'Fout bij het opslaan van de instellingen.'
	),

	// Warning message
	'warning_allowUnsafeInline' => 'Waarschuwing: Content-Security-Policy -> Dit beleid bevat "unsafe-inline", wat gevaarlijk is in het script-src-policy.',
	'warning_allowVisitorIp' => 'Waarschuwing: Gebruik van niet-geanonimiseerde IP-adressen van de bezoeker -> Vergeet niet de <a href="static.php?page=privacy-policy" title="edit static page">bezoekers van uw FlatPress-blog</a> hierover te informeren!'
);
?>
