function getPineappleBill(pineapple){
    amount = pineapple*12.5;
    if(pineapple>=1 && pineapple<=9){
        amount -= amount*0.1;
    }
    else if(pineapple>=10 && pineapple<=19){
        amount -= amount*0.15;
    }
    else if(pineapple>=20){
        amount -= amount*0.20;
    }
    return amount;
}

function getLocationBill(location, bill){
    amount = 0;
    if(location == 'dhaka'){
        amount += bill*0.40;
    }
    else{
        amount += bill*0.10;
    }
    return amount;
}

function calculateBill(){
    let bill = 0;

    // condition 1
    pineapple = parseInt(document.getElementById('txn').value);
    bill += getPineappleBill(pineapple);

     // condition 2
    homeDelivary = document.getElementById('r').checked;
    if(homeDelivary){
        bill += 40;
    }

     // condition 3
    tip = parseInt(document.getElementById('tip').value);
    bill += tip;

     // condition 4
    let location = document.getElementById('loc').value;
    bill += getLocationBill(location, bill);

    // final bill
    document.getElementById('lbl').innerHTML = bill;
}