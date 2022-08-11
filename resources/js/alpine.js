import Alpine from 'alpinejs';

document.addEventListener('alpine:init', () => {
	Alpine.data('dropdown', () => ({
		open: false,
		toggle() {
			this.open = !this.open
		},
		away() {
			this.open = false
		}
	}));
});

window.Alpine = Alpine;
Alpine.start();