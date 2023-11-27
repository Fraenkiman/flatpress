<?php
$lang = array();

$lang ['main'] = array(
	'nextpage' => 'Επόμενη σελίδα &raquo;',
	'prevpage' => '&laquo; Προηγούμενη σελίδα',
	'entry' => 'Καταχώρηση',
	'static' => 'Στατική σελίδα',
	'comment' => 'Σχόλιο',
	'preview' => 'Επεξεργασία/Προεπισκόπηση',
	
	'filed_under' => 'Καταχωρημένο στο ',	
	
	'add_entry' => 'Προσθήκη καταχώρησης',
	'add_comment' => 'Προσθήκη σχολίου',
	'add_static' => 'Προσθήκη στατικής σελίδας',
	
	'btn_edit' => 'Επεξεργασία',
	'btn_delete' => 'Διαγραφή',
	
	'nocomments' => 'Προσθήκη σχολίου',
	'comment' => '1 σχόλιο',
	'comments' => 'σχόλια'
);

$lang ['search'] = array(
	'head' => 'Αναζήτηση',
	'fset1'	=> 'Εισάγετε όρους αναζήτησης',
	'keywords' => 'Φράση',
	'onlytitles' => 'Μόνο τίτλοι',
	'fulltext' => 'Πλήρες κείμενο',
	
	'fset2'	=> 'Ημερομηνία',
	'datedescr'	=> 'Μπορείτε να περιορίσετε την αναζήτηση σας σε μια συγκεκριμένη ημερομηνία. Μπορείτε να επιλέξετε χρόνο, μήνα και χρόνο ή ολόκληρη ημερομηνία. ' . 'Αφήστε το κενό για αναζήτηση σε ολόκληρη τη βάση δεδομένων.',
	
	'fset3' => 'Αναζήτηση σε κατηγορίες',
	'catdescr' => 'Μην επιλέξετε καμία αν επιθυμείτε να ψάξει σε όλες',
	
	'fset4'	=> 'Ξεκινήστε την αναζήτηση',
	'submit' => 'Αναζήτηση',
	
	'headres' => 'Αποτελέσματα αναζήτησης',
	'descrres' => 'Η αναζήτηση για <strong>%s</strong> επέστρεψε τα εξής αποτελέσματα:',
	'descrnores'=> 'Η αναζήτηση για <strong>%s</strong> δεν επέστρεψε αποτελέσματα.',
	
	'moreopts' => 'Περισσότερες επιλογές',	
	'searchag' => 'Αναζήτηση ξανά'
);
	
$lang ['search']['error'] = array(

	'keywords' => 'Πρέπει να προσδιορίσετε τουλάχιστον μία λέξη κλειδί'
);

$lang ['staticauthor'] = array(
	// "Published by" in static pages
	'published_by' => 'Δημοσιεύθηκε από',
	'on' => 'on'
);

$lang ['entryauthor'] = array(
	// "Posted by" in entry pages
	'posted_by'	=> 'Δημοσιεύτηκε από τον',
	'at' => 'στις'
);

$lang ['entry'] = array();
$lang ['entry'] ['flags'] = array();
	
$lang ['entry'] ['flags'] ['long'] = array(
	'draft' => '<strong>Πρόχειρη καταχώρηση</strong>: κρυμένη, αναμένει δημοσίευση',
	//'static' => '<strong>Static entry</strong>: normally hidden, to reach the entry put ?page=title-of-the-entry in url (experimental)',
	'commslock' => '<strong>Κλείδωμα σχολίων</strong>: απενεργοποίηση σχολίων σε αυτή τη δημοσίευση'
);

$lang ['entry'] ['flags'] ['short'] = array(
	'draft' => 'Πρόχειρο',
	//'static' => 'Static',
	'commslock' => 'Κλειδωμένα σχόλια'
);

$lang ['entry'] ['categories'] = array(
	'unfiled' => 'Δεν έχει κατατεθεί'
);

