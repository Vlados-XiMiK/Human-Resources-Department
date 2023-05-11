const dropArea = document.querySelector('.drop-area');
const inputFile = document.getElementById('input-file');

dropArea.addEventListener('click', function () {
  inputFile.click()
});

inputFile.addEventListener('change', function () {
  const file = this.files[0];

  if(file.type.startsWith('application/')) {
    if(file.size < 2000000) {
      create_thumbnail(file);
    } else {
      alert('Размер документа должен быть меньше 2 МБ');
    }
  } else {
    alert('Можно загружать только документы');
  }
});

dropArea.addEventListener('dragover', function (e) {
  e.preventDefault();
  this.style.borderStyle = 'solid';

  const h3 = this.querySelector('h3');
  h3.textContent = 'Отпустите здесь, чтобы загрузить документ';
});

dropArea.addEventListener('drop', function (e) {
  e.preventDefault();

  inputFile.files = e.dataTransfer.files;
  const file = e.dataTransfer.files[0];

  if(file.type.startsWith('application/')) {
    if(file.size < 2000000) {
      create_thumbnail(file);
    } else {
      alert('Размер документа должен быть меньше 2 МБ');
    }
  } else {
    alert('Можно загружать только документы');
  }
});

const command = ['dragleave', 'dragend'];

command.forEach(item => {
  dropArea.addEventListener(item, function () {
    this.style.borderStyle = 'dashed';

    const h3 = this.querySelector('h3');
    h3.textContent = 'Перетащите сюда документ или нажмите, чтобы выбрать файл';
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