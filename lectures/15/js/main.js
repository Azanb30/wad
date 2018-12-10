
var person = {
    name: "Azan Arif",
    balance : 129,
    cur : "PKR",
    IBAN : "PKN1234567",
    deposit : function (e,v) {
        if(e.keyCode === 13)
        {
            if (isNaN(v))
            {
                document.getElementById("deposit-msg").innerHTML = "Enter Valid Input";
            }
            else
            {
                document.getElementById("deposit-msg").innerHTML = "";
                person.balance = person.balance + parseInt(v);
                document.getElementById("balance").innerHTML = "";
                document.getElementById("balance").innerHTML = person.balance;
                fun("Deposit",v);
            }
        }
    },
    withdraw : function (e,v) {
        if(e.keyCode === 13)
        {
            if (isNaN(v))
            {
                document.getElementById("withdraw-msg").innerHTML = "Enter Valid Input";
            }
            else
            {
                if (person.balance >= parseInt(v))
                {
                    document.getElementById("withdraw-msg").innerHTML = "";
                    person.balance = person.balance - parseInt(v);
                    document.getElementById("balance").innerHTML = "";
                    document.getElementById("balance").innerHTML = person.balance;
                    fun("Withdraw",v);
                }
                else
                {
                    document.getElementById("withdraw-msg").innerHTML = "Wirthdraw Amount is Bigger";
                }
            }
        }
    }

};

displaydata();
var table = document.getElementById("transaction-table");
function fun(e,v) {
    table.innerHTML += "<tr><td>"+new Date()+"</td><td>" + e +"</td><td>" + v +"</td></tr>";
}
function displaydata() {
    document.getElementById("title").innerHTML = person.name;
    document.getElementById("balance").innerHTML = person.balance;
    document.getElementById("currency").innerHTML = person.cur;
    document.getElementById("IBAN").innerHTML = person.IBAN;
}
