document.addEventListener('DOMContentLoaded', function () {
    const coolButton = document.getElementById('coolButton');
  
    // Function to generate a random color
    function getRandomColor() {
      const letters = '0123456789ABCDEF';
      let color = '#';
      for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }
  
    // Function to change the background color
    function changeBackgroundColor() {
      document.body.style.backgroundColor = getRandomColor();
    }
  
    // Event listener for the cool button
    coolButton.addEventListener('click', changeBackgroundColor);
  });