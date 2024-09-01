<!DOCTYPE html>
<html lang="eng">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <title>Free Designs Source</title>
    
    <!-- bootstrap.min css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">


</head>


<body data-spy="scroll" data-target=".fixed-top">

<!--MAIN BANNER AREA START -->
<div class="container-fluid header-container bg-blue p-0" id="header">
    <div class="container">
        <div class="header navigation-bar d-flex justify-content-between align-items-center">
            <div class="logo"><a href="index.php" class="link d-block">Design<strong>Source</strong></a></div>
            <ul class="centered-nav d-flex align-items-center gap-lg-5 gap-md-4 gap-3 mb-0 ps-0 py-1 py-md-0 justify-content-md-center justify-content-around">
                <li><a href="index.php" class="link">Home</a></li><span class="y-divider d-md-none d-block"></span>
                <li><a href="#" class="link">Designs</a></li><span class="y-divider d-md-none d-block"></span>
                <li><a href="blog.php" class="link">Blog</a></li><span class="y-divider d-md-none d-block"></span>
                <li><a href="#" class="link">About</a></li>
            </ul>
            <a href="index.php" class="btn btn-success rounded">Home</a>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->

<div class="container create-resume-container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-sm-10 col-xs-10">
            <div class="my-5 text-center">
                <h2 class="mb-2">Get in touch</h2>
                <p>Have a project on mind,want to make an consultant. Don't hesistate to contact us.Let's have atalk together.Colaborat eyour project to done quickly</p>
            </div>
        </div>
    </div>
    <div class="row form-row">
        <div class="col-lg-4 col-sm-4 col-xs-12">
            <form class="contact__form" method="post" action="mail.php">
                <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                    </div>
                </div>
                <!-- end message -->
                <div class="row gap-2 gap-md-3 mx-0">
                    <div class="col-md-12 form-group">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="imageInput" class="btn btn-success outline rounded" style="cursor: pointer;">
                            Upload Image
                            <input type="file" accept="image/*" id="imageInput" style="display: none;" onchange="uploadImage()">
                        </label>
                    </div>
                    <div class="col-md-12 form-group">
                        <input name="address" type="text" class="form-control" id="address" placeholder="Address" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="col-12 form-group">
                        <textarea name="summary" class="form-control" rows="1" placeholder="Professional summary" required></textarea>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-between gap-2 gap-md-3">
                        <a class="btn btn-success rounded" id="saveBtn" onclick="printSection()">Download</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-8 col-sm-8 col-xs-12 mt-4 mt-lg-0">
            <div id="printContent" class="resume-parent" style="display: flex; flex-direction: row; height: 100%;">
              <div class="container resume-container p-0" style="display: flex; padding-right: 0;">
                <div class="left-side" style="padding: 30px 20px; background-color: #e3f2fd; width: 25%; min-width: 200px;">
                    <div id="imageContainer" class="img" style="width: 100%; height: 200px; overflow: hidden;">
                      <img id="defaultImage" src="images/profile-basic.jpg" alt="profile img" style="width: 100%; height: 100%; object-fit: cover; object-position: top center; display: none;" alt="loading...">
                    </div>

                    <!-- Contact section -->
                    <div class="contact-section" style="margin-bottom: 30px;">
                        <h3 class="contact border-heading" id="contact_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Contact</h3>
                        <p class="my-email" id="email_field" style="color: #333; word-break: break-word;">email@example.com</p>
                        <p id="phone_field" style="color: #333;">(123) 456-7890</p>
                        <p id="address_field" style="color: #333;">123 Main Street, City, State, Zip</p>
                    </div>
                    <!-- Education section -->
                    <div class="education-section" style="margin-bottom: 30px;">
                        <h3 class="contact border-heading" id="contact_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Education</h3>
                        <p class="my-email" id="email_field" style="color: #333; word-break: break-word;">email@example.com</p>
                        <p id="phone_field" style="color: #333;">(123) 456-7890</p>
                        <p id="address_field" style="color: #333;">123 Main Street, City, State, Zip</p>
                    </div>
                    <!-- Skills section -->
                    <div class="skills-section" style="margin-bottom: 30px;">
                        <h3 class="contact border-heading" id="contact_field" style="color: #333; margin: 12px 0 8px; border-bottom: 1px solid #333;">Skills</h3>
                        <p class="my-email" id="email_field" style="color: #333; word-break: break-word;">email@example.com</p>
                        <p id="phone_field" style="color: #333;">(123) 456-7890</p>
                        <p id="address_field" style="color: #333;">123 Main Street, City, State, Zip</p>
                    </div>


                </div>
                <div style="padding: 30px 20px 30px 30px; background-color: #f6fbff; width: 75%;">
                    <h3 class="my-name" id="name_field" style="color: #333; margin: 12px 0 8px; font-size: 40px;">John Doe</h3>
                    <p style="color: #333;">UI / UX Developer</p>
                    <p style="color: #333;">An enthusiastic and dedicated professional with experience in various fields. Skilled in communication, teamwork, and problem-solving. Seeking to leverage skills and experience in a challenging role.</p>
                    <h3 style="color: #333;">Education</h3>
                    <p style="color: #333;">Bachelor of Science in Computer Science</p>
                    <p style="color: #333;">University Name, Graduation Year</p>
                    <h3 style="color: #333;">Experience</h3>
                    <p style="color: #333;">Job Title</p>
                    <p style="color: #333;">Company Name - Location</p>
                    <p style="color: #333;">Month Year - Month Year</p>
                    <p style="color: #333;">Description of responsibilities and achievements...</p>
                    <p style="color: #333;">Job Title</p>
                    <p style="color: #333;">Company Name - Location</p>
                    <p style="color: #333;">Month Year - Month Year</p>
                    <p style="color: #333;">Description of responsibilities and achievements...</p>
                </div>
              </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid sixth-container call-container bg-img px-0">
    <div class="container py-3">
        <div class="row align-items-center py-4 py-md-5 justify-content-center">
            <div class="col-lg-7 col-md-10 col-sm-12 px-4 px-sm-0 captions-col text-center">
                <h1 class="text-white mb-4">Ready to design your dream CV?</h1>
                <p class="font-sm text-white mb-4">Unlocking Your Professional Potential: Elevating Careers with Customized CV Solutions. Your Journey to Success Starts Now.</p>
                <a href="resume.php" class="btn btn-success rounded">Create CV</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid seventh-container footer-container bg-blue px-0">
    <div class="container py-3 py-md-4">
        <div class="d-flex justify-content-center justify-content-md-between gap-3 py-1 flex-wrap flex-md-nowrap">
            <p class="mb-0 text-white">© 2024 MyResume All rights reserved.</p>
            <div class="d-flex gap-4">
                <a href="#" class="text-white link">Privacy policy</a>
                <a href="#" class="text-white link">Terms of use</a>
            </div>
        </div>
    </div>
