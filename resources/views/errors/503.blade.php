<!-- MVP.css quickstart template: https://github.com/andybrewer/mvp/ -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="503 - Service Unavailable" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="Content-Security-Policy" content="default-src * data:;
	script-src 'self' 'unsafe-inline' 'unsafe-eval' *;
	style-src 'self' 'unsafe-inline' *;
	img-src data: *">


    <link rel="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAA6RwvCAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAbrSURBVFhH7ZZrbFTHFYDnce++vevFtSEkDg7B4JryiETxA6yAI2hiUyLn4bY4FSQBjCEBQVqpUgVx0pZQtyWt28YylGfJj2ASopi8gNrIGD+AkqqBFhIhIgimMcRv3927985Mz9y9XrNd17Rq1F/+dlczO+ecmXPnnDlz0RhjjPFfgu02gX1/WTW1L9RZbIhQgSlMH8aoByPlXKpn+h+Xz371uq02ItuOPRnw+gbyGRJLTG5kCsQ1VfF0uAzvkTXzD75nq8WR4Eh1W5mfm30vMdq/kiPmu11DCGlAkIp9tcUp6zZkZhbptijG79qWLtK5tpNhfRI4H4e0J0I941fSn149d98Fe9giTlU6YZo395o0VGIJMDUpp5+C+RcCsRSGjRkYw2xgRrm7PSt1yYNFmetjzrx6YmmF6equghV9YIMwJ7cIUS9wblIwmcuJ6ZDzYkF0J0p56Pm8t05FLaX2bQjU8wqn4RLQRFS4W5OM4JzF/vLZm/KPLXwhv2HmOD51hsoCzdIVRkI5n35xdHfUEqE9bStzTWf3KyDzIUG6VNO/PElLnbIp79iCH8xrLMhOLfG7sO/HsAgSmDl11P3uruZnJtrmwztS21I2ox9/fhae3OHAgeYMc3rRo/Or+m1xjLPirNra9uLbYdRbJM3TlKk5y7+56/T2Uw/9iRG9EGOlJ4gmP/Zs7u5G2ySOnW2lRQOib5ncAkckcHRdwRv75XjMkerWJb/Sce8mLJRIKpkyY3nOzk9sUQKvnSwODtL+Tgi4Qpi7xsvTavvp1XOCCOLkgZ9syD+yxVb9j1HsFpko/ICAbKKCNkkn5LZ18atltjiOsNBllpznwpgNibBII11nZOBl+jiwzwpXdXNxgc713FjwOYu2hEZbwOoNBHdteriuK+YIJNgkTDASDF2Ufw2uJyM1UiXz5V+xpwRn5AdNUBBOZ9DBnPam+LM6LJlCFyGhbx7e8yFMu4V54MFdfv0z6NbFklVgEZYtJWScbDELcjioDI7bqD/MxS2MsWULnjgnh++yPCfCxalwJOhTaSMIt/TBS875YLRns7118SETaY9jrnb+cF7jeDnWeGWPyxLegfPX31oYot1WofLj8cVrct+0+v/O/sKNwxs13L0VahL3svTstfMPXBpO1uaSsrBy84DcbK8Yv2pt3qE/2KIEqpueTNWpiaFYoIp5hztl/TF4x1WGWUAVrr9uzD86K6qZyJ7TKyZ0mddaoeBlwI6dgbIwV47HQpOcdP/bMMllmbAaullT2/7dYlsUA2R4R+t3HtHprYuIfHlDwwNnat9Z7Vmf+3qfKry/lJXIwNrM6pYl+ytFZVyNktSe/d7XulmHrLoZBEqiRwmCTZS4VKpu/nZuhPS1CAJhhEgryFnnQt53TaZcgiXuRdR8AsJXzBH3gGm/20xZ9lzB4SPStuXadnf79Q9aTBGCkwRPyJULmLveFIx8qCLVx6mea1K9XGADihgkKU7e/9zc+hWQX1ZOJeR0zamSQo301DNkwGJDDKmBDXShdPc4eKB8w/z6g7bA4vWTPwreVD56P4JCOZCGUhu4zdZqwD0SODAOBZ5/CnYyOjisFce+9nUpvfyzSkOEn+VYd0fVIHs4vqUQT72H3LNt9SgF79fNReVIYevh5s6GAgIjMvNIiBDHRx4RqCrPqXtnaCeGGNGRIaycaFgxeQD/w4epi0/xPnB56ZxKzRbfkdeOVARDnmv3yn6af2Ln9+fsuGEJRmBURyQZVY0Tegf4QsK4Vjir+/260tKILfpKGa63I5D+s4ZvdYQcxw2BspmiPna5w+mJnNzfZIu/UkbdEfdLrQ2CG9dzMXv6ROVCM++nB+/+hCVnMZ3fzRGZ5HWoNb0Mb0REuSfTHam6qPGJPoGnOejg7i7u2zbNObD3iu5ZRinpNYQ6aU/2jfLS0tKhGyKOhLN+OxFm3K8I0fYxM55yVTad/5uRtoMjNatPSdoboeq8QYF+gSme5VbEtb8PkqNcKPeFiKOM6KbbRI51mnCnDyL3C6aJ4QqjDz/z8YQKe+oERnWECjFACP7Gly8v2uc2w78NczpdjhPEG8IvL3gkxOl9mEU+cIT7dnJEU2DcukR5RLHqkIw8xJ4XZtz1G3h3beGYp8nRkRjVkWSFbRlkeI3zxeaakOJ+VCBhXebwMswRHD8fMtsN4l7VryZtc1F+2oWYGRHo61og+HuIOXzh9RnO7enOrq1w0T2oInQyOnMidzw14zYfz9MEWUCxrgcdtJ7rjPRyZ8bg1sIPpTxpc+NKIbjq86iHsiKs/8/IsdYd6TseRnRmWpL6+RVNOebDbL2L6Jcq0OITlZXYvnn/j8z8ecM055amc/bfMcb4H0Don4pMDEjVZZk4AAAAAElFTkSuQmCC" />
    <style>
