<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookie Constent Box</title>
        <link rel="stylesheet" href="css/cookie.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="content">
                <header>Cookies Constent</header>
                <p>This website use cookies to ensure you get the best experience on our website.</p>
                <div class="buttons">
                    <button class="item">I understand</button>
                    <a href="#" class="item">Learn more</a>
                </div>
            </div>
        </div>
        <script>
            const cookieBox = document.querySelector(".wrapper");
            acceptBtn =cookieBox.querySelector(".buttons button");

            acceptBtn.onclick = () => {
                //Set cookie for 1 month
                //Cookie will be expired automatically
                document.cookie = "CookieBy=PeiYing; max-age"+60*60*24*30;
                cookieBox.classList.add("hide");
            
                //if the above cookie set
                if(document.cookie) {
                    //hide cookie box once cookie set
                    cookieBox.classList.add("hide");
                }

                else {
                    alert("Cookie can't be set!");
                }
            }

            //Hide cookie box if cookie is set and not expired
            //check set cookie
            let checkCookie = document.cookie.indexOf("CookieBy=PeiYing");
            
            //if cookie is set then hide else show
            checkCookie != -1 ? cookieBox.classList.add("hide"):cookieBox.classList.remove("hide");
        
        </script>
    </body>
</html>
