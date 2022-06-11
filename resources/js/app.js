require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const baseUrl = '/laravel/book_shop/public/api';

window.remove = function (name, id) {
    if (confirm('Вы действительно хотите удалить эту запись?')) {
        const request = new XMLHttpRequest();
        request.open('DELETE', `${baseUrl}/${name}/${id}`);
        request.send();

        request.onreadystatechange = function (response) {
            if (request.readyState === 4 && request.status === 200) {
                window.location.reload();
            }
        }
    }
}
