var savingsAccount = {
    title: 'Azan Arif',
    balance: 962155,
    currency: 'PKRS',
    IBAN: 'PKN1234654321',
    deposit: function addMoney(e,amount) {
        document.getElementById("deposit").style.display = "";
        if (e.keyCode === 13)
        {
            if (isNaN(amount))
            {
                document.getElementById("deposit-msg").innerText = "Enter valid Amoumt";
            }
            else
            {
                document.getElementById('deposit').value = '';
                document.getElementById("deposit-msg").innerText = "";
                savingsAccount.balance = savingsAccount.balance + parseInt(amount);
                document.getElementById("balance").innerText = savingsAccount.balance;
                fun("Deposit",amount);
            }
        }
    },
    withdraw: function removeMoney(e,amount) {
        if (e.keyCode === 13)
        {
            if (isNaN(amount))
            {
                document.getElementById("withdraw-msg").innerText = "Enter valid Amoumt";
            }
            else
            {
                if (parseInt(amount)>savingsAccount.balance)
                {
                    document.getElementById("withdraw-msg").innerText = "Enter Amount is bigger than Balance";
                }
                else
                {
                    document.getElementById('withdraw').value = '';
                    document.getElementById("withdraw-msg").innerText = "";
                    savingsAccount.balance = savingsAccount.balance - parseInt(amount);
                    document.getElementById("balance").innerText = savingsAccount.balance;
                    fun("Withdraw",amount);
                }
            }
        }
    }
};
dispplay();
function dispplay() {
    document.getElementById("title").innerText = savingsAccount.title;
    document.getElementById("balance").innerText = savingsAccount.balance;
    document.getElementById("currency").innerText = savingsAccount.currency;
    document.getElementById("IBAN").innerText = savingsAccount.IBAN;
}
function fun(e,amount) {
    var tran = document.getElementById("transaction-table");
    tran.innerHTML += "<td>" + new Date() + "</td>" + "<td>" + e + "</td>"  + "<td>" +parseInt(amount) +"</td>"
}
