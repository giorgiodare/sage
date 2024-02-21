<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SocialNetworks extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $socialNetworks = new FieldsBuilder('social_networks');

        $socialNetworks
            ->addRepeater('social')
            ->addSelect('name', [
                'label' => 'Name',
                'choices' => [
                    'discord',
                    'dropbox',
                    'facebook',
                    'flickr',
                    'github',
                    'instagram',
                    'linkedin',
                    'medium',
                    'paypal',
                    'pinterest',
                    'reddit',
                    'spotify',
                    'tiktok',
                    'twitch',
                    'twitter',
                    'vimeo',
                    'whatsapp',
                    'youtube',
                ],
                'default_value' => ['facebook'],
            ])
            ->setWidth('25')
            ->addUrl('url', [
                'label' => 'Url',
            ])
            ->setWidth('75')
            ->endRepeater();

        return $socialNetworks;
    }
}
