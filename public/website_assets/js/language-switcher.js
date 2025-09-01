/**
 * Language Switcher for Madrassat Azhary
 * Handles language switching with immediate feedback and cache management
 */

class LanguageSwitcher {
    constructor() {
        this.currentLang = document.documentElement.lang || 'fr';
        this.isSwitching = false;
        this.init();
    }

    init() {
        this.bindEvents();
        this.updateLanguageIndicators();
        this.addCacheBusting();
    }

    bindEvents() {
        // Language switcher links
        document.querySelectorAll('.language-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                this.switchLanguage(link.getAttribute('data-lang'));
            });
        });

        // Handle browser back/forward buttons
        window.addEventListener('popstate', (e) => {
            if (e.state && e.state.locale) {
                this.updateLanguageIndicators(e.state.locale);
            }
        });
    }

    async switchLanguage(locale) {
        if (this.isSwitching || locale === this.currentLang) {
            return;
        }

        this.isSwitching = true;
        this.showLoadingState(locale);

        try {
            // Switch language via AJAX
            const response = await fetch(`/language/${locale}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'Cache-Control': 'no-cache'
                },
                credentials: 'same-origin'
            });

            if (response.ok) {
                // Update current language
                this.currentLang = locale;
                
                // Update URL without page reload
                this.updateURL(locale);
                
                // Refresh page content
                await this.refreshPageContent();
                
                // Show success message
                this.showSuccessMessage(locale);
                
                // Update language indicators
                this.updateLanguageIndicators(locale);
                
            } else {
                throw new Error(`HTTP ${response.status}`);
            }

        } catch (error) {
            console.error('Language switch failed:', error);
            this.showErrorMessage(locale);
        } finally {
            this.isSwitching = false;
            this.hideLoadingState();
        }
    }

    async refreshPageContent() {
        try {
            // Force refresh of translations
            const response = await fetch('/language/refresh', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': this.getCSRFToken()
                },
                credentials: 'same-origin'
            });

            if (response.ok) {
                // Reload the page to apply new language
                window.location.reload();
            } else {
                // Fallback: reload anyway
                window.location.reload();
            }

        } catch (error) {
            console.error('Content refresh failed:', error);
            // Fallback: reload the page
            window.location.reload();
        }
    }

    updateURL(locale) {
        const url = new URL(window.location);
        url.searchParams.set('lang', locale);
        url.searchParams.set('_t', Date.now()); // Cache busting
        
        window.history.pushState({ locale }, '', url);
    }

    updateLanguageIndicators(locale = null) {
        const currentLocale = locale || this.currentLang;
        
        // Update all language links
        document.querySelectorAll('.language-link').forEach(link => {
            const linkLang = link.getAttribute('data-lang');
            const isActive = linkLang === currentLocale;
            
            if (isActive) {
                link.style.color = '#0a2260';
                link.style.fontWeight = 'bold';
                link.classList.add('active');
            } else {
                link.style.color = '#0a2260b0';
                link.style.fontWeight = 'normal';
                link.classList.remove('active');
            }
        });

        // Update document language attribute
        document.documentElement.lang = currentLocale;
        
        // Update meta tags
        this.updateMetaTags(currentLocale);
    }

    updateMetaTags(locale) {
        // Update hreflang tags if they exist
        const hreflangTags = document.querySelectorAll('link[hreflang]');
        hreflangTags.forEach(tag => {
            if (tag.getAttribute('hreflang') === locale) {
                tag.setAttribute('href', window.location.href);
            }
        });
    }

    showLoadingState(locale) {
        // Show loading indicator on language switcher
        document.querySelectorAll('.language-link').forEach(link => {
            if (link.getAttribute('data-lang') === locale) {
                link.innerHTML = `<i class="bi bi-arrow-clockwise spin"></i> ${locale.toUpperCase()}`;
                link.style.pointerEvents = 'none';
            }
        });

        // Add loading class to body
        document.body.classList.add('language-switching');
    }

    hideLoadingState() {
        // Restore language switcher
        document.querySelectorAll('.language-link').forEach(link => {
            const lang = link.getAttribute('data-lang');
            link.innerHTML = lang.toUpperCase();
            link.style.pointerEvents = 'auto';
        });

        // Remove loading class
        document.body.classList.remove('language-switching');
    }

    showSuccessMessage(locale) {
        // Create success notification
        const notification = document.createElement('div');
        notification.className = 'language-notification success';
        notification.innerHTML = `
            <i class="bi bi-check-circle"></i>
            <span>Langue changée vers ${locale === 'en' ? 'l\'anglais' : 'le français'} avec succès !</span>
        `;

        this.showNotification(notification);
    }

    showErrorMessage(locale) {
        // Create error notification
        const notification = document.createElement('div');
        notification.className = 'language-notification error';
        notification.innerHTML = `
            <i class="bi bi-exclamation-triangle"></i>
            <span>Échec du changement de langue. Veuillez réessayer.</span>
        `;

        this.showNotification(notification);
    }

    showNotification(notification) {
        // Add notification to page
        document.body.appendChild(notification);

        // Show notification
        setTimeout(() => notification.classList.add('show'), 100);

        // Remove notification after 3 seconds
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }

    addCacheBusting() {
        // Add cache-busting parameter to all internal links
        const internalLinks = document.querySelectorAll('a[href^="/"], a[href^="' + window.location.origin + '"]');
        internalLinks.forEach(link => {
            if (!link.href.includes('_t=')) {
                const url = new URL(link.href);
                url.searchParams.set('_t', Date.now());
                link.href = url.toString();
            }
        });
    }

    getCSRFToken() {
        return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
    }
}

// Initialize language switcher when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new LanguageSwitcher();
});

// Export for global access
window.LanguageSwitcher = LanguageSwitcher;
