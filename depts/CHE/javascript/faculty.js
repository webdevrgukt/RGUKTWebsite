function showImages(role) {
    const imageContainer = document.getElementById('image-container');
    imageContainer.innerHTML = ''; // Clear previous images
  
    // Get the array of image URLs based on the selected role
    const images = imageData[role];
  
    // Create and append image elements to the image container
    images.forEach(imageSrc => {
      const img = document.createElement('img');
      img.src = imageSrc;
      imageContainer.appendChild(img);
    });
  }
  
  // Image data
  const imageData = {
    faculty: [
      'images/fact1 (1).jpg',
      'images/fact1 (2).jpg',
      'images/fact1 (3).jpg',
    ],
    students: [
      'images/student1.jpg',
      'images/student2.jpg',
      'images/student3.jpg',
    ],
    nonteaching: [
      'images/nonteaching1.jpg',
      'images/nonteaching2.jpg',
      'images/nonteaching3.jpg',
    ]
  };
  
  // Event listener for the "Faculty" button
  const facultyButton = document.querySelector('.buttons button:nth-child(1)');
  facultyButton.addEventListener('click', function() {
    showImages('faculty');
  });
  