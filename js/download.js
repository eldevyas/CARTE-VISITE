var doc = new jsPDF();

function saveDiv() {
    doc.fromHTML(`
    <html>
        <head><title>Hh</title>
            
        </head>
        
        <body>` + document.getElementById('back').innerHTML + `</body>
        
    </html>`);
    doc.save('div.pdf');
}

function printDiv(divId,
    title) {

    let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

    mywindow.document.write(`<html><head><title>Carte Visite</title>`);
    mywindow.document.write('</head><body >');
    mywindow.document.write(document.getElementById('back').innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}