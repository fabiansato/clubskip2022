function handleChange(checkbox){
  if(checkbox.checked == true){
    console.log("Aceptado");
    trespasosOFF();


  }else{
    console.log("cerradi");
  }
}

function handleChangeNo(checkbox){
  if(checkbox.checked == true){
    console.log("Aceptado NO");
    trespasosON();

  }else{
    console.log("cerradi NO");
  }
}



function trespasosOFF() {

  div2 = document.getElementById('exitotres');
  div2.style.display = 'none';
  
}





function trespasosON() {

  div2 = document.getElementById('exitotres');
  div2.style.display = '';
  }
  

