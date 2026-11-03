/** Sync color hex values with config/storefront.php → palette */
tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                serif: ['"Playfair Display"', 'serif'],
            },
            colors: {
                beautage: {
                    purple: '#5E1F70',
                    purpleDark: '#452056',
                    purpleLight: '#F8F6FA',
                    purpleBorder: '#E8E0ED',
                    pink: '#9D4B86',
                    pinkHover: '#7F3D6E',
                    pinkLight: '#F3EAF1',
                    amber: '#B45309',
                    gold: '#92400E',
                    slate: '#1F2937',
                },
            },
            boxShadow: {
                sf: '0 1px 2px rgb(94 31 112 / 0.06)',
                'sf-md': '0 4px 14px rgb(94 31 112 / 0.08)',
            },
            keyframes: {
                marquee: {
                    '0%': { transform: 'translateX(0%)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
            },
            animation: {
                marquee: 'marquee 28s linear infinite',
            },
        },
    },
};
