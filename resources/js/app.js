import Alpine from 'alpinejs';
import { createIcons, icons } from 'lucide';

window.Alpine = Alpine;
window.lucide = { createIcons, icons };

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    createIcons();
});
