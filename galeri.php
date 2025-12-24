<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="galery.css"> <!-- CSS dosyanızı buraya ekleyin -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>AGM Mining</title>
    <link rel="shortcut icon" href="./pics/logo.ico" type="image/x-icon">
</head>
<body>
<?php include 'navbar.php'; ?>


<div class="gallery">
<div class="gallery-item">
        <img src="./pics/maden1.png" alt="Maden 1">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/maden2.jpeg" alt="Maden 2">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/Cooper.png" alt="Cooper">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/Galena.png" alt="Galena">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/GreenAventura.png" alt="Green Aventura">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/GreenQuartz.png" alt="Green Quartz">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/Kaynite.png" alt="Kaynite">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/LaftaniumLe.png" alt="Laftanium Le">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/Mica.png" alt="Mica">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/PinkQuatz.png" alt="Pink Quartz">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/Quartz.png" alt="Quartz">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/RedGarnet.png" alt="Red Garnet">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/RoughAmethyst.png" alt="Rough Amethyst">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/Sunstone.png" alt="Sunstone">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/VolcanoGlass.png" alt="Volcano Glass">
        <div class="title"></div>
    </div>
    <div class="gallery-item">
        <img src="./pics/WhiteQuartz.png" alt="White Quartz">
        <div class="title"></div>
    </div>
    
</div>


<div class="fullscreen-viewer">
    <span class="arrow left">&#10094;</span>
    <img src="" alt="Tam Ekran Fotoğrafı">
    <div class="fullscreen-title"></div>
    <span class="arrow right">&#10095;</span>
    <span class="close">&times;</span>
</div>

<?php include('footer.php'); ?>

<script>
 const galleryItems = document.querySelectorAll('.gallery-item');
const fullscreenViewer = document.querySelector('.fullscreen-viewer');
const fullscreenImage = fullscreenViewer.querySelector('img');
const fullscreenTitle = fullscreenViewer.querySelector('.fullscreen-title');
const closeBtn = fullscreenViewer.querySelector('.close');
const leftArrow = fullscreenViewer.querySelector('.arrow.left');
const rightArrow = fullscreenViewer.querySelector('.arrow.right');

let currentIndex;

galleryItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        fullscreenViewer.style.display = 'flex';
        fullscreenImage.src = item.querySelector('img').src;
        fullscreenTitle.textContent = item.querySelector('.title').textContent;
        currentIndex = index;
    });
});

function showImage(index) {
    if (index < 0) {
        currentIndex = galleryItems.length - 1;
    } else if (index >= galleryItems.length) {
        currentIndex = 0;
    } else {
        currentIndex = index;
    }
    fullscreenImage.src = galleryItems[currentIndex].querySelector('img').src;
    fullscreenTitle.textContent = galleryItems[currentIndex].querySelector('.title').textContent;
}

rightArrow.addEventListener('click', () => {
    showImage(currentIndex + 1);
});

leftArrow.addEventListener('click', () => {
    showImage(currentIndex - 1);
});

closeBtn.addEventListener('click', () => {
    fullscreenViewer.style.display = 'none';
});

// Ekranda fotoğraf dışındaki bir yere tıklanarak galeriye dönülmesi
fullscreenViewer.addEventListener('click', (e) => {
    // Eğer tıklama fotoğraf veya başlık dışında bir yere yapılırsa, galeriye dön
    if (e.target === fullscreenViewer) {
        fullscreenViewer.style.display = 'none';
    }
});

document.addEventListener('keydown', (e) => {
    if (fullscreenViewer.style.display === 'flex') {
        if (e.key === 'ArrowRight') {
            showImage(currentIndex + 1);
        } else if (e.key === 'ArrowLeft') {
            showImage(currentIndex - 1);
        } else if (e.key === 'Escape') {
            fullscreenViewer.style.display = 'none';
        }
    }
});


</script>
</body>
</html>