import React from 'react';
import PageTitle from 'ui/components/data-display/PageTitle/PageTitle';
import SafeEnvironment from 'ui/components/feedback/SafeEnvironment/SafeEnvironment';
import TextFieldMask from 'ui/components/inputs/TextFieldMask/TextFieldMask';
import UserInformation from 'ui/components/data-display/UserInformation/UserInformation';
import {
    Button,
    CircularProgress,
    Container,
    Typography,
} from '@material-ui/core';
import {
    FormElementsContainer,
    ProfissionaisContainer,
    ProfissionaisPaper,
} from '@styles/pages/index.styled';
import useIndex from 'data/hooks/pages/useIndex.page';

export default function Home() {
    const {
        cep,
        setCep,
        cepValido,
        buscarFornecedores,
        erro,
        fornecedores,
        buscaFeita,
        carregando,
        fornecedoresRestantes,
    } = useIndex();

    return (
        <div>
            <SafeEnvironment />
            <PageTitle
                title={'Conheça os fornecedores'}
                subtitle={
                    'Preencha seu endereço e veja todos os profissionais da sua região'
                }
            />

            <Container sx={{ mb: 10 }}>
                <FormElementsContainer>
                    <TextFieldMask
                        label={'Digite seu CEP'}
                        mask={'99.999-999'}
                        variant={'outlined'}
                        value={cep}
                        onChange={(event) => setCep(event.target.value)}
                        fullWidth
                    />

                    {erro && <Typography color={'error'}>{erro}</Typography>}

                    <Button
                        variant={'contained'}
                        color={'secondary'}
                        sx={{ width: '220px' }}
                        disabled={!cepValido || carregando}
                        onClick={() => buscarFornecedores(cep)}
                    >
                        {carregando ? <CircularProgress size={20} /> : 'Buscar'}
                    </Button>
                </FormElementsContainer>

                {buscaFeita &&
                    (fornecedores.length > 0 ? (
                        <ProfissionaisPaper>
                            <ProfissionaisContainer>
                                {fornecedores.map((item, index) => (
                                    <UserInformation
                                        key={index}
                                        name={item.razao_social}
                                        rating={item.reputacao}
                                        description={item.cidade}
                                        description={item.bairro}
                                        picture={item.foto_estabelecimento}
                                    />
                                ))}
                            </ProfissionaisContainer>

                            <Container sx={{ textAlign: 'center' }}>
                                {fornecedoresRestantes > 0 && (
                                    <Typography sx={{ mt: 5 }}>
                                        ...e mais {fornecedoresRestantes}{' '}
                                        {fornecedoresRestantes > 1
                                            ? 'profissionais atendem'
                                            : 'profissional atende'}{' '}
                                        ao seu endereço.
                                    </Typography>
                                )}

                                
                            </Container>
                        </ProfissionaisPaper>
                    ) : (
                        <Typography align={'center'} color={'textPrimary'}>
                             Não temos nenhum fornecedor proximo em sua
                            região
                        </Typography>
                    ))}
            </Container>
        </div>
    );
}
