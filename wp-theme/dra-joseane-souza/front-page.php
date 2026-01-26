<?php
/**
 * Front Page Template
 *
 * @package Dra_Joseane_Souza
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">
            <!-- Content -->
            <div class="hero-content animate-fade-in">
                <span class="hero-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m22 8-6 4 6 4V8Z"/>
                        <rect width="14" height="12" x="2" y="6" rx="2" ry="2"/>
                    </svg>
                    Atendimento 100% Online
                </span>

                <h1 class="hero-title">
                    Recupere o <span class="highlight">equilíbrio emocional
                        <svg viewBox="0 0 300 12" fill="none">
                            <path d="M2 8C50 4 150 2 298 8" stroke="hsl(45, 80%, 55%)" stroke-width="4" stroke-linecap="round" opacity="0.6"/>
                        </svg>
                    </span> e retome o controle da sua vida
                </h1>

                <p class="hero-description">
                    Especialista em ansiedade e traumas emocionais. Neurociência aplicada à psicoterapia com escuta acolhedora, ética e personalizada.
                </p>

                <div class="hero-buttons">
                    <a href="<?php echo esc_url(dra_joseane_get_whatsapp_url()); ?>" class="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">
                        Agendar Consulta
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#sobre" class="btn btn-outline btn-lg">Conhecer Mais</a>
                </div>
            </div>

            <!-- Image -->
            <div class="hero-image-wrapper animate-fade-in-right">
                <div class="hero-image-container">
                    <div class="hero-image-arc"></div>
                    <div class="hero-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dra-joseane.png" alt="Dra. Joseane Souza - Neuropsicoterapeuta especializada em ansiedade e traumas">
                    </div>

                    <!-- Floating Cards -->
                    <div class="floating-card left">
                        <div class="floating-card-icon teal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                            </svg>
                        </div>
                        <div class="floating-card-text">
                            <small>Especialista em</small>
                            <strong>Ansiedade</strong>
                        </div>
                    </div>

                    <div class="floating-card right">
                        <div class="floating-card-icon red">
                            <div style="width: 1rem; height: 1rem; border-radius: 50%; border: 2px solid hsl(0, 84.2%, 60.2%);"></div>
                        </div>
                        <div class="floating-card-text">
                            <small>Tratamento de</small>
                            <strong>Traumas</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <h3 class="feature-title">Sigilo Garantido</h3>
                <p class="feature-description">Ambiente seguro e confidencial para você se expressar livremente.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3 class="feature-title">Horários Flexíveis</h3>
                <p class="feature-description">Atendimento adaptado à sua rotina, incluindo finais de semana.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                    </svg>
                </div>
                <h3 class="feature-title">Escuta Acolhedora</h3>
                <p class="feature-description">Atendimento humanizado com empatia e respeito à sua história.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                </div>
                <h3 class="feature-title">Base Científica</h3>
                <p class="feature-description">Técnicas fundamentadas em neurociência e evidências científicas.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about" id="sobre">
    <div class="container">
        <div class="about-grid">
            <!-- Image -->
            <div class="about-image-wrapper">
                <div class="about-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dra-joseane.png" alt="Dra. Joseane Souza">
                </div>
                <div class="about-cards">
                    <div class="about-card">
                        <span class="about-card-number">+500</span>
                        <span class="about-card-text">Pacientes Atendidos</span>
                    </div>
                    <div class="about-card">
                        <span class="about-card-number">+10</span>
                        <span class="about-card-text">Anos de Experiência</span>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="about-content">
                <h2>Conheça a <span class="highlight">Dra. Joseane Souza</span></h2>
                <p class="about-text">
                    Sou Neuropsicoterapeuta com mais de 10 anos de experiência, especializada no tratamento de ansiedade, traumas emocionais e desenvolvimento pessoal.
                </p>
                <p class="about-text">
                    Minha abordagem integra a neurociência à psicoterapia, oferecendo um tratamento personalizado e baseado em evidências científicas.
                </p>
                <ul class="about-list">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        Especialista em Neuropsicoterapia
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        Formação em Terapia Cognitivo-Comportamental
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        Atendimento Online para todo o Brasil
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        Registro no CRP ativo
                    </li>
                </ul>
                <a href="<?php echo esc_url(dra_joseane_get_whatsapp_url()); ?>" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                    Agendar Consulta
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Specialties Section -->
<section class="specialties" id="especialidades">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Especialidades</span>
            <h2 class="section-title">Áreas de <span class="highlight">atuação</span></h2>
            <p class="section-description">
                Atendimento especializado para diferentes demandas emocionais e comportamentais.
            </p>
        </div>

        <div class="specialties-grid">
            <div class="specialty-card">
                <div class="specialty-icon teal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 16.98h-5.99c-1.1 0-1.95.68-2.42 1.7l-.72 1.59a2 2 0 0 1-1.82 1.15h-.09a2 2 0 0 1-1.95-2.43l1.09-5.18a8.01 8.01 0 0 1 7.82-6.31H18a6 6 0 0 1 0 12Z"/>
                        <circle cx="13" cy="10" r="2"/>
                    </svg>
                </div>
                <h3 class="specialty-title">Ansiedade</h3>
                <p class="specialty-description">Tratamento especializado para transtornos de ansiedade, pânico e fobias.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                    </svg>
                </div>
                <h3 class="specialty-title">Traumas Emocionais</h3>
                <p class="specialty-description">Ressignificação de experiências traumáticas e restauração emocional.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon gold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/>
                    </svg>
                </div>
                <h3 class="specialty-title">Depressão</h3>
                <p class="specialty-description">Acompanhamento terapêutico para recuperar a alegria de viver.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon blue">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3 class="specialty-title">Relacionamentos</h3>
                <p class="specialty-description">Melhore seus vínculos afetivos e resolva conflitos interpessoais.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon purple">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>
                    </svg>
                </div>
                <h3 class="specialty-title">Autoestima</h3>
                <p class="specialty-description">Desenvolva autoconfiança e uma autoimagem positiva e saudável.</p>
            </div>

            <div class="specialty-card">
                <div class="specialty-icon pink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 16.98h-5.99c-1.1 0-1.95.68-2.42 1.7l-.72 1.59a2 2 0 0 1-1.82 1.15h-.09a2 2 0 0 1-1.95-2.43l1.09-5.18a8.01 8.01 0 0 1 7.82-6.31H18a6 6 0 0 1 0 12Z"/>
                    </svg>
                </div>
                <h3 class="specialty-title">Estresse</h3>
                <p class="specialty-description">Estratégias para gerenciar o estresse do dia a dia e burnout.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="how-it-works" id="como-funciona">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Como Funciona</span>
            <h2 class="section-title">Sua jornada de <span class="highlight">transformação</span></h2>
            <p class="section-description">
                Um processo simples e acolhedor para você iniciar seu tratamento terapêutico.
            </p>
        </div>

        <div class="steps-grid">
            <div class="step-card">
                <span class="step-number">01</span>
                <div class="step-content">
                    <div class="step-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                        </svg>
                    </div>
                    <h3 class="step-title">Primeiro Contato</h3>
                    <p class="step-description">Entre em contato pelo WhatsApp ou formulário. Vamos conversar sobre suas necessidades e agendar sua primeira sessão.</p>
                </div>
            </div>

            <div class="step-card">
                <span class="step-number">02</span>
                <div class="step-content">
                    <div class="step-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M8 2v4"/>
                            <path d="M16 2v4"/>
                            <rect width="18" height="18" x="3" y="4" rx="2"/>
                            <path d="M3 10h18"/>
                            <path d="M8 14h.01"/>
                            <path d="M12 14h.01"/>
                            <path d="M16 14h.01"/>
                            <path d="M8 18h.01"/>
                            <path d="M12 18h.01"/>
                            <path d="M16 18h.01"/>
                        </svg>
                    </div>
                    <h3 class="step-title">Agendamento</h3>
                    <p class="step-description">Escolha o melhor horário para você. O atendimento é 100% online, proporcionando conforto e flexibilidade.</p>
                </div>
            </div>

            <div class="step-card">
                <span class="step-number">03</span>
                <div class="step-content">
                    <div class="step-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m22 8-6 4 6 4V8Z"/>
                            <rect width="14" height="12" x="2" y="6" rx="2" ry="2"/>
                        </svg>
                    </div>
                    <h3 class="step-title">Sessão Online</h3>
                    <p class="step-description">Realizamos a sessão por videochamada em ambiente seguro e sigiloso. Tudo no conforto da sua casa.</p>
                </div>
            </div>

            <div class="step-card">
                <span class="step-number">04</span>
                <div class="step-content">
                    <div class="step-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/>
                            <path d="M5 3v4"/>
                            <path d="M19 17v4"/>
                            <path d="M3 5h4"/>
                            <path d="M17 19h4"/>
                        </svg>
                    </div>
                    <h3 class="step-title">Transformação</h3>
                    <p class="step-description">Juntos, trabalhamos no seu desenvolvimento emocional, com técnicas eficazes e acompanhamento personalizado.</p>
                </div>
            </div>
        </div>

        <div style="text-align: center;">
            <a href="<?php echo esc_url(dra_joseane_get_whatsapp_url()); ?>" class="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">
                Começar Agora
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials" id="depoimentos">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Depoimentos</span>
            <h2 class="section-title">O que dizem sobre o <span class="highlight">atendimento</span></h2>
            <p class="section-description">
                Relatos reais de pessoas que transformaram suas vidas através da terapia.
            </p>
        </div>

        <div class="testimonials-grid">
            <?php
            $testimonials = new WP_Query(array(
                'post_type'      => 'testimonial',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ));

            if ($testimonials->have_posts()) :
                while ($testimonials->have_posts()) : $testimonials->the_post();
                    $location = get_post_meta(get_the_ID(), '_testimonial_location', true);
                    $rating   = get_post_meta(get_the_ID(), '_testimonial_rating', true) ?: 5;
            ?>
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <?php for ($i = 0; $i < $rating; $i++) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <p class="testimonial-text">"<?php echo esc_html(get_the_content()); ?>"</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">
                            <?php echo strtoupper(substr(get_the_title(), 0, 1)); ?>
                        </div>
                        <div>
                            <p class="testimonial-name"><?php the_title(); ?></p>
                            <?php if ($location) : ?>
                                <p class="testimonial-location"><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default testimonials if no posts
                $default_testimonials = array(
                    array(
                        'name'     => 'Maria S.',
                        'location' => 'São Paulo - SP',
                        'text'     => 'A Dra. Joseane me ajudou a superar minha ansiedade de uma forma que eu nunca imaginei ser possível. Seu atendimento acolhedor e profissional fez toda a diferença.',
                    ),
                    array(
                        'name'     => 'João P.',
                        'location' => 'Rio de Janeiro - RJ',
                        'text'     => 'Depois de anos lutando contra traumas do passado, finalmente encontrei paz. A abordagem da Dra. Joseane é única e muito eficaz.',
                    ),
                    array(
                        'name'     => 'Ana C.',
                        'location' => 'Curitiba - PR',
                        'text'     => 'O atendimento online é muito prático e não perde em nada para o presencial. Me sinto completamente à vontade nas sessões.',
                    ),
                );

                foreach ($default_testimonials as $testimonial) :
            ?>
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <p class="testimonial-text">"<?php echo esc_html($testimonial['text']); ?>"</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">
                            <?php echo strtoupper(substr($testimonial['name'], 0, 1)); ?>
                        </div>
                        <div>
                            <p class="testimonial-name"><?php echo esc_html($testimonial['name']); ?></p>
                            <p class="testimonial-location"><?php echo esc_html($testimonial['location']); ?></p>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq" id="faq">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">FAQ</span>
            <h2 class="section-title">Perguntas <span class="highlight">Frequentes</span></h2>
            <p class="section-description">
                Tire suas dúvidas sobre o atendimento psicoterapêutico online.
            </p>
        </div>

        <div class="faq-container">
            <?php
            $faqs = new WP_Query(array(
                'post_type'      => 'faq',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ));

            if ($faqs->have_posts()) :
                while ($faqs->have_posts()) : $faqs->the_post();
            ?>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <?php the_title(); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default FAQs if no posts
                $default_faqs = array(
                    array(
                        'question' => 'Como funciona a terapia online?',
                        'answer'   => 'A terapia online acontece por videochamada em uma plataforma segura. Você pode participar de qualquer lugar, precisando apenas de um dispositivo com câmera e internet estável.',
                    ),
                    array(
                        'question' => 'A terapia online é tão eficaz quanto a presencial?',
                        'answer'   => 'Sim! Estudos científicos comprovam que a terapia online tem a mesma eficácia que a presencial para a maioria dos casos, oferecendo ainda mais comodidade e flexibilidade.',
                    ),
                    array(
                        'question' => 'Quanto tempo dura cada sessão?',
                        'answer'   => 'Cada sessão tem duração de 50 minutos, seguindo o padrão internacional de atendimento psicoterapêutico.',
                    ),
                    array(
                        'question' => 'Com qual frequência devo fazer terapia?',
                        'answer'   => 'A frequência ideal é definida em conjunto, considerando suas necessidades. Geralmente, iniciamos com sessões semanais e ajustamos conforme a evolução do tratamento.',
                    ),
                    array(
                        'question' => 'Como faço para agendar uma consulta?',
                        'answer'   => 'Você pode agendar pelo WhatsApp ou preenchendo o formulário de contato. Responderei o mais breve possível para combinarmos o melhor horário.',
                    ),
                );

                foreach ($default_faqs as $faq) :
            ?>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <?php echo esc_html($faq['question']); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p><?php echo esc_html($faq['answer']); ?></p>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contato">
    <div class="container">
        <div class="contact-grid">
            <!-- Info -->
            <div class="contact-info">
                <h2>Vamos <span class="highlight">conversar?</span></h2>
                <p class="contact-description">
                    Dê o primeiro passo em direção ao seu bem-estar emocional. Entre em contato e agende sua consulta.
                </p>

                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <strong>Localização</strong>
                            <span><?php echo esc_html(get_theme_mod('contact_location', 'Sorriso - MT')); ?></span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2"/>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <strong>Email</strong>
                            <span><?php echo esc_html(get_theme_mod('contact_email', 'contato@drajoseanesouza.com.br')); ?></span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <strong>WhatsApp</strong>
                            <span><?php echo esc_html(get_theme_mod('contact_phone', '(66) 99934-0517')); ?></span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div class="contact-text">
                            <strong>Horário</strong>
                            <span>Segunda a Sábado</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="contact-form-wrapper">
                <form class="contact-form" id="contact-form">
                    <div class="form-group">
                        <label for="name" class="form-label">Nome completo</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Seu nome" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="seu@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">WhatsApp</label>
                        <input type="tel" id="phone" name="phone" class="form-input" placeholder="(00) 00000-0000">
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Mensagem</label>
                        <textarea id="message" name="message" class="form-textarea" placeholder="Como posso ajudar você?" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        Enviar Mensagem
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
