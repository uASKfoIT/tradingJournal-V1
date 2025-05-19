//Time Frame Button
const timeFrames = ["5D", "1M", "3M", "6M", "YTD", "1Y", "ALL"];

const timeframe_button = document.getElementById("timeframe-button");
const dropdown_display = document.getElementById("dropdown-display");
const dropdown_menu = document.getElementById("dropdown-menu");

//Populate Time Frame Menu
timeFrames.forEach(frame => {
    const li = document.createElement("li");
    li.textContent = frame;
    li.addEventListener("click", () =>{
        dropdown_display.textContent = frame;
        dropdown_menu.classList.remove("show");
    });
    dropdown_menu.append(li);
});

timeframe_button.addEventListener("click", (e) =>{
    if(!dropdown_menu.contains(e.target)){
        dropdown_menu.classList.toggle("show");
    }
});

document.addEventListener("click", (e) => {
    if (!timeframe_button.contains(e.target)) {
        dropdown_menu.classList.remove("show");
    }
});
