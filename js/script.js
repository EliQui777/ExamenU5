document.getElementById('calculo-form').addEventListener('submit', async function (event) {
    event.preventDefault();

    const formData = new FormData(event.target);

    try {
        const response = await fetch('calculadora.php', {
            method: 'POST',
            body: formData
        });

        const data = await response.json();

        if (data.superficie) {
            document.getElementById('resultado-texto').textContent = `La superficie del panel es de ${data.superficie} m².`;
            document.getElementById('resultado-texto').style.display = 'block';
            document.getElementById('ocultar-btn').style.display = 'inline-block';
        } else {
            alert(data.error);
        }
    } catch (error) {
        console.error('Error:', error);
    }
});

document.getElementById('ocultar-btn').addEventListener('click', function () {
    document.getElementById('resultado-texto').style.display = 'none';
    this.style.display = 'none';
});
