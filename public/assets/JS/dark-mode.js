// Dark Mode Toggle Script COMPLET - Version Florale
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
        toggleButton.setAttribute('title', initialTheme === 'dark' ? 'Passer au mode jour (tournesol)' : 'Passer au mode nuit (fleur nocturne)');
        toggleButton.innerHTML = getToggleIcon(initialTheme);
        
        // Ajouter le bouton au DOM
        document.body.appendChild(toggleButton);
        
        // Ajouter l'événement de clic
        toggleButton.addEventListener('click', toggleTheme);
        
        // Animation d'attention au début avec effet floral
        setTimeout(() => {
            toggleButton.style.animation = 'floraleGlow 3s infinite';
            setTimeout(() => {
                toggleButton.style.animation = 'none';
            }, 6000);
        }, 1000);
        
        return toggleButton;
    }
    
    // Obtenir l'icône florale appropriée pour le bouton
    function getToggleIcon(theme) {
        // Mode sombre = afficher le tournesol (pour passer au jour)
        // Mode clair = afficher la fleur nocturne (pour passer à la nuit)
        return theme === 'dark' ? '🌻' : '🌸';
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
            
            // Mettre à jour le title avec les noms de fleurs
            toggleButton.setAttribute('title', 
                newTheme === 'dark' ? 'Passer au mode jour (tournesol)' : 'Passer au mode nuit (fleur nocturne)'
            );
            
            // Animation florale du bouton lors du clic
            toggleButton.style.transform = 'scale(1.3) rotate(15deg)';
            toggleButton.style.filter = 'brightness(1.5)';
            setTimeout(() => {
                toggleButton.style.transform = 'scale(1) rotate(0deg)';
                toggleButton.style.filter = 'brightness(1)';
            }, 300);
        }
        
        // Effet de transition visuel
        document.body.style.transition = 'background-color 0.5s ease';
        
        // Log poétique pour debug
        const flowerMessage = newTheme === 'dark' ? 
            'Mode nuit activé 🌸 - Les fleurs nocturnes s\'épanouissent...' : 
            'Mode jour activé 🌻 - Le tournesol suit la lumière...';
        console.log(flowerMessage);
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
                toggleButton.setAttribute('title', 
                    newTheme === 'dark' ? 'Passer au mode jour (tournesol)' : 'Passer au mode nuit (fleur nocturne)'
                );
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
    
    // Fonction pour forcer un thème avec message floral
    window.setTheme = function(theme) {
        if (theme === 'dark' || theme === 'light') {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
            
            const toggleButton = document.querySelector('.theme-toggle');
            if (toggleButton) {
                toggleButton.innerHTML = getToggleIcon(theme);
                toggleButton.setAttribute('title', 
                    theme === 'dark' ? 'Passer au mode jour (tournesol)' : 'Passer au mode nuit (fleur nocturne)'
                );
            }
            
            const flowerMessage = theme === 'dark' ? 
                'Thème nuit forcé 🌸 - Jardin nocturne activé' : 
                'Thème jour forcé 🌻 - Jardin ensoleillé activé';
            console.log(flowerMessage);
        }
    };
    
})();

// Fonction d'aide pour vérifier le thème actuel
function getCurrentTheme() {
    return document.documentElement.getAttribute('data-theme') || 'light';
}

// Ajouter les animations florales si elles n'existent pas
function addFloralAnimations() {
    if (!document.getElementById('floral-animations')) {
        const style = document.createElement('style');
        style.id = 'floral-animations';
        style.textContent = `
            @keyframes floraleGlow {
                0% { 
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4);
                    transform: scale(1);
                }
                33% { 
                    box-shadow: 0 6px 25px rgba(255, 182, 193, 0.8);
                    transform: scale(1.05);
                }
                66% { 
                    box-shadow: 0 6px 25px rgba(255, 215, 0, 0.8);
                    transform: scale(1.05);
                }
                100% { 
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4);
                    transform: scale(1);
                }
            }
            
            .theme-toggle {
                transition: all 0.3s ease !important;
            }
            
            .theme-toggle:hover {
                transform: scale(1.15) !important;
                filter: brightness(1.2) contrast(1.1) !important;
            }
        `;
        document.head.appendChild(style);
    }
}

// Initialiser les animations
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', addFloralAnimations);
} else {
    addFloralAnimations();
}