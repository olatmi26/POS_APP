import { registerRoute } from 'workbox-routing';
import {
  NetworkFirst,
  StaleWhileRevalidate,
  CacheFirst,
} from 'workbox-strategies';

// Used for filtering matches based on status code, header, or both
import { CacheableResponsePlugin } from 'workbox-cacheable-response';
// Used to limit entries in cache, remove entries after a certain period of time
import { ExpirationPlugin } from 'workbox-expiration';

workbox.precaching.precacheAndRoute([{"revision":"133cb6ccde559821aa7b1fa541dd43c5","url":"./public/offline.html"}]);

const networkFirstHandler = new workbox.strategies.NetworkFirst({
    cacheName: 'dynamic',
    plugins: [
        new workbox.expiration.Plugin({
            maxEntries: 50
        }),
        new workbox.cacheableResponse.Plugin({
            statuses: [200]
        })
    ]
});

const FALLBACK_URL = workbox.precaching.getCacheKeyForURL('public/offline.html');
const matcher = ({ event }) => event.request.mode === 'navigate';
const handler = args =>
    networkFirstHandler
        .handle(args)
        .then(response => response || caches.match(FALLBACK_URL))
        .catch(() => caches.match(FALLBACK_URL));

workbox.routing.registerRoute(matcher, handler);
