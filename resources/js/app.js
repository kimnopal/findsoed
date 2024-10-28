import './bootstrap';
import 'preline';

window.addEventListener('load', () => {
    const inputs = document.querySelectorAll('.dt-container thead input');

    inputs.forEach((input) => {
        input.addEventListener('keydown', function (evt) {
            if ((evt.metaKey || evt.ctrlKey) && evt.key === 'a') this.select();
        });
    });
});