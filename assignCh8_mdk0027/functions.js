
function calculateTotal(quantity, price) {

    return quantity * price;
}

function outputCartRow(file, title, quantity, price, total) {
    total = calculateTotal(quantity, price)
    total = total.toFixed()
    price = price.toFixed()
    document.write("<tr>")
    document.write("<td> <img src=" + file + "> </td>")
    document.write("<td>" + title + "</td>")
    document.write("<td>" + quantity + "</td>")
    document.write("<td>" + price + "</td>")
    document.write("<td>" + total + "</td>")
    document.write("</tr>")
    
}
