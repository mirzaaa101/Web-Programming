// function showNumber(){
//     let number = document.getElementById('number').value;
//     var showLabel = document.getElementById("showLabel");
//     showLabel.innerText = "Result: "+number;
// }

// function getSum(){
//     let number1 = Number(document.getElementById('number1').value);
//     let number2 = parseInt(document.getElementById('number2').value);
//     const sum = number1 + number2;
//     document.getElementById("showLabel").innerText = "Sum = " + sum;
// }

// function red(){
//     document.getElementById('btn').style.backgroundColor = 'red';
// }
// function green(){
//     document.getElementById('btn').style.backgroundColor = 'green';
// }


function getResult(operator){
    let num1 = Number(document.getElementById('num1').value);
    let num2 = Number(document.getElementById('num2').value);
    let result;
    if (operator == '+'){
        result = num1+num2;
    }
    else if (operator == '-'){
        result = num1-num2;
    }
    else if (operator == 'x'){
        result = num1*num2;
    }
    else if (operator == '/'){
        result = num1/num2;
    }
    document.getElementById('show-result').innerText = "Result = "+result;
}