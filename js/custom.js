function printDiv() 
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><head><title>Cetak Invoice</title></head><body onload="window.print()"><font face="Arial"><p align="center"><strong>DETAIL PESANAN</strong><hr/></p>'+printedArea.innerHTML+'</font></body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}

function printDivUser() 
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><head><title>Cetak Invoice</title></head><body onload="window.print()"><font face="Arial"><p align="center"><strong>'+siteTitle.innerHTML+' Invoices</strong><hr height="2px" /></p>'+printedArea.innerHTML+'<hr height="2px" /><p align="center"><strong>KETENTUAN PEMBAYARAN</strong></p><ol>'+ketentuanArea.innerHTML+'</ol></font></body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}