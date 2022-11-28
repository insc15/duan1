document.addEventListener("DOMContentLoaded", function () {
  initCart()
  // initAddToCartButton()
});

function initCart() {
  const cartData = localStorage.getItem('cart') || []
  fetch(`${baseURL()}cart`,{
    method: "POST",
    body: JSON.stringify({
      data: cartData
    })
  })
}

function baseURL() {
  let url;
  const pathParts = location.pathname.split('/');
  if (location.host == 'localhost') {
      url = location.origin+'/'+pathParts[1].trim('/')+'/';
  }else{
      url = location.origin; 
  }
  return url;
}

function addToCart(item) {
  let data = item
  const cartData = JSON.parse(localStorage.getItem('cart')) || []
  const newCartData = cartData.map(cartItem => {
    if(JSON.stringify(cartItem) === JSON.stringify(data)){
      cartItem.quantity = Number(cartItem.quantity) + Number(data.quantity)
      data = null
    }
    return cartItem
  })
  if(data){
    newCartData.push(data)
  }
  localStorage.setItem('cart',JSON.stringify(newCartData))
  toastr.success("Đã thêm sản phẩm vào giỏ");
}

function getFormData(form) {
  const formData = new FormData(form);
  return(Object.fromEntries(formData));
}

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "2000",
  "extendedTimeOut": "0",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}