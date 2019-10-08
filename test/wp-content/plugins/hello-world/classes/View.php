<?php


class View
{
    /**
     * @param array $vars
     */
    public function render(array $vars)
    {
        add_filter( 'the_content', function ($content) use ($vars) {
            if( is_front_page() ) {
                $html = "<span style='color: {$vars['color']}'>{$vars['word']}</span>";

                return $content.PHP_EOL.$html;
            }
            return $content;
        }, 20, 4 );
    }
}