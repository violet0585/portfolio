
document.addEventListener('DOMContentLoaded', () => {
    const wireframeContainer = document.querySelector('.wireframe-container');

    wireframeContainer.addEventListener('mouseenter', () => {
        document.body.style.overflow = 'hidden';
    });

    wireframeContainer.addEventListener('mouseleave', () => {
        document.body.style.overflow = 'auto';
    });
});


document.addEventListener('DOMContentLoaded', function() {
    // Get all text items
    const textItems = document.querySelectorAll('.text-item');

    // Add hover event listeners
    textItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            // Hide all media items
            document.querySelectorAll('.media-item').forEach(media => {
                media.style.display = 'none';
            });

            // Show the corresponding media item
            const mediaId = item.getAttribute('data-media');
            const mediaItem = document.getElementById(mediaId);
            if (mediaItem) {
                mediaItem.style.display = 'block';
            }
        });

        item.addEventListener('mouseleave', () => {
            // Optionally hide the media when the mouse leaves the text item
            document.querySelectorAll('.media-item').forEach(media => {
                media.style.display = 'none';
            });
        });
    });
});
