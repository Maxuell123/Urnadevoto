var voto = document.getElementById("voto");

function votar(){
    if (voto == 15){
        confirm("Deseja mesmo votar no Iris Rezende?");
    }else if (voto == 55){
        confirm("Deseja mesmo votar no Vandelan Cardoso?");

    }else if(voto == 25){
        confirm("Deseja mesmo votar no Maguito Vilela?");
    }else{
        confirm("Deseja mesmo não votar em ninguem? O Seu voto será considerado branco");      
    };

}
