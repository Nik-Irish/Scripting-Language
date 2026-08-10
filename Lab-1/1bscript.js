// script.js

function testVar() {
    for (var i = 0; i < 3; i++) {
        setTimeout(function() {
            console.log("var: " + i);
        }, 100);
    }
}

function testLet() {
    for (let j = 0; j < 3; j++) {
        setTimeout(function() {
            console.log("let: " + j);
        }, 100);
    }
}

testVar();
testLet();
