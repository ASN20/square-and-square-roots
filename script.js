// Square Number and Square Root Finder

// Variables to make code more readable
let sqNumber = document.getElementById("sqNum");
let sqRootNum = document.getElementById("sqRoot");
let resultOfSqNum = document.getElementById("result1");
let resultOfSqRoot = document.getElementById("result2");

// Function for finding Square Number
function sqNum() {
    if (sqNumber.value === "") {
        resultOfSqNum.innerText = "Empty input, please type a number to find square number";
        console.warn(resultOfSqNum.innerText);
    }
    else {
        resultOfSqNum.innerText = ("The Square Number of " + sqNumber.value + " is ") + (Number(sqNumber.value) * Number(sqNumber.value));
    };
};
// Function for finding Square Root
function sqRoot() {
    if (sqRootNum.value === "") {
        resultOfSqRoot.innerText = "Empty input, please type a number to find square Root";
        console.Warn(resultOfSqRoot.innerText);
    }
    else {
        resultOfSqRoot.innerText = ("The Square Root of " + sqRootNum.value + " is ") + (Math.sqrt(sqRootNum.value));
    };
};

//Copyright ASN Tutorials 2022