// Agregar jugadores
document.getElementById('addPlayer').addEventListener('click', function () {
    const playerFields = document.getElementById('playerFields');
    const newPlayerFieldset = document.createElement('fieldset');
    newPlayerFieldset.classList.add('col-md-12');


    const newPlayerLabel = document.createElement('label');
    newPlayerLabel.textContent = 'Nombre completo:';
    newPlayerLabel.classList.add('form-label');
    newPlayerFieldset.appendChild(newPlayerLabel);

    const newPlayerInput = document.createElement('input');
    newPlayerInput.type = 'text';
    newPlayerInput.classList.add('form-control');
    newPlayerInput.name = 'playerNames[]';
    newPlayerInput.required = true;
    newPlayerFieldset.appendChild(newPlayerInput);

    const newUserLabel = document.createElement('label');
    newUserLabel.textContent = 'Usuario:';
    newUserLabel.classList.add('form-label');
    newPlayerFieldset.appendChild(newUserLabel);

    const newUserInput = document.createElement('input');
    newUserInput.type = 'text';
    newUserInput.name = 'playerUsernames[]';
    newUserInput.classList.add('form-control');
    newUserInput.required = true;
    newPlayerFieldset.appendChild(newUserInput);

    const newTelLabel = document.createElement('label');
    newTelLabel.textContent = 'Teléfono:';
    newTelLabel.classList.add('form-label');
    newPlayerFieldset.appendChild(newTelLabel);

    const newTelInput = document.createElement('input');
    newTelInput.type = 'text';
    newTelInput.name = 'playerTel[]';
    newTelInput.classList.add('form-control')
    newPlayerFieldset.appendChild(newTelInput);

    playerFields.appendChild(newPlayerFieldset);
});

document.getElementById('myForm').addEventListener('submit', function (event) {
    // Evita el envío del formulario por defecto
    event.preventDefault();

    // Aquí puedes agregar la lógica
});