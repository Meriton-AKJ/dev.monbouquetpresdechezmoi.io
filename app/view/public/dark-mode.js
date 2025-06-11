// Dark Mode Toggle Script COMPLET
(function() {
    // Vérifier le thème sauvegardé ou utiliser le thème système
    const savedTheme = localStorage.getItem('theme');
    const systemDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    // Définir le thème initial
    const initialTheme = savedTheme || (systemDarkMode ? 'dark' : 'light');
    
    // Appliquer le thème initial
    document.documentElement.setAttribute('data-theme', initialTheme);
    
    // Créer le bouton de toggle
    function createThemeToggle() {
        const toggleButton = document.createElement('button');
        toggleButton.className = 'theme-toggle';
        toggleButton.setAttribute('aria-label', 'Changer le thème');
        toggleButton.setAttribute('title', 'Basculer entre mode clair et sombre');
        toggleButton.innerHTML = getToggleIcon(initialTheme);
        
        // Ajouter le bouton au DOM
        document.body.appendChild(toggleButton);
        
        // Ajouter l'événement de clic
        toggleButton.addEventListener('click', toggleTheme);
        
        // Animation d'attention au début
        setTimeout(() => {
            toggleButton.style.animation = 'pulse 2s infinite';
            setTimeout(() => {
                toggleButton.style.animation = 'none';
            }, 4000);
        }, 1000);
        
        return toggleButton;
    }
    
    // Obtenir l'icône appropriée pour le bouton
    function getToggleIcon(theme) {
        return theme === 'dark' ? '☀️' : '🌙';
    }
    
    // Fonction pour changer de thème
    function toggleTheme() {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        
        // Appliquer le nouveau thème
        document.documentElement.setAttribute('data-theme', newTheme);
        
        // Sauvegarder dans localStorage
        localStorage.setItem('theme', newTheme);
        
        // Mettre à jour l'icône du bouton
        const toggleButton = document.querySelector('.theme-toggle');
        if (toggleButton) {
            toggleButton.innerHTML = getToggleIcon(newTheme);
            
            // Animation du bouton lors du clic
            toggleButton.style.transform = 'scale(1.2)';
            setTimeout(() => {
                toggleButton.style.transform = 'scale(1)';
            }, 200);
        }
        
        // Effet de transition visuel
        document.body.style.transition = 'background-color 0.3s ease';
        
        // Log pour debug (peut être retiré en production)
        console.log(`Thème changé vers: ${newTheme}`);
    }
    
    // Écouter les changements de préférence système
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
        // Ne changer automatiquement que si l'utilisateur n'a pas de préférence sauvegardée
        if (!localStorage.getItem('theme')) {
            const newTheme = e.matches ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', newTheme);
            
            const toggleButton = document.querySelector('.theme-toggle');
            if (toggleButton) {
                toggleButton.innerHTML = getToggleIcon(newTheme);
            }
        }
    });
    
    // Initialiser quand le DOM est prêt
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', createThemeToggle);
    } else {
        createThemeToggle();
    }
    
    // Exposer la fonction toggle globalement pour une utilisation éventuelle
    window.toggleTheme = toggleTheme;
    
    // Fonction pour vérifier si le dark mode est actif
    window.isDarkMode = function() {
        return document.documentElement.getAttribute('data-theme') === 'dark';
    };
    
    // Fonction pour forcer un thème
    window.setTheme = function(theme) {
        if (theme === 'dark' || theme === 'light') {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
            
            const toggleButton = document.querySelector('.theme-toggle');
            if (toggleButton) {
                toggleButton.innerHTML = getToggleIcon(theme);
            }
            
            console.log(`Thème forcé vers: ${theme}`);
        }
    };
    
})();

// Fonction d'aide pour vérifier le thème actuel
function getCurrentTheme() {
    return document.documentElement.getAttribute('data-theme') || 'light';
}

// Ajouter les styles d'animation si ils n'existent pas
function addPulseAnimation() {
    if (!document.getElementById('pulse-animation')) {
        const style = document.createElement('style');
        style.id = 'pulse-animation';
        style.textContent = `
            @keyframes pulse {
                0% { box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4); }
                50% { box-shadow: 0 6px 25px rgba(74, 222, 128, 0.6); }
                100% { box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4); }
            }
        `;
        document.head.appendChild(style);
    }
}

// Initialiser l'animation
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', addPulseAnimation);
} else {
    addPulseAnimation();
}