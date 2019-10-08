<?php


class Main
{
    /**
     * @var Colors
     */
    private $colors;
    /**
     * @var Hours
     */
    private $hours;

    private $word;
    /**
     * @var View
     */
    private $view;

    /**
     * Main constructor.
     * @param Colors $colors
     * @param Hours $hours
     * @param View $view
     * @param $word
     */
    public function __construct(Colors $colors, Hours $hours, View $view, $word)
    {
        $this->colors = $colors;
        $this->hours = $hours;
        $this->word = $word;
        $this->view = $view;
    }

    public function init()
    {
        $color = $this->colors->get_color_by_hours($this->hours->get_hours());

        $this->view->render(array(
            'color' => $color,
            'word'  => $this->word
        ));
    }
}