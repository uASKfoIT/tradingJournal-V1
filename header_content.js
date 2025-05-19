//Redirecting Pages
const header_container = document.querySelector(".header-content");
const header_selections = header_container.querySelectorAll(".selection");

header_selections.forEach(selection => {
    selection.addEventListener('click', ()=> {
        const php_file = selection.getAttribute('data-url');
        if(php_file){
            window.location.href = php_file;
        }else{
            console.log("No php file exist");
        }
    });
});