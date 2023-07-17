class estudiante{
    constructor(cedula,nombre,apellido,edad,telefono){
        this.cedula=cedula;
        this.nombre=nombre;
        this.apellido=apellido;
        this.edad=edad;
        this.telefono=telefono
    }

}

function devolverEstudiante(){
    var cedula = document.getElementById("cedula").value;
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var edad = document.getElementById("edad").value;
    var telefono = document.getElementById("telefono").value;

    var objEstudiante= new estudiante(cedula, nombre, apellido, edad, telefono);

    window.alert('Los datos ingresados son \n'+'Cedula: '+objEstudiante.cedula+'\n Nombre: '+objEstudiante.nombre
    +'\n Apellido: '+objEstudiante.apellido+ '\n Edad: '+ objEstudiante.edad+'\n Telefono:'+ objEstudiante.telefono
    )
}