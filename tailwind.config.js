/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./resources/**/*.blade.php"
	],
	theme: {
		screens: {
			'2xs': '270px',
			'xs': '360px',
			'sm': '640px',
			'md': '768px',
			'lg': '1024px',
			'xl': '1280px',
			'2xl': '1536px',
		},
		extend: {
			fontFamily: {
				Oxygen: ['Oxygen'],
			}
		},
	},
	plugins: [require('@tailwindcss/forms')]
}
