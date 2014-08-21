<head>
<style>
/* Font Size Slider */
#slider { width: 300px; padding: 0 0; margin: 0 0 }
#value_display { width: 50px; }
#resize_area { font-size: 32px; }
#ruder td { line-height: 1; margin: 0; padding: 4px; }
</style>
<script>
window.onload = function() {
	var resize_area = document.getElementById("resize_area");
	document.getElementById("slider").onchange = function() {
		value_display.value = this.value + ' px';
		resize_area.style.fontSize = this.value + "px";
	}
}
</script>
</head>
<input type="range" min="6" max="36" value="32" step="1" id="slider"><br>
<div contenteditable="true" id="resize_area" style="font-size: 32px">
	<p class="sizelabel"><input type="text" id="value_display" value="32 px" style="border:0"></p>
	<table>
		<tbody>
			<tr>
				<td>vertrag</td><td>crainte</td><td>screw</td><td width="30">&nbsp;</td><td>bibel</td><td>malhabile</td><td>modo</td>
			</tr>
			<tr>
				<td>verwalter</td><td>croyant</td><td>science</td><td>&nbsp;</td><td>biegen</td><td>peuple</td><td>punibile</td>
			</tr>
			<tr>
				<td>verzicht</td><td>fratricide</td><td>sketchy</td><td>&nbsp;</td><td>blind</td><td>qualifier</td><td>quindi</td>
			</tr>
			<tr>
				<td>vorrede</td><td>frivolité</td><td>story</td><td>&nbsp;</td><td>damals</td><td>quelle</td><td>dinamica</td>
			</tr>
			<tr>
				<td>yankee</td><td>instruction</td><td>take</td><td>&nbsp;</td><td>china</td><td>quelque</td><td>analiso</td>
			</tr>
			<tr>
				<td>zwetschge</td><td>lyre</td><td>treaty</td><td>&nbsp;</td><td>schaden</td><td>salomon</td><td>macchina</td>
			</tr>
			<tr>
				<td>zypresse</td><td>navette</td><td>tricycle</td><td>&nbsp;</td><td>schein</td><td>sellier</td><td>secondo</td>
			</tr>
			<tr>
				<td>fraktur</td><td>nocturne</td><td>typograph</td><td>&nbsp;</td><td>lager</td><td>sommier</td><td>singolo</td>
			</tr>
			<tr>
				<td>kraft</td><td>pervertir</td><td>vanity</td><td>&nbsp;</td><td>legion</td><td>unique</td><td>possibile</td>
			</tr>
			<tr>
				<td>raffeln</td><td>presto</td><td>victory</td><td>&nbsp;</td><td>mime</td><td>unanime</td><td>unico</td>
			</tr>
			<tr>
				<td>reaktion</td><td>prévoyant</td><td>vivacity</td><td>&nbsp;</td><td>mohn</td><td>usuel</td><td>legge</td>
			</tr>
			<tr>
				<td>rekord</td><td>priorité</td><td>wayward</td><td>&nbsp;</td><td>nagel</td><td>abonner</td><td>unione</td>
			</tr>
			<tr>
				<td>revolte</td><td>proscrire</td><td>efficiency</td><td>&nbsp;</td><td>puder</td><td>agir</td><td>punizione</td>
			</tr>
			<tr>
				<td>tritt</td><td>raviver</td><td>without</td><td>&nbsp;</td><td>quälen</td><td>aiglon</td><td>dunque</td>
			</tr>
			<tr>
				<td>trotzkopf</td><td>tactilité</td><td>through</td><td>&nbsp;</td><td>huldigen</td><td>allégir</td><td>quando</td>
			</tr>
			<tr>
				<td>tyrann</td><td>arrêt</td><td>known</td><td>&nbsp;</td><td>geduld</td><td>alliance</td><td>uomini</td>
			</tr>
		</tbody>
	</table>
</div>	