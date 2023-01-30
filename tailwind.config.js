const defaultTheme = require("tailwindcss/defaultTheme")

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
		"./vendor/laravel/jetstream/**/*.blade.php",
		"./storage/framework/views/*.php",
		"./resources/views/**/*.blade.php",
	],

	theme: {
		extend: {
			fontFamily: {
				outfit: ["Outfit", ...defaultTheme.fontFamily.sans],
				inter: ["Inter", ...defaultTheme.fontFamily.sans],
				jakarta: ["Plus Jakarta Sans", ...defaultTheme.fontFamily.serif],
				jetBrainsMono: ["JetBrains Mono", ...defaultTheme.fontFamily.mono],
			},
			colors: {
				theme: {
					primary: "var(--color-primary-100)",
					"primary-hover": "var(--color-primary-200)",
					"primary-soft-hover": "var(--color-primary-300)",

					blue: "var(--color-blue)",
					"blue-accent": "var(--color-blue-accent)",

					gray: "var(--color-gray)",
					"gray-accent": "var(--color-gray-accent)",

					green: "var(--color-green)",
					"green-accent": "var(--color-green-accent)",

					red: "var(--color-red)",
					"red-accent": "var(--color-red-accent)",

					yellow: "var(--color-yellow)",
					"yellow-accent": "var(--color-yellow-accent)",

					purple: "var(--color-purple)",
					"purple-accent": "var(--color-purple-accent)",

					white: "var(--color-white)",
					"white-accent": "var(--color-white)",
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
			textColor: {
				theme: {
					base: "var(--color-text-100)",
					accent: "var(--color-text-200)",
					element: "var(--color-text-300)",
					content: "var(--color-text-400) ",
					muted: "var(--color-text-500)",
				},
			},
			borderColor: {
				theme: {
					100: "var(--color-border-100)",
					200: "var(--color-border-200)",
					300: "var(--color-border-300)",
					400: "var(--color-border-400)",
					500: "var(--color-border-500)",
				},
			},
			backgroundColor: {
				theme: {
					100: "var(--color-background-100)",
					200: "var(--color-background-200)",
					300: "var(--color-background-300)",
					400: "var(--color-background-400)",
					500: "var(--color-background-500)",
				},
			},
		},
	},

	plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
}
