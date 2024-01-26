document.addEventListener("DOMContentLoaded", function() {
    function duplicateImages() {
      var imageContainers = document.querySelectorAll(".imageContainer");
  
      imageContainers.forEach(function(imageContainer) {
        var originalImage = imageContainer.querySelector("img");
        var containerWidth = imageContainer.clientWidth;
        var originalWidth = originalImage.width;
        var imagesCount = Math.ceil(containerWidth / originalWidth);
  
        // Очищаем контейнер перед добавлением новых изображений
        imageContainer.innerHTML = "";
  
        for (var i = 0; i < imagesCount; i++) {
          var clonedImage = originalImage.cloneNode(true);
          imageContainer.appendChild(clonedImage);
        }
      });
    }
  
    // Вызываем функцию сразу после загрузки документа
    duplicateImages();
  
    // Вызываем функцию при изменении размеров окна
    window.addEventListener("resize", duplicateImages);выаываываыаd
  });
  