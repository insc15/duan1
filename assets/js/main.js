document.addEventListener("DOMContentLoaded", function () {
  function decrement(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    if (value > 1) {
      value--;
    }
    target.value = value;
  }

  function increment(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value++;
    target.value = value;
  }

  const mountInput = document.querySelector(".amount-input");
  mountInput.addEventListener("input", () => {
    let amount = parseInt(mountInput.value);
    amount = isNaN(amount) || amount == 0 ? 1 : amount;
    mountInput.value = amount;
  });
  const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
  );

  const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
  );

  decrementButtons.forEach((btn) => {
    btn.addEventListener("click", decrement);
  });

  incrementButtons.forEach((btn) => {
    btn.addEventListener("click", increment);
  });
});
