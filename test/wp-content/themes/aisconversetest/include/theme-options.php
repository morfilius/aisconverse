<?php
add_action('customize_register', function($customizer) {
    $customizer->add_section(
        'section_one', array(
            'title' => 'Настройки логотипа и телефонов',
            'description' => '',
            'priority' => 11,
        )
    );

    $customizer->add_setting('logo-img');
    $customizer->add_control(new WP_Customize_Image_Control($customizer, 'logo-img', array(
        'label'    => 'Логотип',
        'section'  => 'section_one',
        'settings' => 'logo-img',
    )));
    $customizer->add_setting('phone',
        array('default' => '')
    );
    $customizer->add_control('phone', array(
            'label' => 'Телефон',
            'section' => 'section_one',
            'type' => 'text',
        )
    );
});