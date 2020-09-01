module.exports = {
    theme: {
        container: {
            padding: '20px',
            screens: {
                sm: "100%",
                md: "100%",
                lg: "1108px",
                xl: "1108px", 
             }
        },
        extend: {
            spacing: {
                px: '1px',
                '0': '0',
                '1': '0.25rem',
                '1-1': '0.36rem',
                '2': '0.5rem',
                '3': '0.75rem',
                '4': '1rem',
                '4-1': '1.1rem',
                '5': '1.25rem',
                '6': '1.5rem',
                '7': '1.75rem',
                '8': '2rem',
                '9': '2.3rem',
                '10': '2.5rem', 
                '12': '3rem',
                '13': '3.4rem',
                '14': '3.6rem',
                '15': '3.8rem',
                '16': '4rem',
                '17': '4.4rem',
                '18': '4.6rem',
                '20': '5rem',
                '21': '5.6rem',
                '24': '6rem',
                '26': '7rem',
                '26-1': '7.12rem',
                '27': '127px',
                '32': '8rem',
                '33': '9.4rem',
                '34': '9.6rem',
                '35': '9.8rem',
                '40': '10rem',
                '41': '11rem',
                '42': '11.2rem', 
                '44': '11.4rem',
                '45': '11.5rem',
                '46': '11.563rem',
                '48': '12rem',
                '50': '13rem',
                '52': '13.2rem',
                '53': '13.4rem',
                '54': '13.6rem',
                '55': '13.8rem',
                '56': '14rem',
                '57': '15rem',
                '58': '16rem',
                '59': '17rem',
                '60': '18rem',
                '61': '19rem',
                '62': '20rem',
                '63': '21rem',
                '64': '22rem',
                '65': '23rem',
                '72': '30rem',
            },
            colors: {
                link: {
                    'default': '#152268',
                    'hover': '#152268',
                },
                transparent: 'transparent',
                black: '#000',
                dark: '#211915',
                title:'#5B5C5B',
                white: '#fff',
                url:'#152268',
                line: "#b3b2b2", 
                success:"#0f834d",
                info:"#3d9cd2",
                error:"#e2401c",
                body:"#e6f2f5",
                primary: { 
                    500: '#07809C', 
                    600: '#02819E', 
                },
                secondary: { 
                    500: '#02BAA8',  
                }
            }, 
            fontSize: {
                xxs: '0.67rem',
                xs: '0.87rem', 
                sm: '0.93rem',
                base: ' 1rem',
                md: ' 1.063rem',
                lg: '1.12rem',
                'lg-1': '1.18rem',
                xl: '1.25rem',
                'xl-1': '1.38rem',
                '2xl': '1.668rem',  
                '3xl': '1.87rem',
                '4xl': '2.25rem',
                '4xl-1': '2.264rem',
                '5xl': '2.61rem',
                '6xl': '4rem', 
            },
            letterSpacing: {
                tighter: '-0.05em',
                tight: '-0.025em',
                normal: '0',
                wide: '0.025em',
                'wide-1': '0.038rem',
                wider: '0.05em',
                widest: '0.1em',
            },
            lineHeight: {
                tighter: '1.125',
            }, 
            borderRadius: {
                none: '0',
                sm: '0.125rem',
                default: '0.25rem', 
                md: '0.58rem',
                lg: '0.71rem',
                xl: '0.80rem',
                '2xl': '0.95rem',
                '3xl': '1.44rem',
                '4xl': '1.95rem',
                full: '9999px',
            },
            maxWidth: {
                xxs: '16.90rem',
                xs: '20rem',
                sm: '24rem',
                md: '28rem',
                lg: '32rem',
                xl: '36rem',
                '2xl': '42rem',
                '3xl': '48rem',
                '4xl': '56rem',
                '5xl': '64rem',
                '6xl': '75rem', 
                full: '100%',
            },
            fontFamily: { 
                // roboto: [
                //     '"Roboto"',
                //     'sans-serif'
                // ],
                roboto: 'roboto', 
                robotocd : 'robotocd'
            }
        },
        screens: {
            xs: '540px',
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
            maxs: {'max': '540px'},
            maxsm: {'max': '640px'},
            maxmd: { 'max': '768px'},
            maxlg: {'max': '1023px'},
            maxl: {'max': '1280px'}
        }
        
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'visited'],
    },
    plugins: [
        ({addUtilities}) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        }
    ]
};
