function addToCart(product)
{
    let myJson = JSON.stringify(product);

    if (window.localStorage.getItem("prod") == null) {
        window.localStorage.setItem("prod", myJson);
    } else {
        window.localStorage.setItem("prod", window.localStorage.getItem("prod")+ ";" + myJson);
    }
}

function getProdsFromLocal()
{
    let tab_prod = window.localStorage.getItem("prod").split(";");

    return tab_prod;
}

function return_prod(i)
{
    return JSON.parse(getProdsFromLocal()[i]);
}

function dispProdsCart()
{
    for(let i = 0; i < getProdsFromLocal().length; i++){
        let div = document.createElement("DIV");
        div.setAttribute('class', 'item');
        div.setAttribute('id', 'item');
        document.getElementById("cart").appendChild(div);


        let button = document.createElement("BUTTON");
        button.setAttribute('class', 'croix');
        button.setAttribute('onclick', 'remProdCart(i)');
        div.appendChild(button);


        let divi = document.createElement("i");
        button.appendChild(divi).setAttribute('class', 'fa fa-times');


        let img = document.createElement('img')
        div.appendChild(img).setAttribute("style", "height: 100px; width: 80px");


        let name = document.createElement("DIV");
        name.setAttribute('id', 'name');
        name.setAttribute('class', 'com');
        div.appendChild(name).textContent = return_prod(i).name;


        let desc = document.createElement("DIV");
        desc.setAttribute('id', 'name');
        desc.setAttribute('class', 'com');
        div.appendChild(desc).textContent = return_prod(i).description;


        let input = document.createElement("INPUT");
        input.setAttribute('id', 'name');
        input.setAttribute('type', 'number');
        input.setAttribute('style', 'height: 30px; width: 30px; margin-top: 42px;');
        div.appendChild(input);


        let price = document.createElement("DIV");
        price.setAttribute('id', 'price');
        price.setAttribute('class', 'com');
        div.appendChild(price).textContent = return_prod(i).price + "$";
    }

    function remProdCart(i)
    {
        alert("OUi");
    }
}
