const flashMessage = document.getElementById('flash-message');

if(flashMessage !== null) {
    setTimeout(() => {
        flashMessage.classList.add('opacity-0');
    }, 5000);
}
