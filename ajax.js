$('#form').on("submit", (e) => {
  e.preventDefault();
  $.ajax({
    type: 'POST', 
    url: 'destino.php',
    data: $('#form').serialize(),
    beforeSend: () => {
      alert("Obteniendo los datos del servidor...");
    },
    success: (data) => {
     alert('Enviando datos...');
      $('#r').text(data);
    },
    error: (error) => {
      alert('Error');
      $('#r').text("Error " + error.status);
    },
  });
});