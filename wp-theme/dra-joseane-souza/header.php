<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Dra. Joseane Souza">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:locale" content="pt_BR">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <div class="logo-avatar">
                    <span>J</span>
                </div>
                <div class="logo-text">
                    <span class="logo-name">Dra. Joseane Souza</span>
                    <span class="logo-subtitle">Neuropsicoterapeuta</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="main-nav">
                <a href="#" class="nav-link">Início</a>
                <a href="#sobre" class="nav-link">Sobre</a>
                <a href="#especialidades" class="nav-link">Especialidades</a>
                <a href="#como-funciona" class="nav-link">Como Funciona</a>
                <a href="#depoimentos" class="nav-link">Depoimentos</a>
                <a href="#faq" class="nav-link">FAQ</a>
                <a href="<?php echo esc_url(dra_joseane_get_whatsapp_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    Agendar Consulta
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" id="mobile-menu-btn" aria-label="Abrir menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="menu-icon">
                    <line x1="4" x2="20" y1="12" y2="12"/>
                    <line x1="4" x2="20" y1="6" y2="6"/>
                    <line x1="4" x2="20" y1="18" y2="18"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="close-icon" style="display: none;">
                    <path d="M18 6 6 18"/>
                    <path d="m6 6 12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav" id="mobile-nav">
        <a href="#" class="nav-link">Início</a>
        <a href="#sobre" class="nav-link">Sobre</a>
        <a href="#especialidades" class="nav-link">Especialidades</a>
        <a href="#como-funciona" class="nav-link">Como Funciona</a>
        <a href="#depoimentos" class="nav-link">Depoimentos</a>
        <a href="#faq" class="nav-link">FAQ</a>
        <a href="<?php echo esc_url(dra_joseane_get_whatsapp_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener noreferrer" style="width: 100%; margin-top: 1rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            Agendar Consulta
        </a>
    </nav>
</header>

<main id="main-content">
