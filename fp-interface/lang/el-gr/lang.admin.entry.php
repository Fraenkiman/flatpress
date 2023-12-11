<?php
$lang ['admin'] ['entry'] ['submenu'] = array(
	'list' => 'Διαχείριση καταχωρήσεων',
	'write' => 'Δημιουργία καταχώρησης',
	'cats' => 'Διαχείριση κατηγοριών',
	'stats' => 'Στατιστική'
);

/* default action */
$lang ['admin'] ['entry'] ['list'] = array(
	'head' => 'Διαχείριση καταχωρήσεων',
	'descr' => 'Παρακαλώ επιλέξτε μια καταχώρηση για επεξεργασία ή <a href="admin.php?p=entry&amp;action=write">δημιουργήστε μια καινούρια</a><br>' . //
		'<a href="admin.php?p=entry&amp;action=cats">Επεξεργαστείτε τις κατηγορίες</a>',
	'drafts' => 'Σχέδια: ',
	'filter' => 'Φίλτρο: ',
	'nofilter' => 'Εμφάνιση όλων',
	'filterbtn' => 'Εφαρμογή φίλτρου',
	'sel' => 'Sel', // checkbox
	'date' => 'Ημερομηνία',
	'title' => 'Τίτλος',
	'author' => 'Συγγραφέας',
	'comms' => 'Σχόλια', // comments
	'action' => 'Δράση',
	'act_del' => 'Διαγραφή',
	'act_view' => 'Προβολή',
	'act_edit' => 'Επεξεργασία'
);

/* write action */
$lang ['admin'] ['entry'] ['write'] = array(
	'head' => 'Δημιουργία καταχώρησης',
	'descr' => 'Επεξεργαστείτε τη φόρμα για να δημιουργήσετε καταχώρηση',
	'uploader' => 'Ανέβασμα αρχείων',
	'fieldset1' => 'Επεξεργασία',
	'subject' => 'Θέμα (*):',
	'content' => 'Περιεχόμενο (*):',
	'fieldset2' => 'Υποβολή',
	'submit' => 'Δημοσίευση',
	'preview' => 'Προεπισκόπηση',
	'savecontinue' => 'Αποθήκευση &amp; Συνέχεια',
	'categories' => 'Κατηγορία',
	'nocategories' => 'Δεν ορίστηκε κατηγορία. <a href="admin.php?p=entry&amp;action=cats">Δημιουργήστε τη δικιά σας κατηγορίες</a> από τον πίνακα ελέγχου της καταχώρησης. ' . //
		'<a href="#save">Αποθηκεύστε</a> την καταχώρηση σας πρώτα.',
	'saveopts' => 'Επιλογές',
	'success' => 'Η καταχώρηση σας δημοσιεύθηκε επιτυχώς',
	'otheropts' => 'Άλλες επιλογές',
	'commmsg' => 'Διαχειριση σχολίων αυτής της καταχώρησης',
	'delmsg' => 'Διαγραφή αυτής της καταχώρησης'
	// 'back' => 'Back discarding changes',
);

$lang ['admin'] ['entry'] ['list'] ['msgs'] = array(
	1 => 'Η καταχώρηση έχει αποθηκευτεί επιτυχώς',
	-1 => 'Προέκυψε κάποιο σφάλμα κατά την αποθήκευση της καταχώρησης',
	2 => 'Η καταχώρηση έχει διαγραφεί επιτυχώς',
	-2 => 'Προέκυψε κάποιο σφάλμα κατά τη διαγραφή της καταχώρησης'
);

$lang ['admin'] ['entry'] ['write'] ['error'] = array(
	'subject' => 'Δεν μπορείτε να δημοσιεύσετε έναν κενό τίτλο',
	'content' => 'Δεν μπορείτε να δημοσιεύσετε μια κενή καταχώρηση'
);

$lang ['admin'] ['entry'] ['write'] ['msgs'] = array(
	1 => 'Η καταχώρηση έχει αποθηκευτεί επιτυχώς',
	-1 => 'Προέκυψε ένα σφάλμα: η καταχώρηση σας δεν μπόρεσε να αποθηκευτεί',
	-2 => 'Προέκυψε ένα σφάλμα: η καταχώρηση σας δεν αποθηκεύτηκε; η βάση δεδομένων ίσως έχει φθαρεί',
	-3 => 'Προέκυψε ένα σφάλμα: η καταχώρηση σας έχει αποθηκευτεί ως πρόχειρη',
	-4 => 'Προέκυψε ένα σφάλμα: η καταχώρηση σας έχει αποθηκευτεί ως πρόχειρη; η βάση δεδομένων ίσως έχει φθαρεί',
	'draft' => 'Επεξεργάζεστε μία <strong>πρόχειρη</strong> καταχώρηση'
);

