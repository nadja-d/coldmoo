function increment(index) {
    var countSpan = document.getElementById('countSpan' + index);
    var quantityInput = document.getElementById('quantityInput' + index);
    var currentCount = parseInt(countSpan.innerText);
    currentCount++;
    countSpan.innerText = currentCount.toString();
    quantityInput.value = currentCount.toString();
}

function decrement(index) {
    var countSpan = document.getElementById('countSpan' + index);
    var quantityInput = document.getElementById('quantityInput' + index);
    var currentCount = parseInt(countSpan.innerText);
    if (currentCount > 0) {
        currentCount--;
        countSpan.innerText = currentCount.toString();
        quantityInput.value = currentCount.toString();
    }
}