:root {
    --border-radius: 5px;
    --box-shadow: 2px 2px 10px;
    --color: #118bee;
    --color-accent: #118bee0b;
    --color-bg: #fff;
    --color-bg-secondary: #e9e9e9;
    --color-secondary: #920de9;
    --color-secondary-accent: #920de90b;
    --color-shadow: #f4f4f4;
    --color-text: #000;
    --color-text-secondary: #999;
    --font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    --hover-brightness: 1.2;
    --justify-important: center;
    --justify-normal: left;
    --line-height: 150%;
    --width-card: 285px;
    --width-card-medium: 460px;
    --width-card-wide: 800px;
    --width-content: 1080px;
}

/*
@media (prefers-color-scheme: dark) {
    :root {
        --color: #0097fc;
        --color-accent: #0097fc4f;
        --color-bg: #333;
        --color-bg-secondary: #555;
        --color-secondary: #e20de9;
        --color-secondary-accent: #e20de94f;
        --color-shadow: #bbbbbb20;
        --color-text: #f7f7f7;
        --color-text-secondary: #aaa;
    }
}
*/

/* Layout */
article aside {
    background: var(--color-secondary-accent);
    border-left: 4px solid var(--color-secondary);
    padding: 0.01rem 0.8rem;
}

body {
    background: var(--color-bg);
    color: var(--color-text);
    font-family: var(--font);
    line-height: var(--line-height);
    margin: 0;
    overflow-x: hidden;
    padding: 1rem 0;
}

footer,
header,
main {
    margin: 0 auto;
    max-width: var(--width-content);
    padding: 2rem 1rem;
}

hr {
    background-color: var(--color-bg-secondary);
    border: none;
    height: 1px;
    margin: 4rem 0;
}

section {
    display: flex;
    flex-wrap: wrap;
    justify-content: var(--justify-important);
}

section aside {
    border: 1px solid var(--color-bg-secondary);
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow) var(--color-shadow);
    margin: 1rem;
    padding: 1.25rem;
    width: var(--width-card);
}