/* comments */
$lang ['admin'] ['entry'] ['commentlist'] = array(
	'head' => 'Σχόλια σε αυτή τη καταχώρηση ',
	'descr' => 'Επιλέξτε ένα σχόλιο προς διαγραφή',
	'sel' => 'Sel',
	'content' => 'Περιεχόμενο',
	'date' => 'Ημερομηνία',
	'author' => 'Συντάκτης',
	'email' => 'Ηλ. ταχυδρομείο',
	'ip' => 'IP',
	'actions' => 'Δράσεις',
	'act_edit' => 'Επεξεργασία',
	'act_del' => 'Διαγραφή',
	'act_del_confirm' => 'Θέλετε σίγουρα να διαγράψετε αυτό το σχόλιο;',
	'nocomments' => 'Αυτή η καταχώρηση δεν έχει σχόλια ακόμη.'
);

$lang ['admin'] ['entry'] ['commentlist'] ['msgs'] = array(
	1 => 'Το σχόλιο έχει διαγραφεί επιτυχώς',
	-1 => 'Προέκυψε ένα σφάλμα κατά τη διαγραφή του σχολίου'
);

$lang ['admin'] ['entry'] ['commedit'] = array(
	'head' => 'Επεξεργαστείτε σχόλια σε αυτή την καταχώρηση',
	'content' => 'Περιεχόμενο',
	'date' => 'Ημερομηνία',
	'author' => 'Συντάκτης',
	'www' => 'Ιστοσελίδα',
	'email' => 'Ηλ. ταχυδρομείο',
	'ip' => 'IP',
	'loggedin' => 'Εγγεγραμμένος χρήστης',
	'submit' => 'Αποθήκευση'
);

$lang ['admin'] ['entry'] ['commedit'] ['msgs'] = array(
	1 => 'Το σχόλιο έχει επεξεργαστεί',
	-1 => 'Προέκυψε ένα σφάλμα κατά την επεξεργασία του σχολίου'
);

/* delete action */
$lang ['admin'] ['entry'] ['delete'] = array(
	'head' => 'Διαγραφή καταχώρησης',
	'descr' => 'Πρόκειται να διαγράψετε την ακόλουθη καταχώρηση:',
	'preview' => 'Προεπισκόπηση',
	'confirm' => 'Θέλετε σίγουρα να συνεχίσετε;',
	'fset' => 'Διαγραφή',
	'ok' => 'Ναι, διαγραφή της καταχώρησης',
	'cancel' => 'Όχι, επιστροφή στον πίνακα ελέγχου',
	'err' => 'Η συγεκριμένη καταχώρηση δεν υπάρχει'
);

/* category mgmt */
$lang ['admin'] ['entry'] ['cats'] = array(
	'head' => 'Επεξεργασία κατηγοριών',
	'descr' => '<p>Χρησιμοποιήστε την παρακάτω φόρμα για να προσθέσετε και να επεξεργαστείτε κατηγορίες.</p>' . //
		'<p>Κάθε κατηγορία θα πρέπει να έχει την εξής μορφή "όνομα κατηγορίας: <em>id_number</em>". Εσοχή στοιχεία με παύλες για τη δημιουργία ιεραρχιών.</p>
		
	<p>Παράδειγμα:</p>
	<pre>
Γενικά :1
Νέα :2
--Ανακοινώσεις :3
--Δραστηριότητες :4
----Διάφορα :5
Τεχνολογία :6
	</pre>',
	'clear' => 'Διαγραφή όλων των κατηγοριών',

	'fset1' => 'Επεξεργασία',
	'fset2' => 'Εφαρμογή αλλαγών',
	'submit' => 'Αποθήκευση'
);

$lang ['admin'] ['entry'] ['cats'] ['msgs'] = array(
	1 => 'Οι κατηγορίες αποθηκεύτηκαν',
	-1 => 'Προέκυψε κάποιο σφάλμα κατά την αποθήκευση των κατηγοριών',
	2 => 'Οι κατηγορίες διαγράφηκαν',
	-2 => 'Προέκυψε κάποιο σφάλμα κατά τη διαγραφή των κατηγοριών',
	-3 => 'Τα IDs των κατηγοριών πρέπει να είναι οπωσδήποτε θετικά (το 0 δεν επιτρέπεται)'
);

/* stats */
$lang ['admin'] ['entry'] ['stats'] = array(
	'head' => 'Στατιστική',
	'entries' => 'Ενδείξεις',
	'you_have' => 'Έχετε',
	'entries_using' => 'καταχωρήσεις με',
	'characters_in' => 'χαρακτήρες',
	'words' => 'λέξεις',
	'total_disk_space_is' => 'Ο συνολικός χώρος αποθήκευσης είναι',
	'comments' => 'Σχόλια',
	'comments_using' => 'σχόλια με',
	'the' => 'Οι',
	'most_commented_entries' => 'πιο σχολιασμένες αναρτήσεις'
);
?>
