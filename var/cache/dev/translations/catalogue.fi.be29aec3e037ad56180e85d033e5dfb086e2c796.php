<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fi', array (
  'validators' => 
  array (
    'This value should be false.' => 'Arvon tulee olla epätosi.',
    'This value should be true.' => 'Arvon tulee olla tosi.',
    'This value should be of type {{ type }}.' => 'Arvon tulee olla tyyppiä {{ type }}.',
    'This value should be blank.' => 'Arvon tulee olla tyhjä.',
    'The value you selected is not a valid choice.' => 'Arvon tulee olla yksi annetuista vaihtoehdoista.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sinun tulee valita vähintään {{ limit }} vaihtoehtoa.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sinun tulee valitan enintään {{ limit }} vaihtoehtoa.',
    'One or more of the given values is invalid.' => 'Yksi tai useampi annetuista arvoista on virheellinen.',
    'This field was not expected.' => 'Tässä kentässä ei odotettu.',
    'This field is missing.' => 'Tämä kenttä puuttuu.',
    'This value is not a valid date.' => 'Annettu arvo ei ole kelvollinen päivämäärä.',
    'This value is not a valid datetime.' => 'Annettu arvo ei ole kelvollinen päivämäärä ja kellonaika.',
    'This value is not a valid email address.' => 'Annettu arvo ei ole kelvollinen sähköpostiosoite.',
    'The file could not be found.' => 'Tiedostoa ei löydy.',
    'The file is not readable.' => 'Tiedostoa ei voida lukea.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tiedostonkoko ({{ size }} {{ suffix }}) on liian iso. Suurin sallittu tiedostonkoko on {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Tiedostotyyppi ({{ type }}) on virheellinen. Sallittuja tiedostotyyppejä ovat {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Arvon tulee olla {{ limit }} tai vähemmän.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Liian pitkä syöte. Syöte saa olla enintään {{ limit }} merkkiä.',
    'This value should be {{ limit }} or more.' => 'Arvon tulee olla {{ limit }} tai enemmän.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Liian lyhyt syöte. Syötteen tulee olla vähintään {{ limit }} merkkiä.',
    'This value should not be blank.' => 'Kenttä ei voi olla tyhjä.',
    'This value should not be null.' => 'Syöte ei voi olla null.',
    'This value should be null.' => 'Syötteen tulee olla null.',
    'This value is not valid.' => 'Virheellinen arvo.',
    'This value is not a valid time.' => 'Annettu arvo ei ole kelvollinen kellonaika.',
    'This value is not a valid URL.' => 'Annettu arvo ei ole kelvollinen URL-osoite.',
    'The two values should be equal.' => 'Kahden annetun arvon tulee olla samat.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Annettu tiedosto on liian iso. Suurin sallittu tiedostokoko on {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Tiedosto on liian iso.',
    'The file could not be uploaded.' => 'Tiedoston siirto epäonnistui.',
    'This value should be a valid number.' => 'Tämän arvon tulee olla numero.',
    'This file is not a valid image.' => 'Tämä tiedosto ei ole kelvollinen kuva.',
    'This is not a valid IP address.' => 'Tämä ei ole kelvollinen IP-osoite.',
    'This value is not a valid language.' => 'Tämä arvo ei ole kelvollinen kieli.',
    'This value is not a valid locale.' => 'Tämä arvo ei ole kelvollinen kieli- ja alueasetus (locale).',
    'This value is not a valid country.' => 'Tämä arvo ei ole kelvollinen maa.',
    'This value is already used.' => 'Tämä arvo on jo käytetty.',
    'The size of the image could not be detected.' => 'Kuvan kokoa ei voitu tunnistaa.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Kuva on liian leveä ({{ width }}px). Sallittu maksimileveys on {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Kuva on liian kapea ({{ width }}px). Leveyden tulisi olla vähintään {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Kuva on liian korkea ({{ width }}px). Sallittu maksimikorkeus on {{ max_width }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Kuva on liian matala ({{ height }}px). Korkeuden tulisi olla vähintään {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Tämän arvon tulisi olla käyttäjän tämänhetkinen salasana.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Tämän arvon tulisi olla tasan yhden merkin pituinen.|Tämän arvon tulisi olla tasan {{ limit }} merkkiä pitkä.',
    'The file was only partially uploaded.' => 'Tiedosto ladattiin vain osittain.',
    'No file was uploaded.' => 'Tiedostoa ei ladattu.',
    'No temporary folder was configured in php.ini.' => 'Väliaikaishakemistoa ei ole asetettu php.ini -tiedostoon.',
    'Cannot write temporary file to disk.' => 'Väliaikaistiedostoa ei voitu kirjoittaa levylle.',
    'A PHP extension caused the upload to fail.' => 'PHP-laajennoksen vuoksi tiedoston lataus epäonnistui.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Tässä ryhmässä tulisi olla yksi tai useampi elementti.|Tässä ryhmässä tulisi olla vähintään {{ limit }} elementtiä.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Tässä ryhmässä tulisi olla enintään yksi elementti.|Tässä ryhmässä tulisi olla enintään {{ limit }} elementtiä.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Tässä ryhmässä tulisi olla tasan yksi elementti.|Tässä ryhmässä tulisi olla enintään {{ limit }} elementtiä.',
    'Invalid card number.' => 'Virheellinen korttinumero.',
    'Unsupported card type or invalid card number.' => 'Tätä korttityyppiä ei tueta tai korttinumero on virheellinen.',
    'This field group should not contain extra fields.' => 'Tämä kenttäryhmä ei voi sisältää ylimääräisiä kenttiä.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ladattu tiedosto on liian iso. Ole hyvä ja lataa pienempi tiedosto.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF tarkiste on virheellinen. Ole hyvä ja yritä lähettää lomake uudestaan.',
    'sylius.address.city.max_length' => 'Kaupunki saa olla korkeintaan 255 merkin pituinen|Kaupunki saa olla korkeintaan 255 merkin pituinen.',
    'sylius.address.city.min_length' => 'Kaupungin tulee olla vähintään kahden merkin pituinen|Kaupungin tulee olla vähintään kahden merkin pituinen.',
    'sylius.address.city.not_blank' => 'Lisää kaupunki.',
    'sylius.address.country.not_blank' => 'Valitse maa.',
    'sylius.address.country.disabled' => 'Valittu maa on poistettu käytöstä. Valitse jokin toinen maa.',
    'sylius.address.first_name.max_length' => 'Etunimi saa olla korkeintaan 255 merkin pituinen|Etunimi saa olla korkeintaan 255 merkin pituinen.',
    'sylius.address.first_name.min_length' => 'Etunimen tulee olla vähintään kahden merkin pituinen|Etunimen tulee olla vähintään kahden merkin pituinen.',
    'sylius.address.first_name.not_blank' => 'Lisää etunimi.',
    'sylius.address.last_name.max_length' => 'Sukunimi saa olla korkeintaan 255 merkin pituinen|Sukunimi saa olla korkeintaan 255 merkin pituinen.',
    'sylius.address.last_name.min_length' => 'Sukunimen tulee olla vähintään kahden merkin pituinen|Sukunimen tulee olla vähintään kahden merkin pituinen.',
    'sylius.address.last_name.not_blank' => 'Lisää sukunimi.',
    'sylius.address.postcode.max_length' => 'Postinumero saa olla korkeintaan 255 merkin pituinen|Postinumero saa olla korkeintaan 255 merkin pituinen.',
    'sylius.address.postcode.min_length' => 'Postinumeron tulee olla vähintään kahden merkin pituinen|Postinumeron tulee olla vähintään kahden merkin pituinen.',
    'sylius.address.postcode.not_blank' => 'Lisää postinumero.',
    'sylius.address.province.valid' => 'Valitse maakunta.',
    'sylius.address.street.max_length' => 'Postiosoite saa olla korkeintaan 255 merkin pituinen|Postiosoite saa olla korkeintaan 255 merkin pituinen.',
    'sylius.address.street.min_length' => 'Postiosoitteen tulee olla vähintään kahden merkin pituinen|Postiosoitteen tulee olla vähintään kahden merkin pituinen.',
    'sylius.address.street.not_blank' => 'Lisää postiosoite.',
    'sylius.country.code.not_blank' => 'Syötä maan ISO-koodi.',
    'sylius.country.code.unique' => 'Maan ISO-koodin on oltava yksilöllinen.',
    'sylius.province.code.min_length' => 'Maakunnan nimen on oltava vähintään 5 merkkiä pitkä|Maakunnan nimen on oltava vähintään 5 merkkiä pitkä.',
    'sylius.province.code.not_blank' => 'Syötä maakunnan koodi.',
    'sylius.province.code.regex' => 'Maakunnan koodin tulee olla seuraavassa muodossa: XX-XX (esim. US-FL).',
    'sylius.province.code.unique' => 'Maankunnan koodin on oltava yksilöllinen.',
    'sylius.province.name.max_length' => 'Maakunnan nimi saa olla enintään 255 merkkiä pitkä|Maakunnan nimi ei saa yli 255 merkkiä pitkä.',
    'sylius.province.name.min_length' => 'Maakunnan nimen on oltava vähintään 2 merkkiä pitkä|Maakunnan nimen on oltava vähintään 2 merkkiä pitkä.',
    'sylius.province.name.not_blank' => 'Lisää maakunta.',
    'sylius.province.name.unique' => 'Maankunnan nimi on oltava yksilöllinen.',
    'sylius.zone.code.not_blank' => 'Lisää aluekoodi.',
    'sylius.zone.code.unique' => 'Aluekoodin tulee olla yksilöllinen.',
    'sylius.zone.name.not_blank' => 'Lisää alueen nimi.',
    'sylius.zone_member.code.not_blank' => 'Valitise alueen osa.',
    'sylius.zone_member.unique' => 'Valittu alueen osa kuuluu jo alueeseen.',
    'sylius.user.email.not_blank' => 'Kirjoita sähköpostiosoitteesi.',
    'sylius.customer.first_name.not_blank' => 'Kirjoita etunimesi.',
    'sylius.customer.last_name.not_blank' => 'Kirjoita sukunimesi.',
    'sylius.customer.email.not_blank' => 'Kirjoita sähköpostiosoitteesi.',
    'sylius.contact.email.not_blank' => 'Kirjoita sähköpostiosoitteesi.',
  ),
  'messages' => 
  array (
    'sylius.form.currency.enabled' => 'Aktiivinen',
    'sylius.form.currency.exchange_rate' => 'Vaihtokurssi',
    'sylius.form.association_type.translations' => 'Käännökset',
    'sylius.form.option_value.add_value' => 'Lisää arvo',
    'sylius.form.attribute.add' => 'Lisää',
    'sylius.form.attribute.add_attributes' => 'Lisää määritteitä',
    'sylius.form.attribute.choices' => 'Vaihtoehdot',
    'sylius.form.attribute.code' => 'Koodi',
    'sylius.form.attribute.name' => 'Nimi',
    'sylius.form.attribute.translations' => 'Käännökset',
    'sylius.form.attribute.type' => 'Tyyppi',
    'sylius.form.attribute_type.checkbox' => 'Valintalaatikko',
    'sylius.form.attribute_type.configuration' => 'Asetukset',
    'sylius.form.attribute_type.date' => 'Päivämäärä',
    'sylius.form.attribute_type.datetime' => 'Päivämäärä ja aika',
    'sylius.form.attribute_type.select' => 'Valitse',
    'sylius.form.attribute_type_configuration.text.min' => 'Minimipituus',
    'sylius.form.attribute_type_configuration.text.max' => 'Maksimipituus',
    'sylius.form.tax_category.name' => 'Nimi',
    'sylius.form.tax_category.description' => 'Kuvaus',
    'sylius.form.tax_rate.category' => 'Kategoria',
    'sylius.form.tax_rate.name' => 'Nimi',
    'sylius.form.tax_rate.amount' => 'Summa',
    'sylius.form.tax_rate.included_in_price' => 'Sisältyy hintaan?',
    'sylius.form.tax_rate.calculator' => 'Laskin',
    'sylius.form.shipping_method.channels' => 'Kanavat',
    'sylius.form.shipping_method.translations' => 'Käännökset',
    'sylius.form.promotion_action.type' => 'Tyyppi',
    'sylius.form.promotion_rule.contains_product_configuration.variants' => 'Tuotteet',
    'sylius.form.promotion_rule.shipping_country_configuration.country' => 'Maa',
    'sylius.form.promotion_rule.type' => 'Tyyppi',
    'sylius.form.address.city' => 'Kaupunki',
    'sylius.form.address.company' => 'Yritys',
    'sylius.form.address.country' => 'Maa',
    'sylius.form.address.first_name' => 'Etunimi',
    'sylius.form.address.last_name' => 'Sukunimi',
    'sylius.form.address.phone_number' => 'Puhelinnumero',
    'sylius.form.address.postcode' => 'Postinumero',
    'sylius.form.address.street' => 'Katuosoite',
    'sylius.form.address.province' => 'Lääni',
    'sylius.form.country.add_province' => 'Lisää maakunta',
    'sylius.form.country.name' => 'Nimi',
    'sylius.form.country.provinces' => 'Maakunnat',
    'sylius.form.country.select' => 'Valitse',
    'sylius.form.country.enabled' => 'Aktiivinen',
    'sylius.form.province.name' => 'Nimi',
    'sylius.form.province.abbreviation' => 'Lyhenne',
    'sylius.form.province.select' => 'Valitse',
    'sylius.form.zone.add_member' => 'Lisää jäsen',
    'sylius.form.zone.members' => 'Jäsenet',
    'sylius.form.zone.name' => 'Nimi',
    'sylius.form.zone.type' => 'Tyyppi',
    'sylius.form.zone.types.country' => 'Maa',
    'sylius.form.zone.types.province' => 'Lääni',
    'sylius.form.zone.types.zone' => 'Alue',
    'sylius.form.zone.scopes.all' => 'Kaikki',
    'sylius.form.zone.select' => 'Valitse',
    'sylius.form.zone_member.select' => 'Valitse',
    'sylius.form.taxon.description' => 'Kuvaus',
    'sylius.form.taxon.name' => 'Nimi',
    'sylius.form.taxon.parent' => 'Vanhempi',
    'sylius.form.taxonomy.name' => 'Nimi',
    'sylius.form.user.email' => 'Sähköpostiosoite',
    'sylius.form.user.enabled' => 'Aktiivinen',
    'sylius.form.user.password.label' => 'Salasana',
    'sylius.form.user.password.confirmation' => 'Todentaminen',
    'sylius.form.user.remember_me' => 'Muista minut',
    'sylius.form.user.shipping_address' => 'Toimitusosoite',
    'sylius.form.user.username' => 'Käyttäjänimi',
    'sylius.form.user_filter.query' => 'Haku',
    'sylius.form.user_change_password.confirmation' => 'Vahvistus',
    'sylius.form.user_change_password.current' => 'Nykyinen salasana',
    'sylius.form.user_change_password.new' => 'Uusi salasana',
    'sylius.form.user_reset_password.confirmation' => 'Vahvistus',
    'sylius.form.user_reset_password.new' => 'Uusi salasana',
    'sylius.form.customer.first_name' => 'Etunimi',
    'sylius.form.customer.last_name' => 'Sukunimi',
    'sylius.form.customer.email' => 'Sähköpostiosoite',
    'sylius.form.customer.phone_number' => 'Puhelinnumero',
    'sylius.form.customer.gender' => 'Sukupuoli',
    'sylius.form.customer.birthday' => 'Syntymäaika',
    'sylius.form.customer.billing_address' => 'Laskutusosoite',
    'sylius.form.customer.different_billing_address' => 'Käytä eri osoitetta laskutukseen?',
    'sylius.form.customer.only_customer_registration' => 'Luo tili?',
    'sylius.form.customer.subscribed_to_newsletter' => 'Tilaa uutiskirje',
    'sylius.gender.unknown' => 'Tuntematon',
    'sylius.gender.male' => 'Mies',
    'sylius.gender.female' => 'Nainen',
    'sylius.form.login.username' => 'Käyttäjänimi',
    'sylius.form.login.password' => 'Salasana',
    'sylius.form.login.remember_me' => 'Muista minut',
    'sylius.form.option.name' => 'Nimi',
    'sylius.form.notes' => 'Muistiinpanot',
    'sylius.form.variant.tracked' => 'Seurattu',
    'sylius.ui.abandoned' => 'Hylätty',
    'sylius.ui.about' => 'Tietoja',
    'sylius.ui.access_token' => 'Käyttöoikeustunnus',
    'sylius.ui.access_your_store_account_or_create_a_new_one' => 'Kirjaudu kauppatunnuksellesi tai luo uusi tunnus',
    'sylius.ui.account_credentials' => 'Tunnukset',
    'sylius.ui.action' => 'Toiminto',
    'sylius.ui.actions' => 'Toiminnot',
    'sylius.ui.add' => 'Lisää',
    'sylius.ui.add_action' => 'Lisää toiminto',
    'sylius.ui.add_attributes' => 'Lisää määritteitä',
    'sylius.ui.add_channel' => 'Lisää kanava',
    'sylius.ui.add_choice' => 'Lisää valinta',
    'sylius.ui.add_coupon' => 'Lisää kuponki',
    'sylius.ui.add_image' => 'Lisää kuva',
    'sylius.ui.add_member' => 'Lisää jäsen',
    'sylius.ui.add_menu_element' => 'Lisää valikon osa',
    'sylius.ui.add_new_email' => 'Lisää uusi sähköpostiosoite',
    'sylius.ui.add_new_permission' => 'Lisää uusi käyttöoikeus',
    'sylius.ui.add_new_role' => 'Lisää uusi rooli',
    'sylius.ui.add_province' => 'Lisää maakunta',
    'sylius.ui.add_rule' => 'Lisää sääntö',
    'sylius.ui.add_to_cart' => 'Lisää koriin',
    'sylius.ui.add_value' => 'Lisää arvo',
    'sylius.ui.adding_new_customer_groups' => 'Lisätään uutta asiakasryhmää',
    'sylius.ui.adding_new_email' => 'Lisätään uutta sähköpostiosoitetta',
    'sylius.ui.additional_information' => 'Lisätietoja',
    'sylius.ui.address' => 'Osoite',
    'sylius.ui.administration' => 'Ylläpito',
    'sylius.ui.admin_users' => 'Ylläpitäjät',
    'sylius.ui.all' => 'Kaikki',
    'sylius.ui.all_your_addresses' => 'Kaikki osoitteesi',
    'sylius.ui.amount' => 'Summa',
    'sylius.ui.an_error_occurred' => 'Tapahtui virhe',
    'sylius.ui.api' => 'API',
    'sylius.ui.apply_coupon' => 'Lisää kuponki',
    'sylius.ui.are_your_sure_you_want_to_perform_this_action' => 'Oletko varma, että haluat suorittaa tämän toiminnon?',
    'sylius.ui.back' => 'Edellinen',
    'sylius.ui.channels' => 'Kanavat',
    'sylius.ui.checkbox' => 'Valintalaatikko',
    'sylius.ui.checkout' => 'Kassa',
    'sylius.ui.choose_file' => 'Valitse tiedosto',
    'sylius.ui.city' => 'Kaupunki',
    'sylius.ui.clear_cart' => 'Tyhjennä ostoskori',
    'sylius.ui.clear_filters' => 'Tyhjennä suodattimet',
    'sylius.ui.code' => 'Koodi',
    'sylius.ui.color' => 'Väri',
    'sylius.ui.comment' => 'Kommentti',
    'sylius.ui.company' => 'Yritys',
    'sylius.ui.confirmation' => 'Vahvistus',
    'sylius.ui.confirmation_title' => 'Vahvistus',
    'sylius.ui.contact_us' => 'Ota yhteyttä',
    'sylius.ui.contain_variants' => 'Sisältää muuttujia',
    'sylius.ui.contains' => 'Sisältää',
    'sylius.ui.countries' => 'Maat',
    'sylius.ui.country' => 'Maa',
    'sylius.ui.country_details' => 'Maatiedot',
    'sylius.ui.coupon' => 'Kuponki',
    'sylius.ui.coupons' => 'Kupongit',
    'sylius.ui.create' => 'Luo',
    'sylius.ui.create_a_new_address' => 'Luo uusi osoite',
    'sylius.ui.create_a_new_customer_account' => 'Luo uusi asiakastili',
    'sylius.ui.create_an_account' => 'Luo tili',
    'sylius.ui.create_country' => 'Luo maa',
    'sylius.ui.create_currency' => 'Luo valuutta',
    'sylius.ui.create_customer' => 'Luo asiakas',
    'sylius.ui.create_menu' => 'Luo valikko',
    'sylius.ui.create_new_coupon' => 'Luo uusi kuponki',
    'sylius.ui.create_new_page' => 'Luo uusi sivu',
    'sylius.ui.create_new_report' => 'Luo uusi raportti',
    'sylius.ui.create_option' => 'Luo vaihtoehto',
    'sylius.ui.create_order' => 'Luo tilaus',
    'sylius.ui.create_payment' => 'Luo maksu',
    'sylius.ui.create_payment_method' => 'Luo maksutapa',
    'sylius.ui.create_product' => 'Luo tuote',
    'sylius.ui.create_promotion' => 'Luo kampanja',
    'sylius.ui.currency' => 'Valuutta',
    'sylius.ui.current_password' => 'Nykyinen salasana',
    'sylius.ui.customer' => 'Asiakas',
    'sylius.ui.customer_orders' => 'Asiakkaan tilaukset',
    'sylius.ui.customer_since' => 'Asiakas alkaen',
    'sylius.ui.customers' => 'Asiakkaat',
    'sylius.ui.dashboard' => 'Hallintapaneeli',
    'sylius.ui.date' => 'Päivämäärä',
    'sylius.ui.datetime' => 'Päivämäärä ja aika',
    'sylius.ui.default_billing_address' => 'Oletusarvoinen laskutusosoite',
    'sylius.ui.default_currency' => 'Oletusvaluutta',
    'sylius.ui.default_shipping_address' => 'Oletusarvoinen toimitusosoite',
    'sylius.ui.delete' => 'Poista',
    'sylius.ui.delete_image' => 'Poista kuva',
    'sylius.ui.deleted' => 'Poistettu',
    'sylius.ui.description' => 'Kuvaus',
    'sylius.ui.details' => 'Lisätiedot',
    'sylius.ui.disable' => 'Ota pois käytöstä',
    'sylius.ui.disabled' => 'Poistettu käytöstä',
    'sylius.ui.discount' => 'Alennus',
    'sylius.ui.discounted_unit_price' => 'Alennettu yksikköhinta',
    'sylius.ui.edit' => 'Muokkaa',
    'sylius.ui.edit_channel' => 'Muokkaa kanavaa',
    'sylius.ui.edit_country' => 'Muokkaa maata',
    'sylius.ui.edit_coupon' => 'Muokkaa kuponkia',
    'sylius.ui.edit_currency' => 'Muokkaa valuuttaa',
    'sylius.ui.edit_customer' => 'Muokkaa asiakkaan tietoja',
    'sylius.ui.edit_payment_method' => 'Muokkaa maksutapaa',
    'sylius.ui.edit_product' => 'Muokkaa tuotetta',
    'sylius.ui.edit_promotion' => 'Muokkaa kampanjaa',
    'sylius.ui.edit_promotion_coupon' => 'Muokkaa kampanjakuponkia',
    'sylius.ui.edit_report' => 'Muokkaa raporttia',
    'sylius.ui.edit_shipping_address' => 'Muokkaa toimitusosoitetta',
    'sylius.ui.edit_shipping_method' => 'Muokkaa toimitustapaa',
    'sylius.ui.email' => 'Sähköpostiosoite',
    'sylius.ui.exchange_rate' => 'Vaihtokurssi',
    'sylius.ui.extra_notes' => 'Muistiinpanot',
    'sylius.ui.marketing' => 'Markkinointi',
    'sylius.ui.members' => 'Jäsenet',
    'sylius.ui.message' => 'Viesti',
    'sylius.ui.new_password' => 'Uusi salasana',
    'sylius.ui.next' => 'Seuraava',
    'sylius.ui.orders' => 'Tilaukset',
    'sylius.ui.parent' => 'Vanhempi',
    'sylius.ui.payment_methods' => 'Maksutavat',
    'sylius.ui.phone_number' => 'Puhelinnumero',
    'sylius.ui.postcode' => 'Postinumero',
    'sylius.ui.pricing' => 'Hinnoittelu',
    'sylius.ui.products' => 'Tuotteet',
    'sylius.ui.promotion_coupons' => 'Kupongit',
    'sylius.ui.promotions' => 'Kampanjat',
    'sylius.ui.province' => 'Lääni',
    'sylius.ui.provinces' => 'Maakunnat',
    'sylius.ui.remember_me' => 'Muista minut',
    'sylius.ui.sales' => 'Myynnit',
    'sylius.ui.sales_this_month' => 'Myynnit',
    'sylius.ui.shipping_methods' => 'Toimitustavat',
    'sylius.ui.street' => 'Katuosoite',
    'sylius.ui.topic' => 'Aihe',
    'sylius.ui.translations' => 'Käännökset',
    'sylius.ui.type' => 'Tyyppi',
    'sylius.ui.username' => 'Käyttäjänimi',
    'sylius.ui.zones' => 'Vyöhykkeet',
    'sylius.form.promotion.channels' => 'Kanavat',
    'sylius.form.image.type' => 'Tyyppi',
    'sylius.form.product.channels' => 'Kanavat',
    'sylius.form.guest.email' => 'Sähköpostiosoite',
    'sylius.form.promotion_rule.product.products' => 'Tuotteet',
    'sylius.form.payment_method.channels' => 'Kanavat',
    'sylius.installer.extensions.off' => false,
    'sylius.installer.extensions.on' => true,
    'sylius.installer.settings.off' => false,
    'sylius.installer.settings.on' => true,
    'sylius.form.collection.add' => 'Lisää',
    'sylius.form.gateway_config.type' => 'Tyyppi',
    'sylius.form.gateway_configuration.paypal.username' => 'Käyttäjänimi',
    'sylius.menu.admin.main.catalog.attributes' => 'Ominaisuudet',
    'sylius.menu.admin.main.catalog.header' => 'Luettelo',
    'sylius.menu.admin.main.catalog.options' => 'Asetukset',
    'sylius.menu.admin.main.catalog.products' => 'Tuotteet',
    'sylius.menu.admin.main.catalog.taxons' => 'Veroryhmät',
    'sylius.menu.admin.main.configuration.admin_users' => 'Ylläpitäjät',
    'sylius.menu.admin.main.configuration.channels' => 'Kanavat',
    'sylius.menu.admin.main.configuration.countries' => 'Maat',
    'sylius.menu.admin.main.configuration.currencies' => 'Valuutat',
    'sylius.menu.admin.main.configuration.header' => 'Asetukset',
    'sylius.menu.admin.main.configuration.locales' => 'Alueet',
    'sylius.menu.admin.main.configuration.payment_methods' => 'Maksutavat',
    'sylius.menu.admin.main.configuration.shipping_methods' => 'Toimitustavat',
    'sylius.menu.admin.main.configuration.tax_categories' => 'Veroluokat',
    'sylius.menu.admin.main.configuration.tax_rates' => 'Veroasteet',
    'sylius.menu.admin.main.configuration.zones' => 'Vyöhykkeet',
    'sylius.menu.admin.main.marketing.header' => 'Markkinointi',
    'sylius.menu.admin.main.marketing.promotions' => 'Kampanjat',
    'sylius.menu.admin.main.customers.customers' => 'Asiakkaat',
    'sylius.menu.admin.main.customers.header' => 'Asiakas',
    'sylius.menu.admin.main.sales.header' => 'Myynnit',
    'sylius.menu.admin.main.sales.orders' => 'Tilaukset',
    'sylius.menu.shop.account.dashboard' => 'Hallintapaneeli',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Lisää uusi',
    'label_type_yes' => 'kyllä',
    'label_type_no' => 'ei',
    'sonata_core_template_box_file_found_in' => 'sonata_core_template_box_file_found_in',
    'label_type_equals' => 'on yhtä kuin',
    'label_type_not_equals' => 'ei ole yhtä kuin',
    'date_range_start' => 'Alkaen',
    'date_range_end' => 'Saakka',
    'aliceblue' => 'aliceblue',
    'antiquewhite' => 'antiquewhite',
    'aqua' => 'aqua',
    'aquamarine' => 'aquamarine',
    'azure' => 'azure',
    'beige' => 'beige',
    'bisque' => 'bisque',
    'black' => 'black',
    'blanchedalmond' => 'blanchedalmond',
    'blue' => 'blue',
    'blueviolet' => 'blueviolet',
    'brown' => 'brown',
    'burlywood' => 'burlywood',
    'cadetblue' => 'cadetblue',
    'chartreuse' => 'chartreuse',
    'chocolate' => 'chocolate',
    'coral' => 'coral',
    'cornflowerblue' => 'cornflowerblue',
    'cornsilk' => 'cornsilk',
    'crimson' => 'crimson',
    'cyan' => 'cyan',
    'darkblue' => 'darkblue',
    'darkcyan' => 'darkcyan',
    'darkgoldenrod' => 'darkgoldenrod',
    'darkgray' => 'darkgray',
    'darkgreen' => 'darkgreen',
    'darkkhaki' => 'darkkhaki',
    'darkmagenta' => 'darkmagenta',
    'darkolivegreen' => 'darkolivegreen',
    'darkorange' => 'darkorange',
    'darkorchid' => 'darkorchid',
    'darkred' => 'darkred',
    'darksalmon' => 'darksalmon',
    'darkseagreen' => 'darkseagreen',
    'darkslateblue' => 'darkslateblue',
    'darkslategray' => 'darkslategray',
    'darkturquoise' => 'darkturquoise',
    'darkviolet' => 'darkviolet',
    'deeppink' => 'deeppink',
    'deepskyblue' => 'deepskyblue',
    'dimgray' => 'dimgray',
    'dodgerblue' => 'dodgerblue',
    'firebrick' => 'firebrick',
    'floralwhite' => 'floralwhite',
    'forestgreen' => 'forestgreen',
    'fuchsia' => 'fuchsia',
    'gainsboro' => 'gainsboro',
    'ghostwhite' => 'ghostwhite',
    'gold' => 'gold',
    'goldenrod' => 'goldenrod',
    'gray' => 'gray',
    'green' => 'green',
    'greenyellow' => 'greenyellow',
    'honeydew' => 'honeydew',
    'hotpink' => 'hotpink',
    'indianred' => 'indianred',
    'indigo' => 'indigo',
    'ivory' => 'ivory',
    'khaki' => 'khaki',
    'lavender' => 'lavender',
    'lavenderblush' => 'lavenderblush',
    'lawngreen' => 'lawngreen',
    'lemonchiffon' => 'lemonchiffon',
    'lightblue' => 'lightblue',
    'lightcoral' => 'lightcoral',
    'lightcyan' => 'lightcyan',
    'lightgoldenrodyellow' => 'lightgoldenrodyellow',
    'lightgray' => 'lightgray',
    'lightgreen' => 'lightgreen',
    'lightpink' => 'lightpink',
    'lightsalmon' => 'lightsalmon',
    'lightseagreen' => 'lightseagreen',
    'lightskyblue' => 'lightskyblue',
    'lightslategray' => 'lightslategray',
    'lightsteelblue' => 'lightsteelblue',
    'lightyellow' => 'lightyellow',
    'lime' => 'lime',
    'limegreen' => 'limegreen',
    'linen' => 'linen',
    'magenta' => 'magenta',
    'maroon' => 'maroon',
    'mediumaquamarine' => 'mediumaquamarine',
    'mediumblue' => 'mediumblue',
    'mediumorchid' => 'mediumorchid',
    'mediumpurple' => 'mediumpurple',
    'mediumseagreen' => 'mediumseagreen',
    'mediumslateblue' => 'mediumslateblue',
    'mediumspringgreen' => 'mediumspringgreen',
    'mediumturquoise' => 'mediumturquoise',
    'mediumvioletred' => 'mediumvioletred',
    'midnightblue' => 'midnightblue',
    'mintcream' => 'mintcream',
    'mistyrose' => 'mistyrose',
    'moccasin' => 'moccasin',
    'navajowhite' => 'navajowhite',
    'navy' => 'navy',
    'oldlace' => 'oldlace',
    'olive' => 'olive',
    'olivedrab' => 'olivedrab',
    'orange' => 'orange',
    'orangered' => 'orangered',
    'orchid' => 'orchid',
    'palegoldenrod' => 'palegoldenrod',
    'palegreen' => 'palegreen',
    'paleturquoise' => 'paleturquoise',
    'palevioletred' => 'palevioletred',
    'papayawhip' => 'papayawhip',
    'peachpuff' => 'peachpuff',
    'peru' => 'peru',
    'pink' => 'pink',
    'plum' => 'plum',
    'powderblue' => 'powderblue',
    'purple' => 'purple',
    'rebeccapurple' => 'rebeccapurple',
    'red' => 'red',
    'rosybrown' => 'rosybrown',
    'royalblue' => 'royalblue',
    'saddlebrown' => 'saddlebrown',
    'salmon' => 'salmon',
    'sandybrown' => 'sandybrown',
    'seagreen' => 'seagreen',
    'seashell' => 'seashell',
    'sienna' => 'sienna',
    'silver' => 'silver',
    'skyblue' => 'skyblue',
    'slateblue' => 'slateblue',
    'slategray' => 'slategray',
    'snow' => 'snow',
    'springgreen' => 'springgreen',
    'steelblue' => 'steelblue',
    'tan' => 'tan',
    'teal' => 'teal',
    'thistle' => 'thistle',
    'tomato' => 'tomato',
    'turquoise' => 'turquoise',
    'violet' => 'violet',
    'wheat' => 'wheat',
    'white' => 'white',
    'whitesmoke' => 'whitesmoke',
    'yellow' => 'yellow',
    'yellowgreen' => 'yellowgreen',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
