/// <reference path="../angular.js" />

angular.module("angDemo")
.controller("angDemoCtrl", function ($scope) {

    $scope.data = {
        categories: [
        {
            name: "Microsites",
            type: "fullblock",
            blurb: "We can create websites in a wide variety of formats and scopes including HTML and Flash sites.",
            id: "microsites",
            items: [{
                name: "Brand Drops",
                image: "branddrops.jpg",
                link: "http://brand-drops.com/",
                description: "We created this single-page scrolling design website to promote our April Fool's joke of scented rain. The site includes high quality graphics and charts explaining the science behind this marketed rain."
            }
            ]
            
        }, {
            name: "Pitch Sites",
            type: "fullblock",
            blurb: "Let us help you wow our next potential client by building a website to pitch our ideas.",
            id: "pitchsites",
            items: [{
                name: "Publicis Loves Seattle",
                image: "pitch1.jpg",
                link: "http://www.publicisshowcase.com/index.php?id=publicislovesseattle",
                description: "This pitch site combines social media, examples of our work, beautiful Seattle imagery, and contact information in a fully responsive template. It helped us win the Seattle Tourism account!"
            }
            ]
            
        }, {
            name: "Social Media",
            type: "fullblock",
            blurb: "Have a conversation with customers! We can sample and display social media content through Twitter, Facebook, Instagram and other platforms based on content providers or hashtags. The conversation can be displayed within a microsite, ad, or app.",
            id: "social",
            items: [{
                name: "Why Seattle?",
                image: "social1.jpg",
                link: "http://www.publicisshowcase.com/index.php?id=publicislovesseattle",
                description: "As part of our pitch to Tourism Seattle, we compiled photos and text from Facebook, Twitter, and others to showcase our love for our city, as well as our tech and design skills."
            }
            ]
        }, {
            name: "Social Media Apps",
            type: "fullblock",
            blurb: "Harness the power of social media to interact with customers and allow them to learn about the brand, register for events, play games, and share with their friends.",
            id: "social-ap",
            items: [{
                name: "Karcher Me",
                image: "app1.jpg",
                link: "https://www.facebook.com/KarcherMe/app_435989896491943",
                description: "The Karcher Me Facebook app allows users to select a location and then watch the Karcher team clean up that location. It integrates with Google Maps and Street View for the imagery."
            }
            ]
        }, {
            name: "HTML Games",
            type: "tileblock",
            blurb: "Games are a great way for customers to interact with the brand and messaging and have a great time doing it. We can build attractive and addictive games in HTML - see some examples below.",
            id: "htmlgames",
            items: [{
                name: "Connection",
                image: "game3.jpg",
                link: "http://connection.ivank.net/",
                shadowbox:false
            }, {
                name: "Vector Runner Remix",
                image: "game2.jpg",
                link: "http://www.kongregate.com/games/DigYourOwnGrave/vector-runner-remix",
                shadowbox:false
            }, {
                name: "Circle Game",
                image: "game1.jpg",
                link: "http://sysach.com/circle-game",
                shadowbox:false
            }
            ]
        }, {
            name: "3D Animations",
            type: "fullblock",
            blurb: "Your next project or campaign could probably benefit from some lovely 3D art. We can model complex forms and create animations in house.",
            id: "3danimation",
            items: [{
                name: "iPhone Rendering",
                image: "3d-iphone.jpg",
                description: "This 3D model of an iPhone 4s demonstrates how we can create models of devices and products and display them beautifully from 360 degrees.",
                link: "3d/iPhone.html",
                shadowbox:true,
                width: 1280,
                height: 720
            }, {
                name: "Power of Design",
                image: "3d-pod.jpg",
                description: "This animation was created for the Publicis Power of Design discussion series and is a stunning example of our skill with 3D animation.",
                link: "3d/pod.html",
                shadowbox:true,
                width: 960,
                height: 540
            }
            ]
        }, {
            name: "CSS Animations",
            type: "tileblock",
            blurb: "CSS can create amazing lightweight and interactive 3D animations without the need for Flash plugins or video players. See below for a few examples of what can be done.",
            id: "css-animation",
            items: [{
                name: "3D Clouds",
                image: "cssan2.jpg",
                link: "http://www.clicktorelease.com/code/css3dclouds/"
            }, {
                name: "Solar System",
                image: "cssan1.jpg",
                link: "http://codepen.io/juliangarnier/pen/idhuG"
            }, {
                name: "Opening Book",
                image: "cssan3.jpg",
                link: "http://codepen.io/fbrz/pen/whxbF"
            }
            ]
        }, {
            name: "2D Animation",
            type: "tileblock",
            blurb: "2D animation can create many unique and attractive styles for your campaign.",
            id: "2danimation",
            items: [{
                name: "Bumpershoot Characters",
                image: "animate4.jpg",
                link: "animation/Bumbershoot980x400.swf",
                shadowbox:true,
                width: 980,
                height: 400
            }, {
                name: "Seattle Symphony",
                image: "animate2.jpg",
                link: "animation/2d-2.swf",
                shadowbox:true,
                width: 300,
                height: 250
            }, {
                name: "Monthly 4G (animatic)",
                image: "animate8.jpg",
                link: "animation/Animatic.swf",
                shadowbox:true,
                width: 1200,
                height: 650
            }
            ]
        }, {
            name: "Flash Takeover Ads",
            type: "tileblock",
            blurb: "Flash ads that break forth and dominate the page are sure to get attention.",
            id: "flash-takeover",
            items: [{
                name: "Homepage Takeover",
                image: "take9.jpg",
                link: "flashtakeover/take9.html",
                shadowbox:true,
                width: 1440,
                height: 904
            }, {
                name: "Span Two Placements",
                image: "take2.jpg",
                link: "flashtakeover/take2.swf",
                shadowbox:true,
                width: 998,
                height: 496
            }, {
                name: "3D Pop Out",
                image: "take5.jpg",
                link: "flashtakeover/take5.swf",
                shadowbox:true,
                width: 1077,
                height: 700
            }, {
                name: "Breakout Ad",
                image: "take1.jpg",
                link: "flashtakeover/take1.html",
                shadowbox:true,
                width: 900,
                height: 678
            }, {
                name: "Breakout Ad",
                image: "take6.jpg",
                link: "flashtakeover/take6.swf",
                shadowbox:true,
                width: 1189,
                height: 973
            }, {
                name: "Breakout Ad",
                image: "take11.jpg",
                link: "flashtakeover/take11.html",
                shadowbox:true,
                width: 984,
                height: 702
            }
            ]
        }, {
            name: "HTML PHOTO EFFECTS",
            type: "tileframe",
            blurb: "Try some of these neat effects for transitioning to photos in HTML ads.",
            id: "HTML-photo-effects",
            items: [{
                name: "BLUR",
                link: "300x250/index-3dGallery.html"
            }, {
                name: "Invert",
                link: "300x250/index-invert.html"
            }, {
                name: "Shrink/Expand",
                link: "300x250/index-shrink.html"
            }
            ]
        }

        ]
    }
});