

       document.write(outputTotals())

       
       function outputTotals() {
        var colSpanVar = 4;
        var totalVariable = "totals";


        document.write('<tr class=' + totalVariable + '>')
        document.write("<td colspan=" + colSpanVar + ">Subtotal</td>")
        document.write("<td> $" + totals() + "</td>")
        document.write("</tr>")

        document.write('<tr class=' + totalVariable + '>')
        document.write("<td colspan=" + colSpanVar + ">Tax</td>")
        document.write("<td> $" + taxAmount() + "</td>")
        document.write("</tr>")

        document.write('<tr class=' + totalVariable + '>')
        document.write("<td colspan=" + colSpanVar + ">Shipping</td>")
        document.write("<td> $" + whatsShipping() + "</td>")
        document.write("</tr>")

        document.write('<tr class=' + totalVariable + '>')
        document.write("<td colspan=" + colSpanVar + ">Grand Total</td>")
        document.write("<td> $" + grandTotal() + "</td>")
        document.write("</tr>")


       }
       
       
       function totals() {
        var total = 0;
        var i = 0;
        for (i = 0; i < prices.length; i++) {
            total += prices[i] * quantities[i]
        }

        sumtotal = total
        return total
    
    }

    function taxAmount() {
        return totals() * 0.1

    }

    function whatsShipping() {
        if (totals() < 1000) {
            return 40
        } else { 
            return 0
        }
    }

    function grandTotal() {
        return totals()+taxAmount()+whatsShipping()

    }


