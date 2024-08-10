// For blog page js code
document.addEventListener('DOMContentLoaded', () => {
    const postsContainer = document.getElementById('posts');
    if (postsContainer) {
        loadPosts('all');
    }

    const categoryBubbles = document.querySelectorAll('.category-bubble');
    categoryBubbles.forEach(bubble => {
        bubble.addEventListener('click', () => {

            // Add the 'active' class
            postsContainer.classList.add('hidden');
            setTimeout(() => {
                postsContainer.classList.remove('hidden');
            }, 400);

            categoryBubbles.forEach(b => b.classList.remove('active-category'));
            bubble.classList.add('active-category');

            setTimeout(() => {
                loadPosts(bubble.dataset.category);
            }, 200);

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

    // List of post files
    // const postFiles = ['post1.html', 'post2.html', 'post3.html'];

    postFiles.forEach(file => {
        fetch(`posts/${file}`)
            .then(response => response.text())
            .then(data => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(data, 'text/html');
                const postElement = doc.querySelector('.post');
                if (category === 'all' || postElement.dataset.category === category) {
                    const title = postElement.querySelector('h2').outerHTML;
                    const link = postElement.querySelector('a').outerHTML;
                    postsContainer.innerHTML += `<div class="post">${title}${link}</div>`;
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
                const postElement = doc.querySelector('.post');
                const fullContent = postElement.querySelector('.full-content').innerHTML;
                const postContent = document.getElementById('post-content');
                postContent.innerHTML = `<h2>${postElement.querySelector('h2').innerText}</h2>${fullContent}`;
            })
            .catch(error => console.error('Error fetching the post:', error));
    }
}


// JS for other pages

(function ($) {

    'use strict';
    
        $('a.smoth-scroll').on('click', function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 1000);
            e.preventDefault();
        });
    
        $('.navbar-collapse .navbar-nav a').on('click', function () {
            $('.navbar-toggler:visible').click();
        });
    
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 70) {
                $('.site-navigation,.trans-navigation').addClass('header-white');
            } else {
                $('.site-navigation,.trans-navigation').removeClass('header-white');
            }
    
        });
    
    })(window.jQuery);
    

    // For smooth scroll on link click
    $(function () {
        "use strict";
        $('.scroll-link').bind('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 68
            }, 0);
            event.preventDefault();
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
     






