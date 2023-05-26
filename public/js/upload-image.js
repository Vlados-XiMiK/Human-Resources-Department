const dropArea = document.querySelector('.drop-area');
const inputFile = document.getElementById('input-file');

dropArea.addEventListener('click', function() {
    inputFile.click();
});

inputFile.addEventListener('change', function() {
    const file = this.files[0];

    if (file && file.type.startsWith('image/')) {
        create_thumbnail(file);
    } else {
        alert('Можна завантажувати лише фотографії');
    }
});

dropArea.addEventListener('dragover', function(e) {
    e.preventDefault();
    this.style.borderStyle = 'solid';

    const h3 = this.querySelector('h3');
    h3.textContent = 'Відпустіть тут, щоб завантажити фотографію';
});

dropArea.addEventListener('drop', function(e) {
    e.preventDefault();

    inputFile.files = e.dataTransfer.files;
    const file = e.dataTransfer.files[0];

    if (file && file.type.startsWith('image/')) {
        create_thumbnail(file);
    } else {
        alert('Можна завантажувати лише фотографії');
    }
});

const command = ['dragleave', 'dragend'];

command.forEach(item => {
    dropArea.addEventListener(item, function() {
        this.style.borderStyle = 'dashed';

        const h3 = this.querySelector('h3');
        h3.textContent = 'Перетягніть фотографію або натисніть, щоб вибрати фотографію';
    });
});

function create_thumbnail(file) {
    const img = document.querySelectorAll('.thumbnail');
    const imgName = document.querySelectorAll('.img-name');
    img.forEach(item => item.remove());
    imgName.forEach(item => item.remove());

    const reader = new FileReader();
    reader.onload = () => {
        const url = reader.result;
        const span = document.createElement('span');
        span.className = 'img-name';
        span.textContent = file.name;
        dropArea.appendChild(span);
        dropArea.style.borderColor = 'transparent';
    };
    reader.readAsDataURL(file);
}
