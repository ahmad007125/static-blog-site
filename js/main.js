// For blog page js code
document.addEventListener('DOMContentLoaded', () => {
    const postsContainer = document.getElementById('posts');
    if (postsContainer) {
        loadPosts('all');
    }

    const categoryBubbles = document.querySelectorAll('.category-bubble');
    categoryBubbles.forEach(bubble => {
        bubble.addEventListener('click', () => {
            // Use opacity instead of visibility to prevent layout shifts
            postsContainer.style.opacity = '0';

            // Set timeout to allow opacity change to apply
            setTimeout(() => {
                categoryBubbles.forEach(b => b.classList.remove('active-category'));
                bubble.classList.add('active-category');

                loadPosts(bubble.dataset.category);

                // Fade posts container back in after content is updated
                postsContainer.style.opacity = '1';
            }, 100); // Match this duration with the CSS transition duration
        });
    });

    const postContent = document.getElementById('post-content');
    if (postContent) {
        loadSinglePost();
    }
});



function loadPosts(category) {
    const postsContainer = document.getElementById('posts');
    // Clear the current posts
    postsContainer.innerHTML = '';

    postFiles.forEach(file => {
        fetch(`posts/${file}`)
            .then(response => response.text())
            .then(data => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(data, 'text/html');
                const postElement = doc.querySelector('.post');
                if (postElement && (category === 'all' || postElement.dataset.category === category)) {
                    const mainBlogCard = postElement.querySelector('.main-blog-card');
                    if (mainBlogCard) {
                        postsContainer.innerHTML += `<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">${mainBlogCard.outerHTML}</div>`;
                    } else {
                        console.error('Error: .main-blog-card element not found in the post!');
                    }
                } else {
                    // console.error('Error: .post element not found or category mismatch!');
                    return false;
                }
            })
        .catch(error => console.error('Error fetching the post:', error));
    });
}


function loadSinglePost() {
    const params = new URLSearchParams(window.location.search);
    const postFile = params.get('post');

    if (postFile) {
        fetch(`posts/${postFile}`)
            .then(response => response.text())
            .then(data => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(data, 'text/html');
                const singlePostData = doc.querySelector('.single-post-data');
                
                if (singlePostData) {
                    const postContent = document.getElementById('post-content');
                    
                    // Populate the post-content div with the entire single-post-data content
                    postContent.innerHTML = singlePostData.outerHTML;
                    
                    // Ensure that the postContent (or singlePostData) is visible if it's hidden by default
                    postContent.style.display = 'block';
                } else {
                    console.error('Error: .single-post-data element not found in the fetched data!');
                }
            })
            .catch(error => console.error('Error fetching the post:', error));
    }
}






// JS for other pages
(function () {
    'use strict';
    // Smooth scroll for links with class 'smoth-scroll'
    document.querySelectorAll('a.smoth-scroll').forEach(function(anchor) {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetElement = document.querySelector(anchor.getAttribute('href'));
            window.scrollTo({
                top: targetElement.offsetTop - 50,
                behavior: 'smooth'
            });
        });
    });

    // Collapse navbar on link click for visible navbar toggler
    document.querySelectorAll('.navbar-collapse .navbar-nav a').forEach(function(link) {
        link.addEventListener('click', function () {
            const navbarToggler = document.querySelector('.navbar-toggler:visible');
            if (navbarToggler) {
                navbarToggler.click();
            }
        });
    });

    // Change header color on scroll
    window.addEventListener('scroll', function () {
        if (window.scrollY > 70) {
            document.querySelectorAll('.site-navigation, .trans-navigation').forEach(function(nav) {
                nav.classList.add('header-white');
            });
        } else {
            document.querySelectorAll('.site-navigation, .trans-navigation').forEach(function(nav) {
                nav.classList.remove('header-white');
            });
        }
    });

})();


// For smooth scroll on link click with class 'scroll-link'
document.addEventListener('DOMContentLoaded', function() {
    "use strict";
    document.querySelectorAll('.scroll-link').forEach(function(anchor) {
        anchor.addEventListener('click', function (event) {
            event.preventDefault();
            const targetElement = document.querySelector(anchor.getAttribute('href'));
            window.scrollTo({
                top: targetElement.offsetTop - 68,
                behavior: 'smooth'
            });
        });
    });
});

    
    
    // Function to check viewport width and move the div after a sibling
    function checkViewportWidth() {
        var changePos = document.querySelector('.centered-nav');
        var container = document.querySelector('.header-container .container');
        var sibling = document.querySelector('.header-container .container .logo');
    
        if (window.innerWidth <= 767) {
            container.appendChild(changePos);
        } else {
            // Append the div after the sibling
            sibling.insertAdjacentElement('afterend', changePos);
        }
    }
    
    // Attach event listeners for window resize and orientation change
    window.addEventListener('resize', function() {
        checkViewportWidth();
    });
    
    window.addEventListener('orientationchange', function() {
        checkViewportWidth();
    });
    
    // Initial check on page load
    checkViewportWidth();
    
    
    
    // Get the target header element and its height
    var targetHeader = document.getElementById('header');
    var headerHeight = targetHeader.offsetHeight;
    // console
    
    var prevScrollpos = window.pageYOffset;
    
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
    
        if (currentScrollPos > headerHeight) {
            targetHeader.classList.add("scrolled-down");
    
            if (prevScrollpos > currentScrollPos) {
                targetHeader.style.top = "0";
            } else {
                targetHeader.style.top = "-" + headerHeight + "px";
            }
    
            prevScrollpos = currentScrollPos;
        } else {
            targetHeader.classList.remove("scrolled-down");
        }
    };
     

    function copyCode() {
        // Create a temporary textarea element
        var textarea = document.createElement("textarea");
        textarea.value = document.querySelector(".code-container code").innerText;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
        alert("Code copied to clipboard!");
    }




