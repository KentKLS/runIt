

function incrementValue(stock,id) {
    var value = parseInt(document.getElementById(id).value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    value = value > stock ? stock : value;
    document.getElementById(id).value = value;
}

function decrementValue(id) {
    var value = parseInt(document.getElementById(id).value, 10);
    value--;
    value = value <= 1 ? 1 : value;

    document.getElementById(id).value = value;
}

function submitForm(formId) {
    document.getElementById(formId).submit();
  }

  function formatPrice(price){
    formatedPrice = price/100;
    return formatedPrice;
  }

