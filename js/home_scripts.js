
var artikelList = ARTIKEL;
var selectedArtikel;

function selectArtikel() {

}

function addArtikel() {
    const div1 = document.createElement("p");
    const textNode = document.createTextNode("clicked");
    div1.appendChild(textNode);

    const element = document.getElementById("items");
    element.appendChild(div1);
}

function testClick() {
    //var text = this.innerHTML;
    const div1 = document.createElement("p");
    const textNode = document.createTextNode("clicked");
    div1.appendChild(textNode);

    const element = document.getElementById("test");
    element.appendChild(div1);
}

