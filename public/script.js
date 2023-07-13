

function incrementValue(stock, id) {
    var value = parseInt(document.getElementById(id).value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    value = value > stock ? stock : value;
    document.getElementById(id).value = value;
    displayPrice();
    displayTotalPrice();
}

function decrementValue(id) {
    var value = parseInt(document.getElementById(id).value, 10);
    value--;
    value = value <= 1 ? 1 : value;

    document.getElementById(id).value = value;
    displayPrice();
    displayTotalPrice();
}

function calculPrice(quantity, price) {
    totalPrice = quantity * price;
    return totalPrice;
}

function displayPrice(){
    var div = document.getElementById('normalTotal')
    div.innerHTML +='test';
}

function displayTotalPrice(){
    var div = document.getElementById('totalTaxed')
    div.innerHTML +='test';
}

function submitForm(formId) {
    document.getElementById(formId).submit();
}

function formatPrice(price) {
    formatedPrice = price / 100;
    return formatedPrice;
}

