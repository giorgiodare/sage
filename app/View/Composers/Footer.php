<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'sections.footer'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'social' => $this->social(),
        ];
    }

    private function social()
    {
        $social = get_field('social', 'option');

        $output = [];

        if (!empty($social)) {
            foreach ($social as $item) {
                $output[] = [
                    'name' => $item['name'],
                    'url' => $item['url'],
                ];
            }
        }

        return $output;
    }
}
