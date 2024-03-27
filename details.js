// alert("hey");
document.getElementById("OrderForm").addEventListener("submit", function(event) {
    event.target;
    
    var customerName = document.getElementById("customerName").value;
    var product = document.getElementById("product").value;
    var quantity = document.getElementById("quantity").value;
    
    var orderSummary = "Customer Name: " + customerName + "<br>";
    orderSummary += "Product: " + product + "<br>";
    orderSummary += "Quantity: " + quantity;
    
    document.getElementById("orderSummary").innerHTML = orderSummary;
    
    document.getElementById("OrderForm").reset();

    
  });