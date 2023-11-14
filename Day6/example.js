function getPipeappleBill(pipeappleCount){
    let each = 12.5;
    let bill = each*pipeappleCount;
    if(pipeappleCount>=1 && pipeappleCount<=9){
        bill = bill*0.9;
    }
    else if(pipeappleCount>=9 && pipeappleCount<=19){
        bill = bill*0.85;
    }
    else if(pipeappleCount>=20){
        bill = bill*0.80;
    }
    return bill;
}

function getLocationTax(location, totalBill){
    newBill = totalBill;
    if(location == 'dhaka'){
        newBill = newBill*1.2;
    }
    else{
        newBill = newBill*1.1;
    }
    return newBill;
}


function showBill(){
    pipeappleCount = Number(document.getElementById('pineapple').value);
    delivaryType = document.getElementById('delivery').checked;
    tip = Number(document.getElementById('tip').value);
    location = document.getElementById('location').value;

    totalBill = 0;
    totalBill = totalBill + getPipeappleBill(pipeappleCount);
    if(delivaryType){
        totalBill = totalBill + 40;
    }
    totalBill = totalBill + tip;
    totalBill = totalBill + getLocationTax(location, totalBill);
    document.getElementById('show').innerText = "Your Total bill is "+totalBill;
}