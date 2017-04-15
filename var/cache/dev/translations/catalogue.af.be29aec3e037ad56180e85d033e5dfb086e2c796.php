<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('af', array (
  'validators' => 
  array (
    'This value should be false.' => 'Hierdie waarde moet vals wees.',
    'This value should be true.' => 'Hierdie waarde moet waar wees.',
    'This value should be of type {{ type }}.' => 'Hierdie waarde moet van die soort {{type}} wees.',
    'This value should be blank.' => 'Hierdie waarde moet leeg wees.',
    'The value you selected is not a valid choice.' => 'Die waarde wat jy gekies het is nie \'n geldige keuse nie.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jy moet ten minste {{ limit }} kies.|Jy moet ten minste {{ limit }} keuses kies.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jy moet by die meeste {{ limit }} keuse kies.|Jy moet by die meeste {{ limit }} keuses kies.',
    'One or more of the given values is invalid.' => 'Een of meer van die gegewe waardes is ongeldig.',
    'This field was not expected.' => 'Die veld is nie verwag nie.',
    'This field is missing.' => 'Hierdie veld ontbreek.',
    'This value is not a valid date.' => 'Hierdie waarde is nie \'n geldige datum nie.',
    'This value is not a valid datetime.' => 'Hierdie waarde is nie \'n geldige datum en tyd nie.',
    'This value is not a valid email address.' => 'Hierdie waarde is nie \'n geldige e-pos adres nie.',
    'The file could not be found.' => 'Die lêer kon nie gevind word nie.',
    'The file is not readable.' => 'Die lêer kan nie gelees word nie.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot ({{ size }} {{ suffix }}). Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Die MIME-tipe van die lêer is ongeldig ({{ type }}). Toegelaat MIME-tipes is {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Hierdie waarde moet {{ limit }} of minder wees.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Hierdie waarde is te lank. Dit moet {{ limit }} karakter of minder wees.|Hierdie waarde is te lank. Dit moet {{ limit }} karakters of minder wees.',
    'This value should be {{ limit }} or more.' => 'Hierdie waarde moet {{ limit }} of meer wees.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Hierdie waarde is te kort. Dit moet {{ limit }} karakter of meer wees.|Hierdie waarde is te kort. Dit moet {{ limit }} karakters of meer wees.',
    'This value should not be blank.' => 'Hierdie waarde moet nie leeg wees nie.',
    'This value should not be null.' => 'Hierdie waarde moet nie nul wees nie.',
    'This value should be null.' => 'Hierdie waarde moet nul wees.',
    'This value is not valid.' => 'Hierdie waarde is nie geldig nie.',
    'This value is not a valid time.' => 'Hierdie waarde is nie \'n geldige tyd nie.',
    'This value is not a valid URL.' => 'Hierdie waarde is nie \'n geldige URL nie.',
    'The two values should be equal.' => 'Die twee waardes moet gelyk wees.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot. Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die lêer is te groot.',
    'The file could not be uploaded.' => 'Die lêer kan nie opgelaai word nie.',
    'This value should be a valid number.' => 'Hierdie waarde moet \'n geldige nommer wees.',
    'This file is not a valid image.' => 'Hierdie lêer is nie \'n geldige beeld nie.',
    'This is not a valid IP address.' => 'Hierdie is nie \'n geldige IP-adres nie.',
    'This value is not a valid language.' => 'Hierdie waarde is nie \'n geldige taal nie.',
    'This value is not a valid locale.' => 'Hierdie waarde is nie \'n geldige land instelling nie.',
    'This value is not a valid country.' => 'Hierdie waarde is nie \'n geldige land nie.',
    'This value is already used.' => 'Hierdie waarde word reeds gebruik.',
    'The size of the image could not be detected.' => 'Die grootte van die beeld kon nie opgespoor word nie.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die beeld breedte is te groot ({{ width }}px). Toegelaat maksimum breedte is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die beeld breedte is te klein ({{ width }}px). Minimum breedte verwag is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die beeld hoogte is te groot ({{ height }}px). Toegelaat maksimum hoogte is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die beeld hoogte is te klein ({{ height }}px). Minimum hoogte verwag is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Hierdie waarde moet die huidige wagwoord van die gebruiker wees.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Hierdie waarde moet presies {{ limit }} karakter wees.|Hierdie waarde moet presies {{ limit }} karakters wees.',
    'The file was only partially uploaded.' => 'Die lêer is slegs gedeeltelik opgelaai.',
    'No file was uploaded.' => 'Geen lêer is opgelaai nie.',
    'No temporary folder was configured in php.ini.' => 'Geen tydelike lêer is ingestel in php.ini nie.',
    'Cannot write temporary file to disk.' => 'Kan nie tydelike lêer skryf op skyf nie.',
    'A PHP extension caused the upload to fail.' => '\'n PHP-uitbreiding veroorsaak die oplaai van die lêer om te misluk.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Hierdie versameling moet {{ limit }} element of meer bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Hierdie versameling moet {{ limit }} element of minder bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Hierdie versameling moet presies {{ limit }} element bevat.|Hierdie versameling moet presies {{ limit }} elemente bevat.',
    'Invalid card number.' => 'Ongeldige kredietkaart nommer.',
    'Unsupported card type or invalid card number.' => 'Nie-ondersteunde tipe kaart of ongeldige kredietkaart nommer.',
    'sylius.attribute.name.not_blank' => 'Voer asb. attribuut naam in.',
    'sylius.attribute.name.min_length' => 'Attribuut naam moet minstens 1 karakter lank wees|Attribuut naam moet minstens {{ limit }} karakters lank wees.',
    'sylius.attribute.name.max_length' => 'Attribuut naam moet minstens 1 karakter lank wees|Attribuut naam moet minstens {{ limit }} karakters lank wees.',
    'sylius.attribute.presentation.not_blank' => 'Voer asb. attribuut weergawe in.',
    'sylius.attribute.presentation.min_length' => 'Attribuut weergawe moet minstens 1 karakter lank wees.|Attribuut weergawe naam moet minstens {{ limit }} karakters lank wees.',
    'sylius.attribute.presentation.max_length' => 'Attribuut weergawe naam moet minstens 1 karakter lank wees.|Attribuut weergawe naam moet minstens {{ limit }} karakters lank wees.',
    'sylius.attribute_value.attribute.not_blank' => 'Voer asb. attribuut in.',
    'sylius.attribute_value.value.not_blank' => 'Voer asb. attribuut waarde in.',
    'sylius.address.city.max_length' => 'Stad mag nie langer wees as 255 karakters nie|Stad mag nie langer wees as 255 karakters nie.',
    'sylius.address.city.min_length' => 'Stad moet minstens 2 karakters lank wees|Stad moet minstens 2 karakters lank wees.',
    'sylius.address.city.not_blank' => 'Voer asb. stad in.',
    'sylius.address.country.not_blank' => 'Voer asb. land.',
    'sylius.address.first_name.max_length' => 'Naam mag nie langer wees as 255 karakters nie|Naam mag nie langer wees as 255 karakters nie.',
    'sylius.address.first_name.min_length' => 'Naam moet minstens 2 karakters lank wees|Naam moet minstens 2 karakters lank wees.',
    'sylius.address.first_name.not_blank' => 'Voer asb. naam in.',
    'sylius.address.last_name.max_length' => 'Van mag nie langer wees as 255 karakters nie|Van mag nie langer wees as 255 karakters nie.',
    'sylius.address.last_name.min_length' => 'Van moet minstens 2 karakters lank wees|Van moet minstens 2 karakters lank wees.',
    'sylius.address.last_name.not_blank' => 'Voer asb. van in.',
    'sylius.address.postcode.max_length' => 'Poskode mag nie langer wees as 255 karakters nie|Poscode mag nie langer wees as 255 karakters nie.',
    'sylius.address.postcode.min_length' => 'Poscode moet minstens 2 karakters lank wees|Poscode moet minstens 2 karakters lank wees.',
    'sylius.address.postcode.not_blank' => 'Voer asb. poskode in.',
    'sylius.address.province.valid' => 'Voer asb. die goeie provinsie in.',
    'sylius.address.street.max_length' => 'Straat mag nie langer wees as 255 karakters nie|Straat mag nie langer wees as 255 karakters nie.',
    'sylius.address.street.min_length' => 'Straat moet minstens 2 karakters lank wees|Straat moet minstens 2 karakters lank wees.',
    'sylius.address.street.not_blank' => 'Voer asb. straat in.',
    'sylius.address.not_shippable' => 'Hierdie adres is nie \'n geldige bestemming nie.',
    'sylius.province.name.max_length' => 'Provinsie naam mag nie langer wees as 255 karakters nie|Provinsie naam mag nie langer wees as 255 karakters nie.',
    'sylius.province.name.min_length' => 'Provinsie naam moet minstens 2 karakters lank wees|Provinsie naam moet minstens 2 karakters lank wees.',
    'sylius.province.name.not_blank' => 'Voer asb. provinsie naam in.',
    'sylius.zone.members.min_count' => 'Voeg asb. minstens {{ limit }} area lede toe.',
    'sylius.zone.name.max_length' => 'Area naam mag nie langer wees as 255 karakters nie|Area naam mag nie langer wees as 255 karakters nie.',
    'sylius.zone.name.not_blank' => 'Voer asb. area naam in.',
  ),
  'messages' => 
  array (
    'sylius.form.attribute.type' => 'Tipe',
    'sylius.form.attribute_type.select' => 'Kies',
    'sylius.form.promotion_action.type' => 'Tipe',
    'sylius.form.promotion_rule.shipping_country_configuration.country' => 'Land',
    'sylius.form.promotion_rule.type' => 'Tipe',
    'sylius.form.address.city' => 'Stad',
    'sylius.form.address.company' => 'Maatskappy',
    'sylius.form.address.country' => 'Land',
    'sylius.form.address.first_name' => 'Naam',
    'sylius.form.address.last_name' => 'Van',
    'sylius.form.address.postcode' => 'Poskode',
    'sylius.form.address.street' => 'Straat',
    'sylius.form.address.province' => 'Provinsie',
    'sylius.form.country.name' => 'Naam',
    'sylius.form.country.provinces' => 'Provinsies',
    'sylius.form.country.select' => 'Kies',
    'sylius.form.province.name' => 'Naam',
    'sylius.form.province.select' => 'Kies',
    'sylius.form.zone.members' => 'Lede',
    'sylius.form.zone.name' => 'Naam',
    'sylius.form.zone.type' => 'Tipe',
    'sylius.form.zone.types.country' => 'Land',
    'sylius.form.zone.types.province' => 'Provinsie',
    'sylius.form.zone.types.zone' => 'Area',
    'sylius.form.zone.scope' => 'Gebied',
    'sylius.form.zone.select' => 'Kies',
    'sylius.form.zone_member.select' => 'Kies',
    'sylius.ui.city' => 'Stad',
    'sylius.ui.company' => 'Maatskappy',
    'sylius.ui.country' => 'Land',
    'sylius.ui.members' => 'Lede',
    'sylius.ui.postcode' => 'Poskode',
    'sylius.ui.presentation' => 'Weergawe',
    'sylius.ui.province' => 'Provinsie',
    'sylius.ui.provinces' => 'Provinsies',
    'sylius.ui.scope' => 'Gebied',
    'sylius.ui.street' => 'Straat',
    'sylius.ui.type' => 'Tipe',
    'sylius.form.image.type' => 'Tipe',
    'sylius.installer.extensions.off' => false,
    'sylius.installer.extensions.on' => true,
    'sylius.installer.settings.off' => false,
    'sylius.installer.settings.on' => true,
    'sylius.form.gateway_config.type' => 'Tipe',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
