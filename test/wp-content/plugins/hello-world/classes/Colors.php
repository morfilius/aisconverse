<?php


class Colors
{
    private $night;
    private $morning;
    private $noon;
    private $evening;

    /**
     * Colors constructor.
     * @param $night
     * @param $morning
     * @param $noon
     * @param $evening
     */
    public function __construct($night, $morning, $noon, $evening)
    {
        $this->night = $night;
        $this->morning = $morning;
        $this->noon = $noon;
        $this->evening = $evening;
    }

    /**
     * @param $hour
     * @return string|bool
     */
    public function get_color_by_hours($hour)
    {
        switch ( $hour ) {
            case ( $hour == 'night' ) : return $this->night;
            case ( $hour == 'morning' ) : return $this->morning;
            case ( $hour == 'noon' ) : return $this->noon;
            case ( $hour == 'evening' ) : return $this->evening;
        }

        return false;
    }
}