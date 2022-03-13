window.addEventListener('load', () => {
    registerSW();
});

// Register the Service Worker
async function registerSW() {
    if ('serviceWorker' in navigator) {
        try {
            await navigator
                .serviceWorker
                .register('/assets/js/serviceworker.js');
        } catch (e) {
            console.log('SW registration failed');
        }
    }
}