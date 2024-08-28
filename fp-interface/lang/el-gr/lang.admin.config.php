<?php
$lang ['admin'] ['config'] ['default'] = array(
	'head' => 'Επιλογές',
	'descr' => 'Τροποποιήστε και ρυθμίστε την εγκατάσταση του FlatPress σας.',
	'submit' => 'Αποθήκευση αλλαγών',

	'sysfset' => 'Γενικές πληροφορίες συστήματος',
	'syswarning' => '<big>Προσοχή!</big> Αυτές οι πληροφορίες είναι σημαντικές και πρέπει να είναι σωστές, διαφορετικά το FlatPress (πιθανότατα) θα αρνηθεί  να δουλέψει σωστά.',
	'blog_root' => '<strong>Μονοπάτι προς το FlatPress</strong>. Σημείωση: ' . //
		'γενικά δεν χρειάζετε να το επεξεργαστείτε αυτό, παρόλα αυτά να είστε προσεκτικοί γιατί δεν μπορούμε να ελέγχξουμε αν είναι σωστό ή όχι.',
	'www' => '<strong>Βάση ιστολογίου</strong>. Η πλήρης διεύθυνση προς το ιστολόγιο, με τους υποκαταλόγους.<br>' . //
		'π.χ.: http://www.ησελίδαμου.com/flatpress/ (η κάθετος στο τέλος απαιτείται)',

	// ------
	'gensetts' => 'Γενικές ρυθμίσεις',
	'blogtitle' => 'Τίτλος ιστολογίου',
	'blogsubtitle' => 'Υπότιτλος ιστολογίου',
	'blogfooter' => 'Υποσέλιδο ιστολογίου',
	'blogauthor' => 'Συγγραφέας ιστολογίου',
	'startpage' => 'Η αρχική σελίδα αυτού του ιστότοπου είναι',
	'stdstartpage' => 'το ιστολόγιο μου (προεπιλογή)',
	'blogurl' => 'Διεύθυνση ιστολογίου',
	'blogemail' => 'Ηλ.ταχυδρομείο ιστολογίου',
	'notifications' => 'Ειδοποιήσεις',
	'mailnotify' => 'Ενεργοποίηση ειδοποιήσεων για νέα σχόλια',
	'blogmaxentries' => 'Αριθμός δημοσιεύσεων ανά σελίδα',
	'visitor_ip' => 'IP του επισκέπτη',
	'use_anonym_ip' => 'Η FlatPress θα πρέπει να ανωνυμοποιεί την IP του επισκέπτη',
	'langchoice' => 'Γλώσσα',

	'intsetts' => 'Ρυθμίσεις εντοπιότητας',
	'utctime' => '<abbr title="Universal Coordinated Time">Η UTC</abbr> ώρα είναι',
	'timeoffset' => 'Ο χρόνος θα πρέπει να διαφέρει κατά',
	'hours' => 'ώρες',
	'timeformat' => 'Προεπιλεγμένη μορφή ώρας',
	'dateformat' => 'Προεπιλεγμένη μορφή ημερομηνίας',
	'dateformatshort' => 'Προεπιλεγμένη μορφή ημερομηνίας (σύντομη)',
	'output' => 'Εμφάνιση',
	'charset' => 'Κωδικοποίηση',
	'charsettip' => 'Η κωδικοποίηση χαρακτήρων που θα χρησιμοποιήσετε στο ιστολόγιο (Η UTF-8 ' . //
		'<a class="hint" href="https://wiki.flatpress.org/doc:techfaq#character_encoding" target="_blank" title="Ποια πρότυπα κωδικοποίησης χαρακτήρων υποστηρίζονται από το FlatPress?">συνίσταται</a>).'
);

$lang ['admin'] ['config'] ['default'] ['msgs'] = array(
	1 => 'Οι ρυθμίσεις αποθηκεύτηκαν επιτυχώς.',
	-1 => 'Προέκυψε κάποιο σφάλμα κατά την αποθήκευση των ρυθμίσεων.'
);

$lang ['admin'] ['config'] ['default'] ['error'] = array(
	'www' => 'Η βάση του ιστολογίου  πρέπει να είναι μια ισχύουσα διεύθυνση',
	'title' => 'Πρέπει να ορίσετε έναν τίτλο',
	'email' => 'Το ηλ. ταχυδρομείο πρέπει να έχει μία ορθή μορφή',
	'maxentries' => 'Δεν ορίσατε έναν ορθό αριθμό καταχωρήσεων',
	'timeoffset' => 'Δεν ορίσατε μία ορθή διαφορά χρόνου! ' . //
		'Μπορείτε να χρησιμοποιήσετε υποδιαστολή (π.χ. 2h30" => 2.5)',
	'timeformat' => 'Πρέπει να εισάγετε ένα συμβολοσειρά μορφοποίησης για τον χρόνο',
	'dateformat' => 'Πρέπει να εισάγετε ένα συμβολοσειρά μορφοποίησης για την ημερομηνία',
	'dateformatshort' => 'Πρέπει να εισάγετε ένα συμβολοσειρά μορφοποίησης για την ημερομηνία (σύντομη)',
	'charset' => 'Πρέπει να εισάγετε μια κωδικοποίηση χαρακτήρων',
	'lang' => 'Η γλώσσα που επιλέξατε δεν είναι διαθέσιμη'
);
?>
