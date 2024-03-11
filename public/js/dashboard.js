const addInput = (e) => {
    document.getElementById('hidden-input').classList.remove('hidden');
    document.getElementById('hidden-button').classList.remove('hidden');
    e.target.setAttribute('disabled', 'true')
}

const editInput = (e) => {
    e.target.closest('tr').querySelector('.edit-input').removeAttribute('readonly');
}

const showMenu = () => {
    document.getElementById('burger-menu').classList.remove('hidden');
}

const closeMenu = () => {
    document.getElementById('burger-menu').classList.add('hidden');
}
