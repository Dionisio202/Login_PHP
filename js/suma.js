class Suma{
    constructor(numero1, numero2){
        this.numero1= numero1;
        this.numero2= numero2;
    }
    
    devolverSuma() {
        return this.numero1+this.numero2;
    }
}

function sumar1(){
    var numero1 = parseInt(document.getElementById("txtNumero1").value);
    var numero2 = parseInt(document.getElementById("txtNumero2").value);

    var objSuma = new Suma(numero1, numero2);

    document.getElementById("resultado").innerHTML=objSuma.devolverSuma();
}

