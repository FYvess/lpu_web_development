function handleChange() {
    cashGiven = parseInt(document.getElementById('Cash').value)
    quantity = parseInt(document.getElementById('Quantity').value)
    itemPrice = parseInt(document.getElementById('Price').value)
    discount = parseInt(document.getElementById('Discount').value)
    discounted = parseInt(document.getElementById('Discounted').value)
    totalPrice = quantity * itemPrice

    TotalQuantity += quantity
    TotalDiscount += discount
    TotalDiscounted += discounted

    document.getElementById('Change').value = cashGiven - discounted
    document.getElementById('TotalQuantity').value = TotalQuantity
    document.getElementById('TotalDiscount').value = TotalDiscount
    document.getElementById('TotalDiscounted').value = TotalDiscounted
}