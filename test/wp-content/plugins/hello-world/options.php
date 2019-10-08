<?php
// ------------------------------------------------------------------
// Вешаем все блоки, поля и опции на хук admin_init
// ------------------------------------------------------------------
//
add_action( 'admin_init', 'hl_settings_api_init' );
function hl_settings_api_init() {
    add_settings_section(
        'hl_setting_section',
        'Настройки плагина Hello World',
        'hl_setting_section_callback_function',
        'general'
    );

    add_settings_field(
        'hl_setting_name',
        'Слово для вывода',
        'hl_setting_callback_function',
        'general',
        'hl_setting_section'
    );

    register_setting( 'general', 'hl_setting_name' );
    register_setting( 'general', 'hl_setting_name2' );
}

function hl_setting_section_callback_function() {
    echo '<p>Текст описывающий блок настроек</p>';
}

function hl_setting_callback_function() {
    echo '<input 
		name="hl_setting_name"  
		type="text" 
		value="' . get_option( 'hl_setting_name' ) . '" 
		class="code2"
	 />';
}