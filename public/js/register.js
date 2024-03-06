const overlay = document.getElementById('overlay');
const showForm = (role) => {
    const form = document.getElementById(`${role}-form`)

    form.classList.add('z-[50]');
    form.classList.add('opacity-[1]');

    overlay.classList.add('z-[25]');
    overlay.classList.add('opacity-[0.8]');
}

overlay.addEventListener('click', () => {
    const forms = document.querySelectorAll('form');

    forms.forEach((e) => {
        e.classList.remove('z-[50]');
        e.classList.remove('opacity-[1]');
    })


    overlay.classList.remove('z-[25]');
    overlay.classList.remove('opacity-[0.8]');
});

const previewImage = (event) => {
    const [file] = event.target.files;
    event.target.closest('#picture-wrapper').classList.add(`bg-[url('${URL.createObjectURL(file)}')]`);
    console.log(file);
}
