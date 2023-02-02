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
					0: "var(--color-primary-0)",
					50: "var(--color-primary-50)",
					100: "var(--color-primary-100)",
					200: "var(--color-primary-200)",
					300: "var(--color-primary-300)",
					400: "var(--color-primary-400)",
					500: "var(--color-primary-500)",
					600: "var(--color-primary-600)",
					700: "var(--color-primary-700)",
					800: "var(--color-primary-800)",
					900: "var(--color-primary-900)",
				},
				secondary: {
					0: "var(--color-primary-0)",
					50: "var(--color-primary-50)",
					100: "var(--color-primary-100)",
					200: "var(--color-primary-200)",
					300: "var(--color-primary-300)",
					400: "var(--color-primary-400)",
					500: "var(--color-primary-500)",
					600: "var(--color-primary-600)",
					700: "var(--color-primary-700)",
					800: "var(--color-primary-800)",
					900: "var(--color-primary-900)",
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