section aside:hover {
    box-shadow: var(--box-shadow) var(--color-bg-secondary);
}

section aside img {
    max-width: 100%;
}

/* Headers */
article header,
div header,
main header {
    padding-top: 0;
}

header {
    text-align: var(--justify-important);
}

header a b,
header a em,
header a i,
header a strong {
    margin-left: 1rem;
    margin-right: 1rem;
}

header nav img {
    margin: 1rem 0;
}

section header {
    padding-top: 0;
    width: 100%;
}

/* Nav */
nav {
    align-items: center;
    display: flex;
    font-weight: bold;
    justify-content: space-between;
    margin-bottom: 7rem;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline-block;
    margin: 0 0.5rem;
    position: relative;
    text-align: left;
}

/* Nav Dropdown */
nav ul li:hover ul {
    display: block;
}

nav ul li ul {
    background: var(--color-bg);
    border: 1px solid var(--color-bg-secondary);
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow) var(--color-shadow);
    display: none;
    height: auto;
    padding: .5rem 1rem;
    position: absolute;
    right: 0;
    top: 1.7rem;
    width: auto;
}

nav ul li ul li,
nav ul li ul li a {
    display: block;
}

/* Typography */
code,
samp {
    background-color: var(--color-accent);
    border-radius: var(--border-radius);
    color: var(--color-text);
    display: inline-block;
    margin: 0 0.1rem;
    padding: 0rem 0.5rem;
    text-align: var(--justify-normal);
}

details {
    margin: 1.3rem 0;
}

details summary {
    font-weight: bold;
}

details summary:focus {
    outline: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    line-height: var(--line-height);
}

mark {
    padding: 0.1rem;
}

ol li,
ul li {
    padding: 0.2rem 0;
}

p {
    margin: 0.75rem 0;
    padding: 0;
}

pre {
    white-space: normal;
}

pre code,
pre samp {
    display: block;
    margin: 1rem 0;
    max-width: var(--width-card-wide);
    padding: 1rem;
}

small {
    color: var(--color-text-secondary);
}

sup {
    background-color: var(--color-secondary);
    border-radius: var(--border-radius);
    color: var(--color-bg);
    font-size: xx-small;
    font-weight: bold;
    margin: 0.2rem;
    padding: 0.2rem 0.3rem;
    position: relative;
    top: -2px;
}

/* Links */
a {
    color: var(--color-secondary);
    font-weight: bold;
    text-decoration: none;
}

a:hover {
    filter: brightness(var(--hover-brightness));
    text-decoration: underline;
}

a b,
a em,
a i,
a strong,
button {
    border-radius: var(--border-radius);
    display: inline-block;
    font-size: medium;
    font-weight: bold;
    line-height: var(--line-height);
    margin: 1.5rem 0 0.5rem 0;
    padding: 1rem 2rem;
}

button {
    font-family: var(--font);
}

button:hover {
    cursor: pointer;
    filter: brightness(var(--hover-brightness));
}

a b,
a strong,
button {
    background-color: var(--color);
    border: 2px solid var(--color);
    color: var(--color-bg);
}

a em,
a i {
    border: 2px solid var(--color);
    border-radius: var(--border-radius);
    color: var(--color);
    display: inline-block;
    padding: 1rem 2rem;
}

/* Images */
figure {
    margin: 0;
    padding: 0;
}

figure img {
    max-width: 100%;
}

figure figcaption {
    color: var(--color-text-secondary);
}

/* Forms */
button:focus,
input:focus,
select:focus,
textarea:focus {
    outline: none;
}

button:disabled,
input:disabled {
    background: var(--color-bg-secondary);
    border-color: var(--color-bg-secondary);
    color: var(--color-text-secondary);
    cursor: not-allowed;
}

button[disabled]:hover {
    filter: none;
}

form {
    border: 1px solid var(--color-bg-secondary);
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow) var(--color-shadow);
    display: block;
    max-width: var(--width-card-wide);
    min-width: var(--width-card);
    padding: 1.5rem;
    text-align: var(--justify-normal);
}

