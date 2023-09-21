(function(){

	document.getElementById('sDep').addEventListener('change', cargar_provincias);
	document.getElementById('sPro').addEventListener('change', cargar_distritos);

    cargar_provincias();
})();

function cargar_provincias() {
    const cd = document.getElementById('sDep').value;

    fetch('ubigeo/provincias/' + cd)
        .then(resp => resp.json())
        .then(data => {
            let cadena = '';
            data.forEach(element => {
                console.log(element);
				cadena += `<option value='${element.id}'>${element.despro}</option>`;
            });
			document.getElementById('sPro').innerHTML = cadena;

			cargar_distritos();
        });
}

function cargar_distritos() {
    const cp = document.getElementById('sPro').value;

    fetch('ubigeo/distritos/' + cp)
        .then(resp => resp.json())
        .then(data => {
            let cadena = '';
            data.forEach(element => {
                console.log(element);
				cadena += `<option value='${element.id}'>${element.desdist}</option>`;
            });
			document.getElementById('sDis').innerHTML = cadena;
        });
}
