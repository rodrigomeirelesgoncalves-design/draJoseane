</main>

<footer class="site-footer">
    <!-- Main Footer -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand -->
                <div class="footer-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <div class="logo-avatar">
                            <span>J</span>
                        </div>
                        <div class="logo-text">
                            <span class="logo-name">Dra. Joseane Souza</span>
                            <span class="logo-subtitle">Neuropsicoterapeuta</span>
                        </div>
                    </a>
                    <p class="footer-description">
                        Especialista em ansiedade e traumas emocionais. Neurociência aplicada à psicoterapia com atendimento 100% online para todo o Brasil.
                    </p>
                    <div class="social-links">
                        <?php if (get_theme_mod('social_instagram')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('social_linkedin')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                                    <rect width="4" height="12" x="2" y="9"/>
                                    <circle cx="4" cy="4" r="2"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'contato@drajoseanesouza.com.br')); ?>" class="social-link" aria-label="Email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2"/>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="footer-title">Links Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="#">Início</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#especialidades">Especialidades</a></li>
                        <li><a href="#depoimentos">Depoimentos</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="footer-title">Contato</h4>
                    <ul class="footer-contact">
                        <li><?php echo esc_html(get_theme_mod('contact_location', 'Sorriso - MT')); ?></li>
                        <li>Atendimento Online</li>
                        <li><?php echo esc_html(get_theme_mod('contact_email', 'contato@drajoseanesouza.com.br')); ?></li>
                        <li><?php echo esc_html(get_theme_mod('contact_phone', '(66) 99934-0517')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p class="footer-copyright">
                    &copy; <?php echo date('Y'); ?> Dra. Joseane Souza. Todos os direitos reservados.
                </p>
                <div class="footer-made-with">
                    <span>Feito com</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                    </svg>
                    <span>para sua saúde mental</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- WhatsApp Button -->
<a href="<?php echo esc_url(dra_joseane_get_whatsapp_url()); ?>" class="whatsapp-button" target="_blank" rel="noopener noreferrer" aria-label="Contato via WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
    </svg>
</a>

<?php wp_footer(); ?>
</body>
</html>
