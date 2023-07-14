



function decrementValue(productPrice,id) {
    var quantity = parseInt(document.getElementById(id).value, 10);
    var total = document.getElementById('normalTotal');
    var totalTaxed = document.getElementById('totalTaxed');
    var totalPerProduct = document.getElementById('totalPerProduct');    
    var currentTotal = parseFloat(normalTotal.innerHTML);
    totalPerProduct.innerHTML = productPrice * quantity;
    if (quantity >  1) {
        var newTotal = currentTotal - productPrice;
        total.innerHTML = newTotal;
        totalTaxed.innerHTML = newTotal - 500;
    }
    quantity--;
    quantity = quantity <= 1 ? 1 : quantity;
    document.getElementById(id).value = quantity;

}


function incrementValue(productPrice, stock, id) {
    var quantity = parseInt(document.getElementById(id).value, 10);
    var total = document.getElementById('normalTotal');
    var totalTaxed = document.getElementById('totalTaxed');
    var totalPerProduct = document.getElementById('totalPerProduct');
    quantity = isNaN(quantity) ? 0 : quantity;
    quantity++;
    quantity = quantity > stock ? stock : quantity;
    document.getElementById(id).value = quantity;
    var currentTotal = parseFloat(normalTotal.innerHTML);
    var newTotal = currentTotal + productPrice;
    total.innerHTML = newTotal;
    totalTaxed.innerHTML = newTotal + 500;
    totalPerProduct.innerHTML = productPrice * quantity;
}

function submitForm(formId) {
    document.getElementById(formId).submit();
}
function submitForms() {
    // Get all the form elements
    var forms = document.getElementsByClassName("my-form");

    // Create an array to store the form data
    var formData = [];

    // Loop through each form and get its data
    for (var i = 0; i < forms.length; i++) {
      var form = forms[i];
      var formDataEntry = {};

      // Loop through each form field and add its name-value pair to the formDataEntry object
      for (var j = 0; j < form.elements.length; j++) {
        var element = form.elements[j];
        if (element.name) {
          formDataEntry[element.name] = element.value;
        }
      }

      formData.push(formDataEntry);
    }

    console.log(formData);
  }

function formatPrice(price) {
    var formatedPrice = (price / 100).toFixed(2) + "€";
    return formatedPrice;
}

