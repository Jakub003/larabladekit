const defaultTheme = require("tailwindcss/defaultTheme")

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
		"./vendor/laravel/jetstream/**/*.blade.php",
		"./storage/framework/views/*.php",
		"./resources/views/**/*.blade.php",
	],

	darkMode: "class",

	theme: {
		extend: {
			fontFamily: {
				outfit: ["Outfit", ...defaultTheme.fontFamily.sans],
				inter: ["Inter", ...defaultTheme.fontFamily.sans],
				jakarta: ["Plus Jakarta Sans", ...defaultTheme.fontFamily.serif],
				jetBrainsMono: ["JetBrains Mono", ...defaultTheme.fontFamily.mono],
			},
			colors: {
				primary: {
					0: "--color-primary-100",
					50: "--color-primary-100",
					100: "--color-primary-100",
					200: "--color-primary-100",
					300: "--color-primary-100",
					400: "--color-primary-100",
					500: "--color-primary-100",
					600: "--color-primary-100",
					700: "--color-primary-100",
					800: "--color-primary-100",
					900: "--color-primary-100",
				},
				"secondary": {
					0: "--color-primary-100",
					50: "--color-primary-100",
					100: "--color-primary-100",
					200: "--color-primary-100",
					300: "--color-primary-100",
					400: "--color-primary-100",
					500: "--color-primary-100",
					600: "--color-primary-100",
					700: "--color-primary-100",
					800: "--color-primary-100",
					900: "--color-primary-100",
				},
				template: {
					100: "var(--color-template-100)",
					200: "var(--color-template-200)",
					300: "var(--color-template-300)",
					400: "var(--color-template-400)",
					500: "var(--color-template-500)",
					600: "var(--color-template-600)",
					700: "var(--color-template-700)",
					800: "var(--color-template-800)",
					900: "var(--color-template-900)",
				},
			},
		},
	},

	plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
}
