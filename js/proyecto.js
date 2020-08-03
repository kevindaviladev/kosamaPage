document.addEventListener("DOMContentLoaded", function() {
    // console.log(window.screen.width);
    cargarDatos();
});

function cargarDatos(){
    const idProyecto = getParameterByName('id');
    const data = new FormData();
    data.append("idProyecto", idProyecto);
    fetch("./controllers/listar_datos_proyecto_controller.php",{
      method: "POST",
      body: data
    })
    .then(function(response){
      if(response.ok){
        return response.json()
      }
    }).then(function(resultado){
      console.log(resultado);
      const datos = resultado.datos[0];
      let texto = "";
      switch (datos.tipo) {
        case 1:
          texto = 'Vivienda ';
          break;
        case 2:
          texto = "Edificio";
          break;
        case 3:
          texto = "Casa de campo";
          break;
      }

      console.log(texto); 

      let textoTipo = document.getElementsByClassName("textoBanner")[0];

      let nombreProyecto = document.getElementsByClassName("nombreProyecto")[0];
      let ubicacion = document.getElementsByClassName("content-proyecto__ubicacion")[0];
      let terreno = document.getElementsByClassName("content-proyecto__terreno")[0];
      let construido = document.getElementsByClassName("content-proyecto__construido")[0];

      // textoTipo.appendChild(document.createTextNode(texto));
      textoTipo.insertBefore(document.createTextNode(`${texto}`),textoTipo.getElementsByTagName('span')[0])
      textoTipo.insertBefore(document.createElement("br"),textoTipo.getElementsByTagName('span')[0])
      nombreProyecto.appendChild(document.createTextNode(`${datos.nombre}`));

      ubicacion.appendChild(document.createTextNode(`${datos.ubicacion}`)) 
      terreno.appendChild(document.createTextNode(`${datos.area_terreno}m² `)) 
      construido.appendChild(document.createTextNode(`${datos.area_construida}m²`)) 

      
    })
    .catch(function(err){
      console.log(err);
    })
}

function cargarFotos(){

}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    let regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
      results = regex.exec(location.search);
    return results === null
      ? ""
      : decodeURIComponent(results[1].replace(/\+/g, " "));
  }

