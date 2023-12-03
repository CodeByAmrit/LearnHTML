function load(path, self=null) {
    let title = path;

    title = title.replace("/", " ");
    title = title.replace("/", " ");
    title = title.replace("/", " ");
    title = title.replace(".", " ");
    title =  title.split(" ");
    title = title[2].toUpperCase();

    document.title = title;
    var contentContainer = document.getElementById('content-container');
    var parentDiv = document.getElementById('parentDiv');
    var elementsWithHighlight = parentDiv.getElementsByClassName('active');

    for (var i = 0; i < elementsWithHighlight.length; i++) {
        var imgObj = elementsWithHighlight[i].querySelector('img');
        imgObj.src="/pic/darkCheck.png";
        elementsWithHighlight[i].classList.remove('active');
    }

    // Add the 'highlight' class to the specified div
    if (self!=null){
        var specifiedDiv = self;
        var imgObj = specifiedDiv.querySelector('img');
        imgObj.src="/pic/blueCheck.png";
        specifiedDiv.classList.add('active');
    }

    // Fetch content from the PHP file
    fetch(path) // Replace with the actual path to your PHP file
        .then(function (response) {
            return response.text();
        })
        .then(function (data) {
            // Insert the content into the specified div
            contentContainer.innerHTML = "";
            contentContainer.innerHTML = data;
        })
        .catch(function (error) {
            console.error('Error loading PHP content:', error);
        });
        // Scroll to the top of the page
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Add smooth scrolling effect
        });
}

var input = document.getElementById("searchInput");

// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("myBtn").click();
  }
});

function removeHighlightFromAll(elements) {
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('highlight');
    }
}

function search() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var contentDiv = document.getElementById('parentDiv');
    var divs = contentDiv.getElementsByClassName('group');

    removeHighlightFromAll(divs);
    var matchingElement = null;

    for (var i = 0; i < divs.length; i++) {
        var text = divs[i].innerText.toLowerCase();
        if (text.includes(input)) {
            matchingElement = divs[i];
            break; // Stop searching once a match is found
        }
    }

    displayResults(matchingElement, divs);
}

function displayResults(matchingElement) {
    var searchResultDiv = document.getElementById('searchResult');
    searchResultDiv.innerHTML = '';

    if (matchingElement) {
        // Highlight the matching element
        matchingElement.classList.add('highlight');
        // document.getElementsByClassName("highlight").click();
        

        // Display the matching element in the searchResult div
        searchResultDiv.innerText = 'Matching Element: ' + matchingElement.innerText;
    } else {
               

        searchResultDiv.innerText = 'No results found.';
    }
}

