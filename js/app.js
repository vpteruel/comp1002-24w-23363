// set inital value to zero
let count = 0;
// select value and buttons
const value = document.querySelector("#value");
const btns = document.querySelectorAll(".btn");
const changeBackgroundBtn = document.querySelector(".change-background");

// set initial font family
let fontFamilyIndex = 0;
const fontFamilies = [
  "'Roboto', sans-serif",
  "'Open Sans', sans-serif",
  "'Arial', sans-serif",
  "'Helvetica', sans-serif",
  "'Georgia', serif",
  "'Times New Roman', serif"
];

// select the heading element
const counterHeading = document.getElementById("counter-heading");
// select the font change button
const changeFontBtn = document.querySelector(".change-font");

// function to generate a random color
function getRandomColor() {
  return `#${Math.floor(Math.random() * 16777215).toString(16)}`;
}

// button event listeners for count manipulation
btns.forEach(function (btn) {
  btn.addEventListener("click", function (e) {
    const styles = e.currentTarget.classList;

    if (styles.contains("change-background")) {
      // event listener for changing background color
      document.body.style.backgroundColor = getRandomColor();
    } else if (styles.contains("change-font")) {
      // increment index to choose the next font family
      fontFamilyIndex = (fontFamilyIndex + 1) % fontFamilies.length;
      // apply the new font family
      let newFont = fontFamilies[fontFamilyIndex];
      value.style.fontFamily = newFont;
      counterHeading.style.fontFamily = newFont;
    } else if (styles.contains("decrease")) {
      count--;
    } else if (styles.contains("increase")) {
      count++;
    } else {
      count = 0;
    }

    if (count > 0) {
      value.style.color = "green";
    } else if (count < 0) {
      value.style.color = "red";
    } else if (count === 0) {
      value.style.color = "#222";
    }
    value.textContent = count;
  });
});