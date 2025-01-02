// Event listener for the 'fetch-html' button click
document.getElementById('fetch-html').addEventListener('click', () => {
    // Fetch content from 'content.php' as text
    fetch('content.php')
        .then(response => response.text()) // Parse the response as text
        .then(html => {
            // Insert the fetched HTML into the 'content' element
            document.getElementById('content').innerHTML = html;
        })
        .catch(error => console.error('Error fetching HTML:', error)); // Log any errors
});

// Event listener for the 'fetch-json' button click
document.getElementById('fetch-json').addEventListener('click', () => {
    // Fetch data from 'data.php' as JSON
    fetch('data.php')
        .then(response => response.json()) // Parse the response as JSON
        .then(data => {
            let output = '<ul>'; // Start an unordered list
            // Loop through each item in the JSON data and create a list item
            data.forEach(item => {
                output += `<li>${item.name} - ${item.age} years old</li>`;
            });
            output += '</ul>'; // Close the unordered list
            // Insert the generated list into the 'output' element
            document.getElementById('output').innerHTML = output;
        })
        .catch(error => console.error('Error fetching JSON:', error)); // Log any errors
});