</div>


<script>
// Function to save input field values to local storage
function saveInputValues() {
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var address = document.getElementById('address');
    localStorage.setItem('savedName', nameInput.value);
    localStorage.setItem('savedEmail', emailInput.value);
    localStorage.setItem('savedAddress', address.value);
    localStorage.setItem('savedPhone', phone.value);
}


// Function to load input field values from local storage
function loadInputValues() {
    var savedName = localStorage.getItem('savedName');
    var savedEmail = localStorage.getItem('savedEmail');
    var savedAddress = localStorage.getItem('savedAddress');
    var savedPhone = localStorage.getItem('savedPhone');

    // Check if values retrieved from local storage are null or undefined
    if (savedName == '') {
        savedName = "John Doe";
    } else {
        savedName = localStorage.getItem('savedName');
        document.getElementById('name').value = savedName;
        document.getElementById('name_field').innerText = savedName;
    }

    if (savedEmail == '') {
        savedEmail = "email@example.com";
    } else {
        savedEmail = localStorage.getItem('savedEmail');
        document.getElementById('email').value = savedEmail;
        document.getElementById('email_field').innerText = savedEmail;
    }

    if (savedAddress == '') {
        savedAddress = "email@example.com";
    } else {
        savedAddress = localStorage.getItem('savedAddress');
        document.getElementById('address').value = savedAddress;
        document.getElementById('address_field').innerText = savedAddress;
    }

    if (savedPhone == '') {
        savedPhone = "email@example.com";
    } else {
        savedPhone = localStorage.getItem('savedPhone');
        document.getElementById('phone').value = savedPhone;
        document.getElementById('phone_field').innerText = savedPhone;
    }

    // document.getElementById('name').value = savedName;
    // document.getElementById('email').value = savedEmail;
    // document.getElementById('name_field').innerText = savedName;
    // document.getElementById('email_field').innerText = savedEmail;
}


