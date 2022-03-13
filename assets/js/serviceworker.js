// // Script for Service Worker
var staticCacheName = 'v1';
const filesToCache = [

];

self.addEventListener("install", function(e) {
    console.log('Attempting to install service worker and cache static assets');
    e.waitUntil(
        caches.open(staticCacheName).then(function(cache) {
            return cache.addAll(filesToCache);
        })
    );
});

// self.addEventListener('fetch', (event) => {
//     event.respondWith(
//         caches.match(event.request).then((resp) => {
//             return resp || fetch(event.request).then((response) => {
//                 return caches.open(staticCacheName).then((cache) => {
//                     cache.put(event.request, response.clone());
//                     return response;
//                 });
//             });
//         })
//     );
// });

self.addEventListener('fetch', function(event) {
    event.respondWith(caches.match(event.request).then(function(response) {
        // caches.match() always resolves
        // but in case of success response will have value
        if (response !== undefined) {
            return response;
        } else {
            return fetch(event.request).then(function(response) {
                // response may be used only once
                // we need to save clone to put one copy in cache
                // and serve second one
                let responseClone = response.clone();

                caches.open(staticCacheName).then(function(cache) {
                    cache.put(event.request, responseClone);
                });
                return response;
            }).catch(function() {
                for (let item = 0; item < filesToCache.length; item++) {
                    return caches.match(item);
                }
            });
        }
    }));
});