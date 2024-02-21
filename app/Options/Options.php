<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Partials\SocialNetworks;

class Options extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Options | Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $options = new FieldsBuilder('options');

        $options
            ->addAccordion('general', [
                'label' => 'General',
                'open' => 1,
            ])
            ->addFields($this->get(SocialNetworks::class))
            ->addAccordion('general_end')->endpoint();

        $options
            ->addAccordion('footer', [
                'label' => 'Footer',
            ])
            ->addAccordion('footer_end')->endpoint();

        return $options->build();
    }
}
