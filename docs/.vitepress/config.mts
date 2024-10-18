import { defineConfig } from 'vitepress'

// https://vitepress.dev/reference/site-config
export default defineConfig({
    lang: 'en-US',

    title: "Laravel Countries",
    description: "Access all country data in minutes with elegant syntax",

    head: [
        [
            'link', {
                rel: 'icon',
                href: '/assets/favicon/favicon.png'
            }
        ],
        [
            'meta', {
                name: 'description',
                content: 'Laravel Countries - Access all country data in minutes with elegant syntax'
            }
        ],
        [
            'meta', {
                name: 'keywords',
                content: 'Lucas Duarte Lwwcas Laravel Package Laravel Package Countries Country Data Flags Geolocation International Codes Data API Country Information World Data Country Names ISO Codes Geonames Language Codes Rich Data Data Retrieval Global Insights Dynamic Data Responsive API Integration Data Structure Elegant Syntax Open Source'
            }
        ],
    ],

    themeConfig: {
        // https://vitepress.dev/reference/default-theme-config
        nav: [
            { text: 'Home', link: '/' },
            { text: 'Documentation', link: '/introduction/what-is-laravel-countries' }
        ],

        logo: '/assets/logo.png',
        siteTitle: false,

        sidebar: [
            {
                text: 'Introduction',
                items: [
                    { text: 'What is Laravel Countries?', link: '/introduction/what-is-laravel-countries' },
                    { text: 'Available Languages?', link: '/introduction/available-languages' },
                    { text: 'Quick snippets', link: '/introduction/quick-snippets-of-all-country-data' },
                    { text: 'Version Constraints', link: '/introduction/version-constraints' },
                    { text: 'Getting Started', link: '/introduction/getting-started' },
                ]
            },
            {
                text: 'The Basics',
                items: [
                    { text: 'Usage', link: '/the-basics/usage' },
                    { text: 'Flags', link: '/the-basics/flags' },
                    { text: 'Scopes', link: '/the-basics/scopes' },
                    { text: 'Global Scopes', link: '/the-basics/global-scopes' },
                ]
            },
            {
                text: 'Country',
                items: [
                    { text: 'Your First Look', link: '/country/first-look' },
                    { text: 'Workflow', link: '/country/workflow' },
                    { text: 'Method Listing', link: '/country/method-listing' },
                    { text: 'Currency', link: '/country/currency' },
                    { text: 'Borders', link: '/country/borders' },
                    { text: 'Relationships', link: '/country/relationships' },
                    { text: 'Translations', link: '/country/translations' },
                ]
            },
            {
                text: 'List of Countries',
                items: [
                    { text: 'Your First Look', link: '/list-country/first-look' },
                    { text: 'Scope', link: '/list-country/scope' },
                    { text: 'Single List', link: '/list-country/single-list' },
                    { text: 'Pair List', link: '/list-country/pair-list' },
                ]
            },
            {
                text: 'Flag',
                items: [
                    { text: 'Your First Look', link: '/flag/first-look' },
                    { text: 'Scope', link: '/flag/scope' },
                    { text: 'Colors', link: '/flag/colors' },
                    { text: 'Emoji', link: '/flag/emoji' },
                    { text: 'Facade', link: '/flag/facade' },
                ]
            },
            {
                text: 'Coordinates',
                items: [
                    { text: 'Your First Look', link: '/' },
                    { text: 'Workflow', link: '/' },
                    { text: 'Content', link: '/' },
                ]
            },
            {
                text: 'Demography',
                items: [
                    { text: 'Your First Look', link: '/' },
                    { text: 'Workflow', link: '/' },
                ]
            },
            {
                text: 'Geographical',
                items: [
                    { text: 'Your First Look', link: '/' },
                    { text: 'Workflow', link: '/' },
                    { text: 'Content', link: '/' },
                ]
            },
            {
                text: 'Region',
                items: [
                    { text: 'Your First Look', link: '/region/first-look' },
                    { text: 'Workflow', link: '/region/workflow' },
                    { text: 'Translations', link: '/region/translations' },

                ]
            },
            {
                text: 'Setup',
                items: [
                    { text: 'How to Integrate', link: '/setup/how-to-integrate-into-my-project' },
                    { text: 'Supported Databases', link: '/setup/supported-databases' },
                    { text: 'ER model', link: '/setup/er-model' },
                    { text: 'Migrations', link: '/setup/migrations' },
                ]
            },
        ],

        socialLinks: [
            { icon: 'github', link: 'https://github.com/lwwcas/laravel-countries' }
        ],

        footer: {
            message: 'Released under the MIT License.',
            copyright: 'Copyright © 2018-present | Developed by <a href="https://lucasduarte.dev">Lucas Duarte</a>'
        }
    }
})
