import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});


const elements = document.querySelectorAll('.reveal');
const counters = document.querySelectorAll('.counter');

const observerx = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('opacity-100', 'translate-y-0');
    }
  });
}, {
  threshold: 0.2
});

elements.forEach(el => observerx.observe(el));

const runCounter = (counter) => {
  const target = +counter.getAttribute('data-target');
  let count = 0;
  const increment = target / 100;

  const update = () => {
    count += increment;
    if (count < target) {
      counter.innerText = Math.ceil(count);
      requestAnimationFrame(update);
    } else {
      counter.innerText = target;
    }
  };

  update();
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      runCounter(entry.target);
      observer.unobserve(entry.target); // solo una vez
    }
  });
}, { threshold: 0.5 });

counters.forEach(counter => observer.observe(counter));