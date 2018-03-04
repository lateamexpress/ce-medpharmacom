"use strict";

document.addEventListener('DOMContentLoaded', () => {
    const btnAdd = document.querySelectorAll('.add');
    const btnRemove = document.querySelectorAll('.remove');
    let countQuantity = 0;
    for(let i of btnAdd) {
       i.addEventListener('click', () => {
          let quantity = i.parentNode.parentNode.querySelector('.quantity-text > .quantity').value = countQuantity++;
       });
    }
    for(let i of btnRemove) {
        i.addEventListener('click', () => {
            let quantity = i.parentNode.parentNode.querySelector('.quantity-text > .quantity').value = countQuantity--;
        });
    }
});