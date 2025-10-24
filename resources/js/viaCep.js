document.addEventListener('DOMContentLoaded', () => {
    const btnBuscar = document.getElementById('btnBuscarCep');
    if (!btnBuscar) return;

    btnBuscar.addEventListener('click', () => {
        const cepInput = document.querySelector('input[name="cep"]');
        if (!cepInput) {
            alert('Campo CEP não encontrado!');
            return;
        }

        let cep = cepInput.value.replace(/\D/g, '');
        if (cep.length !== 8) {
            alert('CEP inválido!');
            return;
        }

        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(res => res.json())
            .then(data => {
                if (data.erro) {
                    alert('CEP não encontrado!');
                    return;
                }

                const logradouro = document.querySelector('input[name="logradouro"]');
                const bairro = document.querySelector('input[name="bairro"]');
                const cidade = document.querySelector('input[name="cidade"]');
                const uf = document.querySelector('input[name="uf"]');

                logradouro.value = data.logradouro || '';
                bairro.value = data.bairro || '';
                cidade.value = data.localidade || '';
                uf.value = data.uf || '';
            })
            .catch(error => console.error('Erro ao consultar o CEP:', error));
    });
});





