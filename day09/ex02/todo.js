window.onload = function() {
    console.log(document.cookie);
    var arr = document.cookie.split(';');
    if (Array.isArray(arr) && arr[0] != '') {
        for (let i = 0; i < arr.length; i++) {
            tmp = arr[i].trim().split('=');
            console.log(tmp);
            add(tmp[0], tmp[1]);
        }
    }
}
function ask() {
    var name = prompt("Please enter a name of new TO DO:");
    if (name != '') {
        var k;
        if (document.getElementById('ft_list').children.length)
        {
            if (Number(document.getElementById('ft_list').firstChild.getAttribute('class')) > document.getElementById('ft_list').children.length)
            {
                k = Number(document.getElementById('ft_list').firstChild.getAttribute('class')) + 1;
            }
            else {
                k = document.getElementById('ft_list').children.length + 1;
            }
        }
        else
            k = 0;
        add(k ,name);
    }
}

function add(i, name) {
    console.log(i);
    if (name != '' && name != 'null') {
        var node = document.createElement("DIV");
        node.classList.add(i);
        var textnode = document.createTextNode(name);
        node.appendChild(textnode);
        node.addEventListener("click", del);
        // node.addEventListener("click", function() { delCookies(document.getElementsByName(name)); });
        document.getElementById("ft_list").insertBefore(node, document.getElementById("ft_list").firstChild);
        addCookies(i, name);
    }

}

function del() {
    if (confirm("Do you really want to delete this TO DO?")) {

        delCookies(this.getAttribute('class'));
        this.parentNode.removeChild(this);
        console.log(this.getAttribute('class'));


    }
}

function addCookies(i, name) {
    document.cookie = i + "=" + name + ";";
}

function delCookies(name) {
   console.log(name);

    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

}



