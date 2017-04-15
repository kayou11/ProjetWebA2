<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('el', array (
  'validators' => 
  array (
    'This value should be false.' => 'Αυτή η τιμή πρέπει να είναι ψευδής.',
    'This value should be true.' => 'Αυτή η τιμή πρέπει να είναι αληθής.',
    'This value should be of type {{ type }}.' => 'Αυτή η τιμή πρέπει να είναι τύπου {{ type }}.',
    'This value should be blank.' => 'Αυτή η τιμή πρέπει να είναι κενή.',
    'The value you selected is not a valid choice.' => 'Η τιμή που επιλέχθηκε δεν αντιστοιχεί σε έγκυρη επιλογή.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Πρέπει να επιλέξετε τουλάχιστον {{ limit }} επιλογή.|Πρέπει να επιλέξετε τουλάχιστον {{ limit }} επιλογές.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Πρέπει να επιλέξετε το πολύ {{ limit }} επιλογή.|Πρέπει να επιλέξετε το πολύ {{ limit }} επιλογές.',
    'One or more of the given values is invalid.' => 'Μια ή περισσότερες τιμές δεν είναι έγκυρες.',
    'This field was not expected.' => 'Αυτό το πεδίο δεν ήταν αναμενόμενο.',
    'This field is missing.' => 'Λείπει αυτό το πεδίο.',
    'This value is not a valid date.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία.',
    'This value is not a valid datetime.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία και ώρα.',
    'This value is not a valid email address.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρο email.',
    'The file could not be found.' => 'Το αρχείο δε μπορεί να βρεθεί.',
    'The file is not readable.' => 'Το αρχείο δεν είναι αναγνώσιμο.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο ({{ size }} {{ suffix }}). Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Ο τύπος mime του αρχείου δεν είναι έγκυρος ({{ type }}). Οι έγκρυοι τύποι mime είναι {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή λιγότερο.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή λιγότερο.|Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή λιγότερο.',
    'This value should be {{ limit }} or more.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή περισσότερο.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή περισσότερο.|Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή περισσότερο.',
    'This value should not be blank.' => 'Αυτή η τιμή δεν πρέπει να είναι κενή.',
    'This value should not be null.' => 'Αυτή η τιμή δεν πρέπει να είναι μηδενική.',
    'This value should be null.' => 'Αυτή η τιμή πρέπει να είναι μηδενική.',
    'This value is not valid.' => 'Αυτή η τιμή δεν είναι έκγυρη.',
    'This value is not a valid time.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρη ώρα.',
    'This value is not a valid URL.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρο URL.',
    'The two values should be equal.' => 'Οι δύο τιμές θα πρέπει να είναι ίδιες.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο. Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Το αρχείο είναι πολύ μεγάλο.',
    'The file could not be uploaded.' => 'Το αρχείο δε μπορεί να ανέβει.',
    'This value should be a valid number.' => 'Αυτή η τιμή θα πρέπει να είναι ένας έγκυρος αριθμός.',
    'This file is not a valid image.' => 'Το αρχείο δεν αποτελεί έγκυρη εικόνα.',
    'This is not a valid IP address.' => 'Αυτό δεν είναι μια έκγυρη διεύθυνση IP.',
    'This value is not a valid language.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έκγυρη γλώσσα.',
    'This value is not a valid locale.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έκγυρο κωδικό τοποθεσίας.',
    'This value is not a valid country.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έκγυρη χώρα.',
    'This value is already used.' => 'Αυτή η τιμή χρησιμοποιείται ήδη.',
    'The size of the image could not be detected.' => 'Το μέγεθος της εικόνας δεν ήταν δυνατό να ανιχνευθεί.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μεγάλο ({{ width }}px). Το μέγιστο επιτρεπτό πλάτος είναι {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μικρό ({{ width }}px). Το ελάχιστο επιτρεπτό πλάτος είναι {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μεγάλο ({{ height }}px). Το μέγιστο επιτρεπτό ύψος είναι {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μικρό ({{ height }}px). Το ελάχιστο επιτρεπτό ύψος είναι {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Αυτή η τιμή θα έπρεπε να είναι ο τρέχων κωδικός.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρα.|Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρες.',
    'The file was only partially uploaded.' => 'Το αρχείο δεν ανέβηκε ολόκληρο.',
    'No file was uploaded.' => 'Δεν ανέβηκε κανένα αρχείο.',
    'No temporary folder was configured in php.ini.' => 'Κανένας προσωρινός φάκελος δεν έχει ρυθμιστεί στο php.ini.',
    'Cannot write temporary file to disk.' => 'Αδυναμία εγγραφής προσωρινού αρχείου στο δίσκο.',
    'A PHP extension caused the upload to fail.' => 'Μια επέκταση PHP προκάλεσε αδυναμία ανεβάσματος.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείο ή περισσότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή περισσότερα.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείo ή λιγότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή λιγότερα.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχείo.|Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχεία.',
    'Invalid card number.' => 'Μη έγκυρος αριθμός κάρτας.',
    'Unsupported card type or invalid card number.' => 'Μη υποστηριζόμενος τύπος κάρτας ή μη έγκυρος αριθμός κάρτας.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Αυτό δεν αντιστοιχεί σε έκγυρο διεθνή αριθμό τραπεζικού λογαριασμού (IBAN).',
    'This value is not a valid ISBN-10.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Αυτό δεν είναι ούτε έγκυρος κωδικός ISBN-10 ούτε έγκυρος κωδικός ISBN-13.',
    'This value is not a valid ISSN.' => 'Αυτό δεν είναι έγκυρος κωδικός ISSN.',
    'This value is not a valid currency.' => 'Αυτό δεν αντιστοιχεί σε έγκυρο νόμισμα.',
    'This value should be equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη από {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη ή ίση με {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη από {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη ή ίση με {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Αυτή η τιμή δεν θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή δεν πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Αυτή η φόρμα δεν πρέπει να περιέχει επιπλέον πεδία.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Το αρχείο είναι πολύ μεγάλο. Παρακαλούμε προσπαθήστε να ανεβάσετε ένα μικρότερο αρχείο.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Το CSRF token δεν είναι έγκυρο. Παρακαλούμε δοκιμάστε να υποβάλετε τη φόρμα ξανά.',
    'sylius.promotion_coupon.code.not_blank' => 'Παρακαλώ εισάγετε το κωδικό κουπονιού.',
    'sylius.address.city.max_length' => 'Η Πόλη δεν πρέπει να υπερβαίνει τους 255 characters|Η Πόλη δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.',
    'sylius.address.city.min_length' => 'Η Πόλη πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες|Η Πόλη πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες.',
    'sylius.address.city.not_blank' => 'Παρακαλούμε εισάγετε την πόλη.',
    'sylius.address.country.not_blank' => 'Παρακαλώ επιλέξτε τη χώρα.',
    'sylius.address.first_name.max_length' => 'Το Όνομα δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες|Το Όνομα δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.',
    'sylius.address.first_name.min_length' => 'Το Όνομα πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες|Το Όνομα πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες.',
    'sylius.address.first_name.not_blank' => 'Παρακαλούμε εισάγετε το όνομα.',
    'sylius.address.last_name.max_length' => 'Το Επώνυμο δεν πρέπει να υπερβαίνει τους 255 characters|Το Επώνυμο δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.',
    'sylius.address.last_name.min_length' => 'Το Επώνυμο πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες|Το Επώνυμο πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες.',
    'sylius.address.last_name.not_blank' => 'Παρακαλούμε εισάγετε το επώνυμο.',
    'sylius.address.postcode.max_length' => 'Ο Ταχυδρομικός κώδικας δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες|Ο Ταχυδρομικός κώδικας δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.',
    'sylius.address.postcode.min_length' => 'Ο Ταχυδρομικός κώδικας πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες|Ο Ταχυδρομικός κώδικας πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες.',
    'sylius.address.postcode.not_blank' => 'Παρακαλούμε εισάγετε τον ταχυδρομικό κώδικα.',
    'sylius.address.province.valid' => 'Παρακαλώ επιλέξτε την σωστή επαρχία.',
    'sylius.address.street.max_length' => 'Η Οδός δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες|Η Οδός δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.',
    'sylius.address.street.min_length' => 'Η Οδός πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες|Η Οδός πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες.',
    'sylius.address.street.not_blank' => 'Παρακαλούμε εισάγετε την οδό.',
    'sylius.province.name.max_length' => 'Η ονομασία της Επαρχίας δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες|Η ονομασία της Επαρχίας δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.',
    'sylius.province.name.min_length' => 'Η ονομασίας της Επαρχίας πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες|Η ονομασίας της Επαρχίας πρέπει να έχει μήκος τουλάχιστον 2 χαρακτήρες.',
    'sylius.province.name.not_blank' => 'Παρακαλούμε εισάγετε την ονομασία της επαρχίας.',
    'sylius.zone.members.min_count' => 'Παρακαλώ προσθέστε τουλάχιστον {{ limit }} μέλη ζώνης.',
    'sylius.zone.name.max_length' => 'Η ονομασία της Ζώνης δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες|Η ονομασία της Ζώνης δεν πρέπει να υπερβαίνει τους 255 χαρακτήρες.',
    'sylius.zone.name.not_blank' => 'Παρακαλούμε εισάγετε την ονομασία της ζώνης.',
    'sylius.customer.first_name.not_blank' => 'Παρακαλώ εισάγετε το όνομά σας.',
    'sylius.customer.last_name.not_blank' => 'Παρακαλούμε εισάγετε το επώνυμό σας.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Συνέβη ένα σφάλμα πιστοποίησης.',
    'Authentication credentials could not be found.' => 'Τα στοιχεία πιστοποίησης δε βρέθηκαν.',
    'Authentication request could not be processed due to a system problem.' => 'Το αίτημα πιστοποίησης δε μπορεί να επεξεργαστεί λόγω σφάλματος του συστήματος.',
    'Invalid credentials.' => 'Λανθασμένα στοιχεία σύνδεσης.',
    'Cookie has already been used by someone else.' => 'Το Cookie έχει ήδη χρησιμοποιηθεί από κάποιον άλλο.',
    'Not privileged to request the resource.' => 'Δεν είστε εξουσιοδοτημένος για πρόσβαση στο συγκεκριμένο περιεχόμενο.',
    'Invalid CSRF token.' => 'Μη έγκυρο CSRF token.',
    'Digest nonce has expired.' => 'Το digest nonce έχει λήξει.',
    'No authentication provider found to support the authentication token.' => 'Δε βρέθηκε κάποιος πάροχος πιστοποίησης που να υποστηρίζει το token πιστοποίησης.',
    'No session available, it either timed out or cookies are not enabled.' => 'Δεν υπάρχει ενεργή σύνοδος (session), είτε έχει λήξει ή τα cookies δεν είναι ενεργοποιημένα.',
    'No token could be found.' => 'Δεν ήταν δυνατόν να βρεθεί κάποιο token.',
    'Username could not be found.' => 'Το Username δε βρέθηκε.',
    'Account has expired.' => 'Ο λογαριασμός έχει λήξει.',
    'Credentials have expired.' => 'Τα στοιχεία σύνδεσης έχουν λήξει.',
    'Account is disabled.' => 'Ο λογαριασμός είναι απενεργοποιημένος.',
    'Account is locked.' => 'Ο λογαριασμός είναι κλειδωμένος.',
  ),
  'messages' => 
  array (
    'sylius.form.currency.code' => 'Ονομασία',
    'sylius.form.currency.enabled' => 'Ενεργοποιημένο',
    'sylius.form.locale.name' => 'Ονομασία',
    'sylius.form.product.name' => 'Ονομασία',
    'sylius.form.product.description' => 'Περιγραφή',
    'sylius.form.product.options' => 'Επιλογές',
    'sylius.form.product.meta_keywords' => 'Μετα-λέξεις-κλειδιά',
    'sylius.form.product.meta_description' => 'Μετα-περιγραφή',
    'sylius.form.product_variant.name' => 'Ονομασία',
    'sylius.form.association_type.name' => 'Ονομασία',
    'sylius.form.variant.name' => 'Ονομασία',
    'sylius.form.option.name' => 'Ονομασία',
    'sylius.form.channel.description' => 'Περιγραφή',
    'sylius.form.channel.enabled' => 'Ενεργοποιημένο',
    'sylius.form.channel.name' => 'Ονομασία',
    'sylius.form.attribute.code' => 'Κώδικος',
    'sylius.form.attribute.name' => 'Ονομασία',
    'sylius.form.attribute.type' => 'Τύπος',
    'sylius.form.attribute_type.configuration' => 'Παραμετροποίηση',
    'sylius.form.attribute_type.select' => 'Επιλέξτε',
    'sylius.form.tax_category.name' => 'Ονομασία',
    'sylius.form.tax_category.description' => 'Περιγραφή',
    'sylius.form.tax_rate.category' => 'Κατηγορία',
    'sylius.form.tax_rate.name' => 'Ονομασία',
    'sylius.form.rule.unit_count_configuration.count' => 'Πλήθος',
    'sylius.form.shipment.state' => 'Νομός',
    'sylius.form.shipment.states.checkout' => 'Ολοκλήρωση αγορών',
    'sylius.form.shipment.states.pending' => 'Σε εκκρεμότητα',
    'sylius.form.shipment.states.ready' => 'Έτοιμα',
    'sylius.form.shipment.states.shipped' => 'Αποστάλθηκαν',
    'sylius.form.shipment.states.returned' => 'Επεστράφησαν',
    'sylius.form.shipment.tracking_code' => 'Κωδικός παρακολούθησης',
    'sylius.form.shipping_category.description' => 'Περιγραφή',
    'sylius.form.shipping_category.name' => 'Ονομασία',
    'sylius.form.shipping_method.category' => 'Κατηγορία',
    'sylius.form.shipping_method.configuration' => 'Παραμετροποίηση',
    'sylius.form.shipping_method.description' => 'Περιγραφή',
    'sylius.form.shipping_method.enabled' => 'Ενεργοποιημένο',
    'sylius.form.shipping_method.name' => 'Ονομασία',
    'sylius.form.shipping_method.tax_category' => 'Φορολογική κατηγορία',
    'sylius.form.credit_card.cardholder_name' => 'Όνομα κατόχου της κάρτας',
    'sylius.form.credit_card.number' => 'Αριθμός κάρτας',
    'sylius.form.credit_card.type' => 'Τύπος κάρτας',
    'sylius.form.payment.amount' => 'Ποσό πληρωμής',
    'sylius.form.payment.method' => 'Τρόπος πληρωμής',
    'sylius.form.payment.state.header' => 'Κατάσταση πληρωμής',
    'sylius.form.payment.state.checkout' => 'Ολοκλήρωση αγορών',
    'sylius.form.payment.state.pending' => 'Σε εκκρεμότητα',
    'sylius.form.payment.state.processing' => 'Σε εξέλιξη',
    'sylius.form.payment.state.unknown' => 'Άγνωστο',
    'sylius.form.payment_method.description' => 'Περιγραφή',
    'sylius.form.payment_method.name' => 'Ονομασία',
    'sylius.form.promotion.actions' => 'Ενέργειες',
    'sylius.form.promotion.description' => 'Περιγραφή',
    'sylius.form.promotion.ends_at' => 'Τελειώνει σε',
    'sylius.form.promotion.name' => 'Ονομασία',
    'sylius.form.promotion.rules' => 'Κανόνες',
    'sylius.form.promotion.starts_at' => 'Αρχίζει με',
    'sylius.form.promotion.usage_limit' => 'Όριο χρήσης',
    'sylius.form.promotion_action.type' => 'Τύπος',
    'sylius.form.promotion_coupon.usage_limit' => 'Όριο χρήσης',
    'sylius.form.promotion_coupon_generator_instruction.usage_limit' => 'Όριο χρήσης',
    'sylius.form.promotion_rule.cart_quantity_configuration.count' => 'Πλήθος',
    'sylius.form.promotion_rule.shipping_country_configuration.country' => 'Χώρα',
    'sylius.form.promotion_rule.type' => 'Τύπος',
    'sylius.form.address.city' => 'Πόλη',
    'sylius.form.address.company' => 'Εταιρεία',
    'sylius.form.address.country' => 'Χώρα',
    'sylius.form.address.first_name' => 'Όνομα',
    'sylius.form.address.last_name' => 'Επώνυμο',
    'sylius.form.address.phone_number' => 'Αριθμός τηλεφώνου',
    'sylius.form.address.postcode' => 'Ταχ. Κώδικας',
    'sylius.form.address.street' => 'Οδός',
    'sylius.form.address.province' => 'Επαρχία',
    'sylius.form.address.zone' => 'Ζώνη',
    'sylius.form.country.add_province' => 'Προσθήκη επαρχίας',
    'sylius.form.country.name' => 'Ονομασία',
    'sylius.form.country.provinces' => 'Επαρχίες',
    'sylius.form.country.select' => 'Επιλέξτε',
    'sylius.form.country.enabled' => 'Ενεργοποιημένο',
    'sylius.form.province.name' => 'Ονομασία',
    'sylius.form.province.abbreviation' => 'Συντομογραφία',
    'sylius.form.province.select' => 'Επιλέξτε',
    'sylius.form.zone.add_member' => 'Προσθήκη μέλους',
    'sylius.form.zone.members' => 'Μέλη',
    'sylius.form.zone.name' => 'Ονομασία',
    'sylius.form.zone.type' => 'Τύπος',
    'sylius.form.zone.types.country' => 'Χώρα',
    'sylius.form.zone.types.province' => 'Επαρχία',
    'sylius.form.zone.types.zone' => 'Ζώνη',
    'sylius.form.zone.scope' => 'Πεδίο εφαρμογής',
    'sylius.form.zone.scopes.all' => 'Όλα',
    'sylius.form.zone.select' => 'Επιλέξτε',
    'sylius.form.zone.select_scope' => 'Επιλέξτε πεδίο',
    'sylius.form.zone_member.select' => 'Επιλέξτε',
    'sylius.form.taxon.description' => 'Περιγραφή',
    'sylius.form.taxon.name' => 'Ονομασία',
    'sylius.form.taxonomy.name' => 'Ονομασία',
    'sylius.form.user.email' => 'Ηλεκτρονικό ταχυδρομείο',
    'sylius.form.user.enabled' => 'Ενεργοποιημένο',
    'sylius.form.user.password.label' => 'Κωδικός πρόσβασης',
    'sylius.form.user.shipping_address' => 'Διεύθυνση αποστολής',
    'sylius.form.user.username' => 'Όνομα χρήστη',
    'sylius.form.user_filter.query' => 'Αναζήτηση',
    'sylius.form.customer.first_name' => 'Όνομα',
    'sylius.form.customer.last_name' => 'Επώνυμο',
    'sylius.form.customer.email' => 'Ηλεκτρονικό ταχυδρομείο',
    'sylius.form.customer.phone_number' => 'Αριθμός τηλεφώνου',
    'sylius.form.customer.billing_address' => 'Διεύθυνση τιμολόγησης',
    'sylius.form.customer.different_billing_address' => 'Να γίνει χρήση διαφορετικής διεύθυνσης για τιμολόγηση;',
    'sylius.form.customer_group.name' => 'Ονομασία',
    'sylius.form.customer_group.roles' => 'Ρόλοι',
    'sylius.gender.unknown' => 'Άγνωστο',
    'sylius.form.login.username' => 'Όνομα χρήστη',
    'sylius.form.login.password' => 'Κωδικός πρόσβασης',
    'sylius.ui.actions' => 'Ενέργειες',
    'sylius.ui.add_member' => 'Προσθήκη μέλους',
    'sylius.ui.add_province' => 'Προσθήκη επαρχίας',
    'sylius.ui.add_to_cart' => 'Προσθήκη στο καλάθι',
    'sylius.ui.available_on' => 'Διαθέσιμο την',
    'sylius.ui.back' => 'Επιστροφή',
    'sylius.ui.billing_address' => 'Διεύθυνση τιμολόγησης',
    'sylius.ui.blocks' => 'Μπλοκ',
    'sylius.ui.cancel' => 'Άκυρο',
    'sylius.ui.categorization' => 'Κατηγοριοποίηση',
    'sylius.ui.category' => 'Κατηγορία',
    'sylius.ui.checkout' => 'Ολοκλήρωση αγορών',
    'sylius.ui.choose_file' => 'Επιλογή αρχείου',
    'sylius.ui.city' => 'Πόλη',
    'sylius.ui.clear_cart' => 'Καθαρισμός καλαθιού',
    'sylius.ui.code' => 'Κώδικος',
    'sylius.ui.company' => 'Εταιρεία',
    'sylius.ui.configuration' => 'Παραμετροποίηση',
    'sylius.ui.countries' => 'Χώρες',
    'sylius.ui.country' => 'Χώρα',
    'sylius.ui.country_details' => 'Λεπτομέρειες χώρας',
    'sylius.ui.coupon' => 'Κουπόνι',
    'sylius.ui.create' => 'Δημιουργία',
    'sylius.ui.create_country' => 'Δημιουργία χώρας',
    'sylius.ui.create_order' => 'Δημιουργία παραγγελίας',
    'sylius.ui.create_product' => 'Δημιουργία προϊόντος',
    'sylius.ui.create_zone' => 'Δημιουργία ζώνης',
    'sylius.ui.created_at' => 'Δημιουργήθηκε',
    'sylius.ui.creation_time' => 'Δημιουργήθηκε την',
    'sylius.ui.currency' => 'Νόμισμα',
    'sylius.ui.current_orders' => 'Τρέχουσες παραγγελίες',
    'sylius.ui.current_stock' => 'Τρέχων απόθεμα',
    'sylius.ui.description' => 'Περιγραφή',
    'sylius.ui.editing_country' => 'Επεξεργασία χώρας',
    'sylius.ui.editing_zone' => 'Επεξεργασία ζώνης',
    'sylius.ui.email' => 'Ηλεκτρονικό ταχυδρομείο',
    'sylius.ui.enabled' => 'Ενεργοποιημένο',
    'sylius.ui.ends_at' => 'Τελειώνει σε',
    'sylius.ui.error' => 'Σφάλμα',
    'sylius.ui.existing_customer' => 'Υφιστάμενος Πελάτης',
    'sylius.ui.first_name' => 'Όνομα',
    'sylius.ui.from' => 'Από',
    'sylius.ui.gateway' => 'Πύλη',
    'sylius.ui.general_settings' => 'Γενικές ρυθμίσεις',
    'sylius.ui.generate' => 'Δημιουργία',
    'sylius.ui.grand_total' => 'Γενικό σύνολο',
    'sylius.ui.home' => 'Αρχική',
    'sylius.ui.id' => 'ID',
    'sylius.ui.image' => 'Εικόνα',
    'sylius.ui.images' => 'Εικόνες',
    'sylius.ui.information' => 'Πληροφορίες',
    'sylius.ui.inventory_state' => 'Κατάσταση απογραφής',
    'sylius.ui.items_total' => 'Σύνολο στοιχείων',
    'sylius.ui.last_name' => 'Επώνυμο',
    'sylius.ui.last_update' => 'Τροποποιήθηκε την',
    'sylius.ui.lastname' => 'Επώνυμο',
    'sylius.ui.manage' => 'Διαχείριση',
    'sylius.ui.manage_countries' => 'Διαχείριση χωρών',
    'sylius.ui.manage_options' => 'Διαχείριση επιλογών',
    'sylius.ui.manage_shipments' => 'Διαχείριση αποστολών',
    'sylius.ui.manage_tax_rates' => 'Διαχείριση φορολόγισης',
    'sylius.ui.manage_zones' => 'Διαχείριση ζωνών',
    'sylius.ui.members' => 'Μέλη',
    'sylius.ui.method' => 'τρόπος',
    'sylius.ui.name' => 'Ονομασία',
    'sylius.ui.new_country' => 'Νέα χώρα',
    'sylius.ui.new_order' => 'Νεα παραγγελία',
    'sylius.ui.new_product' => 'Νεο προϊόν',
    'sylius.ui.new_zone' => 'Νεα ζώνη',
    'sylius.ui.newest_products' => 'Νεότερα προϊόντα',
    'sylius.ui.next' => 'Επόμενο',
    'sylius.ui.no_promotion' => 'Δεν έχει εφαρμοστεί προώθηση',
    'sylius.ui.no_shipping_charges' => 'Δεν έχουν εφαρμοστεί έξοδα αποστολής',
    'sylius.ui.no_taxes' => 'Δεν έχουν εφαρμοστεί φόροι',
    'sylius.ui.number' => 'Αριθμός',
    'sylius.ui.options' => 'Επιλογές',
    'sylius.ui.order' => 'παραγγελία',
    'sylius.ui.order_summary' => 'Σύνοψη παραγγελίας',
    'sylius.ui.orders' => 'Παραγγελίες',
    'sylius.ui.pages' => 'Σελίδες',
    'sylius.ui.password' => 'Κωδικός πρόσβασης',
    'sylius.ui.payment_method' => 'Τρόπος πληρωμής',
    'sylius.ui.payment_methods' => 'Τρόποι πληρωμής',
    'sylius.ui.payment_state' => 'Κατάσταση πληρωμής',
    'sylius.ui.payments' => 'Πληρωμές',
    'sylius.ui.pending' => 'Σε εκκρεμότητα',
    'sylius.ui.phone_number' => 'Αριθμός τηλεφώνου',
    'sylius.ui.place_order' => 'Παραγγελία',
    'sylius.ui.postcode' => 'Ταχ. Κώδικας',
    'sylius.ui.presentation' => 'Παρουσίαση',
    'sylius.ui.price' => 'Τιμή',
    'sylius.ui.processing' => 'Σε εξέλιξη',
    'sylius.ui.product' => 'Προϊόν',
    'sylius.ui.promotion_total' => 'Σύνολο προώθησης',
    'sylius.ui.promotions' => 'Προσφορές',
    'sylius.ui.province' => 'Επαρχία',
    'sylius.ui.provinces' => 'Επαρχίες',
    'sylius.ui.qty' => 'Ποσότητα',
    'sylius.ui.quantity' => 'Ποσότητα',
    'sylius.ui.ready' => 'Έτοιμα',
    'sylius.ui.retail_price' => 'Τιμή',
    'sylius.ui.returned' => 'Επεστράφησαν',
    'sylius.ui.roles' => 'Ρόλοι',
    'sylius.ui.rules' => 'Κανόνες',
    'sylius.ui.save' => 'Αποθήκευση',
    'sylius.ui.save_changes' => 'Αποθήκευση αλλαγών',
    'sylius.ui.scope' => 'Πεδίο εφαρμογής',
    'sylius.ui.search' => 'Αναζήτηση',
    'sylius.ui.shipments' => 'Αποστολές',
    'sylius.ui.shipped' => 'Αποστάλθηκαν',
    'sylius.ui.shipping_address' => 'Διεύθυνση αποστολής',
    'sylius.ui.shipping_category' => 'Κατηγορία αποστολής',
    'sylius.ui.shipping_charges' => 'Έξοδα αποστολής',
    'sylius.ui.shipping_method' => 'Τρόπος αποστολής',
    'sylius.ui.shipping_state' => 'Κατάσταση μεταφορικών',
    'sylius.ui.shipping_total' => 'Σύνολο εξόδων αποστολής',
    'sylius.ui.sign_in_to_the_store_or_create_new_account' => 'Είσοδος στο κατάστημα <small>ή να δημιουργήσετε νέο λογαριασμό</small>',
    'sylius.ui.sku' => 'ΚΩΔΙΚΟΣ ΠΡΟΪΟΝΤΟΣ',
    'sylius.ui.starts_at' => 'Αρχίζει με',
    'sylius.ui.state' => 'Νομός',
    'sylius.ui.street' => 'Οδός',
    'sylius.ui.success' => 'Επιτυχία',
    'sylius.ui.tax_category' => 'Φορολογική κατηγορία',
    'sylius.ui.tax_rates' => 'Φορολογικοί συντελεστές',
    'sylius.ui.tax_total' => 'Σύνολο φόρων',
    'sylius.ui.taxes' => 'Φόροι',
    'sylius.ui.title' => 'Τίτλος',
    'sylius.ui.to' => 'Προς',
    'sylius.ui.total' => 'Σύνολο',
    'sylius.ui.type' => 'Τύπος',
    'sylius.ui.unit_price' => 'Τιμή μονάδας',
    'sylius.ui.unknown' => 'Άγνωστο',
    'sylius.ui.usage_limit' => 'Όριο χρήσης',
    'sylius.ui.username' => 'Όνομα χρήστη',
    'sylius.ui.variant' => 'Παραλλαγή',
    'sylius.ui.variant_selection_method' => 'Μέθοδος επιλογής παραλλαγής',
    'sylius.ui.warning' => 'Προειδοποίηση',
    'sylius.ui.your_cart_is_empty' => 'Το καλάθι είναι άδειο',
    'sylius.ui.zone' => 'Ζώνη',
    'sylius.ui.zone_details' => 'Λεπτομέρειες ζώνης',
    'sylius.ui.zones' => 'Ζώνες',
    'sylius.form.review.title' => 'Τίτλος',
    'sylius.form.block.id' => 'ID',
    'sylius.form.block.title' => 'Τίτλος',
    'sylius.form.cart.coupon' => 'Κουπόνι',
    'sylius.form.checkout.addressing.different_billing_address' => 'Να γίνει χρήση διαφορετικής διεύθυνσης για τιμολόγηση;',
    'sylius.form.checkout.payment_method' => 'Τρόπος Πληρωμής',
    'sylius.form.checkout.shipping_method' => 'Τρόπος Αποστολης',
    'sylius.form.promotion_action.add_product_configuration.product' => 'Προϊόν',
    'sylius.form.group.name' => 'Ονομασία',
    'sylius.form.group.roles' => 'Ρόλοι',
    'sylius.form.channel.tax_zone_default' => 'Προεπιλεγμένη φορολογική ζώνη',
    'sylius.form.image.type' => 'Τύπος',
    'sylius.form.image.file' => 'Εικόνα',
    'sylius.form.locale.code' => 'Κώδικος',
    'sylius.form.locale.enabled' => 'Ενεργοποιημένο',
    'sylius.form.order_filter.number' => 'Αριθμός',
    'sylius.form.order_filter.total_from' => 'Από',
    'sylius.form.order_filter.total_to' => 'Προς',
    'sylius.form.order_filter.payment_state' => 'Κατάσταση πληρωμής',
    'sylius.form.page.id' => 'ID',
    'sylius.form.page.title' => 'Τίτλος',
    'sylius.form.product.images' => 'Εικόνες',
    'sylius.form.product.restricted_zone' => 'Απαγορευμένη ζώνη',
    'sylius.form.product.short_description' => 'Σύντομη περιγραφή',
    'sylius.form.product.variant_selection_method' => 'Μέθοδος επιλογής παραλλαγής',
    'sylius.form.product.enabled' => 'Ενεργοποιημένο',
    'sylius.form.product_filter.name' => 'Ονομασία',
    'sylius.form.product_filter.code' => 'Κώδικος',
    'sylius.form.product_variant.tax_category' => 'Φορολογική κατηγορία',
    'sylius.form.product_variant.shipping_category' => 'Κατηγορία αποστολής',
    'sylius.form.shipment_filter.created_at_from' => 'Από',
    'sylius.form.shipment_filter.created_at_to' => 'Προς',
    'sylius.form.shipment_filter.number' => 'Αριθμός Παραγγελίας',
    'sylius.form.shipment_filter.shipping_address' => 'Αποστολή στο όνομα',
    'sylius.form.payment_filter.created_at_from' => 'Από',
    'sylius.form.payment_filter.created_at_to' => 'Προς',
    'sylius.form.payment_filter.number' => 'Αριθμός Παραγγελίας',
    'sylius.form.shipping_method.zone' => 'Ζώνη',
    'sylius.form.taxon.code' => 'Κώδικος',
    'sylius.form.taxon.file' => 'Επιλέξτε εικόνα',
    'sylius.form.taxon.images' => 'Εικόνες',
    'sylius.form.taxonomy.file' => 'Επιλέξτε εικόνα',
    'sylius.form.user.billing_address' => 'Διεύθυνση τιμολόγησης',
    'sylius.form.user.different_billing_address' => 'Να γίνει χρήση διαφορετικής διεύθυνσης για τιμολόγηση;',
    'sylius.form.user.first_name' => 'Όνομα',
    'sylius.form.user.groups' => 'Ομάδες',
    'sylius.form.user.roles' => 'Ρόλοι',
    'sylius.form.user.last_name' => 'Επώνυμο',
    'sylius.form.user.password' => 'Κωδικός πρόσβασης',
    'sylius.form.variant.depth' => 'Βάθος',
    'sylius.form.variant.height' => 'Ύψος',
    'sylius.form.variant.on_hand' => 'Τρέχων απόθεμα',
    'sylius.form.variant.price' => 'Τιμή',
    'sylius.form.variant.sku' => 'ΚΩΔΙΚΟΣ ΠΡΟΪΟΝΤΟΣ',
    'sylius.form.variant.weight' => 'Βάρος',
    'sylius.form.variant.width' => 'Πλάτος',
    'sylius.form.guest.email' => 'Ηλεκτρονικό ταχυδρομείο',
    'sylius.form.product_association_type.name' => 'Ονομασία',
    'sylius.installer.extensions.apc' => 'APC',
    'sylius.installer.extensions.ctype' => 'Ctype',
    'sylius.installer.extensions.gd' => 'GD',
    'sylius.installer.extensions.json_encode' => 'JSON',
    'sylius.installer.extensions.off' => false,
    'sylius.installer.extensions.on' => true,
    'sylius.installer.extensions.pcre' => 'PCRE',
    'sylius.installer.extensions.pdo' => 'PDO',
    'sylius.installer.extensions.php_xml' => 'PHP-XML',
    'sylius.installer.extensions.session_start' => 'Συνεδρία',
    'sylius.installer.extensions.simplexml_import_dom' => 'SimpleXML',
    'sylius.installer.filesystem.exists' => 'υπάρχει',
    'sylius.installer.filesystem.not_exists' => 'δεν υπάρχει',
    'sylius.installer.filesystem.not_writable' => 'χωρίς δυνατότητα εγγραφής',
    'sylius.installer.filesystem.writable' => 'εγγράψιμο',
    'sylius.installer.settings.detect_unicode' => 'detect_unicode',
    'sylius.installer.settings.magic_quotes_gpc' => 'magic_quotes_gpc',
    'sylius.installer.settings.non_deprecated' => 'μη παρωχημένο',
    'sylius.installer.settings.off' => false,
    'sylius.installer.settings.on' => true,
    'sylius.installer.settings.register_globals' => 'register_globals',
    'sylius.installer.settings.session.auto_start' => 'session.auto_start',
    'sylius.installer.settings.short_open_tag' => 'short_open_tag',
    'sylius.installer.settings.timezone' => 'ζώνη ώρας',
    'sylius.installer.settings.timezone_deprecated.help' => 'Η Ζώνη ώρας %timezone% δεν χρησιμοποιείται. Διορθώσετε το αρχείο php.ini σας (λίστα με μη χρησιμοποιούμενες ζώνες ώρας εδώ http://php.net/manual/en/timezones.others.php).',
    'sylius.installer.settings.version' => 'Έκδοση PHP',
    'sylius.form.gateway_config.type' => 'Τύπος',
    'sylius.form.gateway_configuration.paypal.password' => 'Κωδικός πρόσβασης',
    'sylius.form.gateway_configuration.paypal.username' => 'Όνομα χρήστη',
    'sylius.menu.admin.main.catalog.options' => 'Επιλογές',
    'sylius.menu.admin.main.configuration.countries' => 'Χώρες',
    'sylius.menu.admin.main.configuration.header' => 'Παραμετροποίηση',
    'sylius.menu.admin.main.configuration.payment_methods' => 'Τρόποι πληρωμής',
    'sylius.menu.admin.main.configuration.tax_rates' => 'Φορολογικοί συντελεστές',
    'sylius.menu.admin.main.configuration.zones' => 'Ζώνες',
    'sylius.menu.admin.main.marketing.promotions' => 'Προσφορές',
    'sylius.menu.admin.main.customers.groups' => 'Ομάδες',
    'sylius.menu.admin.main.sales.orders' => 'Παραγγελίες',
  ),
  'flashes' => 
  array (
    'sylius.resource.create' => 'Το %resource% δημιουργήθηκε με επιτυχία.',
    'sylius.resource.update' => 'Το %resource% ενημερώθηκε με επιτυχία.',
    'sylius.resource.delete' => 'Το %resource% διαγράφηκε με επιτυχία.',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
