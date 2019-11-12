<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);



if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5d8fada770103',
        'title' => 'Strona główna',
        'fields' => array(
          /* FIELDS */
            //HERO
            array(
                'key' => 'hero',
                'label' => 'Hero',
                'name' => '',
                'type'=> 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),

            array (
                'key' => 'heroTitle',
                'label' => 'Tytuł sekcji Hero',
                'name' => 'heroTitle',
                'type' => 'text',
            ),

            array (
                'key' => 'heroSubTitle',
                'label' => 'Podtytuł sekcji hero',
                'name' => 'heroSubTitle',
                'type' => 'text',
            ),

            array (
                'key' => 'heroBtn',
                'label' => 'Tekst przycisku sekcji hero',
                'name' => 'heroBtn',
                'type' => 'text',
            ),

            array (
                'key' => 'heroBtnURL',
                'label' => 'Odnośnik przycisku sekcji hero',
                'name' => 'heroBtnURL',
                'type' => 'text',
            ),

            array (
                'key' => 'heroBg',
                'label' => 'Tło sekcji hero',
                'name' => 'heroBg',
                'type' => 'image',
            ),

            // OFERTA

            array(
                'key' => 'oferta',
                'label' => 'Oferta',
                'name' => '',
                'type'=> 'tab',
                'instructions' => 'Sekcja z ofertą.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),

            array (
                'key' => 'ofertaTitle',
                'label' => 'Tytuł sekcji oferta',
                'name' => 'ofertaTitle',
                'type' => 'text',
                'instructions' => 'Główna treść tytułu sekcji oferta.',
            ),

            array (
                'key' => 'ofertaSubTitle',
                'label' => 'Podtytuł sekcji oferta',
                'name' => 'ofertaSubTitle',
                'type' => 'text',
                'instructions' => 'Treść nad tytułem sekcji oferta.',
            ),

            array (
                'key' => 'ofertaDesc',
                'label' => 'Treść Sekcji',
                'name' => 'ofertaDesc',
                'type' => 'textarea','new_lines' => 'br',
                'new_lines' => 'br',
                'instructions' => 'Opis sekcji oferta.',
            ),

            array(
                'key' => 'boxes1',
                'label' => 'Szare boksy z ikonami',
                'name' => 'boxes1',
                'type' => 'repeater',
                'instructions' => 'Dodaj boksy z ikonami.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(

                  array (
                    'key' => 'boxIcon',
                    'label' => 'Ikona boxu',
                    'name' => 'boxIcon',
                    'type' => 'image',
                  ),

                  array (
                    'key' => 'boxTitle',
                    'label' => 'Tytuł boxu',
                    'name' => 'boxTitle',
                    'type' => 'text',
                  ),

                  array (
                    'key' => 'boxDesc',
                    'label' => 'Treść boxu',
                    'name' => 'boxDesc',
                    'type' => 'textarea',
                    'new_lines' => 'br',
                  ),

                  array (
                    'key' => 'ofertaList',
                    'label' => 'Lista usług w ramach oferty',
                    'name' => 'ofertaLista',
                    'type' => 'repeater',
                    'instructions' => 'Dodaj punkty oferty',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '40',
                      'class' => '',
                      'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'table',
                    'button_label' => '',
                    'sub_fields' => array(

                      array (
                        'key' => 'punkt_new',
                        'label' => 'Punkt oferty',
                        'name' => 'punkt_new',
                        'type' => 'textarea',
                        'new_lines' => 'br',
                        'rows' => 3,
                      ),
                    ),
                  ),
                ),
              ),

                array (
                    'key' => 'detailsBg',
                    'label' => 'Tło sekcji z detalami oferty',
                    'name' => 'detailsBg',
                    'type' => 'image',
                ),


                //Baner_1

                array(
                    'key' => 'baner1',
                    'label' => 'Baner',
                    'name' => '',
                    'type'=> 'tab',
                    'instructions' => 'Pierwszy baner.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),

                array (
                    'key' => 'banerTitle',
                    'label' => 'Treść banery 1',
                    'name' => 'banerTitle',
                    'type' => 'textarea',
                    'new_lines' => 'br',
                ),

                array (
                    'key' => 'banerBtn',
                    'label' => 'Treśc przycisku baneru 1',
                    'name' => 'banerBtn',
                    'type' => 'text',
                ),

                array (
                    'key' => 'banerBtnURL',
                    'label' => 'Odnośnik przycisku baneru 1',
                    'name' => 'banerBtnURL',
                    'type' => 'text',
                ),


                //Cennik

                array(
                    'key' => 'cennik',
                    'label' => 'Cennik',
                    'name' => '',
                    'type'=> 'tab',
                    'instructions' => 'Sekcja z informacją o cenach.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),

                array (
                    'key' => 'cennikTitle',
                    'label' => 'Tytuł sekcji cennik',
                    'name' => 'cennikTitle',
                    'type' => 'text',
                    'instructions' => 'Główna treść tytułu sekcji cennik.',
                ),

                array (
                    'key' => 'cennikSubTitle',
                    'label' => 'Podtytuł sekcji cennik',
                    'name' => 'cennikSubTitle',
                    'type' => 'text',
                    'instructions' => 'Treść nad tytułem sekcji cennik.',
                ),

                array (
                    'key' => 'cennikDesc',
                    'label' => 'Treść Sekcji',
                    'name' => 'cennikDesc',
                    'type' => 'textarea',
                    'new_lines' => 'br',
                    'instructions' => 'Opis sekcji cennik.',
                ),

                array (
                    'key' => 'cennikList',
                    'label' => 'Lista rzeczy od których zalezy cena',
                    'name' => 'cennikLista',
                    'type' => 'repeater',
                    'instructions' => 'Dodaj punkt',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'table',
                    'button_label' => '',
                    'sub_fields' => array(
                    array (
                        'key' => 'punkt',
                        'label' => 'Punkt',
                        'name' => 'punkt',
                        'type' => 'text',
                    ),
                    ),
                ),

                // array (
                //     'key' => 'cennikExample',
                //     'label' => 'Przykładowe ceny',
                //     'name' => 'cennikExample',
                //     'type' => 'textarea',
                //     'instructions' => 'Przykładowe ceny.',
                // ),

                array (
                    'key' => 'cennikExample',
                    'label' => 'Przykładowe ceny usług.',
                    'name' => 'cennikExample',
                    'type' => 'repeater',
                    'instructions' => 'Dodaj punkt',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'table',
                    'button_label' => '',
                    'sub_fields' => array(
                    array (
                        'key' => 'punkt',
                        'label' => 'Punkt',
                        'name' => 'punkt',
                        'type' => 'textarea',
                    ),
                    ),
                ),

                array (
                    'key' => 'cennikSmall',
                    'label' => 'Dodatkowa informacja pod sekcją',
                    'name' => 'cennikSmall',
                    'type' => 'textarea',
                    'new_lines' => 'br',
                ),


        //O BR

        array(
            'key' => 'about',
            'label' => 'O nas',
            'name' => '',
            'type'=> 'tab',
            'instructions' => 'Sekcja z informacją o naszym Biurze Rachunkowym.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
          ),

          array (
            'key' => 'aboutTitle',
            'label' => 'Tytuł sekcji o BR',
            'name' => 'aboutTitle',
            'type' => 'text',
            'instructions' => 'Główna treść tytułu sekcji o BR.',
          ),

          array (
            'key' => 'aboutSubTitle',
            'label' => 'Podtytuł sekcji o BR',
            'name' => 'aboutSubTitle',
            'type' => 'text',
            'instructions' => 'Treść nad tytułem sekcji o BR.',
          ),

          array (
            'key' => 'aboutDesc',
            'label' => 'Treść Sekcji o BR',
            'name' => 'aboutDesc',
            'type' => 'textarea',
            'new_lines' => 'br',
            'instructions' => 'Opis sekcji o BR.',
          ),

          array (
            'key' => 'aboutImage',
            'label' => 'Zdjęcie w sekcji BR',
            'name' => 'aboutImage',
            'type' => 'image',
            'instructions' => 'Wskaż zdjęcie.',
          ),

        //Baner_2

        array(
            'key' => 'baner2',
            'label' => 'Baner2',
            'name' => '',
            'type'=> 'tab',
            'instructions' => 'Drugi baner.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
          ),

          array (
            'key' => 'baner2Title',
            'label' => 'Treść banery 2',
            'name' => 'baner2Title',
            'type' => 'textarea',
            'new_lines' => 'br',
          ),

          array (
            'key' => 'baner2Btn',
            'label' => 'Treśc przycisku baneru 2',
            'name' => 'baner2Btn',
            'type' => 'text',
          ),

          array (
            'key' => 'baner2BtnURL',
            'label' => 'Odnośnik przycisku baneru 2',
            'name' => 'baner2BtnURL',
            'type' => 'text',
            ),

            // ZAUFALI




          /* FIELDS END */
        ),
        'location' => array(
          array(
            array(
              'param' => 'page_type',
              'operator' => '==',
              'value' => 'front_page',
            ),
          ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
      ));

endif;

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5d8fb0df9edc3',
        'title' => 'Ogólne',
        'fields' => array(
            array(
                'key' => 'field_5d8fb0e874e59',
                'label' => 'Brand',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5d8fb0f174e5a',
                'label' => 'Typ Logo',
                'name' => 'typ_logo',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'text' => 'Tekstowe',
                    'img' => 'Obraz',
                ),
                'allow_null' => 0,
                'default_value' => '',
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_5d8fb12174e5b',
                'label' => 'Logo tekstowe',
                'name' => 'logo_tekstowe',
                'type' => 'text',
                'instructions' => 'Wprowadź treść.',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5d8fb0f174e5a',
                            'operator' => '==',
                            'value' => 'text',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5d8fb14074e5c',
                'label' => 'Obraz logo',
                'name' => 'obraz_logo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5d8fb0f174e5a',
                            'operator' => '==',
                            'value' => 'img',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5d8fb1db5cd9d',
                'label' => 'Kontakt',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5d8fb1f65cd9e',
                'label' => 'Krótka informacja w stopce',
                'name' => 'krotka_informacja_w_stopce',
                'type' => 'textarea',
                'new_lines' => 'br',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5d8fb2125cd9f',
                'label' => 'Telefon',
                'name' => 'telefon',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5d8fb21c5cda0',
                'label' => 'Email',
                'name' => 'email',
                'type' => 'email',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_5d8fb2265cda1',
                'label' => 'Adres',
                'name' => 'adres',
                'type' => 'textarea',
                'new_lines' => 'br',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5d8fb22d5cda2',
                'label' => 'Formularz',
                'name' => '[textarea-686]',
                'type' => 'text',
                'instructions' => 'Wskaż shortcode',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5d8fb23b5cda3',
                'label' => 'Google Maps Api',
                'name' => 'google_maps_api',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5d8fb2435cda4',
                'label' => 'Długość geograficzna',
                'name' => 'dlugosc_geograficzna',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5d8fb2535cda5',
                'label' => 'Szerokość geograficzna',
                'name' => 'szerokosc_geograficzna',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5d8fb26b5cda6',
                'label' => 'Opinie',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5d8fb2745cda7',
                'label' => 'Opinia',
                'name' => 'opinia',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5d8fb27f5cda8',
                        'label' => 'Treść',
                        'name' => 'tresc',
                        'type' => 'textarea',
                        'new_lines' => 'br',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                    ),
                    array(
                        'key' => 'field_5d8fb2885cda9',
                        'label' => 'Autor',
                        'name' => 'autor',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),

            array(
                'key' => 'field_5d8fb13gdr59d',
                'label' => 'Zaufali nam',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),

            array (
                'key' => 'clientsTitle2',
                'label' => 'Tytuł sekcji',
                'name' => 'clientsTitle2',
                'type' => 'text',
            ),

            array (
                'key' => 'clientsSubTitle2',
                'label' => 'Podtytuł sekcji',
                'name' => 'clientsSubTitle2',
                'type' => 'text',
            ),


            array(
                'key' => 'field_5dcb312b9b9a1',
                'label' => 'Klienci',
                'name' => 'klienci',
                'type' => 'repeater',
                'instructions' => 'Wprowadź logo klienta i wskaż kolor tła ramki.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5dcb31649b9a2',
                        'label' => 'Logo',
                        'name' => 'logo',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_5dcb318b9b9a3',
                        'label' => 'Kolor',
                        'name' => 'kolor',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),

                    array (
                        'key' => 'clientsURLwebpage',
                        'label' => 'Odnośnik do strony klienta',
                        'name' => 'clientsWebURL',
                        'type' => 'text',
                    ),
                ),
            ),






        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'my-options',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    endif;

function register_acf_options_pages() {

    // Check function exists.
    if( !function_exists('acf_add_options_page') )
        return;

    // register options page.
    $option_page = acf_add_options_page(array(
        'page_title' => __('Opcje ogolne'),
        'menu_title' => __('Opcje ogólne'),
        'menu_slug' => 'my-options',
        'capability' => 'edit_posts',
        'update_button' => __('Zaktualizuj dane', 'acf'),
        'updated_message' => __("Dane zaktualizowano", 'acf'),
        'redirect'      => false
    ));
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');