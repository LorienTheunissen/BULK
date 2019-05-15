// https://www.w3schools.com/w3css/w3css_tabulators.asp

function openTab(evt, nameTab) {
    var i, tab_content, tab_links;
    tab_content = document.getElementsByClassName("tab_content");
    for (i = 0; i < tab_content.length; i++) {
        tab_content[i].style.display = "none";
    }
    tab_links = document.getElementsByClassName("tab_links");
    for (i = 0; i < tab_links.length; i++) {
        tab_links[i].className = tab_links[i].className.replace(" active", "");
    }
    document.getElementById(nameTab).style.display = "block";
    evt.currentTarget.className += " active";
}

