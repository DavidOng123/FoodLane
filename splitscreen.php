<!DOCTYPE html>
<html lang="en">
    
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    
    <style>
    html {
         line-height: 1.15; /* 1 */
         -webkit-text-size-adjust: 100%; /* 2 */
       }
    
    /* Sections
       ========================================================================== */
    
    /**
     * Remove the margin in all browsers.
     */
    
    body {
      margin: 0;
    }
    
    /**
     * Render the `main` element consistently in IE.
     */
    
    main {
      display: block;
    }
    
    /**
     * Correct the font size and margin on `h1` elements within `section` and
     * `article` contexts in Chrome, Firefox, and Safari.
     */
    
    h1 {
      font-size: 2em;
      margin: 0.67em 0;
    }
    
    /* Grouping content
       ========================================================================== */
    
    /**
     * 1. Add the correct box sizing in Firefox.
     * 2. Show the overflow in Edge and IE.
     */
    
    hr {
      box-sizing: content-box; /* 1 */
      height: 0; /* 1 */
      overflow: visible; /* 2 */
    }
    
    /**
     * 1. Correct the inheritance and scaling of font size in all browsers.
     * 2. Correct the odd `em` font sizing in all browsers.
     */
    
    pre {
      font-family: monospace, monospace; /* 1 */
      font-size: 1em; /* 2 */
    }
    
    /* Text-level semantics
       ========================================================================== */
    
    /**
     * Remove the gray background on active links in IE 10.
     */
    
    a {
      background-color: transparent;
    }
    
    /**
     * 1. Remove the bottom border in Chrome 57-
     * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
     */
    
    abbr[title] {
      border-bottom: none; /* 1 */
      text-decoration: underline; /* 2 */
      text-decoration: underline dotted; /* 2 */
    }
    
    /**
     * Add the correct font weight in Chrome, Edge, and Safari.
     */
    
    b,
    strong {
      font-weight: bolder;
    }
    
    /**
     * 1. Correct the inheritance and scaling of font size in all browsers.
     * 2. Correct the odd `em` font sizing in all browsers.
     */
    
    code,
    kbd,
    samp {
      font-family: monospace, monospace; /* 1 */
      font-size: 1em; /* 2 */
    }
    
    /**
     * Add the correct font size in all browsers.
     */
    
    small {
      font-size: 80%;
    }
    
    /**
     * Prevent `sub` and `sup` elements from affecting the line height in
     * all browsers.
     */
    
    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline;
    }
    
    sub {
      bottom: -0.25em;
    }
    
    sup {
      top: -0.5em;
    }
    
    /* Embedded content
       ========================================================================== */
    
    /**
     * Remove the border on images inside links in IE 10.
     */
    
    img {
      border-style: none;
    }
    
    /* Forms
       ========================================================================== */
    
    /**
     * 1. Change the font styles in all browsers.
     * 2. Remove the margin in Firefox and Safari.
     */
    
    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit; /* 1 */
      font-size: 100%; /* 1 */
      line-height: 1.15; /* 1 */
      margin: 0; /* 2 */
    }
    
    /**
     * Show the overflow in IE.
     * 1. Show the overflow in Edge.
     */
    
    button,
    input { /* 1 */
      overflow: visible;
    }
    
    /**
     * Remove the inheritance of text transform in Edge, Firefox, and IE.
     * 1. Remove the inheritance of text transform in Firefox.
     */
    
    button,
    select { /* 1 */
      text-transform: none;
    }
    
    /**
     * Correct the inability to style clickable types in iOS and Safari.
     */
    
    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }
    
    /**
     * Remove the inner border and padding in Firefox.
     */
    
    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }
    
    /**
     * Restore the focus styles unset by the previous rule.
     */
    
    button:-moz-focusring,
    [type="button"]:-moz-focusring,
    [type="reset"]:-moz-focusring,
    [type="submit"]:-moz-focusring {
      outline: 1px dotted ButtonText;
    }
    
    /**
     * Correct the padding in Firefox.
     */
    
    fieldset {
      padding: 0.35em 0.75em 0.625em;
    }
    
    /**
     * 1. Correct the text wrapping in Edge and IE.
     * 2. Correct the color inheritance from `fieldset` elements in IE.
     * 3. Remove the padding so developers are not caught out when they zero out
     *    `fieldset` elements in all browsers.
     */
    
    legend {
      box-sizing: border-box; /* 1 */
      color: inherit; /* 2 */
      display: table; /* 1 */
      max-width: 100%; /* 1 */
      padding: 0; /* 3 */
      white-space: normal; /* 1 */
    }
    
    /**
     * Add the correct vertical alignment in Chrome, Firefox, and Opera.
     */
    
    progress {
      vertical-align: baseline;
    }
    
    /**
     * Remove the default vertical scrollbar in IE 10+.
     */
    
    textarea {
      overflow: auto;
    }
    
    /**
     * 1. Add the correct box sizing in IE 10.
     * 2. Remove the padding in IE 10.
     */
    
    [type="checkbox"],
    [type="radio"] {
      box-sizing: border-box; /* 1 */
      padding: 0; /* 2 */
    }
    
    /**
     * Correct the cursor style of increment and decrement buttons in Chrome.
     */
    
    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
      height: auto;
    }
    
    /**
     * 1. Correct the odd appearance in Chrome and Safari.
     * 2. Correct the outline style in Safari.
     */
    
    [type="search"] {
      -webkit-appearance: textfield; /* 1 */
      outline-offset: -2px; /* 2 */
    }
    
    /**
     * Remove the inner padding in Chrome and Safari on macOS.
     */
    
    [type="search"]::-webkit-search-decoration {
      -webkit-appearance: none;
    }
    
    /**
     * 1. Correct the inability to style clickable types in iOS and Safari.
     * 2. Change font properties to `inherit` in Safari.
     */
    
    ::-webkit-file-upload-button {
      -webkit-appearance: button; /* 1 */
      font: inherit; /* 2 */
    }
    
    /* Interactive
       ========================================================================== */
    
    /*
     * Add the correct display in Edge, IE 10+, and Firefox.
     */
    
    details {
      display: block;
    }
    
    /*
     * Add the correct display in all browsers.
     */
    
    summary {
      display: list-item;
    }
    
    /* Misc
       ========================================================================== */
    
    /**
     * Add the correct display in IE 10+.
     */
    
    template {
      display: none;
    }
    
    /**
     * Add the correct display in IE 10.
     */
    
    [hidden] {
      display: none;
    }
    
    
    
    body {
        font-family: 'Montserrat', sans-serif;
        font-weight: 300;
        font-size: 14px;
      }


    .wrapper .left,
    .wrapper .right {
          width: 100%;
          height: 50vh;
          position: relative;
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
    }


    .wrapper .image {
          width: 100%;
          height: 100%;
          background-size: cover;
          background-position: center;
          position: absolute;
          top: 0;
          left: 0;
          transition: 0.25s ease all;
    }


    .table {
          background: url('https://cdn1.npcdn.net/image/20200718_534cba.jpg?md5id=93dbe3b58a1bafbb7d581d8244dcaef2&new_width=1000&new_height=1000&sub=1&size=max&w=1637199371');
    }

    .food {
          background: url('https://i.pinimg.com/736x/b6/df/cb/b6dfcbffca345227a74f0777bf94d7fa.jpg');
    }

    
    .wrapper .caption {
          position: relative;
          z-index: 10;
          color: #fff;
          text-align: center;
    }


    .wrapper .caption h1 {
          text-transform: uppercase;
          letter-spacing: 0.25em;
          margin-bottom:1em;
    }


    .wrapper .caption .button {
          background: #000;
          color: #fff;
          padding: 1em 2em;
          text-decoration: none;
          font-weight: 600;
          font-size: 1em;
          text-transform: uppercase;
          letter-spacing: 0.05em;
          transition: 0.25s ease all;
    }


    .wrapper .caption .button:hover {
          background: #ffd346;
          color: #000;
    }


    .wrapper .side::before {
          background: linear-gradient(0deg, rgba(0, 0, 0, 0.6979166666666667) 0%, rgba(0, 0, 0, 0.2721463585434174) 100%);
          width: 100%;
          height: 100%;
          position: absolute;
          top: 0;
          left: 0;
          z-index: 1;
          content: '';
          display: block;
    }


    .wrapper .left:hover .image,
    .wrapper .right:hover .image {
          transform: scale(1.2);
    }

    @media screen and (min-width:1200px) {
          .wrapper {
                display: flex;
          }


          .wrapper .left,
          .wrapper .right {
                width: 50%;
                height: 100vh;
          }

    }
    </style>
</head>


<body>
      <div class="wrapper">
            <div class="side left">
                  <div class="image table"></div>
                  <div class="caption">
                        <h1>RESERVATION TABLE</h1>
                        <a class="button" href="#">BOOK NOW</a>
                  </div>
            </div>
          
            <div class="side right">
                  <div class="image food"></div>
                  <div class="caption">
                        <h1>FOOD & DRINKS & MERCHANDISE</h1>
                        <a class="button" href="shop.php">OUR MENU</a>
                  </div>
            </div>
      </div>         
</body>
</html>