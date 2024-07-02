<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homely Recipes</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Parisienne&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="style.css"/>
    <script src="./js/script.js" defer></script>
    <script src="./js/components/navigation.js" defer></script>
    <script src="./js/components/logo.js" defer></script>
    <!-- <script src="components.js" type="module" defer></script> -->
    <!-- <script src="https://use.fontawesome.com/dfd9be05ae.js"></script> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/8a40d5b2ef.css" /> -->
    <script
      src="https://kit.fontawesome.com/8eeda7b9a9.js"
      crossorigin="anonymous"
      defer
    ></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="navigation container">
          <nav class="navbar navbar-dark bg-dark navbar-expand-xl fixed-top">
            <a href="" class="navbar-brand">Coock Booker</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#cc"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse collapse-horizontal" id="cc">
            <ul class="nav-fill nav-pills navbar-nav nav">
                <li><span class="active"><a href="a">Home</a></span></li>
                <li><a href="a">Recipes</a></li>
                <li><a href="a">About us</a></li>
                <li><a href="a">Donation</a></li>
                <!-- <?php
                    if(isset($_SESSION['name'])){
                        echo '<li><a class="log" href="/Online_Recipe_Management_System/user">'. $_SESSION['name']. '</a></li>';
                    }
                    else {
                        echo '<li><a class="log" href="/Online_Recipe_Management_System/login">Sign in</a></li>';
                    }
                ?>
                 -->
                
            </ul>
            <form class="d-flex" role="search">
                <input type="search" placeholder="Search" aria-label="Search">
                <button type="submit">Search</button>
              </form>
           
        </nav>

          <!-- **** -->
          <div class="search-wrapper-placeholder">
            <div class="wrapper">
              <input
                type="search"
                name="search"
                id="search"
                placeholder="Type to search"
                autocomplete="off"
                data-state="fa-autocomplete"
              />
              <button data-state="fa-search-icon" class="btn-fa-search">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </div>
          <!-- **** -->
          
          <p id="recipeList"></p>
         
        </div>
      </nav>
    </header>

    <main>
      <!-- section - hero -->
      <section class="hero | gap-top-700">
        <div class="hero | container">
          <div class="hero__content | gap-top-800 | flow flow-space-500">
            <h1 class="hero__content__heading | headline-medium">
              A platform for tasty
              <span class="mdc-theme--primary">homemade </span>recipes.
            </h1>
            <p class="hero__content__body | body-medium">
              Sharing experiences with the community where people re-discover
              home-made food, share recipes, and connect with creators like you.
            </p>
           
            <a href="collections" class="btn-secondary">Explore Recipe Collections</a>
          </div>
          <div
            class="recipe-scroll-component | flow flow-space-500"
            data-state="overflow-right"
          >
            <div
              class="hero__images | media-scroller snaps-inline"
              data-state="no-scroll-bg"
            >
              <div class="recipe-card">
                <div class="hero__images__image | media-element">
                  <picture>
                    <source
                      media="(min-width:40em)"
                      srcset="
                        ./assets/images/recipes/fish-curry-fish-curry-special.jpeg
                      "
                    />
                    <source
                      media="(max-width:41em)"
                      srcset="
                        ./assets/images/recipes/fish-curry-fish-curry-special.jpeg
                      "
                    />
                    <img
                      src="./assets/images/recipes/fish-curry-fish-curry-special.jpeg"
                      width="333"
                      height="460"
                      alt=""
                    />
                  </picture>
                </div>
                <div class="recipe-card__title">
                  <a
                    class="recipe-card__title__name | body-small | chevron--right"
                    href="#"
                  >
                    Breakfirst Special
                  </a>
                </div>
              </div>
              <div class="recipe-card">
                <div class="hero__images__image | media-element">
                  <picture>
                    <source
                      media="(max-width:40em)"
                      srcset="
                        ./assets/images/recipes/chicken-curry-chicken-coorg-curry.jpg
                      "
                    />
                    <source
                      media="(min-width:41em)"
                      srcset="
                        ./assets/images/recipes/chicken-curry-chicken-coorg-curry.jpg
                      "
                    />
                    <img
                      src="./assets/images/recipes/chicken-curry-chicken-coorg-curry.jpg"
                      width="333"
                      height="460"
                      alt=""
                    />
                  </picture>
                </div>
                <div class="recipe-card__title">
                  <a
                    class="recipe-card__title__name | body-small | chevron--right"
                    href="#"
                  >
                    Chicken Coorg Curry
                  </a>
                </div>
              </div>
              <div class="recipe-card">
                <div class="hero__images__image | media-element">
                  <picture>
                    <source
                      media="(max-width:40em)"
                      srcset="
                        ./assets/images/recipes/dessert-bread-and-butter-pudding.jpg
                      "
                    />
                    <source
                      media="(min-width:41em)"
                      srcset="
                        ./assets/images/recipes/dessert-bread-and-butter-pudding.jpg
                      "
                    />
                    <img
                      src="./assets/images/recipes/dessert-bread-and-butter-pudding.jpg"
                      width="333"
                      height="460"
                      alt=""
                    />
                  </picture>
                </div>
                <div class="recipe-card__title">
                  <a
                    class="recipe-card__title__name | body-small | chevron--right"
                    href="#"
                  >
                    Bread & Butter Pudding
                  </a>
                </div>
              </div>
            </div>
            <div class="hero__images media-scroll-arrows |">
              <a href="#">
                <button class="scroll scroll--start" data-state="scroll">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewbox="0 0 24 24"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"
                    ></path>
                  </svg>
                </button>
              </a>
              <a href="#">
                <button class="scroll scroll--start" data-state="scroll">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewbox="0 0 24 24"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"
                    ></path>
                  </svg>
                </button>
              </a>
            </div>
          </div>
          
        </div>
      </section>
      <!-- section - recipes - kitchen -->
      <section>
        <div
          class="recipes | container | gap-top-1000 gap-bottom-1000 flow flow-space-600 | grid"
        >
          <h2 class="recipes__heading display-medium">Featured</h2>
          <!-- <blockquote data-state="display-subheading">“Complete freedom to act as one wishes”</blockquote> -->
          <ul class="recipes__navigation | mdc-theme--tertiary" role="list">
            <li
              class="recipes__navigation__recipe-item sub-headline-medium | active--link"
            >
              <a href="./collections/fish-curry/fish-curry-special.html"
                >Fish Curry</a
              >
            </li>
            <li class="recipes__navigation__recipe-separator">
              <span>|</span>
            </li>
            <li class="recipes__navigation__recipe-item sub-headline-medium">
              <a href="./collections/chicken-curry/chicken-coorg-curry.html"
                >Chicken Curry</a
              >
            </li>
            <li class="recipes__navigation__recipe-separator">
              <span>|</span>
            </li>
            <li class="recipes__navigation__recipe-item sub-headline-medium">
              <a href="./collections/rice-dosas/rice-neer-dosa.html"
                >Rice Dosa</a
              >
            </li>
            <li class="recipes__navigation__recipe-separator">
              <span>|</span>
            </li>
            <li class="recipes__navigation__recipe-item sub-headline-medium">
              <a href="./collections/sooji/sooji-laddu.html">Sooji</a>
            </li>
            <li class="recipes__navigation__recipe-separator">
              <span>|</span>
            </li>
            <li class="recipes__navigation__recipe-item sub-headline-medium">
              <a href="./collections/dessert/bread-butter-pudding.html"
                >Pudding</a
              >
            </li>
          </ul>
          <div class="recipes__recipe-wrapper | gap-top-700">
            <h3
              class="recipes__wrapper__heading | label-wrapper--full-bleed | headline-small mdc-theme--inverse-surface mdc-theme--inverse-on-primary"
            >
              <a href="collections/fish-curry/fish-curry-special.html"
                >Fish Curry Special</a
              >
            </h3>
            <!-- <div class="recipes__wrapper__body | grid"> -->
            <div class="recipes__wrapper__image">
              <img
                src="assets/images/recipes/fish-curry-fish-curry-special.jpeg"
                width="561"
                height="458"
                alt=""
              />
            </div>
            <div
              class="recipes__wrapper__content | flex flex--column | flow flow-space-400 |"
            >
              <div class="body-medium">
                The one that never goes out of flavor.
              </div>
              <span class="recipes__wrapper__content__body body-small">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facilis, eum.
              </span>
              <div class="recipes__wrapper__content__serving-info flex-row">
                <label
                  class="recipes__wrapper__content__serving | strong body-small"
                >
                  Serving Size:
                </label>
                <p class="recipes__wrapper__content__serving-value body-small">
                  150 gm
                </p>
              </div>
              <!-- <div
                class="recipes__wrapper__content__nutrition | flex | mdc-theme--on-primary-bg-inverse"
              >
                <div class="recipes__wrapper__contant__nutrition__item">
                  <label
                    class="recipes__wrapper__contant__nutrition__item__label"
                  >
                    Calories
                  </label>
                  <span
                    class="recipes__wrapper__contant__nutrition__item__value"
                  >
                    334 kCal
                  </span>
                </div>
                <div class="recipes__wrapper__contant__nutrition__item">
                  <span
                    class="recipes__wrapper__contant__nutrition__item__label"
                  >
                    Protein
                  </span>
                  <span
                    class="recipes__wrapper__contant__nutrition__item__value"
                  >
                    7gm
                  </span>
                </div>
                <div class="recipes__wrapper__contant__nutrition__item">
                  <span
                    class="recipes__wrapper__contant__nutrition__item__label"
                  >
                    Fats
                  </span>
                  <span
                    class="recipes__wrapper__contant__nutrition__item__value"
                  >
                    12gm
                  </span>
                </div>
                <div class="recipes__wrapper__contant__nutrition__item">
                  <span
                    class="recipes__wrapper__contant__nutrition__item__label"
                  >
                    Carbs
                  </span>
                  <span
                    class="recipes__wrapper__contant__nutrition__item__value"
                  >
                    50gm
                  </span>
                </div>
              </div> -->
            </div>
            <!-- </div> -->
          </div>
        </div>
      </section>
      <!-- section -  featured recipes -->
      <section>
        <div
          class="collections | container | grid place-center | flow flow-space-600"
        >
          <h2 class="recipes__heading | display-medium | flow">
            Carte Blanche
          </h2>
          <!-- [ ] add as hover effect tooltip on h2 -->
          <blockquote
            class="body-small | mdc-theme--tertiary"
            data-state="display-subheading"
          >
            <em>“Complete freedom to act as one wishes”</em>
          </blockquote>

          <!-- ? maybe add group media scrolling of 4 cards in 1 group collection --- to save space? -- can highlight eaach group with a bg-color and text -->
          <div
            class="res-list"
          >
            
              <div class="recipe-card">
                <div class="hero__images__image | media-element">
                  <picture>
                    <source
                      media="(min-width:40em)"
                      srcset="
                        ./assets/images/recipes/chicken-curry-chicken-coorg-curry.jpg
                      "
                    />
                    <source
                      media="(max-width:41em)"
                      srcset="
                        ./assets/images/recipes/chicken-curry-chicken-coorg-curry.jpg
                      "
                    />
                    <img
                      src="./assets/images/recipes/chicken-curry-chicken-coorg-curry.jpg"
                      width="333"
                      height="460"
                      alt=""
                    />
                  </picture>
                </div>
                <div class="recipe-card__title">
                  <a
                    class="recipe-card__title__name | body-small | chevron--right"
                    href="#"
                  >
                    Chicken Curry
                  </a>
                </div>
              </div>
              <div class="recipe-card">
                <div class="hero__images__image | media-element">
                  <picture>
                    <source
                      media="(max-width:40em)"
                      srcset="
                        ./assets/images/recipes/fish-curry-fish-curry-special.jpeg
                      "
                    />
                    <source
                      media="(min-width:41em)"
                      srcset="
                        ./assets/images/recipes/fish-curry-fish-curry-special.jpeg
                      "
                    />
                    <img
                      src="./assets/images/recipes/fish-curry-fish-curry-special.jpeg"
                      width="333"
                      height="460"
                      alt=""
                    />
                  </picture>
                </div>
                <div class="recipe-card__title">
                  <a
                    class="recipe-card__title__name | body-small | chevron--right"
                    href="#"
                  >
                    Fish Curry
                  </a>
                </div>
              </div>
              <div class="recipe-card">
                <div class="hero__images__image | media-element">
                  <picture>
                    <source
                      media="(max-width:40em)"
                      srcset="
                        ./assets/images/recipes/dessert-bread-and-butter-pudding.jpg
                      "
                    />
                    <source
                      media="(min-width:41em)"
                      srcset="
                        ./assets/images/recipes/dessert-bread-and-butter-pudding.jpg
                      "
                    />
                    <img
                      src="./assets/images/recipes/dessert-bread-and-butter-pudding.jpg"
                      width="333"
                      height="460"
                      alt=""
                    />
                  </picture>
                </div>
                <div class="recipe-card__title">
                  <a
                    class="recipe-card__title__name | body-small | chevron--right"
                    href="#"
                  >
                    Dessert
                  </a>
                </div>
              </div>
              <div class="recipe-card">
                <div class="hero__images__image | media-element">
                  <picture>
                    <source
                      media="(max-width:40em)"
                      srcset="./assets/images/recipes/sooji-sooji-laddu.jpg"
                    />
                    <source
                      media="(min-width:41em)"
                      srcset="./assets/images/recipes/sooji-sooji-laddu.jpg"
                    />
                    <img
                      src="./assets/images/recipes/sooji-sooji-laddu.jpg"
                      width="333"
                      height="460"
                      alt=""
                    />
                  </picture>
                </div>
                <div class="recipe-card__title">
                  <a
                    class="recipe-card__title__name | body-small | chevron--right"
                    href="#"
                  >
                    Sooji (Rava) Delicacies
                  </a>
                </div>
              </div>
              <div class="recipe-card">
                <div class="hero__images__image | media-element">
                  <picture>
                    <source
                      media="(max-width:40em)"
                      srcset="./assets/images/collections/snacks.jpg"
                    />
                    <source
                      media="(min-width:41em)"
                      srcset="./assets/images/collections/snacks.jpg"
                    />
                    <img
                      src="./assets/images/collections/snacks.jpg"
                      width="333"
                      height="460"
                      alt=""
                    />
                  </picture>
                </div>
                <div class="recipe-card__title">
                  <a
                    class="recipe-card__title__name | body-small | chevron--right"
                    href="#"
                  >
                    Snacks
                  </a>
                </div>
              
            </div>
          </div>
          <!-- end of new component recipe scroll collection -->
          <div
            class="featured__footer media-scroll-arrows | justify-content--center"
          >
            <a href="#">
              <button class="scroll scroll--start" data-state="scroll">
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewbox="0 0 24 24"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"
                  ></path>
                </svg>
              </button>
            </a>
            <a href="#">
              <button class="scroll scroll--start" data-state="scroll">
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewbox="0 0 24 24"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"
                  ></path>
                </svg>
              </button>
            </a>
          </div>
        </div>
      </section>
      <!-- section -  cta banner -->
      <section>
        <div class="banner | gap-top-1000 | mdc-theme--on-primary-bg-inverse">
          <div class="banner__wrapper | container | grid">
            <div
              class="banner__wrapper__start | flow |W mdc-theme--on-primary-bg-inverse"
            >
              <div class="banner__quote | body-small">
                <blockquote>
                  <span class="strong">Food brings people together</span> on
                  many different levels.
                  <div>
                    It's nourishment of the soul and body:
                    <span class="strong">it's truly love</span>.
                  </div>
                </blockquote>
                <cite class="font-family--cursive"
                  ><a
                    href="https://www.sophisticatedgourmet.com/food-quotes/#:~:text=%E2%80%9CFood%20brings%20people%20together%20on,body%3B%20it's%20truly%20love.%E2%80%9D&text=%E2%80%9CIf%20you%20really%20want%20to,food%20give%20you%20their%20heart.%E2%80%9D"
                    target="_blank"
                    rel="noopener"
                  >
                    – Giada De Laurentiis</a
                  ></cite
                >
              </div>
              <div class="banner__quote | body-small">
                <blockquote>
                  <span class="strong"
                    >... The process of creativity and genius</span
                  >
                  is inherent in human consciousness. As every human has within
                  himself the same essence of consciousness, so is genius a
                  potential that resides within everyone.
                  <div>
                    It
                    <span class="strong"
                      >awaits only the right circumstances</span
                    >
                    to express it.
                  </div>
                </blockquote>
                <cite class="font-family--cursive"
                  ><a
                    href="https://veritaspub.com/dr-hawkins/"
                    target="_blank"
                    rel="noopener"
                  >
                    – Dr. David R. Hawkins</a
                  ></cite
                >
              </div>
              <!-- <div class="title-small title--small">Spreading lorem</div> -->
            </div>
            <div class="banner__wrapper__end | flex flex--column | flow |">
              <h2 class="headline-small | strong">
                Want to be part of the journey?
              </h2>
              <div class="strong">
                Our constant quest for creating delicious experiences starts
                here, with you. Start expressing your genius and creativity now.
              </div>
              <p class="body-small">
                Every part of Homely Recipes (recipes, collections, tips and the
                site itself) springs from our incredible open community of food
                loving contributors. Please join us!
              </p>
              <a href="./contact.html" class="get-involved-cta"
                >Get Involved →</a
              >
              <div class="banner__wrapper__end__blob"></div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="container">
          <div class="footer-content">
              <h3>Contact Us</h3>
              <p>Email:Info@example.com</p>
              <p>Phone:+121 56556 565556</p>
              <p>Address:Your Address 123 street</p>
          </div>
          <div class="footer-content">
              <h3>Quick Links</h3>
               <ul class="list">
                  <li><a href="">Home</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">Services</a></li>
                  <li><a href="">Products</a></li>
                  <li><a href="">Contact</a></li>
               </ul>
          </div>
          <div class="footer-content">
              <h3>Follow Us</h3>
              <ul class="social-icons">
               <li><a href=""><i class="fab fa-facebook"></i></a></li>
               <li><a href=""><i class="fab fa-twitter"></i></a></li>
               <li><a href=""><i class="fab fa-instagram"></i></a></li>
               <li><a href=""><i class="fab fa-linkedin"></i></a></li>
              </ul>
              </div>
      </div>
      <div class="bottom-bar">
          <p>&copy; 2023 coockbooker . All rights reserved</p>
      </div>
  </footer>
    <!-- <span class="logo | footer | mdc-theme--primary"
      ><strong>Homely</strong></span
    > -->
  </body>
</html>
