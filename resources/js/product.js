// Product Page Interactions

document.addEventListener('DOMContentLoaded', function() {
    // Image Gallery
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.thumbnail-btn');
    const prevBtn = document.getElementById('prevImage');
    const nextBtn = document.getElementById('nextImage');
    
    let currentImageIndex = 0;
    const images = Array.from(thumbnails).map(btn => btn.dataset.image);
    
    // Thumbnail click
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            currentImageIndex = index;
            updateMainImage();
            updateActiveThumbnail();
        });
    });
    
    // Previous/Next buttons
    prevBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        updateMainImage();
        updateActiveThumbnail();
    });
    
    nextBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateMainImage();
        updateActiveThumbnail();
    });
    
    function updateMainImage() {
        mainImage.src = images[currentImageIndex];
        mainImage.style.opacity = '0';
        setTimeout(() => {
            mainImage.style.transition = 'opacity 0.3s ease-in-out';
            mainImage.style.opacity = '1';
        }, 50);
    }
    
    function updateActiveThumbnail() {
        thumbnails.forEach((thumb, index) => {
            if (index === currentImageIndex) {
                thumb.classList.add('active');
                thumb.style.borderColor = 'var(--color-primary)';
            } else {
                thumb.classList.remove('active');
                thumb.style.borderColor = 'transparent';
            }
        });
    }
    
    // Color Selection
    const colorOptions = document.querySelectorAll('.color-option');
    const selectedColorText = document.getElementById('selectedColor');
    
    colorOptions.forEach(option => {
        option.addEventListener('click', () => {
            colorOptions.forEach(opt => {
                opt.style.borderColor = 'transparent';
                opt.style.boxShadow = 'none';
            });
            option.style.borderColor = 'var(--color-primary)';
            option.style.boxShadow = '0 0 0 2px white, 0 0 0 4px var(--color-primary)';
            selectedColorText.textContent = option.dataset.color;
        });
    });
    
    // Size Selection
    const sizeOptions = document.querySelectorAll('.size-option');
    
    sizeOptions.forEach(option => {
        option.addEventListener('click', () => {
            sizeOptions.forEach(opt => {
                opt.style.borderColor = 'var(--color-border)';
                opt.style.backgroundColor = 'var(--color-surface)';
            });
            option.style.borderColor = 'var(--color-primary)';
            option.style.backgroundColor = 'var(--color-background)';
        });
    });
    
    // Quantity Controls
    const quantityDisplay = document.getElementById('quantity');
    const decreaseBtn = document.getElementById('decreaseQty');
    const increaseBtn = document.getElementById('increaseQty');
    let quantity = 1;
    
    decreaseBtn.addEventListener('click', () => {
        if (quantity > 1) {
            quantity--;
            quantityDisplay.textContent = quantity;
        }
    });
    
    increaseBtn.addEventListener('click', () => {
        if (quantity < 10) {
            quantity++;
            quantityDisplay.textContent = quantity;
        }
    });
    
    // Wishlist Toggle
    const wishlistBtn = document.getElementById('wishlistBtn');
    let isWishlisted = false;
    
    wishlistBtn.addEventListener('click', () => {
        isWishlisted = !isWishlisted;
        const svg = wishlistBtn.querySelector('svg');
        if (isWishlisted) {
            svg.setAttribute('fill', 'currentColor');
            wishlistBtn.style.backgroundColor = 'var(--color-accent)';
            wishlistBtn.style.color = 'white';
            wishlistBtn.style.borderColor = 'var(--color-accent)';
        } else {
            svg.setAttribute('fill', 'none');
            wishlistBtn.style.backgroundColor = 'transparent';
            wishlistBtn.style.color = 'var(--color-primary)';
            wishlistBtn.style.borderColor = 'var(--color-border)';
        }
    });
    
    // Tab Navigation
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetTab = button.dataset.tab;
            
            // Update button styles
            tabButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.style.borderColor = 'transparent';
                btn.style.color = 'var(--color-text-secondary)';
            });
            button.classList.add('active');
            button.style.borderColor = 'var(--color-primary)';
            button.style.color = 'var(--color-primary)';
            
            // Update content visibility
            tabContents.forEach(content => {
                if (content.id === targetTab) {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            });
        });
    });
    
    // Image Zoom on Hover
    mainImage.addEventListener('mouseenter', () => {
        mainImage.style.cursor = 'zoom-in';
    });
    
    mainImage.addEventListener('mousemove', (e) => {
        const rect = mainImage.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 100;
        const y = ((e.clientY - rect.top) / rect.height) * 100;
        mainImage.style.transformOrigin = `${x}% ${y}%`;
    });
    
    mainImage.addEventListener('click', () => {
        if (mainImage.style.transform === 'scale(2)') {
            mainImage.style.transform = 'scale(1)';
            mainImage.style.cursor = 'zoom-in';
        } else {
            mainImage.style.transform = 'scale(2)';
            mainImage.style.cursor = 'zoom-out';
        }
    });
    
    mainImage.addEventListener('mouseleave', () => {
        mainImage.style.transform = 'scale(1)';
        mainImage.style.cursor = 'default';
    });
});