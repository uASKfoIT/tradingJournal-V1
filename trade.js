/*-Experation Date Calendar*/
$(document).ready(function() {
  $("#experation-date").datepicker();
});

/*-Retreive Active Elements*/
function getActiveElements(selectors, multipleElements = false) {

  const visibleForm = document.querySelector(".trade-form__container:not([style*='display: none'])");
  const elements = {};

  if (!visibleForm){ 
    console.log("No visible form"); return {}; 
  }

  for (const i in selectors) {
    if (multipleElements) {
      elements[i] = visibleForm.querySelectorAll(selectors[i]); 
    } else {
      elements[i] = visibleForm.querySelector(selectors[i]);
    }
  }

  return elements;
}

/*-Trade Selection Buttons*/
const optionForm = document.getElementById("option-form");
const stockForm = document.getElementById("stock-form");

document.addEventListener("DOMContentLoaded", () => {
  const optionButton = document.getElementById("option");
  const stockButton = document.getElementById("stock");

  //default selecion
  optionButton.classList.add("selected");
  stockButton.classList.add("unselected");
  stockForm.style.display = "none";

  //feedback action
  [optionButton, stockButton].forEach(button => {
    button.addEventListener("click", (event) => {

      if (event.currentTarget.id === "stock") {//stock form
        stockButton.classList.add("selected");
        stockButton.classList.remove("unselected");

        optionButton.classList.add("unselected");
        optionButton.classList.remove("selected");

        stockForm.style.display = "block";
        optionForm.style.display = "none";
      } else {//option form
        optionButton.classList.add("selected");
        optionButton.classList.remove("unselected");

        stockButton.classList.add("unselected");
        stockButton.classList.remove("selected");

        optionForm.style.display = "block";
        stockForm.style.display = "none";
      }
    });
  });
});



/*__Stock Look Up & Info __*/
/*--------THIS NEEDS CLEANING--------*/

document.querySelectorAll(".stockSymbol").forEach(input => {
  input.addEventListener("input", () => {
    fetchStockData(input.value);
  });
});

document.addEventListener("click", (e) => {
  const stockElements = getActiveElements({
    stockInput: ".stockSymbol",
    suggestionBox: ".stock-suggestion"
  });
  if (stockElements.stockInput && stockElements.suggestionBox) {
    if (!stockElements.stockInput.contains(e.target) && !stockElements.suggestionBox.contains(e.target)) {
      stockElements.suggestionBox.innerHTML = "";
    }
  }
});

function displaySuggestions(results) {
  const stockElements = getActiveElements({
    stockInput: ".stockSymbol",
    suggestionBox: ".stock-suggestion",
    stockinfo_container: ".stockinfo"
  });
  if (!stockElements.stockInput || !stockElements.suggestionBox) return;

  stockElements.suggestionBox.innerHTML = ""; // Clear previous results
  
  results.slice(0, 3).forEach(stock => { // Show only top 3 results
    stockElements.stockinfo_container.style.display = "none";
    const div = document.createElement("div");
    div.classList.add("stock-suggestion__item");
    var suggested_stock = `${stock.symbol} - ${stock.description}`;
    div.textContent = suggested_stock;

    // When a user clicks a suggestion, fill the input field
    div.addEventListener("click", () => {
      stockElements.stockInput.value = stock.symbol;
      stockElements.suggestionBox.innerHTML = ""; // Hide suggestions

      //Display Company Logo =) 
      const selectedSymbol = stock.symbol;
      getCompanyLogo(selectedSymbol);
  
    });

    stockElements.suggestionBox.appendChild(div);
  });
}

async function getCompanyLogo(symbol) {
  const apiKey = "cuh88mpr01qva71t6ubgcuh88mpr01qva71t6uc0";  
  const url = `https://finnhub.io/api/v1/stock/profile2?symbol=${symbol}&token=${apiKey}`;

  try {
    const response = await fetch(url);
    const data = await response.json();
    
    console.log(data); // Check what Finnhub returns

    if (data.logo) {
      const company_logo = getActiveElements({
        company_logo_container: ".stockinfo__image-id",
        stockinfo_container: ".stockinfo"
      });

      company_logo.stockinfo_container.style.display = "flex";
      company_logo.company_logo_container.src = data.logo;
      console.log(`${symbol} Logo`);
    } else {
      console.log("Unable to return image");
    }
  } catch (error) {
    console.error(`Error fetching logo for ${symbol}:`, error);
  }
}


async function fetchStockData(userInput) {
  const stockElements = getActiveElements({
    stockInput: ".stockSymbol",
    suggestionBox: ".stock-suggestion"
  });
  if (!stockElements.suggestionBox) return;

  if (userInput.length < 1) { // Start searching after 1 character
    stockElements.suggestionBox.innerHTML = "";
    return;
  }

  const url = `https://finnhub.io/api/v1/search?q=${userInput}&token=${apiKey}`;

  try {
    const response = await fetch(url);
    const data = await response.json();

    if (data.result.length > 0) {
      displaySuggestions(data.result);
    } else {
      stockElements.suggestionBox.innerHTML = "<div class='stock-suggestion__item'>No results found</div>";
    }
  } catch (error) {
    console.error("Error fetching stock symbols:", error);
  }
}

/*--Call,Put Checkboxes--*/
const callContainer = document.getElementById("call-container");
const putContainer = document.getElementById("put-container");

const callCheckbox = document.getElementById("call-checkbox");
const putCheckbox = document.getElementById("put-checkbox");

callCheckbox.addEventListener("change", function() {
  
  if (callCheckbox.checked){
      putContainer.classList.add("hidden");
  } else {
      putContainer.classList.remove("hidden");
  }
});

putCheckbox.addEventListener("change", function() {

  if (putCheckbox.checked) {
      callContainer.classList.add("hidden");
  } else {
      callContainer.classList.remove("hidden");
  }
});

/*--Trading Patterns--*/
var tradingPatterns = [
    "Head and Shoulders", "Inverse Head and Shoulders", "Double Top",
    "Double Bottom", "Cup and Handle", "Ascending Triangle",
    "Descending Triangle", "Symmetrical Triangle", "Bullish Flag",
    "Bearish Flag", "Bullish Pennant", "Bearish Pennant",
    "Rising Wedge", "Falling Wedge", "Rectangle Pattern",
    "Triple Top", "Triple Bottom"];


/*--Pattern Images--*/
var pattern_image_button = document.getElementById("pattern-image-container");
var pattern_image_url = "https://i.ibb.co/DPX42d50/uploadimage.png";
var pattern_image = document.getElementById("pattern-image");
pattern_image.src = pattern_image_url;