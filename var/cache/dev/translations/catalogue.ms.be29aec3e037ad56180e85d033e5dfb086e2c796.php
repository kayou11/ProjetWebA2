<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ms', array (
  'messages' => 
  array (
    'sylius.form.attribute.type' => 'Jenis',
    'sylius.form.promotion_action.type' => 'Jenis',
    'sylius.form.promotion_rule.shipping_country_configuration.country' => 'Negara',
    'sylius.form.promotion_rule.type' => 'Jenis',
    'sylius.form.address.city' => 'Bandar',
    'sylius.form.address.company' => 'Syarikat',
    'sylius.form.address.country' => 'Negara',
    'sylius.form.address.postcode' => 'Poskod',
    'sylius.form.country.name' => 'Nama',
    'sylius.form.province.name' => 'Nama',
    'sylius.form.zone.name' => 'Nama',
    'sylius.form.zone.type' => 'Jenis',
    'sylius.form.zone.types.country' => 'Negara',
    'sylius.form.zone.types.province' => 'Wilayah',
    'sylius.ui.city' => 'Bandar',
    'sylius.ui.company' => 'Syarikat',
    'sylius.ui.country' => 'Negara',
    'sylius.ui.postcode' => 'Poskod',
    'sylius.ui.type' => 'Jenis',
    'sylius.form.image.type' => 'Jenis',
    'sylius.installer.extensions.off' => false,
    'sylius.installer.extensions.on' => true,
    'sylius.installer.settings.off' => false,
    'sylius.installer.settings.on' => true,
    'sylius.form.gateway_config.type' => 'Jenis',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
