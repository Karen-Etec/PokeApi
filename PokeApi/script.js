document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById('pokemon');
    const form = document.querySelector('form');
    const divImagem = document.getElementById('imagemPokemon');

    form.onsubmit = function (event) {
        event.preventDefault();

        const nome = input.value.toLowerCase();
        const url = `https://pokeapi.co/api/v2/pokemon/${nome}`;

        fetch(url)
            .then(res => {
                if (!res.ok) throw new Error("Pokémon não encontrado");
                return res.json();
            })
            .then(dados => {
                const imagem = dados.sprites.front_default;
                divImagem.innerHTML = `<img src="${imagem}" alt="${nome}">`;
            })
            .catch(() => {
                divImagem.innerHTML = `<p style="color:red;">Pokémon não encontrado.</p>`;
            });
    };
});
