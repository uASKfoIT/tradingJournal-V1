function setupSelectionRedirects() {
    const selections = document.querySelectorAll(".selection");

    selections.forEach(selection => {
        selection.addEventListener('click', () => {
            const url = selection.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            } else {
                console.log("No URL found for this selection.");
            }
        });
    });
}

// Call it once when your page loads
setupSelectionRedirects();
