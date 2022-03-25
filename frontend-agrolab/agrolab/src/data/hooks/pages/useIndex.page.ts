import { UserShortInterface } from 'data/@types/UserInterface';
import { ApiService } from 'data/services/ApiService';
import { ValidationService } from 'data/services/ValidationService';
import { useState, useMemo } from 'react';

export default function useIndex() {
    const [cep, setCep] = useState(''),
        cepValido = useMemo(() => {
            return ValidationService.cep(cep);
        }, [cep]),
        [erro, setErro] = useState(''),
        [buscaFeita, setBuscaFeita] = useState(false),
        [carregando, setCarregando] = useState(false),
        [fornecedores, setFornecedores] = useState([] as UserShortInterface[]),
        [fornecedoresRestantes, setFornecedoresRestantes] = useState(0);

    async function buscarFornecedores(cep: string) {
        setBuscaFeita(false);
        setCarregando(true);
        try {
            setErro('');
            const { data } = await ApiService.get<{
                fornecedores: UserShortInterface[];
                quantidade_fornecedores: number;
            }>('/api/fornecedores-cidade?cep=' + cep.replace(/\D/g, ''));

            setBuscaFeita(true);
            setFornecedores(data.fornecedores);
            setFornecedoresRestantes(data.quantidade_fornecedores);
            setCarregando(false);
        } catch (error) {
            setErro('CEP não encontrado');
            setCarregando(false);
        }
    }

    return {
        cep,
        setCep,
        cepValido,
        buscarFornecedores,
        erro,
        fornecedores,
        buscaFeita,
        carregando,
        fornecedoresRestantes,
    };
}