form header {
    margin: 1.5rem 0;
    padding: 1.5rem 0;
}

input,
label,
select,
textarea {
    display: block;
    font-size: inherit;
    max-width: var(--width-card-wide);
}

input[type="checkbox"],
input[type="radio"] {
    display: inline-block;
}

input,
select,
textarea {
    border: 1px solid var(--color-bg-secondary);
    border-radius: var(--border-radius);
    margin-bottom: 1rem;
    padding: 0.4rem 0.8rem;
}

input[readonly],
textarea[readonly] {
    background-color: var(--color-bg-secondary);
}

label {
    font-weight: bold;
    margin-bottom: 0.2rem;
}

/* Tables */
table {
    border: 1px solid var(--color-bg-secondary);
    border-radius: var(--border-radius);
    border-spacing: 0;
    overflow-x: scroll;
    overflow-y: hidden;
    padding: 0;
}

table td,
table th,
table tr {
    padding: 0.4rem 0.8rem;
    text-align: var(--justify-important);
}

table thead {
    background-color: var(--color);
    border-collapse: collapse;
    border-radius: var(--border-radius);
    color: var(--color-bg);
    margin: 0;
    padding: 0;
}

table thead th:first-child {
    border-top-left-radius: var(--border-radius);
}

table thead th:last-child {
    border-top-right-radius: var(--border-radius);
}

table thead th:first-child,
table tr td:first-child {
    text-align: var(--justify-normal);
}

/* Quotes */
blockquote {
    display: block;
    font-size: x-large;
    line-height: var(--line-height);
    margin: 1rem auto;
    max-width: var(--width-card-medium);
    padding: 1.5rem 1rem;
    text-align: var(--justify-important);
}

blockquote footer {
    color: var(--color-text-secondary);
    display: block;
    font-size: small;
    line-height: var(--line-height);
    padding: 1.5rem 0;
}

/* Custom styles */
    </style>

    <title>503 - Service Unavailable</title>
  </head>

  <body>
    <header>
      <nav>
        <a href="https://www.eurogarages.com>
