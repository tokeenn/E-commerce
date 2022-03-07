let current_cart = {
    count: 0,
    products: []
};

function display_cart_logo() {
    const div = document.querySelector("#cart_logo").innerHTML = "Cart (" + current_cart.count + ")";
}

function buy(id, /*desc,*/ title, price, stock) {
    let was_found = false;
    current_cart.products.forEach((product) => {
        if (product.id === id) {
            product.quantity++;
            was_found = true;
        }
    });

    if ( !was_found) 
        current_cart.products.push({ id: id, title: title, /*desc: desc,*/ price: price, stock: stock, quantity : 1 });

    current_cart.count++;

    display_cart_logo();
    save_cart();
}

function display_cart(){
    const cart_content = document.querySelector('#cart_content');
    current_cart.products.forEach((product) => {
        cart_content.innerHTML +='<div class="product_wrapper">' + '<div class="title">' + "PRODUIT : " + product.title + '</div><div class="price">' + product.price + "€" +'</div><div class="stock">'+ "QUTÉ :" + product.quantity +"</div></div>";
    });
}

function save_cart() {
    localStorage.setItem('current_cart', JSON.stringify(current_cart));
}

function load_cart() {
    const saved_cart = JSON.parse(localStorage.getItem('current_cart'));
    if (saved_cart !== undefined && saved_cart !== null)
        current_cart = saved_cart;
    display_cart_logo();
}

load_cart();