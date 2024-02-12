// Agregar jugadores
document.getElementById('addPlayer').addEventListener('click', function() {
    const playerFields = document.getElementById('playerFields');
    playerFields.classList.add('col-md-12');
  
    const newPlayerFieldset1 = document.createElement('div');
    const newPlayerFieldset2 = document.createElement('div');
    const newPlayerFieldset3 = document.createElement('div');
    
    newPlayerFieldset1.classList.add('col-4');
    newPlayerFieldset2.classList.add('col-4');
    newPlayerFieldset3.classList.add('col-4');
  
    const newPlayerLabel = document.createElement('label');
    newPlayerLabel.textContent = 'Nombre completo:';
    newPlayerLabel.classList.add('form-label');
    newPlayerFieldset1.appendChild(newPlayerLabel);
  
    const newPlayerInput = document.createElement('input');
    newPlayerInput.type = 'text';
    newPlayerInput.classList.add('form-control');
    newPlayerInput.name = 'playerNames[]';
    newPlayerInput.required = true;
    newPlayerFieldset1.appendChild(newPlayerInput);
  
    const newUserLabel = document.createElement('label');
    newUserLabel.textContent = 'Usuario:';
    newUserLabel.classList.add('form-label');
    newPlayerFieldset2.appendChild(newUserLabel);
  
    const newUserInput = document.createElement('input');
    newUserInput.type = 'text';
    newUserInput.name = 'playerUsernames[]';
    newUserInput.classList.add('form-control');
    newUserInput.required = true;
    newPlayerFieldset2.appendChild(newUserInput);
  
    const newTelLabel = document.createElement('label');
    newTelLabel.textContent = 'Teléfono:';
    newTelLabel.classList.add('form-label');
    newPlayerFieldset3.appendChild(newTelLabel);
  
    const newTelInput = document.createElement('input');
    newTelInput.type = 'text';
    newTelInput.name = 'playerTel[]';
    newTelInput.classList.add('form-control')
    newPlayerFieldset3.appendChild(newTelInput);
  
  
    playerFields.appendChild(newPlayerFieldset1);
    playerFields.appendChild(newPlayerFieldset2);
    playerFields.appendChild(newPlayerFieldset3);
  });
  
  document.getElementById('myForm').addEventListener('submit', function(event) {
    // Evita el envío del formulario por defecto
    event.preventDefault();
  
    // Aquí puedes agregar la lógica
  });