function theme(){
  let hasil = document.getElementById("tema").value;

  if (hasil === "dark"){
    let kotak = document.getElementById("editor-textarea");
    let semua = document.getElementById("viewer");
    kotak.style.backgroundColor = "#000000";
    kotak.style.color = "#FFFFFF";
    semua.style.background = "#000000";
    semua.style.color = "#FFFFFF";
  }
  else if (hasil === "light"){
    var kotak = document.getElementById("editor-textarea");
    var semua = document.getElementById("viewer");
    kotak.style.backgroundColor = "#FFFFFF";
    kotak.style.color = "#000000";
    semua.style.background = "#FFFFFF";
    semua.style.color = "#000000";
  }
}

function berubah() {
  let cuaca = document.getElementById("cuaca").value;
  if (cuaca === "sunny"){
    document.getElementById("teks").innerHTML = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream.";
  }
  else{
    document.getElementById("teks").innerHTML = "Rain is falling outside, take a rain coat and a brolly, and don't say out for too long.";
  }
}

function faktorial(){
  let nilai = document.getElementById("bilangan").value;
  let hasil = 1;
  for (let i=1;i<=nilai;i++){
    hasil = hasil*i;
  }
  document.getElementById("hasil").innerHTML = "The factorial of " + nilai + " is " + hasil;
}
