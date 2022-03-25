import React from 'react';
import {
    FooterContainer,
    FooterTitle,
    SocialButton,
    AppList,
    FooterGrid,
    SocialContainer,
} from './Footer.style';
import { List, ListItem, Typography, Box } from '@material-ui/core';

const Footer: React.FC = () => {
    return (
        <FooterContainer>
            <FooterGrid>
                <div>
                    <FooterTitle>Menu</FooterTitle>
                    <List>
                        <ListItem disableGutters>
                            <Typography
                                component={'a'}
                                href={'/'}
                                color={'inherit'}
                            >
                                Encontrar um fornecedor
                            </Typography>
                        </ListItem>
                        <ListItem disableGutters>
                            <Typography
                                component={'a'}
                                href={'/'}
                                color={'inherit'}
                            >
                                Seja um Agricultor de sucesso.
                            </Typography>
                        </ListItem>
                        <ListItem disableGutters>
                            <Typography
                                component={'a'}
                                href={'/'}
                                color={'inherit'}
                            >
                                Por que usar o Agrolab?
                            </Typography>
                        </ListItem>
                        <ListItem disableGutters>
                            <Typography
                                component={'a'}
                                href={'/'}
                                color={'inherit'}
                            >
                                Principais Dúvidas
                            </Typography>
                        </ListItem>
                    </List>
                </div>

                <Box sx={{ maxWidth: '400px' }}>
                    <FooterTitle>Quem somos</FooterTitle>
                    <Typography variant={'body2'} sx={{ mt: 2 }}>
                        Agrolab te ajuda a encontrar um fornecedor e ainda te da dicas de manejo e cultivos, perfeito para
                        que você possa garantir a sua melhor colheita!
                        São muitos clientes satisfeitos por todo o país.
                    </Typography>
                </Box>

                <SocialContainer>
                    <Box sx={{ maxWidth: '400px', flex: 1 }}>
                        <FooterTitle>Conheça o nosso aplicativo</FooterTitle>
                        <AppList>
                            <li>
                                <a
                                    href={'/'}
                                    target={'_blank'}
                                    rel={'noopener noreferrer'}
                                >
                                    <img
                                        src={'/img/logos/app-store.png'}
                                        alt={'AppStore'}
                                    />
                                </a>
                            </li>
                            <li>
                                <a
                                    href={'/'}
                                    target={'_blank'}
                                    rel={'noopener noreferrer'}
                                >
                                    <img
                                        src={'/img/logos/google-play.png'}
                                        alt={'Google Play'}
                                    />
                                </a>
                            </li>
                        </AppList>
                    </Box>

                    <div>
                        <FooterTitle>Redes Sociais</FooterTitle>
                        <AppList>
                            <li>
                                <SocialButton href={'/'}>
                                    <i className={'twf-facebook-f'} />
                                </SocialButton>
                            </li>
                            <li>
                                <SocialButton href={'/'}>
                                    <i className={'twf-instagram'} />
                                </SocialButton>
                            </li>
                            <li>
                                <SocialButton href={'/'}>
                                    <i className={'twf-youtube'} />
                                </SocialButton>
                            </li>
                        </AppList>
                    </div>
                </SocialContainer>
            </FooterGrid>
        </FooterContainer>
    );
};

export default Footer;
