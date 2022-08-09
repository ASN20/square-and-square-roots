<!DOCTYPE html>
<html>
    <head>
        <title>Square and Square Root Finder</title>
        <link rel="stylesheet" href="./style.css" />
	<link rel="icon" href="./favicon.png" />
    </head>
    <body>
        <header id="heading">
            <center>
                <h1>Square and Square Root Finder</h1>
                <p>Made By ASN Tutorials</p>
            </center>
        </header>
        <main class="main-content">
            <div class="inner-content">
                <h2 class="inner-heading">Find Square Number</h2>
                <input type="tel" class="input-box" id="sqNum" value="" />
                <br />
                <button onclick="sqNum()" class="btn">Find Square Number</button>
                <br />
                <p class="result" id="result1"></p>
            </div>
            <div class="inner-content">
                <h2 class="inner-heading">Find Square Root</h2>
                <input type="text" class="input-box" id="sqRoot" value="" />
                <br />
                <button onclick="sqRoot()" class="btn">Find Square Root</button>
                <br />
                <p class="result" id="result2"></p>
            </div>
            <p>Note: Result will be Nan if you type a letter such as a, b, c, etc or special symbols such as %, #, @ or & Only Type a Number to avoid this error.</p>
        </main>
    </body>
    <script src="./script.js"></script>
</html>