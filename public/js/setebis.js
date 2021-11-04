(function() {
    const currentImage = document.querySelector('#servico-imagem-atual');
    const images = document.querySelectorAll('.owl-thumb-clickable .item');

    images.forEach((element) => element.addEventListener('click', thumbnailClick));

    function thumbnailClick(e) {
        currentImage.src = this.querySelector('img').src;
    }
})();
