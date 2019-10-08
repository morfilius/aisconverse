<?php


class Hours
{
    private $hours;

    public function __construct()
    {
        $now_hours = date('G');

        switch ( $now_hours ) {
            case ( $now_hours < 8 ) : $this->hours = 'night'; break;
            case ( $now_hours < 12 && $now_hours >= 8 ) : $this->hours = 'morning'; break;
            case ( $now_hours >= 12 && $now_hours < 17 ) : $this->hours = 'noon'; break;
            case ( $now_hours >= 17 && $now_hours <= 23 ) : $this->hours = 'evening'; break;
        }
    }

    public function get_hours()
    {
        return $this->hours;
    }
}