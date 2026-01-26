<?php
/**
 * Dra. Joseane Souza Theme Functions
 *
 * @package Dra_Joseane_Souza
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function dra_joseane_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'dra-joseane-souza'),
        'footer'  => __('Menu do Rodapé', 'dra-joseane-souza'),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1400;
    }
}
add_action('after_setup_theme', 'dra_joseane_setup');

/**
 * Enqueue Scripts and Styles
 */
function dra_joseane_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'dra-joseane-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'dra-joseane-style',
        get_stylesheet_uri(),
        array('dra-joseane-fonts'),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'dra-joseane-scripts',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Localize script with theme data
    wp_localize_script('dra-joseane-scripts', 'draJoseaneData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('dra_joseane_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'dra_joseane_scripts');

/**
 * Register Widget Areas
 */
function dra_joseane_widgets_init() {
    register_sidebar(array(
        'name'          => __('Barra Lateral', 'dra-joseane-souza'),
        'id'            => 'sidebar-1',
        'description'   => __('Adicione widgets aqui.', 'dra-joseane-souza'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Rodapé 1', 'dra-joseane-souza'),
        'id'            => 'footer-1',
        'description'   => __('Primeira coluna do rodapé.', 'dra-joseane-souza'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Rodapé 2', 'dra-joseane-souza'),
        'id'            => 'footer-2',
        'description'   => __('Segunda coluna do rodapé.', 'dra-joseane-souza'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Rodapé 3', 'dra-joseane-souza'),
        'id'            => 'footer-3',
        'description'   => __('Terceira coluna do rodapé.', 'dra-joseane-souza'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'dra_joseane_widgets_init');

/**
 * Theme Customizer
 */
function dra_joseane_customize_register($wp_customize) {
    // Theme Options Section
    $wp_customize->add_section('dra_joseane_options', array(
        'title'       => __('Opções do Tema', 'dra-joseane-souza'),
        'priority'    => 30,
        'description' => __('Personalize as opções do tema.', 'dra-joseane-souza'),
    ));

    // WhatsApp Number
    $wp_customize->add_setting('whatsapp_number', array(
        'default'           => '5566999340517',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('whatsapp_number', array(
        'label'       => __('Número do WhatsApp', 'dra-joseane-souza'),
        'description' => __('Número com código do país (ex: 5566999340517)', 'dra-joseane-souza'),
        'section'     => 'dra_joseane_options',
        'type'        => 'text',
    ));

    // WhatsApp Message
    $wp_customize->add_setting('whatsapp_message', array(
        'default'           => 'Olá! Gostaria de agendar uma consulta.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('whatsapp_message', array(
        'label'   => __('Mensagem do WhatsApp', 'dra-joseane-souza'),
        'section' => 'dra_joseane_options',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'contato@drajoseanesouza.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('contact_email', array(
        'label'   => __('Email de Contato', 'dra-joseane-souza'),
        'section' => 'dra_joseane_options',
        'type'    => 'email',
    ));

    // Phone
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '(66) 99934-0517',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Telefone', 'dra-joseane-souza'),
        'section' => 'dra_joseane_options',
        'type'    => 'text',
    ));

    // Location
    $wp_customize->add_setting('contact_location', array(
        'default'           => 'Sorriso - MT',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_location', array(
        'label'   => __('Localização', 'dra-joseane-souza'),
        'section' => 'dra_joseane_options',
        'type'    => 'text',
    ));

    // Social Media Section
    $wp_customize->add_section('dra_joseane_social', array(
        'title'    => __('Redes Sociais', 'dra-joseane-souza'),
        'priority' => 35,
    ));

    // Instagram
    $wp_customize->add_setting('social_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_instagram', array(
        'label'   => __('Instagram URL', 'dra-joseane-souza'),
        'section' => 'dra_joseane_social',
        'type'    => 'url',
    ));

    // LinkedIn
    $wp_customize->add_setting('social_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_linkedin', array(
        'label'   => __('LinkedIn URL', 'dra-joseane-souza'),
        'section' => 'dra_joseane_social',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'dra_joseane_customize_register');

/**
 * Helper function to get WhatsApp URL
 */
function dra_joseane_get_whatsapp_url() {
    $number  = get_theme_mod('whatsapp_number', '5566999340517');
    $message = get_theme_mod('whatsapp_message', 'Olá! Gostaria de agendar uma consulta.');
    return 'https://wa.me/' . $number . '?text=' . urlencode($message);
}

/**
 * Custom Post Type: Testimonials
 */
function dra_joseane_register_testimonials() {
    $labels = array(
        'name'               => __('Depoimentos', 'dra-joseane-souza'),
        'singular_name'      => __('Depoimento', 'dra-joseane-souza'),
        'menu_name'          => __('Depoimentos', 'dra-joseane-souza'),
        'add_new'            => __('Adicionar Novo', 'dra-joseane-souza'),
        'add_new_item'       => __('Adicionar Novo Depoimento', 'dra-joseane-souza'),
        'edit_item'          => __('Editar Depoimento', 'dra-joseane-souza'),
        'new_item'           => __('Novo Depoimento', 'dra-joseane-souza'),
        'view_item'          => __('Ver Depoimento', 'dra-joseane-souza'),
        'search_items'       => __('Buscar Depoimentos', 'dra-joseane-souza'),
        'not_found'          => __('Nenhum depoimento encontrado', 'dra-joseane-souza'),
        'not_found_in_trash' => __('Nenhum depoimento na lixeira', 'dra-joseane-souza'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'depoimentos'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'dra_joseane_register_testimonials');

/**
 * Add meta boxes for testimonials
 */
function dra_joseane_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __('Detalhes do Depoimento', 'dra-joseane-souza'),
        'dra_joseane_testimonial_meta_box_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'dra_joseane_testimonial_meta_boxes');

function dra_joseane_testimonial_meta_box_callback($post) {
    wp_nonce_field('dra_joseane_testimonial_meta', 'dra_joseane_testimonial_nonce');

    $location = get_post_meta($post->ID, '_testimonial_location', true);
    $rating   = get_post_meta($post->ID, '_testimonial_rating', true);
    ?>
    <p>
        <label for="testimonial_location"><strong><?php _e('Localização:', 'dra-joseane-souza'); ?></strong></label>
        <input type="text" id="testimonial_location" name="testimonial_location" value="<?php echo esc_attr($location); ?>" style="width: 100%;" />
    </p>
    <p>
        <label for="testimonial_rating"><strong><?php _e('Avaliação (1-5):', 'dra-joseane-souza'); ?></strong></label>
        <select id="testimonial_rating" name="testimonial_rating">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <option value="<?php echo $i; ?>" <?php selected($rating, $i); ?>><?php echo $i; ?> <?php _e('estrelas', 'dra-joseane-souza'); ?></option>
            <?php endfor; ?>
        </select>
    </p>
    <?php
}

function dra_joseane_save_testimonial_meta($post_id) {
    if (!isset($_POST['dra_joseane_testimonial_nonce']) || !wp_verify_nonce($_POST['dra_joseane_testimonial_nonce'], 'dra_joseane_testimonial_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['testimonial_location'])) {
        update_post_meta($post_id, '_testimonial_location', sanitize_text_field($_POST['testimonial_location']));
    }

    if (isset($_POST['testimonial_rating'])) {
        update_post_meta($post_id, '_testimonial_rating', intval($_POST['testimonial_rating']));
    }
}
add_action('save_post_testimonial', 'dra_joseane_save_testimonial_meta');

/**
 * Custom Post Type: FAQ
 */
function dra_joseane_register_faq() {
    $labels = array(
        'name'               => __('Perguntas Frequentes', 'dra-joseane-souza'),
        'singular_name'      => __('Pergunta', 'dra-joseane-souza'),
        'menu_name'          => __('FAQ', 'dra-joseane-souza'),
        'add_new'            => __('Adicionar Nova', 'dra-joseane-souza'),
        'add_new_item'       => __('Adicionar Nova Pergunta', 'dra-joseane-souza'),
        'edit_item'          => __('Editar Pergunta', 'dra-joseane-souza'),
        'new_item'           => __('Nova Pergunta', 'dra-joseane-souza'),
        'view_item'          => __('Ver Pergunta', 'dra-joseane-souza'),
        'search_items'       => __('Buscar Perguntas', 'dra-joseane-souza'),
        'not_found'          => __('Nenhuma pergunta encontrada', 'dra-joseane-souza'),
        'not_found_in_trash' => __('Nenhuma pergunta na lixeira', 'dra-joseane-souza'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'faq'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-editor-help',
        'supports'           => array('title', 'editor'),
        'show_in_rest'       => true,
    );

    register_post_type('faq', $args);
}
add_action('init', 'dra_joseane_register_faq');

/**
 * AJAX Contact Form Handler
 */
function dra_joseane_contact_form_handler() {
    check_ajax_referer('dra_joseane_nonce', 'nonce');

    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $phone   = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(array('message' => __('Por favor, preencha todos os campos obrigatórios.', 'dra-joseane-souza')));
    }

    $to      = get_theme_mod('contact_email', get_option('admin_email'));
    $subject = sprintf(__('Nova mensagem de contato de %s', 'dra-joseane-souza'), $name);
    $body    = sprintf(
        __("Nome: %s\nEmail: %s\nTelefone: %s\n\nMensagem:\n%s", 'dra-joseane-souza'),
        $name,
        $email,
        $phone,
        $message
    );
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => __('Mensagem enviada com sucesso! Entraremos em contato em breve.', 'dra-joseane-souza')));
    } else {
        wp_send_json_error(array('message' => __('Erro ao enviar mensagem. Por favor, tente novamente.', 'dra-joseane-souza')));
    }
}
add_action('wp_ajax_dra_joseane_contact', 'dra_joseane_contact_form_handler');
add_action('wp_ajax_nopriv_dra_joseane_contact', 'dra_joseane_contact_form_handler');

/**
 * Load Theme Text Domain
 */
function dra_joseane_load_textdomain() {
    load_theme_textdomain('dra-joseane-souza', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'dra_joseane_load_textdomain');
