import { experimentalStyled as styled } from '@material-ui/core/styles';
import { AppBar } from '@material-ui/core';

export const HeaderAppBar = styled(AppBar)`
    &.MuiAppBar-root {
        background-color: ${({ theme }) => theme.palette.background.paper};
        box-shadow: 0px 5px 4px rgba(249, 92, 0);
    }

    ${({ theme }) => theme.breakpoints.up('md')} {
        .MuiToolbar-root {
            height: 100px;
        }
    }
    ${({ theme }) => theme.breakpoints.down('md')} {
        .MuiToolbar-root {
            display: flex;
            justify-content: center;
        }
    }
`;

export const HeaderLogo = styled('img')`
    height: 25px;
    ${({ theme }) => theme.breakpoints.up('md')} {
        height: 47px;
    }
`;
