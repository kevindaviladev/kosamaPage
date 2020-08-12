document.addEventListener("DOMContentLoaded", function() {
  // code...
  let idCategoria = getParameterByName("id");
  console.log(idCategoria);
  let src = "";
  let texto = "";
  switch (idCategoria) {
    case "1":
      src = "./assets/categoria_portada/unifamiliares.png";
      texto = "Viviendas Unifamiliares";

      break;
    case "2":
      src = "./assets/categoria_portada/edificios.png";
      texto = "Edificios";
      break;
    case "3":
      src = "./assets/categoria_portada/casas_de_campo.png";
      texto = "Casas de campo";
      break;
  }
  let portada = document.getElementsByClassName("portada-categoria")[0];
  let imgPortada = document.createElement("img");
  let textoBanner = document.createElement("p");
  let textoBannerInferior = document.createElement("p");

  imgPortada.src = src;
  textoBanner.classList.add("textoBanner");
  textoBanner.appendChild(document.createTextNode(texto));
  textoBannerInferior.classList.add("textoBannerInferior");
  textoBannerInferior.appendChild(
    document.createTextNode("Encontrando tu nuevo hogar")
  );

  //   portada.classList.add('portada.categoria');
  portada.appendChild(imgPortada);
  portada.appendChild(textoBanner);
  portada.appendChild(textoBannerInferior);

  //   document.getElementById("categoriaPortada").src = src;

  listar();
});

function getParameterByName(name) {
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  let regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
  return results === null
    ? ""
    : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function listar() {
  const idCategoria = getParameterByName("id");
  let proyectoLista = document.getElementsByClassName("categoria__lista")[0];
  let pathProyecto = "";
  switch (idCategoria) {
    case "1":
      texto = "Vivienda";
      pathProyecto = "proyectos_viviendas";
      break;
    case "2":
      texto = "Edificio";
      pathProyecto = "proyectos_edificios";
      break;
    case "3":
      pathProyecto = "proyectos_casas_campo";
      texto = "Casa de campo";
      break;
  }
  const data = new FormData();
  data.append("idCategoria", idCategoria);
  fetch("./controllers/listar_proyecto_controller.php", {
    method: "POST",
    body: data
  })
    .then(function(response) {
      if (response.ok) {
        console.log(response);
        // PRUEBA
        return response.json();
      } else {
        throw "Error en la llamada Ajax";
      }
    })
    .then(function(resultado) {
      console.log(resultado);
      resultado.datos.forEach(dato => {
        console.log(dato.nombre);
        const categoria = document.createElement("div");
        const etiqueta = document.createElement("a");
        const p = document.createElement("p");
        const span = document.createElement("span");
        const img = document.createElement("img");

        categoria.classList.add("categoria");

        span.classList.add("letraCategoria");
        span.appendChild(document.createTextNode(`${dato.nombre}`));

        p.classList.add("viviendas");
        p.appendChild(document.createTextNode(texto));
        p.appendChild(document.createElement("br"));
        p.appendChild(span);
        console.log("PATH: ",`assets/imagenes/${pathProyecto}/${dato.ruta}/1.jpg`);
        img.src = `assets/imagenes/${pathProyecto}/${dato.ruta}/1.jpg`;

        etiqueta.href = `proyecto?id=${dato.id}`;
        etiqueta.appendChild(p);
        etiqueta.appendChild(img);
        categoria.appendChild(etiqueta);

        proyectoLista.appendChild(categoria);
      });
    })
    .catch(function(err) {
      console.log(err);
    });
}
