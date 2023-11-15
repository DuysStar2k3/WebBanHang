document.addEventListener("DOMContentLoaded", function () {
    //Quantity
    // Get the DOM elements to use
    const decreaseButton = document.querySelector('.decrease-item');
    const increaseButton = document.querySelector('.increase-item');
    const valueElement = document.querySelector('.value-item');
  
    // Set default value for quantity
    let quantity = 1;
  
    // Set an event when the down button is clicked
    decreaseButton.addEventListener('click', () => {
      if (quantity > 1) {
        quantity--;
        valueElement.textContent = quantity;
      }
    });
  
    // Set the event when the increase button is clicked
    increaseButton.addEventListener('click', () => {
      quantity++;
      valueElement.textContent = quantity;
    });
  
  });
  
  //Yeu thich
  document.addEventListener('DOMContentLoaded', function () {
    const button = document.querySelector('.red-heart');
    let isRed = false;
  
    button.addEventListener('click', () => {
      if (isRed) {
        button.style.color = 'black';
        isRed = false;
      } else {
        button.style.color = 'red';
        isRed = true;
      }
    });
  
  });
  
  // Mua hang
  function xacNhanMuaHang() {
    const xacNhan = confirm("Xác nhận mua hàng?");
    if (xacNhan) {
      alert("Cảm ơn quý khách! Quý khách đã đặt hàng thành công.");
      window.location.href = "https://humg.edu.vn/";
    } else {
      alert("Chưa đặt hàng thành công.");
    }
  }
  
  // Them hang
  function xacNhanThemHang() {
    const xacNhan = confirm("Xác nhận thêm hàng?");
    if (xacNhan) {
      alert("Cảm ơn quý khách! Quý khách đã thêm vào giỏ hàng thành công.");
    } else {
      alert("Chưa thêm hàng vào giỏ.");
    }
  }