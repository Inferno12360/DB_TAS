<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnung</title>
	<style>
table {
	margin-bottom: 1em;
}

table td {
	padding: 3px;
}

.table1 {
	border: 1px solid red;
}

.table2,.table2 td {
	border: 1px solid silver;
	border-collapse: collapse;
}

.table2 td:first-child {
	background-color: lightblue;
}

.CSSTableGenerator {
	margin: 0px;
	padding: 0px;
	width: 100%;
	box-shadow: 10px 10px 5px #888888;
	border: 1px solid #000000;
	-moz-border-radius-bottomleft: 0px;
	-webkit-border-bottom-left-radius: 0px;
	border-bottom-left-radius: 0px;
	-moz-border-radius-bottomright: 0px;
	-webkit-border-bottom-right-radius: 0px;
	border-bottom-right-radius: 0px;
	-moz-border-radius-topright: 0px;
	-webkit-border-top-right-radius: 0px;
	border-top-right-radius: 0px;
	-moz-border-radius-topleft: 0px;
	-webkit-border-top-left-radius: 0px;
	border-top-left-radius: 0px;
}

.CSSTableGenerator table {
	border-collapse: collapse;
	border-spacing: 0;
	width: 100%;
	height: 100%;
	margin: 0px;
	padding: 0px;
}

.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright: 0px;
	-webkit-border-bottom-right-radius: 0px;
	border-bottom-right-radius: 0px;
}

.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft: 0px;
	-webkit-border-top-left-radius: 0px;
	border-top-left-radius: 0px;
}

.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright: 0px;
	-webkit-border-top-right-radius: 0px;
	border-top-right-radius: 0px;
}

.CSSTableGenerator tr:last-child td:first-child {
	-moz-border-radius-bottomleft: 0px;
	-webkit-border-bottom-left-radius: 0px;
	border-bottom-left-radius: 0px;
}

.CSSTableGenerator tr:hover td {

}

.CSSTableGenerator tr:nth-child(odd) {
	background-color: #ffaa56;
}

.CSSTableGenerator tr:nth-child(even) {
	background-color: #ffffff;
}

.CSSTableGenerator td {
	vertical-align: middle;
	border: 1px solid #000000;
	border-width: 0px 1px 1px 0px;
	text-align: left;
	padding: 7px;
	font-size: 10px;
	font-family: Arial;
	font-weight: normal;
	color: #000000;
}

.CSSTableGenerator tr:last-child td {
	border-width: 0px 1px 0px 0px;
}

.CSSTableGenerator tr td:last-child {
	border-width: 0px 0px 1px 0px;
}

.CSSTableGenerator tr:last-child td:last-child {
	border-width: 0px 0px 0px 0px;
}

.CSSTableGenerator tr:first-child td {
	background: -o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00));
	background: -moz-linear-gradient(center top, #ff7f00 5%, #bf5f00 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");
	background: -o-linear-gradient(top, #ff7f00, bf5f00);
	background-color: #ff7f00;
	border: 0px solid #000000;
	text-align: center;
	border-width: 0px 0px 1px 1px;
	font-size: 14px;
	font-family: Arial;
	font-weight: bold;
	color: #ffffff;
}

.CSSTableGenerator tr:first-child:hover td {
	background: -o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00));
	background: -moz-linear-gradient(center top, #ff7f00 5%, #bf5f00 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");
	background: -o-linear-gradient(top, #ff7f00, bf5f00);
	background-color: #ff7f00;
}

.CSSTableGenerator tr:first-child td:first-child {
	border-width: 0px 0px 1px 0px;
}

.CSSTableGenerator tr:first-child td:last-child {
	border-width: 0px 0px 1px 1px;
}
</style>
</head>
<body>
    <div class="invoice">
        <div class="header">Rechnung</div>
        <div class="invoice-details">
            <div>
                <strong>Rechnungssteller:</strong><br></br>
                Max Mustermann<br>
                Musterstraße 123<br>
                12345 Musterstadt<br>
                info@musterfirma.de
            </div>
            <div>
                <strong>Rechnungsempfänger:</strong><br></br>
                Erika Musterkunde<br>
                Beispielweg 456<br>
                54321 Beispielstadt<br>
                erika@example.com<br></br>
            </div>
        </div>
        <table class="item-table">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Beschreibung</th>
                    <th>Menge</th>
                    <th>Preis pro Einheit</th>
                    <th>Gesamt</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Produkt A</td>
                    <td>2</td>
                    <td>€ 50,00</td>
                    <td>€ 100,00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Produkt B</td>
                    <td>1</td>
                    <td>€ 75,00</td>
                    <td>€ 75,00</td>
                </tr>
            </tbody>
        </table>
        <div class="total">Gesamt: € 175,00</div>
        <div class="footer">
            Vielen Dank für Ihren Einkauf!
        </div>
    </div>

	<script> // --------------------------------------------Java script stuff------------------------------------------ //	</script>


	<script src='jspdf.min.js'></script>
	<script src='html2pdf.js'></script>

	<script>
		var pdf = new jsPDF('p', 'pt', 'letter');
		var canvas = pdf.canvas;
		canvas.height = 72 * 11;
		canvas.width=72 * 8.5;;
		// var width = 400;

		html2pdf(document.body, pdf, function(canvas) {
      var iframe = document.createElement('iframe');
      iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:500px');
      document.body.appendChild(iframe);
      iframe.src = pdf.output('datauristring');
		  }
		);
  </script>
</body>
</html>
