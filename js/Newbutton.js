function handleNew() {
    document.getElementById('ItemName').value = ""
    document.getElementById('Price').value = ""
    document.getElementById('Quantity').value = ""
    document.getElementById('Discount').value = ""
    document.getElementById('Discounted').value = ""
    document.getElementById('Cash').value = ""
    document.getElementById('Change').value = ""

    document.getElementById('senior').checked = false
    document.getElementById('DiscountCard').checked = false
    document.getElementById('Employee').checked = false
    document.getElementById('noDiscount').checked = false
}