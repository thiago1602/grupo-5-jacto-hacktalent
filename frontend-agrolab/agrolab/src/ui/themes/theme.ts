import { createMuiTheme } from '@material-ui/core';

const theme = createMuiTheme({
    palette: {
        primary: {
            light: '#f24f00',
            main: '#707070',
            dark: '#808080',
        },
        secondary: {
            light: '#98ff98',
            main: '#98ff98',
            dark: '#98ff98',
        },
        text: {
            primary: '#707070',
            secondary: '#9B9B9B',
        },
        error: {
            main: '#FC3C00',
        },
        warning: {
            main: '#FCA600',
        },
        success: {
            main: '#00D34D',
        },
        grey: {
            50: '#FAFAFA',
            100: '#F0F0F0',
            200: '#D7D9DD',
            300: '#C4C4C4',
            400: '#9B9B9B',
        },
    },
    typography: {
        fontFamily: 'Poppins',
    },
    shape: {
        borderRadius: '3px',
    },
    components: {
        MuiButton: {
            styleOverrides: {
                root: {
                    textTransform: 'none',
                },
            },
            variants: [
                {
                    props: { variant: 'contained', color: 'secondary' },
                    style: {
                        color: 'white',
                    },
                },
            ],
        },
        MuiPaper: {
            styleOverrides: {
                root: {
                    boxShadow: '0px 0px 39px rgba(0, 0, 0, 0.05)',
                },
            },
        },
    },
});

export default theme;