<svg version="1.1" viewBox="0 0 1412 1108" xmlns="http://www.w3.org/2000/svg"><g><g fill="#8cc63f"><path d="m1019.8 
695.79c-21.238-2.0782-27.798-2.917-39.5-5.0505-215.6-39.308-334.81-277.17-236.87-472.62 112.17-223.87 420.46-248.04 566.37-44.411 11.311 15.785 30.5 
48.813 30.5 52.497 0 0.87758-15.857 1.1673-63.885 1.1673h-63.885l-1.6094-2.4564c-15.746-24.031-63.104-56.787-99.761-69.001-166.55-55.492-328.4 
93.969-285.48 263.63 46.947 185.6 291.86 226.98 398.81 67.388 11.505-17.168 29.811-57.71 29.811-66.023 
0-0.29833-72.45-0.54241-161-0.54241h-161v-110h433.96l0.4825 2.25c4.8809 22.762 5.5131 62.957 1.4882 94.621-18.331 144.22-130.74 260.97-273.93 
284.53-20.322 3.3439-59.685 5.466-74.5 4.0162z"/><path d="m327.79 695.36c-228.22-20.082-368.82-255.57-276.88-463.75 89.256-202.1 347.64-261.46 
516.88-118.75 87.102 73.45 132.8 196.62 112.88 304.26l-0.6014 3.25h-446.78v-110h334.85l-2.0084-7.25c-31.078-112.19-151.77-181.2-266.34-152.28-165.43 
41.751-223.26 248.03-103.58 369.48 89.483 90.805 239.76 87.047 322.63-8.0684l7.7354-8.879h63.857c35.121 0 63.857 0.23399 63.857 0.51998 0 
2.962-16.272 31.483-27.088 47.48-65.761 97.258-184.04 154.14-299.41 143.99z"/></g><g fill="#1b75bc"><path d="m489.29 923.38v-90h47.841l0.55813 
2.75c0.30698 1.5125 1.4728 8.375 2.5907 15.25 3.1219 19.199 2.5414 18.247 6.7674 11.103 10.522-17.786 26.919-29.756 43.418-31.693l5.3249-0.62547 
4.4257 27.69c4.8322 30.234 4.8691 29.47-1.4257 29.517-11.954 0.0889-35.341 9.8976-47 19.712l-7 5.8924-0.25925 50.202-0.25925 50.202h-54.982z"/><path 
d="m836.64 1015.9c-17.355-3.1496-29.305-14.605-35.104-33.653-1.4322-4.7044-1.6785-14.252-1.9899-77.135l-0.3553-71.766 55.598 0.53181 0.5 60.5c0.479 
57.964 0.5838 60.667 2.5 64.487 6.6849 13.326 25.993 11.608 
42.446-3.7771l4.0536-3.7903v-117.92h55v180h-48.795l-1.046-6.25c-0.5753-3.4375-1.3538-8.5-1.7301-11.25-0.9701-7.0904-0.9967-7.096-7.122-1.4978-21.267 
19.437-40.246 25.823-63.956 21.52z"/><path d="m681.79 1016.8c-46.929-6.9528-74.5-40.984-74.5-91.955 0-58.124 32.836-93.984 86-93.922 54.177 0.0632 
87.335 37.388 85.709 96.481-1.5926 57.867-44.387 97.222-97.209 89.396z"/><path d="m351.29 1017.8c-72.296-8.6239-111.64-58.505-108.69-137.78 
3.0269-81.181 58.676-130.38 139.91-123.7 25.634 2.1092 62.775 13.505 62.775 19.261 0 1.6807-5.8411 40.947-7.5197 50.55l-0.56557 
3.2356-3.7729-2.3817c-44.701-28.218-94.127-25.345-115 6.6854-17.85 27.397-17.732 80.912 0.23775 107.98 16.328 24.599 50.882 33.436 80.656 
20.627l4.9592-2.1334v-45.754h-22c-12.1 0-22.003-0.3375-22.006-0.75-3e-3 -0.4125-1.5781-10.586-3.5-22.607s-3.4944-22.034-3.4944-22.25 23.85-0.39289 
53-0.39289h53l-6e-3 123.5-8.2467 4.7157c-27.846 15.923-69.581 24.789-99.747 21.191z"/><path d="m993.29 958.69v-124.02l48.438 0.53556 0.7193 4c0.3955 
2.2 1.2344 7.2432 1.8642 11.207l1.145 7.207 9.0472-7.8861c25.303-22.056 56.479-24.357 79.838-5.8933 38.726 30.611 36.064 127.88-4.3352 158.45-19.784 
14.972-54.353 18.811-79.966 8.8786-1.6444-0.6376-1.75 1.2563-1.75 31.383v32.062l-3.25 0.5666c-7.2575 1.2654-49.208 7.524-50.433 7.524-1.0828 
0-1.3174-22.088-1.3174-124.02z"/></g><path d="m1079.9 969.7c16.809-5.7161 26.066-32.111 
21.509-61.324-4.6617-29.879-28.117-38.259-49.7-17.756l-7.3802 7.0104v68.602l5.25 1.957c7.4794 2.788 8.3462 2.9417 17.322 3.0707 5.2054 0.0748 
9.8219-0.47913 13-1.5599z" fill="#fff"/><path d="m701.33 971.38c30.934-8.5938 34.114-78.634 4.2265-93.077-24.25-11.719-44.731 9.1969-44.623 45.57 
0.1027 34.378 16.833 54.053 40.396 47.507z" fill="#fff"/></g></svg>
        </a>
      </nav>
      <h1>503 - Service Unavailable</u></h1>
      <p>The site you are trying to reach is currently unavailable or undergoing maintenance.</p>
      <p>If you expect this service to be online right now or believe this is in error, please <a href="https://support.eurogarages.com">raise a ticket</a></p>
    </header>
  </body>
</html>
