function getKabupaten(val){
    {
   $.ajax({
     type: 'post',
     url: '../../view/kabupatenOptions.php',
     data: {
       idPropinsi:val
     },
     success: function (response) {
       document.getElementById("pilihKabupaten").innerHTML=response; 
     }
   });
}
}

function getKecamatan(val){
    {
   $.ajax({
     type: 'post',
     url: '../../view/kecamatanOptions.php',
     data: {
       idKabupaten:val
     },
     success: function (response) {
       document.getElementById("pilihKecamatan").innerHTML=response; 
     }
   });
}
}

function getKelurahan(val){
    {
   $.ajax({
     type: 'post',
     url: '../../view/kelurahanOptions.php',
     data: {
       idKecamatan:val
     },
     success: function (response) {
       document.getElementById("pilihDesa").innerHTML=response; 
     }
   });
}
}