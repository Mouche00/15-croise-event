const addInput = (e) => {
    document.getElementById('hidden-input').classList.remove('hidden');
    document.getElementById('hidden-button').classList.remove('hidden');
    e.target.setAttribute('disabled', 'true')
}

const editInput = (e) => {
    e.target.closest('tr').querySelector('.edit-input').removeAttribute('readonly');
}
