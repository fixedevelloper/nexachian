var lottery = function () {
    'use strict';
    const initialiseABI = function () {
        const contractAddress="0x1e6aEF4108285fCE8F853f5bcc3a29AB55816e5A"
        const abi=[{"inputs":[{"internalType":"uint256","name":"_participationFee","type":"uint256"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[],"name":"Admin","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_newOwner","type":"address"}],"name":"ChangeOwner","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address payable","name":"_To","type":"address"},{"internalType":"uint256","name":"_amount","type":"uint256"}],"name":"Checkupdate","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"GetEarningRate","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"NumberOfParticipants","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"RemoveAdmin","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"_newAdmin","type":"address"}],"name":"SetAdmin","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_amount","type":"uint256"}],"name":"checkUpdate","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"creator","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"currentWinners","outputs":[{"internalType":"address payable","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"findCurrentWinners","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"generateRandomNumber","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"generatedNumberPairs","outputs":[{"internalType":"uint256","name":"number1","type":"uint256"},{"internalType":"uint256","name":"number2","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getCurrentBalance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getLastFiveWinners","outputs":[{"components":[{"internalType":"address","name":"winnerAddress","type":"address"},{"internalType":"uint256","name":"amountWon","type":"uint256"}],"internalType":"struct NEXA_ROYALTY_LOTTERY.Winner[]","name":"","type":"tuple[]"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getPreviousNumberPair","outputs":[{"internalType":"uint256","name":"","type":"uint256"},{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getTotalDistributedAmount","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getcurrentWinners","outputs":[{"internalType":"address payable[]","name":"","type":"address[]"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"hasParticipated","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"lastFiveWinners","outputs":[{"internalType":"address","name":"winnerAddress","type":"address"},{"internalType":"uint256","name":"amountWon","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"lastTimeStamp","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"numbersChoices","outputs":[{"internalType":"uint8","name":"number1","type":"uint8"},{"internalType":"uint8","name":"number2","type":"uint8"},{"internalType":"uint8","name":"number3","type":"uint8"},{"internalType":"uint8","name":"number4","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"participants","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"participationFee","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint8","name":"_number1","type":"uint8"},{"internalType":"uint8","name":"_number2","type":"uint8"},{"internalType":"uint8","name":"_number3","type":"uint8"},{"internalType":"uint8","name":"_number4","type":"uint8"}],"name":"pick4Numbers","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_newUint","type":"uint256"}],"name":"set","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"_newCreator","type":"address"}],"name":"setCreator","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_fee","type":"uint256"}],"name":"setParticipationFee","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"totalDistributedAmount","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"stateMutability":"payable","type":"receive"}]
        var balance_MAIN = "4000000000000000";
        const contract = new web3.eth.Contract(abi, contractAddress)
        return {
            'address':contractAddress,
            'abi':abi,
            'balance_MAIN':balance_MAIN,
            'contract':contract
        }
    };
    const getAccount= async function(){
        const accounts = await window.web3.eth.getAccounts();
        return accounts[0];
    };
    const initialiseEtheruim = async function () {
        if (window.ethereum) {
            window.web3 = new Web3(ethereum);
            try {
                /*await ethereum.request({
                    method: 'eth_requestAccounts'
                });*/
                var networkid = await web3.eth.net.getId()
                if (networkid !== 56) {
                    alert('Connect to BNB Mainnet Network');
                } else {
                    var id_user = $('#id_user_smart').text();
                }
        console.log(networkid)
            } catch (error) {
                $('#spinner_dashboard').hide()
                alert('Error: Out of Gas: please reload this page')
                console.log(error)
            }
        } else if (window.web3) {
            window.web3 = new Web3(web3.currentProvider);
            web3.eth.sendTransaction({/* ... */});
        } else {
            alert('Requires ETH purse to interact smart contract You should consider trying MetaMask!');

        }
    };
    const initialiseContract=async function(){
        var account= await lottery.getAccount()
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
        var balance = await window.mxgfcontract.methods.idToAddress(account).call();
    };
    const register=async function(){
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
    };
    const login=async function(){
        var account= await lottery.getAccount()
        console.log(account)
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
       // window.mxgfcontract.methods.idToAddress(Number.parseInt(1)).call();
    };
    const sendLottery=async function(){
        $('#spinner_send').show();
        var account= await lottery.getAccount()
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().abi, initialiseABI().address);
        const gasEstimated = await window.mxgfcontract.methods.pick4Numbers(array[0],array[1],array[2],array[3]).estimateGas({ from: account,value:4000000000000000 });
        var result = await window.mxgfcontract.methods.pick4Numbers(array[0],array[1],array[2],array[3]).send({
            from: account,
           gasLimit: gasEstimated,
            gas: gasEstimated,
            value:4000000000000000
        });
        if (result.transactionHash) {
            $.ajax({
                url: configs.routes.sendLottory,
                type: "GET",
                dataType: "JSON",
                data: {
                    'numbers':array,
                    'address':account
                },
                success: function (data) {
                    console.log(data)
                    $('#spinner_send').hide();
                    alert("Operation successful!")
                    // window.location.reload(true);
                },
                error: function (err) {
                    $('#spinner_send').hide();
                    alert("An error ocurred while loading data ...");
                }
            });
       }

    }
    return {
        init: function () {
            initialiseEtheruim();
            initialiseABI();
            $('#spinner_send').hide();
        },
        load: function () {
            initialiseEtheruim();
        },
        getAccount,
        register,
        login,
        sendLottery
    }
}();
jQuery(document).ready(function() {
    'use strict';
    lottery.init();

});
jQuery(window).on('load',function () {
    'use strict';
    lottery.load();
});
let array=[]
function getLottoNumber(num) {
    if (!array.includes(num) && array.length<4){
        array.push(num)
        console.log(num)
        $("#lt_"+num).removeClass("btn-primary");
        $("#lt_"+num).addClass("btn-success");
        var idtd = "line_" + num;
        $("#content_lotto").append("<a id='" + idtd + "' onclick='getLottoSelect("+num+")' class='col-sm-2 btn btn-danger badge rounded-circle'>"+num+"</a>")
    }
}
function getLottoSelect(num) {
    line = "#line_" + num;
    const index = array.indexOf(num);
    const x = array.splice(index, 1);
    $("#lt_"+num).addClass("btn-primary");
    $("#lt_"+num).removeClass("btn-success");
    $(line).remove();
}
