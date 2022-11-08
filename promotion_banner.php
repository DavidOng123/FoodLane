<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <style>
            html,
            body {
                margin: 0;
            }
            
            .banner {
                background: lightsteelblue;
            }
            
            .banner__content {
                padding: 12px;
                max-width: 500px;
                margin: 0 auto;
                display: flex;
                align-items: center;
            }
            
            .banner__text {
                flex-grow: 1;
                line-height: 1.4;
                font-family: 'Quicksand', sans-serif;
            }
            
            .banner__close {
                background: none;
                border: none;
                cursor: pointer;
            }
            
            .banner__text,
            .banner__close > span {
                color: #FFF;
            }
        </style>
    </head>
    <body>
        <div class="banner">
            <div class="banner__content">
                <div class="banner__text">
                    <strong>Promotion: </strong> The promotion code is foodlane1 until 12 December 2022.
                </div>
                <button class="banner__close" type="button">
                    <span class="material-icons">
                        close
                    </span>
                </button>
            </div>
        </div>
        <script>
            document.querySelector(".banner__close").addEventListener("click", () => {
                this.closest(".banner").style.display="none";
            });                  
        </script>
    </body>
</html>