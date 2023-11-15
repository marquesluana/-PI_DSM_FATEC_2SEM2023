<script>
const cidadesBrasil = [
    "São Paulo",
    "Rio de Janeiro",
    "Belo Horizonte",
    // Adicione mais cidades aqui
];

const cityInput = document.getElementById('city-input');
const cityList = document.getElementById('city-list');

cityInput.addEventListener('input', function () {
    const searchTerm = cityInput.value.toLowerCase();
    cityList.innerHTML = ''; // Limpa a lista

    cidadesBrasil.forEach(cidade => {
        if (cidade.toLowerCase().includes(searchTerm)) {
            const li = document.createElement('li');
            li.textContent = cidade;
            cityList.appendChild(li);
        }
    });
});
</script>