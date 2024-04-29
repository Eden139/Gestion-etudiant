const noimage = document.querySelector(".noimage");
const imageInput = document.querySelector(".image-input");
const imageContainer = document.querySelector(".popup .image-container");
const imageUpdate = document.getElementById("image-update");
let cropper = null;

// Noimage stylesheet
noimage.style.background =
  'url("img/noprofil.jpg") center center / 103% no-repeat';

// console.log(noimage.style.background);

imageInput.addEventListener("change", updateImage, false);

function updateImage() {
  openpopup();
  const imageToProcess = this.files[0];
  const newImage = new Image(imageToProcess.width, imageToProcess.height);
  newImage.src = URL.createObjectURL(imageToProcess);
  newImage.classList.add("image-crop");
  newImage.id = "newImg";

  imageContainer.innerHTML = "";
  imageContainer.appendChild(newImage);

  processImage();
}

function processImage() {
  const newImg = document.getElementById("newImg");
  cropper = new Cropper(newImg, {
    aspectRatio: 1,
    viewMode: 0,
  });

  imageUpdate.addEventListener("click", (e) => {
    const imageCropped = cropper.getCroppedCanvas();
    const newWidth = Math.min(400, imageCropped.width);
    const newHeight = Math.min(400, imageCropped.height);

    // Créer un nouveau canvas avec les dimensions souhaitées
    const canvas = document.createElement("canvas");

    const ctx = canvas.getContext("2d");
    ctx.imageSmoothingEnabled = true;
    ctx.imageSmoothingQuality = "high";
    canvas.width = newWidth;
    canvas.height = newHeight;

    ctx.drawImage(imageCropped, 0, 0, newWidth, newHeight);

    canvas.toBlob((blob) => {
      const file = new File([blob], "newImage.png", {
        type: "image/png",
      });
      const fileList = new DataTransfer();
      fileList.items.add(file);

      imageInput.files = fileList.files;
    });

    // Mettre à jour l'arrière-plan de l'élément .noimage avec le nouveau canvas
    noimage.style.background = `url(${canvas.toDataURL()}) center center / 102% no-repeat`;
    closepopup();
  });
}
// //ctx.drawImage(image, 0, 0, 500, 500);

// let resizedImage = new Image();
// // resizedImage.onload = function () {
// //   //  callback(resizedImage);
// // }
// resizedImage.src = imageCropped.toDataURL();
// console.log(resizedImage.src);
/*
    const canvas = cropper.getCroppedCanvas();
    if (canvas) {
        canvas.toBlob((blob) => {
            const file = new File([blob], 'newImage', {
                type: 'image/jpeg',
                lastModified: Date.now()
            });

            imageInput.files = new DataTransfer().items.add(file);
            console.log(file);

        }, 'image/jpeg');
    }

*/

// console.log(noimage.style.background);

/*
function processImage() {
    const newImg = document.getElementById("newImg");
    cropper = new Cropper(newImg, {
        aspectRatio: 1,
        crop(event) {
            console.log(event);
            // Obtenir le canevas recadré
            const canvas = cropper.getCroppedCanvas();
            if (canvas) {
                // Convertir le canevas en un fichier
                canvas.toBlob((blob) => {
                    // Créer un objet File à partir du blob
                    const file = new File([blob], 'newImage.jpg', {
                        type: 'image/jpeg',
                        lastModified: Date.now()
                    });
                    // Mettre à jour l'élément input type="file" avec le nouveau fichier
                    imageInput.files = new DataTransfer().items.add(file);
                }, 'image/jpeg');
            }
        }
    });
}
*/