// Image upload functionality
function uploadImage() {
const input = document.getElementById('imageInput');
const file = input.files[0];

if (file) {
    const reader = new FileReader();

    reader.onload = function(e) {
        const image = new Image();
        image.src = e.target.result;

        image.style.cssText = 'width: 100%; height: 100%; object-fit: cover; object-position: center top; border-radius: 8px;';
        image.classList.add('uploaded-image');

        const imageContainer = document.getElementById('imageContainer');
        imageContainer.innerHTML = '';
        imageContainer.appendChild(image);

        localStorage.setItem('uploadedImage', e.target.result);
    }
        reader.readAsDataURL(file);
    } else {
        alert('No file selected!');
    }
}


// Function to display the image from local storage on page load
window.addEventListener('load', function() {

    loadInputValues();

    const imageData = localStorage.getItem('uploadedImage');
    if (imageData) {
        const image = new Image();
        image.src = imageData;

        image.style.cssText = 'width: 100%; height: 100%; object-fit: cover; object-position: center top; border-radius: 8px;';
        image.classList.add('uploaded-image');

        const imageContainer = document.getElementById('imageContainer');
        imageContainer.innerHTML = '';
        imageContainer.appendChild(image);
    } else {
        document.getElementById('defaultImage').style.display = 'block';
    }
});


// Function to update the text of elements with class 'my-name' when the input with id 'name' changes
document.getElementById('name').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('name_field').innerText = this.value;
    } else {
        document.getElementById('name_field').innerText = "John Doe";
    }
    saveInputValues();
});

document.getElementById('email').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('email_field').innerText = this.value;
    } else {
        document.getElementById('email_field').innerText = "email@example.com";
    }
    saveInputValues();
});

document.getElementById('address').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('address_field').innerText = this.value;
    } else {
        document.getElementById('address_field').innerText = "123 Main Street, City, State, Zip";
    }
    saveInputValues();
});

document.getElementById('phone').addEventListener('input', function() {
    if (this.value.length > 0)  {
        document.getElementById('phone_field').innerText = this.value;
    } else {
        document.getElementById('phone_field').innerText = "(123) 456-7890";
    }
    saveInputValues();
});


// Call saveInputValues function when the save button is clicked
document.getElementById('saveBtn').addEventListener('click', function() {
    saveInputValues();
    // document.querySelector('.resume-container').style.cssText = 'height: 100vh;'
});


// function clearLocalStorage() {
//     localStorage.clear();
//     alert('Local storage cleared successfully!');
// }


// Function to print the specific area within a section
function printSection() {
    // Get the content of the element to print
    var printContent = document.getElementById('printContent').innerHTML;
    
    // Create a new window to print the content
    var printWindow = window.open('', '_self');
    
    // Write custom CSS styles for printing
    var styles = `
        <style>
            @page {
                size: auto; 
                margin: 0; 
                padding: 0; 
                @top-center {
                    content: none; 
                }
                @bottom-center {
                    content: none;
                }
            }
            body {
                margin: 0;
                font-family: "Rubik", sans-serif;
            }
            @media print {
                body {
                    margin: 0;
                    color-adjust: exact;
                    font-family: "Rubik", sans-serif;
                }
                .resume-container {
                    height: 100vh;
                }
                .left-side {
                    height: auto !important;
                    position: relative;
                    background: #e3f2fd !important;
                    background-color: #e3f2fd !important;
                }
                .no-page-break {
                    page-break-inside: avoid;
                    page-break-before: avoid;
                    page-break-after: avoid;
                }
            }
            .no-page-break {
                page-break-inside: avoid;
                page-break-before: avoid;
                page-break-after: avoid;
            }
            @media only screen and (max-width: 600px) {
                @media print {
                    body {
                        margin: 0;
                        font-family: "Rubik", sans-serif;
                    }
                    .resume-container {
                        height: auto;
                    }
                    .left-side {
                        background-color: #e3f2fd !important;
                    }
                    .no-page-break {
                        page-break-inside: avoid;
                        page-break-before: avoid;
                        page-break-after: avoid;
                    }
                }
            }
        </style>
    `;
    
    // Write the content and styles to the new window
    printWindow.document.write('<html><head><title>Print</title>' + styles + '</head><body>');
    printWindow.document.write('<div class="page">'); // Start page container
    printWindow.document.write(printContent);
    printWindow.document.write('</div>'); // End page container
    printWindow.document.write('</body></html>');
    
    // Print the window
    // Print the window
    printWindow.document.close(); // Close document opened with document.write
    printWindow.print();
    
    window.location.href = 'resume.php';
} 

</script>
 

<!-- Main jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
<!-- <script src="plugins/jquery/contact.js"></script> -->
<script src="js/main.js"></script>

</body>
</html>