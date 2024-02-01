document.addEventListener("DOMContentLoaded", function() {
    const editButtons = document.querySelectorAll('#editBtn');
    const saveButtons = document.querySelectorAll('#saveBtn');
    const formFields = document.querySelectorAll('#accountForm input');

    editButtons.forEach((editBtn, index) => {
        editBtn.addEventListener('click', function() {
            formFields[index].removeAttribute('readonly');
            editBtn.style.display = 'none';
            saveButtons[index].style.display = 'inline-block';
        });
    });

    saveButtons.forEach((saveBtn, index) => {
        saveBtn.addEventListener('click', function() {
            formFields[index].setAttribute('readonly', 'true');
            saveBtn.style.display = 'none';
            editButtons[index].style.display = 'inline-block';
        });
    });
});



let showButton = true;

document.getElementById('log-in').addEventListener('click', function() {
    let hiddenBtn = document.getElementById('hiddenBtn');
    
    if (showButton) {
        hiddenBtn.style.display = 'block'; // Show the button if showButton is true
    } else {
        hiddenBtn.style.display = 'none'; // Hide the button if showButton is false
    }
});
document.getElementById('hiddenBtn').addEventListener('click', function() {
    window.location.href = "Admin.php"; // Redirect to another page when the hiddenBtn is clicked
});