$lang ['404error'] = array(
	'subject' => 'Δεν βρέθηκε',
	'content' => '<p>Λυπούμαστε, δεν μπορέσαμε να βρούμε την σελίδα που ζητήσατε</p>'
);
	
// Login
$lang ['login'] = array(
	'head' => 'Σύνδεση',
	'fieldset1'	=> 'Εισάγετε το όνομα χρήστη και τον κωδικό σας',
	'user' => 'Όνομα χρήστη:',
	'pass' => 'Κωδικός:',
	'fieldset2'	=> 'Σύνδεση',
	'submit' => 'Σύνδεση',
	'forgot' => 'Χαμένος κωδικός'
);

$lang ['login'] ['success'] = array(
	'success' => 'Συνδεθήκατε.',
	'logout' => 'Αποσυνδεθήκατε.',
	'redirect' => 'Θα ανακατευθυνθείτε σε 5 δευτερόλεπτα.',
	'opt1' => 'Πίσω στην αρχική',
	'opt2' => 'Πίνακας ελέγχου',
	'opt3' => 'Προσθήκη καταχώρησης'
);
	
$lang ['login'] ['error'] = array(
	'user' => 'Πρέπει να εισάγετε ένα όνομα χρήστη.',
	'pass' => 'Πρέπει να εισάγετε έναν κωδικό.',
	'match' => 'Λάθος κωδικός.'
);	

$lang ['comments'] = array(
	'head' => 'Προσθήκη σχολίου',
	'descr' => 'Συμπηρώστε την παρακάτω φόρμα για να προσθέσετε το σχόλιο σας',
	'fieldset1'	=> 'Στοιχεία χρήστη',
	'name' => 'Όνομα (*)',
	'email' => 'Ηλ. ταχυδρομείο:',
	'www' => 'Προσωπική σελίδα:',
	'cookie' => 'Να με θυμάσαι',
	'fieldset2'	=> 'Προσθέστε το σχόλιο σας',
	'comment' => 'Σχόλιο (*):',
	'fieldset3'	=> 'Αποστολή',
	'submit' => 'Προσθήκη',
	'reset' => 'Ακύρωση',
	'success' => 'Το σχόλιο σας προστέθηκε επιτυχώς',
	'nocomments' => 'Αυτή η δημοσίευση δεν έχει σχόλια ακόμη',
	'commslock'	=> 'Τα σχόλια έχουν απενεργοποιηθεί για αυτή τη δημοσίευση'
);

$lang ['comments'] ['error'] = array(
	'name' => 'Πρέπει να εισάγετε ένα όνομα',
	'email' => 'Πρέπει να εισάγετε μια ισχύουσα ηλεκτρονική διεύθυνση',
	'www' => 'Πρέπει να προσθέσετε μια ισχύουσα σελίδα',
	'comment' => 'Πρέπει να εισάγετε ένα σχόλιο'
);
	
$lang ['postviews'] = array(
	// PostView-Plugin
	'views' => 'προβολές'
);

$lang ['date'] ['month'] = array(		
	'Ιανουαρίου',
	'Φεβρουαρίου',
	'Μαρτίου',
	'Απριλίου',
	'Μαΐου',
	'Ιουνίου',
	'Ιουλίου',
	'Αυγούστου',
	'Σεπτεμβρίου',
	'Οκτωβρίου',
	'Νοεμβρίου',
	'Δεκεμβρίου'	
);

$lang ['date'] ['month_abbr'] = array(		
	'Jan',
	'Feb',
	'Mar',
	'Apr',
	'May',
	'Jun',
	'Jul',
	'Aug',
	'Sep',
	'Oct',
	'Nov',
	'Dec'	
);

$lang ['date'] ['weekday'] = array(	
	'Κυριακή',
	'Δευτέρα',
	'Τρίτη',
	'Τετάρτη',
	'Πέμπτη',
	'Παρασκευή',
	'Σαββάτο'
);

$lang ['date'] ['weekday_abbr'] = array(
	'Sun',
	'Mon',
	'Tue',
	'Wed',
	'Thu',
	'Fri',
	'Sat'
);
?>
