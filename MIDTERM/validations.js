// validations.js

const form = document.getElementById("productForm");
const btn = document.getElementById("addBtn");

const pName = document.getElementById("productName"); // FIXED ID
const price = document.getElementById("price");
const quantity = document.getElementById("quantity");
const category = document.getElementById("category");
const expiryDate = document.getElementById("expiryDate");

const error = document.querySelectorAll(".error");

// ---------- Validation functions ----------
function validateName() {
  if (pName.value.trim() === "") {
    error[0].innerHTML = "Product Name is required.";
    return false;
  }
  error[0].innerHTML = "";
  return true;
}

function validatePrice() {
  if (price.value === "") {
    error[1].innerHTML = "Product Price is required.";
    return false;
  } else if (Number(price.value) <= 0) {
    error[1].innerHTML = "Price must be more than 0.";
    return false;
  }
  error[1].innerHTML = "";
  return true;
}

function validateQuantity() {
  if (quantity.value === "") {
    error[2].innerHTML = "Quantity is required.";
    return false;
  } else if (Number(quantity.value) < 0) {
    error[2].innerHTML = "Quantity cannot be negative.";
    return false;
  }
  error[2].innerHTML = "";
  return true;
}

function validateCategory() {
  if (category.value === "") {
    error[3].innerHTML = "Please select a category.";
    return false;
  }
  error[3].innerHTML = "";
  return true;
}

function validateDate() {
  if (expiryDate.value === "") {
    error[4].innerHTML = "Expiry Date is required.";
    return false;
  }
  error[4].innerHTML = "";
  return true;
}

// ---------- Option A (RECOMMENDED): validate on form submit ----------
form.addEventListener("submit", function (event) {
  const ok =
    validateName() &&
    validatePrice() &&
    validateQuantity() &&
    validateCategory() &&
    validateDate();

  if (!ok) {
    event.preventDefault(); // stop submit
  } else {
    // If you don't have an action/backend, you may want to stop reload:
     event.preventDefault();
    alert("All good! Ready to send to server.");
  }
});

// ---------- Option B (NOT recommended): validate only on button click ----------
// This can miss "Enter key" submissions in inputs, but shown for learning.
/*
btn.addEventListener("click", function (event) {
  const ok =
    validateName() &&
    validatePrice() &&
    validateQuantity() &&
    validateCategory() &&
    validateDate();

  if (!ok) {
    event.preventDefault();
  }
});
*/

// Optional: live validation while typing/changing
pName.addEventListener("input", validateName);
price.addEventListener("input", validatePrice);
quantity.addEventListener("input", validateQuantity);
category.addEventListener("change", validateCategory);
expiryDate.addEventListener("change", validateDate);